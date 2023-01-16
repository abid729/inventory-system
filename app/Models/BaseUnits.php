<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseUnits extends Model
{
    protected $table = 'baseunits';
    protected $fillable = ['name'];

    use HasFactory;
}
