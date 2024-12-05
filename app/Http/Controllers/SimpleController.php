<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\Blogs;
use App\Models\Marketplace;
use App\Models\MarketplaceCategory;
use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function getAchrichtenNews()
    {
        $xml = simplexml_load_file('https://www.aerztezeitung.de/medizin.rss');
        $news = [];

        if ($xml && $xml->channel && $xml->channel->item) {
            $count = 0;
            foreach ($xml->channel->item as $item) {
                if ($count >= 15) {
                    break; // Stop once we have 15 items
                }
                foreach ($item as $key => $value) {
                    $news[$count][$key] = (string) $value;
                }
                $count++;
            }
        }
    return view('news_ratgeber.arztezeitung', compact('news'));
    }


    public function getNachrichten()
    {
        $xml = simplexml_load_file('https://www.aend.de/rss/medizin');
        $news = [];

        if ($xml && $xml->channel && $xml->channel->item) {
            $count = 0;
            foreach ($xml->channel->item as $item) {
                if ($count >= 14) {
                    break; // Stop once we have 14 items
                }
                foreach ($item as $key => $value) {
                    $news[$count][$key] = (string) $value;
                }
                $count++;
            }
        }

        return view('news_ratgeber.nachrichten-aerztenachichtendienst', compact('news'));
    }


    public function nachrichtenBundesministeriumFuerGesundheit()
    {
        $xml = simplexml_load_file('https://www.bundesgesundheitsministerium.de/meldungen.xml');
        $news = [];

        if ($xml && $xml->channel && $xml->channel->item) {
            $count = 0;
            foreach ($xml->channel->item as $item) {
                if ($count >= 30) {
                    break; // Stop once we have 30 items
                }
                foreach ($item as $key => $value) {
                    $news[$count][$key] = (string) $value;
                }
                $count++;
            }
        }

        return view('news_ratgeber.nachrichten-bundesministerium-fuer-gesundheit', compact('news'));
    }

    public function getWelcomePage()
    {
        $marketplaces = Marketplace::where('home', 'ja')
        ->get()
        ->map(function ($marketplace) {
            // Get category names by ID
            $marketplace->category1_name = $marketplace->category1 ? MarketplaceCategory::find($marketplace->category1)->name : null;
            $marketplace->category2_name = $marketplace->category2 ?  MarketplaceCategory::find($marketplace->category2)->name : null;
            $marketplace->category3_name = $marketplace->category3 ? MarketplaceCategory::find($marketplace->category3)->name : null;
            $marketplace->category4_name = $marketplace->category4 ? MarketplaceCategory::find($marketplace->category4)->name : null;
    
            return $marketplace;
        });


        $blogs = Blogs::where('home', 'ja')
        ->get()
        ->map(function ($blog) {
            // Get category names by ID
            $blog->category1_name = $blog->category1 ? BlogCategory::find($blog->category1)->name : null;
            $blog->category2_name = $blog->category2 ?  blogCategory::find($blog->category2)->name : null;
            $blog->category3_name = $blog->category3 ? blogCategory::find($blog->category3)->name : null;
            $blog->category4_name = $blog->category4 ? blogCategory::find($blog->category4)->name : null;
    
            return $blog;
        });


        return view('welcome', compact('marketplaces', 'blogs'));
    }
}
