<?php
$os = PHP_OS;
$hostname = gethostname();
$localIP = '127.0.0.1';
$publicIP = '0.0.0.0';
$servers = [
 'tp' => [
  'name' => 'TeamSpeak',
  'port' => '10080',
  'desc' => '',
  'status' => 0
 ],
 'tps' => [
  'name' => 'TeamSpeak Secure',
  'port' => '10443',
  'desc' => '',
  'status' => 0
 ],
 'mc' => [
  'name' => 'Minecraft',
  'port' => '25565',
  'desc' => '',
  'status' => 0
 ],
 'bf2' => [
  'name' => 'Battlefield 2',
  'port' => '16567',
  'desc' => '',
  'status' => 0
 ],
 'tr' => [
  'name' => 'Terraria',
  'port' => '6666',
  'desc' => '',
  'status' => 0
 ],
 'cs' => [
  'name' => 'Counter Strike',
  'port' => '27015',
  'desc' => '',
  'status' => 0
 ],
 'cod4' => [
  'name' => 'Call of Duty 1 Modern Warfare',
  'port' => '28960',
  'desc' => '',
  'status' => 3
 ],
 'cod3' => [
  'name' => 'Call of Duty 3 Modern Warfare',
  'port' => '27014',
  'desc' => '',
  'status' => 3
 ],
 'lc' => [
  'name' => 'Lethal Company',
  'port' => '7777',
  'desc' => '',
  'status' => 0
 ],
 'vnc' => [
  'name' => 'Virtual Network Computing',
  'port' => '33301',
  'desc' => '',
  'status' => 4
 ],
 'rdp' => [
  'name' => 'Remote Desktop Protocol',
  'port' => '22201',
  'desc' => '',
  'status' => 4
 ],
 'ftp' => [
  'name' => 'File Transfer Protocol',
  'port' => '21',
  'desc' => '',
  'status' => 0
 ],
 'ssh' => [
  'name' => 'Secure Shell Tunnel',
  'port' => '22',
  'desc' => '',
  'status' => 0
 ],
 'tel' => [
  'name' => 'Telnet',
  'port' => '23',
  'desc' => '',
  'status' => 4
 ],
 'stmp' => [
  'name' => 'Simple Mail Transfer Protocol',
  'port' => '25',
  'desc' => '',
  'status' => 4
 ],
 'stmps' => [
  'name' => 'Simple Mail Transfer Protocol Secure',
  'port' => '587',
  'desc' => '',
  'status' => 4
 ],
 'dns' => [
  'name' => 'Domain Name System',
  'port' => '53',
  'desc' => '',
  'status' => 4
 ],
 'pop3' => [
  'name' => 'Post Office Protocol',
  'port' => '110',
  'desc' => '',
  'status' => 4
 ],
 'http' => [
  'name' => 'HyperText Transfer Protocol',
  'port' => '80',
  'desc' => '',
  'status' => 0
 ],
 'https' => [
  'name' => 'HyperText Transfer Protocol Secure',
  'port' => '443',
  'desc' => '',
  'status' => 0
 ],
 'nc' => [
  'name' => 'NCAT (Server Request Service)',
  'port' => '50080',
  'desc' => '',
  'status' => 0
 ],
 'mysql' => [
  'name' => 'MySQL',
  'port' => '3306',
  'desc' => '',
  'status' => 0
 ],
];
