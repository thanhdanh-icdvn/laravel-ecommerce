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
        'title',
        'description',
        'body'
    ];

    public function authors(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * Scope a query to search for a term in the attributes
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch(Builder $query)
    {
        $searchTerm = request()->search;
        if (!empty($searchTerm)) {
            $query = $query->whereLike(['title', 'description', 'slug', 'created_at', 'updated_at'], $searchTerm);
        }
        return $query;
    }
}
