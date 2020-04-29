<?php

namespace Musonza\Chat\Eventing;

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
