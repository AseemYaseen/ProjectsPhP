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
  

    <table>
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
          require('connection.php');

          $p=crud::Selectdata();

          if(count($p)>0){
           for ($i =0; $i<count($p); $i++){
            echo '<tr>';
            foreach ($p[$i] as $key=>$value){
                if($key!='id'){
                    echo '<td>'.$value.'</td>';
                }
            }
            }
            echo '</tr>';
          }


         ?>
        </tbody>
    </table>
</body>
</html>