<?php

namespace App\Helpers;

class SeedingHelper{

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

    public static function createDbSlug($str) {
        $newString = strtolower(preg_replace(array('/[.]/', '/[%]/', '/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('-', '-prozent', '', '_', ''), self::removeAccent($str)));      
        return $newString; 
    } 


    private function cleanHtml($theHtml){
        $html = (string)$theHtml;
        $suchmuster = '/"/';
        $ersetzung = '';
        $result = preg_replace($suchmuster, $ersetzung, $html);          
        return $result;          
    }

    private static function checkBrandName($theTitle, $theSupplier){
        $containsBrandname = false;
	    foreach($theTitle as $item){
            if (stripos($item, $theSupplier) !== false){    
                $containsBrandname = true;
            }	    
        }
        return $containsBrandname;		
    }    

    public static function createMetaTitle($theTitle, $theSupplier){
        $parts = preg_split('/([\s\n\r]+)/', $theTitle, null, PREG_SPLIT_DELIM_CAPTURE);
        $length = 0;
    	$brandCheck = self::checkBrandName($parts, $theSupplier);
    	if ($brandCheck !== true){ 
                $newMetaTitle[0] = "";
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


    public static function createMetaDescription($theDescription){
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

            $sentences = preg_split($re, $theDescription, null, PREG_SPLIT_DELIM_CAPTURE);
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



}