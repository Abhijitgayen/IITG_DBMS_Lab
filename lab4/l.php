<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width , initial-scale=1.0">
     <title>LAB_4(log_in page)</title>
     <style>
          .noactive{
               display: none;
          }
          * {
               padding: 0;
               margin: 0;
          }
          body ,html {
               min-width: 1200px;
               background-color: rgba(250, 235, 215, 0.048);
          }
          h1 {
               text-align: center;
               background-color: rgba(230, 86, 19, 0.904);
               padding: 15px;
               color: white;
          }
          .About_us {
               text-align: justify;
               padding:15% 5% 0% 5%;
               color:white;
               line-height: 25px;
               justify-items: center;
               /* display: none; */
          }
          .reg_data{
               display: flex;
               /* background-color: red; */
          }
          .login__img img{
               width: 300px;
          }
          .Register {
               /* display: flex; */
               color: black;
               margin: 10% 12%;
               padding: 2% 3% ;
               background-color: aliceblue;
               border-radius: 15px;
               box-shadow: 2px 4px 25px white;
               border: 3px solid rgb(137, 136, 238);
               /* display: none; */
          } 
          .Register div{
               text-align: right;
               font-size: 21px;
               /* background-color: red; */
               padding: 30px 10px 5px 10px;
          }
          div input {
               margin-left:10px ;
               box-shadow: none;
               border: none;
               border-bottom: 2px solid blue;
               height: 25px;
               outline: none;
               background-color: aliceblue;
               
          }
          input:focus{
               border: none;
               border-bottom: 2px solid red;
          }
          input[type=submit]{
               width: 83px;
               height: auto;
               background-color:blue;
               padding:8px 10px;
               color:white;
               border:none;
               border-radius:5px;
          }
          input[type=submit]:hover{
               box-shadow: 0px 2px 25px rgb(76, 41, 235);
          }
          .mian_all {
               display: flex;
               align-items: stretch;
               background-color: rgb(139, 138, 221);
          }
          .main_section{
               overflow: hidden;
               height: 89vh;
               min-width: 1000px;
          }
          
          .left_section {
               background-color:rgb(81, 63, 247) ;
              
               color:white;
               font-weight: bolder;
               padding-top:15% ;
               min-width: 200px;
               font-size: 19px;
               text-align: center;
               /* background-color: rgb(42, 42, 207); */
          }
          .left_section ul li{
               padding: 5px;
               list-style:none ;
               border: 2px solid white;
               margin: 20px;
          }
          .left_section ul li a{
               color:white;
               text-decoration: none;
          }
          .left_section ul li:active{
               background-color:red;
          }
     </style>
</head>

<body>
     <div>
          <h1>Welcome to IITG Student Codding Club</h1>
     </div>
     <div class="mian_all">
          <div class="left_section">
               <ul>
                    <li ><a href="index.php">About Us</a></li>
                    <li ><a href="r.php">Register</a></li>
                    <li><a href="">Log In</a></li>
               </ul>
          </div>
          <div class="main_section">
               <section class="Register" id="Register_block" >
                    <div class="reg_data">
                    <div class="login__img">
                         <img src="img-login.svg" alt="">
                       </div>
                       <div class="from">
                    <form action="" method="post">
                         
                         <div class="email_data">
                              Email Id
                              <input type="email" name="email_id" required>
                         </div>
                         <div class="password">
                              Password
                              <input type="password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[!@\#$%^&*+`~|<>/]).{8,}" title="Must contain at least one number and one specail symbol and one uppercase and lowercase letter, and at least 8 or more characters" required>
                         </div>
                         <div class="submit_btn">
                              <input type="submit">
                         </div>
                   </div>
                    </form>
               </div>
               <?php
                   if(isset($_POST["email_id"]) ){
                         $fp1=fopen('password.txt','r');
                         if(!$fp1 ){
                              die("<h3>error .... not able to read file...</h3>");
                         }
                         else{
                              $ok=FALSE;
                              while(!feof($fp1)){
                                    fscanf($fp1,"%s , %s\n",$email,$password);
                                    if(isset($_POST["email_id"])&&$email===$_POST["email_id"]&&$password===md5($_POST['password'])){
                                         $ok=TRUE;
                                         echo'<div style="color:green;font-size:19px; font-family:cursive;">You are Log In successfiully</div>';
                                         break;
                                   }
                               }
                              if(isset($ok)&&$ok===FALSE)echo'<div style="color:red;font-size:19px;font-family:cursive;">error  in password or email id cheak it again </div>';
                              fclose($fp1);
                         }
                     }
                     unset($_POST);
                    ?>
                 
          </div>
               </section>
     </div>

</body>

</html>