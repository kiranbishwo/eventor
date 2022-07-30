<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    protected $fillable = ['user_id','package_id','subpackage_id','amount','pmt_method','buy_date','status'];
    
    public function setServiceAttribute($value)
    {
        $this->attributes['subpackage_id'] = json_encode($value);
        
    }

    public function getServiceAttribute($value)
    {
        return $this->attributes['subpackage_id'] = json_decode($value);
    }

}
