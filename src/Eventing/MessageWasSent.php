<?php

namespace Musonza\Chat\Eventing;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Musonza\Chat\Models\Message;

class MessageWasSent extends Event
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;
    public $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

}
