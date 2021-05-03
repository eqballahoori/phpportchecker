<?php
// Simple Port Check By Eqbal Lahoori
$host = 'domain.tld';
$ports = array(21, 25, 80, 443); // Check ftp,smtp,http,https 
foreach ($ports as $port)
{
    $connection = @fsockopen($host, $port, $errno, $errstr, 2);
    if (is_resource($connection))
    {
        echo '<h2>' . $host . ':' . $port . ' ' . '(' . getservbyport($port, 'TCP') . ') is open.</h2>' . "\n";
        fclose($connection);
    }
    else
    {
        echo '<h2>' . $host . ':' . $port . ' is closed.</h2>' . "\n";
    }
}
