<?php

require_once('vendor/autoload.php');
use Ilovepdf\Ilovepdf;

$ilovepdf = new Ilovepdf('project_public_6bc039877892e1be24c305c82d0aedbe_atYmm74ded03910e8e1eae98c1fc511a926b7','secret_key_14f1049c141b66ac3344e528881ec1da_YFa_zcdf9a4c44e9935c7fda516a0f73f1198');
$myTask = $ilovepdf->newTask('compress');
$file1 = $myTask->addFile('file1.pdf');
$file2 = $myTask->addFile('file2.pdf');
$myTask->execute();
$myTask->download();

?>
