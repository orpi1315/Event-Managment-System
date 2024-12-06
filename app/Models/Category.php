<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $primaryKey = 'cat_id';

    protected $fillable = [
        'cat_name',
        'cat_des',
        'cat_venue',
        'cat_seat',
        'cat_ticket',
        'cat_status',
        
    ];
}


