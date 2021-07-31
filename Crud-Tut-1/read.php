<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="http://localhost:8012/login_user_project/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <?php
        include_once 'database.php';
        $result = mysqli_query($conn, "SELECT * FROM crud");
        if (mysqli_num_rows($result) > 0) {
        ?>

            <h1 class="display-4 text-center">Read</h1>
            <table class="table table-striped">
                <thead class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </thead>

                <tbody>
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $i + 1; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>                            
                            <td>
                                <a href="update.php?name=<?php echo $row["name"];?>" class="btn btn-success" >Update</a>
                                <a href="delete.php?name=<?php echo $row["name"];?>" class="btn btn-danger" >Delete</a>
                            </td>
                        </tr>

                    <?php
                        $i++;
                    }
                    ?>

                </tbody>
            </table>
            <center><a href="create.html" class="link-primary">Create</a><br><br><br><br></center>      
    </div>

<?php
        } else {
            echo "No result found";
        }
?>

</div>
</body>
</html>