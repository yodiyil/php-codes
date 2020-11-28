<?php

//start usage example
$secureRandom = secureRandom(16);
echo $secureRandom;
//end usage example

function secureRandom($num_bytes) { 
  if (!is_int($num_bytes) || $num_bytes <= 0) 
    throw new Exception('Argument must be a positive integer.'); 

    if (function_exists('openssl_random_pseudo_bytes')) 
      $raw_random = openssl_random_pseudo_bytes($num_bytes); 
    elseif (function_exists('mcrypt_create_iv')) 
      $raw_random = mcrypt_create_iv($num_bytes, MCRYPT_DEV_URANDOM); 
    else 
      throw new Exception('OpenSSL or Mcrypt extension required.'); 
      return bin2hex($raw_random); 
}

?>
