<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'email'
    ];

    /**
     * Get the jobs for the candidate.
     */
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
