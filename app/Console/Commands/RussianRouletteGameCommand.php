<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Cache\Repository as CacheRepository;
use Illuminate\Contracts\Config\Repository as ConfigRepository;

class RussianRouletteGameCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'russian-game:statistics';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get start';

    private  CacheRepository $cacheRepository;
    private  ConfigRepository $configRepository;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(CacheRepository $cacheRepository, ConfigRepository $configRepository)
    {
        parent::__construct();
        $this->cacheRepository = $cacheRepository;
        $this->configRepository = $configRepository;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = rand(1,6);
        $win= rand(1,6);
        $winstatistic= array();
        $losestatistic = array();

        $this->info("User: " . $user);
        $this->info("Winner bullet: " .$win);


        if($user=== $win)
        {
            $this->info("You are winner!");
            $winstatistic++;
        }else {
            $this->info("You are losser!");
            $losestatistic++;
        }


    }
}
