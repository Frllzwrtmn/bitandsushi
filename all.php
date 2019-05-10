<?php

$login = "https://allowweb.com/bitfast/index.php/user/login";
$index = "https://allowweb.com/bitfast/index.php/dashboard";
$desable = "https://allowweb.com/bitfast/index.php/dashboard/getDesabledButtons";
$addpoint = "https://allowweb.com/bitfast/index.php/balance/addPoint";

$login1 = "https://allowweb.com/supersatoshi/index.php/user/login";
$index1 = "https://allowweb.com/supersatoshi/index.php/dashboard";
$desable1 = "https://allowweb.com/supersatoshi/index.php/dashboard/getDesabledButtons";
$addpoint1 = "https://allowweb.com/supersatoshi/index.php/balance/addPoint";

$headers=array(
'email'=>'sitamfansedeng@gmail.com',
'password'=>'farel136',
);

function res($desable, $headers, $index){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $desable);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, $index);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie-name.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie-name.txt');
    $result = curl_exec($ch);
    curl_close($ch);
}

function claim($addpoint, $headers){
  $no = array("1","2","3","4","5");
  foreach($no as $data1){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $addpoint);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, $index);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, 1);
    $data["id"] = $data1;
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie-name.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie-name.txt');
    $result = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($result, true);
    echo "Message : ".$json["message"]." | Ballance : ".$json["pointBalance"]."\n";
    sleep(1);
  }
}
function res1($desable1, $headers, $index1){
    $ch1 = curl_init();
    curl_setopt($ch1, CURLOPT_URL, $desable1);
    curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch1, CURLOPT_REFERER, $index1);
    curl_setopt($ch1, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch1, CURLOPT_POST, 1);
    curl_setopt($ch1, CURLOPT_COOKIEJAR, 'cookie-name1.txt');
    curl_setopt($ch1, CURLOPT_COOKIEFILE, 'cookie-name1.txt');
    $result = curl_exec($ch1);
    curl_close($ch1);
}

function claim1($addpoint1, $headers){
  $no1 = array("1","2","3","4","5");
  foreach($no1 as $data2){
    $ch1 = curl_init();
    curl_setopt($ch1, CURLOPT_URL, $addpoint1);
    curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch1, CURLOPT_REFERER, $index1);
    curl_setopt($ch1,CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch1, CURLOPT_POST, 1);
    $data["id"] = $data2;
    curl_setopt($ch1, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch1, CURLOPT_COOKIEJAR, 'cookie-name1.txt');
    curl_setopt($ch1, CURLOPT_COOKIEFILE, 'cookie-name1.txt');
    $result = curl_exec($ch1);
    curl_close($ch1);
    $json = json_decode($result, true);
    echo "Message : ".$json["message"]." | Ballance : ".$json["pointBalance"]."\n";
    sleep(1);
  }
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_URL, $login);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie-name.txt');  
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie-name.txt');
$hasil=curl_exec($ch);
curl_close ($ch);
$one = explode('<b id="pointBalance">', $hasil);
$two = explode('</b>', $one[1]);


$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch1, CURLOPT_URL, $login1);
curl_setopt($ch1, CURLOPT_POSTFIELDS, http_build_query($headers));
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch1, CURLOPT_COOKIEJAR, 'cookie-name1.txt');  
curl_setopt($ch1, CURLOPT_COOKIEFILE, 'cookie-name1.txt');
$hasil1=curl_exec($ch1);
curl_close ($ch1);
$one1 = explode('<b id="pointBalance">', $hasil1);
$two1 = explode('</b>', $one1[1]);
echo "Ballance : ".$two1[0]." Point\n";

$i = 1;
echo "[".date("h:i:sa")."] Sikat Rell Sushinya......!\n";
 while($i ==1){
    res1($desable1, $headers, $index1);
    claim1($addpoint1,$headers,$no1);
sleep(2);
echo "Ballance : ".$two[0]." Point\n";
echo "[".date("h:i:sa")."] Sikat Rell BitFastnya.....!\n"; 

res($desable, $headers, $index);
    claim($addpoint,$headers,$no);

echo "[".date("h:i:sa")."] Istirahat Dulu mamang 5 menit....!\n"; sleep(360);
echo "[".date("h:i:sa")."] Sikat Rell Sushinya......!\n";
echo "Ballance : ".$two1[0]." Point\n";
}
sleep(3);


?>
