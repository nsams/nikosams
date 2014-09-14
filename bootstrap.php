<?php
chdir(dirname(__FILE__));
require_once 'vendor/koala-framework/koala-framework/Kwf/Setup.php';
Kwf_Setup::setUp();
Kwf_Setup::dispatchKwc();
Kwf_Setup::dispatchMedia();

$front = Kwf_Controller_Front_Component::getInstance();

// acl ist in Acl und in config ist die aclClass gesetzt

$response = $front->dispatch();
$response->sendResponse();
