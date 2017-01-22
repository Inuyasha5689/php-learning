<?php

/**
 * Todo Application
 *
 *Todo, Comment, User
 */

class Task
{
    protected $description;

    public $completed = false;

    public function __construct($description){
        //Automatically triggered on instantiation
        $this->description = $description;
    }

    public function complete(){
        $this->completed = true;
    }

    public function isComplete(){
        return $this->completed;
    }

     public function description()
    {
        return $this->description;
    }
}

$tasks = [
    new Task('Go to the store'),
    new Task('Finish my homework'),
    new Task('Clean my room')
];

require 'index.view.php';
?>
