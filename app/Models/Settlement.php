<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settlement extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'zone', 'settlement_type'];

    /**
     * Relationships
     */
    public function zipCodes()
    {
        return $this->belongsToMany(ZipCode::class);
    }
}
