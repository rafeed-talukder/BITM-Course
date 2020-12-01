<?php
require_once "HW1.php";
//print_r($_POST);
$firstNum=$_POST["fastnum"];
$lasttNum=$_POST["lastnum"];

$hw1=new HW1($firstNum,$lasttNum);
$hw1->range();

//for ($firstNum;$firstNum<=$lasttNum;$firstNum++ ){
//    echo $firstNum." ";
//}


?>


<form action=""  method="post">
    <table>
        <tr>
            <th>
                first num
            </th>
            <th>
                <input type="number" name="fastnum">
            </th>

        </tr>

        <tr>
            <th>
                secondnum
            </th>
            <th>
                <input type="number" name="lastnum">
            </th>
        </tr>
        <tr>
            <th>
            </th>
            <th>
                <input type="submit" name="submit" value="submit">
            </th>
        </tr>
    </table>

</form>
