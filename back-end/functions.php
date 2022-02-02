<?php 
function getStudents(){
    return json_decode(file_get_contents('students.json'),true);
}

