<style>
*{
    font-size: 3em;
}
</style>
<?php
$conn = new mysqli("localhost", "root", "", "ufr_sds");

if ($conn ->connect_error) {
    echo "Connexion echouer";
    
}

else {
    echo "connexion reuisie";
 }

?>