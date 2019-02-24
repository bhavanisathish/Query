<!DOCTYPE html>
<html>
<head>
<?php
    session_start();
    $db=new mysqli("localhost","root","","nithish");
    ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-color:  navy;
background-image: url(bgm.png);
}
#container{

}
#header{
    padding: 0px;
}
ul,header,li{
   margin:0;
  outline: none;
  padding:0;
  margin-left: 0;
}
* {box-sizing: border-box;}
ul{
    list-style-type: none;
    margin:0;
    padding: 0;
    overflow: hidden;
    background-color:navy;
}
li{
    float: left;
    padding:0;
}
li a {
    display: block;
    color: white;
     padding: 8px 14px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: blue;
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

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.contai{
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;

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
    <div class="container">
 <div id="header">
        <ul id="top">
            <li><a href="home.php">Home</a></li>
            <li><a href="chat.php">Chat</a></li>
            <li><a href="queries.php">Queries</a></li>
                 <li><a href="feedback.php">feedback</a></li>
                         <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="student.php">Logout</a></li>
        </ul>
      </div>
<h3>Contact Us</h3>

<div class="contai">
  <form action="contact.php" autocomplete="off" method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="" required>
    <label for="lname">Email id</label>
    <input type="text" id="lname" name="lastname" placeholder="" required>
    <label for="country">Subject</label>
    <input type="text"  name="country" placeholder="">
          <label for="subject">Description</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required"></textarea>
    <input type="submit" name="submit" value="Submit">
  </form>
</div>
<?php
if(isset($_POST["submit"]))
{
    $a=$_POST["firstname"];
    $b=$_POST["lastname"];
    $c=$_POST["country"];
    $d=$_POST["subject"];
    mail("snnithish124@gmail.com","$c From $b","$d");
}
?>
</body>
</html>
