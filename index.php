
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
	
	
	

<style>
	
	body {
         background-color: black;
         color: #00b300;
		
		font-size: 20px;
		
		

	}
	
	a{
		margin:5px;
		padding:5px 10px;
	}
	
	
	p.solid {border-style: solid;}
	
</style>


<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
</head>
<body>

<div class="container mt-3">	
	
	
	
		<table style="width:100%"> 
			<tr>   <td></td>     </tr>
	
<?php


error_reporting(0);


include_once 'datab.php';




	$sayfa = $_GET['sayfa'] ? $_GET['sayfa'] : 1; //urlden gelen sayfa değeri var ise o değeri, yok ise 1 değeri veriyoruz.
	$toplam_icerik_sayisi = mysqli_num_rows(mysqli_query($baglan,'SELECT sira FROM ccna2_5'));
	$limit = 1; //sayfalamada her sayfada gösterilecek veri sayısı
	$sonSayfa = ceil($toplam_icerik_sayisi/$limit);//içerik sayısı ile limit değeri bölünüyor ve çıkan değer yuvarlanıyor. böylece sayfa sayısı diğer bir ifadeyse sonm sayfa değeri bulunuyor
	//mesela 22 veri var. biz 4 er 4er listeliyoruz. 22 veriyi 6 sayfada gösterebiliriz. 
	//22/4 = 5.5 sonucunu yukarı yuvarlayıp sayfa sayısını buluyoruz.
	$baslangic = ($sayfa-1)*$limit;
	/*
		mesela ilk sayfa 1. sayfa gösterilecek ise 1-1 = 0 - 0*4=0, veritabanından 0.veriden itibaren veriler getirilmeye başlansın
		2. sayfa gösterilecek ise 2-1 = 1 - 1*4=4, veritabanından 4. veriden itibaren veriler getirilmeye başlansın
	*/
	
	if($sonSayfa >= $sayfa){
		
		$icerik_sorgu = mysqli_query($baglan,'SELECT * FROM ccna2_5 LIMIT '.$baslangic.','.$limit); //başlangıç değerinden itibaren kaç tane veri getirilecek ise veritabanından LIMIT komutu ile verileri çekiyoruz
		

	
		
		
		while ($icerik = mysqli_fetch_assoc($icerik_sorgu)){ //çekilen veriler içerisinde dönüyoruz, teker teker veriyi $icerik değişkenine aktarıyoruz 
			echo  nl2br($icerik['frage']), '<br><br><br>',  '--------------------------------', '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>',  nl2br($icerik['antwort']), '<br><br><br>', $icerik['jahr'], '  ', $icerik['mevsim'],  '  ', $icerik['prüfungsart'],  ' -- ', $icerik['sira']  ; //ve veri değerlerini yazdırıyoruz
		
		
	echo'<br>';	
				
	echo '<a href="update.php?sira='.$icerik['sira'].'"<button type="button" class="btn btn-primary btn-lg btn-block"> Edit</button></a>';
	echo '<a href="ekle_madde_index.php"<button type="button" class="btn btn-primary btn-lg btn-block"> hinzufügen </button></a>';
			
	echo '<a href="delete.php?sira='.$icerik['sira'].'"<button type="button" class="btn btn-primary btn-lg btn-block"> Del</button></a>';	
echo'<br>';	
	$onceki10 = $sayfa -10;
	echo '<a href="?sayfa='.$onceki10.'"<button type="button" class="btn btn-primary btn-lg btn-block"> -10 </button></a>';
			
		$sonraki50 = $sayfa +50;
	echo '<a href="?sayfa='.$sonraki50.'"<button type="button" class="btn btn-primary btn-lg btn-block"> +50 </button></a>';

	$sonraki10 = $sayfa +10;
	echo '<a href="?sayfa='.$sonraki10.'"<button type="button" class="btn btn-primary btn-lg btn-block"> +10 </button></a>';
				
		
			
		echo'<tr>';					
	
			
		}
		/*sayfalama buton kodları*/
		if($toplam_icerik_sayisi > $limit){	//içerik sayısı, her sayfada gösterilecek içerik sayısından büyük ise sayfalama butonları aktif edilsin	 
			echo '<br><br>';
			/*
				$x = 2 olduğu durumda, aktif sayfanın önceki ve sonraki 2 sayfa gösterilir, sonrasına ... ifadesi konularak kısaltma yapılır. 
				böylelikle bütün sayfaları yazmamıza gerek kalmaz.
				örnekler:
				« Önceki 1...4 5 [6] 7 8...11 Sonraki »	  ||  [1] 2 3...11 Sonraki »	  ||   « Önceki 1...9 10 [11] 
			*/
			$x = 2; //kısaltma limiti 
			if($sayfa > 1){	//sayfa 1 den küçük ise [Önceki] butonu oluşturulmaya uygundur	
				$onceki = $sayfa-1;	//aktif sayfanın bir önceki sayfa bulunur		
				
				echo'<p class="solid"><td>';
				
				echo '<a href="?sayfa='.$onceki.'"> <button type="button" class="btn btn-primary btn-lg"> << </button> </a>'; //link içerisine yazdırılıp [Önceki] butonu oluşturulur	  
				
				
			}	
		
			echo'<td>';
			echo '<a href="../index.php"<button type="button" class="btn btn-primary btn-lg btn-block"> index </button></a>'; 
			
			echo'</td>';
			
			
			
			echo'</td>';
			
				
			
				
			if($sayfa==1){ //sayfalamada 1. sayfada bulunuyorsak
				echo '<a>[1]</a>'; //1. sayfayı menüde aktif olarak gösteriyoruz
			}
			else{ // bulunmuyorsak
				echo '<a href="?sayfa=1">1</a>'; //normal olarak gözüksün, aktif olmasın	
			}
			//menü kısaltma işlemi
				//bulunduğumuz sayfa yani $sayfa = 6 olduğu durumda
			if($sayfa-$x > 2){ //6-2 > 2 değeri true döndürecek
				echo '...'; //kısaltma etiketi yazdırılacak	
				$i = $sayfa-$x; //$i değişkenine 4 değeri atanacak..*** altta 2 yaziliydi***	 
			}else { 			
				$i = 226; 		  
			}
			//$sayfa = 6 olduğu durumda = sonuc çıktısı -> 1 ...
			
			for($i; $i<=$sayfa+$x; $i++) { //$i yani 4 değeri 8 değerine ulaşasıya kadar döngü çalışsın	> 4  5  6  7  8	
				if($i==$sayfa){ //$i değeri bulunduğumuz sayfa ile eşitse
					echo '&nbsp;<a>['.$i.']</a>&nbsp;'; // aktif olarak işaretlensin ve yazdırılsın > 4  5  [6]  7  8	
				}
				else{//değil ise
					echo '<a href="?sayfa='.$i.'">'.$i.'</a>'; //normal olarak yazdırılsın
				}
				if($i==$sonSayfa) break;  }
			
			//$sayfa = 6 olduğu durumda = sonuc çıktısı -> 1 ... 4  5  [6]  7  8	
			
			if($sayfa+$x < $sonSayfa-1) { //6+2<11-1 ise	
				echo '...'; //kısaltma etiketi yazdırılacak				
				echo '<a href="?sayfa='.$sonSayfa.'">'.$sonSayfa.'</a>'; //	son sayfa yazdırılacak	  
			}elseif($sayfa+$x == $sonSayfa-1) { 			
				echo '<a href="?sayfa='.$sonSayfa.'">'.$sonSayfa.'</a>'; 		 
			}
			//$sayfa = 6 olduğu durumda = sonuc çıktısı -> 1 ... 4  5  [6]  7  8 ... 11	
			//menü kısaltma işlemi
			
			if($sayfa < $sonSayfa){	//bulunduğumuz sayfa hala son sayfa değil ise	  
				$sonraki = $sayfa+1; //bulundğumuz sayfa değeri 1 arttırılıyor	
				
				
				
			
				
			echo'<td>';
				
			
				
				echo '<a href="?sayfa='.$sonraki.'"<button type="button" class="btn btn-primary btn-lg btn-block"> >> </button></a>'; //ve Sonraki butonu oluşturulup yazdırılıyor 		  
				
				echo'</td>';
				
			}	
		}
		/*sayfalama buton kodları*/
	}else{
		echo 'Hiç içerik yok';
		header("Location:index.php");
	}	
	echo'</th>';	
			
			
	
			
			
?>	
	

	</div>		
			
	</td>    
	
	<td> 
	
	</td> 
	
	</tr>
	
	
	

	
	</table>
	
<br>
<br>
<br>
	
	</body>
	
	</html>