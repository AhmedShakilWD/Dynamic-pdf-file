<?php
if(isset($_POST["submit"])){
    // header('content-type:image/jpeg');
    $font="BRUSHSCI.TTF";
    $font2="AGENCYB.TTF";
    $image=imagecreatefromjpeg("innobativeSkills.jpg");
    $color=imagecolorallocate($image,19,21,22);
    $name=$_POST["name"];
    $ins_name=$_POST["course"];
    $file=time();
    $file_path="certificate/".$name.".jpg";
    $file_path_pdf="certificate/".$name.".pdf";
    imagettftext($image,75,0,390,490,$color,$font,$name);
    imagettftext($image,30,0,725,700,$color,$font2,$ins_name);
    imagejpeg($image,$file_path);
    imagedestroy($image);
    // phpinfo();
    require("fpdf.php");
    $pdf = new FPDF('L','in',[11.7,8.27]);
    $pdf->AddPage();
    $pdf->Image($file_path,0,0,11.7,8.27);
    $pdf->Output($file_path_pdf,"F");
}
?>
<form method="post">
    <label for="name">User Name</label>
    <input type="text" id="name" name="name">
    <label for="course">Course Name</label>
    <input type="text"  id= "course" name="course">
    <input type="submit" name="submit">
</form>