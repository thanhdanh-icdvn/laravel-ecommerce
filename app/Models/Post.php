<?php

namespace App\Models;

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

    public function scopeSearch($query){
        $searchTerm = request()->search;
        if(!empty($searchTerm)){
            $query = $query->where('title','LIKE','%'.$searchTerm.'%')
            ->orWhere('description','LIKE','%'.$searchTerm.'%')
            ->orWhere('body','LIKE','%'.$searchTerm.'%');
        }
        return $query;
    }
}
