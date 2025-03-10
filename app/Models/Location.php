<?php

namespace App\Models;

use Database\Factories\LocationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Location extends Model
{
    /** @use HasFactory<LocationFactory> */
    use HasFactory;

    protected $guarded = [];

    public function supplier(): HasOne
    {
        return $this->hasOne(Supplier::class);
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
