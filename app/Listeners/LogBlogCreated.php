<?php

namespace app\Listeners;

use App\Events\BlogCreated;
use Log;

class LogBlogCreated
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
     * @param BlogCreated $event
     *
     * @return void
     */
    public function handle(BlogCreated $event)
    {
        Log::info('Blog created with id : '.$event->article->id);
    }
}
