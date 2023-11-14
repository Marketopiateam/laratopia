<?php

namespace App\Listeners\Design;

use App\Notifications\Design\DesignDeletedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;
use App\Models\Project;
use App\Models\Design;

class DesignDeletedEmail
{
    public function handle(object $event): void
    {
        $design      = $event->design;
        $project     = $design->project;
        $assignees   = $project->assignees()->get();

        Notification::send(
            $assignees,
            new DesignDeletedNotification($design)
        );
    }
}
