<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';

    protected $fillable = [
        'name',
        'birth_date',
        'phone',
        'disease',
        'room',
        'date',
        'doctor_id'
    ];

    public $timestamps = false;

    function get_doctor()
    {
        return $this->hasOne(Doctor::class, 'id', 'doctor_id');
    }
}
