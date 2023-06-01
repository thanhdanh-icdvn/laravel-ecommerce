<?php

namespace App\Observers;

use App\Models\PostCategory;

class PostCategoryObserver
{
    public function updating(PostCategory $postCategory): void
    {
        $postCategory->slug = \Str::slug($postCategory->name, '-');
    }
    public function deleting(PostCategory $postCategory): void
    {
        $postCategory->slug = \Str::slug($postCategory->name, '-');
    }
}