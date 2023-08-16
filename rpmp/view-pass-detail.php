<?php
include('includes/dbconnection.php');
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
    <?php include 'includes/header.php' ?>
    <div class="container mt-5">
        <h2><a href="index.php">HOME</a>/View Pass</h2>
    </div>
    <div class="conatiner mt-5">
        <?php
        $vid = $_GET['viewid'];
        $sql = "SELECT * from  tblpass where ID=$vid";
        $q = mysqli_query($con, $sql);
        $cnt = 1;
        if (mysqli_num_rows($q) > 0) {
            foreach ($q as $row) {
        ?>
                <table border="2" class="table table-bordered" style="font-size: 18px;">
                    <tr align="center">
                        <td colspan="6" style="font-size:20px;color:blue">
                            Pass ID: <?php echo ($row['passnumber']); ?></td>
                    </tr>
                    <tr>
                        <th scope>Full Name</th>
                        <td><?php echo ($row['name']); ?></td>

                    </tr>
                    <tr>
                        <th scope>Mobile Number</th>
                        <td><?php echo ($row['number']); ?></td>
                        <th scope>Email</th>
                        <td><?php echo ($row['email']); ?></td>
                    </tr>
                    <tr>
                        <th scope>Source</th>
                        <td><?php echo ($row['source']); ?></td>
                        <th scope>Destination</th>
                        <td><?php echo ($row['destination']); ?></td>
                    </tr>
                    <tr>
                        <th scope>From Date</th>
                        <td><?php echo ($row['from date']); ?></td>
                        <th scope>To Date</th>
                        <td><?php echo ($row['to date']); ?></td>
                    </tr>

            <?php $cnt = $cnt + 1;
            }
        }
            ?>
                </table>
                <input type="button" style="padding-right: 20px" class="btn btn-primary" value="print" onclick="PrintDiv();" /></p>

    </div>
 </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>