<?php

namespace App\Observers;

use App\Models\PostTag;

class PostTagObserver
{
    public function updating(PostTag $postTag): void
    {
        $postTag->slug = \Str::slug($postTag->name, '-');
    }
    public function deleting(PostTag $postTag): void
    {
        $postTag->slug = \Str::slug($postTag->name, '-');
    }

}