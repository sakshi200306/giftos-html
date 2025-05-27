<?php
include('header.php');
include('sidebar.php');
include('db_connection.php');
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Orders List</h1>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead class="table-dark">
                        <tr>
                            <th>Order ID</th>
                            <th>Customer ID</th>
                            <th>Total Amount</th>
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>Customer Phone</th>
                            <th>Customer Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Zip Code</th>
                            <th>Payment Method</th>
                            <th>Order Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM orders";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($result)) :
                        ?>
                            <tr>
                                <td><?= $row['order_id']; ?></td>
                                <td><?= $row['customer_id']; ?></td>
                                <td><?= $row['total_amount']; ?></td>
                                <td><?= $row['name']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['phone']; ?></td>
                                <td><?= $row['address']; ?></td>
                                <td><?= $row['city']; ?></td>
                                <td><?= $row['state']; ?></td>
                                <td><?= $row['zip_code']; ?></td>
                                <td><?= $row['payment_method']; ?></td>
                                <td><?= $row['order_date']; ?></td>
                                <td><?= $row['status']; ?></td>
                                <td>
                                    <a href="order_view.php?id=<?= $row['order_id']; ?>" class="btn btn-sm btn-success">view</a><br><br>
                                    <a href="order_edit.php?id=<?= $row['order_id']; ?>" class="btn btn-sm btn-primary">Edit</a><br><br>
                                    <a href="order_delete.php?id=<?= $row['order_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php');?>
