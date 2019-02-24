<?php
   include("config.php")
   ?>
<!DOCTYPE html>
<html>
<head>
<title>NITHISH</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<?php
error_reporting(~E_NOTICE);
?>
<style>

*{
    box-sizing: border-box;
}
ul{
    list-style-type: none;
    margin:0;

    padding: 0;
   overflow: hidden;
 
}
li{
    float: left;
  
}
li a {
    display: block;
    color: white;
 
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ccc;
}


div{
  display: block;
}
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

.container {
    
    border-radius: 5px;
       padding: 20px;

}
input[type=submit] {
    background-color:#111 ;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
}

   body{
    position: relative;
      background-image:url(bgm.png);
      background-repeat: no-repeat;
   }
  .row{
    padding-left: 30%;
    padding-top: 2%;
  }
  
.s{
  margin-left: 30%;
  margin-right: 50%;
  padding: 1%;
}


ul{
    list-style-type: none;
    margin:0;
    padding: 0;
    overflow: hidden;
    background-color:navy;
}
li{
    float: left;
    
}
li a {
    display: block;
    color: white;
     padding: 8px 14px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: blue;
    color: white;
    text-decoration: none;

}
#button{
 align-items: center;
}

.g{
      margin-left: 15%;
  border:2px solid black;
width: 70%;
margin-top:15%;
 }
</style>
<script>
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
  </script>
</head>
<body>
  <ul id="top">
            <li><a href="home.php">Home</a></li>
            <li><a href="chat.php">Chat</a></li>
            <li><a href="queries.php">Queries</a></li>
            
                <li><a href="feedback.php">feedback</a></li>
           
             <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="student.php">Logout</a></li>
        </ul>
     <div class="container">
      <div class="g">
                         <div class="row">
              <form method="POST" action="feedback.php" enctype="multipart/form-data" class="form-responsive form-horizontal"> 

                  <div class="form-group"> 
                    
                     <h3>ENTER YOUR FEEDBACK HERE</h3>
              </div>
        <div class="form-group">
          <input type="text"  name="subj" sclass="form-control col-xm-2"  required></textarea>
        </div>
        <div class="form-group">
      <center id="button"> <input type="submit" name="submit" value="submit"></center>
    </form> 
    <?php
    $b=$_POST["subj"];
    if(isset($_POST["submit"]))
      mail("snnithish124@gmail.com","feedback","$b");
    ?>
</body>
</html>
