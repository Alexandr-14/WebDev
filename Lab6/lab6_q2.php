<?php
$students = [
    [ 'name' => 'Puteri', 'age' => 21, 'program' => 'BIP'],
    ['name' => 'Satoru', 'age' => 20, 'program' => 'BIS'],
    ['name' => 'Tommy', 'age' => 22, 'program' => 'BIT'],
    ['name' => 'Chandran', 'age' => 23, 'program' => 'BIC'],
];
?>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Program</th>
    </tr>
    <?php foreach ($students as $student): ?>
    <tr>
        <td><?php echo htmlspecialchars($student['name']); ?></td>
        <td><?php echo htmlspecialchars($student['age']); ?></td>
        <td><?php echo htmlspecialchars($student['program']); ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
</head>