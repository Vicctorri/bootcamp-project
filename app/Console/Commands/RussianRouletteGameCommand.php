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
    protected $signature = 'russian-roulette:game';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'game of chance';

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
        $bullet = rand(1,6);
        $player = rand(1,6);
        $winstatistic = $this->cacheRepository->get('Winners', []);
        $losestatistic = $this->cacheRepository->get('Losers', []);
        $bulletposition = $this->cacheRepository->get('Bullet position', []);

        $this->info("Bullet: " . $bullet);
        $this->info("Player: " .$player);

        $winstatistic[$player] = $winstatistic[$player] ?? 0;
        $losestatistic[$player] = $losestatistic[$player] ?? 0;
        $bulletposition[$bullet] = $bulletposition[$bullet] ?? 0;

        if($player===$bullet)
        {
            $this->info("You are winner!");
            $winstatistic[$player]++;
        }else {
            $this->info("You are loser!");
            $losestatistic[$player]++;
        };
        $bulletposition[$bullet]++;
        $this->cacheRepository->set('winners', $winstatistic);
        $this->cacheRepository->set('losers', $losestatistic);
        $this->cacheRepository->set('bullet', $bulletposition);

    }
}
