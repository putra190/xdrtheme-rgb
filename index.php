<?php
 exec("ls login.php|awk 'NR==1'|awk -F '.' '{print $1}'",$clo);
  if ($clo[0]) {
include 'header.php';
ceklogin();
  };
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/ico.png">
<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/style.css">
<meta charset="UTF-8"><title>Xderm Mini</title>
<script>
function shipping_calc() {
  var val = document.getElementById("idconf").value;
 if (val === "config1") {
   var data = document.getElementById("isi1").value;
   document.getElementById("isi").value= data;
 }
 if (val === "config2") {
   var data = document.getElementById("isi2").value;
   document.getElementById("isi").value= data;
 }
 if (val === "config3") {
   var data = document.getElementById("isi3").value;
   document.getElementById("isi").value= data;
 }
 if (val === "config4") {
   var data = document.getElementById("isi4").value;
   document.getElementById("isi").value= data;
 }
 if (val === "config5") {
   var data = document.getElementById("isi5").value;
   document.getElementById("isi").value= data;
 }
}
</script>
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                url: "screenlog.0",
		cache: false,
                success: function(result) {
		    $("#log").html(result);
                }
            });
        $(document).ready(function() {
                $.ajaxSetup({ cache: false });
                        });
                var textarea = document.getElementById("log");
                textarea.scrollTop = textarea.scrollHeight;
        }, 1000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                url: "loglain.txt",
                cache: false,
                success: function(result) {
                    $("#loglain").html(result);
                }
            });
        $(document).ready(function() {
                $.ajaxSetup({ cache: false });
                        });
                var textarea = document.getElementById("loglain");
                textarea.scrollTop = textarea.scrollHeight;
        }, 1000);
    });
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                url: "screenlog.0",
		cache: false,
                success: function(result) {
		    $("#log").html(result);
                }
            });
        $(document).ready(function() {
                $.ajaxSetup({ cache: false });
                        });
                var textarea = document.getElementById("log");
                textarea.scrollTop = textarea.scrollHeight;
        }, 1000);
    });
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<script type="text/javascript">

    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                url: "screenlog.0",
		cache: false,
                success: function(result) {
		    $("#log").html(result);
                }
            });
        $(document).ready(function() {
                $.ajaxSetup({ cache: false });
                        });
                var textarea = document.getElementById("log");
                textarea.scrollTop = textarea.scrollHeight;
        }, 1000);
    });	
	$(document).ready(function(){
		$('#div_refresh').load("addon.php");
			setInterval(function(){
				$('#div_refresh').load("addon.php");
		},1000);
	});
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

<body>
<div class="block moving-glow">
	<center>
<?php
$filename = 'login.php';
if (file_exists($filename)) {
    echo '<a href="login.php" onClick="logout()">';
} else {
    echo '<a href="index.php" onClick="logout()">';
}
?>
		<img src="img/image.png" width: 90%></a>
	</center>
    <form method="post">
		<center>
			<table align="center"><tr><td class="col-butt">
				
				<button type="submit" name="button1" class="glow-on-hover"  id="strp"
					value="<?php echo exec('cat log/st') ?>"/><?php echo exec('cat log/st') ?>
				</button>
				<button type="submit" name="button3" class="glow-on-hover" id="logg"
					value="Log"/>Log
				</button>
				<button type="submit" name="button2" class="glow-on-hover" id="config"
					value="Config"/>Config
				</button>
				<button type="submit" name="button5" class="glow-on-hover" id"about"
					value="About"/>About
				</button>

				</td></tr>
			</table>
		</center>
<table align="center" style="margin-top:-20px";margin-bottom:10px;">
	<tr class="col-butt">
		<h4 id="div_refresh"></h4>
		<td style="width:150px;padding-top:5px" class="glow-on-hover"><span style="color:red">IP: </span><span id="ip"></span>	
		</td>
		<td style="width:200px;padding-top:5px" class="glow-on-hover"><span style="color:red">ISP: </span><span id="isp" ></span></td
	</tr>
</table><br>

