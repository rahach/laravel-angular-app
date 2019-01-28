<?php
namespace Import;

use Import\DownloadCSV;
use Import\TransformCSV;
use InsertData;
use UpdateData;

use App\Advertiser;

use Illuminate\Database\Eloquent\Collection;

class ProcessController{

	private $advertisers;

	public function __construct(){
		$this->advertisers = Advertiser::all();
	}


	public function start(){
		$activeAdvertisers = $this->getActive($this->advertisers);		
		if(count($activeAdvertisers)){
			$this->processAdvertisers($activeAdvertisers);
		}	
	}

	private function getActive(Collection $advertisers){
		$activeAdvertisers = [];		
		foreach($advertisers as $advertiser){
			if($advertiser->is_active){
				array_push($activeAdvertisers, $advertiser);
			}	
		}
		return $activeAdvertisers;
	}

	private function processAdvertisers(Array $activeAdvertisers){	
		foreach($activeAdvertisers as $advertiser){		
			if($advertiser)
				$advertiser = $this->download($advertiser);
			if($advertiser)
				$advertiser = $this->transform($advertiser);			
		}	
	}

	private function download(Advertiser $advertiser){
		$download = new DownloadCSV($advertiser);
		return $download->run();
	}

	private function transform(Advertiser $advertiser){
		$transformation = new TransformCSV($advertiser);
		$transformation->run();
	}


}