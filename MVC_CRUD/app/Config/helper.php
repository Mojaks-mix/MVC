<?php

function url($name = ''){
    echo SITE_URL.$name;
}

function redirect($url)
{
    return  SITE_URL.$url;
}