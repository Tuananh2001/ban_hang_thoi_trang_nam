<?php
session_start();
include ("admin/config/config.php");
function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}

$endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";
// https://test-payment.momo.vn/v2/gateway/api/create

$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$serectkey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
$orderInfo = "Thanh toán qua MoMo";
$amount = "600000";
$orderId = time() . "";
$returnUrl = "http://localhost/web_thoitrangnam_demo/shopCart.php";
$notifyurl = "http://localhost:8000/atm/ipn_momo.php";
// Lưu ý: link notifyUrl không phải là dạng localhost
$bankCode = "SML";

    $orderid = time(). "";
    $requestId = time()."";
    $requestType = "payWithMoMoATM";
    $extraData = "";
    //before sign HMAC SHA256 signature
    $rawHashArr =  array(
                   'partnerCode' => $partnerCode,
                   'accessKey' => $accessKey,
                   'requestId' => $requestId,
                   'amount' => $amount,
                   'orderId' => $orderid,
                   'orderInfo' => $orderInfo,
                   'bankCode' => $bankCode,
                   'returnUrl' => $returnUrl,
                   'notifyUrl' => $notifyurl,
                   'extraData' => $extraData,
                   'requestType' => $requestType
                   );
    // echo $serectkey;die;
    $rawHash = "partnerCode=".$partnerCode."&accessKey=".$accessKey."&requestId=".$requestId."&bankCode=".$bankCode."&amount=".$amount."&orderId=".$orderid."&orderInfo=".$orderInfo."&returnUrl=".$returnUrl."&notifyUrl=".$notifyurl."&extraData=".$extraData."&requestType=".$requestType;
    $signature = hash_hmac("sha256", $rawHash, $serectkey);
    
    $data =  array('partnerCode' => $partnerCode,
                   'accessKey' => $accessKey,
                   'requestId' => $requestId,
                   'amount' => $amount,
                   'orderId' => $orderid,
                   'orderInfo' => $orderInfo,
                   'returnUrl' => $returnUrl,
                   'bankCode' => $bankCode,
                   'notifyUrl' => $notifyurl,
                   'extraData' => $extraData,
                   'requestType' => $requestType,
                   'signature' => $signature);
    $result = execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result,true);  // decode json
    
    
    error_log( print_r( $jsonResult, true ) );
    header('Location: '.$jsonResult['payUrl']);




?>
<form action="" method="post">
<?php
    if(isset($_SESSION['cart1'])){
        $tongtien = 0;
        foreach($_SESSION['cart1'] as $cart_item){
            $thanhtien = $cart_item['soluong'] * $cart_item['gia'];
            $tongtien+=$thanhtien;
            ?>          
                <input type="hidden" value="<?php echo $tongtien ?>" name="tongtien">
            <?php
         } 
    }
?>
</form>