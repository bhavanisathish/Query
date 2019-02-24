<?php
   include("config.php")
   ?>
   <!DOCTYPE html>
   <html>
   <head>
    <?php
    ob_start();
    ?>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <title>NITHISH</title>
   </head>
   <script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
   <style>
   .body
   {
    overflow: hidden;
   }
      .c{
        padding-top: 2%;
         float: left;
         width: 50%;
         padding-left: 22%;
             }
             .d{
         float: right;
           padding-top: 2%;
         width: 50%;
         padding-left: 3%;
         padding-right: 22%;
             }
             .k{

              color: white;
              margin-top: 0%;
              margin-left: 20%;
             }
     body{
      background-image: url(homecontainer.jpg);
      position: relative;
     }
       hr{
        border:1px solid black;
      }
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
   </style>
   <body>
      <div id="header" >
        <ul id="top">
          <li><a href="home1.php">Home</a></li>
          <li><a href="chat1.php">Chat</a></li>
            <li><a href="alumini.php">Queries</a></li>
          
              <li><a href="event.php">Event</a></li>
            <li><a href="feedback1.php">feedback</a></li>
                   <li><a href="contact1.php">Contact Us</a></li>
                  <li><a href="student.php">Logout</a></li>
        </ul>
      </div>
   	<div class="container">
      <?php 
     error_reporting( ~E_NOTICE );
   $_a=$_SESSION["name"];
   $_b=$_SESSION["pass"];
   $sql="SELECT *FROM query";
$countt=$con->query($sql);
$i=0;
      while($aMessages=$countt->fetch_array())  
    {
          if($aMessages['flag']!='1'){
                $sMessages .= '<form class="form-responsive  form-horizontal" action="alumini.php"  method="POST"><div class="row"><div class="form-group c">' . '<video controls="controls" class="vdo-responsive" width="100%" onclick="this.paused ? this.play() : this.pause();" ><source src=" user_video/'.$aMessages['video'].'"> </video></div><div class="form-group d">
   <img src="user_image/'.$aMessages['image'] .'  " class="img-responsive" width="100%" height="50%" >'. '</div><div class="form-group k"> ' .'<h2>' .$aMessages['sub'].'</h2>'.'<br>' . '<label class="control-label">Explanation:</label><br>'. $aMessages['chat'] . '</div></div><label class="switch" id="myCheck"><input type="checkBox" name="like" value="'.$aMessages['idno'].'"><input type="submit" name="submit">
<p id="text" style="display:none">Query is solved!</p><span class="slider round"></span></label>'.'</form><hr>';
$i++;}
   }
   echo $sMessages;
          ?>
         
<?php
if(isset($_POST["submit"]))
{
  $s=$_POST["like"];
  $k ="UPDATE query SET flag='1' WHERE idno='$s' ";
  $con->query($k);
  header("location:alumini.php");
}
ob_end_flush();
?>


</div>`
</body>
</html>
