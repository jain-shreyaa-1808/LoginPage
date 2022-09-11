<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <script type=text/javascript>
        
        var check = function() {
        var p1=document.getElementById('pas');
        var p2=document.getElementById('cnfpas');
        if(p1.value=='')
        {
            document.getElementById('message').innerHTML = 'Please enter password';
        }
        if(p2.value=='')
        {
            document.getElementById('message').innerHTML = 'Please confirm password';
        }
        if (((p1.value!='')&&(p2.value!=''))&&(p1.value != p2.value))  {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Password does not match';
        }
        else
        {
            document.getElementById('message').innerHTML = ' ';
        }
       
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
 
        <div class="col-lg-4">
        <br><br><br>
        <div class="card">
            <h3 class="text-center card-header">Signup</h3>
                <form action="registration.php" method="POST" class="card-body">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <br>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" id="pas" name="password" class="form-control" onkeyup='check();'>
                    </div>
                    </br>
                    <div class="form-group">
                        <label>Confirm Password
                        <input type="Password" id="cnfpas" name="cnfpassword" class="form-control" onkeyup='check();' >
                        <span id="message"></span>
                        </label>
                    </div>
                    </br>
                    <input type="submit" value="SignUp" class="btn btn-primary m-auto d-block">
                    <br>
                </form>
            </div>
           
        </div>
        <div id="img" class="col-lg-4">
                <img src="signUp.jpg" class = "img-responsive" width="100%" alt="image">
            </div>
</div>
    </div>
    <!-- <script src="registration.js"></script> -->
</body>
</html>



        