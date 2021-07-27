<?php

namespace App\Request\Worker;

use App\Config\Config;
use App\Request\Strategy\StrategyInterface;

interface WorkerInterface
{
    /**
     * @param Config $config объект настроек
     */
    public function applyConfig(Config $config);

    /**
     * @param StrategyInterface $strategy Интерфейс стратегии обработки заявок
     */
    public function setStrategy(StrategyInterface $strategy);

    /**
     * Метод воркера в котором обрабатываются заявки
     */
    public function execute();
}