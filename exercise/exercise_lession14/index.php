<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CKEditor</title>
    <script src="https://cdn.ckeditor.com/4.22.1/full-all/ckeditor.js"></script>
    <!-- <link rel="stylesheet" href="./ckeditor3/samples/css/samples.css"> -->
    <!-- <script src="./ckeditor 2/ckeditor.js"></script> -->
</head>

<body>
    <textarea name="content-textarea" id = "ckeditor"class ="ckeditor"></textarea>
    
    <!-- <textarea name="content-textarea"></textarea> -->
    <script>
        CKEDITOR.replace('content-textarea');
        // CKEDITOR.replace('content-textarea');
//         CKEDITOR.replace( 'ckeditor', {
//     language: 'fr',
//     uiColor: '#9AB8F3'
// });
    </script>
</body>

</html>