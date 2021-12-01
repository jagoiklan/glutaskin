<script>
<button onclick="var jsVar = "<?php 
$nomor_tiara = array("6285624440729");
$nomor_seva = array("6285723464839"); 
$nohp = $nomor_seva[array_rand($nomor_seva)]; 
$text = "Hi kak saya mau konsultasi atau beli *GOAMI GLUTASKIN* nya, Ready ?";
header("Location: https://api.whatsapp.com/send?phone=$nohp&text=$text"); ?>"">
</script>
