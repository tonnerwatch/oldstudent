<?php
session_start();
ob_start();
include('mysql_connect.php');
include('../template/template-1.php');
?>
<meta charset="utf-8">
<title>แก้ไขข้อมูลผู้ดูแลระบบ</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="../assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="../assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME LAYOUT STYLES -->

<script language="JavaScript">
    function chkLanguage(ele)
    {
        var vchar = String.fromCharCode(event.keyCode);
        if ((vchar<'a' || vchar>'z') && (vchar<'0' || vchar>'9')) return false;
        ele.onKeyPress=vchar;
    }
</script>

<script language="JavaScript">
    function chkNumber(ele)
    {
        var vchar = String.fromCharCode(event.keyCode);
        if ((vchar<'0' || vchar>'9')) return false;
        ele.onKeyPress=vchar;
    }
</script>

<?php include_once('../template/template-2.php'); ?>
<!-- BEGIN BODY -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->
        <div class="theme-panel hidden-xs hidden-sm">
        </div>
        <!-- END THEME PANEL -->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title"> บัญชี
            <small>ผู้ดูแลระบบ</small>
        </h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div class="profile-sidebar">
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet ">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">
                            <?php
                            $IDCard = $_SESSION['ID_CARD'];
                            $sql = "SELECT * FROM detail_admin WHERE ID_CARD = '$IDCard'";
                            $result = mysqli_query($link, $sql);
                            $data = mysqli_fetch_assoc($result);

                            $img = $data['IMAGE'];
                            $fullname = $data['FIRSTNAME'] . " " . $data['LASTNAME'];
                            $firstname = $data['FIRSTNAME'];
                            $lastname = $data['LASTNAME'];
                            $gender = $data['GENDER'];
                            $birthday = $data['BIRTHDAY'];
                            $idcard = $data['ID_CARD'];
                            $address = $data['ADDRESS'];
                            $tel = $data['PHONE'];
                            $email = $data['EMAIL'];
                            ?>
                            <img src="<?php echo $img; ?>" class="img-responsive" alt=""> </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name"> <?php echo $fullname; ?> </div>
                            <div class="profile-usertitle-job">  </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">
                        </div>
                        <!-- END MENU -->
                    </div>
                    <!-- END PORTLET MAIN -->
                </div>
                <!-- END BEGIN PROFILE SIDEBAR -->
                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light ">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption caption-md">
                                        <i class="icon-globe theme-font hide"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase">บัญชีโปรไฟล์</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" data-toggle="tab">ข้อมูลส่วนบุคคล</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_2" data-toggle="tab">เปลี่ยนรูปภาพ</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_3" data-toggle="tab">เปลี่ยนรหัสผ่าน</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <!-- PERSONAL INFO TAB -->
                                        <div class="tab-pane active" id="tab_1_1">
                                            <form role="form" method="post">
                                                <div class="form-group">
                                                    <label class="control-label">ชื่อ</label>
                                                    <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>" maxlength="50" /> </div>
                                                <div class="form-group">
                                                    <label class="control-label">นามสกุล</label>
                                                    <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>" maxlength="50" /> </div>
                                                <div class="form-group">
                                                    <label class="control-label">เพศ</label>
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="gender" value="ชาย" <?php if($gender == "ชาย"){ echo "checked"; } ?> /> ชาย
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="gender" value="หญิง" <?php if($gender == "หญิง"){ echo "checked"; } ?> /> หญิง
                                                            <span></span>
                                                        </label>
                                                    </div> </div>
                                                <div class="form-group">
                                                    <label class="control-label">วันเดือนปีเกิด
                                                    </label>
                                                    <input type="text" class="form-control form-control-inline date-picker" name="birthday" value="<?php echo $birthday; ?>" />
                                                    </div>
                                                <div class="form-group">
                                                    <label class="control-label">หมายเลขประจำตัวประชาชน</label>
                                                    <input type="text" value="<?php echo $idcard; ?>" class="form-control" disabled /> </div>
                                                <div class="form-group">
                                                    <label class="control-label">ที่อยู่</label>
                                                    <textarea class="form-control" rows="3" name="address"><?php echo $address; ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">เบอร์โทรศัพท์</label>
                                                    <input type="text" name="phone" value="<?php echo $tel; ?>" class="form-control" maxlength="10" /> </div>
                                                <div class="form-group">
                                                    <label class="control-label">อีเมล์</label>
                                                    <input type="text" name="email" value="<?php echo $email; ?>" class="form-control" maxlength="20" /> </div>
                                                <div class="margiv-top-10">
                                                    <button name="submit1" class="btn green"> เปลี่ยนแปลง </button>
                                                    <a href="javascript:;" class="btn default"> ยกเลิก </a>
                                                </div>
                                            </form>
                                            <?php
                                            if(isset($_POST['submit1'])){
                                                $sql = "UPDATE detail_admin SET FIRSTNAME = '$_POST[firstname]', LASTNAME = '$_POST[lastname]', GENDER = '$_POST[gender]', BIRTHDAY = '$_POST[birthday]', ADDRESS = '$_POST[address]', PHONE = '$_POST[phone]', EMAIL = '$_POST[email]' WHERE ID_CARD = '$IDCard'";
                                                $result = mysqli_query($link, $sql);
                                            }
                                            ?>
                                        </div>
                                        <!-- END PERSONAL INFO TAB -->
                                        <!-- CHANGE AVATAR TAB -->
                                        <div class="tab-pane" id="tab_1_2">
                                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. </p>
                                            <form method="post" role="form" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <div>
                                                                            <span class="btn default btn-file">
                                                                                <span class="fileinput-new"> Select image </span>
                                                                                <span class="fileinput-exists"> Change </span>
                                                                                <input type="file" name="image"> </span>
                                                            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix margin-top-10">
                                                        <span class="label label-danger">โน็ต! </span>
                                                        <span>ภาพตัวอย่างจะทำงานเฉพาะใน IE10 + FF3.6 + Safari6.0 + Chrome6.0 + และ Opera11.1 + ในเบราว์เซอร์รุ่นเก่าชื่อไฟล์จะแสดงแทน </span>
                                                    </div>
                                                </div>
                                                <div class="margin-top-10">
                                                    <button name="submit2" class="btn green"> เปลี่ยนแปลง </button>
                                                    <a href="javascript:;" class="btn default"> ยกเลิก </a>
                                                </div>
                                            </form>
                                            <?php
                                            if(isset($_POST['submit2'])){
                                                if(is_uploaded_file($_FILES['image']['tmp_name'])){
                                                    $ext = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
                                                    $filename = "img/" . $IDCard . "." . $ext;
                                                } else {
                                                    $filename = $img;
                                                }

                                                $sql = "UPDATE detail_admin SET image = '$filename' WHERE ID_CARD = '$IDCard'";
                                                $result = mysqli_query($link, $sql);

                                                move_uploaded_file($_FILES['image']['tmp_name'],$filename);
                                            }
                                            ?>

                                        </div>
                                        <!-- END CHANGE AVATAR TAB -->
                                        <!-- CHANGE PASSWORD TAB -->
                                        <div class="tab-pane" id="tab_1_3">
                                            <form method="post">
                                                <div class="form-group">
                                                    <label class="control-label">รหัสผ่านเก่า</label>
                                                    <input type="password" name="password" class="form-control" /> </div>

                                                <div class="form-group">
                                                    <label class="control-label">รหัสผ่านใหม่</label>
                                                    <input type="password" name="npassword" class="form-control" /> </div>
                                                <div class="form-group">
                                                    <label class="control-label">ยืนยันรหัสผ่านใหม่</label>
                                                    <input type="password" name="rpassword" class="form-control" /> </div>
                                                <div class="margin-top-10">
                                                    <button class="btn green" name="submit3"> เปลี่ยนแปลง </button>
                                                    <a href="javascript:;" class="btn default"> ยกเลิก </a>
                                                </div>
                                            </form>
                                            <?php
                                            if(isset($_POST['submit3'])){
                                                $sql = "SELECT PASSWORD FROM username WHERE ID_CARD = '$IDCard'";
                                                $result = mysqli_query($link, $sql);
                                                $data = mysqli_fetch_assoc($result);

                                                if($_POST['password'] != $data['PASSWORD']){
                                                    echo "<span style='color:red;'>" . "รหัสผ่านเก่าไม่ถูกต้อง" . "</span>";
                                                } else {
                                                    if($_POST['npassword'] != $_POST['rpassword']){
                                                        echo "<span style='color:red;'>" . "รหัสใหม่ไม่ตรงกัน" . "</span>";
                                                    } else {
                                                        $sql = "UPDATE username SET PASSWORD = '$_POST[npassword]' WHERE ID_CARD = '$IDCard'";
                                                        $result = mysqli_query($link, $sql);
                                                    }
                                                }
                                            }
                                            ?>
                                        </div>
                                        <!-- END CHANGE PASSWORD TAB -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PROFILE CONTENT -->
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->

<!-- END BODY -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->

<!-- BEGIN CORE PLUGINS -->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/pages/scripts/profile.min.js" type="text/javascript"></script>
<script src="../assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<?php
include_once('../template/template-3.php');
mysqli_close($link);
?>
