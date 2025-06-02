<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
</head>
<body>

<?php
$students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => '21',
    ],
    [
        'name' => 'Bob',
        'program' => 'BIs',
        'age' => '20',
    ],
    [
        'name' => 'Raju',
        'program' => 'BIt',
        'age' => '22',
    ],
]
?>

<h2>List of Students</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>

    <?php
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student['name'] . "</td>";
        echo "<td>" . strtoupper($student['program']) . "</td>";
        echo "<td>" . $student['age'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
