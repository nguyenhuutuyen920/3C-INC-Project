<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'ProjectTitle',
        'BiddingPackage',
        'ConstructionName',
        'Abstract',
        'ProjectContent',
        'ProjectImage',
        'Investors',
        'PricePackage'
    ];
    protected $primaryKey = 'ProjectID';
    
}
