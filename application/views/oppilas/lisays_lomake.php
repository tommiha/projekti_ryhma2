<h1>Lisää opiskelija</h1>
<form class="" action="<?php echo site_url('oppilas/lisaa_opiskelija');?>" method="post">
  <table>
    <tr><td>Etunimi</td><td><input type="text" name="en" required></td></tr>
    <tr><td>Sukunimi</td><td><input type="text" name="sn" required></td></tr>
    <tr><td>Syntymävuosi</td><td><input type="number" name="sv"></td></tr>
    <tr><td></td><td><input type="submit" value="Lisää"></td></tr>
</form>
