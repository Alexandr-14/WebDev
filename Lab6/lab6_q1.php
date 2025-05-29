<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
        $name = "Alexander McGurney";
        $matric = "CI230010";
        $course = "BIT";
        $year = "3 Years";
        $address = "Jalan Ampang, Kokdiang, Malaysia";
    ?>
    <table>
        <tr>
            <td>Name</td>
            <td>Matric No</td>
            <td>Course</td>
            <td>Year</td>
            <td>Address</td>
            <td><?php echo "$name";?></td>
            <td><?php echo "$matric";?></td>
            <td><?php echo "$course";?></td>
            <td><?php echo "$year";?></td>
            <td><?php echo "$address";?></td>
        </tr>
    </table>
</body>
</html>