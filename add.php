<?php
include "db.php";

if (isset($_POST["submit"])) {

    $item = $_POST["item"];
    $borrower = $_POST["borrower"];
    $due_date = $_POST["due_date"];

    $stmt = $conn->prepare("INSERT INTO loans (item, borrower, due_date, returned) VALUES (?, ?, ?, 0)");

    $stmt->bind_param("sss", $item, $borrower, $due_date);

    $stmt->execute();

    header("Location: list.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Loan</title>
</head>
<body>

    <h1>Campus Costume Closet</h1>

    <h2>Add a Costume Loan</h2>

    <form method="POST">

        :<br>
        <input type="text" name="item" required>
        <br><br>

        :<br>
        <input type="text" name="borrower" required>
        <br><br>

        Due Date:<br>
        <input type="date" name="due_date">
        <br><br>

        <input type="submit" name="submit" value="Add Loan">

    </form>

    <br>

    <a href="list.php">View Loans</a>

</body>
</html>