<?php 
    include 'student.php';

    // use App\Controller\Student;    qualified directory / unqualified directory

    $obj = new \App\Controller\Student;
    $name= $obj->name;

    echo $name;
?>