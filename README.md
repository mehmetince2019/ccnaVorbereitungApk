# ccnaVorbereitungApk


- web sitenizde quizlet benzeri soru listeleri olusturun. 
- basit bir form araciligi ile sorulari kopyalayip yapistirin 
- bu basit soru listesini bir apk ya cevirip android telefonunuzdan kendi flashkart sisteminiz ile calisin 



1- database olustur

2- database icinde tablo olustur 

3. web sitende files kisminda klasor olustur. icine php dosyalarini yükle 

4. yükledigin dosyalari kendine göre editle 

5. yeni soru listesi icin tekrar tablo olustur. 2 , 3ve 4 adimlari tekrar yap. 

6. apk yap 


-------------
1. websitende yönetim panelinde database olusturma bölümüne git 
( bende plesk yönetim paneli var.. database kismi) 
yeni ye tikla . 
bir database ismi tanimla ornegin ccna 
bir user tanimla örnegin ccnauser
ve pasword.. "ccnapaswordum"

------------------------
2. phpmyadmine git 
databasein icine gir. sql sorgusu bölümüne git- 
000sqlcod dosyasi icindeki sorguyu önce kendine göre degistir.
sonra bu kodu sql penceresinde calistir. 
tablo olussun .. 
ornegin ccna_2



------------

3- web sitende file bölümüne git 
ccna isimli isimli 1 klasör olustur
github tan indirdigin php dosyalarini icine yükle 

-----------
4- web site yönetim ekraninda file managere gir 
php dosyalarini tek tek ac . 
iclerindeki degismesi gereken yerleri kendine göre editle 
neler degisecek ?
-tablo ismi ( "ccna_2" kelimesini arat ve kendine göre degistir) 
-index e giden linki kendiene göre degistir 
-ve varsa... kull adi , database adi ve sifreyi kendien göre degistir ..

----------------



5- ikinci bir liste yapmak icin :(sonraki soru listesi icin)
1- database de yeni tablo olustur.. 
000sql dosyasindaki sorguyu degistirerek... bu sorguyu phpmyadminde calistir.
database de yeni bir tablo olussun

2- yeni liste icin... yeni bir klasor olustur. ismini degistir . 
birinci klasordeki dosyalari olusturdugun yeni klasöre kopyala. 
dosyalari editle (herbir php dosyasinin icine girip olmasi gerektigi sekilde editle 
tablo ismini örn :"ccna2_1" 
ve varsa  kull adi,  database ve sifreleri ve  index e giden linki editle )


 ------------

6- appinventor sitesinde git 
uye ol 
yeni proje ac 
sadece web göstericiyi mausla tutup ortaya cek 
uzerine 1 kez tikla 
sag menüden özelliklerini degistir. 
url kismina.. web sitesinde olsuturdugun soru klasörünün tam linkini yaz ..."https//..../ccna/index.php"   

logo istersen paintte 100x100 ebatlarinda bir logo olustur. sag üstten screen i sec.. ve acilan sag menüden icon ekle ye tiklayarak logoyu yükle.
üst meüden compile/erzeugen den .. apk yi secerek programi derle.. 
olusan dosyayi ceptelefonuna aktar. bunun icin 2 yol var
cikan barkodu ceptele okutarak hizli sekilde... 
ya da download klasöründe olusan ccna.apk dosyasini.. kablo ile baglayarak ceptelefonuna kopyala. 
ceptel den bilinmeyen kaynaklara güven / yükle yi ac..
apk yi install et..
bu kadar

