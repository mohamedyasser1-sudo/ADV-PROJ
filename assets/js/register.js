console.log("Insidddeee Register JS");

$('document').ready(function()
{
    /* validation */
    $("#signin").validate({
        rules:
        {
            username: {
                required: true,
                minlength: 3
            },
            pass: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
            confirmpass: {
                required: true,
                equalTo: '#pass'
            },
            email: {
                required: true,
                email: true
            },
        },
        messages:
        {
            username: "Enter a Valid Username",
            pass:{
                required: "Provide a Password",
                minlength: "Password Needs To Be Minimum of 8 Characters"
            },
            email: "Enter a Valid Email",
            confirmpass:{
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
            url  : './form_handlers/host_regis.php',
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
                    
                    window.location = "http://localhost:8080/ADV-PROJ/login.php";

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