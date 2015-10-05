<?php
namespace Com\Iesebre\Dam2\alexlliso\Persons;

/**
 * Created by PhpStorm.
 * User: balrog
 * Date: 5/10/15
 * Time: 18:06
 */
class Teacher extends Person

{
    use Worker;
    public $specialization;

    public function render()
    {
        $this->type = "teacher";
        parent::render() . "and her salary is" . $this->salary;
    }

}