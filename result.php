<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Display Data - PHP CRUD</title>
</head>

<body>
    <div class="container mt-5">
        <a href="index.php" class="btn btn-secondary"><i class="fas fa-plus-circle"></i> Add Record</a>
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>area</th>
                    <th>tanktype</th>
                    <th>tanksize</th>
                </tr>
            </thead>

            <tbody>
            <?php
            // servername => localhost
            // username => root
            // password => empty
            // database name => staff
            
            $conn = mysqli_connect("localhost", "root", "", "tank2021");
            
            // Check connection
            if($conn === false){
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }
            


                $sql = "SELECT * FROM tanktable";
                $result = mysqli_query($conn, $sql);
                $records = mysqli_num_rows($result);

                if ($records > 0) {
                    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $count = 1;
                    foreach ($row as $row) { ?>
                        <tr>
                          <!--  <td><?= $count++; ?></td> -->
                            <td class="text-capitalize"><?= $row["area"]; ?></td>
                            <td class="text-capitalize"><?= $row["tanktype"]; ?></td>
                            <td class="text-uppercase"><?= $row["tanksize"]; ?></td>
                    
                        </tr>
                <?php
                    }
                }
                mysqli_close($conn);
                ?>


            </tbody>
        </table>
    </div>
    <script>
        function checkDelete() {
            return confirm("Are you sure you want to delete this record?");
        }
    </script>
</body>

</html>