<!DOCTYPE html>
<html>
<head>
<title>Joe Bloggs - Curriculum Vitae</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
<meta charset="UTF-8"> 

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="../assets/global/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="../assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="../assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME LAYOUT STYLES -->

<link type="text/css" rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
<?php
	$id = $_GET['id'];
	
	include('mysql_connect.php');
	
	$sql = "SELECT * FROM detail_student WHERE ID = '" . $id . "'";
	$result = mysqli_query($link, $sql);
	$data = mysqli_fetch_assoc($result);
	
	$image = $data['IMAGE'];
	$fullname = $data['FIRSTNAME'] . " " . $data['LASTNAME'];
	$generation = $data['GENERATION'];
	$email = $data['EMAIL'];
	$facebook = $data['FACEBOOK'];
	$line = $data['LINE'];
	$tel = $data['PHONE'];
	$nickname = $data['NICKNAME'];
	$home = $data['ADDRESSHOME'];
	$work = $data['ADDRESSWORK'];
	$birthday = $data['BIRTHDAY'];
	$idcard = $data['ID_CARD'];
?>
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			<img src="<?php echo $image; ?>" alt="<?php echo $fullname; ?>" />
		</div>
		
		<div id="name">
			<h1 class="quickFade delayTwo" style="font-size: 30px;"><?php echo $fullname; ?></h1>
			<h2 class="quickFade delayThree" style="font-size: 20px;">รุ่นที่ <?php echo $generation; ?></h2>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li><a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-mail tooltips" data-original-title="Mail"></a> <?php echo $email; ?></li>
				<li><a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-facebook tooltips" data-original-title="Facebook"></a> <?php echo $facebook; ?></li>
				<li><a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-lanyrd tooltips" data-original-title="Lanyrd"></a> <?php echo $line; ?></li>
				<li><a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-chimein tooltips" data-original-title="Chimein"></a> <?php echo $tel; ?></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1 style="font-size: 20px;">ประวัติ</h1>
				</div>
				
				<div class="sectionContent">
					<h2 style="font-size: 20px;">ชื่อเล่น</h2>
					<p><?php echo $nickname; ?></p>
					<h2 style="font-size: 20px;">รหัสบัตรประชาชน</h2>
					<p><?php echo $idcard; ?></p>
					<h2 style="font-size: 20px;">เดือน/วัน/ปี(เกิด)</h2>
					<p><?php echo $birthday; ?></p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1 style="font-size: 20px;">ประวัติทางการศึกษา</h1>
			</div>
			
			<div class="sectionContent">
				<article>
					<h2 style="font-size: 20px;">ระดับชั้นมัธยมต้น</h2>
					<p><?php echo $data['JHSYEAR']; ?> - <?php echo $data['JHSNAME']; ?></p>
				</article>
				
				<article>
					<h2 style="font-size: 20px;">ระดับชั้นมัธยมปลาย/ปวช.</h2>
					<p><?php echo $data['SHSYEAR']; ?> - <?php echo $data['SHSNAME']; ?></p>
				</article>
				
				<article>
					<h2 style="font-size: 20px;">ระดับปริญาตรีหรือสูงกว่า/ปวส.</h2>
					<p><?php echo $data['COLLEGEYEAR']; ?> - <?php echo $data['COLLEGENAME']; ?></p>
				</article>
			</div>
			<div class="clear"></div>
		</section>
		
		<section>
			<div class="sectionTitle">
				<h1 style="font-size: 20px;">ที่อยู่</h1>
			</div>
			
			<div class="sectionContent">
				<article>
					<h2 style="font-size: 20px;">ที่อยู่ปัจจุบัน</h2>
					<p class="subDetails"></p>
					<p><?php echo $home; ?></p>
				</article>
				
				<article>
					<h2 style="font-size: 20px;">ที่อยู่ที่ทำงาน</h2>
					<p class="subDetails"></p>
					<p><?php echo $work; ?></p>
				</article>
			</div>
			<div class="clear"></div>
		</section>
		
	</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<!-- BEGIN CORE PLUGINS -->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>