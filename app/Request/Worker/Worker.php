<?php

namespace App\Request\Worker;

use App\Config\Config;
use App\Request\Strategy\FileStrategy;
use App\Request\Strategy\StrategyInterface;
use LeadGenerator\Generator;
use LeadGenerator\Lead;

class Worker implements WorkerInterface
{
    /**
     * @var Config Настройки приложения
     */
    protected $config;

    /**
     * @var Strategy Стратегия обработки заявок
     */
    protected $strategy;

    /**
     * @inheritdoc
     */
    public function applyConfig(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @inheritdoc
     */
    public function setStrategy(StrategyInterface $strategy)
    {
        if ($strategy instanceof FileStrategy) {
            $strategy->setFile($this->config->getLogFile());
        }

        $this->strategy = $strategy;
    }

    /**
     * @inheritdoc
     */
    public function execute()
    {
        $generator = new Generator();
        $generator->generateLeads($this->config->getRequestsAmount(), function (Lead $lead) {
            sleep($this->config->getSleepPerRequest() ?? 0);
            $this->strategy->operate($lead);
        });
        
    }
}