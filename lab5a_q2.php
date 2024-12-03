<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class='container my-5'>
    <?php
        $students = [
            [
                'name' => 'Alice',
                'program' => 'BIP',
                'age' => 21
            ],
            [
                'name' => 'Bob',
                'program' => 'BIS',
                'age' => 20
            ],
            [
                'name' => 'Raju',
                'program' => 'BIT',
                'age' => 22
            ]
        ];

    ?>

    <table class='table table-bordered text-center w-50 table-striped'>

    <thead class='table-info'>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
    </thead>

    <?php
    foreach($students as $student){
        echo '<tr>';
            echo '<td>' . $student['name'] . '</td>';
            echo '<td>' . $student['program'] . '</td>';
            echo '<td>' . $student['age'] . '</td>';
        echo '</tr>';
    }
    ?>
    </table>

</body>
</html>
