<?php

namespace Marcha\Opcache\Commands;

use Illuminate\Console\Command;
use Marcha\Opcache\CreatesRequest;


class Clear extends Command
{
    use CreatesRequest;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'opcache:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear OPCache';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $response = $this->sendRequest('clear');
        $response->throw();

        if ($response['result']) {
            $this->info('OPcache cleared');
        } else {
            $this->error('OPcache not configured');

            return 2;
        }
    }
}
