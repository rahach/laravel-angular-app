<?php

namespace Import\Helpers;

class DataMapping{


    public static function brandMapping($articleName){
        $categoryID = 0;

        switch ($articleName):
            //Outflexx                                  
            case (preg_match('/^(?=.*(outflex)).*$/i', $articleName) ? true : false):
                $categoryID =259;
                break;
            //Karibu                                  
            case (preg_match('/^(?=.*(karibu)).*$/i', $articleName) ? true : false):
                $categoryID =255;
                break;
            //Weka                                  
            case (preg_match('/^(?=.*(weka)).*$/i', $articleName) ? true : false):
                $categoryID =252;
                break;            
            //Palmako                                  
            case (preg_match('/^(?=.*(palmako)).*$/i', $articleName) ? true : false):
                $categoryID =253;
                break;                                                                                                                                                
            //Wolff Finnhaus                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(wolf.*finnhaus)).*$/i', $articleName) ? true : false):
                $categoryID =251;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
            //Tene Kaubandus                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(tene.*kaubandus)).*$/i', $articleName) ? true : false):
                $categoryID =257;
                break;                                                                                                                                                                                                                                                  
            //Lasita Maja                                  
            case (preg_match('/^(?=.*(lasita.*maja)).*$/i', $articleName) ? true : false):
                $categoryID =256;
                break;
            //Skan Holz                                  
            case (preg_match('/^(?=.*(skan.*holz)).*$/i', $articleName) ? true : false):
                $categoryID =254;
                break;            
            //kategorie Sonstige    
            default:
                $categoryID = 258;
        endswitch;
        return $categoryID;
    }


    
    public static function brandStringMapping($articleName){
        $categoryID = "";

        switch ($articleName):
            //Outflexx                                  
            case (preg_match('/^(?=.*(outflex)).*$/i', $articleName) ? true : false):
                $categoryID = "Outflexx";
                break;
            //Karibu                                  
            case (preg_match('/^(?=.*(karibu)).*$/i', $articleName) ? true : false):
                $categoryID = "Karibu";
                break;
            //Weka                                  
            case (preg_match('/^(?=.*(weka)).*$/i', $articleName) ? true : false):
                $categoryID = "Weka";
                break;            
            //Palmako                                  
            case (preg_match('/^(?=.*(palmako)).*$/i', $articleName) ? true : false):
                $categoryID = "Palmako";
                break;                                                                                                                                                
            //Wolff Finnhaus                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(wolf.*finnhaus)).*$/i', $articleName) ? true : false):
                $categoryID = "Wolff Finnhaus";
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
            //Tene Kaubandus                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(tene.*kaubandus)).*$/i', $articleName) ? true : false):
                $categoryID = "Tene Kaubandus";
                break;                                                                                                                                                                                                                                                  
            //Lasita Maja                                  
            case (preg_match('/^(?=.*(lasita.*maja)).*$/i', $articleName) ? true : false):
                $categoryID = "Lasita Maja";
                break;
            //Skan Holz                                  
            case (preg_match('/^(?=.*(skan.*holz)).*$/i', $articleName) ? true : false):
                $categoryID = "Skan Holz";
                break;            
            //kategorie Sonstige    
            default:
                $categoryID = "Sonstige";
        endswitch;
        return $categoryID;
    }    
    
    
    

