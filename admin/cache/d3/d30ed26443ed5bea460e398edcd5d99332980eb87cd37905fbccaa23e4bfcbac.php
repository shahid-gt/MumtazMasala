<?php

/* dashboard.html */
class __TwigTemplate_dbd75627f3bfe00bc7fc5271eac21f217e1d1b77664899da3cfb9f7526c02cfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "dashboard.html", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        if (($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "dashboarddata", array()) == "1")) {
            // line 4
            echo "\t<form name=\"frm\" id=\"frm\" method=\"post\" action=\"\">
\t\t<input type=\"hidden\" name=\"ob\" id=\"ob\" value=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ob", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"ot\" id=\"ot\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "ot", array()), "html", null, true);
            echo "\" />
\t\t<input type=\"hidden\" name=\"task\" id=\"task\" value=\"\" />
\t\t<input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "id", array()), "html", null, true);
            echo "\" />
\t\t<div class=\"col-sm-12\">
\t\t\t";
            // line 10
            $this->loadTemplate("_panel-dashboard.html", "dashboard.html", 10)->display($context);
            // line 11
            echo "\t\t\t<div class=\"box box-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "boxskin", array()), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t";
            // line 13
            echo $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "maintitle", array());
            echo " ";
            echo $this->getAttribute((isset($context["web"]) ? $context["web"] : null), "subtitle", array());
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["web"]) ? $context["web"] : null), "rows", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 17
                echo "\t\t\t\t\t<div class=\"col-lg-1 imgbox\">
\t\t\t\t\t\t<p><img onclick=\"viewphoto('";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lib"]) ? $context["lib"] : null), "imgrepair", array(0 => $this->getAttribute($context["row"], "image", array())), "method"), "html", null, true);
                echo "');\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lib"]) ? $context["lib"] : null), "imgrepair", array(0 => $this->getAttribute($context["row"], "image", array())), "method"), "html", null, true);
                echo "\" class=\"img-responsive\" /></p>
\t\t\t\t\t\t<p>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "district_name", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<p>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "center_name", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<p>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "location_name", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "hid", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<p>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "size_name", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<p><a href=\"javascript:viewlocation(";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "lat", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "long", array()), "html", null, true);
                echo ", '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "username", array()), "html", null, true);
                echo "');\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "username", array()), "html", null, true);
                echo "</a></p>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t\t</div><!-- /.box-body -->
\t\t\t</div><!-- /.box -->
\t\t</div><!-- /.box -->
\t</form><!-- /.box -->

