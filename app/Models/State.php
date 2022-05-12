<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'name'];

    /**
     * Relationships
     */
    public function zipCodes()
    {
        return $this->hasMany(ZipCode::class);
    }
}
