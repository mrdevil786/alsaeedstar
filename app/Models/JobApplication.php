<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = ['job_id', 'name', 'email', 'phone', 'message', 'resume'];

    public function job()
    {
        return $this->belongsTo(JobOpening::class);
    }
}
