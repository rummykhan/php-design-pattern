<?php

class EmailUser implements Observer
{

    function handle(Subject $subject)
    {
        echo "<hr>";
        echo "Sending email to user.";
    }
}