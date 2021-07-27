<?php

namespace App\Request\Strategy;

use LeadGenerator\Lead;

class BrowserStrategy implements StrategyInterface
{
    /**
     * @inheritdoc
     */
    public function operate(Lead $lead)
    {
        echo $lead->id . '|' . $lead->categoryName . '|' . date('Y-m-d H:i:s') . '</br>';
    }
}