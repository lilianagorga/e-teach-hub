<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @method static create(array $array)
 * @method static find(string $id)
 */
class Course extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'name',
            'seats',
            'subject_id'
        ];

    public function course(): HasOne
    {
        return $this->hasOne(Course::class, 'subject_id');
    }

}
