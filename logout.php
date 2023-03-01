<?php
session_start();
session_destroy();
echo "<script>
    window.alert('Alhamdulillah, anda telah logout!');
    window.location.href='landing.php';
    </script>";
?>

