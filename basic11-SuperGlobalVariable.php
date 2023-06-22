<?php

echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR']; //IP
echo "<br>";
echo $_SERVER['DOCUMENT_ROOT']; //directory
echo "<br>";
echo $_SERVER['REQUEST_URI'];
echo "<br>";
echo "<br>";

print_r($_SERVER);

echo "<br>";
echo "<br>";

var_dump($_ENV);






/* output
localhost

Apache/2.4.56 (Win64) OpenSSL/1.1.1t PHP/8.2.4

127.0.0.1

C:/xampp/htdocs

/php%20basic/basic11-SuperGlobalVariable.php

    Array ( [MIBDIRS] => C:/xampp/php/extras/mibs [MYSQL_HOME] => \xampp\mysql\bin [OPENSSL_CONF] => C:/xampp/apache/bin/openssl.cnf [PHP_PEAR_SYSCONF_DIR] => \xampp\php [PHPRC] => \xampp\php [TMP] => \xampp\tmp [HTTP_HOST] => localhost [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/114.0 [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8 [HTTP_ACCEPT_LANGUAGE] => en-US,en;q=0.5   //[HTTP_ACCEPT_ENCODING] => gzip, deflate, br [HTTP_REFERER] => http://localhost/php%20basic/ [HTTP_CONNECTION] => keep-alive [HTTP_UPGRADE_INSECURE_REQUESTS] => 1 [HTTP_SEC_FETCH_DEST] => document [HTTP_SEC_FETCH_MODE] => navigate [HTTP_SEC_FETCH_SITE] => same-origin [HTTP_SEC_FETCH_USER] => ?1 [PATH] => /////    C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Windows\System32\OpenSSH\;D:\geth;C:\Users\UseR\AppData\Local\Microsoft\WindowsApps;C:\Users\UseR\AppData\Local\atom\bin [SystemRoot] => C:\Windows [COMSPEC] => C:\Windows\system32\cmd.exe [PATHEXT] => .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC [WINDIR] => C:\Windows [SERVER_SIGNATURE] =>
// Apache/2.4.56 (Win64) OpenSSL/1.1.1t PHP/8.2.4 Server at localhost Port 80
  //[SERVER_SOFTWARE] => Apache/2.4.56 (Win64) OpenSSL/1.1.1t PHP/8.2.4 [SERVER_NAME] => localhost [SERVER_ADDR] => 127.0.0.1 [SERVER_PORT] => 80 [REMOTE_ADDR] => 127.0.0.1 [DOCUMENT_ROOT] => C:/xampp/htdocs [REQUEST_SCHEME] => http [CONTEXT_PREFIX] => [CONTEXT_DOCUMENT_ROOT] => C:/xampp/htdocs [SERVER_ADMIN] => postmaster@localhost [SCRIPT_FILENAME] => C:/xampp/htdocs/PhP Basic/basic11-SuperGlobalVariable.php [REMOTE_PORT] => 60066 [GATEWAY_INTERFACE] => CGI/1.1 [SERVER_PROTOCOL] => HTTP/1.1 [REQUEST_METHOD] => GET [QUERY_STRING] => [REQUEST_URI] => /php%20basic/basic11-SuperGlobalVariable.php [SCRIPT_NAME] => /php basic/basic11-SuperGlobalVariable.php [PHP_SELF] => /php basic/basic11-SuperGlobalVariable.php [REQUEST_TIME_FLOAT] => 1687394627.158 [REQUEST_TIME] => 1687394627 )


//array(0) { } 

 ?>
