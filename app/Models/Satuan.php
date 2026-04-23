<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Table(timestamps: false)]
class Satuan extends Model
{
    /** @use HasFactory<\Database\Factories\SatuanFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    protected function satuan(): Attribute
    {
        return Attribute::make(
            set: fn(string $value) => strtoupper($value),
        );
    }
}
