<?php

require ('Clockwork.php');
$api='3dc525bd6c44662cb423497cf9852cce1ead1e52';

$clockwork = new mediaburst\ClockworkSMS\Clockwork($api);

$message = array('to' => '21620122446', 'message' => 'Message');
$envoye = $clockwork->send($message);

?>