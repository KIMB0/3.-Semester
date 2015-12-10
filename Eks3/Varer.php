<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="ISO-8859-1">
        <link href="EksamenCss.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
       
        <div id="Wrapper">
            
            <div id="Header">
                <img src="Image/LogoKoleHuset.png" alt="kølehuset logo" id="Logo"/>
                <h1>Kølehuset</h1>
            </div>
            
                <div id="Menu">
                    <a href="index.php">Forside</a> <a href="Varer.php">Varer</a>
                </div>
            
                    <div id="Content">
                        <a href="http://localhost/Eks3/Varer.php?kategori=all"><img src="Image/VareButtonAlle.png" width="12%" height="12%"></a>
                        <a href="http://localhost/Eks3/Varer.php?kategori=milk"><img src="Image/VareButtonMilk.png" width="12%" height="12%"></a>
                        <a href="http://localhost/Eks3/Varer.php?kategori=ost"><img src="Image/VareButtonOst.png" width="12%" height="12%"></a>
                        <a href="http://localhost/Eks3/Varer.php?kategori=yogurt"><img src="Image/VareButtonYoghurt.png" width="12%" height="12%"></a>
                        <a href="http://localhost/Eks3/Varer.php?kategori=skyr"><img src="Image/VareButtonSkyr.png" width="12%" height="12%"></a>
                        <a href="http://localhost/Eks3/Varer.php?kategori=egg"><img src="Image/VareButtonEgg.png" width="12%" height="12%"></a>
                        <a href="http://localhost/Eks3/Varer.php?kategori=paalaeg"><img src="Image/VareButtonPaalaeg.png" width="12%" height="12%"></a>
                        <a href="http://localhost/Eks3/Varer.php?kategori=diverse"><img src="Image/VareButtonDiverse.png" width="12%" height="12%"></a>

                        <?php
                        $uri = "http://kagejohnlagersystem.cloudapp.net/Service1.svc/temperatur/";
                   $jsondata = file_get_contents($uri);
          
          
        $convertToAssociativeArray = true;
        $arr = json_decode($jsondata, $convertToAssociativeArray);
        
        
        echo "<pre>";
        echo "<strong>Temperaturen i kølerummet er: " . $arr["Temperatur"] . "C°" . "<br/></strong>";
        
        if ($arr["Temperatur"] < 5) {
            echo "<strong><font color=\"green\">STATUS</font>: Temperaturen er i orden.</strong><br/>";
    
}
 else {
    echo "<strong><font color=\"red\">STATUS</font>: Temperaturen er for varm. Kontakt kundeservice!</strong><br/>";
}
                        include 'KategoriValgt.php';
                        
                       
                        
        ?>
                        
                    </div>
                    
                        
                    
            
            <div id="Footer">
                &copy; Kølehuset Kontakt: Tlf:12345678 Mail:kolehuset@eksample.dk
            </div>
            
        </div>
    </body>
</html>
