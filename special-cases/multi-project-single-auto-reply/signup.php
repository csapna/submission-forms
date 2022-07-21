<?php

require('src/LassoLead.php');
require('src/RegistrantSubmitter.php');

/* These variables should only be attached on the server side
 * and should not be hidden fields on the registration form
 * Note that $apiKey is where the Lasso UID is placed.
 */
$clientId  = '693';
$apiKey = 'xMWgb7c5bz';

if (empty($clientId) || empty($_REQUEST['ProjectID']) || empty($apiKey)){
	throw new Exception('Required parameters are not set, please
						check that your $clientId, $projectId and $apiKey are
						configured correctly');
}

/* Constructing and submitting a lead:
 * Map form fields to the lead object and submit
 */
$lead = new LassoLead(
	$_REQUEST['FirstName'],
    $_REQUEST['LastName'],
    $_REQUEST['ProjectID'][0],
    $clientId
);

/* Projects
 * 
 * For a single form to submit to multiple selected projects
 */
foreach($_REQUEST['ProjectID'] as $index => $projectId){
	if ($index == 0){
		continue;
	}
	$lead->addProject($projectId);
}

$lead->addPhone($_REQUEST['Phone']);

$lead->addEmail($_REQUEST['Email']);

$lead->sendAssignmentNotification();

$submitter = new RegistrantSubmitter();
$curl      = $submitter->submit('https://api.lassocrm.com/registrants', $lead, $apiKey);