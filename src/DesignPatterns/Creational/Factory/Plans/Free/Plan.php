<?php 
namespace App\DesignPatterns\Creational\Factory\Plans\Free;

use App\DesignPatterns\Creational\Factory\Plans\Plan as MasterPlan;


class Plan extends MasterPlan
{
    private const RATE = 0;
    protected array $features = ['50 emails', '50 contatcs', 'No support'];

    public function getRate(): int
    {
        return self::RATE;
    }
}

?>