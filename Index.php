
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<style>
body{
  background-image:url("l.webp");
  color:purple;
  background-repeat:no-repeat;
  background-size:cover;
}
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap');
*{
    font-family:serif;
}


.box{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 90vh;
}
.container{
    width: 350px;
    display: flex;
    flex-direction: column;
    padding: 0 15px 0 15px;
    
}
span{
    color:purple;
    font-size: small;
    display: flex;
    justify-content: center;
    padding: 10px 0 10px 0;
}
header{
    color:#BA55D3;
    font-size: 30px;
    display: flex;
    justify-content: center;
    padding: 10px 0 10px 0;
}
.input-field .input{
    height: 45px;
    width: 87%;
    border: none;
    border-radius: 30px;
    color: purple;
    font-size: 20px;
    padding: 0 0 0 45px;
    background: #fff;
    outline: none;
}
i{
    position: relative;
    top: -33px;
    left: 17px;
    color:plum  ;
}
::-webkit-input-placeholder{
    color:plum;
}
.submit{
    border: none;
    border-radius: 30px;
    font-size: 23px;
    height: 45px;
    outline: none;
    width: 100%;
    color: #fff;
    background:#BA55D3;
    cursor: pointer;
    transition: .3s ;
}
.submit:hover{
    box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
}
.two-col{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    color:purple;
    font-size: small;
    margin-top: 10px;
}
.one{
    display: flex;
}
label a{
    text-decoration: none;
    color:purple;
}
</style>
</head>

<script>
function valid()
{
var username=document.getElementById("name").value;
var password=document.getElementById("pass").value;
if(username=='SSWCOE' && password=='6938')
{
  alert("Login Successfully")
 }
 else
 {
  alert("Enter Correct Username or Password")
  return false;
 }
}
</script>

<body>


    <form action="Dept.php" method="post" name="myform" onsubmit="return valid()">

   <div class="box">
    <div class="container">
        <div class="top">
            
            <header><b>Admin Login</b></header>
        </div>
		<br>
        <div class="input-field">
            <input type="text" class="input" placeholder="Username" id="name">
            <i class='bx bx-user' ></i>
        </div>
        <br>
        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" id="pass">
            <i class='bx bx-lock-alt'></i>
        </div>
        <br>
        <div class="input-field">
            <input type="submit" class="submit" value="Login" id="">
        </div>
		<!--
        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="#">Forgot password?</a></label>
            </div>
			-->
        </div>
    </div>
</div>  
</form>
</body>
</html>