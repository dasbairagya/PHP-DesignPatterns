<?php 
namespace App\DesignPatterns\Behavioural\Observer;

use SplSubject;
use SplObserver;

class Reader implements SplObserver
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update(SplSubject $subject): void
    {
        dump( $this->name. " is reading breakout news ". $subject->getBroadcastNews());
    }

    public function getName(): string
    {
        return $this->name;
    }
}

?>