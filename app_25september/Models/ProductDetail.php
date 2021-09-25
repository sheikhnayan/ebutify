<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class ProductDetail extends Model
{
    use HasFactory;

    public function productType()
    {

        return $this->belongsTo(ProductType::class);
    }
    
    public function productLink()
    {

        return $this->hasMany(ProductLink::class);
    }
    
    public function productImage()
    {

        return $this->hasMany(ProductImage::class);
    }
    
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
    
    public function country()
    {
    	return $this->belongsTo(Country::class);
    }

    public function gender()
    {
    	return $this->belongsTo(Gender::class);
    }

    public $sortable = ['id',
                        'explore_pro_type',
                        'total_order',
                        'created_at',
                        'updated_at'];

}
