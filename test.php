<?php
     header('content-type:image/jpeg');
     $font="BRUSHSCI.TTF";
     $image=imagecreatefromjpeg("Certificate.jpg");
     $color=imagecolorallocate($image,19,21,22);
     $name=$_POST["name"];
    //  $file=time();
    //  $file_path="certificate/".$name.".jpg";
    //  $file_path_pdf="certificate/".$name.".pdf";
     imagettftext($image,40,0,220,220,$color,$font,$name);
     imagejpeg($image);
     imagedestroy($image);
?>