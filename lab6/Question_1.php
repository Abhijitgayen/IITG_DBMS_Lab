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
          <div class="insert_from"> Q1-a) Form to insert Node</div>
          <div class="node"> 
               Node (x)
               <input type="number"  name="x" required>
          </div>
          <div class="node"> 
               Node (y)
               <input type="number"  name="y" required>
          </div>
          <div class="submit_btn">
               <input type="submit">
          </div>
     </form>
</body>
</html>
<?php

if(isset($_POST['x']) && isset($_POST['y'])){
  $sql="INSERT INTO graph.nodes(x,y) VALUES (:nodex,:nodey)";
  $stmt=$conn->prepare($sql);
  $stmt->execute(array(
    ':nodex'=>$_POST['x'],
    ':nodey'=>$_POST['y']
  ));
  unset($_POST);
}
?>

<?php
echo"Q1-b) The table is : ";
$no=1;
     $stmt=$conn->query(" SELECT * FROM graph.nodes");
     echo'<table border="1|0">',"\n";
     echo"<tr><td>node_no</td><td>x</td><td>y</td></tr>";
     while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
       echo"<tr><td>";
       echo $no;
       $no=$no+1;
       echo"</td><td>";
       echo $row['x'];
       echo "</td><td>";
       echo $row['y'];
       echo"</td></tr>";
     }
?>