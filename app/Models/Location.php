<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address'];

    public function surgeons()
    {
        return $this->belongsToMany(Surgeon::class, 'surgeon_clinic_locations');
    }

    public function surgerySurgeons()
    {
        return $this->belongsToMany(Surgeon::class, 'surgeon_surgery_locations');
    }

    public function cases()
    {
        return $this->hasMany(CaseModel::class);
    }
}
