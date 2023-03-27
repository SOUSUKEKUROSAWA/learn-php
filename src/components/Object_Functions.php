<?php
    class Student {
        var $name;
        var $major;
        var $gpa;

        function __construct ($cName, $cMajor, $cGpa) {
            $this->name = $cName;
            $this->major = $cMajor;
            $this->gpa = $cGpa;
        }

        function hasHonors () {
            return $this->gpa >= 3.5 ? "true" : "false";
        }
    }

    $student1 = new Student("Jim", "Business", 2.8);
    echo $student1->hasHonors();

    $student2 = new Student("Pam", "Art", 3.6);
    echo "<br>";
    echo $student2->hasHonors();
?>