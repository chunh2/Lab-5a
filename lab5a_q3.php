<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
</head>
<body>
    
    <?php
        function calculateArea($length, $width){
            $area = $length * $width;
            return $area;
        }

        $width = 6;
        $length = 10;

    ?>

    <p>The area of a rectangle with a width of <?php echo $width ?> and length of <?php echo $length ?> is <?php echo calculateArea($length, $width) ?>.</p>

</body>
</html>
