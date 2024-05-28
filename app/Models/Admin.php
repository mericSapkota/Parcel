<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = ['parcel_id'];

    public function parcelDetails()
    {
        return $this->hasMany(ParcelDetails::class);
    }
}
