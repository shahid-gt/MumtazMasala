<?php

/* categories.html */
class __TwigTemplate_662705dc5eca5e89a53be8919b2a173baed63e1ef48cf6028d4aeb1032659ead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "categories.html", 1);
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
        echo "/assets/plugins/iCheck/flat/_all.css\">
\t";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<form name=\"frm\" id=\"frm\" method=\"post\" action=\"\">
\t\t<input type=\"hidden\" name=\"ob\" id=\"ob\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ob", array()), "html", null, true);
        echo "\" />
\t\t<input type=\"hidden\" name=\"ot\" id=\"ot\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ot", array()), "html", null, true);
        echo "\" />
\t\t<input type=\"hidden\" name=\"task\" id=\"task\" value=\"\" />
\t\t<input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "id", array()), "html", null, true);
        echo "\" />
\t\t<div class=\"col-sm-12\">
\t\t\t";
        // line 13
        $this->loadTemplate("_panel.html", "categories.html", 13)->display($context);
        // line 14
        echo "\t\t\t<div class=\"box box-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "boxskin", array()), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t";
        // line 16
        echo $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "maintitle", array());
        echo " ";
        echo $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "subtitle", array());
        echo "
\t\t\t\t\t";
        // line 17
        if (($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "showaddbtn", array()) == "1")) {
            // line 18
            echo "\t\t\t\t\t<div class=\"pull-right add-btn\"><button type=\"button\" title=\"New\" class=\"btn btn-success btn-xs\" onclick=\"edit('0', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "editscript", array()), "html", null, true);
            echo "');\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span></button></div>
\t\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table id=\"simple-table\" class=\"table table-bordered table-hover table-striped table-condensed\">
\t\t\t\t\t\t   <thead>
\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t <th class=\"text-center\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"flat-red all\" />
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t </th>
\t\t\t\t\t\t\t\t <th class=\"text-center\">";
        // line 31
        echo $this->getAttribute((isset($context["lib"]) ? $context["lib"] : null), "view_caption", array(0 => "ID", 1 => "id", 2 => $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ob", array()), 3 => $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ot", array())), "method");
        echo "</th>
\t\t\t\t\t\t\t\t <th>";
        // line 32
        echo $this->getAttribute((isset($context["lib"]) ? $context["lib"] : null), "view_caption", array(0 => "Title", 1 => "title", 2 => $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ob", array()), 3 => $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ot", array())), "method");
        echo "</th>
\t\t\t\t\t\t\t\t <th>";
        // line 33
        echo $this->getAttribute((isset($context["lib"]) ? $context["lib"] : null), "view_caption", array(0 => "Slug", 1 => "slug", 2 => $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ob", array()), 3 => $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ot", array())), "method");
        echo "</th>
\t\t\t\t\t\t\t\t <th class=\"text-center\">Action</th>
\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t   </thead>
\t\t\t\t\t\t   <tbody>
                           ";
        // line 38
        $context["val"] = "1";
        // line 39
        echo "\t\t\t\t\t\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "rows", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 40
            echo "\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t <td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"removeid[]\" class=\"flat-red check\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t </td>
\t\t\t\t\t\t\t\t <td class=\"text-center\">";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "slug", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t <td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"Edit\" onclick=\"edit('";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "editscript", array()), "html", null, true);
            echo "');\" class=\"btn btn-primary btn-xs\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t </td>
\t\t\t\t\t\t\t  </tr>
                              ";
            // line 55
            $context["val"] = ((isset($context["val"]) ? $context["val"] : null) + 1);
            // line 56
            echo "\t\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t\t\t\t  ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "rows", array())) == 0)) {
            // line 58
            echo "\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t <td colspan=\"8\">No Records</td>
\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t  ";
        }
        // line 62
        echo "\t\t\t\t\t\t   </tbody>
