<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;
class NewNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $user_id;
    public $post_id;
    public $comment;
    // public $date;
    // public $time;
    public function __construct($data=[])
    {
        $this->user_id = $data['user_id'];
        $this->post_id = $data['post_id'];
        $this->comment = $data['comment'];
        // $this->date = date(format:"Y M d",strtotime(Carbon::now()));
        // $this->time = date(format:"h:i A",strtotime(Carbon::now()));


    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['new-notification'];
    }
    public function broadcastAs()
    {
        return 'NewNotification';
    }
}
