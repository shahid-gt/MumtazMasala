<?php

/* _changepassword.html */
class __TwigTemplate_f57bae541ee4dbc767c99d413bc153db74c79ba9325c7ffd8eba2debc61c7fac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modal fade\" id=\"changepassword\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Change Password</h4>
\t\t\t</div>
\t\t\t<form class=\"form-horizontal bv-form\" name=\"frmchangepassword\" id=\"frmchangepassword\" method=\"post\" action=\"\"
\t\t\t\tdata-bv-message=\"This value is not valid\"
\t\t\t\tdata-bv-feedbackicons-valid=\"glyphicon glyphicon-ok\"
\t\t\t\tdata-bv-feedbackicons-invalid=\"glyphicon glyphicon-remove\"
\t\t\t\tdata-bv-feedbackicons-validating=\"glyphicon glyphicon-refresh\"
\t\t\t\tenctype=\"multipart/form-data\">
\t\t\t<input type=\"hidden\" name=\"task\" id=\"task1\" value=\"passwordsave\" />
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-lg-4 control-label\" for=\"pwd\">New Password</label>
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<input class=\"form-control\" name=\"pwd\" id=\"pwd\" autocomplete=\"off\"
\t\t\t\t\t\t\trequired type=\"password\" value=\"\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-lg-4 control-label\" for=\"repwd\">Re-type Password</label>
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<input class=\"form-control\" name=\"repwd\" id=\"repwd\" autocomplete=\"off\"
\t\t\t\t\t\t\trequired type=\"password\" value=\"\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t\t\t<button type=\"button\" onclick=\"savepassword();\" class=\"btn btn-primary\">Save changes</button>
\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\">
function savepassword()
{
\terr = 0;
\tpwd = \$('#pwd');
\tif ( err == 0 && pwd.val().split(' ').join('') == '' )
\t{
\t\talert('New Password required');
\t\tpwd.select(); pwd.focus();
\t\terr = 1;
\t}
\trepwd = \$('#repwd');
\tif ( err == 0 && repwd.val() != pwd.val() )
\t{
\t\talert('New Password and re-typed password must be same');
\t\trepwd.select(); repwd.focus();
\t\terr = 1;
\t}
\tif ( err == 0 )
\t{
\t\tformfields = \$('#frmchangepassword').serialize();
\t\ttheurl = 'save-password.php';
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: theurl,
\t\t\tdata: formfields,
\t\t\tbeforeSend: function( xhr ) {
\t\t\t}
\t\t}).done(function(data) {
\t\t\talert(data);
\t\t\t\$('#changepassword').modal('toggle');
\t\t});
\t}
}
</script>
";
    }

    public function getTemplateName()
    {
        return "_changepassword.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div class="modal fade" id="changepassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/* 	<div class="modal-dialog">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 				<h4 class="modal-title" id="myModalLabel">Change Password</h4>*/
/* 			</div>*/
/* 			<form class="form-horizontal bv-form" name="frmchangepassword" id="frmchangepassword" method="post" action=""*/
/* 				data-bv-message="This value is not valid"*/
/* 				data-bv-feedbackicons-valid="glyphicon glyphicon-ok"*/
/* 				data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"*/
/* 				data-bv-feedbackicons-validating="glyphicon glyphicon-refresh"*/
/* 				enctype="multipart/form-data">*/
/* 			<input type="hidden" name="task" id="task1" value="passwordsave" />*/
/* 			<div class="modal-body">*/
/* 				<div class="form-group">*/
/* 					<label class="col-lg-4 control-label" for="pwd">New Password</label>*/
/* 					<div class="col-lg-8">*/
/* 						<input class="form-control" name="pwd" id="pwd" autocomplete="off"*/
/* 							required type="password" value="" />*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-lg-4 control-label" for="repwd">Re-type Password</label>*/
/* 					<div class="col-lg-8">*/
/* 						<input class="form-control" name="repwd" id="repwd" autocomplete="off"*/
/* 							required type="password" value="" />*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/* 				<button type="button" onclick="savepassword();" class="btn btn-primary">Save changes</button>*/
/* 			</div>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* function savepassword()*/
/* {*/
/* 	err = 0;*/
/* 	pwd = $('#pwd');*/
/* 	if ( err == 0 && pwd.val().split(' ').join('') == '' )*/
/* 	{*/
/* 		alert('New Password required');*/
/* 		pwd.select(); pwd.focus();*/
/* 		err = 1;*/
/* 	}*/
/* 	repwd = $('#repwd');*/
/* 	if ( err == 0 && repwd.val() != pwd.val() )*/
/* 	{*/
/* 		alert('New Password and re-typed password must be same');*/
/* 		repwd.select(); repwd.focus();*/
/* 		err = 1;*/
/* 	}*/
/* 	if ( err == 0 )*/
/* 	{*/
/* 		formfields = $('#frmchangepassword').serialize();*/
/* 		theurl = 'save-password.php';*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: theurl,*/
/* 			data: formfields,*/
/* 			beforeSend: function( xhr ) {*/
/* 			}*/
/* 		}).done(function(data) {*/
/* 			alert(data);*/
/* 			$('#changepassword').modal('toggle');*/
/* 		});*/
/* 	}*/
/* }*/
/* </script>*/
/* */
