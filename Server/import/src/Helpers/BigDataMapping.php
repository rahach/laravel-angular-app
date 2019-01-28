<?php

namespace Import\Helpers;

class BigDataMapping{


    public static function brandMapping($articleName){
        $categoryID = 0;

        switch ($articleName):
            //Casamia
            case (preg_match('/^.*(?=(casamia)).*$/i', $articleName) ? true : false):
                $categoryID =70;
                break; 
            //GartenKultur
            case (preg_match('/^(?=.*(garten.*kultur)).*$/i', $articleName) ? true : false):
                $categoryID =137;
                break;              
            //Stern
            case (preg_match('/^(?=.*(stern)).*$/i', $articleName) ? true : false):
                $categoryID =352;
                break;
            //Jobek
            case (preg_match('/^(?=.*(jobek)).*$/i', $articleName) ? true : false):
                $categoryID =202;
                break;
            //Kettler               
            case (preg_match('/^(?=.*(kettler)).*$/i', $articleName) ? true : false):
                $categoryID =216;
                break;
            //Outflexx           
            case (preg_match('/^(?=.*(outflex)).*$/i', $articleName) ? true : false):
                $categoryID =284;
                break;
            //Leco    
            case (preg_match('/^(?=.*(leco)).*$/i', $articleName) ? true : false):
                $categoryID =233;
                break;
            //Gaspo
            case (preg_match('/^(?=.*(gaspo)).*$/i', $articleName) ? true : false):
                $categoryID =143;
                break;
            //Karibu                                  
            case (preg_match('/^(?=.*(karibu)).*$/i', $articleName) ? true : false):
                $categoryID =212;
                break;
            //Sungörl                                  
            case (preg_match('/^(?=.*(sungörl)).*$/i', $articleName) ? true : false):
                $categoryID =364;
                break;
            //Sieger                                  
            case (preg_match('/^(?=.*(sieger)).*$/i', $articleName) ? true : false):
                $categoryID =332;
                break;                
            //Merxx                                  
            case (preg_match('/^(?=.*(merx)).*$/i', $articleName) ? true : false):
                $categoryID =262;
                break;                
            //Vegtrug                                  
            case (preg_match('/^(?=.*(vegtrug)).*$/i', $articleName) ? true : false):
                $categoryID =394;
                break;                
            //Takasho                                  
            case (preg_match('/^(?=.*(takasho)).*$/i', $articleName) ? true : false):
                $categoryID =371;
                break;                                                
            //WindsorGarden                                  
            case (preg_match('/^(?=.*(windsor.*garden)).*$/i', $articleName) ? true : false):
                $categoryID =410;
                break;                                                
            //SchwarzSchirme                                  
            case (preg_match('/^(?=.*(schwarz.*schirme)).*$/i', $articleName) ? true : false):
                $categoryID =326;
                break;                                                
            //MBM                                  
            case (preg_match('/^(?=.*(MBM)).*$/i', $articleName) ? true : false):
                $categoryID =256;
                break;                                                                                                
            //Hartman                                  
            case (preg_match('/^(?=.*(hartman)).*$/i', $articleName) ? true : false):
                $categoryID =165;
                break;                                                                                                
            //mehr Garten                                  
            case (preg_match('/^(?=.*(mehr.*garten)).*$/i', $articleName) ? true : false):
                $categoryID =258;
                break;                                                                                                
            //Lafuma                                  
            case (preg_match('/^(?=.*(lafuma)).*$/i', $articleName) ? true : false):
                $categoryID =229;
                break;                                                                                                                                                
            //Palmako                                  
            case (preg_match('/^(?=.*(palmako)).*$/i', $articleName) ? true : false):
                $categoryID =287;
                break;                                                                                                                                                
            //Queens Garden                                  
            case (preg_match('/^(?=.*(queens.*garden)).*$/i', $articleName) ? true : false):
                $categoryID =304;
                break;                                                                                                                                                
            //Laserworld                                  
            case (preg_match('/^(?=.*(laserworld)).*$/i', $articleName) ? true : false):
                $categoryID =231;
                break;                                                                                                                                                                                                
            //Siena Garden                                  
            case (preg_match('/^(?=.*(siena.*garden)).*$/i', $articleName) ? true : false):
                $categoryID =333;
                break;                                                                                                                                                                                                
            //Acamp                                  
            case (preg_match('/^(?=.*(acamp)).*$/i', $articleName) ? true : false):
                $categoryID =21;
                break;                                                                                                                                                                                                
            //Sun Garden                                  
            case (preg_match('/^(?=.*(sun.*garden)).*$/i', $articleName) ? true : false):
                $categoryID =361;
                break;                                                                                                                                                                                                                                
            //Forma                                  
            case (preg_match('/^(?=.*(forma)).*$/i', $articleName) ? true : false):
                $categoryID =118;
                break;                                                                                                                                                                                                                                
            //Garantia                                  
            case (preg_match('/^(?=.*(garantia)).*$/i', $articleName) ? true : false):
                $categoryID =124;
                break;                                                                                                                                                                                                                                     
            //Villana                                  
            case (preg_match('/^(?=.*(villana)).*$/i', $articleName) ? true : false):
                $categoryID =397;
                break;                                                                                                                                                                                                                                
            //Forma                                  
            case (preg_match('/^(?=.*(garden.*pleasure)).*$/i', $articleName) ? true : false):
                $categoryID =128;
                break;                                                                                                                                                                                                                                
            //Forma                                  
            case (preg_match('/^(?=.*(4.*rain)).*$/i', $articleName) ? true : false):
                $categoryID =18;
                break;                         
            //Buschbeck                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(buschbeck)).*$/i', $articleName) ? true : false):
                $categoryID =63;
                break;         
            //Doppler                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(doppler)).*$/i', $articleName) ? true : false):
                $categoryID =93;
                break;         
            //Derby                                                                                                                                                                                                                                                       
            case (preg_match('/^(?=.*(derby)).*$/i', $articleName) ? true : false):
                $categoryID =83;
                break;         
            //gartenmoebel.de                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(gartenmoebel.*de)).*$/i', $articleName) ? true : false):
                $categoryID =139;
                break;   
            //May                                                                                                                                                                                                                                                                 
            case (preg_match('/^(?=.*(may)).*$/i', $articleName) ? true : false):
                $categoryID =255;
                break;                   
            //Aztec                                                                                                                                                                                                                                                 
            case (preg_match('/^(?=.*(aztec)).*$/i', $articleName) ? true : false):
                $categoryID =36;
                break; 
            //Sywawa                                                                                                                                                                                                                                                                   
            case (preg_match('/^(?=.*(sywawa)).*$/i', $articleName) ? true : false):
                $categoryID =369;
                break;                                                                                                                                                                                                                                                                                                                                                                                                  
            //Diamond Garden                                                                                                                                                                                                                                                                
            case (preg_match('/^(?=.*(diamond.*garden)).*$/i', $articleName) ? true : false):
                $categoryID =89;
                break;                                                                                                                                                                                                                                                                                                                                                                                                
            //Amazonas                                                                                                                                                                                                                                                                
            case (preg_match('/^(?=.*(amazonas)).*$/i', $articleName) ? true : false):
                $categoryID =27;
                break;                                                                                                                                                                                                                                                                                                                                                                                                
            //Blome                                                                                                                                                                                                                                                                
            case (preg_match('/^(?=.*(blome)).*$/i', $articleName) ? true : false):
                $categoryID =54;
                break;                                                                                                                                                                                                                                                                                                                                                                                                
            //Jan Kurtz                                                                                                                                                                                                                                                                
            case (preg_match('/^(?=.*(jan.*kurtz)).*$/i', $articleName) ? true : false):
                $categoryID =197;
                break;                                                                                                                                                                                                                                                                                                                                                                                                
            //April allterior furniture                                                                                                                                                                                                                                                                
            case (preg_match('/^(?=.*(april.*allterior)).*$/i', $articleName) ? true : false):
                $categoryID =30;
                break;                                                                                                                                                                                                                                                                                                                                                                                                
            //Inko                                                                                                                                                                                                                                                              
            case (preg_match('/^(?=.*(inko)).*$/i', $articleName) ? true : false):
                $categoryID =193;
                break;                                                                                                                                                                                                                                                                                                                                                                                                
            //Angerer                                                                                                                                                                                                                                                             
            case (preg_match('/^(?=.*(angerer)).*$/i', $articleName) ? true : false):
                $categoryID =28;
                break;                                                                                                                                                                                                                                                                                                                                                                                                
            //Garvida                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(garvida)).*$/i', $articleName) ? true : false):
                $categoryID =142;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Garvida                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=(best))$/i', $articleName) ? true : false):
                $categoryID =49;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Brilliant                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(brilliant)).*$/i', $articleName) ? true : false):
                $categoryID =60;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Sonnenpartner                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(sonnenpartner)).*$/i', $articleName) ? true : false):
                $categoryID =345;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Sunny Smart                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(sunny.*smart)).*$/i', $articleName) ? true : false):
                $categoryID =365;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Grasekamp                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(grasekamp)).*$/i', $articleName) ? true : false):
                $categoryID =154;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Destiny                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(destiny)).*$/i', $articleName) ? true : false):
                $categoryID =86;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Promadino                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(promadino)).*$/i', $articleName) ? true : false):
                $categoryID =300;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Indoba                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(indoba)).*$/i', $articleName) ? true : false):
                $categoryID =190;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Vitavia                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(vitavia)).*$/i', $articleName) ? true : false):
                $categoryID =400;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Vitavia                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(fischer)).*$/i', $articleName) ? true : false):
                $categoryID =115;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Vitavia                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(tepro)).*$/i', $articleName) ? true : false):
                $categoryID =376;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Vitavia                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(wolff.*finnhaus)).*$/i', $articleName) ? true : false):
                $categoryID =412;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
            //Vitavia                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(benedomi)).*$/i', $articleName) ? true : false):
                $categoryID =46;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Vitavia                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(grandhall)).*$/i', $articleName) ? true : false):
                $categoryID =153;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Vitavia                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(tansun)).*$/i', $articleName) ? true : false):
                $categoryID =372;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Vitavia                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(hottable)).*$/i', $articleName) ? true : false):
                $categoryID =185;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
            //Vitavia                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(mwh)).*$/i', $articleName) ? true : false):
                $categoryID =271;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Vitavia                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(siena.*mybalconia)).*$/i', $articleName) ? true : false):
                $categoryID =335;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
            //Vitavia                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(beo)).*$/i', $articleName) ? true : false):
                $categoryID =47;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
             //Vitavia                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(zangenberg)).*$/i', $articleName) ? true : false):
                $categoryID =415;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //GO-DE                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(go.*de)).*$/i', $articleName) ? true : false):
                $categoryID =152;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //Outliv                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(outliv)).*$/i', $articleName) ? true : false):
                $categoryID =285;
                break;  
            //Ploß                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(ploß|ploss)).*$/i', $articleName) ? true : false):
                $categoryID =292;
                break;  
            //CLP                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(clp)).*$/i', $articleName) ? true : false):
                $categoryID =73;
                break;  
            //Stremmel                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(stremmel)).*$/i', $articleName) ? true : false):
                $categoryID =355;
                break;  
            //Haushalt International                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(haushalt.*international)).*$/i', $articleName) ? true : false):
                $categoryID =166;
                break;  
            //Lesli Living                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(lesli.*living)).*$/i', $articleName) ? true : false):
                $categoryID =235;
                break;  
            //Balke Design                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(balke.*design)).*$/i', $articleName) ? true : false):
                $categoryID =38;
                break;  
            //Otto Pfeiffer                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(otto.*pfeiffer)).*$/i', $articleName) ? true : false):
                $categoryID =282;
                break;  
            //Sow Shin                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(sow.*shin)).*$/i', $articleName) ? true : false):
                $categoryID =347;
                break;  
            //gartenmoebel-einkauf                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(gartenmoebel.*einkauf)).*$/i', $articleName) ? true : false):
                $categoryID =138;
                break;  
            //brema                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(brema)).*$/i', $articleName) ? true : false):
                $categoryID =58;
                break;  
            //grosfillex                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(grosfillex)).*$/i', $articleName) ? true : false):
                $categoryID =160;
                break;  
            //Sunsera                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(sunsera)).*$/i', $articleName) ? true : false):
                $categoryID =367;
                break;  
            //gautzsch                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(gautzsch)).*$/i', $articleName) ? true : false):
                $categoryID =161;
                break;  
            // Hoffmann Parasols                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(hoffmann.*parasols)).*$/i', $articleName) ? true : false):
                $categoryID =178;
                break;  
            //apple bee                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(apple.*bee)).*$/i', $articleName) ? true : false):
                $categoryID =29;
                break;                                                                                                                                                                                                                                                  
            //AeroCover                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(aero.*cover)).*$/i', $articleName) ? true : false):
                $categoryID =23;
                break;                                                                                                                                                                                                                                                  
            //Dormati                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(dormati)).*$/i', $articleName) ? true : false):
                $categoryID =94;
                break;                                                                                                                                                                                                                                                  
            //Möbelpromenade                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(möbelpromenade)).*$/i', $articleName) ? true : false):
                $categoryID =267;
                break;                                                                                                                                                                                                                                                  
            //deVries                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(de.*vries)).*$/i', $articleName) ? true : false):
                $categoryID =88;
                break;                                                                                                                                                                                                                                                                                                                                  
            //T.I.P.                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(T\.I\.P\.)).*$/i', $articleName) ? true : false):
                $categoryID =370;
                break;                                                                                                                                                                                                                                                  
            //Protaurus                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(protaurus)).*$/i', $articleName) ? true : false):
                $categoryID =301;
                break;                                                                                                                                                                                                                                                  
            //Enders                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(enders)).*$/i', $articleName) ? true : false):
                $categoryID =105;
                break; 
            //Schneider
            case (preg_match('/^(?=.*(schneider)).*$/i', $articleName) ? true : false):
                $categoryID =325;
                break;                                                                                                                                                                                                                                                                 
            //Ubbink                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(ubbink)).*$/i', $articleName) ? true : false):
                $categoryID =389;
                break;                                                                                                                                                                                                                                                                                                                                  
            //Juwel                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(juwel)).*$/i', $articleName) ? true : false):
                $categoryID =207;
                break;                                                                                                                                                                                                                                                  
            //Outdoor Life Products                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(outdoor.*life.*products)).*$/i', $articleName) ? true : false):
                $categoryID =283;
                break;                                                                                                                                                                                                                                                  
            //SvenskaV                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(svenska.*v)).*$/i', $articleName) ? true : false):
                $categoryID =368;
                break;                                                                                                                                                                                                                                                  
            //Heitronic                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(heitronic)).*$/i', $articleName) ? true : false):
                $categoryID =171;
                break;                                                                                                                                                                                                                                                  
            //Kinzler                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(kinzler)).*$/i', $articleName) ? true : false):
                $categoryID =219;
                break;                                                                                                                                                                                                                                                                                                                                  
            //Pinolino                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(pinolino)).*$/i', $articleName) ? true : false):
                $categoryID =291;
                break;                                                                                                                                                                                                                                                  
            //Woodfeeling                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(woodfeeling)).*$/i', $articleName) ? true : false):
                $categoryID =413;
                break;                                                                                                                                                                                                                                                  
            //Trendfabrik                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(trendfabrik)).*$/i', $articleName) ? true : false):
                $categoryID =383;
                break;                                                                                                                                                                                                                                                  
            //heute-wohnen                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(heute.*wohnen)).*$/i', $articleName) ? true : false):
                $categoryID =175;
                break;                                                                                                                                                                                                                                                  
            //Floracord                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(floracord)).*$/i', $articleName) ? true : false):
                $categoryID =117;
                break;                                                                                                                                                                                                                                                                                                                                  
            //Famous Home                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(famous.*home)).*$/i', $articleName) ? true : false):
                $categoryID =110;
                break;                                                                                                                                                                                                                                                  
            //Keter                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(keter)).*$/i', $articleName) ? true : false):
                $categoryID =215;
                break;                                                                                                                                                                                                                                                  
            //MFG                                                                                                                                                                                                                                                          
            case (preg_match('/^(mfg)$/i', $articleName) ? true : false):
                $categoryID =264;
                break;                                                                                                                                                                                                                                                  
            //GEV                                                                                                                                                                                                                                                           
            case (preg_match('/^(gev)$/i', $articleName) ? true : false):
                $categoryID =145;
                break;                                                                                                                                                                                                                                                  
            //8 Seasons                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(8.*seasons)).*$/i', $articleName) ? true : false):
                $categoryID =20;
                break; 
            //Lasita Maja                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(lasita.*maja)).*$/i', $articleName) ? true : false):
                $categoryID =232;
                break;                                                                                                                                                                                                                                                                                                                                                                                                  
            //Bellagio                                                                                                                                                                                                                                                        
            case (preg_match('/^(?=.*(bellagio)).*$/i', $articleName) ? true : false):
                $categoryID =44;
                break;                                                                                                                                                                                                                                                                                                                                  
            //  greemotion                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(greemotion)).*$/i', $articleName) ? true : false):
                $categoryID =156;
                break;                                                                                                                                                                                                                                                  
            //Bukatchi                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(bukatchi)).*$/i', $articleName) ? true : false):
                $categoryID =62;
                break;                                                                                                                                                                                                                                                  
            //H&S                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(H\&S)).*$/i', $articleName) ? true : false):
                $categoryID =163;
                break;                                                                                                                                                                                                                                                  
            //Stellar                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(stellar)).*$/i', $articleName) ? true : false):
                $categoryID =351;
                break;                                                                                                                                                                                                                                                  
            //Gardenhome                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(gardenhome)).*$/i', $articleName) ? true : false):
                $categoryID =130;
                break;                                                                                                                                                                                                                                                                                                                                  
            //KLIMA1stKlaaS                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(KLIMA.*1st.*KlaaS)).*$/i', $articleName) ? true : false):
                $categoryID =220;
                break;                                                                                                                                                                                                                                                  
            //eyepower                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(eyepower)).*$/i', $articleName) ? true : false):
                $categoryID =109;
                break;                                                                                                                                                                                                                                                  
            //Amanka                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(amanka)).*$/i', $articleName) ? true : false):
                $categoryID =26;
                break;                                                                                                                                                                                                                                                  
            //Juliana                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(juliana)).*$/i', $articleName) ? true : false):
                $categoryID =204;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Premio living                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Premio.*living)).*$/i', $articleName) ? true : false):
                $categoryID =295;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Corasol                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Corasol)).*$/i', $articleName) ? true : false):
                $categoryID =76;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Kaufmann                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Kaufmann)).*$/i', $articleName) ? true : false):
                $categoryID =214;
                break; 
            //Glatz    
            case (preg_match('/^(?=.*(glatz)).*$/i', $articleName) ? true : false):
                $categoryID =149;
                break;                
            //testrut                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(testrut)).*$/i', $articleName) ? true : false):
                $categoryID =377;   
                break;                                                                                                                                                                                                                                                  
            //Tene Kaubandus                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(Tene.*Kaubandus)).*$/i', $articleName) ? true : false):
                $categoryID =374;
                break;                                                                                                                                                                                                                                                  
            //1PLUS                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(1.*PLUS)).*$/i', $articleName) ? true : false):
                $categoryID =15;
                break;                                                                                                                                                                                                                                                  
            //Trio Leuchten                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Trio.*Leuchten)).*$/i', $articleName) ? true : false):
                $categoryID =387;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Canyonlands                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Canyonlands)).*$/i', $articleName) ? true : false):
                $categoryID =66;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //rest&relax                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(rest.*\&.*relax)).*$/i', $articleName) ? true : false):
                $categoryID =311;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Infralogic                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Infralogic)).*$/i', $articleName) ? true : false):
                $categoryID =192;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Summer Casual                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Summer.*Casual)).*$/i', $articleName) ? true : false):
                $categoryID =359;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Garden Impressions                                                                                                                                                                                                                                                        
            case (preg_match('/^(?=.*(Garden.*Impressions)).*$/i', $articleName) ? true : false):
                $categoryID =127;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Elkar                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Elkar)).*$/i', $articleName) ? true : false):
                $categoryID =101;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Madison                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Madison)).*$/i', $articleName) ? true : false):
                $categoryID =246;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //10-T Outdoor Equipment                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(10.*T.*Outdoor.*Equipment)).*$/i', $articleName) ? true : false):
                $categoryID =14;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Korb                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Korb)).*$/i', $articleName) ? true : false):
                $categoryID =225;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //STSOL                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(STSOL)).*$/i', $articleName) ? true : false):
                $categoryID =356;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Spettmann                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Spettmann)).*$/i', $articleName) ? true : false):
                $categoryID =349;
                break;                                                                                                                                                                                                                                                   
            //JOM                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(JOM)).*$/i', $articleName) ? true : false):
                $categoryID =203;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            // Wilk                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Wilk)).*$/i', $articleName) ? true : false):
                $categoryID =409;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Nardi                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Nardi)).*$/i', $articleName) ? true : false):
                $categoryID =275;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Denk                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Denk)).*$/i', $articleName) ? true : false):
                $categoryID =82;
                break; 
            //FarmCook    
            case (preg_match('/^(?=.*(Farm.*Cook)).*$/i', $articleName) ? true : false):
                $categoryID =111;
                break;                
            //  Fridani                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(Fridani)).*$/i', $articleName) ? true : false):
                $categoryID =120;
                break;                                                                                                                                                                                                                                                  
            //Portal                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(Portal)).*$/i', $articleName) ? true : false):
                $categoryID =294;
                break;                                                                                                                                                                                                                                                  
            //Baidani                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Baidani)).*$/i', $articleName) ? true : false):
                $categoryID =37;
                break;                                                                                                                                                                                                                                                  
            //Vondom                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Vondom)).*$/i', $articleName) ? true : false):
                $categoryID =402;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Garnier Thiebaut                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Garnier.*Thiebaut)).*$/i', $articleName) ? true : false):
                $categoryID =133;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Ego-paris                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Ego.*paris)).*$/i', $articleName) ? true : false):
                $categoryID =99;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Zebra                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(zebra)).*$/i', $articleName) ? true : false):
                $categoryID =416;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Belardo                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Belardo)).*$/i', $articleName) ? true : false):
                $categoryID =43;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Delschen                                                                                                                                                                                                                                                        
            case (preg_match('/^(?=.*(Delschen)).*$/i', $articleName) ? true : false):
                $categoryID =81;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Konstsmide                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Konstsmide)).*$/i', $articleName) ? true : false):
                $categoryID =224;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //  Impressionen living                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Impressionen.*living)).*$/i', $articleName) ? true : false):
                $categoryID =189;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //Gardeno d'oro                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Gardeno.*d.*oro)).*$/i', $articleName) ? true : false):
                $categoryID =131;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Magis                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Magis)).*$/i', $articleName) ? true : false):
                $categoryID =247;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //EMU                                                                                                                                                                                                                                                           
            case (preg_match('/^(?!.*(kühn|kuehn))(?=.*(emu)).*$/i', $articleName) ? true : false):
                $categoryID =103;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Moree                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Moree)).*$/i', $articleName) ? true : false):
                $categoryID =269;
                break;  
            // Smart & Green                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Smart.*\&.*Green)).*$/i', $articleName) ? true : false):
                $categoryID =341;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Skagerak                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Skagerak)).*$/i', $articleName) ? true : false):
                $categoryID =339;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Röshults                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Röshults)).*$/i', $articleName) ? true : false):
                $categoryID =312;
                break; 
            //gartenpartys.de Exklusiv    
            case (preg_match('/^(?=.*(gartenpartys.*de.*Exklusiv)).*$/i', $articleName) ? true : false):
                $categoryID =140;
                break;                
            //  Rübeling                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(Rübeling)).*$/i', $articleName) ? true : false):
                $categoryID =317;
                break;                                                                                                                                                                                                                                                  
            //Domus Ventures                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Domus.*Ventures)).*$/i', $articleName) ? true : false):
                $categoryID =1231;
                break;                                                                                                                                                                                                                                                  
            //4 Seasons                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(4.*Seasons)).*$/i', $articleName) ? true : false):
                $categoryID =92;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Heinemeyer                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(Heinemeyer)).*$/i', $articleName) ? true : false):
                $categoryID =169;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Melegant Design                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Melegant.*Design)).*$/i', $articleName) ? true : false):
                $categoryID =259;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Karasek                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Karasek)).*$/i', $articleName) ? true : false):
                $categoryID =209;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Creative Living                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Creative.*Living)).*$/i', $articleName) ? true : false):
                $categoryID =78;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //L.C. Wholesaler                                                                                                                                                                                                                                                        
            case (preg_match('/^(?=.*(L.*C.*Wholesaler)).*$/i', $articleName) ? true : false):
                $categoryID =227;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //LiRo                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(LiRo)).*$/i', $articleName) ? true : false):
                $categoryID =240;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Cacoon                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(Cacoon)).*$/i', $articleName) ? true : false):
                $categoryID =64;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //Suncomfort                                                                                                                                                                                                                                                        
            case (preg_match('/^(?=.*(Suncomfort)).*$/i', $articleName) ? true : false):
                $categoryID =362;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //LifestyleGarden                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Lifestyle.*Garden)).*$/i', $articleName) ? true : false):
                $categoryID =238;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //myyour                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(myyour)).*$/i', $articleName) ? true : false):
                $categoryID =273;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Alexander Rose                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Alexander.*Rose)).*$/i', $articleName) ? true : false):
                $categoryID =24;
                break;    
            //Fiam                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(fiam)).*$/i', $articleName) ? true : false):
                $categoryID =113;
                break;  
            //My Garden                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(My.*Garden)).*$/i', $articleName) ? true : false):
                $categoryID =272;
                break;  
            //Schaffner                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(schaffner)).*$/i', $articleName) ? true : false):
                $categoryID =323;
                break;                                                                                                                                                                                                                                                                                                                                                                                                  
            //Consul Garden                                                                                                                                                                                                                                                        
            case (preg_match('/^(?=.*(Consul.*Garden)).*$/i', $articleName) ? true : false):
                $categoryID =75;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Niehoff                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(Niehoff)).*$/i', $articleName) ? true : false):
                $categoryID =279;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Royal Garden                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Royal.*Garden)).*$/i', $articleName) ? true : false):
                $categoryID =316;
                break;
            //La Siesta                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(La.*Siesta)).*$/i', $articleName) ? true : false):
                $categoryID =228;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Scolaro                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(Scolaro)).*$/i', $articleName) ? true : false):
                $categoryID =327;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //Solpuri                                                                                                                                                                                                                                                        
            case (preg_match('/^(?=.*(Solpuri)).*$/i', $articleName) ? true : false):
                $categoryID =343;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //HS Concept                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(HS.*Concept)).*$/i', $articleName) ? true : false):
                $categoryID =186;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //myyour                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Weishäupl)|(Weishaeupl)).*$/i', $articleName) ? true : false):
                $categoryID =406;
                break;
            //Umbrosa                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Umbrosa)).*$/i', $articleName) ? true : false):
                $categoryID =390;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            // Epstein-Design                                                                                                                                                                                                                                                       
            case (preg_match('/^(?=.*(Epstein.*Design)).*$/i', $articleName) ? true : false):
                $categoryID =106;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //Heatscope                                                                                                                                                                                                                                                        
            case (preg_match('/^(?=.*(Heatscope)).*$/i', $articleName) ? true : false):
                $categoryID =167;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Shademaker                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Shademaker)).*$/i', $articleName) ? true : false):
                $categoryID =331;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Kühnemuth                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Kühnemuth)|(Kuehnemuth)).*$/i', $articleName) ? true : false):
                $categoryID =226;
                break;   
            //Caravita                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(Caravita)).*$/i', $articleName) ? true : false):
                $categoryID =67;
                break;
            //Henrik Bosse                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(Henrik.*Bosse)).*$/i', $articleName) ? true : false):
                $categoryID =174;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Bardosch                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(Bardosch)).*$/i', $articleName) ? true : false):
                $categoryID =40;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //Skanholz                                                                                                                                                                                                                                                        
            case (preg_match('/^(?=.*(Skanholz)).*$/i', $articleName) ? true : false):
                $categoryID =340;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Easy Camp                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(Easy.*camp)).*$/i', $articleName) ? true : false):
                $categoryID =98;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Outwell                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Outwell)).*$/i', $articleName) ? true : false):
                $categoryID =286;
                break;
            //Isabella                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Isabella)).*$/i', $articleName) ? true : false):
                $categoryID =195;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            // Helinox                                                                                                                                                                                                                                                      
            case (preg_match('/^(?=.*(Helinox)).*$/i', $articleName) ? true : false):
                $categoryID =173;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //Tentastic                                                                                                                                                                                                                                                        
            case (preg_match('/^(?=.*(Tentastic)).*$/i', $articleName) ? true : false):
                $categoryID =375;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Kings Garden                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Kings.*Garden)).*$/i', $articleName) ? true : false):
                $categoryID =218;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Silva Outdoor                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Silva.*Outdoor)).*$/i', $articleName) ? true : false):
                $categoryID =336;
                break;      
            //Safavieh                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Safavieh)).*$/i', $articleName) ? true : false):
                $categoryID =318;
                break;
            //Helcosol                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Helcosol)).*$/i', $articleName) ? true : false):
                $categoryID =172;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            // Garden Guerilla                                                                                                                                                                                                                                                      
            case (preg_match('/^(?=.*(Garden.*Guerilla)).*$/i', $articleName) ? true : false):
                $categoryID =126;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //Gardenho.me                                                                                                                                                                                                                                                        
            case (preg_match('/^(?=.*(Gardenho.*me)).*$/i', $articleName) ? true : false):
                $categoryID =130;
                break;
            //Trend Trading                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Trend.*Trading)).*$/i', $articleName) ? true : false):
                $categoryID =382;
                break;
            //Müsing                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Müsing)|(Muesing)).*$/i', $articleName) ? true : false):
                $categoryID =270;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            // Pure Day                                                                                                                                                                                                                                                      
            case (preg_match('/^(?=.*(Pure.*Day)).*$/i', $articleName) ? true : false):
                $categoryID =302;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //home24                                                                                                                                                                                                                                                        
            case (preg_match('/^(?=.*(home.*24)).*$/i', $articleName) ? true : false):
                $categoryID =183;
                break;     
            //jardin                                                                                                                                                                                                                                                           
            case (preg_match('/^(?!.*(feu))(?=.*(jardin)).*$/i', $articleName) ? true : false):
                $categoryID =198;
                break;
            //Hg                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Hg)).*$/i', $articleName) ? true : false):
                $categoryID =176;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            // Konifera                                                                                                                                                                                                                                                      
            case (preg_match('/^(?=.*(Konifera)).*$/i', $articleName) ? true : false):
                $categoryID =223;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //Luoman                                                                                                                                                                                                                                                        
            case (preg_match('/^(?=.*(Luoman)).*$/i', $articleName) ? true : false):
                $categoryID =244;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Salesfever                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(Salesfever)).*$/i', $articleName) ? true : false):
                $categoryID =319;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Loberon                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(Loberon)).*$/i', $articleName) ? true : false):
                $categoryID =242;
                break;      
            //Nordic Holz                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Nordic.*Holz)).*$/i', $articleName) ? true : false):
                $categoryID =280;
                break;
            //Bellasol                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Bellasol)).*$/i', $articleName) ? true : false):
                $categoryID =45;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            // Desalto                                                                                                                                                                                                                                                     
            case (preg_match('/^(?=.*(Desalto)).*$/i', $articleName) ? true : false):
                $categoryID =84;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //Fredriks                                                                                                                                                                                                                                                   
            case (preg_match('/^(?=.*(Fredriks)).*$/i', $articleName) ? true : false):
                $categoryID =119;
                break;
            //Progarden                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(Progarden)).*$/i', $articleName) ? true : false):
                $categoryID =299;
                break;
            //Ethimo                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Ethimo)).*$/i', $articleName) ? true : false):
                $categoryID =107;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            // Pure Day                                                                                                                                                                                                                                                      
            case (preg_match('/^(?=.*(Näve)|(Naeve)).*$/i', $articleName) ? true : false):
                $categoryID =276;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //ikarus                                                                                                                                                                                                                                                        
            case (preg_match('/^(?=.*(ikarus)).*$/i', $articleName) ? true : false):
                $categoryID =188;
                break;
            //Activa                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Activa)).*$/i', $articleName) ? true : false):
                $categoryID =22;
                break;
            //bizzotto                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(biz.*otto)).*$/i', $articleName) ? true : false):
                $categoryID =53;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            // reclaimed                                                                                                                                                                                                                                                      
            case (preg_match('/^(?=.*(reclaimed)).*$/i', $articleName) ? true : false):
                $categoryID =308;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //Feu Du Jardin                                                                                                                                                                                                                                                        
            case (preg_match('/^(?=.*(Feu.*Du.*Jardin)).*$/i', $articleName) ? true : false):
                $categoryID =112;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Sedit                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(Sedit)).*$/i', $articleName) ? true : false):
                $categoryID =329;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //infiniti                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(infiniti)).*$/i', $articleName) ? true : false):
                $categoryID =191;
                break;      
            //  Scab                                                                                                                                                                                                                                                       
            case (preg_match('/^(?=.*(Scab)).*$/i', $articleName) ? true : false):
                $categoryID =321;
                break;
            // Fink                                                                                                                                                                                                                                                     
            case (preg_match('/^(?=.*(Fink)).*$/i', $articleName) ? true : false):
                $categoryID =114;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //Oasiq                                                                                                                                                                                                                                                   
            case (preg_match('/^(?=.*(Oasiq)).*$/i', $articleName) ? true : false):
                $categoryID =281;
                break;
            //rausch classics                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(rausch.*classics)).*$/i', $articleName) ? true : false):
                $categoryID =307;
                break;
            //Dedon                                                                                                                                                                                                                                                           
            case (preg_match('/^(?=.*(Dedon)).*$/i', $articleName) ? true : false):
                $categoryID =80;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            // Barlow Tyrie                                                                                                                                                                                                                                                     
            case (preg_match('/^(?=.*(Barlow.*Tyrie)).*$/i', $articleName) ? true : false):
                $categoryID =41;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //Cane-line                                                                                                                                                                                                                                                        
            case (preg_match('/^(?=.*(Cane.*line)).*$/i', $articleName) ? true : false):
                $categoryID =65;  
                break;  
            //Gloster                                                                                                                                                                                                                                                      
            case (preg_match('/^(?=.*(Gloster)).*$/i', $articleName) ? true : false):
                $categoryID =151;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Tribu                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(Tribu)).*$/i', $articleName) ? true : false):
                $categoryID =386;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            //Tuuci                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(Tuuci)).*$/i', $articleName) ? true : false):
                $categoryID =388;
                break;      
            //  SIT Mobilia                                                                                                                                                                                                                                                       
            case (preg_match('/^(?=.*(SIT.*Mobilia)).*$/i', $articleName) ? true : false):
                $categoryID =338;
                break;
            //vadera                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(vadera)).*$/i', $articleName) ? true : false):
                $categoryID =391;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            // Manutti                                                                                                                                                                                                                                                     
            case (preg_match('/^(?=.*(Manutti)).*$/i', $articleName) ? true : false):
                $categoryID =251;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //  Royal Botania                                                                                                                                                                                                                                                   
            case (preg_match('/^(?=.*(Royal.*Botania)).*$/i', $articleName) ? true : false):
                $categoryID =315;
                break;
            //Design2Chill                                                                                                                                                                                                                                                     
            case (preg_match('/^(?=.*(Design.*2.*Chill)).*$/i', $articleName) ? true : false):
                $categoryID =85;
                break;
            //Val-Eur                                                                                                                                                                                                                                                          
            case (preg_match('/^(?=.*(Val.*Eur)).*$/i', $articleName) ? true : false):
                $categoryID =392;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            // todus                                                                                                                                                                                                                                                   
            case (preg_match('/^(?=.*(todus)).*$/i', $articleName) ? true : false):
                $categoryID =378;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //Mama Green                                                                                                                                                                                                                                            
            case (preg_match('/^(?=.*(Mama.*Green)).*$/i', $articleName) ? true : false):
                $categoryID =250;  
                break;               
            //Traditional Teak                                                                                                                                                                                                                                                         
            case (preg_match('/^(?=.*(Traditional.*Teak)).*$/i', $articleName) ? true : false):
                $categoryID =381;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            // Lifestyle Garden                                                                                                                                                                                                                                                     
            case (preg_match('/^(?=.*(Lifestyle.*Garden)).*$/i', $articleName) ? true : false):
                $categoryID =238;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //  gardissimo                                                                                                                                                                                                                                                 
            case (preg_match('/^(?=.*(gardissimo)).*$/i', $articleName) ? true : false):
                $categoryID =132;
                break;
            //Gartengut                                                                                                                                                                                                                                                     
            case (preg_match('/^(?=.*(Gartengut)).*$/i', $articleName) ? true : false):
                $categoryID =136;
                break;
            //Life                                                                                                                                                                                                                                                         
            case (preg_match('/^.*(\blife\b).*$/i', $articleName) ? true : false):
                $categoryID =236;
                break;                                                                                                                                                                                                                                                                                                                                                                                  
            // ScanCom                                                                                                                                                                                                                                                   
            case (preg_match('/^(?=.*(Scan%Com)).*$/i', $articleName) ? true : false):
                $categoryID =322;
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            //relaxdays                                                                                                                                                                                                                                       
            case (preg_match('/^(?=.*(relaxdays)).*$/i', $articleName) ? true : false):
                $categoryID =310;  
                break;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
            //kategorie Unbekannt    
            default:
                $categoryID = 0;
        endswitch;
        return $categoryID;
    }

    public static function categoryMapping($articleName){

        $categoryIDs = [];

            //Gartenmöbel
            //Gartenstühle
            //Campingstühle    
            if(preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(stuhl|stühle|hocker))(?=.*(camping|campen))(?=.*(stuhl|stühle|hocker))(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 30);}
            //Massivholz Gartenstühle
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(stuhl|stühle|hocker))(?=.*(holz|eukalyptus|akazie))(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*klapp)(?!.*(hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 83);}
            //Teakholz Gartenstühle
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(stuhl|stühle|hocker))(?=.*(teak))(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*klapp)(?!.*(hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 128);}
            //Metall Gartenstühle
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(stuhl|stühle|hocker))(?=.*(alu|alu-|aluminium|eisen|metall|stahl))(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*klapp)(?!.*(hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 87);}
            //Kunststoff Gartenstühle
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(stuhl|stühle|hocker))(?=.*kunststoff)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*klapp)(?!.*(hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 69);}
            //Polyrattan Gartenstühle               
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(stuhl|stühle|hocker))(?=.*(rattan|geflecht|loom))(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*klapp)(?!.*(hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 94);}
            //Klappstühle           
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(stuhl|stühle|hocker|hochlehner))(?=.*klapp)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 66);}
            //Hochlehner    
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*hochlehner)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*klapp)(?!.*(stuhl|stühle|hocker|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 63);}
            //Barhocker
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(stuhl|stühle|hocker))(?=.*bar)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 26);}
            //Bistrostühle                                  
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(stuhl|stühle|hocker))(?=.*bistro)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 29);}
            //Hängestühle    
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*hänge)(?=.*(stuhl|stühle|hocker))(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 61);}
            //Auflagen, Polster, Kissen für Gartenstühle    
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(stuhl|stühle|hocker|hochlehner))(?=.*(auflage|polster|kissen))(?!.*(inkl.|inklusive|mit))(?!.*(tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 213);}
            //Schutzhüllen für Gartenstühle
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(stuhl|stühle|hocker|hochlehner))(?=.*(hülle|abdeckhaube|plane))(?!.*(tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 214);}
            //Gartenstühle
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(stuhl|stühle|hocker|hochlehner))(?!.*(tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 55);}
            //Gartentische
            //Massivholz Gartentische
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*tisch)(?=.*(holz|eukalyptus|akazie))(?!.*(klapp|ess|teak|beistell|auszieh|balkon))(?!.*(stuhl|stühle|hocker|hochlehner|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 84);}
            //Teakholz Gartentische             
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*tisch)(?=.*teak)(?!.*klapp)(?!.*(stuhl|stühle|hocker|hochlehner|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 129);}
            //Metall Gartentische               
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*tisch)(?=.*(alu|alu-|aluminium|eisen|metall|stahl))(?!.*(klapp|ess|beistell|auszieh|balkon))(?!.*(stuhl|stühle|hocker|hochlehner|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 88);}
            //Kunststoff Gartentische               
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*tisch)(?=.*kunststoff)(?!.*(klapp|ess|beistell|auszieh|balkon))(?!.*(stuhl|stühle|hocker|hochlehner|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 70);}
            //Polyrattan Gartentische               
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*tisch)(?=.*(rattan|geflecht|loom))(?!.*(klapp|ess|beistell|auszieh|balkon))(?!.*(stuhl|stühle|hocker|hochlehner|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 95);}
            //Esstische             
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*ess)(?=.*tisch)(?!.*(klapp|beistell|auszieh|balkon))(?!.*(stuhl|stühle|hocker|hochlehner|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 37);}
            //Beistelltische                
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*tisch)(?=.*beistell)(?!.*(klapp|ess|auszieh|balkon))(?!.*(stuhl|stühle|hocker|hochlehner|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 27);}
            //Klapptische               
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*tisch)(?=.*klapp)(?!.*(ess|beistell|auszieh|balkon))(?!.*(stuhl|stühle|hocker|hochlehner|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 67);}
            //Ausziehtische             
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*tisch)(?=.*auszieh)(?!.*(klapp|ess|beistell|balkon))(?!.*(stuhl|stühle|hocker|hochlehner|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 23);}
            //Lounge Tische              
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*tisch)(?=.*lounge)(?!.*klapp)(?!.*(stuhl|stühle|hocker|hochlehner|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 76);}
            //Balkon Tische
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*tisch)(?=.*balkon)(?!.*klapp)(?!.*(stuhl|stühle|hocker|hochlehner|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 24);}
            //Tischgestelle
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*tisch)(?=.*gestell)(?!.*(stuhl|stühle|hocker|hochlehner|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 130);}
            //Tischplatten
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?!.*(tennis))(?=.*tisch)(?=.*platte)(?!.*(stuhl|stühle|hocker|hochlehner|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 131);}
            //Schutzhüllen für Gartentische
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*tisch)(?=.*(hülle|abdeckhaube|plane))(?!.*(stuhl|stühle|hocker|hochlehner|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 223);}
            //Gartentische
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*tisch)(?!.*(stuhl|stühle|hocker|hochlehner|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 56);}
            //Gartenbänke
            //Massivholz Gartenbänke
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(holz|eukalyptus|akazie))(?=.*bank)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 81);}
            //Teakholz Gartenbänke
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*teak)(?=.*bank)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 126);}
            //Metall Gartenbänke                
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(alu|alu-|aluminium|eisen|metall|stahl))(?=.*bank)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 85);}
            //Auflagen, Polster, Kissen für Gartenbänke    
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*bank)(?=.*(auflage|polster|kissen))(?!.*(inkl.|inklusive|mit))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 218);}
            //Schutzhüllen für Gartenbänke
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*bank)(?=.*(hülle|abdeckhaube|plane))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 222);}
            //Gartenbänke
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*bank)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 43);}
            //Gartensessel
            //Holz Gartensessel
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(holz|eukalyptus|akazie))(?=.*sessel)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 82);}
            //Teakholz Gartensessel
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*teak)(?=.*sessel)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 127);}
            //Metall Gartensessel
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(alu|alu-|aluminium|eisen|metall|stahl))(?=.*sessel)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 86);}
            //Polyrattan Gartensessel               
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(rattan|geflecht|loom))(?=.*sessel)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 92);}
            //Stapelsessel
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*stapel)(?=.*sessel)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 121);}
            //Klappsessel
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*klapp)(?=.*sessel)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 65);}
            //Hängesessel
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*hänge)(?=.*sessel)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 60);}
            //Gartensessel    
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*sessel)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 51);}
            //Auflagen, Polster, Kissen für Gartensessel    
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*sessel)(?=.*(auflage|polster|kissen))(?!.*(inkl.|inklusive|mit))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 217);}
            //Schutzhüllen für Gartensessel
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*sessel)(?=.*(hülle|abdeckhaube|plane))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 221);}
            //Gartensofas
            //Gartensofa Sets               
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(set|garnitur))(?=.*sofa)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|modul|element|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 53);}
            //Gartensofa Module
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(modul|element))(?=.*sofa)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 52);}
            //Polyrattan Gartensofas
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(rattan|geflecht|loom))(?=.*sofa)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 93);}
            //2 Sitzer
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(2er|2 sitzer|2-sitzer|2-sitzig|zweisitzer))(?=.*sofa)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 9);}
            //3 Sitzer
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(3er|3 sitzer|3-sitzer|3-sitzig|dreisitzer))(?=.*sofa)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 10);}
            //Ecksofas              
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*sofa)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 35);}
            //Auflagen, Polster, Kissen für Gartensofas    
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*sofa)(?=.*(auflage|polster|kissen))(?!.*(inkl.|inklusive|mit))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 216);}
            //Schutzhüllen für Gartensofas
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*sofa)(?=.*(hülle|abdeckhaube|plane))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 220);}
            //Gartensofas
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*sofa)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster)?)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 54);}
            //Gartenliegen
            //Klappliegen
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*klapp)(?=.*liege)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 64);}
            //Schwingliegen
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*schwing)(?=.*liege)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 111);}
            //Deckchairs                
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*deckchair)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 31);}
            //Relaxliegen
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*relax)(?=.*liege)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 97);}
            //Sonnenliegen
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*sonnen)(?=.*liege)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 116);}
            //Rollenliegen
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*rolle)(?=.*liege)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 98);}
            //Stapelliegen
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*stapel)(?=.*liege)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 120);}
            //Auflagen, Polster, Kissen für Gartenliegen    
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*liege)(?=.*(auflage|polster|kissen))(?!.*(inkl.|inklusive|mit))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 215);}
            //Schutzhüllen für Gartenliegen
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*liege)(?=.*(hülle|abdeckhaube|plane))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 219);}
            //Gartenliegen    
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|balkon|outdoor|terrasse))(?=.*liege)(?=.*(inkl\. auflage|mit auflage|inklusive auflage|inkl\. kissen|mit kissen|inklusive kissen|inkl\. polster|mit polster|inklusive polster))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 47);}
            //Strandkörbe
            //Single Strandkörbe
            if (preg_match('/^(?=.*(single|einsitzer))(?=.*strandkorb).*$/i', $articleName)){
                array_push($categoryIDs, 114);}
            //Dreisitzer Strandkörbe
            if (preg_match('/^(?=.*(drei|3.*sitz))(?=.*strandkorb).*$/i', $articleName)){
                array_push($categoryIDs, 34);}
            //Strandkorb Zubehör
            if (preg_match('/^(?=.*(kühler|halter|pflegeset|flasche|glas|kissen|polster|auflage|rolle|))(?=.*strandkorb).*$/i', $articleName)){
                array_push($categoryIDs, 124);}
            //Strandkorb Schutzhüllen               
            if (preg_match('/^(?=.*(hülle|abdeck|haube|plane))(?=.*strandkorb).*$/i', $articleName)){
                array_push($categoryIDs, 123);}
            //Strandkörbe    
            if (preg_match('/^(?=.*strandkorb).*$/i', $articleName)){
                array_push($categoryIDs, 125);}
            //Hängematten
            //Hängematten Gestelle
            if (preg_match('/^(?=.*(hängematte|haengematte))(?=gestell).*$/i', $articleName)){
                array_push($categoryIDs, 58);}
            //Hängematten Zubehör
            if (preg_match('/^(?=.*(hängematte|haengematte))(?=(befestigung|zubehör|zubehoer)).*$/i', $articleName)){
                array_push($categoryIDs, 59);}
            //Hängematten    
            if (preg_match('/^(?=.*(hängematte|haengematte)).*$/i', $articleName)){
                array_push($categoryIDs, 57);}
            //Garten Regale
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|balkon|outdoor|terrasse))(?=.*regal)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 41);}
            //Servierwagen
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|balkon|outdoor|terrasse))(?=.*servier)(?=.*wagen)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 112);}
            //Gartenmöbel Sets
            //Esstisch Garnituren
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|balkon|outdoor|terrasse))(?=.*ess.?tisch)(?=.*(set|garnitur|gruppe))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 36);}
            //Polyrattan Sitzgruppen
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|balkon|outdoor|terrasse))(?=.*rattan|geflecht|loom)(?=.*(set|garnitur|gruppe))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 96);}
            //Garten Bars               
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|balkon|outdoor|terrasse))(?=.*bar)(?=.*(set|garnitur|gruppe))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 40);}
            //Gartenmöbel Sets    
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|balkon|outdoor|terrasse))(?=.*möbel)(?=.*(set|garnitur|gruppe))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 49);}
            //Loungemöbel
            //Loungemöbel Sets
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|balkon|outdoor|terrasse))(?=.*lounge)(?=.*(set|garnitur|gruppe))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 78);}
            //Lounge Sofas
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|balkon|outdoor|terrasse))(?=.*lounge)(?=.*sofa)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 75);}
            //Lounge Sessel
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|balkon|outdoor|terrasse))(?=.*lounge)(?=.*sessel)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 74);}
            //Lounge Liegen
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|balkon|outdoor|terrasse))(?=.*lounge)(?=.*liege)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 73);}
            //Lounge Tische             
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|balkon|outdoor|terrasse))(?=.*lounge)(?=.*tisch)(?!.*(stuhl|stühle|hocker|hochlehner|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 76);}
            //Sonnenschirme
            //Ampelschirme    
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*ampel)(?=.*schirm)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 12);}
            //Mittelstockschirme
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*mittelstock)(?=.*schirm)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 89);}
            //Schirmständer
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*ständer)(?=.*schirm)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 102);}
            //Sonnenschirm Schutzhüllen
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(hülle|abdeck|haube|plane))(?=.*schirm)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 106);}
            //Sonnenschirme             
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(sonnenschirm|ampelschirm|mittelstockschirm))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 118);}
            //Gartenpavillons           
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*garten)(?=.*pavillon)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 50);}
            //Gartenhäuser          
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*gartenhaus)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 46);}
            //Gartenausstattung    
            //Beleuchtung im Garten             
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|terrasse|balkon))(?=.*(licht|beleuchtung))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 28);}
            //Gartendeko            
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|terrasse|balkon))(?=.*deko)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 44);}
            //Figuren & Objekte             
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|terrasse|balkon))(?=.*(figur|objekt|skulptur))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 39);}
            //Feuer im Garten           
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*feuer)(?=.*(schale|korb))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 38);}
            //Gartenduschen             
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|terrasse|balkon))(?=.*dusche)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 45);}
            //Heizstrahler          
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|terrasse|balkon))(?=.*heizstrahler)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 62);}
            //Markisen          
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*markise)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 80);}
            //Pflanzkübel           
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|terrasse|balkon))(?=.*pflanz)(?=.*kübel|gefäß|topf)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 90);}
            //Sichtschutz           
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*sichtschutz)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 113);}
            //Sonnenschutz          
