<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunMkaControl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run-mka-control';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $controller = new \App\Http\Controllers\Mkacontrol();
        
        // $response1 = $controller->cronPaidOrders(request());
        // $response1 = $controller->cronModifyInventorySusOrders(request());
        // $response1 = $controller->cronModifyInventoryStkin(request());
        // $response1 = $controller->cronModifyInventoryStout(request());

        //\Log::info('RunMkaControl command started');
    
        // Your command logic here
        
        //\Log::info('RunMkaControl command completed');
    }
}
