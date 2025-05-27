<?php
include "header.php";
include "db_connection.php"
?>
<?php
include "side_bar.php";
?>
<div id="page-wrapper">
    <div id="page-inner">
        <form action="productout.php" method="post" enctype="multipart/form-data">
            <div class="page-wrapper">
                <div class="page_inner">
                    <div class="cotainer">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <table class="table mt-3">
                                    
                                    <tr>
                                        <th>Product name:</th>
                                        <td><input type="text" name="name" id="name"></td>
                                    </tr>

                                    <tr>
                                        <th>Product image:</th>
                                        <td><input type="file" name="image" id="image"></td>
                                    </tr>

                                    <tr>
                                        <th> MRP</th>
                                        <td><input type="text" name="MRP" id="MRP" onkeyup="fun()"></td>
                                    </tr>

                                    <tr>
                                        <th>Discount Percentage :</th>
                                        <td><input type="text" name="per" id="per" onkeyup="fun()"></td>
                                    </tr>

                                    <tr>
                                        <th>Discount Value :</th>
                                        <td><input type="text" name="value" id="value"></td>
                                    </tr>

                                    <tr>
                                        <th>Sell Price :</th>
                                        <td><input type="text" name="sell" id="sell"></td>
                                    </tr>

                                    <tr>
                                        <th>Description :</th>
                                        <td><input type="text" name="dis" id="dis"></td>
                                    </tr>
                                  
                                        <b>select categary</b>
                                       <select name="categary" id="" class="form-control mb-3">
                                        <option value="">select categary</option>
                                        <?php
                                        include "db_connection";
                                        $query = "SELECT * FROM categary";
                                        $result = mysqli_query($conn,$query);
                                        while($row = mysqli_fetch_array($result)){
                                            ?>
                                            <option value="<?=$row['id']?>">
                                                <?=$row['product_name']?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                       </select>
                                       
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
<script>
function fun(){
var MRP= document.getElementById("MRP").value;
var per=document.getElementById("per").value;
var value= document.getElementById("value").value=(MRP*per/100)
var sell=document.getElementById("sell").value=(MRP-value)

}
</script>

<?php
include "footer.php";
?>