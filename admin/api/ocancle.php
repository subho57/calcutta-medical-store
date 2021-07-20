<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../assets/vendor/autoload.php';
require 'db.php';

$getkey = $con->query("select * from setting")->fetch_assoc();
define('API_KEY', $getkey['sendgrid_key']);
define('API_EMAIL', $getkey['sendgrid_email']);
define('CALL', $getkey['callsupport']);
define('ONE_KEY', $getkey['one_key']);
define('ONE_HASH', $getkey['one_hash']);

$data = json_decode(file_get_contents('php://input'), true);
if ($data['uid'] == '' or $data['oid'] == '') {
  $returnArr = array("ResponseCode" => "401", "Result" => "false", "ResponseMsg" => "Something Went Wrong!");
} else {
  $uid = strip_tags(mysqli_real_escape_string($con, $data['uid']));
  $oid = strip_tags(mysqli_real_escape_string($con, $data['oid']));
  $con->query("update orders set status='cancelled' where  id=" . $oid . " and uid=" . $uid . "");
  $returnArr = array("ResponseCode" => "200", "Result" => "true", "ResponseMsg" => "Order Cancelled Successfully!");

  $order = $con->query("select * from orders where  id=" . $oid . " and uid=" . $uid . "")->fetch_assoc();
  $c = $con->query("select * from user where id=" . $uid . "")->fetch_assoc();

  // refund policy
  // $con->query("update user set wallet=wallet + " . $order['total'] . " where id=" . $uid . "");
  $heading = array(
    "en" => 'Your order has been cancelled.'
  );
  $content = array(
    "en" => 'Help us figure out what caused you to cancel your order. Please leave us a feedback.'
  );
  $fields = array(
    'app_id' => ONE_KEY,
    'included_segments' => array("Subscribed Users"),
    'filters' => array(array('field' => 'tag', 'key' => 'userId', 'relation' => '=', 'value' => $uid)),
    'headings' => $heading,
    'contents' => $content
  );
  $fields = json_encode($fields);


  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
  curl_setopt(
    $ch,
    CURLOPT_HTTPHEADER,
    array(
      'Content-Type: application/json; charset=utf-8',
      'Authorization: Basic ' . ONE_HASH
    )
  );
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_POST, TRUE);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

  $response = curl_exec($ch);
  curl_close($ch);
  $day = date('l', strtotime($order['order_date']));
  $month = date("F", strtotime($order['order_date']));
  $year = date("Y", strtotime($order['order_date']));
  $d = substr($order['order_date'], 8, 2);

  // PHP Mailer Integration
  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->SMTPDebug = SMTP::DEBUG_OFF;
  $mail->Host = 'smtp.hostinger.com';
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';
  $mail->SMTPAutoTLS = true;
  $mail->SMTPAuth = true;
  $mail->Username = API_EMAIL;
  $mail->Password = API_KEY;
  $mail->isHTML(true);
  $mail->setFrom(API_EMAIL, 'Calcutta Medical Stores');
  $mail->addReplyTo(API_EMAIL, 'Calcutta Medical Stores');
  $mail->addAddress($c['email'], $c['name']);
  $mail->Subject = "Your order " . $order['oid'] . " has been cancelled.";
  $mail->msgHTML("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
        <html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" style=\"width:100%;font-family:arial, 'helvetica neue', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0\">
         <head> 
          <meta charset=\"UTF-8\"> 
          <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"> 
          <meta name=\"x-apple-disable-message-reformatting\"> 
          <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> 
          <meta content=\"telephone=no\" name=\"format-detection\"> 
          <title>Order Cancelled</title> 
          <style type=\"text/css\">
        #outlook a {
            padding:0;
        }
        .ExternalClass {
            width:100%;
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height:100%;
        }
        .es-button {
            mso-style-priority:100!important;
            text-decoration:none!important;
        }
        a[x-apple-data-detectors] {
            color:inherit!important;
            text-decoration:none!important;
            font-size:inherit!important;
            font-family:inherit!important;
            font-weight:inherit!important;
            line-height:inherit!important;
        }
        .es-desk-hidden {
            display:none;
            float:left;
            overflow:hidden;
            width:0;
            max-height:0;
            line-height:0;
            mso-hide:all;
        }
        @media only screen and (max-width:600px) {p, ul li, ol li, a { font-size:16px!important; line-height:150%!important } h1 { font-size:30px!important; text-align:center; line-height:120% } h2 { font-size:26px!important; text-align:center; line-height:120% } h3 { font-size:20px!important; text-align:center; line-height:120% } h1 a { font-size:30px!important } h2 a { font-size:26px!important } h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class=\"gmail-fix\"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } a.es-button, button.es-button { font-size:20px!important; display:block!important; border-width:10px 0px 10px 0px!important } }
        </style> 
         </head> 
         <body style=\"width:100%;font-family:arial, 'helvetica neue', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0\"> 
          <div class=\"es-wrapper-color\" style=\"background-color:#F6F6F6\"> 
           <table class=\"es-wrapper\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top\"> 
             <tr style=\"border-collapse:collapse\"> 
              <td valign=\"top\" style=\"padding:0;Margin:0\"> 
               <table class=\"es-header\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top\"> 
                 <tr style=\"border-collapse:collapse\"> 
                  <td align=\"center\" style=\"padding:0;Margin:0\"> 
                   <table class=\"es-header-body\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\"> 
                     <tr style=\"border-collapse:collapse\"> 
                      <td style=\"padding:40px;Margin:0;background-color:#FFFFFF\" bgcolor=\"#ffffff\" align=\"left\"> 
                       <table class=\"es-left\" cellspacing=\"0\" cellpadding=\"0\" align=\"left\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\"> 
                         <tr style=\"border-collapse:collapse\"> 
                          <td class=\"es-m-p20b\" align=\"center\" style=\"padding:0;Margin:0;width:204px\"> 
                           <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                             <tr style=\"border-collapse:collapse\"> 
                              <td class=\"es-m-txt-l\" align=\"left\" style=\"padding:0;Margin:0;font-size:0px\"><img src=\"https://admin.calcuttamedicalstore.in/" . $fset['logo'] . "\" alt style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\" width=\"103\" height=\"103\"></td> 
                             </tr> 
                           </table></td> 
                          <td class=\"es-hidden\" style=\"padding:0;Margin:0;width:5px\"></td> 
                         </tr> 
                       </table> 
                       <table class=\"es-left\" cellspacing=\"0\" cellpadding=\"0\" align=\"left\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\"> 
                         <tr style=\"border-collapse:collapse\"> 
                          <td class=\"es-m-p20b\" align=\"left\" style=\"padding:0;Margin:0;width:141px\"> 
                           <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                             <tr style=\"border-collapse:collapse\"> 
                              <td valign=\"top\" align=\"right\" style=\"padding:0;Margin:0;padding-right:10px;padding-top:20px;width:30px;font-size:0px\"><img src=\"https://owrnhh.stripocdn.email/content/guids/CABINET_b07b88d99bde76e46a2396d11f306432/images/26531551864324009.png\" alt style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\" width=\"26\" height=\"26\"></td> 
                              <td align=\"left\" style=\"padding:0;Margin:0\"> 
                               <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                                 <tr style=\"border-collapse:collapse\"> 
                                  <td align=\"left\" style=\"padding:0;Margin:0;padding-top:20px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333\"><a href=\"tel:" . CALL . "\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:14px;text-decoration:underline;color:#2D2D2D\">" . CALL . "</a></p></td> 
                                 </tr> 
                               </table></td> 
                             </tr> 
                           </table></td> 
                         </tr> 
                       </table> 
                       <table class=\"es-right\" cellspacing=\"0\" cellpadding=\"0\" align=\"right\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right\"> 
                         <tr style=\"border-collapse:collapse\"> 
                          <td align=\"left\" style=\"padding:0;Margin:0;width:165px\"> 
                           <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                             <tr style=\"border-collapse:collapse\"> 
                              <td valign=\"top\" align=\"right\" style=\"padding:0;Margin:0;padding-right:10px;padding-top:20px;width:30px;font-size:0px\"><img src=\"https://owrnhh.stripocdn.email/content/guids/CABINET_b07b88d99bde76e46a2396d11f306432/images/4801551865294269.png\" alt style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\" width=\"26\" height=\"26\"></td> 
                              <td align=\"left\" style=\"padding:0;Margin:0\"> 
                               <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                                 <tr style=\"border-collapse:collapse\"> 
                                  <td align=\"left\" style=\"padding:0;Margin:0;padding-top:20px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333\"><a target=\"_blank\" href=\"mailto:" . API_EMAIL . "\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:14px;text-decoration:underline;color:#2D2D2D\">" . API_EMAIL . "</a></p></td> 
                                 </tr> 
                               </table></td> 
                             </tr> 
                           </table></td> 
                         </tr> 
                       </table> 
                      </td> 
                     </tr> 
                     <tr style=\"border-collapse:collapse\"> 
                      <td align=\"left\" style=\"padding:0;Margin:0;padding-left:40px;padding-right:40px\"> 
                       <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                         <tr style=\"border-collapse:collapse\"> 
                          <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0;width:520px\"> 
                           <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                             <tr style=\"border-collapse:collapse\"> 
                              <td align=\"center\" style=\"padding:0;Margin:0;padding-bottom:15px;font-size:0\"> 
                               <table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                                 <tr style=\"border-collapse:collapse\"> 
                                  <td style=\"padding:0;Margin:0;border-bottom:1px solid #CCCCCC;background:none;height:1px;width:100%;margin:0px\"></td> 
                                 </tr> 
                               </table></td> 
                             </tr> 
                           </table></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     <tr style=\"border-collapse:collapse\"> 
                      <td align=\"left\" style=\"padding:0;Margin:0;padding-left:40px;padding-right:40px\"> 
                       <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-left\" align=\"left\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\"> 
                         <tr style=\"border-collapse:collapse\"> 
                          <td class=\"es-m-p20b\" align=\"left\" style=\"padding:0;Margin:0;width:250px\"> 
                           <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                             <tr style=\"border-collapse:collapse\"> 
                              <td align=\"left\" style=\"padding:0;Margin:0;padding-top:40px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333\"><strong>Hello " . strtok($c['name'], " ") . ",</strong></p></td> 
                             </tr> 
                           </table></td> 
                         </tr> 
                       </table> 
                       <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-right\" align=\"right\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right\"> 
                         <tr style=\"border-collapse:collapse\"> 
                          <td align=\"left\" style=\"padding:0;Margin:0;width:250px\"> 
                           <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                             <tr style=\"border-collapse:collapse\"> 
                              <td align=\"right\" style=\"padding:0;Margin:0\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333\"><span style=\"font-size:27px\"><strong>Order Cancelled</strong></span><br><br>Order " . $order['oid'] . "</p></td> 
                             </tr> 
                           </table></td> 
                         </tr> 
                       </table> 
                      </td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <table class=\"es-content\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%\"> 
                 <tr style=\"border-collapse:collapse\"> 
                  <td align=\"center\" style=\"padding:0;Margin:0\"> 
                   <table class=\"es-content-body\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\"> 
                     <tr style=\"border-collapse:collapse\"> 
                      <td align=\"left\" style=\"padding:0;Margin:0;padding-left:40px;padding-right:40px\"> 
                       <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                         <tr style=\"border-collapse:collapse\"> 
                          <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0;width:520px\"> 
                           <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                             <tr style=\"border-collapse:collapse\"> 
                              <td align=\"left\" style=\"padding:0;Margin:0;padding-top:20px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333\"><br>Your Order has been cancelled. To manage other orders, please open Calcutta Medical Stores App.<br><br></p></td> 
                             </tr> 
                           </table></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     <tr style=\"border-collapse:collapse\"> 
                      <td align=\"left\" style=\"padding:0;Margin:0;padding-left:40px;padding-right:40px\"> 
                       <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                         <tr style=\"border-collapse:collapse\"> 
                          <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0;width:520px\"> 
                           <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                             <tr style=\"border-collapse:collapse\"> 
                              <td align=\"left\" style=\"padding:0;Margin:0;padding-top:15px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:27px;color:#E23744\"><strong>Cancelled Order Details</strong></p></td> 
                             </tr> 
                           </table></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     <tr style=\"border-collapse:collapse\"> 
                      <td align=\"left\" style=\"padding:0;Margin:0;padding-left:40px;padding-right:40px\"> 
                       <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                         <tr style=\"border-collapse:collapse\"> 
                          <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0;width:520px\"> 
                           <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                             <tr style=\"border-collapse:collapse\"> 
                              <td align=\"center\" style=\"padding:0;Margin:0;padding-bottom:20px;font-size:0\"> 
                               <table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                                 <tr style=\"border-collapse:collapse\"> 
                                  <td style=\"padding:0;Margin:0;border-bottom:1px solid #CCCCCC;background:none;height:1px;width:100%;margin:0px\"></td> 
                                 </tr> 
                               </table></td> 
                             </tr> 
                           </table></td> 
                         </tr>
                       </table></td> 
                     </tr> 
                     <tr style=\"border-collapse:collapse\"> 
                      <td align=\"left\" style=\"padding:0;Margin:0;padding-left:40px;padding-right:40px\"> 
                       <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                         <tr style=\"border-collapse:collapse\"> 
                          <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0;width:520px\"> 
                           <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                             <tr style=\"border-collapse:collapse\"> 
                              <td align=\"left\" style=\"padding:0;Margin:0\"> 
                               <table border=\"0\" cellspacing=\"1\" cellpadding=\"1\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:500px\" class=\"cke_show_border\" role=\"presentation\"> 
                                 <tr style=\"border-collapse:collapse\"> 
                                  <td style=\"padding:0;Margin:0;font-size:12px\">Order " . $order['oid'] . "<br><br></td> 
                                  <td style=\"padding:0;Margin:0;font-size:12px\"><br><br></td> 
                                 </tr> 
                                 <tr style=\"border-collapse:collapse\"> 
                                  <td style=\"padding:0;Margin:0;font-size:12px\">Placed on " . $day . ", " . $month . " " . $d . ", " . $year . "<br><br></td> 
                                  <td style=\"padding:0;Margin:0;font-size:12px\"><br><br></td> 
                                 </tr> 
                               </table></td> 
                             </tr> 
                           </table></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     <tr style=\"border-collapse:collapse\"> 
                      <td align=\"left\" style=\"padding:0;Margin:0;padding-left:40px;padding-right:40px\"> 
                       <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                         <tr style=\"border-collapse:collapse\"> 
                          <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0;width:520px\"> 
                           <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                             <tr style=\"border-collapse:collapse\"> 
                              <td align=\"left\" style=\"padding:0;Margin:0\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333\"><br><br>Manage other orders with the&nbsp;<a target=\"_blank\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:14px;text-decoration:underline;color:#E23744\" href=\"https://play.google.com/store/apps/details?id=in.calcuttamedicalstore\">Calcutta Medical Stores</a>.<br><br></p><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333\">We hope to see you again soon!<br><br><b>Calcutta Medical Stores</b><br><br></p></td> 
                             </tr> 
                             <tr style=\"border-collapse:collapse\"> 
                              <td align=\"center\" style=\"padding:20px;Margin:0;font-size:0\"> 
                               <table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                                 <tr style=\"border-collapse:collapse\"> 
                                  <td style=\"padding:0;Margin:0;border-bottom:1px solid #CCCCCC;background:none;height:1px;width:100%;margin:0px\"></td> 
                                 </tr> 
                               </table></td> 
                             </tr> 
                           </table></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <table class=\"es-footer\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top\"> 
                 <tr style=\"border-collapse:collapse\"> 
                  <td align=\"center\" style=\"padding:0;Margin:0\"> 
                   <table class=\"es-footer-body\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\"> 
                     <tr style=\"border-collapse:collapse\"> 
                      <td align=\"left\" style=\"padding:0;Margin:0;padding-left:40px;padding-right:40px\"> 
                       <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                         <tr style=\"border-collapse:collapse\"> 
                          <td align=\"center\" valign=\"top\" style=\"padding:0;Margin:0;width:520px\"> 
                           <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                             <tr style=\"border-collapse:collapse\"> 
                              <td align=\"left\" style=\"padding:0;Margin:0\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:9px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333\"><br>This email was sent from a notification-only address that cannot accept incoming email. Please do not reply to this message.<br></p></td> 
                             </tr> 
                           </table></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table> 
          </div>  
         </body>
        </html>"
  );
  $mail->AltBody = "Your order " . $order['oid'] . " has been cancelled.

  Help us figure out what caused you to cancel your order.

  Please provide us with a feedback in the App.

  Calcutta Medical Stores.
  ";
  $mail->send();
}
echo json_encode($returnArr);
