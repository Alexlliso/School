<?php
/**
 * Created by PhpStorm.
 * User: pau
 * Date: 5/10/15
 * Time: 20:10
 */

namespace Com\Iesebre\Dam2\Alexlliso\Curriculum;


use Com\Iesebre\Dam2\Alexlliso\Persons\Student;

/**
 * Class ClassRoomGroup
 * @package Com\Iesebre\Dam2\Alexlliso\Curriculum
 */
class ClassRoomGroup extends course
{

    public $students = array();

    /**
     * ClassRoomGroup constructor.
     * @param array $students
     */
    public function __construct(array $students)
    {
        $this->students = $students;
    }

    public function  addStudent(Student $student)
    {
        array_push($this->students,$student);
    }

    /**
     * @return array
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param array $students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }

}