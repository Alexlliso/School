<?php

/**
 * Created by PhpStorm.
 * User: balrog
 * Date: 5/10/15
 * Time: 18:04
 */
class Student extends Person
{
    use Worker;

    public $dual = false;

    public $classroomGroup;

    public function __construct($dual=null)
    {
        parent:: __construct();
        if ($dual != null){
            $this->dual = $dual;
        }
    }

    public function render()
    {
        $this->type = "student";
        if ($this->dual) {
            parent::render() . $this->getGivenName() . "and her salary is" . $this->salary;
        }
        else{
            parent::render() . $this->getGivenName();
        }
    }

}