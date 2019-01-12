<?php
function nabila($a, $data) {
                $body = '{"data":"'.$data.'","v":"0"}';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://point.shortvideo3.top/v1/users/points");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		$headers = array ();
			    $headers[] = "Content-Type: application/json; charset=utf-8";
                $headers[] = "User-Agent: LuckyDog/1.1.4";
                $headers[] = "BeeAuthorization: LUCKYDOG 0099005wcS3M98fM6U3H4zdNchdB8_a67w6XcP1zaP7W3Naked1187b-5iAxTYET-B9teHRz883UqUjEbfmeBfgJWhQPkCKpqft53Nbf2cTCosZLNm%GP@83mfsju_aroOm0AHj&V7cWAvNsE4yGA3vjaRUjD8qw9AJEOR.3bf3a71638010cf7e82c68c65d96d550fd6936c44b37d5fdb46d239af9e1ec58";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;	

}
print "Lucky Dog\n";
print "Thanks To : Muhammad Ikhsan Aprilyadi\n\n";
echo "Data : ";
$data = trim(fgets(STDIN));
echo "Jumlah : ";
$jum = trim(fgets(STDIN));
echo "\n\n";
for($a=6;$a<$jum;$a++){
sleep (6);
$oce = nabila($a, $data);
echo "".$oce."\n";
}
?>