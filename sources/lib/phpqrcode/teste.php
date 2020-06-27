<?php 
    include_once "qrlib.php";

    QRcode::png('code data text', 'filename.png'); // creates file
    echo QRcode::png('Luan Gabriel'); 

?>