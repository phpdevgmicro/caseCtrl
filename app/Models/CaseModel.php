<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class CaseModel extends Model
{
    use HasFactory;

    protected $table = 'cases';

    protected $fillable = ['surgery_location', 'surgeon_id', 'clinic_location', 'description'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function surgeon()
    {
        return $this->belongsTo(Surgeon::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    protected function clearance(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? explode(',', $value) : [],
            set: fn ($value) => !empty($value) ? implode(',', $value) : '',
        );
    }

    protected function painMedication(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? explode(',', $value) : [],
            set: fn ($value) => !empty($value) ? implode(',', $value) : '',
        );
    }

    protected function anesthesia(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? explode(',', $value) : [],
            set: fn ($value) => !empty($value) ? implode(',', $value) : '',
        );
    }

    protected function antibiotics(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? explode(',', $value) : [],
            set: fn ($value) => !empty($value) ? implode(',', $value) : '',
        );
    }

    

}
