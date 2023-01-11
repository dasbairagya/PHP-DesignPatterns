<?php 
namespace App\DesignPatterns\Creational\Factory;

use App\DesignPatterns\Creational\Factory\Plans\Plan;

/**
 * undocumented class
 */
class PlanFactory 
{
    public function createPlan($plan = 'free'): Plan
    {
        $planName = "App\\DesignPatterns\\Creational\\Factory\\Plans\\". ucwords($plan)."\\Plan";

        if(!class_exists($planName)){
            throw new \Exception('A class with name ' . $planName . ' could not found' );
        }

        return new $planName();
    }
    
}

?>