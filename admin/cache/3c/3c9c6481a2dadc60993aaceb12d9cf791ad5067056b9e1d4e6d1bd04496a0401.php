<?php

/* layout.html */
class __TwigTemplate_cc45cbed85f1fcabf11a41e32f038805a01c621f65fe19d313838ca862bcf208 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headerscript' => array($this, 'block_headerscript'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'footerscript' => array($this, 'block_footerscript'),
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
        $this->displayBlock('headerscript', $context, $blocks);
        // line 7
        echo "  </head>
  <body class=\"hold-transition skin-";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "skin", array()), "html", null, true);
        echo "-light layout-top-nav\">
    <div class=\"wrapper\">
      ";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 13
        echo "      <!-- Full Width Column -->
      <div class=\"content-wrapper\">
        <div class=\"container col-sm-12\">
          <!-- Content Header (Page header) -->
          <section class=\"content-header\">
            <h1>
              ";
        // line 19
        echo $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "maintitle", array());
        echo "
            </h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"dashboard.php\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
\t\t\t  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "breadcrumbs", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 24
            echo "\t\t\t\t";
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 25
                echo "\t\t\t\t\t<li class=\"active\">";
                echo twig_escape_filter($this->env, $context["breadcrumb"], "html", null, true);
                echo "</li>
\t\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "listscript", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["breadcrumb"], "html", null, true);
                echo "</a></li>
\t\t\t\t";
            }
            // line 29
            echo "\t\t\t  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </ol>
          </section>

          <!-- Main content -->
          <section class=\"content\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "\t\t\t</div><!-- /.box -->
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      ";
        // line 41
        $this->displayBlock('footer', $context, $blocks);
        // line 44
        echo "    </div><!-- ./wrapper -->
\t";
        // line 45
        $this->displayBlock('footerscript', $context, $blocks);
        // line 50
        echo "  </body>
</html>
";
    }

    // line 4
    public function block_headerscript($context, array $blocks = array())
    {
        // line 5
        echo "\t\t";
        $this->loadTemplate("_headerscript.html", "layout.html", 5)->display($context);
        // line 6
        echo "\t";
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "\t\t";
        $this->loadTemplate("_header.html", "layout.html", 11)->display($context);
        // line 12
        echo "\t  ";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
    }

    // line 41
    public function block_footer($context, array $blocks = array())
    {
        // line 42
        echo "\t\t";
        $this->loadTemplate("_footer.html", "layout.html", 42)->display($context);
        // line 43
        echo "\t  ";
    }

    // line 45
    public function block_footerscript($context, array $blocks = array())
    {
        // line 46
        echo "\t\t";
        $this->loadTemplate("_footerscript.html", "layout.html", 46)->display($context);
        // line 47
        echo "\t\t";
        $this->loadTemplate("_profile.html", "layout.html", 47)->display($context);
        // line 48
        echo "\t\t";
        $this->loadTemplate("_changepassword.html", "layout.html", 48)->display($context);
        // line 49
        echo "\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 49,  177 => 48,  174 => 47,  171 => 46,  168 => 45,  164 => 43,  161 => 42,  158 => 41,  153 => 36,  149 => 12,  146 => 11,  143 => 10,  139 => 6,  136 => 5,  133 => 4,  127 => 50,  125 => 45,  122 => 44,  120 => 41,  114 => 37,  112 => 36,  104 => 30,  90 => 29,  82 => 27,  76 => 25,  73 => 24,  56 => 23,  49 => 19,  41 => 13,  39 => 10,  34 => 8,  31 => 7,  29 => 4,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     {% block headerscript %}*/
/* 		{% include '_headerscript.html' %}*/
/* 	{% endblock %}*/
/*   </head>*/
/*   <body class="hold-transition skin-{{ web.skin }}-light layout-top-nav">*/
/*     <div class="wrapper">*/
/*       {% block header %}*/
/* 		{% include '_header.html' %}*/
/* 	  {% endblock %}*/
/*       <!-- Full Width Column -->*/
/*       <div class="content-wrapper">*/
/*         <div class="container col-sm-12">*/
/*           <!-- Content Header (Page header) -->*/
/*           <section class="content-header">*/
/*             <h1>*/
/*               {{ web.maintitle|raw }}*/
/*             </h1>*/
/*             <ol class="breadcrumb">*/
/*               <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>*/
/* 			  {% for breadcrumb in web.breadcrumbs %}*/
/* 				{% if loop.last %}*/
/* 					<li class="active">{{ breadcrumb }}</li>*/
/* 				{% else %}*/
/* 					<li><a href="{{ web.listscript }}">{{ breadcrumb }}</a></li>*/
/* 				{% endif %}*/
/* 			  {% endfor %}*/
/*             </ol>*/
/*           </section>*/
/* */
/*           <!-- Main content -->*/
/*           <section class="content">*/
/* 			<div class="row">*/
/* 				{% block body %}{% endblock %}*/
/* 			</div><!-- /.box -->*/
/*           </section><!-- /.content -->*/
/*         </div><!-- /.container -->*/
/*       </div><!-- /.content-wrapper -->*/
/*       {% block footer %}*/
/* 		{% include '_footer.html' %}*/
/* 	  {% endblock %}*/
/*     </div><!-- ./wrapper -->*/
/* 	{% block footerscript %}*/
/* 		{% include '_footerscript.html' %}*/
/* 		{% include '_profile.html' %}*/
/* 		{% include '_changepassword.html' %}*/
/* 	{% endblock %}*/
/*   </body>*/
/* </html>*/
/* */
