<?php
require 'include/header.php';
?>
<?php

define('ONE_KEY', $fset['one_key']);
define('ONE_HASH', $fset['one_hash']);
function resizeImage($resourceType, $image_width, $image_height, $resizeWidth, $resizeHeight)
{
    // $resizeWidth = 100;
    // $resizeHeight = 100;
    $imageLayer = imagecreatetruecolor($resizeWidth, $resizeHeight);
    $background = imagecolorallocate($imageLayer, 0, 0, 0);
    // removing the black from the placeholder
    imagecolortransparent($imageLayer, $background);

    // turning off alpha blending (to ensure alpha channel information
    // is preserved, rather than removed (blending with the rest of the
    // image in the form of black))
    imagealphablending($imageLayer, false);

    // turning on alpha channel information saving (to ensure the full range
    // of transparency is preserved)
    imagesavealpha($imageLayer, true);
    imagecopyresampled($imageLayer, $resourceType, 0, 0, 0, 0, $resizeWidth, $resizeHeight, $image_width, $image_height);
    return $imageLayer;
}

function sendMessage($title)
{
    $content = array(
        "en" => 'HURRY!! Go Check it out! Product: ' . $title
    );
    $heading = array(
        "en" => 'New Product Launched!! 🤩🤩'
    );

    $fields = array(
        'app_id' => ONE_KEY,
        'included_segments' => array('Subscribed Users'),
        'data' => array('type' => 1),
        'contents' => $content,
        'headings' => $heading
    );

    $fields = json_encode($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic ' . ONE_HASH
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

function sendMessages($title)
{
    $content = array(
        "en" => 'Product: ' . $title . ' is updated'
    );
    $heading = array(
        "en" => 'Product Updated!! Check it out. 🤩🤩'
    );

    $fields = array(
        'app_id' => ONE_KEY,
        'included_segments' => array('Subscribed Users'),
        'data' => array('type' => 1),
        'contents' => $content,
        'headings' => $heading
    );

    $fields = json_encode($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic ' . ONE_HASH
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

?>

<body data-col="2-columns" class=" 2-columns ">
    <div class="layer"></div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">


        <!-- main menu-->
        <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
        <?php include('main.php'); ?>
        <!-- Navbar (Header) Ends-->

        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">
                    <!--Statistics cards Starts-->
                    <?php
                    if (isset($_GET['edit'])) {
                        $selk = $con->query("select * from product where id=" . $_GET['edit'] . "")->fetch_assoc();
                    ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title" id="basic-layout-form">Edit Product</h4>

                                    </div>
                                    <div class="card-body">
                                        <div class="px-3">
                                            <form class="form" method="post" enctype="multipart/form-data">
                                                <div class="form-body">

                                                    <div class="form-group">
                                                        <label for="cname">Product Name</label>
                                                        <input type="text" id="vname" class="form-control" value="<?php echo $selk['pname']; ?>" name="pname" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cname">Product Image</label>
                                                        <input type="file" id="pimg" class="form-control" placeholder="Enter Product Image" name="pimg" accept="image/x-png,image/png,image/jpeg,image/jpg">
                                                        <a href="<?php echo $selk['pimg']; ?>" target="_blank"><img src="<?php echo $selk['pimg']; ?>" width="272" height="153" /></a>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cname">Product Related Image</label>
                                                        <input type="file" id="pimg" class="form-control" placeholder="Enter Product Related Image" name="prel[]" accept="image/x-png,image/png,image/jpeg,image/jpg" multiple>
                                                        <p>Only Upload 3 Images</p>
                                                        <?php $sb = explode(',', $selk['prel']);


                                                        foreach ($sb as $bb) {
                                                            if ($bb == '') {
                                                            } else {
                                                        ?>
                                                                <a href="<?php echo $bb; ?>" target="_blank"><img src="<?php echo $bb; ?>" width="272" height="153" /></a>&emsp;
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="gurl">Seller Name / Shop Name</label>
                                                        <input type="text" id="gurl" class="form-control" placeholder="Enter Seller Name" value="<?php echo $selk['sname']; ?>" name="sname" required>

                                                    </div>

                                                    <div class="form-group">
                                                        <label for="projectinput6">Select Category</label>
                                                        <select id="cat_change" name="catname" class="form-control">

                                                            <?php
                                                            $j = mysqli_fetch_assoc(mysqli_query($con, "select * from category where id=" . $selk['cid'] . ""));
                                                            ?>
                                                            <option value="<?php echo $j['id']; ?>">
                                                                <?php echo $j['catname']; ?></option>
                                                            <?php
                                                            $sk = mysqli_query($con, "select * from category where id !=" . $selk['cid'] . "");
                                                            while ($h = mysqli_fetch_assoc($sk)) {
                                                            ?>
                                                                <option value="<?php echo $h['id']; ?>">
                                                                    <?php echo $h['catname']; ?></option>
                                                            <?php } ?>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="projectinput6">Select SubCategory</label>
                                                        <select id="sub_list" name="subcatname" class="form-control">

                                                            <?php
                                                            $j = mysqli_fetch_assoc(mysqli_query($con, "select * from subcategory where id=" . $selk['sid'] . " and cat_id=" . $selk['cid'] . ""));
                                                            ?>
                                                            <option value="<?php echo $j['id']; ?>">
                                                                <?php echo $j['name']; ?></option>
                                                            <?php
                                                            $sk = mysqli_query($con, "select * from subcategory where id !=" . $selk['sid'] . " and cat_id=" . $selk['cid'] . "");
                                                            while ($h = mysqli_fetch_assoc($sk)) {
                                                            ?>
                                                                <option value="<?php echo $h['id']; ?>">
                                                                    <?php echo $h['name']; ?></option>
                                                            <?php } ?>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="projectinput6">Out OF Stock?</label>
                                                        <select id="projectinput6" name="ostock" class="form-control" required>

                                                            <option <?php if ($selk['stock'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> value="0">Yes</option>
                                                            <option <?php if ($selk['stock'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> value="1">No</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="projectinput63">Send Notification?</label>
                                                        <select id="projectinput63" name="snoti" class="form-control">

                                                            <option value="1">Yes</option>
                                                            <option value="0" selected>No</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="projectinput6">Product Publish Or Unpublish?</label>
                                                        <select id="projectinput6" name="ppuborun" class="form-control">

                                                            <option value="0" <?php if ($selk['status'] == 0) {
                                                                                    echo 'selected';
                                                                                } ?>>Unpublish</option>
                                                            <option <?php if ($selk['status'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> value="1">Publish</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="projectinput6">Make Product Popular?</label>
                                                        <select id="projectinput6" name="popular" class="form-control">

                                                            <option value="0" <?php if ($selk['popular'] == 0) {
                                                                                    echo 'selected';
                                                                                } ?>>No</option>
                                                            <option <?php if ($selk['popular'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> value="1">Yes</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="gurl">Product Small Description</label>
                                                        <textarea class="form-control" name="psdesc" placeholder="Enter Product Small Description" required><?php echo $selk['psdesc']; ?></textarea>

                                                    </div>


                                                    <div class="form-group">
                                                        <label for="gurl">Product Serving(Gms,kg,ltr,ml,pcs)</label>
                                                        <input type="text" id="ptype" class="form-control" name="pgms" value="<?php echo str_replace('$;', ',', $selk['pgms']); ?>" data-role="tagsinput" required>
                                                        <p>After writing Product Type Press Enter</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="gurl">Product Price</label>
                                                        <input type="text" id="pprice" class="form-control" name="pprice" value="<?php echo str_replace('$;', ',', $selk['pprice']); ?>" required>
                                                        <p>After writing Product Price Press Enter</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="gurl">Product discount(Only Digit)</label>
                                                        <input type="text" id="gurl" class="form-control" name="discount_percentage" placeholder="Enter discount in percentage" value="<?php echo $selk['discount']; ?>" required>

                                                    </div>

                                                </div>

                                                <div class="form-actions">

                                                    <button type="submit" name="edit_product" class="btn btn-raised btn-raised btn-primary">
                                                        <i class="fa fa-check-square-o"></i> Edit Product
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            if (isset($_POST['edit_product'])) {
                                $data = $con->query("select * from product where id=" . $_GET['edit'] . "")->fetch_assoc();
                                $pname = mysqli_real_escape_string($con, $_POST['pname']);

                                $sname = $_POST['sname'];
                                $popular = $_POST['popular'];
                                $nvg = "0";
                                $discount = $_POST['discount_percentage'];
                                $catname = $_POST['catname'];
                                $subcatname = $_POST['subcatname'];
                                $ostock = $_POST['ostock'];
                                $snoti = $_POST['snoti'];
                                $psdesc = mysqli_real_escape_string($con, $_POST['psdesc']);
                                $pgms = str_replace(',', '$;', $_POST['pgms']);
                                $pprice = str_replace(',', '$;', $_POST['pprice']);

                                $timestamp = date("Y-m-d H:i:s");
                                $status = $_POST['ppuborun'];

                                if ($_FILES["pimg"]["name"] == '') {
                                    $pimg = $data['pimg'];
                                } else {
                                    $fileName = $_FILES['pimg']['tmp_name'];
                                    echo $_FILES['pimg']['name'];
                                    $sourceProperties = getimagesize($fileName);
                                    $resizeFileName = uniqid() . time();
                                    $uploadPath = "product/";
                                    $fileExt = pathinfo($_FILES['pimg']['name'], PATHINFO_EXTENSION);
                                    $uploadImageType = $sourceProperties[2];
                                    $sourceImageWidth = $sourceProperties[0];
                                    $sourceImageHeight = $sourceProperties[1];
                                    $new_width = $sourceImageWidth;
                                    $new_height = $sourceImageHeight;
                                    switch ($uploadImageType) {
                                        case IMAGETYPE_JPEG:
                                            $resourceType = imagecreatefromjpeg($fileName);
                                            $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                                            imagejpeg($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
                                            break;

                                        case IMAGETYPE_GIF:
                                            $resourceType = imagecreatefromgif($fileName);
                                            $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                                            imagegif($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
                                            break;

                                        case IMAGETYPE_PNG:

                                            $resourceType = imagecreatefrompng($fileName);
                                            $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                                            imagepng($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);

                                            break;

                                        default:
                                            $imageProcess = 0;
                                            break;
                                    }

                                    $pimg = $uploadPath . "thump_" . $resizeFileName . "." . $fileExt;
                                }


                                if (empty($_FILES['prel']['name'][0])) {
                                    $related = $data['prel'];
                                } else {
                                    $arr = array();
                                    foreach ($_FILES['prel']['tmp_name'] as $key => $tmp_name) {
                                        $file_name = $key . $_FILES['prel']['name'][$key];
                                        $file_size = $_FILES['prel']['size'][$key];
                                        $file_tmp = $_FILES['prel']['tmp_name'][$key];

                                        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                                        if (
                                            $file_type != "jpg" && $file_type != "png" && $file_type != "jpeg"
                                            && $file_type != "gif"
                                        ) {
                                            $related = '';
                                        } else {

                                            move_uploaded_file($file_tmp, "product/" . $file_name);
                                            $arr[] = "product/" . $file_name;
                                        }
                                    }
                                    $related = implode(',', $arr);
                                }

                                if ($related == '') {
                                    $related = $data['prel'];
                                }


                                $con->query("update product set pname='" . $pname . "',sname='" . $sname . "',pimg='" . $pimg . "',prel='" . $related . "',popular=" . $popular . ",discount=" . $discount . ",cid=" . $catname . ",sid=" . $subcatname . ",psdesc='" . $psdesc . "',pgms='" . $pgms . "',pprice='" . $pprice . "',status=" . $status . ",stock=" . $ostock . ",nvg=" . $nvg . " where id=" . $_GET['edit'] . "");


                                if ($snoti == 1) {
                                    $title = 'Product ' . $pname . ' Updated';
                                    sendMessages($pname);

                                    $timestamp = date("Y-m-d H:i:s");
                                    // $url = $pimg;
                                    $msg = "Product Updated at our Store";
                                    $con->query("insert into noti(`msg`,`date`,`title`,`img`)values('" . $msg . "','" . $timestamp . "','" . $title . "','" . $pimg . "')");
                                }


                            ?>
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        toastr.options.timeOut = 4500; // 1.5s

                                        toastr.success('Product Updated Successfully!!');
                                        setTimeout(function() {
                                            window.location.href = "productlist.php";
                                        }, 1500);

                                    });
                                </script>
                            <?php

                            }
                            ?>
                        </div>

                    <?php
                    } else {
                    ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title" id="basic-layout-form">Add Product</h4>

                                    </div>
                                    <div class="card-body">
                                        <div class="px-3">
                                            <form class="form" action="#" method="post" enctype="multipart/form-data">
                                                <div class="form-body">

                                                    <div class="form-group">
                                                        <label for="vname">Product Name</label>
                                                        <input type="text" id="vname" class="form-control" placeholder="Enter Product Name" name="pname" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="pimg">Product Image</label>
                                                        <input type="file" id="pimg" class="form-control" placeholder="Enter Product Image" name="pimg" accept="image/x-png,image/png,image/jpeg,image/jpg" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="pimg">Product Related Image</label>
                                                        <input type="file" id="pimg" class="form-control" placeholder="Enter Product Related Image" name="prel[]" accept="image/x-png,image/png,image/jpeg,image/jpg" multiple>
                                                        <p>Upload upto 3 images</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="gurl">Seller Name / Shop Name</label>
                                                        <input type="text" id="gurl" class="form-control" placeholder="Enter Seller Name" name="sname" value="<?php echo $fset['title']; ?>" required>

                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cat_change">Select Category</label>
                                                        <select id="cat_change" name="catname" class="form-control" required>
                                                            <option value="" selected="" disabled="">Select Category
                                                            </option>
                                                            <?php
                                                            $sk = mysqli_query($con, "select * from category");
                                                            while ($h = mysqli_fetch_assoc($sk)) {
                                                            ?>
                                                                <option value="<?php echo $h['id']; ?>">
                                                                    <?php echo $h['catname']; ?></option>
                                                            <?php } ?>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="sub_list">Select SubCategory</label>
                                                        <select id="sub_list" name="subcatname" class="form-control" required>
                                                            <option value="" selected="" disabled="">Select SubCategory
                                                            </option>
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="projectinput6">Out Of Stock?</label>
                                                        <select id="projectinput6" name="ostock" class="form-control">

                                                            <option value="0">Yes</option>
                                                            <option selected="" value="1">No</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="projectinput63">Send Notification?</label>
                                                        <select id="projectinput63" name="snoti" class="form-control">

                                                            <option value="1">Yes</option>
                                                            <option selected="" value="0">No</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="projectinput6">Product Publish Or Unpublish?</label>
                                                        <select id="projectinput6" name="ppuborun" class="form-control">

                                                            <option value="0">Unpublish</option>
                                                            <option selected="" value="1">Publish</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="projectinput6">Make Product Popular?</label>
                                                        <select id="projectinput6" name="popular" class="form-control">

                                                            <option value="1">Yes</option>
                                                            <option selected="" value="0">No</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="psdesc">Product Small Description</label>
                                                        <textarea class="form-control" name="psdesc" placeholder="Enter Product Small Description" required></textarea>

                                                    </div>


                                                    <div class="form-group">
                                                        <label for="ptype">Product Serving(Strip,pcs,ml)</label>
                                                        <input type="text" id="ptype" class="form-control" name="pgms" value="1 Strip" data-role="tagsinput" required>
                                                        <p>After writing Product Type Press Enter</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="pprice">Product Price</label>
                                                        <input type="text" id="pprice" class="form-control" value="100" name="pprice" data-role="tagsinput" required>
                                                        <p>After writing Product Price Press Enter</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="gurl">Product discount (Only Digit)</label>
                                                        <input type="number" id="gurl" class="form-control" name="discount_percentage" placeholder="Enter discount in percentage ex. 5" required>

                                                    </div>

                                                </div>

                                                <div class="form-actions">

                                                    <button type="submit" name="sub_product" class="btn btn-raised btn-raised btn-primary">
                                                        <i class="fa fa-check-square-o"></i> Save Product
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            if (isset($_POST['sub_product'])) {
                                if (count($_FILES['prel']['name']) > 3) {
                            ?>
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            toastr.options.timeOut = 4500; // 1.5s

                                            toastr.error('Upload upto 3 images at max');
                                            // setTimeout(function() {
                                            //     window.location.href = "productlist.php";
                                            // }, 1500);
                                        });
                                    </script>
                                <?php
                                } else {
                                    $pname = mysqli_real_escape_string($con, $_POST['pname']);
                                    $sname = $_POST['sname'];
                                    $nvg = "0";
                                    $catname = $_POST['catname'];
                                    $subcatname = $_POST['subcatname'];
                                    $ostock = $_POST['ostock'];
                                    $snoti = $_POST['snoti'];
                                    $psdesc = mysqli_real_escape_string($con, $_POST['psdesc']);
                                    $pgms = str_replace(',', '$;', $_POST['pgms']);
                                    $popular = $_POST['popular'];
                                    $pprice = str_replace(',', '$;', $_POST['pprice']);

                                    $timestamp = date("Y-m-d H:i:s");
                                    $status = $_POST['ppuborun'];
                                    $discount = $_POST['discount_percentage'];

                                    $fileName = $_FILES['pimg']['tmp_name'];
                                    $sourceProperties = getimagesize($fileName);
                                    $resizeFileName = time();
                                    $uploadPath = "product/";
                                    $fileExt = pathinfo($_FILES['pimg']['name'], PATHINFO_EXTENSION);
                                    $uploadImageType = $sourceProperties[2];
                                    $sourceImageWidth = $sourceProperties[0];
                                    $sourceImageHeight = $sourceProperties[1];
                                    $new_width = $sourceImageWidth;
                                    $new_height = $sourceImageHeight;
                                    switch ($uploadImageType) {
                                        case IMAGETYPE_JPEG:
                                            $resourceType = imagecreatefromjpeg($fileName);
                                            $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                                            imagejpeg($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
                                            break;

                                        case IMAGETYPE_GIF:
                                            $resourceType = imagecreatefromgif($fileName);
                                            $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                                            imagegif($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
                                            break;

                                        case IMAGETYPE_PNG:

                                            $resourceType = imagecreatefrompng($fileName);
                                            $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                                            imagepng($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);

                                            break;

                                        default:
                                            $imageProcess = 0;
                                            break;
                                    }

                                    $url = $uploadPath . "thump_" . $resizeFileName . "." . $fileExt;
                                    if (!empty($_FILES['prel']['name'][0])) {
                                        $arr = array();
                                        foreach ($_FILES['prel']['tmp_name'] as $key => $tmp_name) {
                                            $file_name = $key . $_FILES['prel']['name'][$key];
                                            $file_size = $_FILES['prel']['size'][$key];
                                            $file_tmp = $_FILES['prel']['tmp_name'][$key];

                                            $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                                            if (
                                                $file_type != "jpg" && $file_type != "png" && $file_type != "jpeg"
                                                && $file_type != "gif"
                                            ) {
                                                $related = '';
                                            } else {

                                                move_uploaded_file($file_tmp, "product/" . $file_name);
                                                $arr[] = "product/" . $file_name;
                                            }
                                        }
                                        $related = implode(',', $arr);
                                    } else {
                                        $related = '';
                                    }
                                    $con->query("insert into product(`pname`,`pimg`,`prel`,`sname`,`cid`,`sid`,`psdesc`,`pgms`,`pprice`,`date`,`status`,`stock`,`discount`,`popular`,`nvg`)values('" . $pname . "','" . $url . "','" . $related . "','" . $sname . "'," . $catname . "," . $subcatname . ",'" . $psdesc . "','" . $pgms . "','" . $pprice . "','" . $timestamp . "'," . $status . "," . $ostock . "," . $discount . "," . $popular . "," . $nvg . ")");

                                    if ($snoti == 1) {
                                        sendMessage($pname);

                                        $timestamp = date("Y-m-d H:i:s");
                                        $title = 'New Medcine ' . $pname . ' added';
                                        // $url = 'no_url';
                                        $msg = "New Medicine Inserted At Our Store.";
                                        $con->query("insert into noti(`msg`,`date`,`title`,`img`)values('" . $msg . "','" . $timestamp . "','" . $title . "','" . $url . "')");
                                    }
                                ?>
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            toastr.options.timeOut = 4500; // 1.5s
                                            toastr.success('Product Inserted Successfully!!');

                                        });
                                    </script>
                            <?php

                                }
                            }
                            ?>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>



        </div>
    </div>

    <?php
    require 'include/js.php';
    ?>


    <script>
        $(document).on('change', '#cat_change', function() {
            var value = $(this).val();

            $.ajax({
                type: 'post',
                url: 'getsub.php',
                data: {
                    catid: value
                },
                success: function(data) {
                    $('#sub_list').html(data);
                }
            });
        });
    </script>

    <script>
        $('#ptype').tagsinput('items');
        $('#pprice').tagsinput('items');
    </script>
</body>


</html>