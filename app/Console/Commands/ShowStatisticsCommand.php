<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Cache\Repository as CacheRepository;
use Illuminate\Contracts\Config\Repository as ConfigRepository;

class ShowStatisticsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'russian-roulette:statistics';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'show losers and winners statistics';

    /**
     * Create a new command instance.
     *
     * @param $cacheRepository
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
        $winstatistic = $this->cacheRepository->get('Winners', []);
        $losestatistic = $this->cacheRepository->get('Losers', []);
        $bulletposition = $this->cacheRepository->get('Bullet position', []);

        $table = [];
        foreach ($winstatistic as $key => $count ) {
            $table[] = [$key, $count ];
        }
        $this->table(['player', 'Winners' ], $table);

        $table = [];
        foreach ($losestatistic as $key => $count ) {
            $table[] = [$key, $count ];
        }
        $this->table(['player', 'Losers' ], $table);

        $table = [];
        foreach ($bulletposition as $key => $count ) {
            $table[] = [$key, $count ];
        }
        $this->table(['bullet', 'position'],$table);

    }
}
