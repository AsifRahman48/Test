<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form method="post">
    <div id="login_box">
        <h3 id="heading">Login Form</h3>
        <div>
            <label>Username</label>
            <input type="textbox" name="username" id="username" required><br/>
            <span class="error_field" id="username_error"></span><br/>
        </div>
        <div class=".mt15">
            <label>Password</label>
            <input type="password" name="password" id="password" required><br/>
            <span class="error_field" id="password_error"></span><br/>
        </div>
        <div class=".mt15">
            <input type="submit" name="submit" value="Login" >
        </div>
        <div class="error_field" id="result_msg"></div>
    </div>
</form>
    <style>
        #login_box{width:40%; margin:5% auto;border: 1px solid #000;padding:5%;font-family:arial;}
        #heading{ width:40%; margin:5% auto;}
        #login_box input{
            padding: 10px; width:100%; margin-bottom: 10px;
        }
        .mt15{margin-top:15px;}
        .error_field{color:red;}
    </style>
    <script src="jquery-3.6.0.js"></script>
    <!--
    <script>
        function frm_login(){
            var username=jQuery('#username').val();
            var password=jQuery('#password').val();
            var is_error='';
            jQuery('.error_field').html('');
            if(username==''){
                jQuery('#username_error').html('Please Enter Username');
                is_error='yes';
            }
            if(password==''){
                jQuery('#password_error').html('Please Enter Password');
                is_error='yes';
            }
            if(is_error==''){
                jQuery.ajax({
                    url:'check.php',
                    type:'POST',
                    data:'username='+username+'&password='+password,
                    success:function(result){
                       if(result=='correct'){
                        window.location.href='dashboard.php';
                       }else{
                        jQuery('#result_msg').html('Please enter valid login details');
                       }
                    }
                })
            }
        }
    </script>
    -->
</body>
</html>