<?php

if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
$protocol = $_SERVER['SERVER_PROTOCOL'];
if ( ! in_array( $protocol, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0' ) ) ) {
$protocol = 'HTTP/1.0';
}

header( 'Allow: POST' );
header( "$protocol 405 Method Not Allowed" );
header( 'Content-Type: text/plain' );
exit;
}

function bank_information($cardn){
    $cardn = (integer)$cardn;
    if ($cardn == 603799 || $cardn == 170019 || $cardn == 589905) {
      $bankname = "#MELI";  
      $bankinfo = "بانک ملی
⁉️Site: bale.apk
⁉️USSD: *717#  
⁉️TBank: 09622
";
      }elseif ($cardn == 589210) {
        $bankname = "#SEPAH";
        $bankinfo = "بانک سپه
⁉️Site: https://ib.ebanksepah.ir/desktop/sepahPages/shetabCard.sepah
⁉️USSD: #
⁉️TBank: 021 64058
";
      }elseif ($cardn == 627648 || $cardn == 207177) {
        $bankname = "#TOSEE_SADERAT";
        $bankinfo = "بانک توسعه صادرات
⁉️Site: #
⁉️USSD: #
⁉️TBank: 021 2722
";
      }elseif ($cardn == 627961) {
        $bankname = "#SANAT_MADAN";
        $bankinfo = "بانک صنعت و معدن
⁉️Site: #
⁉️USSD: *719#
⁉️TBank: 021 75024
";
      }elseif ($cardn == 603770 || $cardn == 639217) {
        $bankname = "#KESHAVARZI";
        $bankinfo = "بانک کشاورزی
⁉️Site: https://ib.bki.ir/pid46.lmx
⁉️USSD: *730#
⁉️TBank: 09603
";
      }elseif ($cardn == 628023) {
        $bankname = "#MASKAN";
        $bankinfo = "بانک مسکن
⁉️Site: #
⁉️USSD: *714#, *737#
⁉️TBank: 021 64096
";
      }elseif ($cardn == 627760) {
        $bankname = "#POSTBANK";
        $bankinfo = "پست بانک ایران
⁉️Site: #
⁉️USSD: *747#
⁉️TBank: 021 84284
";
      }elseif ($cardn == 502908) {
        $bankname = "#TOSEE_TAAVON";
        $bankinfo = "بانک توسعه تعاون
⁉️Site: https://epayment.ttbank.ir
⁉️USSD: #
⁉️TBank: #
";
      }elseif ($cardn == 627412) {
        $bankname = "#EGHTESAD_NOVIN";
        $bankinfo = "بانک اقتصاد نوین
⁉️Site: https://modern.enbank.net/CustomerManager/viewLogin.html
⁉️USSD: #
⁉️TBank: 021 85292
";
      }elseif ($cardn == 622106 || $cardn == 639194 || $cardn == 627884) {
        $bankname = "#PARSIAN";
        $bankinfo = "بانک پارسیان
⁉️Site: #
⁉️USSD: *708#
⁉️TBank: 021 89111
";
      }elseif ($cardn == 502229 || $cardn == 639347) {
        $bankname = "#PASARGAD";
        $bankinfo = "بانک پاسارگاد
⁉️Site: https://epay.bpi.ir/balanceinquiry.aspx
⁉️USSD: *720#
⁉️TBank: 021 828991111
";
      }elseif ($cardn == 627488 || $cardn == 502910) {
        $bankname = "#KARAFARIN";
        $bankinfo = "بانک کار افرین
⁉️Site: #
⁉️USSD: #
⁉️TBank: 021 23640
";
      }elseif ($cardn == 621986) {
        $bankname = "#SAMAN";
        $bankinfo = "بانک سامان
⁉️Site: #
⁉️USSD: *724#
⁉️TBank: 021 6422
";
      }elseif ($cardn == 639346) {
        $bankname = "#SINA";
        $bankinfo = "بانک سینا
⁉️Site: https://sina24h.com/CustomerService2/viewLogin.html
⁉️USSD: *727#
⁉️TBank: 021 82487
";
      }elseif ($cardn == 639607) {
        $bankname = "#SARMAYE";
        $bankinfo = "بانک سرمایه
⁉️Site: https://pg.sbank.ir/balanceRequest.do
⁉️USSD: #
⁉️TBank: 021 8254
";
      }elseif ($cardn == 636214) {
        $bankname = "#AYANDE";
        $bankinfo = "بانک آینده
⁉️Site: #
⁉️USSD: *745#
⁉️TBank: 021 2957
";
      }elseif ($cardn == 502806 || $cardn == 504706) {
        $bankname = "#SHAHR";
        $bankinfo = "بانک شهر
⁉️Site: https://ebank.city-bank.net/customermanager/viewLogin.html
⁉️USSD: *787#
⁉️TBank: 021 87611
";
      }elseif ($cardn == 502938) {
        $bankname = "#DAY";
        $bankinfo = "بانک دی
⁉️Site: #
⁉️USSD: #
⁉️TBank: 021 2726
";
      }elseif ($cardn == 603769) {
        $bankname = "#SADERAT";
        $bankinfo = "بانک صادرات
⁉️Site: #
⁉️USSD: *719#
⁉️TBank: 09602
";
      }elseif ($cardn == 610433 || $cardn == 991975) {
        $bankname = "#MELLAT";
        $bankinfo = "بانک ملت
⁉️Site: #
⁉️USSD: *720#
⁉️TBank: 021 8132
";
      }elseif ($cardn == 585983) {
        $bankname = "#TEJARAT";
        $bankinfo = "بانک تجارت
⁉️Site: https://pg.tejaratbank.ir/paymentGateway/getBalance
⁉️USSD: #
⁉️TBank: 021 81277
";
      }elseif ($cardn == 589463) {
        $bankname = "#REFAH";
        $bankinfo = "بانک رفاه
⁉️Site: #
⁉️USSD: *729#
⁉️TBank: 021 84043000
";
      }elseif ($cardn == 627381) {
        $bankname = "#ANSAR";
        $bankinfo = "بانک انصار
⁉️Site: https://ebank.ansarbank.com/customermanager/viewLogin.html
⁉️USSD: *763#
⁉️TBank: 021 48049
";
      }elseif ($cardn == 505785) {
        $bankname = "#IRAN_ZAMIN";
        $bankinfo = "بانک ایران زمین
⁉️Site: #
⁉️USSD: #
⁉️TBank: 021 24760
";
      }elseif ($cardn == 636795) {
        $bankname = "#MARKAZI";
        $bankinfo = "بانک مرکزی
⁉️Site: #
⁉️USSD: #
⁉️TBank: #
";
      }elseif ($cardn == 636949) {
        $bankname = "#HEKMAT";
        $bankinfo = "بانک حکمت
⁉️Site: #
⁉️USSD: #
⁉️TBank: 021 89555
";
      }elseif ($cardn == 505416) {
        $bankname = "#GARDESHGARI";
        $bankinfo = "بانک گردشگری
⁉️Site: https://epayment.tourism-bank.com/BalanceInquiry.aspx
⁉️USSD: *764#
⁉️TBank: 021 22630345
";
      }elseif ($cardn == 606373) {
        $bankname = "#QARZOLHASANE";
        $bankinfo = "بانک قرضالحسنه ایران
⁉️Site: https://epayment.rqb.ir/BalanceInquiry.aspx
⁉️USSD: #
⁉️TBank: 021 8528
";
      }elseif ($cardn == 628157) {
        $bankname = "#MOESSE_TOSEE";
        $bankinfo = "موسسه اعتباری توسعه
⁉️Site: #
⁉️USSD: #
⁉️TBank: 021 81461
";
      }elseif ($cardn == 505801) {
        $bankname = "#KOSAR";
        $bankinfo = "بانک کوثر
⁉️Site: #
⁉️USSD: *744#
⁉️TBank: 021 86777
";
      }elseif ($cardn == 639370) {
        $bankname = "#MOSSE_MEHR";
        $bankinfo = "موسسه مهر
⁉️Site: https://modern.qmbi24.com/customermngr/viewLogin.html
⁉️USSD: #
⁉️TBank: 021 8989
";
      }elseif ($cardn == 639599) { 
        $bankname = "#QAVAMIN";
        $bankinfo = "بانک قوامین
⁉️Site: #
⁉️USSD: #
⁉️TBank: 021 84270
";
      }else{
        $bankname = "#FAKE";
        $bankinfo = "CARDFAKE";
    
      }
      return array($bankinfo,$bankname);
}

?>
