<?php

require_once '../config/config.php';

$fileLoad = $_POST['fileLoad'];
unset($_POST['fileLoad']);
require_once '../func/'.$fileLoad.'.php';

