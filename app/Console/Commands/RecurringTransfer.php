<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RecurringTransfer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:recurring-transfer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'execute recurring transfer';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $recurringTransfer = RecurringTransfer::class->all();

        foreach ($recurringTransfer as $transfer) {

        }
    }
}
