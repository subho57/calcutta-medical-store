<?php
require 'db.php';
header('Content-type: text/json');
$data = json_decode(file_get_contents('php://input'), true);

if ($data['pid'] != '') {

    $pid = $data['pid'];
    $query = $con->query("select cid, sid from product where id=" . $pid)->fetch_assoc();
    $cid = $query['cid'];
    $sid = $query['sid'];
    $counter = $con->query("select * from product where cid=" . $cid . " and id!=" . $pid . " and status=1");
    if ($counter->num_rows != 0) {
        $result = array();
        $pp = array();
        $count = 0;
        while ($row = $counter->fetch_assoc()) {

            $result['id'] = $row['id'];
            $result['cat_id'] = $row['cid'];
            $result['subcat_id'] = $row['sid'];
            $result['product_name'] = $row['pname'];
            $result['product_image'] = $row['pimg'];
            $result['product_related_image'] = $row['prel'];
            $result['seller_name'] = $row['sname'];
            $result['short_desc'] = $row['psdesc'];
            $a = explode('$;', $row['pgms']);
            $ab = explode('$;', $row['pprice']);
            $k = array();
            for ($i = 0; $i < count($a); $i++) {
                $k[$i] = array("product_type" => $a[$i], "product_price" => $ab[$i]);
            }

            $result['price'] = $k;
            $result['stock'] = $row['stock'];
            $result['discount'] = $row['discount'];
            $pp[$count++] = $result;
        }
        $returnArr = array("data" => $pp, "ResponseCode" => "200", "Result" => "true", "ResponseMsg" => "Product List Get successfully!");
    } else {
        $returnArr = array("ResponseCode" => "401", "Result" => "false", "ResponseMsg" => "Product Not Found!");
    }
    echo json_encode($returnArr);
} else {
    echo "dont touch";
}
