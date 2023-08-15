<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="text-center mt-3">
            <a  href="home" >Home</a>
            <h2 style="color: skyblue;" ><b>View All Employee</b></h2>
        </div><a class="btn btn-primary" href="addemployee" role="button">Add Employee</a>

        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th scope="col">EMPID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($ViewEmployeeRes['Data'] as $key => $value) {
                    // print_r($value);
                    $i++
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $value->firstname; ?></td>
                        <td><?php echo $value->lastname; ?></td>
                        <td><?php echo $value->email; ?></td>
                        <td><?php echo $value->mobile; ?></td>
                        <td><?php echo $value->gender; ?></td>
                        <td class="text-center">

                            <button class="btn btn-primery "><a href="edit?userid=<?php echo $value->id; ?>">Edit</a></button>
                            <button class="btn btn-danger"><a href="delete?userid=<?php echo $value->id; ?>">Delete</a></button>
                        </td>
                    </tr>
                <?php    }
                ?>


            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>