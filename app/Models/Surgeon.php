<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surgeon extends Model
{
    use HasFactory;
    
    public function clinicLocation()
    {
        return $this->belongsToMany(surgeonClinicLocation::class, 'surgeon_id');
    }

    public function surgeryLocation()
    {
        return $this->belongsToMany(surgeonSurgeryLocation::class, 'surgeon_id');
    }
}