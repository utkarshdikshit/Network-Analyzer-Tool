<?php
$result=isset($_POST['pro'])? $_POST['pro']:"";
if($result=="tcp")
{
	$file=fopen("tcpsip","r");
	$file1=fopen("tcpdip","r");
	$file2=fopen("tcpsmac","r");
	$file3=fopen("tcpdmac2","r");
	$file4=fopen("tcptimestamp","r");
	$file5=fopen("tcpsport","r");
	$file6=fopen("tcpdport","r");
	$file7=fopen("tcpslength","r");
	$file8=fopen("tcprlength","r");

	echo"<head><center><body bgcolor=93DC69><b>---TCP PACKETS---</b></center></head><table border=10 bordercolor=blue><tr><th>TIMESTAMP</th><th>SOURCE IP</th><th>DESTINATION IP</th><th>SOURCE MAC</th><th>DESTINATION MAC </th><th>SOURCE PORT</th> <th> DESTINATION PORT</th><th>SENDER LENGTH</th><th>RECIVER LENGTH</th></tr><tr><td>";
	while(!feof($file4)){echo fgets($file4)."<br>";};echo"</td><td>";
 	while(!feof($file)){echo fgets($file)."<br>";};echo"</td><td>";
	while(!feof($file1)){echo fgets($file1)."<br>";};echo"</td><td>";
	while(!feof($file2)){echo fgets($file2)."<br>";};echo"</td><td>";
	while(!feof($file3)){echo fgets($file3)."<br>";};echo"</td><td>";
	while(!feof($file5)){echo fgets($file5)."<br>";};echo"</td><td>";
	while(!feof($file6)){echo fgets($file6)."<br>";};echo"</td><td>";
	while(!feof($file7)){echo fgets($file7)."<br>";};echo"</td><td>";
	while(!feof($file8)){echo fgets($file8)."<br>";};echo"</td></tr></table></body>";
}




if($result=="udp")
{
	$file9=fopen("udpsip","r");
	$file10=fopen("udpdip","r");
	$file11=fopen("udpsmac","r");
	$file12=fopen("udpdmac2","r");
	$file13=fopen("udptimestamp","r");
	$file14=fopen("udpsport","r");
	$file15=fopen("udpdport","r");
	$file16=fopen("udpslength","r");
	$file17=fopen("udprlength","r");

	echo"<head><center><body><b>---UDP PACKETS---</b></center></head><table border=10 bordercolor=blue><tr><th>TIMESTAMP</th><th>SOURCE IP</th><th>DESTINATION IP</th><th>SOURCE MAC</th><th>DESTINATION MAC </th><th>SOURCE PORT</th> <th> DESTINATION PORT</th><th>SENDER LENGTH</th><th>RECIVER LENGTH</th></tr><tr><td>";	

	while(!feof($file9)){echo fgets($file9)."<br>";};echo"</td><td>";
	while(!feof($file10)){echo fgets($file10)."<br>";};echo"</td><td>";
	while(!feof($file11)){echo fgets($file11)."<br>";};echo"</td><td>";
	while(!feof($file12)){echo fgets($file12)."<br>";};echo"</td><td>";
	while(!feof($file13)){echo fgets($file13)."<br>";};echo"</td><td>";
	while(!feof($file14)){echo fgets($file14)."<br>";};echo"</td><td>";
	while(!feof($file15)){echo fgets($file15)."<br>";};echo"</td><td>";
	while(!feof($file16)){echo fgets($file16)."<br>";};echo"</td><td>";
	while(!feof($file17)){echo fgets($file17)."<br>";};echo"</td></tr></table></body>";

}




if($result=="arp")
{
	$file18=fopen("arpsip","r");
	$file19=fopen("arpdip","r");
	$file20=fopen("arpsmac","r");
	$file21=fopen("arpdmac2","r");
	$file22=fopen("arptimestamp","r");
	$file23=fopen("arpsport","r");
	$file24=fopen("arpdport","r");
	$file25=fopen("arpslength","r");
	$file26=fopen("arprlength","r");

	echo"<head><center><body><b>---ARP PACKETS---</b></center></head><table border=10 bordercolor=blue><tr><th>TIMESTAMP</th><th>SOURCE IP</th><th>DESTINATION IP</th><th>SOURCE MAC</th><th>DESTINATION MAC </th><th>SOURCE PORT</th> <th> DESTINATION PORT</th><th>SENDER LENGTH</th><th>RECIVER LENGTH</th></tr><tr><td>";
	
	while(!feof($file18)){echo fgets($file18)."<br>";};echo"</td><td>";
	while(!feof($file19)){echo fgets($file19)."<br>";};echo"</td><td>";
	while(!feof($file20)){echo fgets($file20)."<br>";};echo"</td><td>";
	while(!feof($file21)){echo fgets($file21)."<br>";};echo"</td><td>";
	while(!feof($file22)){echo fgets($file22)."<br>";};echo"</td><td>";
	while(!feof($file23)){echo fgets($file23)."<br>";};echo"</td><td>";
	while(!feof($file24)){echo fgets($file24)."<br>";};echo"</td><td>";
	while(!feof($file25)){echo fgets($file25)."<br>";};echo"</td><td>";
	while(!feof($file26)){echo fgets($file26)."<br>";};echo"</td></tr></table></body>";
}

?>
