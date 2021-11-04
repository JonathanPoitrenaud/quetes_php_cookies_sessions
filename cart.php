<?php
require 'inc/head.php';
require 'inc/data/products.php';
if (!isset($_SESSION['name']))
{
    header('Location: login.php');
}
$sumCookies = array_count_values($_SESSION['add_to_cart']);
?>
    <section class="cookies container">
        <div class="row d-flex justify-content-center">
            <ul class="list-group col-3">
                <?php foreach ($sumCookies as $cookie => $value): ?>
                    <li class="list-group-item">
                        <p><?= $catalog[$cookie]['name'] ?></p>
                        <p>Articles in your cart : <?= $value ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>