<table align="center"><tr><td class="box_script"><div class="inline-block"><pre>
<?php
  exec('cat /var/update.xderm',$z);
    if ($z[0]) {
 if ( $z[0] != '3.1' ){
echo '<pre><h3 style="color:lime">New versi GUI Detected, Please Update!!</h3></pre>';
};
    };
  if (isset($_POST['button1'])) {
  exec('cat log/st',$o);
if ( $o[0] == 'Start' ) {
 exec('killall -q xderm-mini');
 exec('echo > screenlog.0');
 exec('chmod +x xderm-mini');
 exec('screen -L -dmS gua ./xderm-mini start');
 exec('echo Stop > log/st');
 echo "<div id='log' class='scroll'></div></pre>";
echo '<script>
  document.getElementById("strp").value="Stop";
</script>';
 } else {
 exec('killall -q xderm-mini');
 exec('echo > screenlog.0');
 exec('chmod +x xderm-mini');
 exec('screen -L -dmS gu ./xderm-mini stop');
 exec('echo Start > log/st');
 echo "<div id='log' class='scroll'></div></pre>";
echo '<script>
  document.getElementById("strp").value="Start";
</script>';
}
  }
  if (isset($_POST['button4'])) {
  exec('killall -q xderm-mini');
  exec('chmod +x xderm-mini');
  exec('screen -L -dmS upd ./xderm-mini update');
  echo "<div id='loglain' class='scroll'></div></pre>";
}

?>
<?php
 if (isset($_POST['simpan'])) {
 $config=$_POST['configbox'];
 $conf=$_POST['profile'];
 $use_stunnel=$_POST['use_stunnel'];
 $use_gotun=$_POST['use_gotun'];
 $use_restfw=$_POST['use_restfw'];
 $use_waitmodem=$_POST['use_waitmodem'];
 $mode=$_POST['mode'];
 if ($use_stunnel <> 'yes' ){$use_stunnel='no';}
 if ($use_gotun <> 'yes' ){$use_gotun='no';}
 if ($use_restfw <> 'yes' ){$use_restfw='no';}
 if ($use_waitmodem <> 'yes' ){$use_waitmodem='no';}
 $config = str_replace( "\r", "", $config);
 exec('echo "'.$mode.'" > config/mode.default');
 exec('echo "'.$config.'" > config/'.$conf);
 exec('sed \'/host=\|port=\|pudp=\|user=\|pass=\|sni=\|mode=\|trojan\|\n/d\' config/\''.$conf.'\' > /var/vmess1.txt');
 exec('awk \'{ printf "%s", $0 }\' /var/vmess1.txt > /var/vmess2.txt');
 exec('echo "'.$config.'" > config.txt');
 exec('sed -i \'s/\r$//g\' config.txt');
 exec('sed -i \'s/\r$//g\' config/'.$conf);
 exec('sed -i \':a;N;$!ba;s/\n\n//g\' config/'.$conf);
 exec('sed -i \':a;N;$!ba;s/\n\n//g\' config.txt');
 exec('sed -i \'/^#/!s/mode=.*//\' config/'.$conf);
 exec('sed -i \'/^#/!s/mode=.*//\' config.txt');
 exec('echo "'.$use_stunnel.'" > config/stun');
 exec('echo "'.$use_gotun.'" > config/gotun');
 exec('echo "'.$use_restfw.'" > config/firewall');
 exec('echo "'.$use_waitmodem.'" > config/modem');
 exec('echo "'.$conf.'" > config/default');
 exec('echo "Config telah di update." > loglain.txt');
 exec('echo "\''.$conf.'\' Menjadi default Config. !" >> loglain.txt');
 $use_boot=$_POST['use_boot'];
echo "<div id='loglain' class='scroll'></div></pre>";
if ($use_boot <> 'yes' ){ exec('./xderm-mini disable');
} else { exec('./xderm-mini enable'); }
 exec("cat config/default",$default);
 }

