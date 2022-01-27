<?php
    session_start();
    include './model.class.php';
    include './books.class.php';
    include './author.class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Task4</title>
</head>
<body>
    <h1>Last Published book in January 2021</h1>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Book Name</th>
        <th scope="col">Author Name</th>
        <th scope="col">Publish Date</th>
        </tr>
    </thead>
    <?php
        $filter_obj = new books();
        $result = $filter_obj->filterByMonthdesc();
        foreach ($result as $value) {  
    ?>
    <tbody>
        <tr>
        <td><?php echo $value['books_name']; ?></td>
        <td ><?php echo $value['first_name'];?>   <?php echo $value['last_name'];?></td>
        <td><?php echo $value['publish_date']; ?></td>
        </tr>
    </tbody>
        <?php } ?>
    </table>

    <h1>Books</h1>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Book Name</th>
        <th scope="col">Author Name</th>
        <th scope="col">Publish Date</th>
        </tr>
    </thead>
    <?php
        $filter_obj = new books();
        $result = $filter_obj->readAll();
        foreach ($result as $reaAllData) {  
    ?>
    <tbody>
        <tr>
        <td><?php echo $reaAllData['books_name']; ?></td>
        <td ><?php echo $reaAllData['first_name'];?>   <?php echo $reaAllData['last_name'];?></td>
        <td><?php echo $reaAllData['publish_date']; ?></td>
        </tr>
    </tbody>
        <?php } ?>
    </table>
</body>
</html>