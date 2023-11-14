<?php

namespace App\Notifications\Post;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Post;

class PostDeletedNotification extends Notification
{
    use Queueable;

    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject($notifiable->email, 'Post Deleted')
            ->markdown('emails.posts.deleted', [
                'user'    => $notifiable,
                'post' => $this->post,
            ]);
    }

   
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
