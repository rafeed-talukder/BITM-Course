<?php
  echo "<pre>";

//=========================================================================//
//  print_r($_POST ['first_name'] );first it show a undefined index error bt it will work after submit btn chick
//  print_r($_POST);
//$fname=$_POST['first_name'];
//$lname=$_POST['last_name'];
//$fullname = "full name is:". $fname." ".$lname;
//echo $fullname;
//=========================================================================//

//=========================================================================//
//$fullname="";
//if( isset($_POST['submitbtn']) ){
//    $fname=$_POST['first_name'];
//    $lname=$_POST['last_name'];
//    $fullname = "full name is:". $fname." ".$lname;
////    echo $fullname;
//}
//else {
//    echo     "false";
//}
//=========================================================================//

//=========================================================================//
$forminputclassobjectValue=" ";
if( isset($_POST['submitbtn']) ){
    require "forminputclass.php";
    $forminputclassobject= new forminputclass();
    //create an object of class forminputclass.
    $forminputclassobjectValue=$forminputclassobject->inputfield($_POST['first_name'], $_POST['last_name'] );
    //object $forminputclassobject dia function inputfield re cll kore argument pass kora hoise.ja class er modde jaia concet hoia 1ta value return hobe.R ai value Object er variable $forminputclassobjectvalue te assign hobe.
}
//=========================================================================//

?>

<form action="" method="post" >
    <table>
        <tr>
            <th>
                First Name
            </th>
            <td>
                <input type="text" name="first_name" >
            </td>
        </tr>
        <tr>
            <th>
                Last Name
            </th>
            <td>
                <input type="text" name="last_name" >
            </td>
        </tr>
        <tr>
            <th>
                Full Name
            </th>
            <td>
                <input type="text" value="<?php echo $forminputclassobjectValue; ?>" name="full_name" >
            </td>
        </tr>
        <tr>
            <th>

            </th>
            <td>
                <input type="submit" value="submit" name="submitbtn">
            </td>
        </tr>
    </table>
</form>
