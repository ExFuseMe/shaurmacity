<?php

namespace App\Events;

use App\Models\Cart;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class changeCartPriceEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public int $cart_price;
    public function __construct(Cart $cart)
    {
        $this->cart_price = $cart->dishes()->pluck('price')->sum();
    }
    public function broadcastOn(): array
    {
        return [
            new Channel('cart-price-'.Auth::id()),
        ];
    }
    public function broadcastAs(): string
    {
        return 'user.cart';
    }
    public function broadcastWith(): array
    {
        return ['data'=>$this->cart_price];
    }
}
