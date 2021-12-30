<?php

namespace App\Console;

use App\Models\Info\OrderAttr;
use App\Models\Order;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function (){
            $hora = now()->subMinute(10);
            $orders = Order::where('status', 1)->whereTime(OrderAttr::CREATED_AT, '<=', $hora)->get();
            foreach ($orders as $order){
                $items = json_decode($order->content);
                foreach ($items as $item){
                    increase($item);
                }
                $order->status = 5;
                $order->save();
            }
        })->hourly();
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
