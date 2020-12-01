<?php
require_once "vendor/autoload.php";  //using composer to autoload all classes
use App\classes\ViewClass;    //object create
if (isset($_POST['btn'])){
    ViewClass::savestudentinfo($_POST);    //class call
}

?>

<hr>
<hr>
<a href="addstudent.php">Add Student</a>||
<a href="viewstudent.php">View Student</a>
<hr>
<hr>
<form action="" method="post" >
    <table>
        <tr>
            <th>Input</th>
            <td> <input name="name" type="text" ></td>
        </tr>
        <tr>
            <th>Number of charecter </th>
            <td> <input name="email"  value=" " type="text" ></td>
        </tr>
        <tr>
            <th>Number of word</th>
            <td> <input name="mobile" type="text"></td>
        </tr>
        <tr>
            <th></th>
            <td> <input name="btn" type="submit" value="Submit" ></td>
        </tr>
    </table>
</form>

