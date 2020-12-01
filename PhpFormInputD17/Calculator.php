
<?php
//=========================================================================//

// if (isset($_POST ['submitbtn'] )){
//     $fnum=$_POST['first_num'];
//     $lnum=$_POST['last_num'];
//     $tnum=$fnum+$lnum;
////     echo $tnum;
// }
//if (isset($_POST ['submitbtn2'] )){
//    $fnum=$_POST['first_num'];
//    $lnum=$_POST['last_num'];
//    $tnum=$fnum-$lnum;
////    echo $tnum;
//}
//=========================================================================//

//=========================================================================//
$result="";
if (isset($_POST['submitbtn'])){
    require_once "forminputclass.php";
    $cal=new forminputclass();
    $result= $cal->calculator($_POST);
}

//=========================================================================//

?>

<form action="" method="post" >
    <table>
        <tr>
            <th>
                First Number
            </th>
            <td>
                <input type="text" value="<?php echo $_POST["first_num"];?>"  name="first_num" >
            </td>
        </tr>
        <tr>
            <th>
                Last Number
            </th>
            <td>
                <input type="text" name="last_num" value="<?php echo $_POST["last_num"];?>"  >
            </td>
        </tr>
        <tr>
            <th>
                Final num
            </th>
            <td>
                <input type="text" value=" <?php echo $result; ?>" name="full_name" >
            </td>
        </tr>
        <tr>
            <th>
            </th>
            <td>
                <input type="submit" value="+" name="submitbtn">
                <input type="submit" value="-" name="submitbtn">
                <input type="submit" value="*" name="submitbtn">
                <input type="submit" value="/" name="submitbtn">
                <input type="submit" value="%" name="submitbtn">
            </td>
        </tr>
    </table>
</form>
