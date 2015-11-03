<?php

namespace app\Listeners;

use App\Events\BlogDeleted;
use Log;

class LogBlogDeleted
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param BlogDeleted $event
     *
     * @return void
     */
    public function handle(BlogDeleted $event)
    {
        Log::info('Blog deleted with id : '.$event->id);
    }
}
