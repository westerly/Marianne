<?php

class lang{
	
	public $currentLang;
	private $file;
	
	
	public function lang($langue="fr"){
		$this->currentLang = $langue;
	}
	
	public function trans($key){		
		$existe = FALSE;
		$chemin = './lang/'.$this->currentLang.'.txt';
		$fp = fopen($chemin, 'r') or die('Ouverture en lecture du fichier de traduction impossible !');
		while (!feof($fp) && !$existe) {
			$ligne = fgets($fp, 1024);
			if (preg_match('/^'.$key.' \|(.*)/', $ligne)) {
				$existe = TRUE;
				//print $ligne;
			}
		}
		
		fclose($fp);
		
		if($existe){
			return substr($ligne, stripos($ligne, "|")+1);
		}else{
			return $key;
		}
		
		
	}
}