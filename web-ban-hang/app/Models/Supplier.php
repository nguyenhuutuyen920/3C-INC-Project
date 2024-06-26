<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "CategoryID",
        "SupplierAlias",
        "SupplierMetaKeyword",
        "SupplierMetaDescription",
        "SupplierName",
        "SupplierImage"
    ];
    protected $table = 'supplier';


    public function products() {
        return $this->hasMany(Product::class, 'SupplierID', 'id');
    }
    public function supplier()
    {
        return $this->belongsTo(Category::class, 'CategoryID','CategoryID');
    }
}
