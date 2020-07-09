<?php

function request($url, $token = null, $data = null, $pin = null, $otpsetpin = null, $uuid = null){

    $header[] = "Host: api.gojekapi.com";
    $header[] = "User-Agent: okhttp/3.10.0";
    $header[] = "Accept: application/json";
    $header[] = "Accept-Language: id-ID";
    $header[] = "Content-Type: application/json; charset=UTF-8";
    $header[] = "X-AppVersion: 3.30.2";
    $header[] = "X-UniqueId: ".time()."57".mt_rand(1000,9999);
    $header[] = "Connection: keep-alive";
    $header[] = "X-User-Locale: id_ID";
    $header[] = "X-Location: -8.673".mt_rand(100,999).",115.21".mt_rand(1000,9999);
    $header[] = "X-Location-Accuracy: 3.0";
    if ($pin):
    $header[] = "pin: $pin";
        endif;
    if ($token):
    $header[] = "Authorization: Bearer $token";
    endif;
    if ($otpsetpin):
    $header[] = "otp: $otpsetpin";
    endif;
    if ($uuid):
    $header[] = "User-uuid: $uuid";
    endif;
    $c = curl_init("https://api.gojekapi.com".$url);
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        if ($data):
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        curl_setopt($c, CURLOPT_POST, true);
        endif;
        curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_HEADER, true);
        curl_setopt($c, CURLOPT_HTTPHEADER, $header);
        $response = curl_exec($c);
        $httpcode = curl_getinfo($c);
        if (!$httpcode)
            return false;
        else {
            $header = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
            $body   = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
        }
        $json = json_decode($body, true);
        return $body;
    }
    function save($filename, $content)
    {
        $save = fopen($filename, "a");
        fputs($save, "$content\r\n");
        fclose($save);
    }
    function nama()
        {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/african_name.php");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $ex = curl_exec($ch);
        // $rand = json_decode($rnd_get, true);
        preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
        return $name[2][mt_rand(0, 14) ];
        }
    function getStr($a,$b,$c){
        $a = @explode($a,$c)[1];
        return @explode($b,$a)[0];
    }
    function getStr1($a,$b,$c,$d){
            $a = @explode($a,$c)[$d];
            return @explode($b,$a)[0];
    }
    function color($color = "default" , $text)
        {
            $arrayColor = array(
                'grey'      => '1;30',
                'red'       => '1;31',
                'green'     => '1;32',
                'yellow'    => '1;33',
                'blue'      => '1;34',
                'purple'    => '1;35',
                'nevy'      => '1;36',
                'white'     => '1;0',
            );  
            return "\033[".$arrayColor[$color]."m".$text."\033[0m";
        }
    function fetch_value($str,$find_start,$find_end) {
        $start = @strpos($str,$find_start);
        if ($start === false) {
            return "";
        }
        $length = strlen($find_start);
        $end    = strpos(substr($str,$start +$length),$find_end);
        return trim(substr($str,$start +$length,$end));
    }
    
    



