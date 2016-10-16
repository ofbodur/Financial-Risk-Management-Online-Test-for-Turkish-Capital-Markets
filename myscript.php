<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='style_yerindelik.css'/>
<meta charset="UTF-8">
</head>
<body>

<div class="SON">  İşleminiz Tamamlanmıştır, Teşekkür Ederiz! </div>
<div class="SON">  YERİNDELİK TESTİ SONUÇ BİLDİRİMİ </div>
 <div style="margin-top:40px; position:relative;">
<?PHP
//var_dump($_POST);
$to="ofbodur@gmail.com";
$from="ofbodur@physics-in-action.com";
$subject="Yerindelik Testi Sonuçları";
$isim = $_GET['AdSoyad'];
$kategori1 = $_GET['RadioGroup1'];
switch ($kategori1) {
		case "Genel Müşteri":
		$p1=0.5;
		break;
		case "Talebe Dayalı Profesyonel Müşteri":
		$p1=3;
		break;
		case "Profesyonel Müşteri":
		$p1=6.5;
		break;

	}
$kategori2 = $_GET['RadioGroup2'];
switch ($kategori2) {
		case "18 - 30 Yaş Arası":
		$p2=0.45;
		break;
		case "31 - 50 Yaş Arası":
		$p2=0.75;
		break;
		case "51 - 65 Yaş Arası":
		$p2=0.60;
		break;
		case "66 yaş ve üzeri":
		$p2=0.15;
		break;
		case "Kurumsal Müşteri":
		$p2=1.05;
		break;

	}
$kategori3 = $_GET['RadioGroup3'];
switch ($kategori3) {
		case "İlk-Ortaöğretim":
		$p3=0.16;
		break;
		case "Lise":
		$p3=0.80;
		break;
		case "Lisans ve Üstü":
		$p3=7.04;
		break;
		case "Kurumsal Müşteri":
		$p3=8;
		break;
		

	}
$kategori4 = $_GET['Meslek'];
$kategori5 = $_GET['Tecrube'];
$kategori6 = $_GET['RadioGroup4'];
switch ($kategori6) {
		case "0 - 5,000TL arası":
		$p4=0.42;
		break;
		case "5,001 - 10,000TL arası":
		$p4=1.08;
		break;
		case "10,001 - 15,000TL arası":
		$p4=1.80;
		break;
		case "15,001TL ve üstü":
		$p4=2.70;
		break;
	}
$kategori7 = $_GET['RadioGroup5'];
switch ($kategori7) {
		case "Ücretli Çalışan":
		$p5=0.72;
		break;
		case "Serbest Meslek Çalışanı":
		$p5=1.28;
		break;
		case "Emekli":
		$p5=0.20;
		break;
		case "Diğer Gelir Tipi":
		$p5=1.80;
		break;
	}
$kategori8 = $_GET['RadioGroup6'];
switch ($kategori8) {
		case "0 - 50,000TL arası":
		$p6=0.15;
		break;
		case "50,001 250,000TL arası":
		$p6=0.20;
		break;
		case "250,001 - 1,000,000TL arası":
		$p6=0.25;
		break;
		case "1,000,001TL ve üstü":
		$p6=0.40;
		break;
	}
$kategori9 = $_GET['RadioGroup7'];
switch ($kategori9) {
		case "BorcuYok":
		$p7=2.60;
		break;
		case "BorcuVar":
		$p7=1.40;
		break;
		
	}

/*if ($kategori9 == "BorcuYok") {
	$kategori10=0;*/
	


$kategori10 = $_GET['BorcMiktari'];

$kategori11 = $_GET['RadioGroup8'];
switch ($kategori11) {
		case "Kısa Vade":
		$p8=0.40;
		break;
		case "Orta Vade":
		$p8=1.20;
		break;
		case "Uzun Vade":
		$p8=2.80;
		break;
		case "Daha Uzun Vade":
		$p8=3.60;
		break;
		
	}
$kategori12 = $_GET['RadioGroup9'];
switch ($kategori12) {
		case "Ana Param Aynen Korunsun":
		$p9=0.30;
		break;
		case "Ana Paradan Çok Az Bir Miktar Kaybedebilirim":
		$p9=1.20;
		break;
		case "Ana Paradan Bir Miktar Kaybedebilirim":
		$p9=4.50;
		break;
		case "Ana Paradan Kaybetmeyi Göze Alabilirim":
		$p9=10.80;
		break;
		case "Ana Parayı Tamamen Kaybetmeyi Göze Alabilirim":
		$p9=13.20;
		break;
		
	}
