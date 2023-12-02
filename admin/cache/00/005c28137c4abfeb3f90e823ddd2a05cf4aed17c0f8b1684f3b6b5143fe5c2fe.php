<?php

/* banner.html */
class __TwigTemplate_e6ac8095abfb060e2f646abcc80aed83eb77fe2190ca119c038c16087d2ef68c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "banner.html", 1);
        $this->blocks = array(
            'headerscript' => array($this, 'block_headerscript'),
            'body' => array($this, 'block_body'),
            'footerscript' => array($this, 'block_footerscript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_headerscript($context, array $blocks = array())
    {
        // line 3
        echo "\t\t";
        $this->displayParentBlock("headerscript", $context, $blocks);
        echo "
\t\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/plugins/editor/editor.css\">
\t";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        if ((($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "task", array()) == "save") && ($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "err", array()) == ""))) {
            // line 8
            echo "\t<form name=\"frm\" id=\"frm\" method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "listscript", array()), "html", null, true);
            echo "\">
\t\t<input type=\"hidden\" name=\"ob\" id=\"ob\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ob", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"ot\" id=\"ot\" value=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ot", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"sb\" id=\"sb\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "sb", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"sk\" id=\"sk\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "sk", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"pg\" id=\"pg\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "pg", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"en\" id=\"en\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "en", array()), "html", null, true);
            echo "\" />
\t</form>
";
        } else {
            // line 17
            echo "\t<form name=\"frm\" id=\"frm\" method=\"post\" action=\"\" class=\"form-horizontal\"
\t\tdata-bv-message=\"This value is not valid\"
\t\tdata-bv-feedbackicons-valid=\"glyphicon glyphicon-ok\"
\t\tdata-bv-feedbackicons-invalid=\"glyphicon glyphicon-remove\"
\t\tdata-bv-feedbackicons-validating=\"glyphicon glyphicon-refresh\"
\t\tenctype=\"multipart/form-data\">
\t\t<input type=\"hidden\" name=\"ob\" id=\"ob\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ob", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"ot\" id=\"ot\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ot", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"sb\" id=\"sb\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "sb", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"sk\" id=\"sk\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "sk", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"pg\" id=\"pg\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "pg", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"en\" id=\"en\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "en", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"task\" id=\"task\" value=\"save\" />
\t\t<input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "id", array()), "html", null, true);
            echo "\" />
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"box box-";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "boxskin", array()), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "subtitle", array()), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t";
            // line 37
            if (($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "err", array()) != "")) {
                // line 38
                echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "err", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-lg-2 control-label\" for=\"title\">Banner Title</label>
\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" maxlength=\"50\" name=\"title\" id=\"title\" autocomplete=\"off\" required type=\"text\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "fields", array()), "title", array()), "value", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-lg-2 control-label\" for=\"url\">URL</label>
\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" maxlength=\"100\" name=\"url\" id=\"url\" autocomplete=\"off\" type=\"text\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "fields", array()), "url", array()), "value", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-lg-2 control-label\" for=\"f1\">Image</label>
\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t<input type=\"file\" name=\"f1\" id=\"f1\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 58
            echo $this->getAttribute((isset($context["lib"]) ? $context["lib"] : null), "showimg", array(0 => "image1", 1 => (isset($context["web"]) ? $context["web"] : null)), "method");
            echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-10 col-lg-offset-2\">
\t\t\t\t\t\t\t<button type=\"submit\" title=\"Save\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span></button>
\t\t\t\t\t\t\t<button type=\"button\" title=\"Cancel\" class=\"btn btn-danger\" onclick=\"this.form.action='";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "listscript", array()), "html", null, true);
            echo "'; this.form.submit();\"><span class=\"glyphicon glyphicon-arrow-left\" aria-hidden=\"true\"></span></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.box-body -->
\t\t\t</div><!-- /.box -->
\t\t</div><!-- /.box -->
\t</form><!-- /.box -->
";
        }
        // line 70
        echo "\t";
    }

    // line 71
    public function block_footerscript($context, array $blocks = array())
    {
        // line 72
        echo "\t\t";
        $this->displayParentBlock("footerscript", $context, $blocks);
        echo "
\t\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/plugins/editor/editor.js\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\">
\t\t\t";
        // line 75
        if ((($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "task", array()) == "save") && ($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "err", array()) == ""))) {
            // line 76
            echo "\t\t\t\$(document).ready(function() {
\t\t\t\tdocument.getElementById('frm').submit();
\t\t\t});
\t\t\t";
        } else {
            // line 80
            echo "\t\t\t\$(document).ready(function() {
\t\t\t\t\$('#frm').bootstrapValidator();
\t\t\t});
\t\t\t";
        }
        // line 84
        echo "\t\t</script>
