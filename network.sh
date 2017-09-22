#!/bin/sh
tcpdump -i wlan0 -ne -c 10  > captured
grep "IP" captured > tcp
grep "UDP" captured > udp
grep "ARP" captured > arpextra
grep "Request" arpextra > arp

cut -d" " -f2 tcp > tcpsmac #_______________________________________________tcp source mac

cut -d" " -f4 tcp > tcpdmac1
sed 's/,//' tcpdmac1 > tcpdmac2 #__________________________________________ destination mac

cut -d" " -f2 udp > udpsmac #_______________________________________________udp source mac

cut -d" " -f4 udp > udpdmac1
sed 's/,//' udpdmac1 > udpdmac2 #___________________________________________udp destination mac

cut -d" " -f2 arp > arpsmac #_______________________________________________arp source mac

cut -d" " -f4 arp > arpdmac1
sed 's/,//' arpdmac1 > arpdmac2 #____________________________________________for arp destiantion mac

cut -c-15 tcp > tcptimestamp #____________________________________________tcp timestamp

cut -c-15 udp > udptimestamp #_____________________________________________udp timestamp

cut -c-15 arp > arptimestamp #_____________________________________________for arp timestamp

#--$$$$$$$$$$$$$$$$$$$$$---------------------------port+ip--------------$$$$$$$$$$$$$$$$-------------------------



cut -d" " -f10 tcp > tcpsipplusp # tcp source ip+port

cut -d" " -f12 tcp > tcpdipplusp # tcp destination ip+port

cut -d" " -f10 udp > udpsipplusp # udp source ip+port

cut -d" " -f12 udp > udpdipplusp # udp destination ip+port

cut -d" " -f12 arp > arpsipplusp # arp source ip+port

cut -d" " -f14 arp > arpdip1 
sed 's/,$//' arpdip1 > arpdipplusp # arp destiantion ip+port


#-------------------------------------------------------------------------------------------------------

cut -d" " -f9 arp > arpsleng # arp sender length
sed 's/://' arpsleng > arpslength
cut -d" " -f9 udp > udpsleng # udp sender length
sed 's/://' udpsleng > udpslength
cut -d" " -f9 tcp > tcpsleng # tcp sender length
sed 's/://' tcpsleng > tcpslength

grep -o ".....$" arp > arprleng # arp reciever length
cut -d" " -f2 arprleng > arprlength
grep -o ".....$" tcp > tcprleng # tcp reciever length
cut -d" " -f2 tcprleng > tcprlength
grep -o ".....$" udp > udprleng	# udp reciever length
cut -d" " -f2 udprleng > udprlength

#-------------------------------------------------------------------------------------------------------

rev tcpsipplusp > tsip2 
fgrep "." tsip2 > tsip23
cut -d"." -f1 tsip23 > tsip3
rev tsip3 > tcpsport #tcp source port

rev tcpdipplusp > tdip2 
fgrep "." tdip2 > tdip23
cut -d"." -f1 tdip23 > tdip3
rev tdip3 > tdip4 
sed 's/:$//' tdip4 > tcpdport #tcp destination port

sed 's/^[^.]*./:/' tsip2 > tsip7 
rev tsip7 > tsip8
sed 's/.$//' tsip8 > tcpsip #tcp source ip

sed 's/^[^.]*./:/' tdip2 > tdip7 
rev tdip7 > tdip8
sed 's/.$//' tdip8 > tcpdip #tcp destiantion ip

rev udpsipplusp > usip2 
fgrep "." usip2 > usip23
cut -d"." -f1 usip23 > usip3
rev usip3 > udpsport #udp source port

rev udpdipplusp > udip2 
fgrep "." udip2 > udip23
cut -d"." -f1 udip23 > udip3
rev udip3 > udip4
sed 's/:$//' udip4 > udpdport #udp destination port

sed 's/^[^.]*./:/' usip2 > usip7 
rev usip7 > usip8
sed 's/.$//' usip8 > udpsip #udp source ip

sed 's/^[^.]*./:/' udip2 > udip7 
rev udip7 > udip8
sed 's/.$//' udip8 > udpdip #udp destination ip

#_________________________________________________________________

rev arpsipplusp > asip2
fgrep "." asip2 > asip23
cut -d"." -f1 asip23 > asip3
rev asip3 > arpsport #arp source port

rev arpdipplusp > adip2
fgrep "." adip2 > adip23
cut -d"." -f1 adip23 > adip3
rev adip3 > adip4
sed 's/:$//' adip4 > arpdport #arp destination port

sed 's/^[^.]*./:/' asip2 > asip7
rev asip7 > asip8
sed 's/.$//' asip8 > arpsip #arp source ip

sed 's/^[^.]*./:/' adip2 > adip7
rev adip7 > adip8
sed 's/.$//' adip8 > arpdip #arp destiantion ip

