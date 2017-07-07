<?php

class NotifyStakeHolders implements Observer
{

    function handle(Subject $loggedIn)
    {
        echo "<hr>";
        echo "Notifying stakeholders..";
    }
}