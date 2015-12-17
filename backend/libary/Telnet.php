<?php
namespace backend\libary;

class Telnet{ 

   protected $sock; 

   function __construct() { 

    $sock = fsockopen('192.168.0.1',23,$errorno,$errormsg,10); 

    if ($sock) {
      $this->sock = $sock;
    }else{
      exit($errormsg($errorno));
    }

    socket_set_timeout($this->sock,2,0); 

   } 

   public function signin()
   {
      $username = 'huawei';
      $password = 'huawei';
      $this->write($username);
      $string = $this->cwrite($password);
      
      $returnArray = substr($string, -106);
     // ereg('/info:(.*)\.',$string,$returnArray);
      return $returnArray;
   }


   public function getSystemInfo()
   {
     $this->read_till(">");
     return $this->cwrite("dis cu"); 
   }


   public function getIpAndMac()
   {
      $string = $this->getSystemInfo();
      $pattern = '/ip-address (.*) mac-address ([0-9A-Z-]*)/i';
        $ips = array();
        preg_match_all($pattern, $string, $ips);
        $ipSortArray = array();
        $ipWithMac = array();
        foreach ($ips[1] as $key => $value) {
            list($a,$b,$c,$d) = explode('.',$value);
            $order = $c*1000+$d;
            $ipSortArray[$order] = array('ip'=>$value,'mac'=>$ips[2][$key]);
        }

        ksort($ipSortArray);
        foreach ($ipSortArray as $key => $value) {
            $ipWithMac[$value['ip']] = $value['mac'];
        }

        return $ipWithMac;

   }

   public function bind($ip,$mac)
   {
     $this->read_till(">");
     $this->cwrite("sy");
     $bindString = "user-bind static ip-address ".$ip.' mac-address '.$mac;
     $bindMsg = $this->cwrite($bindString);
     $this->cwrite("quit");
     $this->cwrite("save");
     $this->cwrite("Y");
     return $bindMsg;
   }

   public function unbind($ip)
   {
     $this->read_till(">");
     $this->cwrite("sy");
     $bindString = "undo user-bind static ip-address ".$ip;
     $bindMsg = $this->cwrite($bindString);
     $this->cwrite("quit");
     $this->cwrite("save");
     $this->cwrite("Y");
     return $bindMsg;

   }

   public function rebind($ip,$mac)
   {
     $this->read_till(">");
     $this->cwrite("sy");
     $bindString = "user-bind static ip-address ".$ip.' mac-address '.$mac;
     $unbindString = "undo user-bind static ip-address ".$ip;
     $unbindMsg = $this->cwrite($unbindString);
     $bindMsg = $this->cwrite($bindString);
     $this->cwrite("quit");
     $this->cwrite("save");
     $this->cwrite("Y");
     return $bindMsg;
   }


  public function close() { 

    if ($this->sock)  fclose($this->sock); 
  //what are this thing
    $this->sock = NULL; 

   } 
  
  //command write
  public function cwrite($buffer)
  {
    $buffer = str_replace(chr(255),chr(255).chr(255),$buffer); 
    $buffer = $buffer."\r\n";
    fwrite($this->sock,$buffer); 
    return $this->read_till(">");
  }

  public function write($buffer) { 

    $buffer = str_replace(chr(255),chr(255).chr(255),$buffer); 
    $buffer = $buffer."\r\n";
    fwrite($this->sock,$buffer); 
   } 


   public function getc() { 

    return fgetc($this->sock);  

   } 


   public function read_till($what) { 

    $buf = ''; 

    while (1) { 

     $IAC = chr(255); 

     $DONT = chr(254); 

     $DO = chr(253); 

     $WONT = chr(252); 

     $WILL = chr(251); 

     $theNULL = chr(0); 

     $RTN = chr(13);

     $c = $this->getc(); 

     if ($c === false) return $buf; 

     if ($c == $theNULL) { 

      continue; 

     } 

     if ($c == "1") { 

      //continue; 

     } 

     if($c == $RTN)
     {
      // $buf .= '<br/>';
     }


     if ($c != $IAC) { 

      $buf .= $c; 


      if ('user-bind' == (substr($buf,strlen($buf)-strlen('user-bind')))) { 

        $this->write("\r");

      } 

      if ($what == (substr($buf,strlen($buf)-strlen($what)))) { 

       return $buf; 

      } 
      else { 

       continue; 

      } 

     } 

     $c = $this->getc(); 

     if ($c == $IAC) { 

     $buf .= $c; 

     } 

     else if (($c == $DO) || ($c == $DONT)) { 

      $opt = $this->getc(); 

      // echo "we wont ".ord($opt)."\n"; 

      fwrite($this->sock,$IAC.$WONT.$opt); 

     } 

     elseif (($c == $WILL) || ($c == $WONT)) { 

      $opt = $this->getc(); 

      // echo "we dont ".ord($opt)."\n"; 

      fwrite($this->sock,$IAC.$DONT.$opt); 

     } 

     else { 

      // echo "where are we? c=".ord($c)."\n"; 

     } 

    } 

   } 

} 

?>