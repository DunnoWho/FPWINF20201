<?php

namespace App\Notifications;

use App\Channels\DiscordChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LinkVisited extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $pesan;
    public function __construct($pesan)
    {
        $this->pesan = $pesan;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        $ret = [];
        foreach (explode(",", $notifiable->channel) as $i) {
            if ($i == "discord") {
                $ret[] = DiscordChannel::class;
            } else {
                $ret[] = $i;
            }
        }
        //dd($ret);
        return $ret;
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    public function toDatabase($notifiable)
    {
        return [
            "judul" => "ini judul notif",
            "isi" => $this->pesan
        ];
    }

    public function toDiscord($notifiable)
    {
        return [
            "content" => $this->pesan,
            "embeds" => [
                [
                    "title" => "JUDUL EMBED",
                    "description" => "Kalo judulnya diklik nanti kalian masuk google",
                    "url" => "https://www.google.com",
                    "color" => 2228479,
                    "author" => [
                        "name" => "****"
                    ],
                    "footer" => [
                        "text" => $notifiable->email
                    ]
                ]
            ]
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
