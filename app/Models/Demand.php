<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(string $id)
 */
class Demand extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'title',
            'user_id',
        ];
}
