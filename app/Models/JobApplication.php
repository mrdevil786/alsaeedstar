<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = ['job_opening_id', 'name', 'email', 'phone', 'message', 'resume'];

    public function jobOpening()
    {
        return $this->belongsTo(JobOpening::class, 'job_opening_id');
    }
}
