<?php
$os = PHP_OS;
$hostname = gethostname();
$localIP = '127.0.0.1';
$publicIP = '0.0.0.0';
$servers = [
 'tp' => [
  'name' => 'TeamSpeak',
  'port' => '10080',
  'desc' => 'Voice of Friends',
  'status' => 0
 ],
 'tps' => [
  'name' => 'TeamSpeak Secure',
  'port' => '10443',
  'desc' => 'Voice of Friends',
  'status' => 0
 ],
 'mc' => [
  'name' => 'Minecraft',
  'port' => '25565',
  'desc' => 'Blockheads',
  'status' => 0
 ],
 'bf2' => [
  'name' => 'Battlefield 2',
  'port' => '16567',
  'desc' => 'BF2 Damocles Mod',
  'status' => 0
 ],
 'tr' => [
  'name' => 'Terraria',
  'port' => '6666',
  'desc' => 'Moon Lord!',
  'status' => 0
 ],
 'cs' => [
  'name' => 'Counter Strike',
  'port' => '27015',
  'desc' => 'Normal or Zombie',
  'status' => 0
 ],
 'cod4' => [
  'name' => 'Call of Duty 1 Modern Warfare',
  'port' => '28960',
  'desc' => 'Call of Duty 4',
  'status' => 3
 ],
 'cod3' => [
  'name' => 'Call of Duty 3 Modern Warfare',
  'port' => '27014',
  'desc' => 'Survive...The Waves...',
  'status' => 3
 ],
 'lc' => [
  'name' => 'Lethal Company',
  'port' => '7777',
  'desc' => 'Lethal Moons',
  'status' => 3
 ],
 'vnc' => [
  'name' => 'Virtual Network Computing',
  'port' => '33301',
  'desc' => 'Simple Cross-Platform Remote Computing',
  'status' => 4
 ],
 'rdp' => [
  'name' => 'Remote Desktop Protocol',
  'port' => '22201',
  'desc' => 'Windows Remote Control',
  'status' => 4
 ],
 'ftp' => [
  'name' => 'File Transfer Protocol',
  'port' => '21',
  'desc' => 'Simple But Unsafe Protocol',
  'status' => 0
 ],
 'ssh' => [
  'name' => 'Secure Shell Tunnel',
  'port' => '22',
  'desc' => 'Safe Protocol For Transfering Data',
  'status' => 0
 ],
 'tel' => [
  'name' => 'Telnet',
  'port' => '23',
  'desc' => 'It is just telnet that is it.',
  'status' => 4
 ],
 'stmp' => [
  'name' => 'Simple Mail Transfer Protocol',
  'port' => '25',
  'desc' => 'You got a mail!',
  'status' => 4
 ],
 'stmps' => [
  'name' => 'Simple Mail Transfer Protocol Secure',
  'port' => '587',
  'desc' => 'Uh You got a safe mail!',
  'status' => 4
 ],
 'dns' => [
  'name' => 'Domain Name System',
  'port' => '53',
  'desc' => 'what is your name brother?',
  'status' => 4
 ],
 'pop3' => [
  'name' => 'Post Office Protocol',
  'port' => '110',
  'desc' => 'It is like a real post office ya know',
  'status' => 4
 ],
 'http' => [
  'name' => 'HyperText Transfer Protocol',
  'port' => '80',
  'desc' => 'If it was not online you were not here',
  'status' => 0
 ],
 'http-alt' => [
  'name' => 'Alternative HyperText Transfer Protocol',
  'port' => '8080',
  'desc' => 'Alternative of HTTP',
  'status' => 0
 ],
 'http-laravel' => [
  'name' => 'Laravel',
  'port' => '8088',
  'desc' => 'Alternative of HTTP for Laravel',
  'status' => 0
 ],
 'http-fish' => [
  'name' => 'Fish',
  'port' => '8000',
  'desc' => 'Alternative of HTTP for Fish',
  'status' => 0
 ],
 'https' => [
  'name' => 'HyperText Transfer Protocol Secure',
  'port' => '443',
  'desc' => 'atleast ISP does not know what are you doing inside, i guess...',
  'status' => 0
 ],
 'nc' => [
  'name' => 'NCAT (Server Request Service)',
  'port' => '50080',
  'desc' => 'just for communicating',
  'status' => 0
 ],
 'mysql' => [
  'name' => 'MySQL',
  'port' => '3306',
  'desc' => 'Database Manager',
  'status' => 0
 ],
 'anydesk' => [
  'name' => 'Anydesk',
  'port' => '8888',
  'desc' => 'Reliable cross-platform remote control software',
  'status' => 0
 ],
 'adb' => [
  'name' => 'Android Debug Bridge',
  'port' => '5555',
  'desc' => 'ADB Server',
  'status' => 0
 ],
];
