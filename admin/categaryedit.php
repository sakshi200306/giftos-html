<?php
include("db_connection.php");
include("header.php");
include("side_bar.php");

$categary_id = $_GET["categary_id"];
$query = "SELECT * FROM categary WHERE `id` = '$categary_id'";
$result = mysqli_query($conn, $query);
($row = mysqli_fetch_array($result))
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
                                    <b>Edit Categary Information</b>
                                </h3>
                                <div class="text-right">
                                    <a type="button" class="btn btn-outline-dark" href="categary.php"><i class="fa fa-eye"></i> Categary List </a>
                                </div>
                            </div>
                        </div>
                        <div class="container border border-danger rounded mt-3 bg-light mb-2">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8">
                                    <table class="table-bordered table mt-5">
                                        <form action="categaryeditout.php?categary_id=<?= $row["id"] ?>" method="post" enctype="multipart/form-data">

                                            <tr>

                                                <th>Categary image:</th>
                                                <td><input type="file" name="image" id="" value="<?= $row["image"] ?>"></td>
                                            </tr>

                                            <tr>
                                                <th>Categary Name :</th>
                                                <td><input type="text" name="name" id="" class="form-control" value="<?= $row["product_name"] ?>"></td>
                                            </tr>
                                            <tr>
                                                <th>Discription :</th>
                                                <td><input type="text" name="dis" id="" class="form-control" value="<?= $row["dis"] ?>"></td>
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