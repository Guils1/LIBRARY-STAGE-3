<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\PinguimDoLaravelETop;
use Illuminate\Console\Command;

class SendNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send-notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->withProgressBar(
            User::all(),
            fn(User $user) => $user->notify(new PinguimDoLaravelETop)
        );
    }
}
