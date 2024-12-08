<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Fetch all categories from the database and create a map (associative array) by category ID
        $categories = BlogCategory::all()->keyBy('id');
        $categoriesById = $categories->keyBy('id');

        // Start the blog query
        $query = Blogs::query();

        // Apply category filter if a category is selected in the request
        if ($request->category) {
            $category = BlogCategory::where('name', $request->category)->first();
            if ($category) {
                $query->where(function ($q) use ($category) {
                    $q->where('category1', $category->id)
                        ->orWhere('category2', $category->id)
                        ->orWhere('category3', $category->id)
                        ->orWhere('category4', $category->id);
                });
            }
        }
        // Fetch the filtered blog records
        $blogs = $query->get();

        $blogs = $blogs->map(function ($blog) use ($categoriesById) {
            // Add category1_name, category2_name, etc.
            $blog->category1_name = isset($categoriesById[$blog->category1]) ? $categoriesById[$blog->category1]->name : null;
            $blog->category2_name = isset($categoriesById[$blog->category2]) ? $categoriesById[$blog->category2]->name : null;
            $blog->category3_name = isset($categoriesById[$blog->category3]) ? $categoriesById[$blog->category3]->name : null;
            $blog->category4_name = isset($categoriesById[$blog->category4]) ? $categoriesById[$blog->category4]->name : null;

            return $blog;
        });

        // Create an array to hold the unique categories for all marketplaces
        $uniqueCategories = [];

        // Iterate through each marketplace and add its categories to the uniqueCategories array
        $blogs->each(function ($blog) use ($categoriesById, &$uniqueCategories) {
            // Add category1 if it exists and is not already added
            if (isset($categoriesById[$blog->category1]) && !in_array($categoriesById[$blog->category1], $uniqueCategories)) {
                $uniqueCategories[] = $categoriesById[$blog->category1];
            }

            // Add category2 if it exists and is not already added
            if (isset($categoriesById[$blog->category2]) && !in_array($categoriesById[$blog->category2], $uniqueCategories)) {
                $uniqueCategories[] = $categoriesById[$blog->category2];
            }

            // Add category3 if it exists and is not already added
            if (isset($categoriesById[$blog->category3]) && !in_array($categoriesById[$blog->category3], $uniqueCategories)) {
                $uniqueCategories[] = $categoriesById[$blog->category3];
            }

            // Add category4 if it exists and is not already added
            if (isset($categoriesById[$blog->category4]) && !in_array($categoriesById[$blog->category4], $uniqueCategories)) {
                $uniqueCategories[] = $categoriesById[$blog->category4];
            }
        });
        sort($uniqueCategories);        // Sort by 'name' property

        // Return the view with the filtered blogs, categories, and unique categories
        return view('blogs.index', compact('blogs', 'uniqueCategories'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blogCategories = BlogCategory::all();
        return view('blogs.admin.create', compact('blogCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the incoming data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'blog_date' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'content' => 'required|string',
            'category1' => 'nullable|exists:blog_categories,id',
            'category2' => 'nullable|exists:blog_categories,id',
            'category3' => 'nullable|exists:blog_categories,id',
            'category4' => 'nullable|exists:blog_categories,id',
            'slug' => 'required|unique:blogs,slug',  // Corrected validation for unique slug
            'home' => 'nullable|in:ja,nein',

        ]);

        // Handle the image upload (if an image is uploaded)
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/blog_images', 'public');
        }

        // Create a new blog post
        $blog = Blogs::create([
            'slug' => $validated['slug'],
            'title' => $validated['title'],
            'data' => $validated['content'],
            'home' => $validated['home'],
            'blog_date' => $validated['blog_date'],
            'description' => $validated['description'],
            'image' => $imagePath,
            'category1' => $validated['category1'] ?? null,
            'category2' => $validated['category2'] ?? null,
            'category3' => $validated['category3'] ?? null,
            'category4' => $validated['category4'] ?? null,
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.blog.create')->with('success', 'Blog created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $blog = Blogs::where('slug', $slug)->with(['category1Model', 'category2Model', 'category3Model', 'category4Model'])->first();
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blogs::find($id);
        $blogCategories = BlogCategory::all();

        return view('blogs.admin.edit', compact('blog', 'blogCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the existing blog post by ID
        $blog = Blogs::findOrFail($id);

        // Validate the incoming data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'blog_date' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'content' => 'required|string',
            'category1' => 'nullable|exists:blog_categories,id',
            'category2' => 'nullable|exists:blog_categories,id',
            'category3' => 'nullable|exists:blog_categories,id',
            'category4' => 'nullable|exists:blog_categories,id',
            // Exclude the current blog's slug from the uniqueness check
            'slug' => 'required|unique:blogs,slug,' . $blog->id,
            'home' => 'nullable|in:ja,nein', // 'ja' or 'nein'
        ]);

        // Handle image upload (if an image is uploaded)
        $imagePath = $blog->image;  // Use the current image by default
        if ($request->hasFile('image')) {
            // Delete the old image if it exists (optional, depending on your needs)
            if ($blog->image && Storage::exists($blog->image)) {
                Storage::delete($blog->image);
            }
            // Upload new image
            $imagePath = $request->file('image')->store('public/blog_images', 'public');
        }

        // Update the blog post with the validated data
        $blog->update([
            'slug' => $validated['slug'],
            'title' => $validated['title'],
            'data' => $validated['content'],
            'home' => $validated['home'],
            'blog_date' => $validated['blog_date'],
            'description' => $validated['description'],
            'image' => $imagePath,
            'category1' => $validated['category1'] ?? null,
            'category2' => $validated['category2'] ?? null,
            'category3' => $validated['category3'] ?? null,
            'category4' => $validated['category4'] ?? null,
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.blog.edit', $blog->id)->with('success', 'Blog updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blogs::findOrFail($id);

        if ($blog) {
            $blog->delete();
            return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully!');
        }
    }

    public function getAllForAdmin()
    {
        // Fetch all marketplaces from the database
        $blogs = Blogs::all();

        // Process the image URL and categories for each marketplace
        $blogs->each(function ($blog) {


            // Fetch category names for category1, category2, category3, category4
            $blog->category1_name = $blog->category1 ? BlogCategory::find($blog->category1)->name : null;
            $blog->category2_name = $blog->category2 ? BlogCategory::find($blog->category2)->name : null;
            $blog->category3_name = $blog->category3 ? BlogCategory::find($blog->category3)->name : null;
            $blog->category4_name = $blog->category4 ? BlogCategory::find($blog->category4)->name : null;
        });

        // Return the view with the processed marketplace data
        return view('blogs.admin.index', compact('blogs'));
    }
}
