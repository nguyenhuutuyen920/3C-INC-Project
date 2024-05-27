<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Introduce extends Model
{
    use HasFactory;
    protected $fillable = [
        'IntroducePageTitle',
        'IntroduceAlias',
        'IntroduceMetaKeyword',
        'IntroduceMetaDescription',
        'IntroduceImage',
        'Title',
        'IntroduceAbtract',
        'IntroduceContent',
        'ViewOrder',
        'IsTypical'
    ];
    protected $primaryKey = 'IntroduceID';
    public function parentCategory()
    {
        return $this->belongsTo(Tab::class, 'TabID');
    }
}
