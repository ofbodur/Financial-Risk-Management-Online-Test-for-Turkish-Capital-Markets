<!DOCTYPE html>
<!-- saved from url=(0067)file:///C:/Users/omer.bodur/Desktop/public_html/YerindelikTesti.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="style_yerindelik.css">
     <script src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery_yerindelik.js"></script>
    
<meta charset="UTF-8">

<title>Yerindelik Testi</title>
</head>
	<body><div>
    <div style="position: relative; display: block; align-self: center;">
    	<img class="seker"; style="position:relative; align-self:center;" src="logo.gif" alt="ŞekerYatırım"> </div>
		<div> 
        <h1> Yerindelik Testi </h1>
	</div>
    <p class="amaç">Bu anketin amacı, bireysel portföy yöneticiliği veya yatırım danışmanlığı kapsamında size sunulacak hizmet ile yatırım amaçlarınız, mali durumunuz ile bilgi ve tecrübenizin uyumlu olup olmadığının değerlendirilmesidir. Bu konuda bir değerlendirme yapılabilmesi sizden gerekli bilgilerin temin edilmesine bağlıdır. Bireysel portföy yöneticiliği veya yatırım danışmanlığı hizmeti ancak yerindelik testinin sonucuna uygun olarak sunulabilir.</p>
<p class="yönerge">Yerindelik testi için bilgi vermezseniz veya eksik ya da güncel olmayan bilgi verirseniz, size bireysel portföy yöneticiliği veya yatırım danışmanlığı hizmeti sunamayız. Hizmetin sunulması sırasında eksik, güncel olmayan ya da gerçeğe aykırı bilgi verdiğinizi öğrenirsek veya tespit edersek hizmeti sonlandırırız. Bu nedenle, size bu hizmetleri sunabilmemiz için aşağıdaki sorulara yanıt vermeniz, doğru,tam ve güncel bilgileri vermeniz gerekir.</p>

<div class="yönerge2" style="position: fixed; font-size: 20px; margin-left: 700px; display: none;"> Testi Cevaplarken Lütfen Aşağıdaki Adımları Sırasıyla Yerine Getiriniz! <br><br> 1-) Tüm formu tamamen doldurunuz. <br> 2-) YAZDIR Butonuna Basarak Cevaplarınızın Çıktısını Alınız. <br> 3-) Aldığınız Çıktının Bir Nüshasını Müşteriye İmzalatıp Şeker Yatırım Portföy Yönetim <br> Müdürlüğü'ne Postalayınız. <br> 4-) GÖNDER Butonuna Basarak Cevaplarınızı Online Olarak Gönderiniz.</div>
<div class="yönerge3" style="position: fixed; font-size: 20px; margin-left: 1100px; display: none;">Fare İle Üzerine Geldiğinizde Arka Planı Yeşil Olan <br>Her 3 Kutucuktan 1 Tanesini <br> Kutucuğun İçindeki Butona Basarak İşaretleyiniz.</div>
<form action="file:///C:/Users/omer.bodur/Desktop/public_html/myscript.php" method="GET" enctype="text/plain" id="buform">

