<?php 
 define (LOG4PHP_DIR, "log4php"); 
 require_once(LOG4PHP_DIR . '/LoggerManager.php'); 
 $str = "here is test string!"; 
 echo "这里是PHP的输出, 与log4php无关哟!<br>"; 
 $logger = LoggerManager::getLogger('test'); 
    if ("" != $str) { 
   $logger->debug("str的值不为空! 它的值为: " . $str . "<br>"); 
  } 
    if (strlen($str) > 4) { 
    $logger->debug("str的长度大于4!" . "<br>"); 
  } 
 LoggerManager::shutdown(); 
?>
