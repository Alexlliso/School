<?php namespace Com\Iesebre\Dam2\Alexlliso\Persons;
/**
 * Created by PhpStorm.
 * User: balrog
 * Date: 5/10/15
 * Time: 18:06
 */

class Teacher extends Person
{
    use Worker;
    
    public $especialization;

    public function render()
    {
        $this->type = "Profesor" . "i cobra" . $this->salary;;
        parent::render();
    }

}