<?php
include "header.php";
include "db_connection.php"
?>
<?php
include "side_bar.php";
?>
<div id="page-wrapper" >
<div id="page-inner">
<form action="categaryout.php" method="post" enctype="multipart/form-data">
    <div class="page-wrapper">
        <div class="page_inner">
            <div class="cotainer">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <table class="table mt-3">
                            <tr>
                                <th>categary id:</th>
                                <td><input type="no" name="id" id=""></td>
                            </tr>

                            <tr>
                                <th>categary name:</th>
                                <td><input type="text" name="name" id=""></td>
                            </tr>

                            <tr>
                                <th>categary image:</th>
                                <td><input type="file" name="image" id=""></td>
                            </tr>

                            <tr>
                                <th> categary:</th>
                                <td><input type="text" name="dis" id=""></td>
                            </tr> 
                            <tr>
                                <td colspan="2"><input type="submit" value="submit" class="btn btn-outline-success"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
</div>

<?php
include "footer.php";
?>