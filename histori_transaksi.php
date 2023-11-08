<?php
include "header.php";
?>
<h1 style="text-align: center">Transaction History</h1>
<table class="table table-hover table-striped" style="text-align: center">
    <thead>
        <th>NO</th>
        <th>Date</th>
        <th>Menu</th>
        <th>Amount</th>
        <th>Price</th>
        <th>Delivery Fee</th>
    </thead> 
    <tbody>
        <?php
        include "data.php";
        $qry_histori = mysqli_query($conn, "select * from transaksi where id_customer='" . $_SESSION['id_customer'] . "'order by id_transaksi desc");
        $no = 0;
        while ($dt_histori = mysqli_fetch_array($qry_histori)) {
            $ongkir = "$10";
            $no++;

            $menu_dibeli = "<dl>";
            $qry_menu = mysqli_query($conn, "select * from detail_transaksi join menu on menu.id_menu = detail_transaksi.id_menu where id_transaksi = '" . $dt_histori['id_transaksi'] . "'");
            while ($dt_menu = mysqli_fetch_array($qry_menu)) {
                $menu_dibeli .= "<dd>" . $dt_menu['nama_menu'] . "</dd>";
            }
            $menu_dibeli .= "</dl>";

            $totalharga = "<ul>";
            $qry_detail = mysqli_query($conn, "SELECT  SUM(total) AS total_harga FROM transaksi WHERE id_transaksi = '" . $dt_histori['id_transaksi'] . "'");
            while ($dt_detail = mysqli_fetch_array($qry_detail)) {
                $totalharga .= "$" . $dt_detail['total_harga'];
            }
            $totalharga .= "</ul>";

            $totalqty = "<ul>";
            $qry_detail = mysqli_query($conn, "SELECT  SUM(jumlah_beli) AS total_qty FROM transaksi WHERE id_transaksi = '" . $dt_histori['id_transaksi'] . "'");
            while ($dt_detail = mysqli_fetch_array($qry_detail)) {
                $totalqty .= $dt_detail['total_qty'];
            }
            $totalqty .= "</ul>";

            ?>
            <tr>
                <td style="vertical-align: middle">
                    <?= $no ?>
                </td>
                <td style="vertical-align: middle">
                    <?= $dt_histori['tanggal_transaksi'] ?>
                </td>
                <td style="vertical-align: middle">
                    <?= $menu_dibeli ?>
                </td>
                <td style="vertical-align: middle">
                    <?= $totalqty ?>
                </td>
                <td style="vertical-align: middle">
                    <?= $totalharga ?>
                </td>
                <td style="vertical-align: middle">
                    <?= $ongkir ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<?php
include "footer.php";
?>