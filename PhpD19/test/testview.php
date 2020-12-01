 <?php
  require_once "vendor/autoload.php";
  use App\classes\Student;
  Student::addition();
  use App\classes\viewClass; // $viewclass=new viewClass;
 $v =viewClass::view();  //  $v=$viewclass->view();

 ?>

 <form action="" method="post" >
     <table>
         <tr>
             <th>Input</th>
             <td> <input name="input" type="text" ></td>
         </tr>
         <tr>
             <th>Number of charecter </th>
             <td> <input name="ncharacter"  value=" <?php echo  $v ['stringsize'] ?> " type="text" ></td>
         </tr>
         <tr>
             <th>Number of word</th>
             <td> <input name="nword" type="text" value=" <?php echo  $v ['stringword'] ?> " ></td>
         </tr>
         <tr>
             <th></th>
             <td> <input name="btn" type="submit" value="Submit" ></td>
         </tr>
     </table>
 </form>
