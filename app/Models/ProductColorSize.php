<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'description', 'logo', 'favicon', 'email', 'phone', 'address', 'facebook', 'twitter', 'instagram', 'youtube', 'tiktok'];

    public function productColor()
    {
        return $this->belongsTo(ProductColor::class);
    }

    public function productSize()
    {
        return $this->belongsTo(ProductSize::class);
    }

}
