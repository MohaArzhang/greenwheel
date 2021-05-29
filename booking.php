<?php

require_once 'vendor/autoload.php';
require_once 'init.php';

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/booking', function ($request, $response, $args) {
 
    return $this->view->render($response, 'booking.html.twig',['currstation' => $_GET['id']] );
});

$app->post('/booking', function (Request $request, Response $response, $args){

    if (!isset($_SESSION['bikeUser'])) { // refuse if user not logged in
        $response = $response->withStatus(403);
        return $this->view->render($response, 'access_denied.html.twig');
      
    }
    $stationid = $request->getParam('stationid');
    $timeout = $request->getParam('timeout');
    $timein = $request->getParam('timein');
    $biketype = $request->getParam('bikeType'); 
    $userid = $_SESSION['bikeUser']['userId'];

    $errorList = array();
    if( !$stationid){
        array_push($errorList, "A Station Must Be Selected");
        return $this->view->render($response, 'fillallfields.html.twig',['errorlist' => $errorList]);
        $errorList = array();
    }
    if( !$timeout && !$timein &&  !$biketype){
        array_push($errorList, "TimeOut and  TimeIn and BikeType Must Be Selected ");
        return $this->view->render($response, 'fillallfields.html.twig',['errorlist' => $errorList]);
        $errorList = array();
    }
    if (!$timeout || !$timein ){
        array_push($errorList, "BikeType Must Be Selected ");
        $errorList = array();
    }
    if($biketype && !$timeout || !$timein ){
        array_push($errorList, "TimeOut and  TimeIn  Must Be Selected");
        return $this->view->render($response, 'fillallfields.html.twig',['errorlist' => $errorList]); 
        $errorList = array(); 
    }
    if( !$biketype){
        array_push($errorList, "Bike Type Must Be Selected");
        return $this->view->render($response, 'fillallfields.html.twig',['errorlist' => $errorList]);
    }
 

    $bikeid  = DB::queryFirstField("SELECT bikeId FROM bikes as bs WHERE bs.stationId  ='$stationid' And 
    bs.bikeType = '$biketype' and bs.bikeId NOT IN ( SELECT bikeId FROM bookings as bo
    WHERE bo.timeOut >= '$timeout'  AND bo.timeIn <=  '$timein')"); 
 

 if ($bikeid == null){
    return $this->view->render($response, 'nobikeavailable.html.twig',['timeout' => $timeout, 'biketype' => $biketype,'stationid' => $stationid, 'timein' =>   $timein]);
 }else{
    $timeout=date("Y-m-d h:i:s",strtotime($timeout));
    $timein=date("Y-m-d h:i:s",strtotime($timein));
     DB::insert('bookings', ['userId' => $userid, 'bikeId' => $bikeid , 'timeIn' => $timein, 'timeOut' => $timeout , 'stationId' => $stationid]);
 };

 


 /* if ($biketype != null){ */

  
   /*  return $this->view->render($response, 'modal.html.twig',['timeout' => $timeout, 'biketype' => $biketype,'stationid' => $stationid, 'timein' =>   $timein]);  */ 
/*  } */

/*  if( isset( $_GET['payid']) ){
      DB::insert('bookings', ['userId' => $userid, 'bikeId' => $bikeid , 'timeIn' => $timein, 'timeOut' => $timeout , 'stationId' => $stationid]);
 } */


 

   return $response->write( $bikeid . "  " .$timeout . " _ " . $timein . " _ " . $biketype. " _ " . $stationid  ); 
   
});






$app->get('/test', function ($request, $response, $args) {
 
    return $response->withRedirect('/viewusers');
});