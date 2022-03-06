<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Document</title>
</head>
<body>
    <p>Tu nombre no es johan.</p>
    <?php
    $nombre ="johan";
    if ($nombre == "johan"){
        print "<p>Tu nombre es johan.</p>\n";
        if($nombre!="johan"){
            print"<p>tu nombre no es johan</p>\n";
        }
    }
    ?>
</body>
</html>