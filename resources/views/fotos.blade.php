@extends('plantilla')

@section('seccion')
<h1 class="display-4">Galeria</h1>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style type="text/css">
            body {
                background: #fff;
            }
    
            img {
                width: auto;
                box-shadow: 0px 0px 20px #cecece;
                -moz-transform: scale(0.7);
                -moz-transition-duration: 0.6s;
                -webkit-transition-duration: 0.6s;
                -webkit-transform: scale(0.7);
    
                -ms-transform: scale(0.7);
                -ms-transition-duration: 0.6s;
            }
    
            img:hover {
                box-shadow: 20px 20px 20px #dcdcdc;
                -moz-transform: scale(0.8);
                -moz-transition-duration: 0.6s;
                -webkit-transition-duration: 0.6s;
                -webkit-transform: scale(0.8);
    
                -ms-transform: scale(0.8);
                -ms-transition-duration: 0.6s;
    
            }
        </style>
        <?php
        $folder_path = public_path('images/'); //image's folder path
        $folder_path2 = './images/'; //image's folder path
    
        $num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);
    
        $folder = opendir($folder_path);
    
        if ($num_files > 0) {
            ?><table> <?php
            while (false !== ($file = readdir($folder))) {
                $file_path = $folder_path . $file;
                $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'bmp') {
                    ?>
                    <tp style="width:100%"><a href="<?php echo $file_path; ?>"><img src="{!!asset($folder_path2.$file)!!}" height="250" /></a></tp>
    
                <?php
            }
        }  ?></table><?php
    } else {
        echo "the folder was empty !";
    }
    closedir($folder);
    ?>
@endsection