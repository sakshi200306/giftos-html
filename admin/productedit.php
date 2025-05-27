<?php
include("db_connection.php");
include("header.php");
include("side_bar.php");

$product_id = $_GET["product_id"];
$query = "SELECT * FROM `product_tbl` WHERE `id` = '$product_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>
<div id="page-wrapper">
<div id="page-inner">
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="card p-2">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3>
                            <b>Edit producta Information</b>
                        </h3>
                        <div class="text-right">
                            <a type="button" class="btn btn-outline-dark" href="productadd.php"><i class="fa fa-eye"></i> Categary List </a>
                        </div>
                    </div>
                </div>
                <div class="container border border-danger rounded mt-3 bg-light mb-2">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <table class="table-bordered table mt-5">
                                <form action="producteditout.php?id=<?= $row["id"] ?>" method="post" enctype="multipart/form-data">
                                    <tr>
                                        <th>Product Name:</th>
                                        <td><input type="text" name="name" id="name"  value="<?= $row["name"] ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>image:</th>
                                        <td><input type="file" name="image" id="imge" value="<?= $row["image"]?>"></td>
                                    </tr>
                                    <tr>
                                        <th>MRP:</th>
                                        <td><input type="text" name="MRP" id="MRP"  value="<?= $row["MRP"]?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Discount Percentage:</th>
                                        <td><input type="text" name="per" id="per"  value="<?= $row["per"]?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Discount Value:</th>
                                        <td><input type="text" name="value" id="value"  value="<?= $row["value"]?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Sell Price:</th>
                                        <td><input type="text" name="sell" id="sell"  value="<?= $row["sell"]?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Description:</th>
                                        <td><input type="text" name="dis" id="dis"  value="<?= $row["dis"]?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Categary:</th>
                                        <td><input type="text" name="categary" id="categary"  value="<?= $row["categary"]?>"></td>
                                    </tr>
                                    

                                    <tr>
                                        <td colspan="2"><input type="submit" value="submit"
                                                class="btn btn-outline-success">
                                        </td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
include("footer.php");
?>