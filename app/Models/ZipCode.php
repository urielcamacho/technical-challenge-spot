<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'zip_code',
        'city',
        'municipality',
        'state_id',
    ];

    /**
     * Relationships
     * 
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function settlements()
    {
        return $this->belongsToMany(Settlement::class);
    }
}
