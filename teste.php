<?php 

//set POST variables
$url = 'http://convitenamao.com.br/compra_retorno';
//$url = 'http://localhost/teste2.php';
$fields = array(
            'teste' => 'aa',
            'teste2' => 'bb'
        );

//url-ify the data for the POST
$fields_string = '';
foreach($fields as $key=>$value) { 
	$fields_string .= $key.'='.$value.'&'; 
}
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);

//echo '<pre>';
//var_dump($result);
die();

//// Declare the class
//class GoogleUrlApi {
//  
//  // Constructor
//  function GoogleURLAPI($key,$apiURL = 'https://www.googleapis.com/urlshortener/v1/url') {
//    // Keep the API Url
//    $this->apiURL = $apiURL.'?key='.$key;
//  }
//  
//  // Shorten a URL
//  function shorten($url) {
//    // Send information along
//    $response = $this->send($url);
//    // Return the result
//    return isset($response['id']) ? $response['id'] : false;
//  }
//  
//  // Expand a URL
//  function expand($url) {
//    // Send information along
//    $response = $this->send($url,false);
//    // Return the result
//    return isset($response['longUrl']) ? $response['longUrl'] : false;
//  }
//  
//  // Send information to Google
//  function send($url,$shorten = true) {
//    // Create cURL
//    $ch = curl_init();
//    // If we're shortening a URL...
//    if($shorten) {
//      curl_setopt($ch,CURLOPT_URL,$this->apiURL);
//      curl_setopt($ch,CURLOPT_POST,1);
//      curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode(array("longUrl"=>$url)));
//      curl_setopt($ch,CURLOPT_HTTPHEADER,array("Content-Type: application/json"));
//    }
//    else {
//      curl_setopt($ch,CURLOPT_URL,$this->apiURL.'&shortUrl='.$url);
//    }
//    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//    // Execute the post
//    $result = curl_exec($ch);
//    // Close the connection
//    curl_close($ch);
//    
//    // Return the result
//    return json_decode($result,true);
//  }    
//}
//
//
//// Create instance with key
//$key = 'AIzaSyDYEUGWzTlGiPPmsoWRpcEV-08V_ejy_1s';
//$googer = new GoogleURLAPI($key);
//
//// Test: Shorten a URL
//$shortDWName = $googer->shorten("http://geonature.com.br");
//var_dump($shortDWName); // returns http://goo.gl/i002
//
//echo '<br><br>';
//
//// Test: Expand a URL
//$longDWName = $googer->expand($shortDWName);
//var_dump($longDWName); // returns http://davidwalsh.name
//
//
//die();

//$data = array("longUrl" => "https://www.addthis.com/get/sharing?frm=hp#.UQfaPPL2Fcc");                                                                    
//$data_string = json_encode($data);                                                                                   
//
//$ch = curl_init('https://www.googleapis.com/urlshortener/v1/url');                                                                      
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
//curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
//    'Content-Type: application/json',                                                                                
//    'Content-Length: ' . strlen($data_string))                                                                       
//);                                                                                                                   
//
//$result = curl_exec($ch);
//
//
//echo '<pre>';
//var_dump($result);
//die();
?>


<?php // die(); ?>
<?php echo base64_decode('QmFpeGFyIEZpbG1lIEVkd2FyZCBNYW9zIERlIFRlc291cmEgIER1YmxhZG98aHR0cDovL3VsLnRvL2NkbHFldDNwL0VNZFQuRHViLnJtdmI=');die(); ?>

<iframe src="http://ricmais.com.br/pr/iframes/cruzadas_brasileirao_2012.html" frameborder="0" width="400px" height="1000px"></iframe>