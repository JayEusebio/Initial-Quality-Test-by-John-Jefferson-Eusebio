<?php
    session_start();
    include './model.class.php';
    include './news.class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Task3</title>
</head>
<body>
    
    <table class="table table-hover">
        <thead >
            <tr>
            <th scope="col">#</th>
            <th scope="col" > Desc </th>
            <th scope="col" >Article</th>
            </tr>
        </thead>


        <?php 
            $news_obj = new news();
            $x = $_GET['x'];
            $result = $news_obj->selectByID($x);
            if($result && mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                     
          ?>
            <tbody>
                <tr>
                <th scope="row"><?php echo $row['id'];?></th>
                <td><?php echo $row['short_description'];?></td>
                <td><?php echo $row['article'];?></td>
                </tr>
            </tbody>

            <?php }
            }else {
                echo "<span></h1> Error Message 404, </br> Record not exist! </h1></span>";
            }
        ?>
    </table>
</body>
</html>