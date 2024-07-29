<!DOCTYPE html>
<html>

<head>
 <title>PorTable</title>
</head>

<body>
 <font face="Arial">
  <?php
  require_once './data.php';
  require_once './classes/Status.php';
  //Not Recommended
  //shell_exec("screen -S mc -dm bash -c 'cd /var/www/html/server; java -Xmx4G -jar fabric-server-mc.1.16.5-loader.0.15.9-launcher.1.0.0.jar nogui'");
  echo "<h1><font color='red'>◉</font> Server: <font color='blue'>" . $os . "#" . $hostname . "</font> IP: <font color='blue'>" . $publicIP . ' ' . "</font><a href='./index.php'>Normal View</a></h1>";
  echo "<h2>↓  Servers  ↓</h2>";
  $status = new Status();
  foreach ($servers as $server) {
   echo "<div>";
   echo "<h3>☙ " . $server['name'] . " ❧</h3>";
   echo "<div>Port ⇒ <strong>" . $server['port'] . "</strong></div>";
   echo "<div>Status ⇒ ";
   $status->setPort($server['port']);
   if ($status->check()) {
    $server['status'] = 1;
   }
   switch ($server['status']) {
    case 0:
     echo "<font color='red'>Offline</font>";
     break;
    case 1:
     echo "<font color='green'>Online</font>";
     break;
    case 2:
     echo "<font color='orange'>Pending</font>";
     break;
    case 3:
     echo "<font color='purple'>Incompatible</font>";
     break;
    case 4:
     echo "<font color='gray'>Not Available</font>";
     break;
   }
   echo "</div>";
   echo "<div><strong>⤚ ⤬⤬⤬ ⤙</strong></div>";
   echo "</div>";
  }
  ?>
 </font>
 <h4>Developed by Witchie & Mohammad Amin Mirzaee</h4>
</body>

</html>
