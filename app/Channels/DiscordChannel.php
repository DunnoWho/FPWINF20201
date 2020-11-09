<?php
namespace App\Channels;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Http;

class DiscordChannel
{
    public function send($notifiable, Notification $notification)
    {
        $data = $notification->toDiscord($notifiable);
        Http::post("https://discord.com/api/webhooks/775284944574087188/P2GV7KocqOql9OwecLe5AU_GDlZrE9GHx4wggDzKZbZhJmQqzV0dd_lx9YCVNc92LXWG",$data);
    }
}
