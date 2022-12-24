<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <title>Document</title>
</head>
<body>
  

    <!-- <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
        <?php
        //   require('connection.php');

        //   $p=crud::Selectdata();

        //   if(count($p)>0){
        //    for ($i =0; $i<count($p); $i++){
        //     echo '<tr>';
        //     foreach ($p[$i] as $key=>$value){
        //         if($key!='id'){
        //             echo '<td>'.$value.'</td>';
        //         }
        //     }
        //     }
        //     echo '</tr>';
        //   }


         ?>
        </tbody>
    </table> -->
    <?php

    require('connection.php');
    ?>

<?php  $p=crud::Selectdata();
// print_r($p);
?>
<table>
    <?php $i=1;?>

<?php foreach ($p as $row ): ?>

<tr>
  <?php ?>
    <td><?php echo $i;?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['lastname'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['pass'];?></td>
    <td>
    
      <a href="./update.php?id=<?php echo $row['id'];?>" class="btn btn-warning">edit</a>
      <a href="./delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('are you shure?')">delete</a>
    </td>
 </tr>
 <?php ++$i;?>

 <?php ?>
 <?php  endforeach;?>
 </table>  

 </body>
 </html>