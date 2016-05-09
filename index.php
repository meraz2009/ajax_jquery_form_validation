<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Registration Form using jQuery Ajax and PHP MySQL</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

    <script type="text/javascript" src="validation.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css" media="screen">

    <script type="text/javascript" src="script.js"></script>
   <!-- <script type="text/javascript">
        function onSubmit()
        {
            var fields = $("input[name='hobby']").serializeArray();
            if (fields.length == 0)
            {
                alert('nothing selected');
                // cancel submit
                return false;
            }
            else
            {
                alert(fields.length + " items selected");
            }
        }

        // register event on form, not submit button
        $('#register-form').submit(onSubmit)

        </script>-->

</head>

<body>

<!--<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.codingcage.com/" target="_blank" title="Coding Cage Programming Blog">Coding Cage</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.codingcage.com/2015/11/ajax-registration-script-using-jquery-php.html">Go to Article</a></li>
            <li><a href="http://www.codingcage.com/p/about.html" target="_blank">About</a></li>
            <li><a href="http://www.codingcage.com/p/contact-me.html" target="_blank">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Tutorials <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://www.codingcage.com/search/label/jQuery" target="_blank">jQuery</a></li>
                <li><a href="http://www.codingcage.com/search/label/Ajax" target="_blank">Ajax</a></li>
                <li><a href="#">MySQLI</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">PHP</li>
                <li><a href="http://www.codingcage.com/search/label/PHP OOP" target="_blank">PHP OOP</a></li>
                <li><a href="http://www.codingcage.com/search/label/PDO" target="_blank">PHP PDO</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->


<div class="signin-form">

    <div class="container">


        <form class="form-signin" method="post" id="register-form">

            <h2 class="form-signin-heading">Sign Up</h2><hr />

            <div id="error">
                <!-- error will be showen here ! -->
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="username" id="username" />
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email address" name="email" id="email" />
                <span id="check-e"></span>

            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Password" name="password" id="password" />
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
            </div>
            <div class="form-group">
                <select name ="country" id="country">
                    <option value="">Select Country </option>
                    <option value="bangladesh"> Bangladesh</option>
                    <option value="india">India</option>
                    <option value="pakistan">Pakistan </option>
                    <option value="maldiv">Maldiv </option>
                    <option value="canada">Canada </option>
                </select>
            </div>
            <div class="form-group">
               <p>Gender:</p>
                Male</br><input type="radio" name="gender" value="Male"/>
                <p></p>
                Female</br><input type="radio" name="gender" value="Female"/>
            </div>
            <div class="form-group">
                <p>Selects Your hobby:</p>
                <label><input type="checkbox" name="hobby[]" id="hobby"  value="Gardening">Gardening</label></br>
                <label><input type="checkbox" name="hobby[]" id="hobby"  value="Swimming">Swimming</label></br>
                <label><input type="checkbox" name="hobby[]" id="hobby"  value="Cyling">Cyling</label></br>
                <label><input type="checkbox" name="hobby[]" id="hobby"  value="Reading">Reading</label></br>
                <label><input type="checkbox" name="hobby[]" id="hobby"  value="Coding">Coding</label></br>
                <label><input type="checkbox" name="hobby[]" id="hobby"  value="Recitation">Recitation</label></br>
                <label><input type="checkbox" name="hobby[]" id="hobby"  value="Surfing">Surfing</label></br>
            </div>
            <div class="form-group">
                <p>Term&Service:</p>
                <input type="checkbox" name="term_service" id ="term_service" value="Agreed">
            </div>
            <hr/>

            <div class="form-group">
                <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
                </button>
            </div>

        </form>

    </div>

</div>

<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>