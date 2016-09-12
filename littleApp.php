<?php
require_once('TwitterAPIExchange.php');
/** Tokens and keys are to be reset before deployment **/
$settings = array(
'oauth_access_token' => "772958203470417920-zF1B9apK8CRXCpnhQnHln5TX14KPb00",
'oauth_access_token_secret' => "mC8N5aZMvFMjXy5WgkrNgOFfTAFmJU3bXuazeb1ojkt3c",
'consumer_key' => "piGDo8tKN6pXPcY9xcMhfICXI",
'consumer_secret' => "XdevmY6KtxIdbgHaySvFWvIFxg2GRUBgZ8vM7rNQJwtX7LNaYO"
);
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
if (isset($_GET['user'])) {$user = $_GET['user'];} else {$user = "mint";}
if (isset($_GET['count'])) {$count = $_GET['count'];} else {$count = 1;}
$getfield = "?screen_name=$user&count=$count";
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);
/**if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}**/
foreach($string as $items)
    {
       
       $num = "". $items['user']['followers_count'];
       
    }
?>
