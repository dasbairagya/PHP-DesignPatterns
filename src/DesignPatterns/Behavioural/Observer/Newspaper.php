<?php 
namespace App\DesignPatterns\Behavioural\Observer;

use SplSubject;
use SplObserver;
use SplObjectStorage;

class Newspaper implements SplSubject
{
    private $name;
    private $observers;
    private $content;
    # code...
    public function __construct($name)
    {
        $this->observers = new SplObjectStorage();
        $this->name = $name;
    }

    public function attach(SplObserver $observer): void
    {
        //code
        echo $this->name.": {$observer->getName()} has subscibed for {$this->name} <br>";
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        //code
        $this->observers->detach($observer);
         echo $this->name.": {$observer->getName()} has unsubscribed from {$this->name}<br>";
    }

    public function notify(): void
    {
        //code
        foreach ($this->observers as $observer) {
            echo "<em>{$this->name}: Notification sent to {$observer->getName()} </em><br>";
            $observer->update($this);

        }
    }

    public function broadcastNews($content): void
    {
        $this->content = $content;
        $this->notify();

    }

    public function getBroadcastNews()
    {
        return $this->content." ({$this->name})";
    }
}
?>