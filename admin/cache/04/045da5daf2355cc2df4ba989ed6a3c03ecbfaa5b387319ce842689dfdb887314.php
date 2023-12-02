<?php

/* _list.html */
class __TwigTemplate_9a4592b4d6d135f91a7c53dd4181ae1319741335b08c541f0171e61223e8f87f extends Twig_Template
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
        echo "        <script type=\"text/javascript\">
\t\t\$(function () {
\t\t\t\$('input[type=\"checkbox\"].flat-red, input[type=\"radio\"].flat-red').iCheck({
\t\t\t  checkboxClass: 'icheckbox_flat-";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "skin", array()), "html", null, true);
        echo "',
\t\t\t  radioClass: 'iradio_flat-";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "skin", array()), "html", null, true);
        echo "'
\t\t\t});
\t\t});
\t\t</script>
";
    }

    public function getTemplateName()
    {
        return "_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }
}
/*         <script type="text/javascript">*/
/* 		$(function () {*/
/* 			$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({*/
/* 			  checkboxClass: 'icheckbox_flat-{{ web.skin }}',*/
/* 			  radioClass: 'iradio_flat-{{ web.skin }}'*/
/* 			});*/
/* 		});*/
/* 		</script>*/
/* */
