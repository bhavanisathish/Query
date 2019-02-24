<?php
   include("config.php")
   ?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script>
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
  </script>

<style>
.g{
  border:2px solid black;

 }
  
body{
  background-image: url(bgm.png);
  background-repeat: no-repeat;
}
img:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}
.h2{
  padding: 10px;
  margin-left: 35%;
}
@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
.r{
  padding-left: 30%;
}
.l{
  margin-left: 20%;
  white-space: 10%;
}
.k{
  margin-left: 2%;
}
.q{
  margin-left: 10%;
}
.j{
  padding: 1%;
  height: 1%;
  width: 30%;
}
.m{
  margin-left: 35%;
}
.h{
  padding-left: 10%;
}
.tb4 {
    float: right;
    margin-right: 50%;
    margin-left: 10%;
    background: #fff;
    color: #000;
    width: 200px;
    height: 30px;
    box-sizing: border-box;
    padding: 3px 10px 3px 3px;
    -webkit-appearance: textfield;
    background-color: white;
    border: 0px;
    border-radius: 0px;
    border-bottom: 2px solid white;
    border-spacing: 3px;
    font-size: 21px;
    
    
}</style>
</head>
<body>

<title>NITHISH</title>

</head>
<body>
      <div class="container">
         <span class="h2">LOGIN HERE</span>
         <br>
         <br>
        <div class="g">
          <br>
             <form  class="m form-horizontal" method="POST" action="sign.php">
              <div class="form-group h">
                <img src="per.png"  class="img-responsive">
                  </div>
                  <br>
                  <br>
          
                      <div class="form-group">
                              <label class="control-label col-xs-2">Username</label>
                                     <input type="text" name="name" class="tb4 form-control ">
                                         </div>
                  <div class="form-group">
                   <label class="control-label col-xs-2">Password</label>
                         <input type="password" name="password" class="tb4 form-control">
                                                                </div><br>
                  <div class="form-group">
                        <div class="col-xm-3 ">
                 <input type="reset" class="k btn btn-primary btn-group-horizontal" value="Clear" name="clear">
                 <input type="submit" class=" l btn btn-primary btn-group-horizontal" value="Login" name="submit">
                          </div>
                               </div>
                               <br>
                               <div class="form-group">
                        <div class="col-xm-3 ">
                           <a href="1.php" class="btn  btn-group-horizontal">Forget password?</a>
                           <a href="newuser.php" class=" q btn btn-group-horizontal">New User Registration</a>
                                      </div>
                                </div>
                                  <div class="col-sm-3 "><a href="help.php">Help!</a></div>
                      
                       
                         
 
</div>
      <div class="form-group">
        <center>Copyright &copy; 2018 | Designed by nithish</center>
      </div>
        </form> 
      
</div>
                

 <?php
      if (isset($_POST["submit"])) 
      {
         $_SESSION["name"]=$_POST["name"];
         $_SESSION["pass"]=$_POST["password"];
        $name=$_POST["name"];
              $password=$_POST["password"];
        if ($name!=""&&$password!="")
        {
          $sql="SELECT USERNAME,PASSWORD FROM user WHERE USERNAME='$name' AND PASSWORD='$password'";
          $result=$con->query($sql);
          if ($result->num_rows>0) {
            $_SESSION["name"]=$name;
            header("location:home.php");
          }
          else{
            echo "<p class='error'>Invalid User or Password</p>";
          }
        }
        else
        {
          echo "<p class='error'>Please Enter all details</p>";
        }
      }
      else
      {
        echo "<p></p>";
      }
 ?>
     

</body>
</html>