\t\t\t\t\t\t   <tfoot>
\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\"><button type=\"button\" title=\"Delete\" onclick=\"delconfirm(this.form);\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button></td>
\t\t\t\t\t\t\t\t<td colspan=\"8\"></td>
\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t   </tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.box-body -->
\t\t\t</div><!-- /.box -->
\t\t</div><!-- /.box -->
\t</form><!-- /.box -->
\t";
    }

    // line 76
    public function block_footerscript($context, array $blocks = array())
    {
        // line 77
        echo "\t\t";
        $this->displayParentBlock("footerscript", $context, $blocks);
        echo "
\t\t<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/plugins/iCheck/icheck.min.js\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/js/list.js\" type=\"text/javascript\"></script>
\t\t";
        // line 80
        $this->loadTemplate("_list.html", "categories.html", 80)->display($context);
        // line 81
        echo "\t\t<script type=\"text/javascript\">
\t\tfunction active(id, active)
\t\t{
\t\t\tdoactive('photos', id, active);
\t\t}
\t\t</script>
\t";
    }

    public function getTemplateName()
    {
        return "categories.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 81,  206 => 80,  202 => 79,  198 => 78,  193 => 77,  190 => 76,  173 => 62,  167 => 58,  164 => 57,  158 => 56,  156 => 55,  147 => 51,  141 => 48,  137 => 47,  133 => 46,  127 => 43,  122 => 40,  117 => 39,  115 => 38,  107 => 33,  103 => 32,  99 => 31,  86 => 20,  80 => 18,  78 => 17,  72 => 16,  66 => 14,  64 => 13,  59 => 11,  54 => 9,  50 => 8,  47 => 7,  44 => 6,  38 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* 	{% block headerscript %}*/
/* 		{{ parent() }}*/
/* 		<link rel="stylesheet" href="{{ web.themepath }}/assets/plugins/iCheck/flat/_all.css">*/
/* 	{% endblock %}*/
/* 	{% block body %}*/
/* 	<form name="frm" id="frm" method="post" action="">*/
/* 		<input type="hidden" name="ob" id="ob" value="{{ web.ob }}" />*/
/* 		<input type="hidden" name="ot" id="ot" value="{{ web.ot }}" />*/
/* 		<input type="hidden" name="task" id="task" value="" />*/
/* 		<input type="hidden" name="id" id="id" value="{{ web.id }}" />*/
/* 		<div class="col-sm-12">*/
/* 			{% include '_panel.html' %}*/
/* 			<div class="box box-{{ web.boxskin }}">*/
/* 				<div class="box-header with-border">*/
/* 					{{ web.maintitle|raw }} {{ web.subtitle|raw }}*/
/* 					{% if web.showaddbtn == '1' %}*/
/* 					<div class="pull-right add-btn"><button type="button" title="New" class="btn btn-success btn-xs" onclick="edit('0', '{{ web.editscript }}');"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button></div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				<div class="box-body">*/
/* 					<div class="table-responsive">*/
/* 						<table id="simple-table" class="table table-bordered table-hover table-striped table-condensed">*/
/* 						   <thead>*/
/* 							  <tr>*/
/* 								 <th class="text-center">*/
/* 									<label>*/
/* 										<input type="checkbox" class="flat-red all" />*/
/* 									</label>*/
/* 								 </th>*/
/* 								 <th class="text-center">{{ lib.view_caption('ID', 'id', web.ob, web.ot)|raw }}</th>*/
/* 								 <th>{{ lib.view_caption('Title', 'title', web.ob, web.ot)|raw }}</th>*/
/* 								 <th>{{ lib.view_caption('Slug', 'slug', web.ob, web.ot)|raw }}</th>*/
/* 								 <th class="text-center">Action</th>*/
/* 							  </tr>*/
/* 						   </thead>*/
/* 						   <tbody>*/
/*                            {% set val='1' %}*/
/* 							  {% for row in web.rows %}*/
/* 							  <tr>*/
/* 								 <td class="text-center">*/
/* 									<label>*/
/* 										<input type="checkbox" name="removeid[]" class="flat-red check" value="{{ row.id }}" />*/
/* 									</label>*/
/* 								 </td>*/
/* 								 <td class="text-center">{{ val }}</td>*/
/* 								 <td>{{ row.title }}</td>*/
/* 								 <td>{{ row.slug }}</td>*/
/* 								 <td class="text-center">*/
/* 									<div class="pull-left">*/
/* 									<button type="button" title="Edit" onclick="edit('{{ row.id }}', '{{ web.editscript }}');" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>*/
/* 									</div>*/
/* 								 </td>*/
/* 							  </tr>*/
/*                               {% set val=val+1 %}*/
/* 							  {% endfor %}*/
/* 							  {% if web.rows|length == 0 %}*/
/* 							  <tr>*/
/* 								 <td colspan="8">No Records</td>*/
/* 							  </tr>*/
/* 							  {% endif %}*/
/* 						   </tbody>*/
/* 						   <tfoot>*/
/* 							  <tr>*/
/* 								<td class="text-center"><button type="button" title="Delete" onclick="delconfirm(this.form);" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>*/
/* 								<td colspan="8"></td>*/
/* 							  </tr>*/
/* 						   </tfoot>*/
/* 						</table>*/
/* 					</div>*/
/* 				</div><!-- /.box-body -->*/
/* 			</div><!-- /.box -->*/
/* 		</div><!-- /.box -->*/
/* 	</form><!-- /.box -->*/
/* 	{% endblock %}*/
/* 	{% block footerscript %}*/
/* 		{{ parent() }}*/
/* 		<script src="{{ web.themepath }}/assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>*/
/* 		<script src="{{ web.themepath }}/assets/js/list.js" type="text/javascript"></script>*/
/* 		{% include '_list.html' %}*/
/* 		<script type="text/javascript">*/
/* 		function active(id, active)*/
/* 		{*/
/* 			doactive('photos', id, active);*/
/* 		}*/
/* 		</script>*/
/* 	{% endblock %}*/
/* */
