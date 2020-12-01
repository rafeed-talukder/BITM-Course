<?php


namespace App\classes;


class ViewClass
{
    private function dbconection(){
        $host="localhost";
        $user="root";
        $password="";
        $db="bitm_course";
        $link=mysqli_connect($host,$user,$password,$db);
        return $link;
    }
  function savestudentinfo($data){
//      $link= mysqli_connect("localhost","root","","bitm_course");
//      print_r($link);
      $sql="INSERT INTO studentsd20 (name,email,mobile) VALUES ( '$data[name]','$data[email]',$data[mobile])";
      if (mysqli_query(ViewClass::dbconection(),$sql)){

      }else{
          die("prblm".mysqli_error(ViewClass::dbconection()));
      }
  }

  function getstudentinfo(){
//      $link= mysqli_connect("localhost","root","","bitm_course");
      $sql="SELECT * from studentsd20";
      if (mysqli_query(ViewClass::dbconection(),$sql)){
            $queryValue=mysqli_query(ViewClass::dbconection(),$sql);
            return $queryValue;
      }else{
          die("prblm".mysqli_error(ViewClass::dbconection()));
      }
  }

  function getstudentinfoById($id){
//      $link= mysqli_connect("localhost","root","","bitm_course");
      $sql="SELECT * from studentsd20 WHERE id='$id'";
      if (mysqli_query(ViewClass::dbconection(),$sql)){
          $queryValue=mysqli_query(ViewClass::dbconection(),$sql);
          return $queryValue;
      }else{
          die("prblm".mysqli_error(ViewClass::dbconection()));
      }
  }
}