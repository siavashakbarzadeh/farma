<?php

namespace Botble\Ecommerce\Events;

use Botble\Base\Events\Event;
use Botble\Ecommerce\Models\Order;
use Illuminate\Queue\SerializesModels;

class OrderCancelledEvent extends Event
{
    use SerializesModels;

    public Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }
}
