<?php
require_once "vendor/autoload.php";  //using composer to autoload all classes
use App\classes\ViewClass;    //object create
$studentInforeturn=ViewClass::getstudentinfo();

//    echo "<pre>";
//    print_r($studentInfoCatchInfo);
//}

?>

<hr>
<hr>
<a href="addstudent.php">Add Student</a>||
<a href="viewstudent.php">View Student</a>
<hr>
<hr>
<table border="1" width="500" >
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>Email</th>
        <th>Mobile</th>
    </tr>
    <?php while ($studentInfoCatchInfo=mysqli_fetch_assoc($studentInforeturn)){?>
    <tr>
        <td> <?php echo $studentInfoCatchInfo['id'] ?> </td>
        <td><?php echo $studentInfoCatchInfo['name'] ?></td>
        <td><?php echo $studentInfoCatchInfo['email'] ?></td>
        <td><?php echo $studentInfoCatchInfo['mobile'] ?></td>
    </tr>
  <?php } ?>
</table>
