<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Cache\Repository as CacheRepository;
use Illuminate\Contracts\Config\Repository as ConfigRepository;

class CacheTestingCommand extends Command
{
    protected $signature = 'my-cache:test';

    protected $description = 'Command description';

    private CacheRepository $cacheRepository;
    private ConfigRepository $configRepository;

    public function __construct(CacheRepository $cacheRepository, ConfigRepository $configRepository)
    {
        parent::__construct();
        $this->cacheRepository = $cacheRepository;
        $this->configRepository = $configRepository;
    }


    public function handle()
    {
        $lastVisit = $this->cacheRepository->get('lastCommandVisit', 'never');

        $this->info("Command called last time: {$lastVisit}");

        $this->cacheRepository->set('lastCommandVisit', date(\DateTime::ATOM), 60);

        $result = $this->ask(
            "Do you know that application is running in {$this->configRepository->get('app.env')} mode?"
        );

        $statistics = $this->cacheRepository->get('knownAnswer', []);
        $statistics[$result] = $statistics[$result] ?? 0;
        $statistics[$result]++;

        $table = [];

        foreach ($statistics as $key => $count) {
            $table[] = [$key, $count];
        }

        $this->table(['answer', 'count'], $table);

        $this->cacheRepository->set('knownAnswer', $statistics);
    }
}
