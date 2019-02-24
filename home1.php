<?php

   include("config.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title>NITHISH</title>
	
   <style>
   body {font-family: Arial, Helvetica, sans-serif;
    color: black;

}
#containerhome{
  background-color: black;
}
   html{
      background-color: black;
   }
ul,header,li{
   margin:0;
  outline: none;
  padding:0;
  margin-left: 0;

}
* {box-sizing: border-box;}
#top{
    list-style-type: none;
    margin:0;
    padding: 0;
    color: white;
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
   .tech-slideshow {
  height: 500px;
  column-width: 1000px;
  max-width: 2000px;
  margin: 0 auto;
  position: relative;
  
  overflow: hidden;
  transform: translate3d(0, 0, 0);
}

.tech-slideshow > div {
  height: 200px;
  width: 5526px;
   position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  overflow: hidden;
  transform: translate3d(0, 0, 0);
}
.tech-slideshow .mover-1 {
  animation: moveSlideshow 12s linear infinite;
  animation-delay: 0s;
  animation-iteration-count: 1;
}
.tech-slideshow .mover-2 {
    animation: moveSlideshow 12s linear infinite;
  animation-delay: 5s;
   animation-iteration-count: 1;

}
.tech-slideshow .mover-3 {
  
  animation: moveSlideshow 12s linear infinite;
  animation-delay:10s;
   animation-iteration-count: 1;
}
.tech-slideshow .mover-4 {
  
  animation: moveSlideshow 12s linear infinite;
  animation-delay: 15s;
   animation-iteration-count: 1;
}
.tech-slideshow .mover-5 {
  
  animation: moveSlideshow 12s linear infinite;
  animation-delay: 19s;
   animation-iteration-count: 1;
}
.tech-slideshow .mover-6 {
   animation-iteration-count: 1;
  animation: moveSlideshow 12s linear infinite;
  animation-delay: 24s;
}
.tech-slideshow:hover .mover-2 {
  opacity: 1;
}

@keyframes moveSlideshow {
  100% { 
    transform: translateX(-66.6666%);  
  }
}  
body,div,ul,ol,li,input,textarea,p,abbr {
  margin:0;
  outline: none;
  padding:0;
  margin-left: 0;

}
ol,ul {
   background-color:silver;
   font-size: 20px;

}
#top li a{
  text-decoration: none;
  font-weight: bold;
  color: white;
  
}
h1,h2,h3,h4,h5,h6 {
  font-size: 100%;
  font-weight: normal;
  margin: 0;
  padding: 0;
}
h3{
   color: white;
}
img {
  border: none;
  position: center;
}

/* End: reset */



body {
  background-color: rgba(238, 238, 238, 1);
    background-image: url(#EEEEEE none repeat scroll top left);
  background-position: left top;
  background-repeat: no-repeat;
  }

body, input, textarea {
  font-family: 'Helvetica Neue Light', HelveticaNeue-Light, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 14px;
}

a,
a:focus {
  color: rgba(0, 158, 184, 1);
  font-family: 'Helvetica Neue Light', HelveticaNeue-Light, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  outline: none;
  text-decoration: none;
  -moz-transition: color .3s;
-ms-transition: color .3s;
-o-transition: color .3s;
-webkit-transition: color .3s;
transition: color .3s;
}

a:visited {
  color: rgba(0, 158, 184, 1);
}

a:hover {
  color: black;
  text-decoration: underline;
}
body {
    overflow-wrap: break-word;
    word-break: break-word;
    word-wrap: break-word;
}
body, input, textarea {
    font-family: 'Helvetica Neue Light', HelveticaNeue-Light, 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size: 14px;
}
body, div, ul, ol, li, input, textarea, p, abbr {
    margin: 0;
    outline: none;
    padding:0;
    }
 body {
  overflow-y: scroll; /* inevitable... skip the jitter */
  overflow-x: hidden;
}

#main {
  margin: 10px;
  padding: 10px;
  position: relative;
}

.slice {
  clear: both;
  margin: 0 auto;
  width: 1200px;
}

.column {
  float: left;
}

.large {
  margin-bottom: 50px; /* Give room for small to expand */
  width: 375px;
  z-index: 3;
  padding: 20px;
}

.medium {
  margin-bottom: 50px; /* Give room for small to expand */
  width: 375px;
  z-index: 3;
  padding: 20px;
}

