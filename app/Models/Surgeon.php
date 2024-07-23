<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surgeon extends Model
{
    use HasFactory;
    
    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id');
    }

    public function clinicLocation()
    {
        return $this->belongsTo(Address::class, 'clinic_location_id');
    }
}