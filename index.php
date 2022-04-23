<?php
include("inc/header.html");
?>
<h3>Systemeigenschaften:</h3>
<b>Hostname: </b><?php
echo gethostname();
?> <br>
<?php
$ip_server = $_SERVER['SERVER_ADDR'];
echo "<b>IP Addresse: </b> $ip_server";
?><br>
<b>Mac Adressen: </b><?php
    $mac = shell_exec("ip link | awk '{print $2}'");
    preg_match_all('/([a-z0-9]+):\s+((?:[0-9a-f]{2}:){5}[0-9a-f]{2})/i', $mac, $matches);
    $output = array_combine($matches[1], $matches[2]);
    $mac_address_values =  json_encode($output, JSON_PRETTY_PRINT);   
    echo $mac_address_values
?><br>
<b>Server läuft seit: </b><?php system("uptime"); ?><br>
<b>Betriebsystem : </b><?php system("uname -a"); ?><br>
<h3>Hardware: </h3>
<b>Prozessor: </b> <?php system("cat /proc/cpuinfo | grep \"model name\\|processor\""); ?><br>
<b>Arbeistspeicher: </b> <?php system("free -m"); ?><br>
<b>Festplattenspeicher: </b> <?php system("df -h"); ?><br>
<h3>FTP-Zugang:</h3>
<b>Adresse: </b> <?php
$ip_server = $_SERVER['SERVER_ADDR'];
echo "$ip_server";
?><br>
<b>Benutzer: </b> root<br>
<b>Passwort: </b> admin
<h3>IPMI Info: </h3>
<b>Webserver: </b><?php
$version = apache_get_version();
echo "$version\n";
?><br>
<b>PHP Server: </b><?php echo 'Version: ' . phpversion(); ?><br>



