<?php

namespace App\Observers;

use App\Models\PostTag;

class PostTagObserver
{
    /**
     * Handle the PostTag "created" event.
     */
    public function created(PostTag $postTag): void
    {
        //
    }

    /**
     * Handle the PostTag "updated" event.
     */
    public function updated(PostTag $postTag): void
    {
        //
    }

    /**
     * Handle the PostTag "deleted" event.
     */
    public function deleted(PostTag $postTag): void
    {
        //
    }

    /**
     * Handle the PostTag "restored" event.
     */
    public function restored(PostTag $postTag): void
    {
        //
    }

    /**
     * Handle the PostTag "force deleted" event.
     */
    public function forceDeleted(PostTag $postTag): void
    {
        //
    }
}
