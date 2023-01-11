<?php 
namespace App\DesignPatterns\Creational\Factory\Plans\Pro;

use App\DesignPatterns\Creational\Factory\Plans\Plan as MasterPlan;


class Plan extends MasterPlan
{
    private const RATE = 100;
    protected array $features = ['Unlimited emails', 'Unlimited contatcs', '24*7 support'];

    public function getRate(): int
    {
        return self::RATE;
    }
}

?>