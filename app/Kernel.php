<?php

namespace App;

use App\Config\Config;
use App\Request\Strategy\FileStrategy;
use App\Request\Worker\Worker;

class Kernel
{
    public function run()
    {
        $worker = new Worker;
        $worker->applyConfig(new Config);
        $worker->setStrategy(new FileStrategy);

        $worker->execute();
    }
}