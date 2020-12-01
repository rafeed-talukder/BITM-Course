<?php
 require_once "viewClass.php";
 $viewclass=new viewClass;
 $nn=[
     'stringsize'=>" "
 ];
 $nn=$viewclass->view();
?>

<form action="" method="post" >
    <table>
        <tr>
            <th>Input</th>
            <td> <input name="input" type="text" ></td>
        </tr>
        <tr>
            <th>Number of charecter </th>
            <td> <input name="ncharacter"  value=" <?php echo $nn['stringsize'] ?> " type="text" ></td>
        </tr>
        <tr>
            <th>Number of word</th>
            <td> <input name="nword" type="text" value=" <?php echo $nn['stringword'] ?> " ></td>
        </tr>
        <tr>
            <th></th>
            <td> <input name="btn" type="submit" value="Submit" ></td>
        </tr>
    </table>
</form>