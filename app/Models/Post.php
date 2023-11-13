<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'body',
        'featured_image',
    ];

    /**
     * Scope a query to search for a term in the attributes.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch(Builder $query)
    {
        $searchTerm = request()->search;
        if (! empty($searchTerm)) {
            $query = $query->whereLike(['name', 'description', 'slug', 'created_at', 'updated_at'], $searchTerm);
        }

        return $query;
    }

    public function author(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }
}
