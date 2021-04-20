<?php
session_start();
$defaultLang = 'en';
$defaultDir  = 'ltr';  

if (!empty($_GET["lang"])) 
{ 
    switch (strtolower($_GET["lang"])) {
        case "en":
            //If the string is en or EN
            $_SESSION['lang'] = 'en';
			$_SESSION["dir"]  = 'ltr';  
            break;
        case "ar":
            //If the string is tr or TR
            $_SESSION['lang'] = 'ar';
			$_SESSION["dir"]  = 'rtl'; 
            break;
        default:
            //IN ALL OTHER CASES your default langauge code will set
            //Invalid languages
            $_SESSION['lang'] = $defaultLang;
			$_SESSION["dir"]  = $defaultDir; 
            break;
    }
}

//If there was no language initialized, (empty $_SESSION['lang']) then
if (empty($_SESSION["lang"]) || empty($_SESSION["dir"])) {
    //Set default lang if there was no language
    $_SESSION["lang"] = $defaultLang;
	$_SESSION["dir"]  = $defaultDir; 
} 