$kategori13 = $_GET['RadioGroup10'];
switch ($kategori13) {
		case "Ürün Hakkında Bilgim Yok":
		$p10=0.0003;
		break;
		case "Ürün Hakkında Bilgim Kısıtlı":
		$p10=0.0015;
		break;
		case "Urun Hakkında Yeterince Bilgim Var":
		$p10=0.0582;
		break;
				
	}
$kategori14 = $_GET['RadioGroup11'];
switch ($kategori14) {
		case "Nadiren":
		$p11=0.0006;
		break;
		case "Ara sıra":
		$p11=0.0054;
		break;
		case "Sıklıkla":
		$p11=0.0540;
		break;
				
	}
$kategori15 = $_GET['RadioGroup12'];
switch ($kategori15) {
		case "1 - 50,000TL arası":
		$p12=0.0060;
		break;
		case "50,001 - 500,000TL arası":
		$p12=0.0120;
		break;
		case "500,001TL ve Üzeri":
		$p12=0.0420;
		break;
				
	}
$kategori16 = $_GET['RadioGroup13'];
switch ($kategori16) {
		case "Ürün Hakkında Bilgim Yok":
		$p13=0.0012;
		break;
		case "Ürün Hakkında Bilgim Kısıtlı":
		$p13=0.0060;
		break;
		case "Urun Hakkında Yeterince Bilgim Var":
		$p13=0.2328;
		break;
				
	}
$kategori17 = $_GET['RadioGroup14'];
switch ($kategori17) {
		case "Nadiren":
		$p14=0.0024;
		break;
		case "Ara sıra":
		$p14=0.0216;
		break;
		case "Sıklıkla":
		$p14=0.2160;
		break;
				
	}
$kategori18 = $_GET['RadioGroup15'];
switch ($kategori18) {
		case "1 - 50,000TL arası":
		$p15=0.0240;
		break;
		case "50,001 - 500,000TL arası":
		$p15=0.0480;
		break;
		case "500,001TL ve Üzeri":
		$p15=0.1680;
		break;
				
	}
$kategori19 = $_GET['RadioGroup16'];
switch ($kategori19) {
		case "Ürün Hakkında Bilgim Yok":
		$p16=0.0045;
		break;
		case "Ürün Hakkında Bilgim Kısıtlı":
		$p16=0.0225;
		break;
		case "Urun Hakkında Yeterince Bilgim Var":
		$p16=0.8730;
		break;
				
	}
$kategori20 = $_GET['RadioGroup17'];
switch ($kategori20) {
		case "Nadiren":
		$p17=0.0090;
		break;
		case "Ara sıra":
		$p17=0.0810;
		break;
		case "Sıklıkla":
		$p17=0.8100;
		break;
				
	}
$kategori21 = $_GET['RadioGroup18'];
switch ($kategori21) {
		case "1 - 50,000TL arası":
		$p18=0.0900;
		break;
		case "50,001 - 500,000TL arası":
		$p18=0.1800;
		break;
		case "500,001TL ve Üzeri":
		$p18=0.6300;
		break;
				
	}
$kategori22 = $_GET['RadioGroup19'];
switch ($kategori22) {
		case "Ürün Hakkında Bilgim Yok":
		$p19=0.0108;
		break;
		case "Ürün Hakkında Bilgim Kısıtlı":
		$p19=0.0540;
		break;
		case "Urun Hakkında Yeterince Bilgim Var":
		$p19=2.0952;
		break;
				
	}
$kategori23 = $_GET['RadioGroup20'];
switch ($kategori23) {
		case "Nadiren":
		$p20=0.0216;
		break;
		case "Ara sıra":
		$p20=0.1944;
		break;
		case "Sıklıkla":
		$p20=1.9440;
		break;
				
	}
$kategori24 = $_GET['RadioGroup21'];
switch ($kategori24) {
		case "1 - 50,000TL arası":
		$p21=0.2160;
		break;
		case "50,001 - 500,000TL arası":
		$p21=0.4320;
		break;
		case "500,001TL ve Üzeri":
		$p21=1.5120;
		break;
				
	}
