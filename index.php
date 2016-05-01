<?php
  header('Content-Type: '                      .   'text/json; charset=UTF-8');

   var_dump(
     hash_algos()
   );
   die(0);

  /* SESSION / COOKIE */
  if (''===session_id()){
    @ini_set("session.cookie_httponly",1);
    session_name("request_proxy_session");
    session_start();
    $_SESSION['unique_id'] = false === isset($_SESSION['unique_id']) ? uniqid() : $_SESSION['unique_id'];
  }

  mb_language("uni");
  @mb_internal_encoding('UTF-8');
  setlocale(LC_ALL,'en_US.UTF-8');
  
  /* - - - */
  
  require_once('request.php');

  /* headers - various */
  header('Access-Control-Allow-Origin: '       .   '*');
  header('Access-Control-Allow-Headers: '      .   'Accept, Accept-Charset, Accept-Encoding, Accept-Language, Access-Control-Allow-Credentials, Access-Control-Allow-Headers, Access-Control-Allow-Methods, Access-Control-Allow-Origin, Access-Control-Expose-Headers, Access-Control-Max-Age, Access-Control-Request-Headers, Access-Control-Request-Method, Cache-Control, Connection, Content-Description, Content-Encoding, Content-Language, Content-Length, Content-Transfer-Encoding, Content-Type, Cookie, Date, DNT, Expires, Host, If-Modified-Since, Keep-Alive, Last-Modified, Origin, Pragma, Referer, Remote-Address, Server, Set-Cookie, Timing-Allow-Origin, Transfer-Encoding, User-Agent, Vary, X-Content-Type-Options, X-CustomHeader, X-Forwarded-For, X-Forwarded-Host, X-Forwarded-Port, X-Forwarded-Proto, X-Forwarded-Server, X-HTTP-Method-Override, X-Modified, X-OTHER, X-PING, X-PINGOTHER, X-Powered-By, X-Real-IP, X-Requested-With');
  header('Access-Control-Expose-Headers: '     .   'Accept, Accept-Charset, Accept-Encoding, Accept-Language, Access-Control-Allow-Credentials, Access-Control-Allow-Headers, Access-Control-Allow-Methods, Access-Control-Allow-Origin, Access-Control-Expose-Headers, Access-Control-Max-Age, Access-Control-Request-Headers, Access-Control-Request-Method, Cache-Control, Connection, Content-Description, Content-Encoding, Content-Language, Content-Length, Content-Transfer-Encoding, Content-Type, Cookie, Date, DNT, Expires, Host, If-Modified-Since, Keep-Alive, Last-Modified, Origin, Pragma, Referer, Remote-Address, Server, Set-Cookie, Timing-Allow-Origin, Transfer-Encoding, User-Agent, Vary, X-Content-Type-Options, X-CustomHeader, X-Forwarded-For, X-Forwarded-Host, X-Forwarded-Port, X-Forwarded-Proto, X-Forwarded-Server, X-HTTP-Method-Override, X-Modified, X-OTHER, X-PING, X-PINGOTHER, X-Powered-By, X-Real-IP, X-Requested-With');
  header('Access-Control-Allow-Credentials: '  .   'true');
  header('Timing-Allow-Origin: '               .   '*');
  header('Vary: '                              .   'Accept-Encoding, Content-Description, Content-Transfer-Encoding, Content-Type, Remote-Address, X-Forwarded-For, X-Forwarded-Host, X-Forwarded-Port, X-Forwarded-Proto, X-Forwarded-Server, X-HTTP-Method-Override, X-Real-IP');
  header('Accept-Ranges: '                     .   'bytes');
  header('X-Content-Type-Options: '            .   'nosniff');
  header('DNT: '                               .   '1');
  header('X-Xss-Protection: '                  .   '1; mode=block');
  header('X-Content-Type-Options: '            .   'nosniff');
  header('X-UA-Compatible: '                   .   'IE=Edge,chrome=1');
  header('X-Robots-Tag: '                      .   'index, follow, snippet, archive, odp, translate, imageindex');
  header('X-Powered-By: '                      .   'eladkarako.com servers are Powered By Love ..and catnip!');

  /* - - - */

  $xhr = request($url);
  $xhr = json_encode($xhr,
                     0
                     | JSON_HEX_APOS /*           All ' are converted to \u0027.                                                  (Available since PHP 5.3.0). */
                     | JSON_HEX_QUOT /*           All " are converted to \u0022.                                                  (Available since PHP 5.3.0)*/
                     | JSON_HEX_AMP /*            All &#38;#38;s are converted to \u0026.                                         (Available since PHP 5.3.0). */
                     | JSON_HEX_TAG /*            All &lt; and &gt; are converted to \u003C and \u003E.                           (Available since PHP 5.3.0). */
                     | JSON_NUMERIC_CHECK /*      Encodes numeric strings as numbers.                                             (Available since PHP 5.3.3). */
                     | JSON_UNESCAPED_UNICODE /*  Encode multibyte Unicode characters literally (default is to escape as \uXXXX)  (Available since PHP 5.4.0). */
                     | JSON_PRETTY_PRINT /*       Use whitespace in returned data to format it                                    (Available since PHP 5.4.0). */
  );

  //echo $xhr;
  
  echo "\n\n\n";
  var_dump($GLOBALS);
  var_dump($_SERVER);
  var_dump($_REQUEST);
  var_dump($_POST);
  var_dump($_GET);
  var_dump($_FILES);
  var_dump($_ENV);
  var_dump($_COOKIE);
  var_dump($_SESSION);


  /* implicit flush... */
?>