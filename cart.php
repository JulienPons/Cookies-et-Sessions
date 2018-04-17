<?php
require 'inc/head.php';
if (!isset($_SESSION['user'])) {
    header('Location: login.php'); die;
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <table class="table table-striped">
            <tr>
                <th scope="col">Cookies</th>
                <th scope="col">Quantity</th>

            </tr>
            <tr>
                <td>Pecan nuts</td>
                <td><?php echo $_SESSION['qty46'] ?? '0' ?></td>
            </tr>
            <tr>
                <td>Chocolate chips</td>
                <td><?php echo $_SESSION['qty36'] ?? '0' ?></td>
            </tr>
            <tr>
                <td>Chocolate cookie</td>
                <td><?php echo $_SESSION['qty58'] ?? '0' ?></td>
            </tr>
            <tr>
                <td>M&M's&copy; cookies</td>
                <td><?php echo $_SESSION['qty32'] ?? '0' ?></td>
            </tr>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
