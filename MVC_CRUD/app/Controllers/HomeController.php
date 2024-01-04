<?php

class HomeController
{

    //~~~~~Methods~~~~~

    public function index($params = [])
    {
        View::load('home');
    }
}
