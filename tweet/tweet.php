<?php
//GitHubからダウンロード
require_once('./twitteroauth/twitteroauth.php'); 

//twitterアクセス情報
$twObj = new TwitterOAuth(
    '4WB9b8EcnzLJCmu4MzzLg', #$consumerKey,
    'o3YHWnwUXs1wG8DAUcQg1padrq0kt2NBjWsreDPDJE', #$consumerSecret,
    '929605698-PCXTQNkPFDJ3IDalmiBUkRTKuthCGIiBCvAtFvvc', #$accessToken,
    'TJhZjO8pjDpp82RntCAoC3I0MzQoOM1u5PQcBbBk5s' #$accessTokenSecret
);

$tweet = $_GET['tweet'];
//$params = split("/",$_SERVER['PATH_INFO']);
//$tweet = end($params);
//var_dump($params);
//echo "<br />";

// echo $_SERVER["HTTP_REFERER"];

echo $tweet;

/***ついーと****/
$options=array('status'=> $tweet);
$twObj->OAuthRequest(
    'https://api.twitter.com/1.1/statuses/update.json',
    'POST',
    $options
);
?>