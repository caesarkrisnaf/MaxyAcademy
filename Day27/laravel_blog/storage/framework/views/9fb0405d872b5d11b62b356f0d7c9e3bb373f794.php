    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>

    <script>
        CKEDITOR.replace('editor', options);
    </script>
<?php /**PATH C:\xampp\htdocs\laravel_8_blog\resources\views/ckeditor/setting.blade.php ENDPATH**/ ?>