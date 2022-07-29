<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subpackage extends Model
{
    use HasFactory;
    protected $table = 'subpackages';
    protected $fillable = ['name','package','price','status','addedBy','content'];
}
