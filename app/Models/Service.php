<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'image',
        'icon',
        'status'
    ];
    
    /**
     * Check if service is active
     *
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->status === 'active';
    }
}
