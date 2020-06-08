

<?php

require('config.php');
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;


    if (isset($_POST['status'])) {
      $connection = new TwitterOAuth(CLIENT_ID, SECRET_KEY, $_SESSION["access_token_data"] , $_SESSION["access_token_secret_data"]);
      $content = $connection->get('account/verify_credentials');
      $connection->post('statuses/update', array('status' => $_POST['status']));
      echo "post successfull" . CLIENT_ID . "*"  . SECRET_KEY . "*" . $_SESSION["access_token_data"] . "*" . $_SESSION["access_token_secret_data"] ;
    }

  
?>