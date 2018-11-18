<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets2/assets/images/favicon.png">
    <title>Nice admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets2/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets2/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="<?php echo base_url();?>Welcome/index/" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="<?php echo base_url();?>assets2/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="<?php echo base_url();?>assets2/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="<?php echo base_url();?>assets2/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="<?php echo base_url();?>assets2/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-more"></i>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <?php include 'atas.php'; ?>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<?php include 'menu.php'; ?>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Dashboard</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo base_url();?>Welcome/index/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sales Ratio</h4>
                        <div class="sales ct-charts mt-3"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card card-body">
                        <div class="form-group">
                            <label>Upload Gambar Untuk Cek Kematangan Sawit Tanpa Kotak</label>
                            <?php echo form_open_multipart('welcome/aksi_upload');?>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success" value="upload">Upload</button>
                                <?php echo $this->session->flashdata('Gagal'); ?>
                                <?php echo $this->session->flashdata('Berhasil'); ?>
                            </div>
                        </div>
                        <?php
                        require_once __DIR__ . '\php-ml\vendor\autoload.php';

                        use Phpml\Classification\KNearestNeighbors;
                        $data=$this->db->query("SELECT r,g,b,label FROM `datatraining`")->result_array();
                        $array=[];
                        $label=[];
                                // print_r($data);
                        for ($i=0; $i < count($data); $i++) { 
                            $arrayName = array(0 => $data[$i]['r'],1=>$data[$i]['g'],2=>$data[$i]['b'] );
                                    //print_r($arrayName);
                            $array[$i]=$arrayName;
                            $label[$i]=$data[$i]['label'];
                        }
                                //print_r($array);

                        $samples = $array;
                                //print_r($samples);
                        $labels = $label;

                        $classifier = new KNearestNeighbors();
                        $classifier->train($samples, $labels);
                        if (isset($r)) {
                            echo $classifier->predict([$r, $g,$b]);
                        }
                        
                        ?>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Email campaign chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Ravenue - page-view-bounce rate -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">                        
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Ravenue - page-view-bounce rate -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Comments</h4>
                </div>
                <div class="comment-widgets" style="height:430px;">
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row m-t-0">
                        <div class="p-2">
                            <img src="<?php echo base_url();?>assets2/assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle">
                        </div>
                        <div class="comment-text w-100">
                            <h6 class="font-medium">James Anderson</h6>
                            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                            <div class="comment-footer">
                                <span class="text-muted float-right">April 14, 2016</span>
                                <span class="label label-rounded label-primary">Pending</span>
                                <span class="action-icons">
                                    <a href="javascript:void(0)">
                                        <i class="ti-pencil-alt"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="ti-check"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="ti-heart"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2">
                            <img src="<?php echo base_url();?>assets2/assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle">
                        </div>
                        <div class="comment-text active w-100">
                            <h6 class="font-medium">Michael Jorden</h6>
                            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                            <div class="comment-footer ">
                                <span class="text-muted float-right">April 14, 2016</span>
                                <span class="label label-success label-rounded">Approved</span>
                                <span class="action-icons active">
                                    <a href="javascript:void(0)">
                                        <i class="ti-pencil-alt"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon-close"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="ti-heart text-danger"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2">
                            <img src="<?php echo base_url();?>assets2/../../assets/images/users/5.jpg" alt="user" width="50" class="rounded-circle">
                        </div>
                        <div class="comment-text w-100">
                            <h6 class="font-medium">Johnathan Doeting</h6>
                            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                            <div class="comment-footer">
                                <span class="text-muted float-right">April 14, 2016</span>
                                <span class="label label-rounded label-danger">Rejected</span>
                                <span class="action-icons">
                                    <a href="javascript:void(0)">
                                        <i class="ti-pencil-alt"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="ti-check"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="ti-heart"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row m-t-0">
                        <div class="p-2">
                            <img src="<?php echo base_url();?>assets2/assets/images/users/5.jpg" alt="user" width="50" class="rounded-circle">
                            <img src="<?php echo base_url();?>assets2/assets/images/users/2.jpg" alt="user" width="50" class="rounded-circle">
                        </div>
                        <div class="comment-text w-100">
                            <h6 class="font-medium">Steve Jobs</h6>
                            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                            <div class="comment-footer">
                                <span class="text-muted float-right">April 14, 2016</span>
                                <span class="label label-rounded label-primary">Pending</span>
                                <span class="action-icons">
                                    <a href="javascript:void(0)">
                                        <i class="ti-pencil-alt"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="ti-check"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="ti-heart"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Temp Guide</h4>
                    <div class="d-flex align-items-center flex-row m-t-30">
                        <div class="display-5 text-info"><i class="wi wi-day-showers"></i> <span>73<sup>°</sup></span></div>
                        <div class="m-l-10">
                            <h3 class="m-b-0">Saturday</h3><small>Ahmedabad, India</small>
                        </div>
                    </div>
                    <table class="table no-border mini-table m-t-20">
                        <tbody>
                            <tr>
                                <td class="text-muted">Wind</td>
                                <td class="font-medium">ESE 17 mph</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Humidity</td>
                                <td class="font-medium">83%</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Pressure</td>
                                <td class="font-medium">28.56 in</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Cloud Cover</td>
                                <td class="font-medium">78%</td>
                            </tr>
                        </tbody>
                    </table>
                    <ul class="row list-style-none text-center m-t-30">
                        <li class="col-3">
                            <h4 class="text-info"><i class="wi wi-day-sunny"></i></h4>
                            <span class="d-block text-muted">09:30</span>
                            <h3 class="m-t-5">70<sup>°</sup></h3>
                        </li>
                        <li class="col-3">
                            <h4 class="text-info"><i class="wi wi-day-cloudy"></i></h4>
                            <span class="d-block text-muted">11:30</span>
                            <h3 class="m-t-5">72<sup>°</sup></h3>
                        </li>
                        <li class="col-3">
                            <h4 class="text-info"><i class="wi wi-day-hail"></i></h4>
                            <span class="d-block text-muted">13:30</span>
                            <h3 class="m-t-5">75<sup>°</sup></h3>
                        </li>
                        <li class="col-3">
                            <h4 class="text-info"><i class="wi wi-day-sprinkle"></i></h4>
                            <span class="d-block text-muted">15:30</span>
                            <h3 class="m-t-5">76<sup>°</sup></h3>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center">
    All Rights Reserved by Nice admin. Designed and Developed by
    <a href="https://wrappixel.com">WrapPixel</a>.
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url();?>assets2/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url();?>assets2/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo base_url();?>assets2/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url();?>assets2/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url();?>assets2/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url();?>assets2/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url();?>assets2/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="<?php echo base_url();?>assets2/assets/libs/chartist/dist/chartist.min.js"></script>
<script src="<?php echo base_url();?>assets2/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo base_url();?>assets2/dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>