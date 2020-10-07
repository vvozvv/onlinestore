<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'name', 'price', 'category_id', 'description', 'file'];
    public function getCategory()
    {
        return $category = Category::find($this->category_id)->name;
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }



    public function getPriceForCount()
    {
        if (!is_null($this->pivot)) {
            $total = $this->pivot->count * $this->price;
        }
        return $total;
    }

}
