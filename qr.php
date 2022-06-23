<?php 
if(isset($_POST) && !empty($_POST)) {
    include('phpqrcode/qrlib.php'); 
    $codesDir = "codes/";   
    $codeFile = date('d-m-Y-h-i-s').'.png';
    QRcode::png($_POST['formData'], $codesDir.$codeFile, 'H', '8'); 
    echo '<img class="img-thumbnail" src="'.$codesDir.$codeFile.'" />';
} else {
    header('location:./');
}
?>
