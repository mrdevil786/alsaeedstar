<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOpening extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'location', 'type', 'status'];

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class, 'job_opening_id');
    }
}
