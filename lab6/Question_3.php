<?php
     require_once("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <form method="POST" action="">
          <div class="insert_from"> Q3  Form to delete edges</div>
          <div class="node"> 
               Node1 (x)
               <input type="number"  name="x1" required>
          </div>
          <div class="node"> 
               Node1 (y)
               <input type="number"  name="y1" required>
          </div>
          <div class="node"> 
               Node2 (x)
               <input type="number"  name="x2" required>
          </div>
          <div class="node"> 
               Node2 (y)
               <input type="number"  name="y2" required>
          </div>
          <div class="submit_btn">
               <input type="submit">
          </div>
     </form>
</body>
</html>
<?php

if(isset($_POST['x1']) && isset($_POST['y1'])&& isset($_POST['x2']) && isset($_POST['y2']) ){
  $sql="DELETE FROM graph.edges WHERE sx=:nodesx AND sy=:nodesy AND ex=:nodeex AND ey=:nodeey";
  $stmt=$conn->prepare($sql);
  if($stmt->execute(
     array(
         ':nodesx'=>$_POST['x1'],
         ':nodesy'=>$_POST['y1'],
         ':nodeex'=>$_POST['x2'],
         ':nodeey'=>$_POST['y2']
       )
  )){
       $count=$stmt->rowCount();
       echo "no of row ".$count;
       echo " Deleted";
  }
  unset($_POST);
}
// echo"After deleteThe table is : ";
//      $stmt=$conn->query(" SELECT * FROM graph.edges");
//      echo'<table border="1|0">',"\n";
//      echo"<tr><td>X1</td><td>Y1</td><td>X2</td><td>Y2</td><td>Weight</td> </tr>";
//      while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
//        echo"<tr><td>";
//        echo $row['sx'];
//        echo"</td><td>";
//        echo $row['sy'];
//        echo "</td><td>";
//        echo $row['ex'];
//        echo"</td><td>";
//        echo $row['ey'];
//        echo "</td><td>";
//        echo $row['wt'];
//        echo"</td></tr>";
//      }
?>