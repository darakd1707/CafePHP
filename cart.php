<?php
include "header.php";
?>
<h1 style="text-align: center">Your Cart</h1>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>Menu</th>
            <th>Amount</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key_produk => $val_produk):
                ?>
                <tr>
                    <td>
                        <?= ($key_produk + 1) ?>
                    </td>
                    <td>
                        <?= $val_produk['nama_menu'] ?>
                    </td>
                    <td>
                        <?= $val_produk['quantity'] ?>
                    </td>
                    <td>
                        $
                        <?= $val_produk['harga'] * $val_produk['quantity']?>
                    </td>
                    <td><a href="delete_cart.php?id=<?= $key_produk ?>" class="btn btn-danger"><strong>X</strong></a></td>
                </tr>
            <?php endforeach ?>
        <?php } else { ?>
            <tr>
                <td colspan="5">Your cart is empty.</td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<a href="menu.php" class="btn btn-secondary">Add Menu</a>
<a href="checkout.php" class="btn btn-warning">Check Out</a>