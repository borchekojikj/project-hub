<?php

require_once("./config/db.php");
$query = "select * from information";

$result = mysqli_query($con, $query);

$query = "select * from select_options";

$result1 = mysqli_query($con, $query);


?>

<!DOCTYPE html>
<html>

<head>
    <title>Table with database</title>

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />
    <style>
        td:hover {
            background: rgb(56, 49, 60);
            background: linear-gradient(90deg, rgba(56, 49, 60, 0.8) 0%, rgba(61, 62, 77, 0.16010154061624648) 50%, rgba(105, 77, 38, 0.8) 100%);
        }

        /* tr:hover {
            background-color: red;
        } */

        body {
            background: rgb(56, 49, 60);
            background: linear-gradient(90deg, rgba(56, 49, 60, 1) 0%, rgba(61, 62, 77, 0.16010154061624648) 50%, rgba(105, 77, 38, 1) 100%);
        }

        table {
            box-shadow: 1px 11px 36px 4px rgba(133, 133, 133, 0.75);
            -webkit-box-shadow: 1px 11px 36px 4px rgba(133, 133, 133, 0.75);
            -moz-box-shadow: 1px 11px 36px 4px rgba(133, 133, 133, 0.75);
        }
    </style>
</head>

<body>
    <div class="container-fluid">

        <div class="row justify-content-center align-items-center mt-5">

            <div class="col-10 text-center">
                <p class=" h1 mt-5 bg-dark text-white p-2 mb-0  rounded-top border-bottom">База со податоци</p>
                <table class="table table-secondary">
                    <tr class="table-dark">
                        <th>id</th>
                        <th>Име и Презиме</th>
                        <th>Има на Компанија</th>
                        <th>Емаил</th>
                        <th>Тип на студент</th>
                        <th>Контакт број</th>

                    </tr>
                    <tr>
                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <td><?php echo $row['id']  ?></td>
                            <td><?php echo $row['contact_name']  ?></td>
                            <td><?php echo $row['company_name']  ?></td>
                            <td><?php echo $row['company_email']  ?></td>
                            <td><?php echo $row['student_type']  ?></td>
                            <td><?php echo $row['contact_phone']  ?></td>


                    </tr>
                <?php
                        }

                ?>


                </table>

            </div>
        </div>
    </div>
</body>

</html>