<?php
declare(strict_types=1);

namespace HelpChain;

require 'vendor/autoload.php';

$helpChain = new HelpChain();

$lostHelper = new LostHelper();
$confusedHelper = new ConfusedHelper();
$tiredHelper = new TiredHelper();

$helpChain->addHelper($lostHelper);
$helpChain->addHelper($confusedHelper);
$helpChain->addHelper($tiredHelper);

//$problem = 'I am lost';
//$problem = 'I am confused';
//$problem = 'I am tired';
$problem = 'I need lovin';

$helpRequest = new HelpRequest($problem);

try {
    $help = $helpChain->getHelp($helpRequest);
    echo $help->asString();
}
catch(NoExistingHelpersException $exception) {
    echo $exception->getMessage();
}

