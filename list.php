<?php
include "db.php";

$sql = "SELECT * FROM loans";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Loan List</title>
</head>
<body>

    <h1>Campus Costume Closet</h1>

    <h2>All Loans</h2>

    <a href="add.php">Add New Loan</a>

    <br><br>

    <?php

    if ($result->num_rows == 0) {

        echo "No loans yet. The closet is empty!";

    } else {

    ?>

    <table border="1" cellpadding="10">

        <tr>
            <th>ID</th>
            <th>Item</th>
            <th>Borrower</th>
            <th>Due Date</th>
            <th>Returned</th>
            <th>Actions</th>
        </tr>

        <?php

        while ($row = $result->fetch_assoc()) {

        ?>

        <tr>

            <td><?php echo $row["id"]; ?></td>

            <td><?php echo htmlspecialchars($row["item"]); ?></td>

            <td><?php echo htmlspecialchars($row["borrower"]); ?></td>

            <td><?php echo $row["due_date"]; ?></td>

            <td>
            <?php
                if ($row["returned"] == 1) {
                    echo "Yes";
                } else {
                    echo "No";
                }
                    ?>
                </td>

            <td>

                <a href="mark_returned.php?id=<?php echo $row['id']; ?>">
                        Mark Returned
                    </a>

                    |

                    <a href="delete.php?id=<?php echo $row['id']; ?>"
                        onclick="return confirm('Are you sure you want to delete this loan?')">
                Delete
                    </a>

                </td>

        </tr>

        <?php
        }
        ?>

    </table>

    <?php
    }
    ?>

</body>
</html>