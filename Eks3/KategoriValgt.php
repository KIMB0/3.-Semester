
<?php


                        // ?kategori=all
                        
                        switch (htmlspecialchars($_GET["kategori"])) {
    case "all":
        
        $uri = "http://kagejohnlagersystem.cloudapp.net/Service1.svc/varer/";
      

        break;
        
    case "diverse":
        //code to be executed if n=diverse;
$uri = "http://kagejohnlagersystem.cloudapp.net/Service1.svc/varer/kategori/diverse";
  
        
        
        break;
    
    case "milk":
        //code to be executed if n=milk;
        $uri = "http://kagejohnlagersystem.cloudapp.net/Service1.svc/varer/kategori/milk";
        break;
    
    case "egg":
        //code to be executed if n=egg;
        $uri = "http://kagejohnlagersystem.cloudapp.net/Service1.svc/varer/kategori/egg";
        break;
    
    case "ost":
        //code to be executed if n=cheese;
        $uri = "http://kagejohnlagersystem.cloudapp.net/Service1.svc/varer/kategori/ost";
        break;
    
        case "paalaeg":
        //code to be executed if n=paalaeg;
            $uri = "http://kagejohnlagersystem.cloudapp.net/Service1.svc/varer/kategori/paalaeg";
        break;
    
    case "skyr":
        //code to be executed if n=skyr;
        $uri = "http://kagejohnlagersystem.cloudapp.net/Service1.svc/varer/kategori/skyr";
        break;
    
    case "yogurt":
                $uri = "http://kagejohnlagersystem.cloudapp.net/Service1.svc/varer/kategori/yogurt";
        break;
    
    default:        
        //code to be executed if n is different from all labels;
        
        break;
}
          

          $jsondata = file_get_contents($uri);
          
          
        $convertToAssociativeArray = true;
        $arr = json_decode($jsondata, $convertToAssociativeArray);
        echo "<pre>";
       // $vare = $arr [1];
        
foreach ($arr as $value) {
          
          echo $value["Navn"] . " koster: " . $value["Pris"] . " KR. Antal tilbage: " . $value["Anatal"] . "<br/>";
          
}

   
          


          