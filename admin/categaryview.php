<?php
include "header.php";
include "side_bar.php";
include("db_connection.php");
?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">

                                <li class="breadcrumb-item active"></li>
                                <a type="button" class="btn btn-outline-info" href="categary.php"><i
                                        class="nav-icon fas fa-user-plus"></i>Categary List</a>

                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>image</th>
                            <th>dis</th>

                        </tr>
                        <?php
                        $categary_id = $_GET["categary_id"];
                        $query = "SELECT * FROM `categary` WHERE `id`= '$categary_id'";
                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td> <?= $row["id"] ?> </td>
                                <td> <?= $row["product_name"] ?> </td>
                                <td> <?= $row["image"] ?> </td>
                                <td> <?= $row["dis"] ?> </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>
<?php

include "footer.php";
?>