.small {
  width: 375px;
  z-index: 3;
  padding: 20px;
}

.slice .date.ribbon {
  left: -30px;
  position: absolute;
  top: -6px;
}

.item {
  background-color: rgba(238, 238, 238, 1); /* Defend against chrome translate/gpu bug */
  border: solid 1px transparent;
  cursor: pointer;
  margin: 1px 1px 1px 0; /* Want them to jut up on column borders. */
  padding: 5px 15px;
  position: relative;
  -moz-transition: all ease-in-out 0.5s;
-ms-transition: all ease-in-out 0.5s;
-o-transition: all ease-in-out 0.5s;
-webkit-transition: all ease-in-out 0.5s;
transition: all ease-in-out 0.5s;
}

.item:hover {
  background-color: white;
  -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
-ms-box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
-o-box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
-webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
}

.item.filtered {
  background-color: #f9edbe;
  border: solid 1px #f0c36d;
  -moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-ms-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-o-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.item:hover {
  z-index: 200;
}

.item p {
  color: #666;
  font-size: 12px;
  line-height: 1.2;
  margin-top: 2px;
  margin: 0 0 2px 0;
  -moz-transition: ease-in-out 0.2s;
-ms-transition: ease-in-out 0.2s;
-o-transition: ease-in-out 0.2s;
-webkit-transition: ease-in-out 0.2s;
transition: ease-in-out 0.2s;
  -moz-transition-property: color, opacity, left, top, height, width;
-ms-transition-property: color, opacity, left, top, height, width;
-o-transition-property: color, opacity, left, top, height, width;
-webkit-transition-property: color, opacity, left, top, height, width;
transition-property: color, opacity, left, top, height, width;
}

.item .title {
  display: block;
  overflow: hidden;
  padding: 4px 0px;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.item .summary {
  overflow: hidden;
  text-overflow: ellipsis;
}

.large .title {
  font-size: 24px;
}

.medium .title {
  font-size: 24px;
}

.small .title {
  font-size: 24px;
  padding: 2px 0px;
}

.large .item {
  padding: 15px;

}
.item {
    background-color: rgba(238, 238, 238, 1);
    border: solid 1px transparent;
    cursor: pointer;
    margin: 1px 1px 1px 0;
    padding: 5px 15px;
    position: relative;
    -moz-transition: all ease-in-out 0.5s;
    -ms-transition: all ease-in-out 0.5s;
    -o-transition: all ease-in-out 0.5s;
    -webkit-transition: all ease-in-out 0.5s;
    transition: all ease-in-out 0.5s;
}

.small > .item p {
  max-height: 0;
  overflow: hidden;
  -moz-transition: max-height 507ms ease-in-out;
-ms-transition: max-height 507ms ease-in-out;
-o-transition: max-height 507ms ease-in-out;
-webkit-transition: max-height 507ms ease-in-out;
transition: max-height 507ms ease-in-out;
}

.small > .item:hover p {
  max-height: 75px;
}

.item .thumbnail {
  background-repeat: no-repeat;
  background-position: top center;
  display: block;
  margin: 0 auto;
  max-width: 100%;
}
.item .summary {
    overflow: hidden;
    text-overflow: ellipsis;
}

.item p {
    color: #666;
    font-size: 12px;
    line-height: 1.2;
    margin-top: 2px;
    margin: 0 0 2px 0;
    -moz-transition: ease-in-out 0.2s;
    -ms-transition: ease-in-out 0.2s;
    -o-transition: ease-in-out 0.2s;
    -webkit-transition: ease-in-out 0.2s;
    transition: ease-in-out 0.2s;
    -moz-transition-property: color, opacity, left, top, height, width;
    -ms-transition-property: color, opacity, left, top, height, width;
    -o-transition-property: color, opacity, left, top, height, width;
    -webkit-transition-property: color, opacity, left, top, height, width;
    transition-property: color, opacity, left, top, height, width;
}


p {
   color:skyblue;
    display: block;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
}
.item .comments-count {
  opacity: 0;
  position: absolute;
  right: -7px;
  top: 0px;
  -moz-transition-property: opacity, top;
-ms-transition-property: opacity, top;
-o-transition-property: opacity, top;
-webkit-transition-property: opacity, top;
transition-property: opacity, top;
  -moz-transition-duration: 0.5s;
-ms-transition-duration: 0.5s;
-o-transition-duration: 0.5s;
-webkit-transition-duration: 0.5s;
transition-duration: 0.5s;
  -moz-transition-timing-function: ease-out;
-ms-transition-timing-function: ease-out;
-o-transition-timing-function: ease-out;
-webkit-transition-timing-function: ease-out;
transition-timing-function: ease-out;
  /*visibility: hidden;*/
  z-index: 999;
}

.item:hover .comments-count {
  opacity: 1;
  top: -10px;
  visibility: visible;
}

.space {
  height: 35px;
  margin: 0 0 -35px 0;
}
.item p {
    color: #666;
    font-size: 12px;
    line-height: 1.2;
    margin-top: 2px;
    margin: 0 0 2px 0;
    -moz-transition: ease-in-out 0.2s;
    -ms-transition: ease-in-out 0.2s;
    -o-transition: ease-in-out 0.2s;
    -webkit-transition: ease-in-out 0.2s;
    transition: ease-in-out 0.2s;
    -moz-transition-property: color, opacity, left, top, height, width;
    -ms-transition-property: color, opacity, left, top, height, width;
    -o-transition-property: color, opacity, left, top, height, width;
    -webkit-transition-property: color, opacity, left, top, height, width;
    transition-property: color, opacity, left, top, height, width;
}

   </style>
</head>
<body>
     <div id="containerhome">
   
      <div id="header">
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
     <br>
     <br>
     <br>    
    <div class="tech-slideshow">  
     <div class="mover-1" >
 <div class="slice">
  <div class="column large"><div class="item hentry  new" itemscope="">
  <a class="thumbnail" style="background-image: url('1.png');background-size: 300px; width: 300px; height: 300px;" href="http://newsaccet.blogspot.com/"></a>  
  <div class="space"></div>
</div>
<h3 class="title entry-title" itemprop="name">
ACCET NEWS</h3>
  <p class="summary entry-summary" itemprop="description"> To give a strong voice to the arts and culture community; To spread the word about all the great events taking place in Cornwall and Area.
We truly aim at being a real community newspaper, an outlet who really cares and nurtures the people it promotes and works with. <br></p>
     <div class="space"></div>
</div></div>
  <div class="column medium"><div class="item hentry  new" itemscope="" >
  <a class="thumbnail" style="background-image: url('2.png');background-size: 300px; width: 300px; height: 300px;" href="http://xprezaccet1.blogspot.com/"></a><br>
  <div class="space"></div>
</div>
  <h3 class="title entry-title" itemprop="name">
   XPREZ
  </h3>
  
 <p class="summary entry-summary" itemprop="description">Official newsletter of ACCET, XPREZ has stood out in its job of keeping every ACCETian informed and well connected with the World outside. They were career, Fiction and travel edition which had a wider reach among the students. World had transformed from print media to digital media and XPREZ have also left no stones unturned.<br></p>
     
  

   <div class="space"></div>
</div>
  <div class="column small"><div class="item hentry  new" itemscope="" >
   
  <a class="thumbnail" style="background-image: url('club.png');background-size: 300px; width: 300px; height: 300px;" href="http://read.thiran.in/2015/07/02/clubs-at-accet/"></a><br>
  <div class="space"></div>
</div>
  <h3 class="title entry-title" itemprop="name">
   CLUB
   </h3>
  
  <p class="summary entry-summary" itemprop="description">Club Activities:<br>The clubs in our college helps the students to improve their technical and communication skills in funny way and through practical explanations.<br></p>
</div>
</div>

<div class="mover-2" >
<div class="slice">
  <div class="column large"><div class="item hentry  new" itemscope="">
  <a class="thumbnail" style="background-image: url('3.png');background-size: 300px; width: 300px; height: 300px;" href="https://www.facebook.com/freshersaccet/"></a>  
  <div class="space"></div>
</div>
<h3 class="title entry-title" itemprop="name">
FRESHERS CLUB</h3>
  <p class="summary entry-summary" itemprop="description">the club created only for first years. Inorder to make the first year comfort and enjoy the college life.<br></p>
     <div class="space"></div>
</div></div>
  <div class="column medium"><div class="item hentry  new" itemscope="" >
  <a class="thumbnail" style="background-image: url('4.png');background-size: 300px; width: 300px; height: 300px;" href="http://accetedu.in/rotaract-club/"></a><br>
  <div class="space"></div>
</div>
  <h3 class="title entry-title" itemprop="name">
   ROTRACT CLUB
  </h3>
  
 <p class="summary entry-summary" itemprop="description"> Is to provide an opportunity for men and women to enhance the knowledge and skills that will assist them in personal development, to address the physical and social needs of their communities, and to promote better relations between all people worldwide through a framework of friendship <br></p>
     
  

   <div class="space"></div>
</div>
  <div class="column small"><div class="item hentry  new" itemscope="" >
   
  <a class="thumbnail" style="background-image: url('leo.png');background-size: 300px; width: 300px; height: 300px;" href="http://accetedu.in/leo-club/"></a><br>
  <div class="space"></div>
</div>
  <h3 class="title entry-title" itemprop="name">
   LEO CLUB
   </h3>
  
  <p class="summary entry-summary" itemprop="description"> The three goals of the club are Leadership, Experience and Oppurtuinty (LEO). Leo service develops qualities such as personal generosity, responsibility and dedication to one community.<br></p>

  </div>


</div>
<div class="mover-3" >
  <div class="slice">
  <div class="column large"><div class="item hentry  new" itemscope="">
  <a class="thumbnail" style="background-image: url('6.png');background-size: 300px; width: 300px; height: 300px;" href="https://www.facebook.com/IsteTn156/"></a>  
  <div class="space"></div>
</div>
<h3 class="title entry-title" itemprop="name">
ISTE</h3>
  <p class="summary entry-summary" itemprop="description">The Indian Society for Technical Education (ISTE) is the leading National Professional non-profit making Society for the Technical Education System in our country with the motto of Career Development of Teachers and Personality Development of Students and overall development of our Technical Education System.  <br></p>
     <div class="space"></div>
</div></div>
  <div class="column medium"><div class="item hentry  new" itemscope="" >
  <a class="thumbnail" style="background-image: url('music.png');background-size: 300px; width: 300px; height: 300px;" href="https://www.facebook.com/ACCET.MusicClub/"></a><br>
  <div class="space"></div>
</div>
  <h3 class="title entry-title" itemprop="name">
   MUSIC CLUB
  </h3>
  
 <p class="summary entry-summary" itemprop="description">We believe that music and arts education is a core to students’ education and must be available to all students. Music for All is an advocate for music and arts education. Our educational programs support the efforts of instrumental music teachers on the high school and middle school levels, as well as provide positively life-changing experiences for students.<br></p>
     
  

   <div class="space"></div>
</div>
  <div class="column small"><div class="item hentry  new" itemscope="" >
   
  <a class="thumbnail" style="background-image: url('2.png');background-size: 300px; width: 300px; height: 300px;" href="https://magicalmathsclub.com/what-we-do/school-clubs/"></a><br>
  <div class="space"></div>
</div>
  <h3 class="title entry-title" itemprop="name">
   Maths club
   </h3>
  
  <p class="summary entry-summary" itemprop="description">Knowledge and understanding are fundamental to studying mathematics and form the base from which to explore concepts and develop problem-solving skills. Through knowledge and understanding students develop mathematical reasoning to make deductions and solve problems.<br></p>

  </div>


</div>
<div class="mover-4" >
    <div class="slice">
  <div class="column large"><div class="item hentry  new" itemscope="">
  <a class="thumbnail" style="background-image: url('teqip.jpg');background-size: 300px; width: 300px; height: 300px;" href="http://accetedu.in/2437-2/"></a>  
  <div class="space"></div>
</div>
<h3 class="title entry-title" itemprop="name">
Teqip</h3>
  <p class="summary entry-summary" itemprop="description">Induction programme for the benefit of newly joined students of first year   B. Tech, Workshops for pedagogy training, improve student learning, Graduate employability, Faculty and Staff development, Joint research projects, Research and Development, Mentoring/Twinning, Management Capacity Development, Industry-Institute Interaction etc.,s</p>
     <div class="space"></div>
</div></div>
  <div class="column medium"><div class="item hentry  new" itemscope="" >
  <a class="thumbnail" style="background-image: url('2.png');background-size: 300px; width: 300px; height: 300px;" href="https://www.collegedekho.com/colleges/accet"></a><br>
  <div class="space"></div>
</div>
  <h3 class="title entry-title" itemprop="name">
   Accet info
  </h3>
  
 <p class="summary entry-summary" itemprop="description">Alagappa Chettiar College of Engineering and Technology is situated in Karaikudi in Tamil Nadu state of India. Established in 1952, it is accredited from AICTE and it is affiliated to Anna University. </p>
     
  

   <div class="space"></div>
</div>
  <div class="column small"><div class="item hentry  new" itemscope="" >
   
  <a class="thumbnail" style="background-image: url('2.png');background-size: 300px; width: 300px; height: 300px;" href="http://read.thiran.in/2015/07/02/clubs-at-accet/"></a><br>
  <div class="space"></div>
</div>
  <h3 class="title entry-title" itemprop="name">
   CLUB
   </h3>
  
  <p class="summary entry-summary" itemprop="description">Club Activities:<br>The clubs in our college helps the students to improve their technical and communication skills in funny way and through practical explanations.<br></p>

  </div>
  

</div>

















 
</div>






























      <div class="slice">
  <div class="column large"><div class="item hentry  new" itemscope="">
  <a class="thumbnail" style="background-image: url('1.png');background-size: 300px; width: 300px; height: 300px;" href="http://newsaccet.blogspot.com/"></a>  
  <div class="space"></div>
</div>
<h3 class="title entry-title" itemprop="name">
ACCET NEWS</h3>
  <p class="summary entry-summary" itemprop="description"> To give a strong voice to the arts and culture community; To spread the word about all the great events taking place in Cornwall and Area.
We truly aim at being a real community newspaper, an outlet who really cares and nurtures the people it promotes and works with. <br></p>
     <div class="space"></div>
</div></div>
  <div class="column medium"><div class="item hentry  new" itemscope="" >
  <a class="thumbnail" style="background-image: url('2.png');background-size: 300px; width: 300px; height: 300px;" href="http://xprezaccet1.blogspot.com/"></a><br>
  <div class="space"></div>
</div>
  <h3 class="title entry-title" itemprop="name">
   XPREZ
  </h3>
  
 <p class="summary entry-summary" itemprop="description">Official newsletter of ACCET, XPREZ has stood out in its job of keeping every ACCETian informed and well connected with the World outside. They were career, Fiction and travel edition which had a wider reach among the students. World had transformed from print media to digital media and XPREZ have also left no stones unturned.<br></p>
     
  

   <div class="space"></div>
</div>
  <div class="column small"><div class="item hentry  new" itemscope="" >
   
  <a class="thumbnail" style="background-image: url('club.png');background-size: 300px; width: 300px; height: 300px;" href="http://read.thiran.in/2015/07/02/clubs-at-accet/"></a><br>
  <div class="space"></div>
</div>
  <h3 class="title entry-title" itemprop="name">
   CLUB
   </h3>
  
  <p class="summary entry-summary" itemprop="description">Club Activities:<br>The clubs in our college helps the students to improve their technical and communication skills in funny way and through practical explainations.<br></p>
</div>
<div class="slice">
  <div class="column large"><div class="item hentry  new" itemscope="">
  <a class="thumbnail" style="background-image: url('3.png');background-size: 300px; width: 300px; height: 300px;" href="https://www.facebook.com/freshersaccet/"></a>  
  <div class="space"></div>
</div>
<h3 class="title entry-title" itemprop="name">
FRESHERS CLUB</h3>
  <p class="summary entry-summary" itemprop="description">the club created only for first years. Inorder to make the first year comfort and enjoy the college life.<br></p>
     <div class="space"></div>
</div></div>
  <div class="column medium"><div class="item hentry  new" itemscope="" >
  <a class="thumbnail" style="background-image: url('4.png');background-size: 300px; width: 300px; height: 300px;" href="http://accetedu.in/rotaract-club/"></a><br>
  <div class="space"></div>
</div>
  <h3 class="title entry-title" itemprop="name">
   ROTRACT CLUB
  </h3>
  
 <p class="summary entry-summary" itemprop="description"> Is to provide an opportunity for men and women to enhance the knowledge and skills that will assist them in personal development, to address the physical and social needs of their communities, and to promote better relations between all people worldwide through a framework of friendship <br></p>
     
  

   <div class="space"></div>
</div>
  <div class="column small"><div class="item hentry  new" itemscope="" >
   
  <a class="thumbnail" style="background-image: url('leo.png');background-size: 300px; width: 300px; height: 300px;" href="http://accetedu.in/leo-club/"></a><br>
  <div class="space"></div>
</div>
  <h3 class="title entry-title" itemprop="name">
   LEO CLUB
   </h3>
  
  <p class="summary entry-summary" itemprop="description"> The three goals of the club are Leadership, Experience and Oppurtuinty (LEO). Leo service develops qualities such as personal generosity, responsibility and dedication to one community.<br></p>

  </div>
  <div class="slice">
  <div class="column large"><div class="item hentry  new" itemscope="">
  <a class="thumbnail" style="background-image: url('6.png');background-size: 300px; width: 300px; height: 300px;" href="https://www.facebook.com/IsteTn156/"></a>  
  <div class="space"></div>
</div>
<h3 class="title entry-title" itemprop="name">
ISTE</h3>
  <p class="summary entry-summary" itemprop="description">The Indian Society for Technical Education (ISTE) is the leading National Professional non-profit making Society for the Technical Education System in our country with the motto of Career Development of Teachers and Personality Development of Students and overall development of our Technical Education System.  <br></p>
     <div class="space"></div>
</div></div>
  <div class="column medium"><div class="item hentry  new" itemscope="" >
  <a class="thumbnail" style="background-image: url('music.png');background-size: 300px; width: 300px; height: 300px;" href="https://www.facebook.com/ACCET.MusicClub/"></a><br>
  <div class="space"></div>
</div>
  <h3 class="title entry-title" itemprop="name">
   MUSIC CLUB
  </h3>
  
 <p class="summary entry-summary" itemprop="description">We believe that music and arts education is a core to students’ education and must be available to all students. Music for All is an advocate for music and arts education. Our educational programs support the efforts of instrumental music teachers on the high school and middle school levels, as well as provide positively life-changing experiences for students.<br></p>
     
  

   <div class="space"></div>
</div>
  <div class="column small"><div class="item hentry  new" itemscope="" >
   
  <a class="thumbnail" style="background-image: url('2.png');background-size: 300px; width: 300px; height: 300px;" href="https://magicalmathsclub.com/what-we-do/school-clubs/"></a><br>
  <div class="space"></div>
</div>
  <h3 class="title entry-title" itemprop="name">
   Maths club
   </h3>
  
  <p class="summary entry-summary" itemprop="description">Knowledge and understanding are fundamental to studying mathematics and form the base from which to explore concepts and develop problem-solving skills. Through knowledge and understanding students develop mathematical reasoning to make deductions and solve problems.<br></p>

  </div>
  <div class="slice">
  <div class="column large"><div class="item hentry  new" itemscope="">
  <a class="thumbnail" style="background-image: url('teqip.jpg');background-size: 300px; width: 300px; height: 300px;" href="http://accetedu.in/2437-2/"></a>  
  <div class="space"></div>
</div>
<h3 class="title entry-title" itemprop="name">
Teqip</h3>
  <p class="summary entry-summary" itemprop="description">Induction programme for the benefit of newly joined students of first year   B. Tech, Workshops for pedagogy training, improve student learning, Graduate employability, Faculty and Staff development, Joint research projects, Research and Development, Mentoring/Twinning, Management Capacity Development, Industry-Institute Interaction etc.,s</p>
     <div class="space"></div>
</div></div>
  <div class="column medium"><div class="item hentry  new" itemscope="" >
  <a class="thumbnail" style="background-image: url('2.png');background-size: 300px; width: 300px; height: 300px;" href="https://www.collegedekho.com/colleges/accet"></a><br>
  <div class="space"></div>
</div>
  <h3 class="title entry-title" itemprop="name">
   Accet info
  </h3>
  
 <p class="summary entry-summary" itemprop="description">Alagappa Chettiar College of Engineering and Technology is situated in Karaikudi in Tamil Nadu state of India. Established in 1952, it is accredited from AICTE and it is affiliated to Anna University. </p>
     
  

   <div class="space"></div>
</div>
  <div class="column small"><div class="item hentry  new" itemscope="" >
   
  <a class="thumbnail" style="background-image: url('2.png');background-size: 300px; width: 300px; height: 300px;" href="http://read.thiran.in/2015/07/02/clubs-at-accet/"></a><br>
  <div class="space"></div>
</div>
  <h3 class="title entry-title" itemprop="name">
   CLUB
   </h3>
  
  <p class="summary entry-summary" itemprop="description">Club Activities:<br>The clubs in our college helps the students to improve their technical and communication skills in funny way and through practical explanations.<br></p>

  </div>
  

</body>
</html>