<div class="tablo1">
<table width="600" border="3">
  
    <tbody><tr>
      <th colspan="2" class="tablo1başlık">Lütfen Size Uygun Olan Şıkları Seçiniz ve İstenilen Bilgileri Eksiksizce Doldurunuz.</th>
      
    </tr>
    <tr>
      <th width="40">   </th>
      <td width="544" style="background-color:#47D7E5"> Müşteri Ad Soyad/ Ticari Ünvanı<div style="height: 1; font-size: large;"><input type="text" name="AdSoyad" style="background-color:#C6E730; width: 350px; height: 18px; font-size:16px;" required="" formenctype="text/plain"></div>
      </td>
    </tr>
    </tbody></table>
    </div>

 

   <div class="tablo2">
    <table width="600" border="3">
    <tbody><tr>
  <th width="40px" class="m1_1">1</th>
      <th style="background-color:#47D7E5; font-size:20px" class="m1">Müşteri Sınıfı</th>
    </tr>
    <tr>
      <td></td>
      <td width="544">Genel Müşteri <div class="müşterisınıfı" id="genel_musteri"> 
        
          <label>
            <input type="radio" name="RadioGroup1" value="Genel Müşteri" class="müşteri_sınıfı" id="RadioGroup1_0" required="">
           </label>
         
      </div>
      </td>
    
    </tr>
    <tr>
      <td> </td>
      <td id="Talebe_dayalı">Talebe Dayalı Profesyonel Müşteri<div class="müşterisınıfı" id="t_d_profesyonel_musteri">    <label>
            <input type="radio" name="RadioGroup1" value="Talebe Dayalı Profesyonel Müşteri" class="müşteri_sınıfı" id="RadioGroup1_1">
           </label></div></td>
    </tr>
    <tr>
      <td> </td>
      <td id="prof">Profesyonel Müşteri<div class="müşterisınıfı" id="prof_musteri">   <label>
            <input type="radio" name="RadioGroup1" value="Profesyonel Müşteri" class="müşteri_sınıfı" id="RadioGroup1_2">
           </label> </div></td>
    </tr>
    
    </tbody></table>
    </div>
    
   <div class="tablo3"> 
    <table width="600" border="3" class"yaşrow1"="">
    <tbody><tr>
      <th width="40px" class="yaşrow1">2</th>
      <th colspan="2" style="background-color:#47D7E5; font-size:20px" class="yaşrow1">Yaşınız</th>
      
    </tr>
    <tr class="yaşrow1">
      <td class="yaşrow1">&nbsp;</td>
      <td id="3_1">18-30 yaş<div class="yaş"> <label>
            <input type="radio" name="RadioGroup2" value="18 - 30 Yaş Arası" class="Yaş" id="RadioGroup2_0" required=""> 
           </label>  </div></td>
      
    </tr>
    <tr class="yaşrow1">
      <td>&nbsp;</td>
      <td id="3_2">31-50 yaş<div class="yaş">  <label>
            <input type="radio" name="RadioGroup2" value="31 - 50 Yaş Arası" class="Yaş" id="RadioGroup2_1">
           </label> </div></td>
      
    </tr>
    <tr class="yaşrow1">
      <td class="yaşrow1">&nbsp;</td>
      <td class="yaşrow1">51-65 yaş<div class="yaş">  <label>
            <input type="radio" name="RadioGroup2" value="51 - 65 Yaş Arası" class="Yaş" id="RadioGroup2_2">
           </label> </div></td>
      
    </tr>
    <tr class="yaşrow1">
      <td>&nbsp;</td>
      <td id="3_4">66 ve üzeri<div class="yaş">  <label>
            <input type="radio" name="RadioGroup2" value="66 yaş ve üzeri" class="Yaş" id="RadioGroup2_3">
           </label> </div></td>
     
    </tr>
    <tr class="yaşrow1">
      <td>&nbsp;</td>
      <td id="3_5">Kurumsal Müşteri<div class="yaş">  <label>
            <input type="radio" name="RadioGroup2" value="Kurumsal Müşteri" class="Yaş" id="RadioGroup2_4">
           </label>  </div></td>
    
    </tr>
    </tbody></table>
    </div>
    <div class="tablo4"> 
    <table width="600" border="3">
    <tbody><tr>
      <th width="40px">3</th>
      <th colspan="2" style="background-color:#47D7E5; font-size:20px">Eğitim Durumunuz</th>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td id="4_1">İlköğretim/Ortaöğretim<div class="eğitim">  <label>
            <input type="radio" name="RadioGroup3" value="İlk-Ortaöğretim" class="eğitim_radyo" id="RadioGroup3_0" required="">
           </label>  </div></td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td id="4_2">Lise<div class="eğitim">    <label>
            <input type="radio" name="RadioGroup3" value="Lise" class="eğitim_radyo" id="RadioGroup3_1">
           </label> </div></td>
    
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td id="4_3">Lisans ve Üstü<div class="eğitim">   <label>
            <input type="radio" name="RadioGroup3" value="Lisans ve Üstü" class="eğitim_radyo" id="RadioGroup3_2">
           </label>  </div></td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td id="4_4">Kurumsal Müşteri<div class="eğitim">  <label>
            <input type="radio" name="RadioGroup3" value="Kurumsal Müşteri" class="eğitim_radyo" id="RadioGroup3_3">
           </label>   </div></td>
      
    </tr>
    </tbody></table>
    </div>
    
     <div class="tablo5"> 
    <table width="600" border="3">
      <tbody><tr><th width="40px">4</th>
      <th colspan="2" style="background-color:#47D7E5; font-size:20px">Mesleğiniz (Hali hazırda yoksa önceki yazılmalı)</th>
      
    </tr>
    <tr>
    <td></td>
      <td class="TicariFaaliyeti">Mesleği / Ticari Faaliyeti<div><input type="text" name="Meslek" style="background-color: #C6E730; width: 300px; height: 18px; font-size:16px; display: inline-block;" required=""></div></td> </tr>
      <tr>
    <td></td>
      <td class="tecrubesi">Tecrübe (Yıl)<div><input type="text" name="Tecrube" style="background-color: #C6E730; width: 100px; height: 18px; font-size:16px; display: inline-block;" required=""></div></td>
      
      
    </tr>
    </tbody></table>
    </div>
    
     <div class="tablo6"> 
    <table width="600" border="3">
      <tbody><tr><th width="40px">5</th>
      <th colspan="2" style="background-color:#47D7E5; font-size:20px">Mali Durumunuz</th>
     
    </tr>
    <tr>
      <td style="text-align:center; color:blue;">a</td>
      <td colspan="2"><em><strong>Aylık Net Geliriniz (TL)</strong></em></td>
     
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td id="6_1_1">0 - 5,000 <div class="netgelir">  <label>
            <input type="radio" name="RadioGroup4" value="0 - 5,000TL arası" class="netgelir_radyo" id="RadioGroup4_0" required="">
           </label>  </div></td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td id="6_1_2">5,001 - 10,000<div class="netgelir"> <label>
            <input type="radio" name="RadioGroup4" value="5,001 - 10,000TL arası" class="netgelir_radyo" id="RadioGroup4_1">
           </label>   </div></td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td id="6_1_3">10,001 - 15,000<div class="netgelir">  <label>
            <input type="radio" name="RadioGroup4" value="10,001 - 15,000TL arası" class="netgelir_radyo" id="RadioGroup4_2">
           </label>  </div></td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td id="6_1_4">15,001 ve üstü<div class="netgelir"> <label>
            <input type="radio" name="RadioGroup4" value="15,001TL ve üstü" class="netgelir_radyo" id="RadioGroup4_3">
           </label>   </div></td>
      
    </tr>
    </tbody></table>
    </div>
     <div class="tablo7"> 
    <table width="600" border="3">
    <tbody><tr>
      <td style="text-align:center; color:blue;" width="40px">b</td>
      <td><em><strong>Aylık Net Gelirinizin Türü</strong></em></td>
    
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td id="6_2_1">Ücret<div class="netgelirtürü">  <label>
            <input type="radio" name="RadioGroup5" value="Ücretli Çalışan" class="netgelir_türü" id="RadioGroup5_0" required="">
           </label>   </div></td>
     
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td id="6_2_2">Serbest Meslek Geliri<div class="netgelirtürü">   <label>
            <input type="radio" name="RadioGroup5" value="Serbest Meslek Çalışanı" class="netgelir_türü" id="RadioGroup5_1">
           </label>   </div></td>
     
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td id="6_2_3">Emekli Aylığı<div class="netgelirtürü">    <label>
            <input type="radio" name="RadioGroup5" value="Emekli" class="netgelir_türü" id="RadioGroup5_2">
           </label>  </div></td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td id="6_2_4">Diğer (Kira, faiz, temettü vb.)<div class="netgelirtürü">    <label>
            <input type="radio" name="RadioGroup5" value="Diğer Gelir Tipi" class="netgelir_türü" id="RadioGroup5_3">
           </label>  </div></td>
     
    </tr>
    </tbody></table>
    </div>
    <div class="tablo8"> 
    <table width="600" border="3">
    <tbody><tr>
      <td style="text-align:center; color:blue;" width="40px">c</td>
      <td><em><strong>Kurumumuz bünyesinde sermaye piyasası işlemlerine ayırabileceğiniz tasarruf tutarınız ? (TL)</strong></em></td>
    </tr>
    <tr>
      <td></td>
      <td id="6_3_1">0 - 50,000<div class="tasarruf_tutarı">  <label>
            <input type="radio" name="RadioGroup6" value="0 - 50,000TL arası" class="tasarruf_tutari_radyo" id="RadioGroup6_0" required="">
           </label>  </div></td>
     
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td id="6_3_2">50,001 - 250,000<div class="tasarruf_tutarı">   <label>
            <input type="radio" name="RadioGroup6" value="50,001 250,000TL arası" class="tasarruf_tutari_radyo" id="RadioGroup6_1">
           </label>  </div></td>
     		</tr>
    <tr>
      <td>&nbsp;</td>
      <td id="6_3_3">250,001 - 1,000,000<div class="tasarruf_tutarı">   <label>
            <input type="radio" name="RadioGroup6" value="250,001 - 1,000,000TL arası" class="tasarruf_tutari_radyo" id="RadioGroup6_2"></label></div></td>
     
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td id="6_3_4">1,000,001 ve üstü<div class="tasarruf_tutarı"> <label>
            <input type="radio" name="RadioGroup6" value="1,000,001TL ve üstü" class="tasarruf_tutari_radyo" id="RadioGroup6_3"> </label> </div></td>
     
    </tr>
    </tbody></table>
    </div>
    <div class="tablo9"> 
    <table width="600" border="3">
    <tbody><tr>
      <td style="text-align:center; color:blue;" width="40px">d</td>
      <td colspan="2"><em><strong>Kredi borcu, ipotek gibi ödemek zorunda olduğunuz belli bir mali yükümlülük var mı? Varsa tutarı (TL)?</strong></em></td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td id="6_4_1">Yok<div class="borç_durumu"> <label>
            <input type="radio" name="RadioGroup7" value="BorcuYok" class="borc_durumu_radyo" id="RadioGroup7_0" required=""> </label> </div></td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td id="6_4_2">Var<div class="borç_durumu"> <label>
            <input type="radio" name="RadioGroup7" value="BorcuVar" class="borc_durumu_radyo" id="RadioGroup7_1"> </label> </div></td>
      
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td class="özel">TL Tutarını Aşağıdaki Kutucuğa Giriniz (Borcunuz Yoksa Lütfen Kutucuğa "0" Yazınız)<div><input type="text" name="BorcMiktari" style="background-color: #C6E730; width: 250px; height: 18px; font-size:16px;" required=""></div></td>
    </tr>
