<?php

class LoggedIn implements Subject
{
    protected $observers;

    function attach($observerable)
    {
        if (is_array($observerable)) {
            return $this->attachObservers($observerable);
        }

        $this->observers[] = $observerable;
    }

    function detach($index)
    {
        unset($this->observers[$index]);
    }

    function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle($this);
        }
    }

    public function attachObservers($observerable)
    {
        foreach ($observerable as $observer) {
            $this->attach($observer);
        }
    }

    public function check()
    {
        // yes logged in.

        $this->notify();
    }
}