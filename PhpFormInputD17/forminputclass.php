<?php


class forminputclass
{

    function inputfield($firstName,$lastName){
        $finalName=$firstName." ".$lastName;
        return $finalName;
    }

    function calculator($data){
//        echo "<pre>";
//        return $finalName;
//        print_r($data);

        $typeofClick=$data['submitbtn'];
        switch ($typeofClick){
            case "+":
                $result=$data["first_num"]+$data["last_num"];
                break;

            case "-":
                $result=$data["first_num"]-$data["last_num"];
                break;

            case "*":
                $result=$data["first_num"]*$data["last_num"];
                break;

            case "/":
                $result=$data["first_num"]/$data["last_num"];
                break;

            case "%":
                $result=$data["first_num"]%$data["last_num"];
                break;
        }
        return $result;

    }

}