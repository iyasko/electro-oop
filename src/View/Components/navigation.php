<?php
    $navigation = [
        'Hot Deals' => '/',
        'Categories' => '#',
        'Laptops' => '/product.php',
        'Smartphones' => '#',
        'Cameras' => '#',
        'Accessories' => '#',
    ];
?>

<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <?php foreach ($navigation as $itemName => $itemLink): ?>
                    <li <?php if ($_SERVER['REQUEST_URI'] === $itemLink): ?> class="active" <?php endif; ?>>
                        <a href="<?= $itemLink; ?>"><?= $itemName; ?></a>
                    </li>
                <?php endforeach;?>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>