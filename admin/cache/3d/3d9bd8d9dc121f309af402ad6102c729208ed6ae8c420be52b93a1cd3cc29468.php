<?php

/* _profile.html */
class __TwigTemplate_b17125baf08074ee1217269d3bf2a33cc778ab96defb1e5e95773ce53ecd261c extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"profile\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Edit Profile</h4>
\t\t\t</div>
\t\t\t<form class=\"form-horizontal bv-form\" name=\"frmprofile\" id=\"frmprofile\" method=\"post\" action=\"\"
\t\t\t\tdata-bv-message=\"This value is not valid\"
\t\t\t\tdata-bv-feedbackicons-valid=\"glyphicon glyphicon-ok\"
\t\t\t\tdata-bv-feedbackicons-invalid=\"glyphicon glyphicon-remove\"
\t\t\t\tdata-bv-feedbackicons-validating=\"glyphicon glyphicon-refresh\"
\t\t\t\tenctype=\"multipart/form-data\">
\t\t\t<input type=\"hidden\" name=\"task\" id=\"task2\" value=\"profilesave\" />
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-lg-4 control-label\">First Name</label>
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<input class=\"form-control\" name=\"first_name\" id=\"first_name\" autocomplete=\"off\"
\t\t\t\t\t\t\trequired type=\"text\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "get", array(0 => "first_name"), "method"), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-lg-4 control-label\">Last Name</label>
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<input class=\"form-control\" name=\"last_name\" id=\"last_name\" autocomplete=\"off\"
\t\t\t\t\t\t\trequired type=\"text\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "get", array(0 => "last_name"), "method"), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-lg-4 control-label\">Mobile</label>
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<input class=\"form-control\" name=\"mobile\" id=\"mobile\" autocomplete=\"off\"
\t\t\t\t\t\t\ttype=\"url\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "get", array(0 => "mobile"), "method"), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t\t\t<button type=\"button\" onclick=\"saveprofile();\" data-dismiss=\"modal\" class=\"btn btn-primary\">Save changes</button>
\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\">
function saveprofile()
{
\tformfields = \$('#frmprofile').serialize();
\ttheurl = 'save-profile.php';
\t\$.ajax({
\t\ttype: \"POST\",
\t\turl: theurl,
\t\tdata: formfields,
\t\tbeforeSend: function( xhr ) {
\t\t}
\t}).done(function(data) {
\t\t\$('#username').html(data);
\t});
}
</script>
";
    }

    public function getTemplateName()
    {
        return "_profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 34,  50 => 27,  40 => 20,  19 => 1,);
    }
}
/* <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/* 	<div class="modal-dialog">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 				<h4 class="modal-title" id="myModalLabel">Edit Profile</h4>*/
/* 			</div>*/
/* 			<form class="form-horizontal bv-form" name="frmprofile" id="frmprofile" method="post" action=""*/
/* 				data-bv-message="This value is not valid"*/
/* 				data-bv-feedbackicons-valid="glyphicon glyphicon-ok"*/
/* 				data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"*/
/* 				data-bv-feedbackicons-validating="glyphicon glyphicon-refresh"*/
/* 				enctype="multipart/form-data">*/
/* 			<input type="hidden" name="task" id="task2" value="profilesave" />*/
/* 			<div class="modal-body">*/
/* 				<div class="form-group">*/
/* 					<label class="col-lg-4 control-label">First Name</label>*/
/* 					<div class="col-lg-8">*/
/* 						<input class="form-control" name="first_name" id="first_name" autocomplete="off"*/
/* 							required type="text" value="{{ session.get('first_name') }}" />*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-lg-4 control-label">Last Name</label>*/
/* 					<div class="col-lg-8">*/
/* 						<input class="form-control" name="last_name" id="last_name" autocomplete="off"*/
/* 							required type="text" value="{{ session.get('last_name') }}" />*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-lg-4 control-label">Mobile</label>*/
/* 					<div class="col-lg-8">*/
/* 						<input class="form-control" name="mobile" id="mobile" autocomplete="off"*/
/* 							type="url" value="{{ session.get('mobile') }}" />*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/* 				<button type="button" onclick="saveprofile();" data-dismiss="modal" class="btn btn-primary">Save changes</button>*/
/* 			</div>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* function saveprofile()*/
/* {*/
/* 	formfields = $('#frmprofile').serialize();*/
/* 	theurl = 'save-profile.php';*/
/* 	$.ajax({*/
/* 		type: "POST",*/
/* 		url: theurl,*/
/* 		data: formfields,*/
/* 		beforeSend: function( xhr ) {*/
/* 		}*/
/* 	}).done(function(data) {*/
/* 		$('#username').html(data);*/
/* 	});*/
/* }*/
/* </script>*/
/* */
