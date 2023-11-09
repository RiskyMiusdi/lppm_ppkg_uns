<!DOCTYPE html>
<html>

<head>
    <title>CRUD Example</title>
</head>

<body>
    <h1>Orders and Customers</h1>

    <h2>Create Order</h2>
    <form action="<?php echo site_url('crud_controller/create_order'); ?>" method="post">
        <select name="customer_id">
            <?php foreach ($customers as $customer) : ?>
                <option value="<?php echo $customer->customer_id; ?>"><?php echo $customer->customer_name; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Createmnmnmn</button>
    </form>

    <h2>Orders</h2>
    <table>
        <tr>
            <th>Order ID</th>
            <th>Order Date</th>
            <th>Customer Name</th>
            <th>Action</th>
        </tr>
        <?php foreach ($orders as $order) : ?>
            <tr>
                <td><?php echo $order->order_id; ?></td>
                <td><?php echo $order->order_date; ?></td>
                <td><?php echo $order->customer_name; ?></td>
                <td>
                    <a href="<?php echo site_url('crud_controller/update_order/' . $order->order_id); ?>">Update</a>
                    <a href="<?php echo site_url('crud_controller/delete_order/' . $order->order_id); ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>