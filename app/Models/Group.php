<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'speciality_id',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
}
