<?php
require_once __DIR__ . '/../autoload.php';

use nestedclass\Class2;
use nestedclass\nestedinnestedclass\Class3;

$class1= new Class1();
$class2 = new Class2();
$class3 = new Class3();
$class1->use_class1();
$class2->use_class2();
$class3->use_class3();
