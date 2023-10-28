<?php
require_once "./lib/data/data.php";
?>
<div class="content">
    <h1>Sản phẩm</h1>
    <div class="container">
        <?php
        if (!empty($list_product_arr)) {
        ?>
            <ul class="list-item">
                <?php
                foreach ($list_product_arr as $value) {
                ?>
                    <li class="li-item">
                        <a href="#">
                            <img src="./public/images/<?php echo $value['image']; ?>" alt="<?php echo $value['image']; ?>" class="item-image">
                            <h3 class="item-title"> <?php echo $value['title']; ?></h3>
                            <p class="item-description"> <?php echo $value['description']; ?></p>
                        </a>
                    </li>
                <?php
                }
                foreach ($list_product_arr as $value) {
                ?>
                    <li class="li-item">
                        <a href="#">
                            <img src="./public/images/<?php echo $value['image']; ?>" alt="<?php echo $value['image']; ?>" class="item-image">
                            <h3 class="item-title"> <?php echo $value['title']; ?></h3>
                            <p class="item-description"> <?php echo $value['description']; ?></p>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        <?php
        }
        ?>

    </div>
</div>