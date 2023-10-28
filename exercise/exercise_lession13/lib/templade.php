<?php
function get_header()
{
    $path_header = "./inc/header.php";
    if (file_exists($path_header))
        require_once $path_header;
    else
        echo "không tồn tại đường dẫn {$path_header}";
}
function get_footer()
{
    $path_footer = "./inc/footer.php";
    if (file_exists($path_footer))
        require_once $path_footer;
    else
        echo "không tồn tại đường dẫn {$path_footer}";
}
function get_error_404()
{
    $path_error_404 = "./inc/404.php";
    if (file_exists($path_error_404))
        require_once $path_error_404;
    else
        echo "không tồn tại đường dẫn {$path_error_404}";
}