console.log("Insidddeee Register JS");
jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Enter a Valid Name"); 
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
            second_name:
            {
                required: true,
                minlength: 3,
                lettersonly: true
            }
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
            },
            second_name:{required:"Enter a Valid Name"}
        },
        submitHandler: submitForm
    });
    /* validation */

    /* form submit */
    function submitForm()
    {
        second_name=document.getElementById('second_name').value;
    var regEx = /^[a-zA-Z]$/;

    if((regEx.test(second_name)==true))
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
 console.log("Inside 111111");
                    $("#error").fadeIn(1000, function(){


                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   Sorry email already taken !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');

                    });

                }
                else if(data=="registered")
                {
 console.log("Inside 22222222");
                   // $("#btn-submit").html('Signing Up');
                    
                    /*setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("./user_dashboard/examples/index.php"); }); ',5000);
                    */
                    
                    window.location = "confirmMsg.php";

                    //alert("Good you registered")

                }
                else{
 console.log("Inside ELSE");
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