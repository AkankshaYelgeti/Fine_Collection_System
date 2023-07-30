<?php
                error_reporting(0);
                
                
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<style>
*
{
  padding: 0;
  margin: 0;
  user-select: none;
  box-sizing: border-box;
  font-family: Regular;
}

.navbar{
  background-color: #7B68EE;
  color: #FFFF;
  height: 60px;
  text-align: center;
 
  
}
.navbar ul{
  overflow:auto
  
}

.navbar li{
  
  float: left;
  list-style: none;
  padding: 25px 3px;
  
  margin: 13px 40px;
}
.navbar li a{
  
  padding: 3px 5px;
  text-decoration: none;
  color: white;
  font-size: 20px;
  align-items: center;
  
}
.navbar li a:hover{
  
  border-radius: 10px;
    color: black;
    background-color: rgb(194, 244, 244);
    padding:5px;
}
.navbar ol{
  
  float: right;
  list-style: none;
  padding: 25px 3px;
  margin: 13px 40px;
  
  
  
}
.navbar ol a{
  text-decoration: none;
  color: #FFFF;
  width: 300px;
  text-decoration: underline;
  
  font-size: 20px;
  
  align-items: center;
}

.navbar ol a:hover{
  
  font-size: 22px;
}




body{
  background-image:url("l.webp");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  box-sizing:border-box;
  font-family: Regular;
  color:purple;
}


.cover{
    width: 900px;
    height: 300px;
    margin-top: 100px;
    display: flex;
    margin-left: 100px;
    
}

.box{
    width: 380px;
    height: 330px;
    margin: 20px;
    left: 170px;
    box-shadow: 5px 5px 10px 2px rgba(0,0,0,.8);
    text-align: center;
    border-radius: 5px;
    background-color:#fff;
    overflow: hidden;
    position: relative;

}

img{
    width: 280px;
    height: 240px;
    border-radius: 5px;
}
.box img{
  transform: scale(1.0);
  transition: all 0.3s ease-out;
}
.box:hover img{
  transform: scale(1.1) translate(-10px);
  opacity: 0.3;

}


button{
  margin-top: 30px;
  font-size: 23px;
  border: none;
  width: 200px;
  background-color:#fff;
  color:purple;
}
.description{
position: absolute;
left: 0;
bottom: 130px;
width: 100%;
padding: 15px;
text-align: center;
color: white;
}
.description h3{
  font-weight: 700;
  font-size: 25px;
  margin: 0 0 20px;
  transform: translateY(30px);
  opacity: 0;
  transition: all 0.3s ease-out;

}
.description p{
  transform: translateY(30px);
  opacity: 0;
  transition: all 0.3s ease-out 0.2s;
}
.description a{
  color:purple;
  background: white;
  display: inline-block;
  padding:10px 25px;
  margin-top: 60px;
  text-decoration: none;
  border-radius: 20px;
  transform: translateY(40px);
  opacity: 0;
  transition: all 0.3s ease-out 0.4s;
}
.description a:hover{
  background-color: purple;
  color:#fff;
}

.box:hover .description h3{
  opacity: 1;
  transform: translateY(0);

}
.box:hover .description a{
  opacity: 1;
  transform: translateY(0);

}
.box:hover .description p{
  opacity: 1;
  transform: translateY(0);

}

</style>
</head>
<body>
<br><br>
    <center><h1> <u>Departments </u></h1></center>
    
<div class="cover">
        <div class="box">
            <img src="cse.jpg">
            <div class="description">
            <h3>CSE Department</h3>
            <a href="cse_attendence.php">Take Attendence</a>
            </div>
            <button>Take Attendence</button>
            
        </div>
        <div class="box">
            <img src="it.jpg">
            <div class="description">
              <h3>IT Department</h3>
              <a href="it_attendence.php">Take Attendence</a>
              </div>
            <button> Take Attendence</button>
            
        </div>
        <div class="box">
            <img src="entc.jpg">
            <div class="description">
              <h3>ENTC Department</h3>
              <a href="entc_attendence.php">Take Attendence</a>
              </div>
            <button>Take Attendence</button>
            
        </div>
    </div>


<!---<div>
<center>

<font color="023E8A"> 


<u style="text-decoration-color: #023E8A;"><h1>
Student Attendance</i></font></h1></u>

<br><br><h1><font color="#023E8A">Departments </font></h1> <br>
<p><a href="cse_attendence.php">
<img src=cse.jpg width='200' height='180'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</a> 
<a href="it_attendence.php">
    <img src=it.jpg width='200' height='180'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</a> 
<a href="entc_attendence.php">
    <img src=entc.jpg width='200' height='180'>
</a> </p>
<h2><font color="#023E8A">CSE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    IT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 ENTC</font></h2>
 <br> <br>
 --->
<form action="attendence.php" method="post">
<!---
<div class="mainContainer">
#<button type="cse">CSE </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
#<button type="it">IT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
#<button type="entc">ENTC</button>
#</div>
--->

</body>
</html>





