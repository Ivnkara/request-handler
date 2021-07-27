<?php

namespace App\Request\Strategy;

use LeadGenerator\Lead;

class FileStrategy implements StrategyInterface
{
    /**
     * @var string Файл куда пишем лог заявок
     */
    protected $file;

    public function setFile(string $file)
    {
        $this->file = $file;
    }

    /**
     * @inheritdoc
     */
    public function operate(Lead $lead)
    {
        file_put_contents(__DIR__ . $this->file, $lead->id . '|' . $lead->categoryName . '|' . date('Y-m-d H:i:s') . "\n", FILE_APPEND);
    }
}