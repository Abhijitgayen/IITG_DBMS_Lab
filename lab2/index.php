<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Lab 2</title>
</head>
<style>
     table_data{

          width: 300px;
          height: 300px;
     }
        table {
               color: black;
               border-collapse: collapse;
          }
          td,
          th {
               padding: 6px;
               border: 1px solid black;
          }
</style>
<body>
     <h1>Question 1 :</h1>
     <table class="table_data">
          <?php
          $no=3;
          for($ir=1;$ir<=$no;$ir++){
               echo"<tr>";
               for($ic=1;$ic<=3;$ic++){
                    $total=$ir+$ic;
                    if($total%2==0){
                         echo"<td height=50px width=50px bgcolor=white></td>";
                    }
                    else{
                         echo"<td height=50px width=50px bgcolor=black></td>";
                    }
               }
               echo"</tr>";
          }
          ?>
     </table>
     <h1>Question 2 :</h1>
     <?php
     $fp=fopen('lab2_data.txt','w+');
     if(!$fp){
        die("<h3> error ....not able to open file....</h3>");
     }
     else{
          $cname=array("OS","DBMS","Network","Network_Lab");
          $scode=array("CS346","MA518","CS348","CS349");
          $credit=array( 6 , 6 , 6, 3);
          $grade=array("AS","AA","AB","AB");
          for($i=0;$i<4;$i++){
               fwrite($fp,$cname[$i]." , ".$scode[$i]." , ".$credit[$i]."  , ".$grade[$i]."\n");
          }
          echo "<h3>Done....</h3>";
     }
     fclose($fp);
     ?> 
     <h1>Quetion 3 : </h1>
     <?php
     $cn=array();
     $sc=array();
     $cr=array();
     $gr=array();
     $i=0;
          if($fp1=fopen('lab2_data.txt','r+')){
               echo"<table height=45px width=45px>";

               while(!feof($fp1)){
                    
                    fscanf($fp1,"%s ,  %s , %d  , %s \n",$cn[$i],$sc[$i],$cr[$i],$gr[$i]);
                    //there a emtpy row in the lab2_data.txt to ignor the i use
                    if(!feof($fp1)){
                    echo"<tr heigth=10px>";
                    echo "<td>".$cn[$i]." </td><td> ".$gr[$i]."</td>";
                    echo"</tr>";
                    }
                    // echo $sc[$i];
                    $i++;
               }
               echo"</table>";
               $sum=0;
               for( $p=0;$p<$i;$p++){
                    switch($gr[$p]){
                         case 'AA':
                         case 'AS':
                              $sum+=10;
                              break;
                         case 'AB' :
                              $sum+=9;
                              break;
                         case 'BB' :
                              $sum+=8;
                              break;
                         case 'BC' :
                              $sum+=7;
                              break;
                         case 'CC':
                              $sum+=6;
                              break;
                         case 'CD':
                              $sum+=5;
                              break;
                         case 'DD':
                              $sum+=4;
                              break;
                         case 'F':
                              $sum+=0;
                              break;
                         default:
                         break;
                    }
               }
               $sum=$sum/($p-1);
               echo"<h3>total SPI is : $sum</h3>";
               echo "<h3>Done...</h3>";
          }else{
               die("<h3> error ....not able to open file....</h3>");
          }
          fclose($fp1);
     ?>
</body>
</html>