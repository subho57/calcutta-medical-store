<?php
require '../assets/vendor/autoload.php';
use paytm\paytmchecksum\PaytmChecksum;
require 'db.php';

$data = json_decode(file_get_contents('php://input'), true);

$uid = $data['uid'];
$orderid = $data['orderId'];
$amount = $data['amt'];
if ($uid == '' || $orderid == '' || $amount == '') {
    $returnArr = array("ResponseCode" => "401", "Result" => "false", "ResponseMsg" => "Failed to initiate transaction!");
} else {
    $userInfo = $con->query("select id, name, email, mobile from user where id=$uid");

    if ($userInfo->num_rows != 0) {
        $user = $userInfo->fetch_assoc();
        $paytmCred = $con->query("select cred_title, cred_value from payment_list where title='PayTM'")->fetch_assoc();
        $mid = $paytmCred['cred_title'];
        $Merchant_key = $paytmCred['cred_value'];

        $paytmParams = array();
        $userName = explode(" ", $user['name']);

        $paytmParams["body"] = array(
            "requestType"   => "Payment",
            "mid"           => $mid,
            "websiteName"   => "WEBSTAGING",
            "orderId"       => $orderid,
            "callbackUrl"   => "https://securegw-stage.paytm.in/theia/paytmCallback?ORDER_ID=$orderid",
            "txnAmount"     => array(
                "value"     => $amount,
                "currency"  => "INR",
            ),
            "userInfo"      => array(
                "custId"    => $uid,
                "mobile"    => $user['mobile'],
                "email"     => $user['email'],
                "firstName" => $userName[0],
                "lastName"  => $userName[1]
            )
        );

        /*
        * Generate checksum by parameters we have in body
        * Find your Merchant Key in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys
        */
        $checksum = PaytmChecksum::generateSignature(json_encode($paytmParams["body"], JSON_UNESCAPED_SLASHES), $Merchant_key);

        $paytmParams["head"] = array(
            "version"           => "v1",
            "channelId"         => "WAP",
            "requestTimestamp"  => strval(time()),
            "signature"         => $checksum
        );

        $post_data = json_encode($paytmParams, JSON_UNESCAPED_SLASHES);

        /* for Staging */
        $url = "https://securegw-stage.paytm.in/theia/api/v1/initiateTransaction?mid=$mid&orderId=$orderid";

        /* for Production */
        // $url = "https://securegw.paytm.in/theia/api/v1/initiateTransaction?mid=$mid&orderId=$orderid";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        $response = curl_exec($ch);
        $returnArr = json_decode($response);
    } else {
        $returnArr = array("ResponseCode" => "401", "Result" => "false", "ResponseMsg" => "Unauthorized user!");
    }
}
echo json_encode($returnArr);