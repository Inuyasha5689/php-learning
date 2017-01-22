<?php

/**
 * Todo Application
 *
 *Todo, Comment, User
 */

class Task
{
<<<<<<< HEAD
    protected $description;

    protected $completed = false;
=======
    public $description;

    public $completed = false;
>>>>>>> decdff8fdc30ab0d33d452ad07d18bc5e0b3ef23

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
<<<<<<< HEAD
    new Task('Go to the store'),
    new Task('Finish my homework'),
    new Task('Clean my room')
];

=======
    new Task('Go to the store'), // 0
    new Task('Finish my homework'), //1
    new Task('Clean my room') //2
];

$tasks[0] -> complete();

>>>>>>> decdff8fdc30ab0d33d452ad07d18bc5e0b3ef23
require 'index.view.php';
?>
