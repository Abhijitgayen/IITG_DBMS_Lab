<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>LAB_4(about_page)</title>
     <style>
          * {
               padding: 0;
               margin: 0;
          }
          body {
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
          .left_section ul li:active{
               background-color:red;
          }
          .left_section ul li a{
               width:100%;
               color:white;
               text-decoration: none;
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
               <li ><a href="">About Us</a></li>
               <li ><a href="r.php">Register</a></li>
               <li ><a href="l.php">Log In</a></li>
               </ul>
          </div>
          <div class="main_section">
               <section class="About_us" id="AboutUs_block" >
                    <h2>
                         welcome to the student codding club. in this club. We will learn about latest languages whice
                         are used in
                         academia and industy.
                    </h2>
                    <br>
                    <h3>
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quidem magni maxime nulla
                         voluptas
                         fugiat. Incidunt optio, reprehenderit iure totam reiciendis nihil, ipsam laboriosam
                         consequuntur rem
                         deserunt voluptatum accusantium illo. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Numquam
                         harum itaque cumque expedita, id quis beatae nobis, magnam soluta a aliquid non ab. Voluptate
                         ullam
                         minima eaque exercitationem, quod autem incidunt, odio id consequuntur, doloribus libero fuga
                         ipsam
                         repudiandae magnam corporis numquam velit eius rem eos. Esse exercitationem quam sed!
                    </h3>
               </section>
     </div>

</body>
 </html>