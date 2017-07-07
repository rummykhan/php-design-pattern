<?php

interface Observer
{
    function handle(Subject $subject);
}