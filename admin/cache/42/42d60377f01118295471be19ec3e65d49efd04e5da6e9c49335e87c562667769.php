<?php

/* index.html */
class __TwigTemplate_2b27a144fbfd71e4d2c6fe0f71239aa94a73a46f2b9afde73369bd549e95341a extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
  <head>
    ";
        // line 4
        $this->loadTemplate("_headerscript.html", "index.html", 4)->display($context);
        // line 5
        echo "  </head>
  <body class=\"hold-transition login-page\">
\t<div class=\"login-logo\">
\t\t<a href=\"javascript:void(0);\"><b><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/img/logo.png\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "company", array()), "html", null, true);
        echo "\" /></b></a>
\t</div><!-- /.login-logo -->
    <div class=\"login-box\">
      <div id=\"login\" class=\"login-box-body\"";
        // line 11
        if (($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "hide", array()) == "login")) {
            echo " style=\"display:none;\"";
        }
        echo ">
        ";
        // line 12
        if ((($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "err", array()) != "") && ($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "hide", array()) == "forgetpassword"))) {
            // line 13
            echo "\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "err", array()), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 15
        echo "        <p class=\"login-box-msg\">Sign in to start your session</p>
        <form name=\"frmlogin\" id=\"frmlogin\" action=\"\" method=\"post\">
          <input type=\"hidden\" name=\"task\" id=\"task\" value=\"login\" />
\t\t  <div class=\"form-group has-feedback\">
            <input type=\"email\" class=\"form-control\" required placeholder=\"Username\" name=\"email\" id=\"email\" />
            <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
          </div>
          <div class=\"form-group has-feedback\">
            <input type=\"password\" class=\"form-control\" required placeholder=\"Password\" name=\"pwd\" id=\"pwd\" />
            <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
          </div>
          <div class=\"row\">
            <div class=\"col-xs-4 col-xs-offset-8\">
              <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>
        <a href=\"javascript:forgetpassword();\">I forgot my password</a><br>
      </div><!-- /.login-box-body -->
      <div id=\"forgetpassword\" class=\"login-box-body\"";
        // line 34
        if (($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "hide", array()) == "forgetpassword")) {
            echo " style=\"display:none;\"";
        }
        echo ">
        ";
        // line 35
        if ((($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "err", array()) != "") && ($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "hide", array()) == "login"))) {
            // line 36
            echo "\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "err", array()), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 38
        echo "        ";
        if ((($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "msg", array()) != "") && ($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "hide", array()) == "login"))) {
            // line 39
            echo "\t\t\t<div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "msg", array()), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 41
        echo "        <p class=\"login-box-msg\">Enter email address to reset password</p>
        <form name=\"frmforget\" id=\"frmforget\" action=\"\" method=\"post\">
          <input type=\"hidden\" name=\"task\" id=\"task\" value=\"forgetpassword\" />
\t\t  <div class=\"form-group has-feedback\">
            <input type=\"email\" class=\"form-control\" required placeholder=\"Email\" name=\"email\" id=\"forgetemail\" />
            <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
          </div>
          <div class=\"row\">
            <div class=\"col-xs-4 col-xs-offset-8\">
              <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Send Email</button>
            </div><!-- /.col -->
          </div>
        </form>
        <a href=\"javascript:login();\">Sign In</a><br>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
\t";
        // line 57
        $this->loadTemplate("_footerscript.html", "index.html", 57)->display($context);
        // line 58
        echo "\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t\$('#frmlogin, #frmforget').bootstrapValidator();
\t\t});
\t\tfunction forgetpassword()
\t\t{
\t\t\t\$('#login').slideUp().fadeOut();
\t\t\t\$('#forgetpassword').slideDown().fadeIn();
\t\t}
\t\tfunction login()
\t\t{
\t\t\t\$('#forgetpassword').slideUp().fadeOut();
\t\t\t\$('#login').slideDown().fadeIn();
\t\t}
\t</script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 58,  115 => 57,  97 => 41,  91 => 39,  88 => 38,  82 => 36,  80 => 35,  74 => 34,  53 => 15,  47 => 13,  45 => 12,  39 => 11,  31 => 8,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     {% include '_headerscript.html' %}*/
/*   </head>*/
/*   <body class="hold-transition login-page">*/
/* 	<div class="login-logo">*/
/* 		<a href="javascript:void(0);"><b><img src="{{ web.themepath }}/assets/img/logo.png" title="{{ web.company }}" /></b></a>*/
/* 	</div><!-- /.login-logo -->*/
/*     <div class="login-box">*/
/*       <div id="login" class="login-box-body"{% if web.hide == 'login' %} style="display:none;"{% endif %}>*/
/*         {% if web.err != '' and web.hide == 'forgetpassword' %}*/
/* 			<div class="alert alert-danger">{{ web.err }}</div>*/
/* 		{% endif %}*/
/*         <p class="login-box-msg">Sign in to start your session</p>*/
/*         <form name="frmlogin" id="frmlogin" action="" method="post">*/
/*           <input type="hidden" name="task" id="task" value="login" />*/
/* 		  <div class="form-group has-feedback">*/
/*             <input type="email" class="form-control" required placeholder="Username" name="email" id="email" />*/
/*             <span class="glyphicon glyphicon-envelope form-control-feedback"></span>*/
/*           </div>*/
/*           <div class="form-group has-feedback">*/
/*             <input type="password" class="form-control" required placeholder="Password" name="pwd" id="pwd" />*/
/*             <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/*           </div>*/
/*           <div class="row">*/
/*             <div class="col-xs-4 col-xs-offset-8">*/
/*               <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>*/
/*             </div><!-- /.col -->*/
/*           </div>*/
/*         </form>*/
/*         <a href="javascript:forgetpassword();">I forgot my password</a><br>*/
/*       </div><!-- /.login-box-body -->*/
/*       <div id="forgetpassword" class="login-box-body"{% if web.hide == 'forgetpassword' %} style="display:none;"{% endif %}>*/
/*         {% if web.err != '' and web.hide == 'login' %}*/
/* 			<div class="alert alert-danger">{{ web.err }}</div>*/
/* 		{% endif %}*/
/*         {% if web.msg != '' and web.hide == 'login' %}*/
/* 			<div class="alert alert-success">{{ web.msg }}</div>*/
/* 		{% endif %}*/
/*         <p class="login-box-msg">Enter email address to reset password</p>*/
/*         <form name="frmforget" id="frmforget" action="" method="post">*/
/*           <input type="hidden" name="task" id="task" value="forgetpassword" />*/
/* 		  <div class="form-group has-feedback">*/
/*             <input type="email" class="form-control" required placeholder="Email" name="email" id="forgetemail" />*/
/*             <span class="glyphicon glyphicon-envelope form-control-feedback"></span>*/
/*           </div>*/
/*           <div class="row">*/
/*             <div class="col-xs-4 col-xs-offset-8">*/
/*               <button type="submit" class="btn btn-primary btn-block btn-flat">Send Email</button>*/
/*             </div><!-- /.col -->*/
/*           </div>*/
/*         </form>*/
/*         <a href="javascript:login();">Sign In</a><br>*/
/*       </div><!-- /.login-box-body -->*/
/*     </div><!-- /.login-box -->*/
/* 	{% include '_footerscript.html' %}*/
/* 	<script type="text/javascript">*/
/* 		$(document).ready(function() {*/
/* 			$('#frmlogin, #frmforget').bootstrapValidator();*/
/* 		});*/
/* 		function forgetpassword()*/
/* 		{*/
/* 			$('#login').slideUp().fadeOut();*/
/* 			$('#forgetpassword').slideDown().fadeIn();*/
/* 		}*/
/* 		function login()*/
/* 		{*/
/* 			$('#forgetpassword').slideUp().fadeOut();*/
/* 			$('#login').slideDown().fadeIn();*/
/* 		}*/
/* 	</script>*/
/*   </body>*/
/* </html>*/
/* */
