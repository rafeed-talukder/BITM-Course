<?php
require_once "vendor/autoload.php";  //using composer to autoload all classes
use App\classes\ViewClass;    //object create
$id=$_GET["id"] ;
$studentInforeturnById=ViewClass::getstudentinfoById($id);
$fvalue=mysqli_fetch_assoc($studentInforeturnById);
//print_r($fvalue);
?>

<form action="" method="post" >
    <table>
        <tr>
            <th>Input</th>
            <td> <input name="name" value=" <?php echo $fvalue['name']?>;" type="text" ></td>
        </tr>
        <tr>
            <th>Number of charecter </th>
            <td> <input name="email"  value="<?php echo $fvalue['email']?>; " type="text" ></td>
        </tr>
        <tr>
            <th>Number of word</th>
            <td> <input name="mobile" value="<?php echo $fvalue['mobile']?>;" type="text"></td>
        </tr>
        <tr>
            <th></th>
            <td> <input name="btn" type="submit" value="Update" ></td>
        </tr>
    </table>
</form>