</tbody></table>
</div>
<div class="tablo10"> 
    <table width="600" border="3">
    <tbody><tr>
      <th width="40px">6</th>
      <th colspan="2" style="background-color:#47D7E5; font-size:20px">Yatırımlarınızı ne kadar süreyle sermaye piyasalarında değerlendirmeyi düşünürsünüz ?</th>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Kısa Vadeli (0 - 6 ay)<div class="yatırım_süresi">  <label>
            <input type="radio" name="RadioGroup8" value="Kısa Vade" class="yatirim_süresi_radyo" id="RadioGroup8_0" required=""> </label> </div></td>
     
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Orta Vadeli (6 - 12 ay)<div class="yatırım_süresi">  <label>
            <input type="radio" name="RadioGroup8" value="Orta Vade" class="yatirim_süresi_radyo" id="RadioGroup8_1"> </label> </div></td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Uzun Vadeli (1 - 3 yıl)<div class="yatırım_süresi">  <label>
            <input type="radio" name="RadioGroup8" value="Uzun Vade" class="yatirim_süresi_radyo" id="RadioGroup8_2"> </label> </div></td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Daha Uzun Vadeli (3 Yıldan Uzun)<div class="yatırım_süresi"> <label>
            <input type="radio" name="RadioGroup8" value="Daha Uzun Vade" class="yatirim_süresi_radyo" id="RadioGroup8_3"> </label>  </div></td>
      
    </tr>
   </tbody></table>
   </div>
   <div class="tablo11"> 
    <table width="600" border="3">
    <tbody><tr>
      <th width="40px">7</th>
      <th style="background-color:#47D7E5; font-size:20px">Risk ve getiri tercihiniz nedir?</th>
     
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Olabildiğince riskten kaçınır, güvenli yatırım araçlarını tercih eder, az ama düzenli bir getiri sağlamayı tercih ederim. <strong>(Anaparam aynen korunsun)<div class="risk_tercihi">  <label>
            <input type="radio" name="RadioGroup9" value="Ana Param Aynen Korunsun" class="risk_ve_getiri_tercihi_radyo" id="RadioGroup9_0" required=""> </label>  </div></strong></td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Enflasyonun üzerinde getiri beklentisiyle, yatırımımda düşük riskli ürünlere yatırım yapabilirim.<strong>(Anaparadan çok az bir miktar kaybetmeyi göze alabilirim)</strong><div class="risk_tercihi"> <label>
            <input type="radio" name="RadioGroup9" value="Ana Paradan Çok Az Bir Miktar Kaybedebilirim" class="risk_ve_getiri_tercihi_radyo" id="RadioGroup9_1"> </label>   </div></td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Genel olarak orta riskli ürünleri tercih etmekle beraber, uzun vadede toplam getirimi artırmak amacıyla, riskli ürünlere makul ölçüde yatırım yapabilirim. <strong>(Anaparadan bir miktar kaybetmeyi göze alabilirim)</strong><div class="risk_tercihi">  <label>
            <input type="radio" name="RadioGroup9" value="Ana Paradan Bir Miktar Kaybedebilirim" class="risk_ve_getiri_tercihi_radyo" id="RadioGroup9_2"> </label>  </div> </td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Yüksek getiri beklentisiyle, her türlü riskteki ürüne yatırım yapabilirim <strong>(Anaparadan kaybetmeyi göze alabilirim)</strong><div class="risk_tercihi">  <label>
            <input type="radio" name="RadioGroup9" value="Ana Paradan Kaybetmeyi Göze Alabilirim" class="risk_ve_getiri_tercihi_radyo" id="RadioGroup9_3"> </label>  </div></td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Çok yüksek getiri isterim ve çok yüksek riskli ürünlere yatırım yapabilirim. Gelişmiş yatırım ürünlerinin riskleri konusunda bilgiliyim ve bu ürünlere yatırım yapabilirim. <strong>(Anaparayı tamamen kaybetmeyi göze alabilirim)</strong><div class="risk_tercihi">   <label>
            <input type="radio" name="RadioGroup9" value="Ana Parayı Tamamen Kaybetmeyi Göze Alabilirim" class="risk_ve_getiri_tercihi_radyo" id="RadioGroup9_4"> </label> </div></td></tr>
 
