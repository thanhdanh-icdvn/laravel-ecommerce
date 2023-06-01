<?php

namespace App\Observers;

use App\Models\Category;

class CategoryObserver
{
    public function updating(Category $category): void
    {
        $category->slug = \Str::slug($category->name, '-');
    }
    public function deleting(Category $category): void
    {
        $category->slug = \Str::slug($category->name, '-');
    }
}
