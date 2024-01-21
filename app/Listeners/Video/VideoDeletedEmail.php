<?php

namespace App\Listeners\Video;

use App\Notifications\Video\VideoDeletedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;
use App\Models\Project;
use App\Models\Video;

class VideoDeletedEmail
{
    public function handle(object $event): void
    {
        $video      = $event->video;
        $project   = $video->project;
        $assignees = $project->assignees()->get();

        Notification::send(
            $assignees,
            new VideoDeletedNotification($video)
        );
    }
}
