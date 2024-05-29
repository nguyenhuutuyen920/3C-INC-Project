<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    protected $fillable = [
        'FieldID',
        'FieldParentID',
        'FieldName',
        'SortOrder',
    ];
    protected $primaryKey = 'FieldID';
    public function categories()
    {
        return $this->hasMany(Category::class, 'FieldID');
    }
}
