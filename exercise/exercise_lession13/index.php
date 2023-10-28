<!-- 

1. hiển thị dữ liệu bài viết lên mục tin tức
+ tiêu đề
+ mô tả ngắn
2. hiển thị dữ liệu sản phẩm lên mục sản phẩm
+ tên sản phẩm
+ giá
dùng dữ liệu mảng
 -->
<?php
require_once "./lib/templade.php";
get_header();
?>
<div class="content">
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : "home";
    $path = "./pages/{$page}.php";
    // echo $path;
    if (file_exists($path)) {
        require_once $path;
    }
    else
    {
        get_error_404();
    }
    ?>
</div>
<?php
get_footer();
?>