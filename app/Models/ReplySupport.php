<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ReplySupport extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'replies_support';

    protected $fillable = [
        'support_id',
        'user_id',
        'content'

    ];

    protected static function booted()
    {
        static::addGlobalScope('order', function(Builder $builder){
            $builder->latest();
        });
    }

    protected $with = ['user'];

    public function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn (string $createdAt) => Carbon::make($createdAt)->format('d/m/Y H:m')
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function support(): BelongsTo
    {
        return $this->belongsTo(Support::class);
    }
}