\t";
    }

    public function getTemplateName()
    {
        return "banner.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 84,  206 => 80,  200 => 76,  198 => 75,  193 => 73,  188 => 72,  185 => 71,  181 => 70,  170 => 62,  163 => 58,  151 => 49,  142 => 43,  137 => 40,  131 => 38,  129 => 37,  123 => 34,  118 => 32,  113 => 30,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  80 => 17,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  49 => 8,  47 => 7,  44 => 6,  38 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* 	{% block headerscript %}*/
/* 		{{ parent() }}*/
/* 		<link rel="stylesheet" href="{{ web.themepath }}/assets/plugins/editor/editor.css">*/
/* 	{% endblock %}*/
/* 	{% block body %}*/
/* {% if web.task == 'save' and web.err == '' %}*/
/* 	<form name="frm" id="frm" method="post" action="{{ web.listscript }}">*/
/* 		<input type="hidden" name="ob" id="ob" value="{{ web.ob }}" />*/
/* 		<input type="hidden" name="ot" id="ot" value="{{ web.ot }}" />*/
/* 		<input type="hidden" name="sb" id="sb" value="{{ web.sb }}" />*/
/* 		<input type="hidden" name="sk" id="sk" value="{{ web.sk }}" />*/
/* 		<input type="hidden" name="pg" id="pg" value="{{ web.pg }}" />*/
/* 		<input type="hidden" name="en" id="en" value="{{ web.en }}" />*/
/* 	</form>*/
/* {% else %}*/
/* 	<form name="frm" id="frm" method="post" action="" class="form-horizontal"*/
/* 		data-bv-message="This value is not valid"*/
/* 		data-bv-feedbackicons-valid="glyphicon glyphicon-ok"*/
/* 		data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"*/
/* 		data-bv-feedbackicons-validating="glyphicon glyphicon-refresh"*/
/* 		enctype="multipart/form-data">*/
/* 		<input type="hidden" name="ob" id="ob" value="{{ web.ob }}" />*/
/* 		<input type="hidden" name="ot" id="ot" value="{{ web.ot }}" />*/
/* 		<input type="hidden" name="sb" id="sb" value="{{ web.sb }}" />*/
/* 		<input type="hidden" name="sk" id="sk" value="{{ web.sk }}" />*/
/* 		<input type="hidden" name="pg" id="pg" value="{{ web.pg }}" />*/
/* 		<input type="hidden" name="en" id="en" value="{{ web.en }}" />*/
/* 		<input type="hidden" name="task" id="task" value="save" />*/
/* 		<input type="hidden" name="id" id="id" value="{{ web.id }}" />*/
/* 		<div class="col-sm-12">*/
/* 			<div class="box box-{{ web.boxskin }}">*/
/* 				<div class="box-header with-border">*/
/* 					{{ web.subtitle }}*/
/* 				</div>*/
/* 				<div class="box-body">*/
/* 					{% if web.err != '' %}*/
/* 						<div class="alert alert-danger">{{ web.err }}</div>*/
/* 					{% endif %}*/
/* 					<div class="form-group">*/
/* 						<label class="col-lg-2 control-label" for="title">Banner Title</label>*/
/* 						<div class="col-lg-10">*/
/* 							<input class="form-control" maxlength="50" name="title" id="title" autocomplete="off" required type="text" value="{{ web.fields.title.value }}" />*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-lg-2 control-label" for="url">URL</label>*/
/* 						<div class="col-lg-10">*/
/* 							<input class="form-control" maxlength="100" name="url" id="url" autocomplete="off" type="text" value="{{ web.fields.url.value }}" />*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-lg-2 control-label" for="f1">Image</label>*/
/* 						<div class="col-lg-10">*/
/* 							<input type="file" name="f1" id="f1" />*/
/* 						</div>*/
/* 					</div>*/
/* 					{{ lib.showimg('image1', web)|raw }}*/
/* 					<div class="form-group">*/
/* 						<div class="col-lg-10 col-lg-offset-2">*/
/* 							<button type="submit" title="Save" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>*/
/* 							<button type="button" title="Cancel" class="btn btn-danger" onclick="this.form.action='{{ web.listscript }}'; this.form.submit();"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div><!-- /.box-body -->*/
/* 			</div><!-- /.box -->*/
/* 		</div><!-- /.box -->*/
/* 	</form><!-- /.box -->*/
/* {% endif %}*/
/* 	{% endblock %}*/
/* 	{% block footerscript %}*/
/* 		{{ parent() }}*/
/* 		<script src="{{ web.themepath }}/assets/plugins/editor/editor.js" type="text/javascript"></script>*/
/*         <script type="text/javascript">*/
/* 			{% if web.task == 'save' and web.err == '' %}*/
/* 			$(document).ready(function() {*/
/* 				document.getElementById('frm').submit();*/
/* 			});*/
/* 			{% else %}*/
/* 			$(document).ready(function() {*/
/* 				$('#frm').bootstrapValidator();*/
/* 			});*/
/* 			{% endif %}*/
/* 		</script>*/
/* 	{% endblock %}*/
/* */
