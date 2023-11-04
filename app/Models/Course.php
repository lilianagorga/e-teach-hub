<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
            'subject_id',
             'user_id',
        ];

//    public function course(): BelongsTo
//    {
//        return $this->belongsTo(Course::class, 'subject_id');
//    }
      public function subject(): BelongsTo {
          return $this->belongsTo(Subject::class);
      }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
