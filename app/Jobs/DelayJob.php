<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DelayJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $start;
    /**
     * Create a new job instance.
     */
    public function __construct($start)
    {
        $this->start = $start;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        while ($this->start >= 0) {
            sleep(1);
            $this->start = $this->start - 1;
        }
    }
}
