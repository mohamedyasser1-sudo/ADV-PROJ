console.log("Insidddeee Register JS");

$('document').ready(function()
{
    /* validation */
    $("#signin").validate({
        rules:
        {
            usernamea: {
                required: true,
                minlength: 3
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
        },
        messages:
        {
            usernamea: "Enter a Valid Username",
            passa:{
                required: "Provide a Password",
                minlength: "Password Needs To Be Minimum of 8 Characters"
            },
            emaila: "Enter a Valid Email",
            confirmpassa:{
                required: "Retype Your Password",
                equalTo: "Password Mismatch! Retype"
            }
        },
        submitHandler: submitForm
    });
    /* validation */

    /* form submit */
    function submitForm()
    {
        console.log("Inside Submit");
        var data = $("#signin").serialize();

        $.ajax({

            type : 'POST',
            url  : './form_handlers/advis_regis.php',
            data : data,
            beforeSend: function()
            {
                $("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
            },
            success :  function(data)
            {
                console.log("success");
                console.log(data);
                if(data==1){

                    $("#error").fadeIn(1000, function(){


                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   Sorry email already taken !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');

                    });

                }
                else if(data=="registered")
                {

                   // $("#btn-submit").html('Signing Up');
                    
                    /*setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("./user_dashboard/examples/index.php"); }); ',5000);
                    */
                    
                    window.location = "login.php";

                    //alert("Good you registered")

                }
                else{

                    $("#error").fadeIn(1000, function(){

                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span>   '+data+' !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');

                    });

                }
            }
        });
        return false;
    }
    /* form submit */

});