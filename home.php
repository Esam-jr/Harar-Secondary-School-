<?php
    if (!isset($_SESSION)) session_start();
    if(!isset($_SESSION['fullname'])){
        header("Location: logIn.php");
        exit(0);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome, <?php echo $_SESSION['fullname']; ?></h1>
        </div>
    </header>
    
    <div class="container">
        <section id="registered-students">
            <h2>Registered Students</h2>

            <?php
            include 'connection.php';

            $sql = "SELECT * FROM students";
            $result = $con->query($sql);

            if ($result && $result->num_rows > 0) {
                echo "<table>";
                echo "<tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Emergency Contact</th>
                    <th>Qualification</th>
                    <th>Student Status</th>
                    <th>Shift</th>
                    <th>Disability</th>
                    </tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["first_name"] . " " . $row["middle_name"] . " " . $row["last_name"] . "</td>";
                    echo "<td>" . $row["gender"] . "</td>";
                    echo "<td>" . $row["phone_number"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>";
                    echo "Name: " . $row["emergency_name"] . "<br>";
                    echo "Phone: " . $row["emergency_phone"] . "<br>";
                    echo "Address: " . $row["emergency_address"] . "<br>";
                    echo "Relation: " . $row["emergency_relation"];
                    echo "</td>";
                    echo "<td>" . $row["qualification"] . "</td>";
                    echo "<td>" . $row["student_status"] . "</td>";
                    echo "<td>" . $row["shift"] . "</td>";
                    echo "<td>" . $row["disability"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No registered students found.";
            }

            $con->close();
            ?>
        </section>
        
        <form method="POST" action="logout.php">
            <button type="submit">Logout</button>
        </form>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2024 Your Company. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
