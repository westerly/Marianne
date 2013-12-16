<?php 

include "lang.php";

$url_root = "http://localhost/Marianne";

if(isset($_GET["lang"])){
	$lang = $_GET["lang"];
	setcookie("lang",$_GET["lang"]);
}

if(!isset($_COOKIE["lang"])){
	setcookie("lang","fr");
}

if(isset($lang)){
	$langs = new lang($lang);
}else{
	if(isset($_COOKIE["lang"])){
		$langs = new lang($_COOKIE["lang"]);
	}else{
		$langs = new lang();
	}
}

function get_language_entete($langs){
		
		switch ($langs->currentLang) {
			case "fr":
				echo '"fr-FR"';
				break;
			case "en":
				echo '"en-GB"';
				break;
			case "pt":
				echo '"pt"';
				break;
		}
}

function _getServerUrl()
{
	return $_SERVER['REQUEST_URI']; 
}

function clearUrl($url, $lang){
	if(strpos($url,"lang")>0){
		$url = substr_replace($url,$lang,strpos($url,"lang")+5,2); 
	}else{
		$url .= "?lang=".$lang;
	}
	echo $url;
}

function getClassMenuHeader($item){
	
	if(strpos(_getServerUrl(),$item)>0){
		echo "current_page_item";
	}else{
		echo "page_item";
	}	
}

?>