$kategori25 = $_GET['RadioGroup22'];
switch ($kategori25) {
		case "Ürün Hakkında Bilgim Yok":
		$p22=0.0132;
		break;
		case "Ürün Hakkında Bilgim Kısıtlı":
		$p22=0.0660;
		break;
		case "Urun Hakkında Yeterince Bilgim Var":
		$p22=2.5608;
		break;
				
	}
$kategori26 = $_GET['RadioGroup23'];
switch ($kategori26) {
		case "Nadiren":
		$p23=0.0264;
		break;
		case "Ara sıra":
		$p23=0.2376;
		break;
		case "Sıklıkla":
		$p23=2.3760;
		break;
				
	}
$kategori27 = $_GET['RadioGroup24'];
switch ($kategori27) {
		case "1 - 50,000TL arası":
		$p24=0.2640;
		break;
		case "50,001 - 500,000TL arası":
		$p24=0.5280;
		break;
		case "500,001TL ve Üzeri":
		$p24=1.8480;
		break;
				
	}

$toplamPuan = (($p1 + $p2 + $p3 +$p4 + $p5 + $p6 + $p7 + $p8 + $p9 + $p10 + $p11 + $p12 + $p13 + $p14 + $p15 + $p16 + $p17 + $p18 + $p19 + $p20 + $p21 + $p22 + $p23 + $p24)-4.37)*100/50.9;

$grup1 = "Çok Düşük Riskli (Repo-Ters Repo, BPP, Para Piyasası Fonu, Yatırımcı Bilgi Formunda Risk Değeri 1 olan yatırım fonları vb.)";
$grup2 = "Düşük Riskli (Hazine Bonosu, Devlet Tahvili, Hazine Kira Sertifikaları,Yatırımcı Bilgi Formunda Risk Değeri 2 ve 3 olan yatırım fonları, vb.)";
$grup3 = "Orta Riskli (Ortaklık Payı, Eurobond, Dövizli Tahviller, Özel Sektör Borçlanma Araçları, Kira Sertifikaları, Yatırımcı Bilgi Formunda Risk Değeri 4 olan yatırım fonları,  vb.)";
$grup4 ="Yüksek Riskli (Türev İşlemler (Vadeli İşlem ve Opsiyon Piyasasında), Varant, Yatırım Kuruluşu Sertifikası , Yatırımcı Bilgi Formunda Risk Değeri 5 ve 6 olan yatırım fonları, vb.)";
$grup5 ="Çok Yüksek Riskli (Tezgahüstü Türev İşlemler, Yapılandırılmış Borçlanma Araçları, Kaldıraçlı Alım Satım İşlemleri – FX, Yatırımcı Bilgi Formunda Risk Değeri 7 olan yatırım fonları vb.)";

if (($p21+$p24)>0.50 && $p9<2 ) {
	echo "<p>Sayın $isim , </p> <p>Yerindelik Testine verdiğiniz cevaplar kapsamında aşağıdaki sonuçlara ulaşılmaktadır:</p>";
	echo "<p>Tercih ettiğiniz risk profiliniz ve piyasalarda gerçekleştirdiğinizi belirttiğiniz işlem hacmi ve sıklıkları arasında uyumsuzluk bulunmaktadır. Bu nedenle, hangi ürün ya da hizmetlerin size uygun olduğunun tespit edilmesi mümkün olmamıştır. </p>";
} elseif ($toplamPuan>=0 && $toplamPuan<=6 ) {
		echo "<p>Sayın $isim , </p> <p>Yerindelik Testine verdiğiniz cevaplar kapsamında aşağıdaki sonuçlara ulaşılmaktadır:</p>";
		echo "<p>Test sonucu bireysel portföy yöneticiliği veya yatırım danışmanlığı hizmeti için size uygun bulunan ürün ve hizmetler şunlardır: </p> </br>  <p><stong>1-) $grup1</strong></p></br>"; 
		echo "<p>Test sonucu bireysel portföy yöneticiliği veya yatırım danışmanlığı hizmeti için size uygun olmayan ürün ve hizmetler şunlardır: <p><strong>1-) $grup2</stong></p> <p><strong>2-) $grup3</stong></p> <p><strong>3-) $grup4</strong></p> <p><strong>4-) $grup5</strong></p> ";
		}
