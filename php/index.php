<?php
    $masoffer_url = '';
    if (!empty($_POST)) {

        $BASE_URL = 'https://go.masoffer.net/v0/';

        $publisher_id = $_POST['publisher_id'];
        $offer_id = $_POST['offer_id'];
        $aff_sub1 = $_POST['aff_sub1'];
        $aff_sub2 = $_POST['aff_sub2'];
        $aff_sub3 = $_POST['aff_sub3'];
        $aff_sub4 = $_POST['aff_sub4'];
        $url = $_POST['url'];

        $masoffer_url = $BASE_URL . "$offer_id/$publisher_id/?aff_sub1=$aff_sub1&aff_sub2=$aff_sub2&aff_sub3=$aff_sub3&aff_sub4=$aff_sub4&go=" . urlencode($url);
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>MasOffer Link API Example</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet"/>

</head>

<body class="components-page">

    <div class="wrapper">

    <div class="main main-raised">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tim-container">
                            <!-- buttons row -->
                            <div class="tim-row" id="buttons-row">
                                <form action="" method="post">
                                    <h2>Tạo link MasOffer</h2>
                                    <legend></legend>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group label-floating has-info">
                                                <label class="control-label">Id của Pub</label>
                                                <input type="text" name="publisher_id" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 dropdown">
                                            <div class="form-group label-floating has-info">
                                                <select class="form-control" name="offer_id">
                                                    <option value="adayroi">Adayroi</option>
                                                    <option value="lazada">Lazada</option>
                                                    <option value="tiki">Tiki</option>
                                                    <option value="vienthonga">Viễn Thông A</option>
                                                    <option value="nguyenkim">Nguyễn Kim</option>
                                                    <option value="hcenter">Home Center</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group label-floating has-info">
                                                <label class="control-label">Nguồn chiến dịch </label>
                                                <input type="text" name="aff_sub1" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group label-floating has-info">
                                                <label class="control-label">Cách tiếp thị</label>
                                                <input type="text" name="aff_sub2" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group label-floating has-info">
                                                <label class="control-label">Tên chiến dịch</label>
                                                <input type="text" name="aff_sub3" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group label-floating has-info">
                                                <label class="control-label">Nội dung chiến dịch</label>
                                                <input type="text" name="aff_sub4" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group label-floating has-info">
                                                <label class="control-label">Link dẫn đến trang đích</label>
                                                <input type="url" name="url" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 text-right">
                                            <div class="form-group">
                                                <button class="btn btn-info">Tạo link</button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if ($masoffer_url != ''):?>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="alert alert-success">
                                                    <div class="container-fluid">
                                                        <div class="alert-icon">
                                                            <i class="material-icons">check</i>
                                                        </div>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                                        </button>
                                                        <b>Link bạn đã được tạo:</b> <a href="<?php echo $masoffer_url?>"><?php echo $masoffer_url?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </form>
                            </div>
                            <!--  end row -->
                        </div>
                        <!-- end row -->
                        <!-- end container -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>
</body>
</html>
