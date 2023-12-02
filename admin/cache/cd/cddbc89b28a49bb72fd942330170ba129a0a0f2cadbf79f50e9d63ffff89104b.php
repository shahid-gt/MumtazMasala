<?php

/* _headerscript.html */
class __TwigTemplate_723ded5d203762ef639da5227ad338de38cf5c6d4eb98196d36728f49f9cf3aa extends Twig_Template
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
        echo "\t<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "pagetitle", array()), "html", null, true);
        echo "</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/css/bootstrap.min.css\">
    <!-- Bootstrap Validator 0.5.3 -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/plugins/bootstrapvalidator/bootstrapValidator.min.css\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/css/font-awesome.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/css/AdminLTE.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/skins/_all-skins.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/css/style.css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
";
    }

    public function getTemplateName()
    {
        return "_headerscript.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  49 => 14,  45 => 13,  40 => 11,  35 => 9,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/* 	<meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>{{ web.pagetitle }}</title>*/
/*     <!-- Tell the browser to be responsive to screen width -->*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <link rel="stylesheet" href="{{ web.themepath }}/assets/css/bootstrap.min.css">*/
/*     <!-- Bootstrap Validator 0.5.3 -->*/
/*     <link rel="stylesheet" href="{{ web.themepath }}/assets/plugins/bootstrapvalidator/bootstrapValidator.min.css">*/
/*     <!-- Font Awesome -->*/
/*     <link rel="stylesheet" href="{{ web.themepath }}/assets/css/font-awesome.min.css">*/
/*     <!-- Theme style -->*/
/*     <link rel="stylesheet" href="{{ web.themepath }}/assets/css/AdminLTE.min.css">*/
/*     <link rel="stylesheet" href="{{ web.themepath }}/assets/skins/_all-skins.min.css">*/
/*     <link rel="stylesheet" href="{{ web.themepath }}/assets/css/style.css">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
