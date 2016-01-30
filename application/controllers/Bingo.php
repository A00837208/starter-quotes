<?php

/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 30/01/2016
 * Time: 12:01 AM
 */
class Bingo extends Application
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        //the view being shown
        $this->data['pagebody'] = 'justone';
        //gets the data from quote 5
        $record = $this->quotes->get(5);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}