<?php
include "header.php";
include "db_connection.php";

?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"></li>
                        <a type="button" class="btn btn-secondary" href="productadd.php">Add Product</a>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

       
        <?php
        if (isset($_SESSION["success"])) {
        ?>
            <div class="alert alert-success bg-success alert-dismissible fade show" role="alert">
                <strong><i class="fa fa-check"></i></strong> <?= $_SESSION["success"] ?>
            </div>
        <?php
            unset($_SESSION["success"]);
        }
        ?>
        <?php
        if (isset($_SESSION["info"])) {

        ?>
            <div class="alert alert-info bg-info alert-dismissible fade show" role="alert">
                <strong><i class="fa fa-check"></i></strong> <?= $_SESSION["info"] ?>
            </div>
        <?php

            unset($_SESSION["info"]);
        }
        ?>

        <?php

        if (isset($_SESSION["danger"])) {

        ?>

            <div class="alert alert-danger  bg-danger  alert-dismissible fade show" role="alert">
                <strong><i class="fa fa-check"></i></strong> <?= $_SESSION["danger"] ?>
            </div>

        <?php

            unset($_SESSION["danger"]);
        }
        ?>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <form>
                    <input class="form-control" name="product_Name" type="search" placeholder="Search" value="<?= isset($_GET["product_Name"]) ? $_GET["product_Name"] : "" ?>">
                </form>

            </div>
        </div> <br><br>
        <!-- /.content-header -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <tr>
                         <th class="table-info"> id</th> 
                        <th class="table-info"> Product Name</th>
                        <th class="table-info">Image</th>
                        <th class="table-info">MRP</th>
                        <th class="table-info">Discount Percentage</th>
                        <th class="table-info">Discount Value</th>
                        <th class="table-info">Sell Price</th>
                        <th class="table-info">Description</th>
                        <th class="table-info">Categary</th>
                        <th class="table-info">Action</th>
                    </tr>
                    <?php
                    $count = 0;
                    $query = "SELECT * FROM product_tbl";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>  
                        <tr>
                            <td><?= ++$count ?></td>
                            <td> <?= $row["name"] ?> </td>
                            <td> <img style="width  :100px; height:100px;" src="uploads/ecommerce/<?= $row["image"]?>" alt=""></td>
                            <td> <?= $row["MRP"] ?> </td>
                            <td> <?= $row["per"] ?> </td>
                            <td> <?= $row["value"] ?> </td>
                            <td> <?= $row["sell"] ?> </td>
                            <td> <?= $row["dis"] ?> </td>
                            <td> <?= $row["categary"] ?> </td>
                            <td>    
                                <a href="productview.php?product_id=<?= $row["id"] ?>" class="btn btn-sm mx-1 btn-outline-info">
                                    <i class="fa fa-eye"></i> View
                                </a>
                                <a href="productedit.php?product_id=<?= $row["id"] ?>" class="btn btn-sm mx-1 btn-outline-success">
                                    <i class="fa fa-pen"></i> Edit
                                </a>
                                <a href="productdelete.php?id=<?= $row["id"] ?>" class="btn btn-sm mx-1 btn-outline-danger">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <?php
                    if ($count == 0) {
                    ?>
                        <tr>
                            <td colspan="8">
                                <div class="text-danger">No Data Found</div>
                            </td>
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
</div>
<?php
include "footer.php";
?>s