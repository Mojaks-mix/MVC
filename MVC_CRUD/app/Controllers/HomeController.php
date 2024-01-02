<?php

class HomeController
{

    //~~~~~Methods~~~~~

    public function index($params = [])
    {
        $d['title'] = "Home Page";
        $d['content'] = "Welcome back Mohammad";
        View::load('home',$d);
    }
}
