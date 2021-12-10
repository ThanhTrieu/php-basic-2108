<?php

function loadView($filename = '')
{
    require 'view/'.$filename.'.php';
}

function index()
{
    loadView('search_view');
}
index();