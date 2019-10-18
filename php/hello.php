<?php

    $senha = "123";
    echo "A senha $senha em md5 fica: ".md5($senha)."<br>";
    echo "A senha $senha em sha1 fica: ".sha1($senha)."<br>";
    echo "A senha $senha em base64 fica: ".base64_encode($senha)."<br>";
    echo "A senha $senha em hash fica: ".hash('haval256,5', $senha)."<br>";
    echo "A senha $senha em crypt fica: ".crypt('$2$55vdv51ds', $senha)."<br>";

    /*

        * http://md5.my-addr.com/md5_decrypt-md5_cracker_online/md5_decoder_tool.php
        * http://www.php.net/manual/pt_BR/function.md5.php
        * http://www.php.net/manual/en/function.base64-decode.php
        * http://www.php.net/manual/en/function.hash.php
        * http://www.php.net/manual/pt_BR/function.crypt.php
        * http://www.php.net/manual/pt_BR/function.sha1.php
     
    */

?>