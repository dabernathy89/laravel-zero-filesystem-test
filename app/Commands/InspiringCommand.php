<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use Storage;

class InspiringCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'inspiring {name=Artisan}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (Storage::exists('test.txt')) {
            $this->info('The file exists, and contains:');
            $this->info(Storage::get('test.txt'));
        } else {
            $this->info('The file does not exist, creating.');
            Storage::put('test.txt', 'test content');
        }
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule)
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
