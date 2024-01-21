<?php

namespace App\Listeners\Video;

use App\Notifications\Video\VideoUpdatedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;
use App\Models\Project;
use App\Models\Video;

class VideoUpdatedEmail
{
    public function handle(object $event): void
    {
        $video     = $event->video;
        $project   = $video->project;
        $assignees = $project->assignees()->get();

        Notification::send(
            $assignees,
            new VideoUpdatedNotification($video)
        );
    }
}
