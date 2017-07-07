<?php

interface Subject
{
    function attach($observerable);

    function detach($index);

    function notify();
}