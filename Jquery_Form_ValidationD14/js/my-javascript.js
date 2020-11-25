$("#firstNameValue").click( function () {
    $("#firstNameerror").text("Follow the instruction");
} )
$("#firstNameValue").keyup( function () {
    // $("#firstNameerror").text("Input between 6 to 14 Charecter!");
     var firstnameValueLength= $("#firstNameValue").val().length;
     if (firstnameValueLength>=6 && firstnameValueLength<=14){
         $("#firstNameerror").text(" ");
     }
     else{
         $("#firstNameerror").text("Input between 6 to 14 Charecter!");
     }
} );
$("#firstNameValue").blur( function () {
        $("#firstNameerror").text(" ");
} );




$("#lastNameValue").click( function () {
    $("#lasttNameerror").text("Follow the instruction");
} )
$("#lastNameValue").keyup( function () {
    // $("#firstNameerror").text("Input between 6 to 14 Charecter!");
    var lastnameValueLength= $("#lastNameValue").val().length;
    if (lastnameValueLength>=6 && lastnameValueLength<=14){
        $("#lasttNameerror").text(" ");
    }
    else{
        $("#lasttNameerror").text("Input between 6 to 14 Charecter!");
    }
} );
$("#lastNameValue").blur( function () {
    $("#lasttNameerror").text(" ");
} );




$("#emailValue").keyup( function () {
    var emailinputvalue= $("#emailValue").val();
    var emailregexpression= new RegExp(/^[a-zA-Z0-9^.+_-]+@[a-zA-Z0-9-.]+\.[a-zA-Z]{3,3}$/i);

    if ( emailregexpression.test(emailinputvalue) ){
        $("#emailerror").text(' ');
    }
    else{
        $("#emailerror").text(' Mail address is invalid');
    }
} );
$("#emailValue").blur( function () {
    $("#emailerror").text(" ");
} );



$("#passwordValue").keyup( function () {
    var passinputvalue= $("#passwordValue").val().length;
    if (passinputvalue>=6 && passinputvalue<=14){
        $("#passworderror").text(' ');
    }
    else{
        $("#passworderror").text(' pass address is invalid');
    }
} );
$("#passwordValue").blur( function () {
    $("#passworderror").text(" ");
} );

$("#conPasswordValue").keyup( function () {
    var conpassinputvalue= $("#conPasswordValue").val();
    var conpassinputvalue2= $("#conPasswordValue").val().length;
    var passwordValue1=$("#passwordValue").val();
    if (conpassinputvalue2>=6 && conpassinputvalue2<=14){
            // alert('sdsd')
        if (conpassinputvalue !== passwordValue1){
            $("#conPassworderror").text(' con pass address is invalid ');
        }
        else{
            $("#conPassworderror").text('');
        }
    }
    $("#conPasswordValue").blur( function () {
        $("#conPassworderror").text(" ");
    } );
} );




//
// if(password2Value === '') {
//     setErrorFor(password2, 'Password2 cannot be blank');
// } else if(passwordValue !== password2Value) {
//     setErrorFor(password2, 'Passwords does not match');
// } else{
//     setSuccessFor(password2);
// }
// }
