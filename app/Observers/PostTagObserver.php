<?php

namespace App\Observers;

use App\Models\PostTag;
use Str;

class PostTagObserver
{
    public function updating(PostTag $postTag): void
    {
        $postTag->slug = Str::slug($postTag->name, '-');
    }

    public function deleting(PostTag $postTag): void
    {
        $postTag->slug = Str::slug($postTag->name, '-');
    }
}
