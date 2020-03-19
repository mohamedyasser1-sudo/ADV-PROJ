console.log("Insidddeee Register JS");

$('document').ready(function()
{
    /* validation */
    $("#contactform").validate({
        rules:
        {
            first_name: {
                required: true,
                minlength: 3
            },
            phone: {
                required: true,
                minlength: 11,
                maxlength: 11
            },
            comments: {
                required: true,
               minlength: 10,
                maxlength: 50
            },
            email: {
                required: true,
                email: true
            },
        },
        messages:
        {
            username: "Enter a Valid Username",
            phone:{
                required: "Provide a Password",
                minlength: "Password Needs To Be Minimum of 8 Characters"
            },
            email: "Enter a Valid Email",
            comments:{
                required: "Enter a Valid comments ",
                minlength: "Password Needs To Be Minimum of 10 Characters"
            }
        },
        submitHandler: submitForm
    });
    /* validation */

    /* form submit */
    function submitForm()
    {
        console.log("Inside Submit");
        var data = $("#contactform").serialize();

        $.ajax({

            type : 'POST',
            url  : './form_handlers/contact_us.php',
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