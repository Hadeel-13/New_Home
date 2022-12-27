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
use Illuminate\Support\Facades\Auth;

class NewNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $user_id;
    public $user_name;
    public $post_id;
    public $comment;
    public $rec_user;
    public $comment_id;

    // public $date;
    // public $time;
    public function __construct($data = [])
    {
        $this->user_id = $data['user_id'];
        $this->post_id = $data['post_id'];
        $this->comment = $data['comment'];
        $this->rec_user = $data['rec_user'];
        $this->user_name = $data['user_name'];
        $this->comment_id = $data['comment_id'];


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
        return new Channel('App.Models.User.122');

    }
 
    public function broadcastAs()
    {
        return 'NewNotification';
    }
}
