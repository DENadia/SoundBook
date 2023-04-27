<html>
    <style>
input[type=submit] {
  width: 10%;
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=reset] {
  width: 10%;
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=text],select{
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border-radius: 4px;
  box-sizing: border-box;
    border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
        }
        input[type=password],select{
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border-radius: 4px;
  box-sizing: border-box;
    border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
        }
        input[type=submit]:hover {
  background-color: red;
        }
        input[type=reset]:hover {
  background-color: red;
        }
        input[type=text]:focus {
  border: 3px solid black;
}
        input[type=password]:focus {
  border: 3px solid black;
}
    </style>
    <head>
        <title>Index</title>
        <meta charset="utf-8">
    </head>
    <link type="text/css" rel="stylesheet" href="css/index1.css">
    <body id="idd">
        
    <div class="formular">
            <h2>Login to your account</h2>
            <form action="login.php" method="post">
                <input type="text" name="username" placeholder="username" REQUIRED><br>
                <input type="password" name="password" placeholder="password" REQUIRED><br>
                <input type="submit" name="buton" value="Connect">
                <input type="reset" name="reset" value="Reset">
            </form>
        </div>
        <form action="primapaginaguest.php" method="post">
        <div id="guest" >
            <input type="submit" name="guest" value="Guest session">
        </div>
        </form>
    </body>
    <script type="text/javascript">alert("Wrong password!Please try again!")</script>
</html>