if($_POST['button5']){
echo "<h3 class='nganu slide' style='margin:-30px 0 -10px 0'><center><b>Xderm Mini Informations</b></center></h3>";
echo "<center><p align='center'><textarea readonly name='aboutbox' id='aboutbox' rows='9' cols='50' style='
			padding: 10px 10px;
			font-align: center; ! important;' wrap='hard'>
Xderm Mini is simple injector tool based on shell script and python commands for OpenWrt by @ryanfauzi1 which help you to inject your OpenWrt connection using VPN injection (SSH/Trojan/Vmess).

=============================================
           xdrtool Command Lists           
=============================================
Change Username & Password  = 1 / a / A
Change Username Only        = 2 / u / U
Change Password Only        = 3 / p / P
Install Login Page          = 4 / lp / LP
Remove Login Page           = 5 / rlp/ RLP
Manual Update               = 6 / mu / MU
Fix index.php downloading   = 7 / fp / FP
Install Default Theme       = 8 / dt / DT
=============================================

=============================================
          Informasi Configuration          
=============================================
Jika <stunnel> dicentang, maka
tunneling ssh di-inject oleh stunnel client
Jika tidak, akan digantikan python-https

Jika <go-tun2socks> dicentang, maka
semua lalu lintas diatur oleh go-tun2socks
Jika tidak, akan digantikan badvpn-tun2socks

Khusus mode SSH tidak support UDP jika
Menggunakan go-tun2socks.

khusus pengguna selain FW 18,
silahkan centang <Restart Firewall>
Guna mencegah terjadinya notif error.
=============================================

=============================================
             Default config.txt             
=============================================
host=103.157.1xx.xx
port=443
pudp=7300
user=ryanxxxx
pass=123xxx
sni=www.xxx.xx
vmess://eyJhZGQiOixxxxxxx
trojan://user@server:port
=============================================
</textarea></p></center>";
echo '<p style="text-align:center; font-size:85%;">Read more info at <a href="https://github.com/ryanfauzi1/xderm-mini_GUI" target="_blank">Xderm Mini Github Repo</a></p></table>';
echo '<center style="margin-top:10px">
                                <button type="submit" name="button6" class="glow-on-hover" id="rmlogin" style="width:45%"
                                        value="Remove / Install Login Page">Remove / Install Login Page</button>

                                <button type="submit" name="button7" class="glow-on-hover"  id="reinstall" style="width:45%"
                                        value="Force Reinstall Xderm Mini">Force Reinstall Xderm Mini</button>
										
                                <button type="submit" name="button4" class="glow-on-hover"  id="update" style="width:55%"
                                        value="Current Version 3.1 • Check Update">Current Version 3.1 • Check Update</button>
</center>';

echo '<div class="nganu slide" style="display: flex; height: 110%; flex-shrink: 0; font-weight: bold; font-size: 90%; font-align: center; ! important; padding-top: 15px"><p style="text-align:center">
        Logo & Mods by <a href="https://me.helmiau.my.id" target="_blank">Helmi Amirudin</a> • Theme by <a href="https://www.facebook.com/adi.persada.560/" target="_blank">Adi-Putra</a><br>
                Main Developer <a href="https://github.com/ryanfauzi1" target="_blank">Ryan Fauzi</a> • Copyright &copy 2021
    </div>';
}
if($_POST['button2']){
exec("cat config/mode.list|awk 'NR==1'",$adamode);
$adamode=$adamode[0];
if (!$adamode) {
exec("echo SSH. >> config/mode.list");
exec("echo Vmess. >> config/mode.list");
exec("echo Trojan. >> config/mode.list");
exec("echo Multi. >> config/mode.list"); }

exec("cat config/config.list|awk 'NR==1'",$ada);
$ada=$ada[0];
if ($ada) {
exec("cat config/default",$default);
$default=$default[0];
 if ($default) {
echo "<h3  class='nganu slide' style='margin:-25px 0 0 0'><center><b>Current active profile is [ $default ]</b></center></h3>";
$data = file_get_contents("config/$default");
echo "<textarea name='configbox' id='isi' spellcheck='false' placeholder='Masukkan config disini' rows='8' cols='50' wrap='hard'>$data</textarea>";
 } else {
$data = file_get_contents("config.txt");
echo "<textarea name='configbox' id='isi' placeholder='Masukkan config disini' rows='8' cols='50' wrap='hard'>$data</textarea>";
 }
$data1 = file_get_contents("config/config1");
echo "<textarea name='configbox1' id='isi1' rows='3' cols='8' style='display:none;' wrap='hard'>$data1</textarea>";
$data2 = file_get_contents("config/config2");
echo "<textarea name='configbox2' id='isi2' rows='3' cols='8' style='display:none;' wrap='hard'>$data2</textarea>";
$data3 = file_get_contents("config/config3");
echo "<textarea name='configbox3' id='isi3' rows='3' cols='8' style='display:none;' wrap='hard'>$data3</textarea>";
$data4 = file_get_contents("config/config4");
echo "<textarea name='configbox4' id='isi4' rows='3' cols='8' style='display:none;' wrap='hard'>$data4</textarea>";
$data5 = file_get_contents("config/config5");
echo "<textarea name='configbox5' id='isi5' rows='3' cols='8' style='display:none;' wrap='hard'>$data5</textarea>";
} else {
exec("mkdir -p config;touch config/config.list config/config1 config/config2");
exec("touch config/config3 config/config4 config/config5 config/mode.list");
exec("echo config1 >> config/config.list");
exec("echo config2 >> config/config.list");
exec("echo config3 >> config/config.list");
exec("echo config4 >> config/config.list");
exec("echo config5 >> config/config.list");
exec("echo config1 >> config/default");
$data = file_get_contents("config.txt");
echo "<textarea name='configbox' id='isi' rows='9' cols='50' wrap='hard'>$data</textarea>";
$config=$_POST['configbox'];
$conf=$_POST['profile'];
exec('echo "'.$config.'" > config/'.$conf);
exec('sed -i \'s/\r$//g\' config/'.$conf);
exec('sed -i \':a;N;$!ba;s/\n\n//g\' config/'.$conf);
};
echo '<div class="form-box">';
echo '<select name="profile" id="idconf" onchange="shipping_calc()">';
exec("cat config/config.list",$list);
exec("cat config/default",$default);
$default=$default[0];
$x=0;
while($x<count($list)){
if ( $default == $list[$x] ){
echo "<option value=\"$list[$x]\" selected>$list[$x]</option>";
} else {
echo "<option value=\"$list[$x]\">$list[$x]</option>";}
  $x++;}
echo '<form method="post"'>
exec("cat config/stun|awk 'NR==1'",$stun);
  if (!$stun[0]) { exec("echo yes > config/stun"); }
 if ( $stun[0] == "yes"){
echo '<input type="checkbox" name="use_stunnel" value="yes" checked>stunnel'; }
else {
echo '<input type="checkbox" name="use_stunnel" value="yes">stunnel'; }
exec("touch /etc/rc.local");
exec("cat /etc/rc.local 2>/dev/null|grep xderm|grep button|awk '{print $2}'|awk 'NR==1'",$boot);

exec("cat config/gotun|awk 'NR==1'",$gotun);
  if (!$gotun[0]) { exec("echo no > config/gotun"); }
 if ( $gotun[0] == "yes"){
echo '<input type="checkbox" name="use_gotun" value="yes" checked>go-tun2socks'; }
else {
echo '<input type="checkbox" name="use_gotun" value="yes">go-tun2socks'; }

exec("cat config/firewall|awk 'NR==1'",$restfw);
  if (!$restfw[0]) { exec("echo no > config/firewall"); }
 if ( $restfw[0] == "yes"){
echo '<input type="checkbox" name="use_restfw" value="yes" checked>Restart Firewall<br>'; }
else {
echo '<input type="checkbox" name="use_restfw" value="yes">Restart Firewall<br>'; }

echo '<select name="mode" id="idmode">';
exec("cat config/mode.list",$modelist);
exec("cat config/mode.default",$modedefault);
$modedefault=$modedefault[0];
$u=0;
while($u<count($modelist)){
if ( $modedefault == $modelist[$u] ){
echo "<option value=\"$modelist[$u]\" selected>$modelist[$u]</option>";
} else {
echo "<option value=\"$modelist[$u]\">$modelist[$u]</option>";}
  $u++;}

exec("cat config/modem|awk 'NR==1'",$modem);
  if (!$modem[0]) { exec("echo no > config/modem"); }
 if ( $modem[0] == "yes"){
echo '<input type="checkbox" name="use_waitmodem" value="yes" checked>Waiting Modem '; }
else {
echo '<input type="checkbox" name="use_waitmodem" value="yes">Waiting Modem '; }

 if ($boot[0]) {
echo '<input type="checkbox" name="use_boot" value="yes" checked>ON-Boot'; }
else {
echo '<input type="checkbox" name="use_boot" value="yes">ON-Boot'; }
echo '<br><button type="submit" name="simpan" class="glow-on-hover" style="width: 98%; height: 30px; margin-top: 10px; flex-shrink: 0; ! important;" value="Simpan">Simpan</button></form></div>';
echo '<div id="logx" class="scr"></div></pre>';
} else {
if(!$_POST['button5']){
 if (!isset($_POST['simpan'])) {
  if(!$_POST['button6']){
   if(!$_POST['button7']){
    if(!$_POST['button4']){
echo '<div id="log" class="scroll"></div></pre>';
    }
   }
  }
 }
}
}
if($_POST['button6']){
if (file_exists("login.php") | file_exists("header.php")) {
 echo 'Loginpage Tersedia, Menghapus...<br/>';
 rename("login.php", "login.php.xdrtool");
 rename("header.php", "header.php.xdrtool");
 echo 'Loginpage Terhapus !';
} elseif (file_exists("login.php.xdrtool") | file_exists("header.php.xdrtool")) {
 echo 'Loginpage tidak Tersedia, Menginstall...<br/>';
 rename("login.php.xdrtool", "login.php");
 rename("header.php.xdrtool", "header.php");
 echo 'Loginpage Terinstall !';
} else {
 echo 'Login page is available, now installing online mode !';
 exec('wget -O /www/xderm/login.php https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/login.php -q');
 exec('wget -O /www/xderm/header.php https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/header.php -q');
 echo 'Login page installed ! Refresh this page'; }
}
if($_POST['button7']){
echo 'Force Reinstall Xderm Mini !<br/>';
echo 'Removing old files<br/>';
if (file_exists("login.php") | file_exists("header.php")) {
	exec('wget -O /www/xderm/login.php https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/login.php -q');
	exec('wget -O /www/xderm/header.php https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/header.php -q');
} elseif (file_exists("login.php.xdrtool") | file_exists("header.php.xdrtool")) {
	exec('wget -O /www/xderm/login.php.xdrtool https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/login.php -q');
	exec('wget -O /www/xderm/header.php.xdrtool https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/header.php -q');
} else {
	exec('wget -O /www/xderm/login.php https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/login.php -q');
	exec('wget -O /www/xderm/header.php https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/header.php -q');
}
exec('wget -O /www/xderm/index.html https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/index.html -q');
exec('wget -O /www/xderm/xderm-mini https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/xderm-mini -q');
exec('wget -O /www/xderm/js/jquery-2.1.3.min.js https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/jquery-2.1.3.min.js -q');
exec('wget -O /www/xderm/img/image.png https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/image.png -q');
exec('wget -O /www/xderm/img/fav.ico https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/fav.ico -q');
exec('wget -O /www/xderm/img/ico.png https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/ico.png -q');
exec('wget -O /www/xderm/img/background.jpg https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/background.jpg -q');
exec('wget -O /bin/xdrauth https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/adds/xdrauth -q');
exec('chmod +x /bin/xdrauth');
exec('wget -O /bin/xdrtool https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/adds/xdrtool -q');
exec('wget -O /www/xderm/index.php https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/index.php -q');
exec('chmod +x /bin/xdrtool');
echo 'Installing new files<br/>';
echo 'Installation done ! Refresh this page<br/>';
}
?></td></tr>
</table>
</head><br>
</div></div>
</html>
