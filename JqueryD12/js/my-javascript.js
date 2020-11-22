$('#btn').click(function () {
    var firstnamevalue=$('#firstName').val();
    var secondnamevalue=$('#lastName').val();
    var fullnamevalue=firstnamevalue+ " "+secondnamevalue;
    $("#fullName").val(fullnamevalue);
} );

$('#add').click( function () {
    var firstNumvalue= $('#firstNumber').val();
    var secondNumvalue=$('#secondnumber').val();
    var calnum= parseInt(firstNumvalue) +' ' + parseInt (secondNumvalue);
    $("#fullName2").val(calnum);
} )

// alert($('#h1').text());
// $('#h2').text("this is replased text");