elseif($toplamPuan>6 && $toplamPuan<=12) {
		echo "<p>Sayın $isim , </p> <p>Yerindelik Testine verdiğiniz cevaplar kapsamında aşağıdaki sonuçlara ulaşılmaktadır:</p>";
		echo "<p>Test sonucu bireysel portföy yöneticiliği veya yatırım danışmanlığı hizmeti için size uygun bulunan ürün ve hizmetler şunlardır:</p> </br> <p><strong>1-) $grup1</strong></p> <p><strong>2-) $grup2</stong></p> </br>";
		echo "<p>Test sonucu bireysel portföy yöneticiliği veya yatırım danışmanlığı hizmeti için size uygun olmayan ürün ve hizmetler şunlardır: <p><strong>1-) $grup3</strong></p> <p><strong>2-) $grup4</strong></p> <p><strong>3-) $grup5</strong></p> ";
		}		
elseif($toplamPuan>12 && $toplamPuan<=66) {
		echo "<p>Sayın $isim , </p> <p>Yerindelik Testine verdiğiniz cevaplar kapsamında aşağıdaki sonuçlara ulaşılmaktadır.</p>";
		echo "<p>Test sonucu bireysel portföy yöneticiliği veya yatırım danışmanlığı hizmeti için size uygun bulunan ürün ve hizmetler şunlardır:</p> <p> <strong>1-) $grup1</strong></p> <p><strong>2-) $grup2</strong></p> <p><strong>3-) $grup3</strong></p> </br>"; 
		echo "<p>Test sonucu bireysel portföy yöneticiliği veya yatırım danışmanlığı hizmeti için size uygun olmayan ürün ve hizmetler şunlardır: <p><strong>1-) $grup4</strong></p> <p><strong>2-) $grup5</strong></p> ";
		}
elseif($toplamPuan > 66 && $toplamPuan<=90) {
		echo "<p>Sayın $isim , </p> <p>Yerindelik Testine verdiğiniz cevaplar kapsamında aşağıdaki sonuçlara ulaşılmaktadır:</p>";
		echo "<p>Test sonucu bireysel portföy yöneticiliği veya yatırım danışmanlığı hizmeti için size uygun bulunan ürün ve hizmetler şunlardır:</p> </br> <p><strong>1-) $grup1</strong></p> <p><strong>2-) $grup2</strong></p> <p><strong>3-) $grup3</stong></p> <p><strong>4-) $grup4</strong></p> </br>";
		echo "<p>Test sonucu bireysel portföy yöneticiliği veya yatırım danışmanlığı hizmeti için size uygun olmayan ürün ve hizmetler şunlardır: <p>$grup5</p> ";
}	
else {
		echo "<p>Sayın $isim , </p> <p>Yerindelik Testine verdiğiniz cevaplar kapsamında aşağıdaki sonuçlara ulaşılmaktadır:</p>";
		echo "<p>Test sonucu bireysel portföy yöneticiliği veya yatırım danışmanlığı hizmeti için size uygun bulunan ürün ve hizmetler şunlardır:</p> </br> <p><strong>1-) $grup1</strong></p> <p><strong>2-) $grup2</strong></p> <p><strong>3-) $grup3</strong></p> <p><strong>4-) $grup4</strong></p> <p><strong>5-) $grup5</strong></p></br>";
		echo "<p>Test sonucu bireysel portföy yöneticiliği veya yatırım danışmanlığı hizmeti için size uygun olmayan ürün yoktur.</p>";
}	


$message= "$isim \n $kategori1 \n $kategori2 \n $kategori3 \n $kategori4 \n $kategori5 \n $kategori6 \n $kategori7 \n $kategori8 \n $kategori9 \n $kategori10 \n $kategori11 \n $kategori12 \n $kategori13 \n $kategori14 \n $kategori15 \n $kategori16 \n $kategori17 \n $kategori18 \n $kategori19 \n $kategori20 \n $kategori21 \n $kategori22 \n $kategori23 \n $kategori24 \n $kategori25 \n $kategori26 \n $kategori27 \n $toplamPuan";
//$file = "file.csv";
mail( $to, $subject, $message);
//$file="file1.csv";  
//file_put_contents($file, $isim . PHP_EOL, FILE_APPEND);
//file_put_contents($file, $kategori1 . PHP_EOL, FILE_APPEND);
?>

</div>    
</body>
</html>	