<?php
session_start();
ob_start();
include('mysql_connect.php');
include('../template/template-1.php');
?>
<meta charset="utf-8">
<title>Home Page</title>

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
<link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
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

<!-- BEGIN JQUERY -->
<script src="jquery.min.js"></script>
<script>
$(function(){
	$('#generation').change(function(){
		var pid = $(this).val();
		$.get('show-generation.php', {pvid: pid}, function(data){
			$('#se').children().remove().end();
			$('#se').children().end().append(data);
		});
	});
});
</script>
<!-- END JQUERY -->

<?php include_once('../template/template-2.php'); ?>
<!-- BEGIN BODY -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">

        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title">
            <small></small>
        </h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject bold uppercase">ข้อมูลศิษย์เก่า</span>
                            <div>
                            	<select id="generation" class="form-control select2">
                            		<option value="ไม่มี">ทั้งหมด</option>
                            		<?php
									$SQL = "SELECT DISTINCT(GENERATION) FROM detail_student";
									$RESULT = mysqli_query($link, $SQL);
									while($data = mysqli_fetch_array($RESULT)){
										echo "<option value='" . $data['GENERATION'] . "'>" . $data['GENERATION'] . "</option>";
									}
									?>
                            	</select>
                            </div>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="sample_2">
                            <thead>
                            <tr>
                                <th>ลำดับที่</th>
                                <th>ปีการศึกษาที่จบ</th>
                                <th width="100">ชื่อ - นามสกุล</th>
                                <th width="100">ชื่อเล่น</th>
                                <th width="100">หมายเลขโทรศัพท์</th>
                                <th width="100">อีเมล์</th>
                                <th width="100">ไลน์</th>
                                <th width="100">เฟชบุ๊ค</th>
                                <th width="100">รายละเอียด</th>
                                <th width="100">จัดการ</th>
                            </tr>
                            </thead>
                            <tbody id="se">
                            	<?php
									$sql = "SELECT * FROM detail_student ORDER BY YEAR DESC";
									$result = mysqli_query($link, $sql);
									$i = 1;
									while($data = mysqli_fetch_array($result)){
    									echo "<tr>";
    									echo "<td align='center'>" . $i++ . "</td>";
										echo "<td align='center'>" . $data['YEAR'] . "</td>";
    									echo "<td>" . $data['FIRSTNAME'] . " " . $data['LASTNAME'] . "</td>";
    									echo "<td>" . $data['NICKNAME'] . "</td>";
    									echo "<td align='center'>" . $data['PHONE'] . "</td>";
    									echo "<td>" . $data['EMAIL'] . "</td>";
    									echo "<td>" . $data['LINE'] . "</td>";
    									echo "<td>" . $data['FACEBOOK'] . "</td>";
										echo "<td align='center'><a href='detail.php?id=" . $data['ID'] . "' target='_blank'>" . "รายละเอียด" . "</a></td>";
    									echo "<td>" . "<a href='change-oldstudent.php?id=" . $data['ID'] . "'>" . "แก้ไข " . "</a>" . "|" . "<a href='delete.php?id=" . $data['ID'] . "'>" . " ลบ" . "</a></td>";
    									echo "</tr>";
									}
								?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<!-- END BODY -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script>
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
<script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script>var TableDatatablesColreorder=function(){var e=function(){var e=$("#sample_1");e.dataTable({language:{aria:{sortAscending:": activate to sort column ascending",sortDescending:": activate to sort column descending"},emptyTable:"No data available in table",info:"Showing _START_ to _END_ of _TOTAL_ entries",infoEmpty:"No entries found",infoFiltered:"(filtered1 from _MAX_ total entries)",lengthMenu:"_MENU_ entries",search:"Search:",zeroRecords:"No matching records found"},buttons:[{extend:"print",className:"btn dark btn-outline"},{extend:"pdf",className:"btn green btn-outline"},{extend:"csv",className:"btn purple btn-outline "}],responsive:!0,colReorder:{reorderCallback:function(){console.log("callback")}},order:[[0,"asc"]],lengthMenu:[[5,10,15,20,-1],[5,10,15,20,"All"]],pageLength:10,dom:"<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>"})},o=function(){var e=$("#sample_2");e.dataTable({language:{aria:{sortAscending:": activate to sort column ascending",sortDescending:": activate to sort column descending"},emptyTable:"No data available in table",info:"Showing _START_ to _END_ of _TOTAL_ entries",infoEmpty:"",infoFiltered:"(filtered1 from _MAX_ total entries)",lengthMenu:"",search:"",zeroRecords:"No matching records found"},buttons:[],colReorder:{reorderCallback:function(){console.log("callback")}},order:[[0,"asc"]],lengthMenu:[],pageLength:10,dom:"<'row' <'col-md-12'B>><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>"})};return{init:function(){jQuery().dataTable&&(e(),o())}}}();jQuery(document).ready(function(){TableDatatablesColreorder.init()});</script>
<script>
var ComponentsSelect2=function(){var e=function(){function e(e){if(e.loading)return e.text;var t="<div class='select2-result-repository clearfix'><div class='select2-result-repository__avatar'><img src='"+e.owner.avatar_url+"' /></div><div class='select2-result-repository__meta'><div class='select2-result-repository__title'>"+e.full_name+"</div>";return e.description&&(t+="<div class='select2-result-repository__description'>"+e.description+"</div>"),t+="<div class='select2-result-repository__statistics'><div class='select2-result-repository__forks'><span class='glyphicon glyphicon-flash'></span> "+e.forks_count+" Forks</div><div class='select2-result-repository__stargazers'><span class='glyphicon glyphicon-star'></span> "+e.stargazers_count+" Stars</div><div class='select2-result-repository__watchers'><span class='glyphicon glyphicon-eye-open'></span> "+e.watchers_count+" Watchers</div></div></div></div>"}function t(e){return e.full_name||e.text}$.fn.select2.defaults.set("theme","bootstrap");var s="Select a State";$(".select2, .select2-multiple").select2({placeholder:s,width:null}),$(".select2-allow-clear").select2({allowClear:!0,placeholder:s,width:null}),$(".js-data-example-ajax").select2({width:"off",ajax:{url:"https://api.github.com/search/repositories",dataType:"json",delay:250,data:function(e){return{q:e.term,page:e.page}},processResults:function(e,t){return{results:e.items}},cache:!0},escapeMarkup:function(e){return e},minimumInputLength:1,templateResult:e,templateSelection:t}),$("button[data-select2-open]").click(function(){$("#"+$(this).data("select2-open")).select2("open")}),$(":checkbox").on("click",function(){$(this).parent().nextAll("select").prop("disabled",!this.checked)}),$(".select2, .select2-multiple, .select2-allow-clear, .js-data-example-ajax").on("select2:open",function(){if($(this).parents("[class*='has-']").length)for(var e=$(this).parents("[class*='has-']")[0].className.split(/\s+/),t=0;t<e.length;++t)e[t].match("has-")&&$("body > .select2-container").addClass(e[t])}),$(".js-btn-set-scaling-classes").on("click",function(){$("#select2-multiple-input-sm, #select2-single-input-sm").next(".select2-container--bootstrap").addClass("input-sm"),$("#select2-multiple-input-lg, #select2-single-input-lg").next(".select2-container--bootstrap").addClass("input-lg"),$(this).removeClass("btn-primary btn-outline").prop("disabled",!0)})};return{init:function(){e()}}}();App.isAngularJsApp()===!1&&jQuery(document).ready(function(){ComponentsSelect2.init()});
</script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<?php include_once('../template/template-3.php'); ?>
