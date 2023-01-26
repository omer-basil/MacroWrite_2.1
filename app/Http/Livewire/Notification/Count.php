<?php

namespace App\Http\Livewire\Notification;

use Livewire\Component;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class Count extends Component
{
    public $count;

    protected $listeners = [
        'markedAsRead' => 'updateCount',
    ];

    public function render(): View
    {
        $this->count = Auth::user()->unreadNotifications()->count();

        return view('livewire.notification.count', [
            'count' => $this->count,
        ]);
    }

    public function updateCount(int $count): int
    {
        return $count;

        $this->emit('markedAsRead', Auth::user()->unreadNotifications()->count());
    }
    
}
