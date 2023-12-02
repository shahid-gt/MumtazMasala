<?php

/* _panel.html */
class __TwigTemplate_0e65391dda30ada6f8854ea02537cd7cbe1d78c1332c5c25c70e7a3e06785115 extends Twig_Template
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
        echo "\t\t<div class=\"box box-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "skin", array()), "html", null, true);
        echo "\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<h3 class=\"block_title\">Search By :</h3>
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<select id=\"searchby\" name=\"sb\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "search", array()));
        foreach ($context['_seq'] as $context["key"] => $context["title"]) {
            // line 8
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"";
            if (($context["key"] == $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "sb", array()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<h3 class=\"block_title\">Search For :</h3>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <input type=\"text\" class=\"form-control\" id=\"searchfor\" placeholder=\"Enter Your Keywords\" name=\"sk\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "sk", array()), "html", null, true);
        echo "\" />
\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm btn-search\" type=\"submit\">GO</button>
\t\t\t\t\t  </span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 visible-lg\"></div>
\t\t\t\t<div class=\"col-lg-2 col-sm-6\">
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<h3 class=\"block_title\">Page Entry :</h3>
\t\t\t\t\t\t<div class=\"block_part3_right\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<select id=\"en\" class=\"form-control\" name=\"en\" onchange=\"this.form.submit();\">
\t\t\t\t\t\t\t\t\t<option value=\"10\"";
        // line 29
        if (($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "en", array()) == 10)) {
            echo " selected=\"selected\"";
        }
        echo ">10</option>
\t\t\t\t\t\t\t\t\t<option value=\"25\"";
        // line 30
        if (($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "en", array()) == 25)) {
            echo " selected=\"selected\"";
        }
        echo ">25</option>
\t\t\t\t\t\t\t\t\t<option value=\"50\"";
        // line 31
        if (($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "en", array()) == 50)) {
            echo " selected=\"selected\"";
        }
        echo ">50</option>
\t\t\t\t\t\t\t\t\t<option value=\"100\"";
        // line 32
        if (($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "en", array()) == 100)) {
            echo " selected=\"selected\"";
        }
        echo ">100</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\"";
        // line 33
        if (($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "en", array()) == 0)) {
            echo " selected=\"selected\"";
        }
        echo ">All</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-sm-6\">
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<h3 class=\"block_title\">Page :</h3>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<select id=\"pg\" class=\"form-control\" name=\"pg\" onchange=\"this.form.submit();\">
\t\t\t\t\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "total_pages", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 45
            echo "\t\t\t\t\t\t\t\t\t<option value=";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            if (($context["i"] == $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "pg", array()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> 
\t\t\t\t<div style=\"clear:both;\"></div>
\t\t\t</div> 
\t\t</div> 
";
    }

    public function getTemplateName()
    {
        return "_panel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 47,  116 => 45,  112 => 44,  96 => 33,  90 => 32,  84 => 31,  78 => 30,  72 => 29,  56 => 16,  48 => 10,  33 => 8,  29 => 7,  19 => 1,);
    }
}
/* 		<div class="box box-{{ web.skin }}">*/
/* 			<div class="box-header with-border">*/
/* 				<div class="col-lg-3 col-sm-6">*/
/* 					<h3 class="block_title">Search By :</h3>*/
/* 					<div class="btn-group">*/
/* 						<select id="searchby" name="sb" class="form-control">*/
/* 							{% for key, title in web.search %}*/
/* 								<option value="{{ key }}"{% if key == web.sb %} selected="selected"{% endif %}>{{ title }}</option>*/
/* 							{% endfor %}*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-lg-3 col-sm-6">*/
/* 					<h3 class="block_title">Search For :</h3>*/
/* 					<div class="input-group">*/
/* 					  <input type="text" class="form-control" id="searchfor" placeholder="Enter Your Keywords" name="sk" value="{{ web.sk }}" />*/
/* 					  <span class="input-group-btn">*/
/* 						<button class="btn btn-primary btn-sm btn-search" type="submit">GO</button>*/
/* 					  </span>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-lg-2 visible-lg"></div>*/
/* 				<div class="col-lg-2 col-sm-6">*/
/* 					<div class="">*/
/* 						<h3 class="block_title">Page Entry :</h3>*/
/* 						<div class="block_part3_right">*/
/* 							<div class="btn-group">*/
/* 								<select id="en" class="form-control" name="en" onchange="this.form.submit();">*/
/* 									<option value="10"{% if web.en == 10 %} selected="selected"{% endif %}>10</option>*/
/* 									<option value="25"{% if web.en == 25 %} selected="selected"{% endif %}>25</option>*/
/* 									<option value="50"{% if web.en == 50 %} selected="selected"{% endif %}>50</option>*/
/* 									<option value="100"{% if web.en == 100 %} selected="selected"{% endif %}>100</option>*/
/* 									<option value="0"{% if web.en == 0 %} selected="selected"{% endif %}>All</option>*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-lg-2 col-sm-6">*/
/* 					<div class="">*/
/* 						<h3 class="block_title">Page :</h3>*/
/* 						<div class="btn-group">*/
/* 							<select id="pg" class="form-control" name="pg" onchange="this.form.submit();">*/
/* 								{% for i in 1..web.total_pages %}*/
/* 									<option value={{ i }}{% if i == web.pg %} selected="selected"{% endif %}>{{ i }}</option>*/
/* 								{% endfor %}*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div> */
/* 				<div style="clear:both;"></div>*/
/* 			</div> */
/* 		</div> */
/* */
