<?php
// array with names
$a[] = "ALGI FAHRI";
$a[] = "Annisa";
$a[] = "Hendra Bayau";
$a[] = "Reyhan Hime-Hime";
$a[] = "Iqbal Ibrahim";
$a[] = "Jihan Azza Syaqy";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

//lookup all hints from array if $q is different from ""
if ($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);
	foreach($a as $name){
			if(stristr($q, substr($name, 0, $len))) {
				if($hint === ""){
					$hint = $name;
				} else {
					$hint .= ", $name";
				}
		}
	}
}

//Output "no suggestion" if no hint was found o output correct values
echo $hint == "" ? "Tidak Terdeteksi" : $hint;
?>
