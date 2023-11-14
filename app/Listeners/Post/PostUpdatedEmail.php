<?php

namespace App\Listeners\Post;

use App\Notifications\Post\PostUpdatedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;
use App\Models\Project;
use App\Models\Post;

class PostUpdatedEmail
{
    
    public function handle(object $event): void
    {
        $post      = $event->post;
        $project   = $post->project;
        $assignees = $project->assignees()->get();

        Notification::send(
            $assignees,
            new PostUpdatedNotification($post)
        );
    }
}