//            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*sonne)(?=.*schutz)(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
//                array_push($categoryIDs, 119);}
            //Vasen & Schalen           
            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*(garten|terrasse|balkon))(?=.*(vase|schale))(?!.*(stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer|wasser)).*$/i', $articleName)){
                array_push($categoryIDs, 132);}
            //Wasser im Garten          
//            if (preg_match('/^(?=.*(garten|balkon|terrasse|outdoor))(?=.*garten)(?=.*wasser)(?!.*(auflage|polster|kissen|stuhl|stühle|hocker|hochlehner|tisch|bank|sessel|set|garnitur|modul|element|sofa|liege|deckchair|strandkorb|hängematte|haengematte|regal|wagen|set|garnitur|gruppe|schirm|pavillon|licht|beleuchtung|deko|figur|objekt|skulptur|schale|korb|dusche|heizstrahler|kübel|gefäß|topf|feuer)).*$/i', $articleName)){
//                array_push($categoryIDs, 133);}
                
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
                case (preg_match('/^(?=.*(weiß|weiss|white)).*$/i', $value) ? true : false):
                    array_push($colors, "weiß");
                    break;
                case (preg_match('/^(?=.*(schwarz|black)).*$/i', $value) ? true : false):
                    array_push($colors, "schwarz");
                    break;
                case (preg_match('/^(?=.*(rot|red)).*$/i', $value) ? true : false):
                    array_push($colors, "rot");
                    break;
                case (preg_match('/^(?=.*(blau|blue)).*$/i', $value) ? true : false):
                    array_push($colors, "blau");     
                    break;               
                case (preg_match('/^(?=.*(grün|green)).*$/i', $value) ? true : false):
                    array_push($colors, "grün");   
                    break;                 
                case (preg_match('/^(?=.*(orange)).*$/i', $value) ? true : false):
                    array_push($colors, "orange");   
                    break;                 
                case (preg_match('/^(?=.*(taupe)).*$/i', $value) ? true : false):
                    array_push($colors, "taupe");  
                    break;                  
                case (preg_match('/^(?=.*(blaugrau|grau|grey)).*$/i', $value) ? true : false):
                    array_push($colors, "grau"); 
                    break;                   
                case (preg_match('/^(?=.*(silber|silver)).*$/i', $value) ? true : false):
                    array_push($colors, "silber");
                    break;                    
                case (preg_match('/^(?=.*(gold)).*$/i', $value) ? true : false):
                    array_push($colors, "gold");
                    break;                    
                case (preg_match('/^(?=.*(anthrazit)).*$/i', $value) ? true : false):
                    array_push($colors, "anthrazit");
                    break;                    
                case (preg_match('/^(?=.*(beige)).*$/i', $value) ? true : false):
                    array_push($colors, "beige");
                    break;                    
                case (preg_match('/^(?=.*(braun|brown)).*$/i', $value) ? true : false):
                    array_push($colors, "braun");
                    break;                    
                case (preg_match('/^(?=.*(pink)).*$/i', $value) ? true : false):
                    array_push($colors, "pink");
                    break;                    
                case (preg_match('/^(?=.*(natur)).*$/i', $value) ? true : false):
                    array_push($colors, "natur");
                    break;                                        
            endswitch;
        }    
        if (empty($categoryIDs)){
            array_push($colors, "unbekannt");                
        }
        else{    
            $colors = array_unique($colors);        
        }    
        return $colors;
    }


    public static function materialMapping($inputString){

        $inputStringTokens = preg_split("/ -\/\./", $inputString);

        $materials = array();

        foreach($inputStringTokens as $value){
            switch ($value):
                case (preg_match('/^(?=.*(eisen| alu|alu |aluminium|stahl|metall)).*$/i', $value) ? true : false):
                    array_push($materials, "Metall");
                    break;
                case (preg_match('/^(?=.*(eiche|buche|kiefer|eukalyptus|teak|akazie|holz|mahagon)).*$/i', $value) ? true : false):
                    array_push($materials, "Holz");
                    break;
                case (preg_match('/^(?=.*(pvc|kunststoff)).*$/i', $value) ? true : false):
                    array_push($materials, "Kunststoff");
                    break;
            endswitch;
        }    
        $materials = array_unique($materials);
        return $materials;
    }
}    