    public static function categoryMapping($articleName){

        $categoryIDs = [];
            //Gartenhäuser            
            if (preg_match('/^(?=.*garten.*haus.*)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 46);}
            //Holz Gartenhäuser            
            if (preg_match('/^(?=.*holz.*)(?=.*garten.*haus.*)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 248);}
            //Metall Gartenhäuser            
            if (preg_match('/^(?=.*(metall|alu|stahl|blech).*)(?=.*garten.*haus.*)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 249);}
            //Kunststoff Gartenhäuser            
            if (preg_match('/^(?=.*kunststoff.*)(?=.*garten.*haus.*)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 250);}                
            //Gartenlauben            
            if (preg_match('/^(?=.*garten.*laube)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 240);}                
            //Garten Blockbohlenhäuser            
            if (preg_match('/^(?=.*block.*)(?=.*bohle.*)(?=.*gartenhaus.*)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 243);}
            //Gartenpavillons           
            if (preg_match('/^(?=.*pavillon.*)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 50);}
            //Saunahäuser           
            if (preg_match('/^(?=.*sauna.*)(?=.*haus.*)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 232);}
            //Saunafässer           
            if (preg_match('/^(?=.*sauna.*)(?=.*fass.*)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 235);}
            //Gewächshäuser           
            if (preg_match('/^(?=.*(gewächs|gewaechs).*)(?=.*haus.*)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 233);}
            //Orangerien           
            if (preg_match('/^(?=.*orangerie.*)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 234);}
            //Gerätehäuser           
            if (preg_match('/^(?=.*(geraete|geräte).*)(?=.*pavillon.*)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 236);}
            //Geräteschränke           
            if (preg_match('/^(?=.*(geraet|gerät).*)(?=.*schrank.*)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 237);}                
            //Geräteschuppen           
            if (preg_match('/^(?=.*(geraet|gerät).*)(?=.*schuppen.*)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 239);}                                
            //Zubehör Gartenhäuser           
            if (preg_match('/^(?=.*gartenhaus.*)(?=.*(zubehoer|zubehör).*)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 238);}                                                

            //Default    
            if (empty($categoryIDs)){
                array_push($categoryIDs, 0);}

        return $categoryIDs;
    }

    public static function colorMapping($inputString){

        $inputStringTokens = preg_split("/ -\//", $inputString);

        $colors = array();

        foreach($inputStringTokens as $value){
            switch ($value):
                case (preg_match('/^(?=.*(weiß|weiss|white){1}).*$/i', $value) ? true : false):
                    array_push($colors, "weiß");
                    break;
                case (preg_match('/^(?=.*(schwarz|black){1}).*$/i', $value) ? true : false):
                    array_push($colors, "schwarz");
                    break;
                case (preg_match('/^(?=.*(rot|red){1}).*$/i', $value) ? true : false):
                    array_push($colors, "rot");
                    break;
                case (preg_match('/^(?=.*(blau|blue){1}).*$/i', $value) ? true : false):
                    array_push($colors, "blau");     
                    break;               
                case (preg_match('/^(?=.*(grün|green){1}).*$/i', $value) ? true : false):
                    array_push($colors, "grün");   
                    break;                 
                case (preg_match('/^(?=.*(orange){1}).*$/i', $value) ? true : false):
                    array_push($colors, "orange");   
                    break;                 
                case (preg_match('/^(?=.*(taupe){1}).*$/i', $value) ? true : false):
                    array_push($colors, "taupe");  
                    break;                  
                case (preg_match('/^(?=.*(blaugrau|grau|grey){1}).*$/i', $value) ? true : false):
                    array_push($colors, "grau"); 
                    break;                   
                case (preg_match('/^(?=.*(silber|silver){1}).*$/i', $value) ? true : false):
                    array_push($colors, "silber");
                    break;                    
                case (preg_match('/^(?=.*(gold){1}).*$/i', $value) ? true : false):
                    array_push($colors, "gold");
                    break;                    
                case (preg_match('/^(?=.*(anthrazit){1}).*$/i', $value) ? true : false):
                    array_push($colors, "anthrazit");
                    break;                    
                case (preg_match('/^(?=.*(beige){1}).*$/i', $value) ? true : false):
                    array_push($colors, "beige");
                    break;                    
                case (preg_match('/^(?=.*(braun|brown){1}).*$/i', $value) ? true : false):
                    array_push($colors, "braun");
                    break;                    
                case (preg_match('/^(?=.*(pink){1}).*$/i', $value) ? true : false):
                    array_push($colors, "pink");
                    break;                    
                case (preg_match('/^(?=.*(natur){1}).*$/i', $value) ? true : false):
                    array_push($colors, "natur");
                    break;                                        
            endswitch;
        }    
        $colors = array_unique($colors);        
        return $colors;
    }


    public static function materialMapping($inputString){

        $inputStringTokens = preg_split("/ -\/\./", $inputString);

        $materials = array();

        foreach($inputStringTokens as $value){
            switch ($value):
                case (preg_match('/^(?=.*(eisen| alu|alu |aluminium|stahl|metall){1}).*$/i', $value) ? true : false):
                    array_push($materials, "Metall");
                    break;
                case (preg_match('/^(?=.*(eiche|buche|kiefer|fichte|eukalyptus|teak|akazie|holz|mahagon){1}).*$/i', $value) ? true : false):
                    array_push($materials, "Holz");
                    break;
                case (preg_match('/^(?=.*(pvc|kunststoff){1}).*$/i', $value) ? true : false):
                    array_push($materials, "Kunststoff");
                    break;
            endswitch;
        }    
        $materials = array_unique($materials);
        return $materials;
    }
}    