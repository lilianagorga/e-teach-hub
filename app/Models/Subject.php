<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static create(array $array)
 * @method static find(string $id)
 */
class Subject extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'name',
            'user_id',
        ];

//    public function subject(): BelongsTo
//    {
//        return $this->belongsTo(Subject::class, 'subject_id');
//    }

      public function courses(): HasMany {
          return $this->hasMany(Course::class);
      }

      public function user(): BelongsTo {
          return $this->belongsTo(User::class);
      }

}
