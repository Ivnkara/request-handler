<?php

namespace App\Config;

class Config {
    /**
     * @var int Количество секунд сна перед обработкой заявки
     */
    protected $sleepPerRequest;

    /**
     * @var string Путь до лог файла с заявками
     */
    protected $logFile;

    /**
     * @var int Количество заявок которое нужно обработать
     */
    protected $requestsAmount;

    public function __construct()
    {
        $this->sleepPerRequest = $_ENV['APP_SLEEP_PER_REQUEST'];
        $this->logFile = $_ENV['APP_LOG_FILE'];
        $this->requestsAmount = $_ENV['APP_REQUESTS_AMOUNT'];
    }

    public function getSleepPerRequest(): int
    {
        return $this->sleepPerRequest;
    }

    public function getLogFile(): string
    {
        return $this->logFile;
    }

    public function getRequestsAmount(): int
    {
        return $this->requestsAmount;
    }
}