<!-- popups -->
<div class=\"modal fade\" id=\"div-photo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\"></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\" id=\"photo\"></div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"modal fade\" id=\"div-location\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\"></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\" id=\"map-body\">
\t\t\t\t<div id=\"map\" style=\"width:570px; height:400px;\"></div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- popups -->
";
        }
        // line 64
        echo "\t\t\t\t";
    }

    // line 65
    public function block_footerscript($context, array $blocks = array())
    {
        // line 66
        echo "\t\t";
        $this->displayParentBlock("footerscript", $context, $blocks);
        echo "
\t\t<script language=\"javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
\t\t<script type=\"text/javascript\">
\t\tfunction viewphoto(imgsrc)
\t\t{
\t\t\tdata = '<img src=\"'+imgsrc+'\" width=\"570\" />';
\t\t\t\$('#photo').html(data);
\t\t\t\$('#div-photo').modal('show');
\t\t}
\t\tfunction viewlocation(lat, lng, user)
\t\t{
\t\t\tvar myLatlng = new google.maps.LatLng(lat, lng);
\t\t\tvar myOptions = {
\t\t\t\t zoom: 17,
\t\t\t\t center: myLatlng,
\t\t\t\t mapTypeId: google.maps.MapTypeId.ROADMAP
\t\t\t\t }
\t\t\t  map = new google.maps.Map(document.getElementById(\"map\"), myOptions);
\t\t\t  var marker = new google.maps.Marker({
\t\t\t\t  position: myLatlng, 
\t\t\t\t  map: map,
\t\t\t  title:user
\t\t\t});
\t\t\t\$('#div-location').modal('show');
\t\t}
\t\tfunction downloadfolder()
\t\t{
\t\t\ttheurl = 'downloadfolder.php';
\t\t\tformfields  = 'month='+\$('#month').val();
\t\t\tformfields += '&year='+\$('#year').val();
\t\t\tformfields += '&user_id='+\$('#user_id').val();
\t\t\t\$.ajax({
\t\t\t\ttype: \"POST\",
\t\t\t\turl: theurl,
\t\t\t\tdata: formfields,
\t\t\t\tbeforeSend: function( xhr ) {
\t\t\t\t}
\t\t\t}).done(function(data) {
\t\t\t});
\t\t}
\t\t</script>
\t";
    }

    public function getTemplateName()
    {
        return "dashboard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 66,  157 => 65,  153 => 64,  113 => 26,  98 => 23,  94 => 22,  88 => 21,  84 => 20,  80 => 19,  74 => 18,  71 => 17,  67 => 16,  59 => 13,  53 => 11,  51 => 10,  46 => 8,  41 => 6,  37 => 5,  34 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* 				{% block body %}*/
/* {% if web.dashboarddata == '1' %}*/
/* 	<form name="frm" id="frm" method="post" action="">*/
/* 		<input type="hidden" name="ob" id="ob" value="{{ web.ob }}" />*/
/* 		<input type="hidden" name="ot" id="ot" value="{{ web.ot }}" />*/
/* 		<input type="hidden" name="task" id="task" value="" />*/
/* 		<input type="hidden" name="id" id="id" value="{{ web.id }}" />*/
/* 		<div class="col-sm-12">*/
/* 			{% include '_panel-dashboard.html' %}*/
/* 			<div class="box box-{{ web.boxskin }}">*/
/* 				<div class="box-header with-border">*/
/* 					{{ web.maintitle|raw }} {{ web.subtitle|raw }}*/
/* 				</div>*/
/* 				<div class="box-body">*/
/* 					{% for row in web.rows %}*/
/* 					<div class="col-lg-1 imgbox">*/
/* 						<p><img onclick="viewphoto('{{ lib.imgrepair(row.image) }}');" src="{{ lib.imgrepair(row.image) }}" class="img-responsive" /></p>*/
/* 						<p>{{ row.district_name }}</p>*/
/* 						<p>{{ row.center_name }}</p>*/
/* 						<p>{{ row.location_name }} - {{ row.hid }}</p>*/
/* 						<p>{{ row.size_name }}</p>*/
/* 						<p><a href="javascript:viewlocation({{ row.lat }}, {{ row.long }}, '{{ row.username }}');">{{ row.username }}</a></p>*/
/* 					</div>*/
/* 					{% endfor %}*/
/* 				</div><!-- /.box-body -->*/
/* 			</div><!-- /.box -->*/
/* 		</div><!-- /.box -->*/
/* 	</form><!-- /.box -->*/
/* */
/* <!-- popups -->*/
/* <div class="modal fade" id="div-photo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/* 	<div class="modal-dialog">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 				<h4 class="modal-title" id="myModalLabel"></h4>*/
/* 			</div>*/
/* 			<div class="modal-body" id="photo"></div>*/
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div class="modal fade" id="div-location" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/* 	<div class="modal-dialog">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 				<h4 class="modal-title" id="myModalLabel"></h4>*/
/* 			</div>*/
/* 			<div class="modal-body" id="map-body">*/
/* 				<div id="map" style="width:570px; height:400px;"></div>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <!-- popups -->*/
/* {% endif %}*/
/* 				{% endblock %}*/
/* 	{% block footerscript %}*/
/* 		{{ parent() }}*/
/* 		<script language="javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>*/
/* 		<script type="text/javascript">*/
/* 		function viewphoto(imgsrc)*/
/* 		{*/
/* 			data = '<img src="'+imgsrc+'" width="570" />';*/
/* 			$('#photo').html(data);*/
/* 			$('#div-photo').modal('show');*/
/* 		}*/
/* 		function viewlocation(lat, lng, user)*/
/* 		{*/
/* 			var myLatlng = new google.maps.LatLng(lat, lng);*/
/* 			var myOptions = {*/
/* 				 zoom: 17,*/
/* 				 center: myLatlng,*/
/* 				 mapTypeId: google.maps.MapTypeId.ROADMAP*/
/* 				 }*/
/* 			  map = new google.maps.Map(document.getElementById("map"), myOptions);*/
/* 			  var marker = new google.maps.Marker({*/
/* 				  position: myLatlng, */
/* 				  map: map,*/
/* 			  title:user*/
/* 			});*/
/* 			$('#div-location').modal('show');*/
/* 		}*/
/* 		function downloadfolder()*/
/* 		{*/
/* 			theurl = 'downloadfolder.php';*/
/* 			formfields  = 'month='+$('#month').val();*/
/* 			formfields += '&year='+$('#year').val();*/
/* 			formfields += '&user_id='+$('#user_id').val();*/
/* 			$.ajax({*/
/* 				type: "POST",*/
/* 				url: theurl,*/
/* 				data: formfields,*/
/* 				beforeSend: function( xhr ) {*/
/* 				}*/
/* 			}).done(function(data) {*/
/* 			});*/
/* 		}*/
/* 		</script>*/
/* 	{% endblock %}*/
/* */
