console.log("Insidddeee Register Advertis eJS");
jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Enter a Valid Name"); 
$('document').ready(function()
{

    /* validation */
    $("#signin").validate({
        rules:
        {
            usernamea: {
                required: true,
                minlength: 3,
                lettersonly: true
            },
            passa: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
            confirmpassa: {
                required: true,
                equalTo: '#passa'
            },
            emaila: {
                required: true,
                email: true
            },
             countrya: {
                required: true
            },
            second_namea:
            {
                required: true,
                minlength: 3,
                lettersonly: true
            }
        },
        messages:
        {
            usernamea:  {required:"Enter a Valid Username"},
            passa:{
                required: "Provide a Password",
                minlength: "Password Needs To Be Minimum of 8 Characters"
            },
            emaila: "Enter a Valid Email",
            confirmpassa:{
                required: "Retype Your Password",
                equalTo: "Password Mismatch! Retype"
            },
            countrya:{required:"Please select country"},
            second_namea:{required:"Enter a Valid Name"}
        },
        submitHandler: submitForma
    });
    /* validation */

    /* form submit */
    function submitForma()
    {


second_namea=document.getElementById('second_namea').value;
    var regExa = /^[a-zA-Z]$/;

    if((regExa.test(second_namea)==true))
    {
    }
    else
    {
       // window.alert("h");
    }
        console.log("Inside Submit");
        var data = $("#signin").serialize();

        $.ajax({

            type : 'POST',
            url  : './form_handlers/advis_regis.php',
            data : data,
            beforeSend: function()
            {
                /*$("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');*/
            },
            success :  function(data)
            {
                console.log("success");
                console.log(data);

             //window.location = "confirmMsg.php";
  console.log((data==1));
    console.log((data.toString() == 'registered'));

                if(data==1){
  console.log((data==1));

  $('#clickhere .haveAcc').text('Sorry email already taken !');
                   /* $("#error").fadeIn(1000, function(){


                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   Sorry email already taken !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');

                    });*/

                }
                else if(data==2)
                {
console.log((data=="registered"));
                   // $("#btn-submit").html('Signing Up');
                    
                    /*setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("./user_dashboard/examples/index.php"); }); ',5000);
                    */
                      console.log("Inside RRRR");
                    window.location = "confirmMsg.php";

                    //alert("Good you registered")

                }
                else{
/*
                    $("#error").fadeIn(1000, function(){

                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span>   '+data+' !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');

                    });*/

                }
            }
        });
        return false;
    }
    /* form submit */

});