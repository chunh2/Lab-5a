<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class='container my-5'>
 <?php
    $name = "Chow Saw Chun Hwa";
    $matricNumber = "AI220263";
    $course = "Computer Science (Web Technology) / BIW";
    $yearOfStudy = 3;
    $address = "123, Jalan 123, Taman ABC, 86300 Batu Pahat, Johor";
 ?>

 <table class='table text-center table-bordered align-middle'>
    <thead class='table-light'>
        <tr>
            <th>Name</th>
            <th>Matric Number</th>
            <th>Course</th>
            <th>Year of Study</th>
            <th>Address</th>
        </tr>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $matricNumber; ?></td>
            <td><?php echo $course; ?></td>
            <td><?php echo $yearOfStudy; ?></td>
            <td><?php echo $address; ?></td>
        </tr>
    </thead>
 </table>
</body>
</html>