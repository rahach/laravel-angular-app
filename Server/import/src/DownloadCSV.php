<?php    
namespace Import;

use Illuminate\Support\Facades\DB;

class DownloadCSV{

    private $advertiser;
    private $filename;
    private $fullPath;
    private $time;
    private $downloadStatus;

    public function __construct(\App\Advertiser $advertiser){
        $this->advertiser = $advertiser;
        $this->time = time();
        $this->filename = date('Y_m_d_H_i_s', $this->time) . "_" . $this->advertiser->slug . ".csv";                
        $this->fullPath = $this->advertiser->path . $this->filename;
        $this->downloadStatus = false; 
    }
    
    public function run(){
        // $this->downloadFile($this->advertiser->download_url);
        // $this->testChecksum($this->createChecksum($this->fullPath));
        // $this->updateUpdates($this->advertiser->id, $this->advertiser->network, date('Y-m-d H:i:s', $this->time));     

        // if($this->downloadStatus)
            return $this->advertiser;
    }

    private function downloadFile(String $url){
        $fp = fopen ($this->fullPath, 'w+');
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_BINARYTRANSFER, true );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, false );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );    
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 10 );
        curl_setopt( $ch, CURLOPT_FILE, $fp );
        curl_exec( $ch );
        curl_close( $ch );
        fclose( $fp );        
    }

    private function createChecksum(String $path){
        return sha1_file($path);        
    }

    private function testChecksum(String $newChecksum){
        $oldChecksum = DB::table('advertisers')
            ->where('id', $this->advertiser->id)        
            ->pluck('checksum')->first();
        if($newChecksum != $oldChecksum || $oldChecksum == NULL){
            $this->storeAdvertiser($newChecksum);
            $this->downloadStatus = true;
        }
    }

    private function storeAdvertiser(String $newChecksum){           
        DB::table('advertisers')
            ->where('id', $this->advertiser->id)
            ->update(['checksum' => $newChecksum, 'updated_at' => date('Y-m-d H:i:s', $this->time), 'filename' => $this->filename]);
    }

    private function updateUpdates($advertiser, $network, $updateTime){
        DB::table('updates')
            ->where('advertiser_id', $advertiser)
            ->update(['updated_at' => $updateTime]);        
    }


}    
