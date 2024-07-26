<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surgeon extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'specialty'];
    
    public function clinicLocations()
    {
        return $this->belongsToMany(Location::class, 'surgeon_clinic_locations');
    }

    public function surgeryLocations()
    {
        return $this->belongsToMany(Location::class, 'surgeon_surgery_locations');
    }

    public function cases()
    {
        return $this->hasMany(CaseModel::class);
    }
}