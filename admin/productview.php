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
                                <a type="button" class="btn btn-outline-info" href="productlist.php"><i
                                        class="nav-icon fas fa-user-plus"></i>Product List</a>

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
                        
                        <th class="table-info"> Product Name</th>
                        <th class="table-info">Image</th>
                        <th class="table-info">MRP</th>
                        <th class="table-info">Discount Percentage</th>
                        <th class="table-info">Discount Value</th>
                        <th class="table-info">Sell Price</th>
                        <th class="table-info">Description</th>
                        

                        </tr>
                        <?php
                        $product_id = $_GET["product_id"];
                        $query = "SELECT * FROM product_tbl WHERE id= '$product_id'";
                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                            <td><?= $row["name"] ?> </td>
                            <td><img style="width  :100px; height:100px;" src="uploads/ecommerce/<?= $row["image"]?>" alt=""></td>
                            <td><?= $row["MRP"] ?> </td>
                            <td><?= $row["per"] ?> </td>
                            <td><?= $row["value"] ?> </td>
                            <td><?= $row["sell"] ?> </td>
                            <td><?= $row["dis"] ?> </td>
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