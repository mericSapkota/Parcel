<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParcelDetails extends Model
{
    use HasFactory;
    protected $fillable = ['parcel_id','status','remarks','address','date','time'];

    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
