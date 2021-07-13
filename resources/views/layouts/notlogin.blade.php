@if(!Auth::user())
<?php
    header('Location: http://127.0.0.1:8000/login');
    exit();
?>
@endif
