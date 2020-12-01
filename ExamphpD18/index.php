<?php
require_once "OddEven.php";
$oddeven=new OddEven();
$result=$oddeven->oddevencheck();
?>

<form action="" method="post">
    <table border="1">
        <tr>
            <th>
                First Num
            </th>
            <td>
                <input type="text" name="fnum" >
            </td>
        </tr>
        <tr>
            <th>
                First Num
            </th>
            <td>
                <input type="text" name="lnum" >
            </td>
        </tr>
        <tr>
            <th>
                Check Button
            </th>
            <td>
                <input type="radio" name="check" value="Odd" >ODD
                <input type="radio" name="check" value="Even" >Even

            </td>
        </tr>
        <tr>
            <th>
                Result
            </th>
            <td>
                <textarea cols="30" rows="5" >
                    <?php   echo $result;     ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <th>

            </th>
            <td>
                <input type="submit" name="btn" value="Submit" >
            </td>
        </tr>

    </table>

</form>