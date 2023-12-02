<?php

/* category.html */
class __TwigTemplate_3aa50ab645399ddb182c89a76f40f9fcabe9fd17f957e597d6732c4509e2b316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "category.html", 1);
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
\t";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        if ((($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "task", array()) == "save") && ($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "err", array()) == ""))) {
            // line 7
            echo "\t<form name=\"frm\" id=\"frm\" method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "listscript", array()), "html", null, true);
            echo "\">
\t\t<input type=\"hidden\" name=\"ob\" id=\"ob\" value=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ob", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"ot\" id=\"ot\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ot", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"sb\" id=\"sb\" value=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "sb", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"sk\" id=\"sk\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "sk", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"pg\" id=\"pg\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "pg", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"en\" id=\"en\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "en", array()), "html", null, true);
            echo "\" />
\t</form>
";
        } else {
            // line 16
            echo "\t<form name=\"frm\" id=\"frm\" method=\"post\" action=\"\" class=\"form-horizontal\"
\t\tdata-bv-message=\"This value is not valid\"
\t\tdata-bv-feedbackicons-valid=\"glyphicon glyphicon-ok\"
\t\tdata-bv-feedbackicons-invalid=\"glyphicon glyphicon-remove\"
\t\tdata-bv-feedbackicons-validating=\"glyphicon glyphicon-refresh\"
\t\tenctype=\"multipart/form-data\">
\t\t<input type=\"hidden\" name=\"ob\" id=\"ob\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ob", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"ot\" id=\"ot\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ot", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"sb\" id=\"sb\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "sb", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"sk\" id=\"sk\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "sk", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"pg\" id=\"pg\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "pg", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"en\" id=\"en\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "en", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"task\" id=\"task\" value=\"save\" />
\t\t<input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "id", array()), "html", null, true);
            echo "\" />
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"box box-";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "boxskin", array()), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "subtitle", array()), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t";
            // line 36
            if (($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "err", array()) != "")) {
                // line 37
                echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "err", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-lg-2 control-label\" for=\"title\">Title</label>
\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" maxlength=\"50\" name=\"title\" id=\"title\" autocomplete=\"off\" required type=\"text\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "fields", array()), "title", array()), "value", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-lg-2 control-label\" for=\"slug\">Slug / SEO URL</label>
\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" maxlength=\"50\" name=\"slug\" id=\"slug\" autocomplete=\"off\" type=\"text\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "fields", array()), "slug", array()), "value", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-10 col-lg-offset-2\">
\t\t\t\t\t\t\t<button type=\"submit\" title=\"Save\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span></button>
\t\t\t\t\t\t\t<button type=\"button\" title=\"Cancel\" class=\"btn btn-danger\" onclick=\"this.form.action='";
            // line 54
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
        // line 62
        echo "\t";
    }

    // line 63
    public function block_footerscript($context, array $blocks = array())
    {
        // line 64
        echo "\t\t";
        $this->displayParentBlock("footerscript", $context, $blocks);
        echo "
        <script type=\"text/javascript\">
\t\t\t";
        // line 66
        if ((($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "task", array()) == "save") && ($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "err", array()) == ""))) {
            // line 67
            echo "\t\t\t\$(document).ready(function() {
\t\t\t\tdocument.getElementById('frm').submit();
\t\t\t});
\t\t\t";
        } else {
            // line 71
            echo "\t\t\t\$(document).ready(function() {
\t\t\t\t\$('#frm').bootstrapValidator();
\t\t\t});
\t\t\t";
        }
        // line 75
        echo "\t\t</script>
\t";
    }

    public function getTemplateName()
    {
        return "category.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 75,  188 => 71,  182 => 67,  180 => 66,  174 => 64,  171 => 63,  167 => 62,  156 => 54,  147 => 48,  138 => 42,  133 => 39,  127 => 37,  125 => 36,  119 => 33,  114 => 31,  109 => 29,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  76 => 16,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  45 => 7,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* 	{% block headerscript %}*/
/* 		{{ parent() }}*/
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
/* 						<label class="col-lg-2 control-label" for="title">Title</label>*/
/* 						<div class="col-lg-10">*/
/* 							<input class="form-control" maxlength="50" name="title" id="title" autocomplete="off" required type="text" value="{{ web.fields.title.value }}" />*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-lg-2 control-label" for="slug">Slug / SEO URL</label>*/
/* 						<div class="col-lg-10">*/
/* 							<input class="form-control" maxlength="50" name="slug" id="slug" autocomplete="off" type="text" value="{{ web.fields.slug.value }}" />*/
/* 						</div>*/
/* 					</div>*/
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
