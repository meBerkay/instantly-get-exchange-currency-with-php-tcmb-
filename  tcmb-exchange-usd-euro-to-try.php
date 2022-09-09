<?php
 
    include "/database.php";
     
    $open = simplexml_load_file('https://www.tcmb.gov.tr/kurlar/today.xml');
    if (isset($_GET['CronDolarAl'])) {
      $usd_al = $open->Currency[0]->BanknoteBuying;
      $usd_sat = $open->Currency[0]->BanknoteSelling;
      //echo $usd_al;
      if ($usd_al) {
        echo "Veri tabanına kur bilgileri güncellendi. Cron işlemi başarılı !";
      }
      else {
          echo "Veri çekme işlemi yapılamadı!";
      }
    }
    if (isset($_GET['CronDolarSat'])) {
      $usd_al = $open->Currency[0]->BanknoteBuying;
      $usd_sat = $open->Currency[0]->BanknoteSelling;-
      if ($usd_sat) {
        echo "Başarıyla güncellendi! Cron success";
      }
      else {
          echo "Bir hata var, kontrol etmelisin.!";
      }
    }
    if (isset($_GET['CronEuroAl'])) {
 
      $euro_al = $open->Currency[11]->BanknoteBuying;
      $euro_sat = $open->Currency[11]->BanknoteSelling;
      if ($euro_al) {
        echo "Kur verileri veritabanına kaydedildi!";
      }
      else {
          echo "Kaydetme işlemi gerçekleştirilemedi!";
      }
    }
    if (isset($_GET['CronEuroSat'])) {
      $euro_al = $open->Currency[11]->BanknoteBuying;
      $euro_sat = $open->Currency[11]->BanknoteSelling;
      if ($euro_sat) {
        echo "Veritabanına kur verileri başarıyla kaydedildi.";
      }
      else {
          echo "Veritabanına kur verileri çekilirken hata yaşandı. Kontrol edin!";
      }
    }
 
?>
