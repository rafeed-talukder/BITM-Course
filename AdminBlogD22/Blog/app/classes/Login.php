<?php


namespace App\classes;
use App\classes\Database;
//use App\classes\Database;
//use App\classes\Database;

class Login
{
    public function adminLogin($data){
//        echo "<pre>";
//        print_r($data);
        $email=$data['email'];
        $password=md5($data['password']);
        $sql="SELECT * FROM users WHERE email='$email'AND password='$password' ";
       if( mysqli_query( Database::dbconection(),$sql)){
            $queryResult=mysqli_query( Database::dbconection(),$sql);
            $use=mysqli_fetch_assoc($queryResult);
//            each($use);
//            echo '<pre>';
//            print_r($use);

           if ($use){
               header("Location:dashboard.php");
           }else{
               $errorMessageLogin="Please input Valid Email & Password";
//               echo $errorMessageLogin;
               return $errorMessageLogin;
           }
       }
       else{
            die("error".mysqli_error(Database::dbconection(),$sql));
       }

    }
}