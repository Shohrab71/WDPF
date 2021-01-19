<?php
 $result = dns_get_record("prothom-alo.com");
 echo "<pre>";
 print_r($result);
?>

------------------------------------------

<?php
 getmxrr("example.com", $mxhosts);
 print_r($mxhosts);
?>

------------------------------------------