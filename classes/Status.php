<?php
class Status
{
 public string $localIP = "127.0.0.1";
 public string $port;
 public string $text;
 public function setPort($port)
 {
  $this->port = $port;
 }
 public function setText($text)
 {
  $this->text = $text;
 }
 public function port()
 {
  return $this->port;
 }
 public function text()
 {
  return $this->text;
 }
 public function check()
 {
  $connection = @fsockopen($this->localIP, $this->port());
  if (is_resource($connection)) {
   fclose($connection);
   return true;
  } else {
   return false;
  }
 }
 public function call()
 {
  $fp = @fsockopen($this->localIP, 50080, $errno, $errstr);
  if (!$fp) {
   echo "$errstr ($errno)<br />\n";
  } else {
   fwrite($fp, "Request to Start " . $this->text() . " Server.");
   while (fgets($fp, 128)) {
    echo fgets($fp, 128);
   }
   fclose($fp);
  }
 }
}
