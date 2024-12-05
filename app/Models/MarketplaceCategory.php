<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarketplaceCategory extends Model
{
    public function marketplaces()
    {
        return $this->hasMany(Marketplace::class);
    }
}
