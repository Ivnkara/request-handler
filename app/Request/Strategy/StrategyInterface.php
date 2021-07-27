<?php

namespace App\Request\Strategy;

use LeadGenerator\Lead;

interface StrategyInterface
{
    /**
     * Обрабатываем заявку
     * 
     * @param Lead объект заявки
     */
    public function operate(Lead $lead);
}