<?php

namespace App\Observers;

use App\Models\Post;
use Str;

class PostObserver
{
    /**
     * Handle the Post "creating" event.
     */
    public function creating(Post $post)
    {
        $post->slug = Str::slug($post->name, '-');
    }

    /**
     * Handle the Post "creating" event.
     */
    public function updating(Post $post): void
    {
        $post->slug = Str::slug($post->name, '-');
    }
}
