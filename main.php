<?php

use Com\Iesebre\Dam2\Alexlliso\Persons\Person;

require_once __DIR__ . '/vendor/autoload.php';

$person = new Person("Marc");
$person = new Person("Joan");

$person->getGivenName();


