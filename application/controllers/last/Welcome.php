<?php

/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 29/01/2016
 * Time: 11:15 PM
 */
class Welcome extends Application {

    function __construct()
    {
        parent::__construct();
    }

    //
    function index()
    {
        //Gets the last quote
        $quote = $this->quotes->last();
        $this->data = array_merge($this->data, $quote);
        $this->data['pagebody'] = 'justone';

        $this->render();
    }
}