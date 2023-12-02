<?php

/* _footerscript.html */
class __TwigTemplate_b98431fcddc79d2d9e2afb3594191872130530b9a5bf1dcaaf124690ce696006 extends Twig_Template
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
        echo "    <!-- jQuery 2.1.4 -->
    <script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/js/jQuery-2.1.4.min.js\" type=\"text/javascript\"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <!-- Bootstrap Validator 0.5.3 -->
\t<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/plugins/bootstrapvalidator/bootstrapValidator.js\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/plugins/bootstrapvalidator/en_US.js\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "_footerscript.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/*     <!-- jQuery 2.1.4 -->*/
/*     <script src="{{ web.themepath }}/assets/js/jQuery-2.1.4.min.js" type="text/javascript"></script>*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <script src="{{ web.themepath }}/assets/js/bootstrap.min.js" type="text/javascript"></script>*/
/*     <!-- Bootstrap Validator 0.5.3 -->*/
/* 	<script src="{{ web.themepath }}/assets/plugins/bootstrapvalidator/bootstrapValidator.js" type="text/javascript"></script>*/
/* 	<script src="{{ web.themepath }}/assets/plugins/bootstrapvalidator/en_US.js" type="text/javascript"></script>*/
/* */
