<?php
include('includes/dbconnection.php');
include 'includes/header.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5" style="width:30%;margin:auto">
        <h1><a href="index.php">HOME</a>/View Pass</h1>
    </div>
    <div class="container mt-5">
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="search by pass data" name="searchdata">
            </div>
            <button style="padding-top: 14px;" type="submit" class="btn btn-primary" name="search" id="submit">Search</button>
        </form>

    </div>
    <div>
        <?php
        if (isset($_POST['search'])) {


            $sdata = $_POST['searchdata'];
        ?>
            <h4 style="padding-bottom: 20px;">Result against "<?php echo $sdata; ?>" keyword</h4>
            <table border="2" class="table table-bordered" style="font-size: 18px;">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>Pass Number</th>
                        <th>Full Name</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Creation Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * from tblpass where passnumber like '$sdata%'";
                    $q = mysqli_query($con, $sql);
                    $cnt = 1;
                    if (mysqli_num_rows($q) > 0) {
                        foreach ($q as $row) {
                    ?>
                            <tr>
                                <td><?php echo ($cnt); ?></td>
                                <td><?php echo $row['passnumber']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['number']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['from date']; ?></td>
                                <td><a href="view-pass-detail.php?viewid=<?php echo $row['id']; ?>" class="btn btn-primary">View </a></td>
                            </tr>
                        <?php
                            $cnt = $cnt + 1;
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="8"> No record found against this search</td>

                        </tr>
                <?php }
                } ?>

                </tbody>
            </table>
    </div>
    </div>
    </div>
    </div>


    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>