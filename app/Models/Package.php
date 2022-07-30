<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table = 'packages';
    protected $append =['service'];
    protected $fillable = ['name','category','price','content','service','photo','status','addedby'];
    
    public function setServiceAttribute($value)
    {
        $this->attributes['service'] = json_encode($value);
    }

    public function getServiceAttribute($value)
    {
        return $this->attributes['service'] = json_decode($value);
    }
    public function subpackage(){
        return $this->hasMany(Subpackage::class);
    }
    // public function invoice(){
    //     return $this->hasMany(Invoice::class);
    // }
}
