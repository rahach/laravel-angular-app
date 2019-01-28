<?php
namespace Import;

use Illuminate\Support\Facades\DB;

use Superbalist\LaravelGoogleCloudStorage\GCS;



class DownloadImages{



    public function __construct(){


    }

//     private function getImage($url) {         
//         $headers[] = 'Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg, image/png';              
//         $headers[] = 'Connection: Keep-Alive';         
//         $headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';         
//         $user_agent = 'php';         
//         $process = curl_init($url);         
//         curl_setopt($process, CURLOPT_HTTPHEADER, $headers);         
//         curl_setopt($process, CURLOPT_HEADER, 0);         
//         curl_setopt($process, CURLOPT_USERAGENT, $user_agent); //check here         
//         curl_setopt($process, CURLOPT_TIMEOUT, 30);         
//         curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);         
//         curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1);         
//         $return = curl_exec($process);         
//         curl_close($process);         
//         return $return;     
//     } 


//     function generateRandomString($length = 10) {
//         $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//         $charactersLength = strlen($characters);
//         $randomString = '';
//         for ($i = 0; $i < $length; $i++) {
//             $randomString .= $characters[rand(0, $charactersLength - 1)];
//         }
//         return $randomString;
//     }

//     function deleteImages($sku){
        
//         $cache = $this->objectManager->create('Magento\Catalog\Model\Product\Image\Cache')->getDataPublic();
//         $cache = array_map("unserialize", array_unique(array_map("serialize", $cache)));

//         $storeManager = $this->objectManager->get('\Magento\Store\Model\StoreManagerInterface');
//         $appEmulation = $this->objectManager->get('\Magento\Store\Model\App\Emulation');
//         $productRepositoryFactory = $this->objectManager->get('\Magento\Catalog\Api\ProductRepositoryInterfaceFactory');
//         $imageHelperFactory = $this->objectManager->get('\Magento\Catalog\Helper\ImageFactory');

//         // get the store ID from somewhere (maybe a specific store?)
//         $storeId = $storeManager->getStore()->getId();
//         // emulate the frontend environment
//         $appEmulation->startEnvironmentEmulation($storeId, \Magento\Framework\App\Area::AREA_FRONTEND, true);
//         // load the product however you want
//         $product = $productRepositoryFactory->create()->get($sku);

//         $imageUrls = [];
//         foreach($cache as $key=>$value){
//             // now the image helper will get the correct URL with the frontend environment emulated 
//             array_push($imageUrls, $imageHelperFactory->create()->init($product, $value['id'])->getUrl());
//         }
//         $imageUrls = array_unique($imageUrls);
//         foreach($imageUrls as $key=>$value){
//             if (strpos($value, 'placeholder') === false) {

//                 try{
//                     $imagePath = str_replace( "http://www.gartenhaus-angebot.de/" , "/var/www/html/m2/" , $value);
//                     exec( 'rm ' . $imagePath, $output, $return);            
//                 }
//                 catch (Exception $e) {
//                     echo $e->getMessage();                
//                 }
//             }    
//         }

//         $appEmulation->stopEnvironmentEmulation();                
        
//     }


//     private function getMimeType($url){
//         $header = get_headers($url,1);

//         try{
//             if(array_key_exists ( 'Content-Type' , $header )){

//                 if (is_array($header['Content-Type'])){

//                     if(in_array("image/jpeg", $header['Content-Type'], true) ) {                
//                         $mimeType = "jpg";    
//                     }                    
//                     if(in_array("image/gif", $header['Content-Type'], true) ) {                
//                         $mimeType = "gif";    
//                     }  
//                     if(in_array("image/png", $header['Content-Type'], true) ) {                
//                         $mimeType = "png";    
//                     }  
//                     if(in_array("image/x-bitmap", $header['Content-Type'], true) ) {                
//                         $mimeType = "bmp";    
//                     }                
//                     return $mimeType;
//                 } else {
//                     if($header['Content-Type']==="image/jpeg" ) {                
//                         $mimeType = "jpg";    
//                     }    
//                     elseif($header['Content-Type']==="image/gif" ) {                
//                         $mimeType = "gif";
//                     }    
//                     elseif($header['Content-Type']==="image/png" ) {                
//                         $mimeType = "png";    
//                     }                  
//                     elseif($header['Content-Type']==="image/x-bitmap" ) {                
//                         $mimeType = "bmp";    
//                     }
//                     return $mimeType;
//                 }
//             }
//         } catch (Exception $e) {
//             echo $e->getMessage();
//         }    
//     }    

// /////////
//     $sku = $this->getSKU();               

//     date_default_timezone_set('Europe/Berlin');
//     $theDate = strval(date('j.n.Y H:i'));                
    
//     $imageFileName = "sku-" . $sku . "-" . $this->generateRandomString() . "." . $this->getMimeType($row["product_image_url"]);        
//     $imagePath = '/var/www/html/m2/pub/media/tmp/upload/' . $imageFileName;

//     if(!file_exists($imagePath)){
//         $image = $this->getImage($row["product_image_url"]); 
//         file_put_contents($imagePath, $image);            
//     }

// /////////////




}    