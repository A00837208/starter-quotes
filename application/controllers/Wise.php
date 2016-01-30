<?php
/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 2016-01-30
 * Time: 12:02 AM
 */
class Wise extends Application {
    function __construct()
    {
        parent::__construct();
    }

    function bingo() {
        //last row
        $record = $this->quotes->last();
        //load content of justone.php
        $this->data['pagebody'] = 'justone';
        //merge the 2 arrays
        $this->data = array_merge($this->data, $record);
        //render the page
        $this->render();
    }


}