<?php

namespace App\Listeners\Backend\User;

use App\Events\Backend\User\UserUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserUpdatedNotifyUser implements ShouldQueue
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
     * @param UserUpdated $event
     *
     * @return void
     */
    public function handle(UserUpdated $event)
    {
        $user = $event->user;
        //
    }
}
