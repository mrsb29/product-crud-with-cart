<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Conner\Tagging\Taggable;
class product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id'; 
}
