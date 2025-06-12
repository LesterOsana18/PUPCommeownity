<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Update extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'excerpt',
        'content',
        'image_path',
        'is_approved',
        'user_id',
    ];

    protected $casts = [
        'is_approved' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the user that owns the update.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope to get only approved updates.
     */
    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }

    /**
     * Scope to get only pending updates.
     */
    public function scopePending($query)
    {
        return $query->where('is_approved', false);
    }

    /**
     * Get the full image URL.
     */
    public function getImageUrlAttribute()
    {
        return asset($this->image_path ?? 'images/def-img.svg');
    }

    public function pawedByUsers()
    {
        return $this->belongsToMany(User::class, 'paws')->withTimestamps();
    }
}
