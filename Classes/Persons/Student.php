<?php namespace Com\Iesebre\Dam2\Alexlliso\Persons;

/**
 * Created by PhpStorm.
 * User: balrog
 * Date: 5/10/15
 * Time: 17:50
 */
class Student extends Person
{
    use Worker;

    public $dual = false;

    public $classRoomGroup;

    public function  __construct($dual=null)
    {
        parent::__construct();
        if ($dual != null) {
            $this->dual = $dual;
        }
    }

    public function cobra()
    {
        $this->type = "Alumne";
        if ($this->dual) {
            parent::cobra() . "i cobra" . $this->salary;
        } else {
            parent::cobra();
        }
    }
}