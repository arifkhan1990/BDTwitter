<?php

namespace App\Http\Controllers;
require "../vendor/autoload.php";

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', "VRNFCInaTX0v3QWWqP18SU5h6");
define('CONSUMER_SECRET', 'zMvyajiux4r1QRv3Hm4LWvwkn7DNWrDWVZU0W4tVfg2xydexbX');
define('ACCESS_TOKEN', '1086864913815891968-b9Ls4uhLVJlhRIiSv1IM2NG6cb9IkY');
define('ACCESS_TOKEN_SECRET', 'N7FbmzbWjebLDUog2qI8RM6znl1Pimt817iahG1jLzLFb');
class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
     // connect to twitter api
      $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
      // getting basic user info
      $user = $connection->get("account/verify_credentials");
      $connection->setTimeouts(30, 40);
      // pick number of data
      $count = $_GET['tweetNo'];
	  $screen_name = $_GET['userName'];
      $makeSchoolResult =json_decode(json_encode($connection->get('statuses/user_timeline',['count'=>$count, 'screen_name'=>$screen_name, 'exclude_replies'=>true])),true);
     
      //collect($result)->orderBy('created_at','asc');
      return view('index', ['makeSchoolResult' => $makeSchoolResult,'screen_name'=>$screen_name]);
    }

    public function tweetShowLimit(){
      // connect to twitter api
      $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
      // getting basic user info
      $user = $connection->get("account/verify_credentials");
      $connection->setTimeouts(30, 40);
      // pick number of data
      $count = $_GET['tweetNo'];
	  $screen_name = $_GET['userName'];
      $makeSchoolResult =json_decode(json_encode($connection->get('statuses/user_timeline',['count'=>$count, 'screen_name'=>$screen_name, 'exclude_replies'=>true])),true);
     
      //collect($result)->orderBy('created_at','asc');
      return view('index', ['makeSchoolResult' => $makeSchoolResult,'screen_name'=>$screen_name]);
    }
}
