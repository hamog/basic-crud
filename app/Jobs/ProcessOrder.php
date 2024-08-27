<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessOrder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $orderId;

    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }

    public function handle()
    {
        // Process the order
    }
}

//Example

//Bus::batch([
//    new ProcessOrder($orderId),
//    new SendInvoice($orderId),
//    new NotifyUser($orderId),
//])->then(function (Batch $batch) {
//    // All jobs completed successfully
//    Log::info('All jobs in the batch completed successfully.');
//})->catch(function (Batch $batch, Throwable $e) {
//    // First job failure detected
//    Log::error('A job in the batch failed.', ['error' => $e->getMessage()]);
//})->finally(function (Batch $batch) {
//    // The batch has finished executing
//    Log::info('The batch has finished executing.');
//})->dispatch();
