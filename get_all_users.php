<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get all users</title>
</head>

<body>
    <h1>Welcome to get all users page</h1>
    <h3>here you can see all the users stored in the users table of job_portal database</h3>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "job_portal") or die("Connection failed: " . mysqli_connect_error());
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>" . $row['name'] . " - " . $row['email']. " - ". $row['role'] . "</p>";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    ?>
</body>

</html>