</tbody></table>

<div></div>
<div class="tablo12">
<table width="988" border="1">
 
    <tbody><tr>
      <th width="218" height="100 px" class="tablo2başlık">Hangi ürünlerde daha önce yatırım yaptınız, ne sıklıkta yatırım yaptınız ve bu ürünlerdeki geçmiş 1 yıllık dönemdeki işlem hacminiz ne kadardır?</th>
      <th colspan="3" class="ürünbilgisi">Ürün Bilgisi</th>
      <th colspan="3" class="ürünbilgisi">İşlem Sıklığı</th>
      <th colspan="3" class="ürünbilgisi2">İşlem Hacmi (TL)</th>
    </tr>
    <tr>
      <th height="100 px" class="ürünbilgisi2">İlgili Ürün</th>
      <th width="80" class="başlıklar1">Ürün Hakkında Bilgim Yok</th>
      <th width="72" class="başlıklar1">Ürün Hakkında Bilgim Kısıtlı</th>
      <th width="72" class="başlıklar1" style="border-right-width:medium; border-right-color:red;">Ürün Hakkında Yeterince Bilgim Var</th>
      <th width="83" class="başlıklar2">Nadiren (Yılda Birkaç Defa)</th>
      <th width="82" class="başlıklar2">Arasıra (Ayda Birkaç Defa)</th>
      <th width="89" class="başlıklar2" style="border-right-width:medium; border-right-color:red;">Sıklıkla (Haftada Birkaç Defa)</th>
      <th width="72" class="başlıklar3">1 - 50,000</th>
      <th width="75" class="başlıklar3">50,001 - 500,000</th>
      <th width="81" widtwh="92" class="başlıklar3">500,001 ve üzeri</th>
    </tr>
    <tr>
      <th height="150 px" class="çokdüşük">Çok Düşük Riskli (Repo-Ters Repo, BPP, Para Piyasası Fonu, Yatırımcı Bilgi Formunda Risk Değeri 1 olan yatırım fonları vb.)</th>
      <td class="12_1_1" id="1"> <div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup10" value="Ürün Hakkında Bilgim Yok" class="10" id="RadioGroup10_0" required=""> </label></div></td>
      <td class="12_1_1" id="1"><div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup10" value="Ürün Hakkında Bilgim Kısıtlı" class="10" id="RadioGroup10_1"> </label></div></td>
      <td class="12_1_1" id="1" style="border-right-color:red; border-right-width:medium;"><div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup10" value="Urun Hakkında Yeterince Bilgim Var" class="10" id="RadioGroup10_2"> </label></div></td> 
      <td class="12_1_2"><div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup11" value="Nadiren" class="10" id="RadioGroup11_0" required=""> </label></div></td>
      <td class="12_1_2"><div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup11" value="Ara sıra" class="10" id="RadioGroup11_1"> </label></div></td>
      <td class="12_1_2" style="border-right-color:red; border-right-width:medium;"><div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup11" value="Sıklıkla" class="10" id="RadioGroup11_2"> </label></div></td>
      <td class="12_1_3"><div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup12" value="1 - 50,000TL arası" class="10" id="RadioGroup12_0" required=""> </label></div></td>
      <td class="12_1_3"><div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup12" value="50,001 - 500,000TL arası" class="10" id="RadioGroup12_1"> </label></div></td>
      <td class="12_1_3"><div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup12" value="500,001TL ve Üzeri" class="10" id="RadioGroup12_2"> </label></div></td>
    </tr>
    <tr>
      <th height="150 px" class="düşükrisk">Düşük Riskli (Hazine Bonosu, Devlet Tahvili, Hazine Kira Sertifikaları,Yatırımcı Bilgi Formunda Risk Değeri 2 ve 3 olan yatırım fonları, vb.)</th>
      <td class="12_2_1"><div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup13" value="Ürün Hakkında Bilgim Yok" class="10" id="RadioGroup13_0" required=""> </label></div></td>
      <td class="12_2_1"><div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup13" value="Ürün Hakkında Bilgim Kısıtlı" class="10" id="RadioGroup13_1"> </label></div></td>
      <td class="12_2_1" style="border-right-color:red; border-right-width:medium;"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup13" value="Urun Hakkında Yeterince Bilgim Var" class="10" id="RadioGroup13_2"> </label></div> </td>
      <td class="12_2_2"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup14" value="Nadiren" class="10" id="RadioGroup14_0" required=""> </label></div> </td>
      <td class="12_2_2"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup14" value="Ara sıra" class="10" id="RadioGroup14_1"> </label></div> </td>
      <td class="12_2_2" style="border-right-color:red; border-right-width:medium;"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup14" value="Sıklıkla" class="10" id="RadioGroup14_2"> </label></div> </td>
      <td class="12_2_3"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup15" value="1 - 50,000TL arası" class="10" id="RadioGroup15_0" required=""> </label></div></td>
      <td class="12_2_3"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup15" value="50,001 - 500,000TL arası" class="10" id="RadioGroup15_1"> </label></div></td>
      <td class="12_2_3"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup15" value="500,001TL ve Üzeri" class="10" id="RadioGroup15_2"> </label></div></td>
    </tr>
    <tr>
      <th height="150 px" class="ortarisk">Orta Riskli (Ortaklık Payı, Eurobond, Dövizli Tahviller, Özel Sektör Borçlanma Araçları, Kira Sertifikaları, Yatırımcı Bilgi Formunda Risk Değeri 4 olan yatırım fonları,  vb.)</th>
      <td class="12_3_1"><div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup16" value="Ürün Hakkında Bilgim Yok" class="10" id="RadioGroup16_0" required=""> </label></div></td>
      <td class="12_3_1"><div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup16" value="Ürün Hakkında Bilgim Kısıtlı" class="10" id="RadioGroup16_1"> </label></div></td>
      <td class="12_3_1" style="border-right-color:red; border-right-width:medium;"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup16" value="Urun Hakkında Yeterince Bilgim Var" class="10" id="RadioGroup16_2"> </label></div></td>
      <td class="12_3_2"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup17" value="Nadiren" class="10" id="RadioGroup17_0" required=""> </label></div> </td>
      <td class="12_3_2"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup17" value="Ara sıra" class="10" id="RadioGroup17_1"> </label></div></td>
      <td class="12_3_2" style="border-right-color:red; border-right-width:medium;"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup17" value="Sıklıkla" class="10" id="RadioGroup17_2"> </label></div></td>
      <td class="12_3_3"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup18" value="1 - 50,000TL arası" class="10" id="RadioGroup18_0" required=""> </label></div></td>
      <td class="12_3_3"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup18" value="50,001 - 500,000TL arası" class="10" id="RadioGroup18_1"> </label></div></td>
      <td class="12_3_3"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup18" value="500,001TL ve Üzeri" class="10" id="RadioGroup18_2"> </label></div></td>
    </tr>
    <tr>
      <th height="150 px" class="yüksekrisk">Yüksek Riskli (Türev İşlemler (Vadeli İşlem ve Opsiyon Piyasasında), Varant, Yatırım Kuruluşu Sertifikası , Yatırımcı Bilgi Formunda Risk Değeri 5 ve 6 olan yatırım fonları, vb.)</th>
      <td class="12_4_1"><div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup19" value="Ürün Hakkında Bilgim Yok" class="10" id="RadioGroup19_0" required=""> </label></div></td>
      <td class="12_4_1"><div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup19" value="Ürün Hakkında Bilgim Kısıtlı" class="10" id="RadioGroup19_1"> </label></div></td>
      <td class="12_4_1" style="border-right-color:red; border-right-width:medium;"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup19" value="Urun Hakkında Yeterince Bilgim Var" class="10" id="RadioGroup19_2"> </label></div></td>
      <td class="12_4_2"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup20" value="Nadiren" class="10" id="RadioGroup20_0" required=""> </label></div></td>
      <td class="12_4_2"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup20" value="Ara sıra" class="10" id="RadioGroup20_1"> </label></div></td>
      <td class="12_4_2" style="border-right-color:red; border-right-width:medium;"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup20" value="Sıklıkla" class="10" id="RadioGroup20_2"> </label></div></td>
      <td class="12_4_3"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup21" value="1 - 50,000TL arası" class="10" id="RadioGroup21_0" required=""> </label></div></td>
      <td class="12_4_3"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup21" value="50,001 - 500,000TL arası" class="10" id="RadioGroup21_1"> </label></div></td>
      <td class="12_4_3"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup21" value="500,001TL ve Üzeri" class="10" id="RadioGroup21_2"> </label></div></td>
    </tr>
    <tr>
      <th height="150 px" class="çokyüksek">Çok Yüksek Riskli (Tezgahüstü Türev İşlemler, Yapılandırılmış Borçlanma Araçları, Kaldıraçlı Alım Satım İşlemleri – FX, Yatırımcı Bilgi Formunda Risk Değeri 7 olan yatırım fonları vb.)</th>
      <td class="12_5_1"><div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup22" value="Ürün Hakkında Bilgim Yok" class="10" id="RadioGroup22_0" required=""> </label></div></td>
      <td class="12_5_1"><div class="son_radyolar"><label>
            <input type="radio" name="RadioGroup22" value="Ürün Hakkında Bilgim Kısıtlı" class="10" id="RadioGroup22_1"> </label></div></td>
      <td class="12_5_1" style="border-right-color:red; border-right-width:medium;"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup22" value="Urun Hakkında Yeterince Bilgim Var" class="10" id="RadioGroup22_2"> </label></div></td>
      <td class="12_5_2"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup23" value="Nadiren" class="10" id="RadioGroup23_0" required=""> </label></div></td>
      <td class="12_5_2"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup23" value="Ara sıra" class="10" id="RadioGroup23_1"> </label></div></td>
      <td class="12_5_2" style="border-right-color:red; border-right-width:medium;"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup23" value="Sıklıkla" class="10" id="RadioGroup23_2"> </label></div></td>
      <td class="12_5_3"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup24" value="1 - 50,000TL arası" class="10" id="RadioGroup24_0" required=""> </label></div></td>
      <td class="12_5_3"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup24" value="50,001 - 500,000TL arası" class="10" id="RadioGroup24_1"> </label></div></td>
      <td class="12_5_3"><div class="son_radyolar"><label>
     <input type="radio" name="RadioGroup24" value="500,001TL ve Üzeri" class="10" id="RadioGroup24_2"> </label></div></td>
    </tr>
 
</tbody></table>
</div>

<div class="son_yazı">
Yukarıda verdiğim bilgilerin doğru olduğunu, bu bilgiler çerçevesinde yapılacak değerlendirme sonucunda, kurumunuzun sunduğu bireysel portföy yöneticiliği veya yatırım danışmanlığı hizmetlerini tercih etmemin faydalı olacağı konusunda bilgilendirildiğimi beyan ederim. <br>
    <strong>Müşterinin AdıSoyadı/ Ticari Ünvanı:</strong><br>
    <strong>Tarih:</strong><br>
    <strong>İmzası:</strong>
   </div>

<br>

<div><input type="button" value="Yazdır" class="yazdır"> </div> <br>

<div class="gönder"><input type="submit" class="gönder" value="Gönder"></div> <br>
<pre id="result">
<footer style="color:white; text-align:center; background-color:#688CBE;">Bu websitesi <strong>Şeker Yatırım Menkul Değerler A.Ş.</strong> tarafından tasarlanmıştır.Tüm hakları saklıdır.</footer>
</pre>




</div></form></div></body></html>