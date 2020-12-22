<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;
    protected $fillable = ['name', 'price', 'description', 'image'];

    /**
     * Filter Products
     */
    public function search($filter = null)
    {
        $results = $this->where(function ($query) use ($filter) {
            if ($filter) {
                $query->where('name', 'LIKE', "%{$filter}%");
            }
        }) //->toSql();
            ->paginate();

        return $results;
    }
}
