<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>

<?php
function calculateArea($length, $width) {
    return $length * $width;
}

$length = 4;
$width = 2;

$area = calculateArea($length, $width);

echo "<strong>The area of a rectangle with a width of $length and $width is $area.<strong>";
?>

</body>
</html>
