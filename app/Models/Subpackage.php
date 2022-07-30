<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subpackage extends Model
{
    use HasFactory;
    protected $table = 'subpackages';
    protected $fillable = ['name','package_id','price','status','addedBy','content'];

    public function package(){
        return $this->belongsTo(Package::class);
    }
    public function vendor(){
        return $this->belongsTo(Vendor::class,'addedBy');
    }
}


