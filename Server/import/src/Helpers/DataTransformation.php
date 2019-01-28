<?php
namespace Import\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Import\Helpers\BigDataMapping;
use Import\Helpers\DataMapping;

class DataTransformation{

    private function csv_header($sStr) { 
        $str = (string)$sStr;
        $newString = strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '_', ''), $this->remove_accent($str)));  
        return $newString; 
    } 

    private static function checkSKU($sku){    
        if( DB::table('products')->where('sku', $sku)->pluck('sku')->first() != NULL ){    
            return true;
        }          
        return false;
    }   


    private static function generateRandomString($length = 15) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    
    public static function createSku(){        
        $sku = self::generateRandomString();
        if (self::checkSKU($sku)){ 
            self::createSku();
        }
        else{
            return $sku;            
        }        
    }


    public static function getSupplier(){
        return 1;
    }

    public static function getMetaTitle(){
        return 'MetaTitle';
    }

    public static function getMetaDescription(){
        return 'MetaDescription';
    }

    public static function getColor(){
        return 1;
    } 

    public static function getMaterial(){
        return 1;
    }

    public static function getImageFilename(){
        return 'filename';
    }    

    public static function getCategoryIds(String $name, String $shortDescription, String $longDescription){ 
                    
        $catValue = [];                                    

        if(!(in_array(0, BigDataMapping::categoryMapping($name)))){   
            $catValue = BigDataMapping::categoryMapping($name);    
            echo "\nName: \n";  
            echo $name;
            var_dump(BigDataMapping::categoryMapping($name));                                    
            return $catValue;

        }                                                                
        elseif(!(in_array(0, BigDataMapping::categoryMapping($shortDescription)))){   
            $catValue = BigDataMapping::categoryMapping($shortDescription);  
            echo "\nDescription: \n";
            echo $shortDescription;
            var_dump(BigDataMapping::categoryMapping($shortDescription));        
            return $catValue;

        }                                                                                                                                          
        elseif(!(in_array(0, BigDataMapping::categoryMapping($longDescription)))){   
            $catValue = BigDataMapping::categoryMapping($longDescription);  
            echo "\nDescription: \n";
            echo $longDescription;
            var_dump(BigDataMapping::categoryMapping($longDescription));        
            return $catValue;

        }                                                                                                                                                                          
        // elseif(preg_match('/^.*(?=(garten|balkon|terrasse|outdoor){1,}).*$/i', $value) && !in_array(intval(0), DataMapping::categoryMapping($this->title))){   
        //     $catValue = DataMapping::categoryMapping($this->title);    //7
        //     echo "drin3\n";    
        //     array_push($tempTemp, $catValue);   

        // }                                
        // elseif(preg_match('/^.*(?=(garten|balkon|terrasse|outdoor){1,}).*$/i', $value) && !in_array(intval(0), DataMapping::categoryMapping($this->description))){   
        //     $catValue = DataMapping::categoryMapping($this->description);  //7
        //     echo "drin4\n";   
        //     array_push($tempTemp, $catValue);   

        // } 

        else{   
            return $catValue;
        }                                                                                                                                

    }


    private static function removeAccent($str) { 
        $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ'); 
        $b = array('A', 'A', 'A', 'A', 'Ae', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'Oe', 'O', 'U', 'U', 'U', 'Ue', 'Y', 'ss', 'a', 'a', 'a', 'a', 'ae', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'oe', 'o', 'u', 'u', 'u', 'ue', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'Oe', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o'); 
        $newString = str_replace($a, $b, $str); 
        return $newString; 
    } 

    public static function createSlug($str) {
        $newString = strtolower(preg_replace(array('/[.]/', '/[%]/', '/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('-', '-prozent', '', '-', ''), self::removeAccent($str)));      
        return $newString; 
    } 

    private function normalizeProduktbeschreibung($tText){
        $text = (string)$tText;

        $suchmuster = array(
        '/Wir liefern diesen Artikel versandkostenfrei innerhalb von Deutschland. /',
        '/Wir liefern diesen Artikel kostenlos innerhalb von Deutschland. /', 
        '/Bitte beachten Sie: Bei Versand außerhalb Deutschlands greifen spezielle Versandkosten. Bitte fragen Sie die für Ihren Auftrag geltenden Versandkosten an. /', 
        '/Bitte beachten: Der Versand ist nur innerhalb Deutschlands möglich. /', 
        '/Wir liefern diesen Artikel versandkostenfrei innerhalb Deutschlands. /', 
        '/Wir versenden diesen Artikel versandkostenfrei innerhalb Deutschlands. /', 
        '/(Art-Nr\.)( )([0-9]{1,6})( )/', 
        '/(Art\.-Nr\.)( )([0-9]{1,6})( )/', 
        '/(Art\. -Nr\.)( )([0-9]{1,6})( )/', 
        '/(Art\.-Nr\.)( )([0-9]{1,6})(-)([0-9]{1,6})( )/', 
        '/(\(Art\.Nr\.:)( )([0-9]{1,6})\)/', 
        '/(\(Artikel\.Nr\.:)( )([0-9]{1,6})\)/', 
        '/(\(Art\.Nr\.)( )([0-9]{1,6})(-)([0-9]{1,6})\)/', 
        '/(\(Art\.-Nr\.)( )([0-9]{1,6})\)( )/', 
        '/(\(Art\.)(.*)(Nr\.)( )([0-9]{1,6})\)/', 
        '/(Art\.)(.*)(Nr\.)( )([0-9,a-z,A-Z]{1,6})( )/', 
        '/(Art\.)(.*)(, )([0-9]{1,6})( )/',
        '/(\()ohne Inseln(\))( )/' );	

//        $suchmuster = array('/Wir liefern diesen Artikel versandkostenfrei innerhalb von Deutschland. /','/Wir liefern diesen Artikel kostenlos innerhalb von Deutschland. /', '/Bitte beachten Sie: Bei Versand außerhalb Deutschlands greifen spezielle Versandkosten. Bitte fragen Sie die für Ihren Auftrag geltenden Versandkosten an. /', '/Bitte beachten: Der Versand ist nur innerhalb Deutschlands möglich. /', '/Wir liefern diesen Artikel versandkostenfrei innerhalb Deutschlands. /', '/Wir versenden diesen Artikel versandkostenfrei innerhalb Deutschlands. /'/*, '/(Art-Nr\.)( )([0-9]{1,6})( )/', '/(Art\.-Nr\.)( )([0-9]{1,6})( )/', '/(Art\. -Nr\.)( )([0-9]{1,6})( )/', '/(Art\.-Nr\.)( )([0-9]{1,6})(-)([0-9]{1,6})( )/', '/(\()(Art\.Nr\.:)( )([0-9]{1,6})(\))/', '/(\()(Artikel\.Nr\.:)( )([0-9]{1,6})(\))/', '/(\()(Art\.Nr\.)( )([0-9]{1,6})(-)([0-9]{1,6})(\))/', '/(\()(Art\.-Nr\.)( )([0-9]{1,6})(\))( )/', '/(\()(Art\.)(.*)(Nr\.)(.*)([0-9]{1,6})(\))/', '/(Art\.)(.*)(Nr\.)(.*)([0-9,a-z,A-Z]{1,6})( )/', '/(Art\.)(.*)(, )([0-9]{1,6})( )/' */, '/(\()ohne Inseln(\))( )/' );
        $ersetzung = '';
        $newString = preg_replace($suchmuster, $ersetzung, $text);
        return $newString;
    }

    private function cleanHtml($hHtml){
        $html = (string)$hHtml;
        $suchmuster = '"';
        $ersetzung = '""';
        $newString = preg_replace($suchmuster, $ersetzung, $html);          
        return $newString;          
    }

    private function cleanUrl($hHtml){
        $html = $hHtml;
        if (stripos($html,'html%26utm_campaign') !== false){ 
            $suchmuster = '/html%26utm_campaign/';    
            $ersetzung = 'html%3Futm_campaign';
            $html = preg_replace($suchmuster, $ersetzung, $html);      
        } else{ }
        return $html;       
    }


    
    private function checkBrandName($theTitle, $theHersteller){
        $containsBrandname = false;
	foreach($theTitle as $item){
            if (stripos($item, $theHersteller) !== false){    
                $containsBrandname = true;
            }	    
        }
        return $containsBrandname;		
    }

    private function createMetaTitle($theTitle){
        $parts = preg_split('/([\s\n\r]+)/', $theTitle, null, PREG_SPLIT_DELIM_CAPTURE);
        $length = 0;
    	$brandCheck = $this->checkBrandName($parts, $this->supplier);
    	if ($brandCheck !== true){ 
                $newMetaTitle[0] = "";//$this->hersteller;
                $newMetaTitle[1] = "";
    	}    
        foreach($parts as $key=>$value){
            $length += strlen($value);
            if ( $length > 50 ){
                break;
            }
            if ( ($length > 40) && (strlen($value) < 5)){
                break;    
            }
            $substring = substr($value,strlen($value)-1,strlen($value));
            if ( $substring === '!' || $substring === '?' || $substring === '.' || $substring === ',' || $substring === ':' || $substring === ';' || $substring === '/' || $substring === '\\' || $substring === '=' ){
                $value = substr($value, 0, strlen($value)-1);
                $length=$length-1;
            }
    	    if ($brandCheck !== true){
                    $newMetaTitle[$key+2] = $value;
    	    }
    	    else if ($brandCheck === true){
                    $newMetaTitle[$key] = $value;
    	    }
	    }
        return rtrim(implode($newMetaTitle));
    }


    private function createMetaDescription($theProduktbeschreibung){
	$newMetaDescription = array();
        $length = 0;
        $re = '/            # Split sentences on whitespace between them.
        (?<=                # Begin positive lookbehind.
        [.!?]             # Either an end of sentence punct,
        | [.!?][\'"]        # or end of sentence punct and quote.
        )                   # End positive lookbehind.
        (?<!                # Begin negative lookbehind.
        ca\.              # Skip either "Mr."
        | inkl\.             # or "Mrs.",
        | zb\.              # or "Ms.",
        | zB\.              # or "Jr.",
        | z\.B\.              # or "Dr.",
        | etc\.            # or "Prof.",
        )                   # End negative lookbehind.
        \s+                 # Split on whitespace between sentences.
        /ix';

        $sentences = preg_split($re, $theProduktbeschreibung, null, PREG_SPLIT_DELIM_CAPTURE);
        foreach($sentences as $key=>$value){
            $length = strlen($value);
            $sentencesArray[$key] = $length;
	}	
	$optimum = 0;
	$optimumKeyA = 0;
	$optimumKeyB = 0;
	$isCombinable = false;
        for($i=0;$i < count($sentencesArray)-1;$i++){
	    for($j=$i+1;$j < count($sentencesArray);$j++){
                if (($sentencesArray[$i] + $sentencesArray[$j]) > 180){
        	    continue;
		}    
                if (($sentencesArray[$i] + $sentencesArray[$j]) < 180){
                    $isCombinable = true; 
		    if (($sentencesArray[$i] + $sentencesArray[$j]) > $optimum){
        	        $optimum = $sentencesArray[$i] + $sentencesArray[$i];
		        $optimumKeyA = $i;
		        $optimumKeyB = $j;
		    }
		    else{
			continue;
		    }
		}    			
    	    }	
    	}
	if ($isCombinable){
            $newMetaDescription[0] = $sentences[$optimumKeyA];
	    $newMetaDescription[1] = $sentences[$optimumKeyB];
	}
	else {
            $minValue = min($sentencesArray);
	    $maxValue = max($sentencesArray);
	    $numberOfElements = count($sentencesArray);
	    if (($minValue > 180) && ($numberOfElements > 1)){
                $minValueKey = array_search($minValue, $sentencesArray);    
	        $newMetaDescription[0] = $sentences[$minValueKey];
	    }    
	    if (($minValue < 90) && ($numberOfElements > 1)){
		$minimalValue = $maxValue;
		$minimalValueSecond = $maxValue;
		$minimalValueSecondKey = 0;
		asort($sentencesArray);
	        foreach ($sentencesArray as $key=>$value){
		    if ($value < $minimalValue){
		        $minimalValue = $value;
		    }
		    if (($value > $minimalValue) && ($value < $minimalValueSecond)){
		        $minimalValueSecond = $value;
			$minimalValueSecondKey = $key;
		    }
		}
		$newMetaDescription[0] = $sentences[$minimalValueSecondKey];
	    }
	    if ($numberOfElements < 2){
		$newMetaDescription[0] = $sentences[0];
	    }
	}
	if (count($newMetaDescription) > 1){
	    return implode($newMetaDescription, " ");
	}
	else{
	    return $newMetaDescription[0];    
	}
    }



    // private function getMaterial($value){
    //     $needle = "Material: ";
	//     $replace = "";
    //     $haystack = $value;	
	//     $value = str_replace($needle, $replace, $haystack); 
    //     return $value;
    // }
    
    // private function getColor($value){
    //     $needle = "Farbe: ";
	//     $replace = "";
    //     $haystack = $value;	  
	//     $value = str_replace($needle, $replace, $haystack); 
    //     return $value;
    // }
    
    
    private function normalizeShipping($value){
        $needle = "Tage";
        $replace = "Werktage";
        $haystack = $value;   
        $value = str_replace($needle, $replace, $haystack);
	    return $value;
    }

    private function normalizePrice($value){
     
	return $value;
    }


    public static function createImageFilename($sku, $imageUrl){
        $mimeType = self::getMimeType($imageUrl);
        $timestamp = time();
        return $sku . "-" . $timestamp . "." . $mimeType;
    }

    private static function getMimeType($url){
        $header = get_headers($url,1);

        try{
            if(array_key_exists ( 'Content-Type' , $header )){

                if (is_array($header['Content-Type'])){

                    if(in_array("image/jpeg", $header['Content-Type'], true) ) {                
                        $mimeType = "jpg";    
                    }                    
                    if(in_array("image/gif", $header['Content-Type'], true) ) {                
                        $mimeType = "gif";    
                    }  
                    if(in_array("image/png", $header['Content-Type'], true) ) {                
                        $mimeType = "png";    
                    }  
                    if(in_array("image/x-bitmap", $header['Content-Type'], true) ) {                
                        $mimeType = "bmp";    
                    }                
                    return $mimeType;
                } else {
                    if($header['Content-Type']==="image/jpeg" ) {                
                        $mimeType = "jpg";    
                    }    
                    elseif($header['Content-Type']==="image/gif" ) {                
                        $mimeType = "gif";
                    }    
                    elseif($header['Content-Type']==="image/png" ) {                
                        $mimeType = "png";    
                    }                  
                    elseif($header['Content-Type']==="image/x-bitmap" ) {                
                        $mimeType = "bmp";    
                    }
                    return $mimeType;
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }    
    }    

    public static function saveImageInCloud( $imageFilename, $imageUrl ){
        $file = file_get_contents($imageUrl, true);
        $disk = Storage::disk('gcs');
        $disk->put($imageFilename, $file);
        return $disk->url($imageFilename);
    }    
    

    public static function deleteImages($imageArray){
        $disk = Storage::disk('gcs');

        $disk->delete($imageArray);

    }    

}    