date_default_timezone_set('Asia/Jakarta');
// include "init.php";
echo "\e[97m::::::::::::::::::::::::::::::::::::::::::::\n";
echo "\e[97m::::::::::::::\e[92mldkOKXXNNXXKOkdl\e[97m::::::::::::::\n";
echo "\e[97m:::::::::::\e[92md0NMMMMMMMMMMMMMMMMN0d\e[97m:::::::::::\n";
echo "\e[97m::::::::\e[92mcONMMMMMMMMMMMMMMMMMMMMMMNOc\e[97m::::::::\n";
echo "\e[97m::::::\e[92mcOWMMMMMMMMWX0OOOO0XWMMMMMMMMWOc\e[97m::::::\n";
echo "\e[97m:::::\e[92moNMMMMMMMXkl\e[97m::::::::::\e[92mlkXMMMMMMMNo\e[97m:::::\n";
echo "\e[97m::::\e[92moWMMMMMMXo\e[97m::::::\e[92mlool\e[97m::::::\e[92moXMMMMMMWo\e[97m::::\n";
echo "\e[97m:::\e[92mcNMMMMMM0\e[97m::::\e[92mcxKWMMMMWKxc\e[97m::::\e[92m0MMMMMMNc\e[97m:::\n";
echo "\e[97m:::\e[92mkMMMMMMX\e[97m::::\e[92mlXMMMMMMMMMMXl\e[97m::::\e[92mXMMMMMMk\e[97m:::\n";
echo "\e[97m:::\e[92mKMMMMMMx\e[97m::::\e[92mKMMMMMMMMMMMMK\e[97m::::\e[92mxMMMMMMK\e[97m:::\n";
echo "\e[97m:::\e[92mXMMMMMMd\e[97m::::\e[92mNMMMMMMMMMMMMNc\e[97m:::\e[92mdMMMMMMX\e[97m:::\n";
echo "\e[97m:::\e[92m0MMMMMMO\e[97m::::\e[92mkMMMMMMMMMMMMk\e[97m::::\e[92mOMMMMMM0\e[97m:::\n";
echo "\e[97m:::\e[92moMMMMMMWo\e[97m::::\e[92mxNMMMMMMMMNx\e[97m::::\e[92moWMMMMMMo\e[97m:::\n";
echo "\e[97m::::\e[92m0MMMMMMWd\e[97m:::::\e[92mok0KK0ko\e[97m:::::\e[92mdWMMMMMM0\e[97m::::\n";
echo "\e[97m::::\e[92mcKMMMMMMMKdc\e[97m::::::::::::\e[92mcdKMMMMMMMKc\e[97m::::\n";
echo "\e[97m::::::\e[92mxNMMMMMMMWKkl\e[97m::::::\e[92mlkKWMMMMMMMNx\e[97m::::::\n";
echo "\e[97m:::::::\e[92mcOWMMMMMMMMWx\e[97m::::\e[92mxWMMMMMMMMWOc\e[97m:::::::\n";
echo "\e[97m:::::::::\e[92mckXMMMMMMMx\e[97m::::\e[92mxMMMMMMMXkc\e[97m:::::::::\n";
echo "\e[97m::::::::::::\e[92mlxOKX0d\e[97m::::::\e[92md0XKOxl\e[97m::::::::::::\n";
echo "\e[97m::::::::::::::::::::::::::::::::::::::::::::\n";
echo "\n";
echo color("green","▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
echo color("white","[•]  Time  : ".date('[d-m-Y] [H:i:s]')."   \n");
echo color("green","▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
echo color("white","[•]              ᎩᏬᎴᎥᏕᏖᎥᏒᏗ       \n");
echo color("green","▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
echo color("white","[•]            @Amartapura91              \n");
echo color("green","▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
function change(){
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        ulang:
        echo color("white","(•) Nomor : ");
        $no = trim(fgets(STDIN));
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$no.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("green","+] Kode verifikasi sudah di kirim")."\n";
        otp:
        echo color("white","?] Otp: ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("green","+] Berhasil mendaftar");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo "\n".color("white","+] Your access token : ".$token."\n");
        save("token.txt",$token);
        echo "\n".color("white","?] Mau Redeem Voucher?: y/n ");
        $pilihan = trim(fgets(STDIN));
        if($pilihan == "y" || $pilihan == "Y"){
        echo color("green","▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬(REDEEM VOUCHER)▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬");
        echo "\n".color("white","!] Claim Vocher ");
        echo "\n".color("green","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(30);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD0607"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","+] Message: ".$message);
        goto goca;
        }else{
        echo "\n".color("red","-] Message: ".$message);
        goca:
        echo "\n".color("white","!] Claim Vocher ");
        echo "\n".color("green","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(10);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD0607"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","+] Message: ".$message);
        }else{
        echo "\n".color("red","-] Message: ".$message);
        sleep(3);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=10&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        echo "\n".color("white","!] Total voucher ".$total." : ");
        echo "\n".color("green","                     1. ".$voucher1);
        echo "\n".color("green","                     2. ".$voucher2);
        echo "\n".color("green","                     3. ".$voucher3);
        echo "\n".color("green","                     4. ".$voucher4);
        echo "\n".color("green","                     5. ".$voucher5);
        echo "\n".color("green","                     6. ".$voucher6);
        echo "\n".color("green","                     7. ".$voucher6);
        echo "\n".color("green","                     8. ".$voucher6);
        echo "\n".color("green","                     9. ".$voucher6);
        echo "\n".color("green","                     10. ".$voucher6);
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
        $expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
        $expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
        $expired10 = getStr1('"expiry_date":"','"',$cekvoucher,'10');
         setpin:
         echo "\n".color("white","?] Mau set pin?: y/n ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("green","▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬( PIN ANDA = 112233 )▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬")."\n";
         $data2 = '{"pin":"112233"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "Otp set pin: ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("red","-] GAGAL!!!\n");
         }
         }
         }
         }else{
         goto setpin;
         }
         }else{
         echo color("red","-] Otp yang anda input salah\n");
         echo color("red","▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬(OTP ULANG)▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
         echo color("white","!] Silahkan input kembali\n");
         goto otp;
         }
         }else{
         echo color("red","NOMOR SUDAH TERDAFTAR/SALAH !!!");
         echo "\nMau ulang? (y/n): ";
         $pilih = trim(fgets(STDIN));
         if($pilih == "y" || $pilih == "Y"){
         echo color("red","▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬(Register)▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
         goto ulang;
         }else{
         echo color("red","▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬(Register)▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
         goto ulang;
  }
 }
}
echo change()."\n"; 
