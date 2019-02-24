
<html>
<style type="text/css">
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

</style>
 <div id="header">
        <ul id="top">
          <li><a href="home.php">Home</a></li>
          <li><a href="chat.php">Chat</a></li>
            <li><a href="queries.php">Queries</a></li>
            
                          <li><a href="feedback.php">feedback</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="help.php">Logout</a></li>
        </ul>
      </div>
</html>
<?php
 ob_start();
error_reporting( ~E_NOTICE );
include("config.php");
 $v="SELECT *from chat ORDER BY  time(Date) DESC,YEAR(Date) DESC, MONTH(Date) DESC, DAY(DATE) DESC";
    $countt=$con->query($v);
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
    $_a="snnithish";
    while($aMessages=$countt->fetch_array())
    {
        if($aMessages['sender']=="nithish")
        {
                       $sMessages .= '<div class="col-sm-12 message-main-sender">
                          <div class="sender">' . $aMessages['sender'] . '<div class="message-text"> ' . $aMessages['msg'] . '</div></div></div>'.'<br><br>'; 
                    
        }
        else
        {
           $sMessages .= '<div class="col-sm-12 message-main-receiver">
            <div class="receiver">' . $aMessages['sender'] . '<div class="message-text"> ' . $aMessages['msg'] . '</div></div></div>'.'<br><br>';
        }
   }
  echo ' <div id="chatBox"><div class="row message-body">'.$sMessages.'</div></div>'; 
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  
    <style>
    .container {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;

}
.g{
  padding: 10px;
  background-color: blue;
}
.message-main-receiver {
  /*padding: 10px 20px;*/
  max-width: 60%;
  padding-left: 100px;
  
  }

.message-main-sender {
 
  margin-left: 40% !important;
  padding-right: 100px;
  padding-top: 20px;
  max-width: 60%;
  padding-bottom: 30px;

}

.message-text {
  margin: 0 !important;
  padding: 5px !important;
  word-wrap:break-word;
  font-weight: 200;
  font-size: 30px;
  padding-bottom: 0 !important;
}
.receiver {
  width: auto !important;
  padding: 4px 10px 7px !important;
  border-radius: 10px 10px 10px 0;
  background: white;
  font-size: 24px;
  text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
  word-wrap: break-word;
  display: inline-block;
}

.sender {
  float: right;
  width: auto !important;
  background: white;
  border-radius: 10px 10px 0 10px;
  padding: 4px 10px 7px !important;
  font-size: 12px;
  text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
  display: inline-block;
  word-wrap: break-word;
}

.darker {
    border-color: #ccc;
    background-color: #ddd;
    
}
.container::after {
    content: "";
    clear: both;
    display: table;
}
.container img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}
.container img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}
.time-right {
    float: right;
    color: #aaa;
}
.time-left {
    float: left;
    color: #999;
}
#messageForm {
    margin:0px;
    margin-bottom:1px;
}
#chatBox {
    font-family:tahoma;
    font-size:12px;
    color:black;
    background-image: url("layer.png");
    border: 1px teal solid;
    height: 75%;
    width: 100%;
    overflow: scroll;
    float:left;
}

.a{
padding-top: 480px;
padding-left: 140px;
position: relative;
}

    </style>
  
  </head>
<body>
  <div class="container">
       <div class="a" >
      	<form method="POST" action="chat.php" id="messageForm">
    NAME	
		<input type="name" name="name"><br><br>MESSAGE
        <textarea name="msg" class="message"></textarea><br><br>
         <input type="submit" name="send" value="send" class="g">
  </form>
</div>
 </div>
	<?php
    
  if(isset($_POST['send']))
  {
       $name=$_POST["name"];
    $msg=$_POST["msg"];
    $imgFile = $_FILES['image']['name'];
              $tmp_dir = $_FILES['image']['tmp_name'];
              $imgSize = $_FILES['image']['size'];
               $que1="INSERT INTO `chat` (`sender`, `msg`, `date`, `time`) VALUES ('$name', '$msg', CURRENT_DATE(), CURRENT_TIME())";
                $con->query($que1);

    header("location:chat.php"); 
ob_end_flush();
}
  ?>
</div>

</body>
</html>