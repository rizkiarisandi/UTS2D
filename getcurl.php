<?php
$curl = curl_init();
curl_setopt_array($curl,array(
    CURLOPT_URL=> 'https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING =>'',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURLOPT_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
curl_close($curl);

$json = json_decode($response, true);

$filterdata = array();
foreach($json as $data){
    $code = $data['i_code'];
    $name = $data['i_name'];
    $grup = $data['g_code'];
    $harga = $data['i_sell'];
    $kuantiti = $data['i_qty'];
    if (substr($grup , 0,1)=="B"){
    echo "Kode Barang = ".$code."<br>";
    echo "Nama Barang = ".$name."<br>";
    echo "Grup Barang = ".$grup."<br>";
    echo "Harga Jual = ".$harga."<br>";
    echo "Quantity = ".$kuantiti."<br>";}
}   
?>