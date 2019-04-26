<?php
require 'src/Clockwork.php';
require 'src/ClockworkException.php';
$api = '7802e18a30fb796ad921be77a33b2a73d5ce9e3f';
$options = array( 'ssl' => false );
$clockwork = new mediaburst\ClockworkSMS\Clockwork($api , $options);
 
$message = array('to' => '21656327174', 'message' => 'salut les gens nous sommes en solde');
$envoye = $clockwork->send($message);

header('location:dropzone.php'); 
?>