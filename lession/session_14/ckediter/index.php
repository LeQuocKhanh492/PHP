<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CKEditor</title>
    <!-- <script src="https://cdn.ckeditor.com/4.22.1/full-all/ckeditor.js"></script> -->
    <!-- <link rel="stylesheet" href="./ckeditor3/samples/css/samples.css"> -->
    <script src="ckeditor4/ckeditor.js"></script>
</head>

<body>
    <?php
    
    if(isset($_POST['content-textarea']))
    {
        echo print_r($_POST);
        echo $_POST['content-textarea'];
        $file = $_FILES['content-textarea'];
        echo $file;
    }
    ?>
    <form action="#" method ="post" enctype="multipart/form-data" >
        <textarea name="content-textarea" id = "ckeditor" class ="ckeditor"></textarea>
        <button name ="btn-submit"> submit</button>
    </form>
    
    <!-- <textarea name="content-textarea"></textarea> -->
    <!-- <script>
        CKEDITOR.replace('content-textarea');
    </script> -->
</body>

</html>