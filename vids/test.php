<?PHP
$videolist = '0DV-GknVL2M';
$videolist = '_Jz2IN35E24';
$videolist = 'YwQtxloGGbs';
$videolist = '2d0iH6_8pzQ';
$videolist = 'TpKWZBGqW1U';
$videolist = 'WYrSdW6clI0';
$videolist = 'gATUvPsODss';
$videolist = '29S0SQ-9YYg';
$videolist = 'EoSfpmk6uy0';
$videolist = '2MFnacJFUT0';
$videolist = 'i54fIa8xFqs';
$videolist = 'oDaPsv-5CP';


    
    
    // set video data feed URL
    $url = 'http://gdata.youtube.com/feeds/api/videos/' . $videolist;

//$url = "http://gdata.youtube.com/feeds/api/videos/" . $embedCodeParts2[0];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$file = curl_exec($ch);

curl_close($ch);

$doc = new DOMDocument;
$doc->loadHTML($file);
$title = $doc->getElementsByTagName("title")->item(0)->nodeValue;
$videoDescription = $doc->getElementsByTagName("description")->item(0)->nodeValue;
echo $title;
echo $videoDescription;

    ?>