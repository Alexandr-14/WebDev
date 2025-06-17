<?php
$conn = new mysqli("localhost", "root", "", "lab_7");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$result = $conn->query("SELECT id, matric, name, role FROM users ORDER BY role, name");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .action-btn {
            padding: 6px 14px;
            border-radius: 5px;
            border: none;
            margin-right: 6px;
            cursor: pointer;
            font-size: 1em;
        }
        .edit-btn { background: #4f8cff; color: #fff; }
        .delete-btn { background: #ff4f4f; color: #fff; }
        .action-btn:hover { opacity: 0.8; }
    </style>
</head>
<body>
    <div class="table-container">
        <h2>Admin Dashboard</h2>
        <table>
            <tr>
                <th>Matric</th>
                <th>Name</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['matric']); ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['role']); ?></td>
                        <td>
                            <a href="edit_user.php?id=<?php echo $row['id']; ?>" class="action-btn edit-btn">Edit</a>
                            <a href="delete_user.php?id=<?php echo $row['id']; ?>" class="action-btn delete-btn" onclick="return confirm('Are you sure?');">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="4" style="text-align:center;">No users found.</td></tr>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>