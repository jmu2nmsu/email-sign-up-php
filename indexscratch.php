<?php

//echo phpinfo();

require_once __DIR__.'/person.php';

$person = new Person('Zura', '28');

echo "Person name is: ". $person->getName();


?> 