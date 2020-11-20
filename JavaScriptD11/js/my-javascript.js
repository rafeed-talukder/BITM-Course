
var submitbtn =document.getElementById("submitbtn");
submitbtn.onclick= function (){
    // alert("test")

    var firstName=document.getElementById("firstName").value;
    // alert(fullname)

    var lastName=document.getElementById("lastName").value;

    var fullname=firstName+ " " + lastName;
    // alert(fullname);
    document.getElementById("FN").value=fullname;

    // document.getElementById("FN").value=fullname=firstName+ " " + lastName;

}

var add = document.getElementById("add");
add.onclick=function (){
    var firstNumber= Number(document.getElementById("firstNumber").value) ;
    var secondnumber=Number(document.getElementById("secondnumber").value);
    var fullnumber=firstNumber+secondnumber;
    // alert(fullnumber);
    document.getElementById("FinalNumber").value=fullnumber;
}


var sub = document.getElementById("sub");
sub.onclick=function (){
    var firstNumber= Number(document.getElementById("firstNumber").value) ;
    var secondnumber=Number(document.getElementById("secondnumber").value);
    var fullnumber=firstNumber-secondnumber;
    // alert(fullnumber);
    document.getElementById("FinalNumber").value=fullnumber;
}

var mul = document.getElementById("mul");
mul.onclick=function (){
    var firstNumber= Number(document.getElementById("firstNumber").value) ;
    var secondnumber=Number(document.getElementById("secondnumber").value);
    var fullnumber=firstNumber*secondnumber;
    // alert(fullnumber);
    document.getElementById("FinalNumber").value=fullnumber;
}

var division = document.getElementById("division");
division.onclick=function (){
    var firstNumber= Number(document.getElementById("firstNumber").value) ;
    var secondnumber=Number(document.getElementById("secondnumber").value);
    var fullnumber=firstNumber/secondnumber;
    // alert(fullnumber);
    document.getElementById("FinalNumber").value=fullnumber;
}
var reminder = document.getElementById("reminder");
reminder.onclick=function (){
    var firstNumber= Number(document.getElementById("firstNumber").value) ;
    var secondnumber=Number(document.getElementById("secondnumber").value);
    var fullnumber=firstNumber%secondnumber;
    // alert(fullnumber);
    document.getElementById("FinalNumber").value=fullnumber;
}

var Clear = document.getElementById("Clear");
Clear.onclick=function (){
      var clear = document.getElementById("Clear").value;
    var firstNumber= Number(document.getElementById("Clear").value) ;
    var secondnumber=Number(document.getElementById("Clear").value);

    var fullnumber=clear;
    document.getElementById("FinalNumber").value=clear;

}