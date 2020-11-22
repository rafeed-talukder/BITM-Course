

$('#firstName').keyup( function () {
    var fnamevalue = $('#firstName').val();
    $("#res1").text(fnamevalue);
} )
$('#lastName').keyup( function () {
    var lastnamevalue = $('#lastName').val();
    $("#res2").text(lastnamevalue);
} )
$('#lastName').blur( function () {
    var fnamevalue = $('#firstName').val();
    var lastnamevalue = $('#lastName').val();
    var fulltext= fnamevalue+ " "+lastnamevalue;
    $("#res3").text(fulltext);
} )

//====================================================================================

document.getElementById('input').value="from javascript value";
document.getElementById('h1').innerHTML="From js value";
// alert(document.getElementById('img').getAttribute('src'));
document.getElementById('img').setAttribute('src',"img/1.jpg");

//====================================================================================

var docheadingtext= document.createElement('h2');
var docheadingtexttwo= document.createElement('h2');
var docheadingpara= document.createElement('p');

docheadingtext.innerHTML="this is heading"
docheadingtexttwo.innerHTML="This Content come from jquery"
docheadingpara.innerHTML="this is paragraph"

document.getElementById('div-one').appendChild(docheadingtexttwo);
document.getElementById('div-one').appendChild(docheadingtext);
document.getElementById('div-one').appendChild(docheadingpara);

//======================================================================================

function increment (){
    var docheadingtext= document.createElement('h2');
    var docheadingtexttwo= document.createElement('h2');
    var docheadingpara= document.createElement('p');

    docheadingtext.innerHTML="this is heading"
    docheadingtexttwo.innerHTML="This Content come from jquery"
    docheadingpara.innerHTML="this is paragraph"

    document.getElementById('div-one').appendChild(docheadingtexttwo);
    document.getElementById('div-one').appendChild(docheadingtext);
    document.getElementById('div-one').appendChild(docheadingpara);
}
$('#btn').click( function () {
    increment();
} );

//======================================================================================
$('#Img1').click( function () {
    var img1= $('#Img1').attr('src');
    $('#mainImg').attr('src',img1);
} );
$('#Img2').click( function () {
    var img1= $('#Img2').attr('src');
    $('#mainImg').attr('src',img1);
} );
$('#Img3').click( function () {
    var img1= $('#Img3').attr('src');
    $('#mainImg').attr('src',img1);
} );
$('#Img4').click( function () {
    var img1= $('#Img4').attr('src');
    $('#mainImg').attr('src',img1);
} );
