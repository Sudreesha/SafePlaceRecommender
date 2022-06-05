<!-- Connecting to localhost and database -->

<?php
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'safeplace');
?>

<!-- End of Connecting to localhost and database -->