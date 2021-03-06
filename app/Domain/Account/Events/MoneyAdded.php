<?php

namespace App\Domain\Account\Events;

use Spatie\EventSourcing\ShouldBeStored;

final class MoneyAdded implements ShouldBeStored
{
    /** @var int */
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }
}
