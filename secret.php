<?php
const SECRET="BIGSECRET";
const URL = 'url=https:\\\\g1.cars.bg\\\2.jpg&w=2048&op=resize&upscale=0';
$ctx = hash_init('sha1',0,SECRET);
hash_update($ctx, urlencode(URL));
echo hash_final($ctx);
?>
