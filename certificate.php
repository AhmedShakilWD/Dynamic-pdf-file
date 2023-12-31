<?php
if(isset($_POST["submit"])){
    //header('content-type:image/jpeg');
    $font="BRUSHSCI.TTF";
    $image=imagecreatefromjpeg("Certificate.jpg");
    $color=imagecolorallocate($image,19,21,22);
    $name=$_POST["name"];
    $file=time();
    $file_path="certificate/".$name.".jpg";
    $file_path_pdf="certificate/".$name.".pdf";
    imagettftext($image,80,0,750,760,$color,$font,$name);
    imagejpeg($image,$file_path);
    imagedestroy($image);
    // phpinfo();
    require("fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->Image($file_path,0,0,210,140);
    $pdf->Output($file_path_pdf,"F");
}
?>
<form method="post">
    <input type="text" name="name">
    <input type="submit" name="submit">
</form>