<?php

/* _footer.html */
class __TwigTemplate_c957dce4d31dc00e532cc4a48d5fa337d5e53d6fc13f492930cf621ae2a1c880 extends Twig_Template
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
        echo "\t  <footer class=\"main-footer\">
        <div class=\"container\">
          <div class=\"pull-right hidden-xs\">
            <b>Version</b> 1.0.0
          </div>
          Copyright &copy; ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "year", array()), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "company", array()), "html", null, true);
        echo "</strong>, All rights reserved.
        </div><!-- /.container -->
      </footer>
</div>
<div id=\"loader-outer\" style=\"display:none;\">
<div class=\"loader\" id=\"loader\" style=\"\">Loading...</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
/* 	  <footer class="main-footer">*/
/*         <div class="container">*/
/*           <div class="pull-right hidden-xs">*/
/*             <b>Version</b> 1.0.0*/
/*           </div>*/
/*           Copyright &copy; {{ web.year }} <strong>{{ web.company }}</strong>, All rights reserved.*/
/*         </div><!-- /.container -->*/
/*       </footer>*/
/* </div>*/
/* <div id="loader-outer" style="display:none;">*/
/* <div class="loader" id="loader" style="">Loading...</div>*/
/* </div>*/
/* */
