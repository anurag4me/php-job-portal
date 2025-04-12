<?php
    // Include the database connection file
    include("config.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // collect variables
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        // execute query
        $sql = "INSERT INTO users (`name`, `email`, `password`, `role`) VALUES ('$name', '$email', '$password', '$role');";

        if($conn->query($sql)) {
            echo "New record created successfully";
        } else {
            echo "Error" . $sql . "<br>" . $conn->error;
        }

        // close the connection
        $conn->close();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Add new user</h1>
        <p class="fw-semibold fs-3">Enter user details!</p>

        <form method="post" action="add_new_user.php">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="pwd" required>
            </div>
            <select class="form-select" name="role" required>
                <option value="" selected disabled>Select a Role</option>
                <option value="employer">Employer</option>
                <option value="job_seeker">Job Seeker</option>
            </select>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>