<h1>Test controller neljas metodi</h1>
<p>Data modelista:</p>
<?php print_r($oppilaat); ?>
<p>
  Ja siis foreachilla tulos:
</p>
<?php
  foreach ($oppilaat as $rivi) {
    echo $rivi['en'].' '.$rivi['sn'].'<br>';
  }

 ?>
