<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'dob', 'phone'];

    public function cases()
    {
        return $this->hasMany(CaseModel::class);
    }
}
