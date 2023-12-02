<?php

/* _header.html */
class __TwigTemplate_a62321def7be3e82b1c3ba06f3d165674ff2e0a981bbcb0e8dc0135653dc838e extends Twig_Template
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
        echo "\t<header class=\"main-header\">
        <nav class=\"navbar navbar-static-top\">
          <div class=\"container\">
            <div class=\"navbar-header\">
              <a href=\"dashboard.php\" class=\"navbar-brand\"><b><img style=\"height: 45px;\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/img/logoin.png\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "company", array()), "html", null, true);
        echo "\" /></b></a>
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                <i class=\"fa fa-bars\"></i>
              </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse pull-left\" id=\"navbar-collapse\">
              <ul class=\"nav navbar-nav\">
                <li";
        // line 13
        if (($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "page", array()) == "banners")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"banners.php\">Banners</a></li>
                <li";
        // line 14
        if (($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "page", array()) == "widgets")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"widgets.php\">Home Widgets</a></li>
                <li";
        // line 15
        if (($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "page", array()) == "categories")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"categories.php\">Categories</a></li>
                <li";
        // line 16
        if (($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "page", array()) == "products")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"products.php\">Products</a></li>
      \t\t\t  </ul>
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                  <!-- User Account Menu -->
                  <li class=\"dropdown user user-menu\">
                    <!-- Menu Toggle Button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                      <!-- The user image in the navbar-->
                      <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "themepath", array()), "html", null, true);
        echo "/assets/img/avatar4.png\" class=\"user-image\" alt=\"User Image\">
                      <!-- hidden-xs hides the username on small devices so only the image appears. -->
                      <span class=\"hidden-xs\" id=\"username\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "get", array(0 => "username"), "method"), "html", null, true);
        echo "</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                      <!-- The user image in the menu -->
                      <li class=\"user-footer\">
                        <a href=\"javascript:void(0);\" data-toggle=\"modal\" data-target=\"#profile\">Profile</a>
                      </li>
                      <li class=\"user-footer\">
                        <a href=\"javascript:void(0);\" data-toggle=\"modal\" data-target=\"#changepassword\">Change Password</a>
                      </li>
                      <li class=\"user-footer\">
                        <a href=\"logout.php\">Logout</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
\t    </nav>
\t</header>
";
    }

    public function getTemplateName()
    {
        return "_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 29,  72 => 27,  56 => 16,  50 => 15,  44 => 14,  38 => 13,  25 => 5,  19 => 1,);
    }
}
/* 	<header class="main-header">*/
/*         <nav class="navbar navbar-static-top">*/
/*           <div class="container">*/
/*             <div class="navbar-header">*/
/*               <a href="dashboard.php" class="navbar-brand"><b><img style="height: 45px;" src="{{ web.themepath }}/assets/img/logoin.png" title="{{ web.company }}" /></b></a>*/
/*               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">*/
/*                 <i class="fa fa-bars"></i>*/
/*               </button>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse pull-left" id="navbar-collapse">*/
/*               <ul class="nav navbar-nav">*/
/*                 <li{% if web.page == 'banners' %} class="active"{% endif %}><a href="banners.php">Banners</a></li>*/
/*                 <li{% if web.page == 'widgets' %} class="active"{% endif %}><a href="widgets.php">Home Widgets</a></li>*/
/*                 <li{% if web.page == 'categories' %} class="active"{% endif %}><a href="categories.php">Categories</a></li>*/
/*                 <li{% if web.page == 'products' %} class="active"{% endif %}><a href="products.php">Products</a></li>*/
/*       			  </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*             <!-- Navbar Right Menu -->*/
/*               <div class="navbar-custom-menu">*/
/*                 <ul class="nav navbar-nav">*/
/*                   <!-- User Account Menu -->*/
/*                   <li class="dropdown user user-menu">*/
/*                     <!-- Menu Toggle Button -->*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                       <!-- The user image in the navbar-->*/
/*                       <img src="{{ web.themepath }}/assets/img/avatar4.png" class="user-image" alt="User Image">*/
/*                       <!-- hidden-xs hides the username on small devices so only the image appears. -->*/
/*                       <span class="hidden-xs" id="username">{{ session.get('username') }}</span>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu">*/
/*                       <!-- The user image in the menu -->*/
/*                       <li class="user-footer">*/
/*                         <a href="javascript:void(0);" data-toggle="modal" data-target="#profile">Profile</a>*/
/*                       </li>*/
/*                       <li class="user-footer">*/
/*                         <a href="javascript:void(0);" data-toggle="modal" data-target="#changepassword">Change Password</a>*/
/*                       </li>*/
/*                       <li class="user-footer">*/
/*                         <a href="logout.php">Logout</a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                 </ul>*/
/*               </div><!-- /.navbar-custom-menu -->*/
/*           </div><!-- /.container-fluid -->*/
/* 	    </nav>*/
/* 	</header>*/
/* */
