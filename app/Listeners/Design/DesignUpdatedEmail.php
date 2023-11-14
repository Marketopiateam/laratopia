<?php

namespace App\Listeners\Design;

use App\Notifications\Design\DesignUpdatedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;
use App\Models\Project;
use App\Models\Design;

class DesignUpdatedEmail
{
     public function handle(object $event): void
    {
        $design      = $event->design;
        $project     = $design->project;
        $assignees   = $project->assignees()->get();

        Notification::send(
            $assignees,
            new DesignUpdatedNotification($design)
        );
    }
}
