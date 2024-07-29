<?php
require_once './data.php';
require_once './classes/Status.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="icon" type="image/x-icon" href="favicon.png" />
 <link rel="stylesheet" href="styles.css" />
 <title>PorTable | Server Port Checker Table</title>
</head>

<body>
 <main id="app">
  <h1>PorTable v1.0 ->
   Server: <?php echo $hostname; ?>
   | OS: <?php echo $os; ?>
   | IP: <?php echo $publicIP; ?>
   <a href="./html.php">HTML View</a>
  </h1>
  <h2>↓ Servers ↓</h2>
  <div class="list">
   <?php
   $status = new Status();
   foreach ($servers as $server) {
    echo '<div class="list-item">
   <h2 class="list-item_title">' . $server['name'] . '</h2>
   <div class="info">
    <span>Server status: </span>'
     . $status->setPort($server['port']);
    if ($status->check()) {
     $server['status'] = 1;
    }
    switch ($server['status']) {
     case 0:
      echo '<span class="info-status info-status--closed">Offline</span>';
      break;
     case 1:
      echo '<span class="info-status info-status--open">Online</span>';
      break;
     case 2:
      echo '<span class="info-status info-status--pending">Pending</span>';
      break;
     case 3:
      echo '<span class="info-status info-status--incompatible">Incompatible</span>';
      break;
     case 4:
      echo '<span class="info-status info-status--unavailable">Not Available</span>';
      break;
    }
    echo '</div>
   <div class="info">
    <span>Port: </span><span class="info-port">' . $server['port'] . '</span>
   </div>
   <div class="info">
    <span>Description: </span>
    <div class="info-desc">'
     . $server['desc'] .
     '</div>
   </div>
  </div>';
   }
   ?>
  </div>
  <h4>Developed by Witchie & Mohammad Amin Mirzaee</h4>
 </main>
</body>

</html>
