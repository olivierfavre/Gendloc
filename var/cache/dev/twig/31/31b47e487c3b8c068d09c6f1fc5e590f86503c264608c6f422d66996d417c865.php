<?php

/* :default:searchResult_old.html.twig */
class __TwigTemplate_cc76c9f402a55cf3cb5c2e29fdc562b0e15b6b3d952a537682e349f980f80f89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("gendloc.html.twig", ":default:searchResult_old.html.twig", 1);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'search' => array($this, 'block_search'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "gendloc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e7b281f439ec64ba9d2fb49ddb712c8da78efe7859ba201c26f17535a93c158 = $this->env->getExtension("native_profiler");
        $__internal_0e7b281f439ec64ba9d2fb49ddb712c8da78efe7859ba201c26f17535a93c158->enter($__internal_0e7b281f439ec64ba9d2fb49ddb712c8da78efe7859ba201c26f17535a93c158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:searchResult_old.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e7b281f439ec64ba9d2fb49ddb712c8da78efe7859ba201c26f17535a93c158->leave($__internal_0e7b281f439ec64ba9d2fb49ddb712c8da78efe7859ba201c26f17535a93c158_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8af1ab7051c64b0f91c68426fbfeb6b3b0bc5b221bf3e468acea5a1bf5eb09a0 = $this->env->getExtension("native_profiler");
        $__internal_8af1ab7051c64b0f91c68426fbfeb6b3b0bc5b221bf3e468acea5a1bf5eb09a0->enter($__internal_8af1ab7051c64b0f91c68426fbfeb6b3b0bc5b221bf3e468acea5a1bf5eb09a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "<div id=\"sidebar\" class=\"sidebar active\">
";
        // line 6
        echo twig_include($this->env, $context, "sidebar_menu.html.twig");
        echo "

      <!-- Tab panes -->
      <div class=\"sidebar-content collapsed\">
\t
\t";
        // line 11
        $this->displayBlock('search', $context, $blocks);
        // line 75
        echo "\t
      </div>
</div>
";
        
        $__internal_8af1ab7051c64b0f91c68426fbfeb6b3b0bc5b221bf3e468acea5a1bf5eb09a0->leave($__internal_8af1ab7051c64b0f91c68426fbfeb6b3b0bc5b221bf3e468acea5a1bf5eb09a0_prof);

    }

    // line 11
    public function block_search($context, array $blocks = array())
    {
        $__internal_045738f2fe47ffce637dbeee4f4ab666cfe216d77ca124c343fed4a2b9351d5a = $this->env->getExtension("native_profiler");
        $__internal_045738f2fe47ffce637dbeee4f4ab666cfe216d77ca124c343fed4a2b9351d5a->enter($__internal_045738f2fe47ffce637dbeee4f4ab666cfe216d77ca124c343fed4a2b9351d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 12
        echo "\t<div class=\"sidebar-pane.active\" id=\"search\">
          <h1>Recherche</h1>
\t  <h3>Attention vue écran</h3>
\t  <script>
\t    function fillform(){
\t        searchform.nwlng.value = nw.lng;
\t        searchform.nwlat.value = nw.lat;
\t        searchform.selng.value = se.lng;
\t        searchform.selat.value = se.lat;
\t    }
      </script>
\t  <form name=\"searchform\" action=";
        // line 23
        echo $this->env->getExtension('routing')->getPath("search_result");
        echo " onsubmit=\"fillform();\">
\t    <input type=\"TEXT\" name=\"term\" id=\"term\" autofocus>
\t    <input type=\"submit\" value=\"RECHERCHER\" >
\t    <input type=\"hidden\" name=\"nwlng\">
\t    <input type=\"hidden\" name=\"nwlat\">
\t    <input type=\"hidden\" name=\"selng\">
\t    <input type=\"hidden\" name=\"selat\">
\t\t\t\t</br></br>
\t\t\t\t<div id=\"res_topo\"></div>
\t\t\t\t<div id=\"res_BAN\"></div>
\t\t\t\t<div id=\"res_com\"></div>
\t </form>
\t  Recherche floue IGN, base adresse nationale et nominatim.
\t  </br>
\t  

\t  ";
        // line 39
        if ($this->getAttribute((isset($context["res"]) ? $context["res"] : null), "place", array(), "any", true, true)) {
            // line 40
            echo "
\t  <h3>Résultats de la recherche pour le terme ";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["term"]) ? $context["term"] : $this->getContext($context, "term")), "html", null, true);
            echo "</h3>

\t  <div id=\"res_nominatim\">
\t    <table id=\"nominatim-table\"><caption>BASE NOMINATIM</caption>
   
\t      <thead> <!-- En-t�te du tableau -->
\t\t<tr>
\t\t  <th style=\"display:none;\">lat</th>
\t\t  <th>nom</th>
\t\t  <th>type</th>
\t\t  <th style=\"display:none;\">lon</th>
\t\t</tr>
\t      </thead><tbody style=\"text-align:left\">
\t\t
\t\t";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "place", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pl"]) {
                // line 56
                echo "\t         
\t\t<tr class=\"\"><td style=\"display:none;\">
\t\t    ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["pl"], 0, array()), "attributes", array()), "lat", array()), "html", null, true);
                echo "
\t\t  </td><td class=\"nom\"> 
\t\t    ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["pl"], 0, array()), "attributes", array()), "display_name", array()), "html", null, true);
                echo "
\t\t  </td><td>
\t\t    ";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["pl"], 0, array()), "attributes", array()), "type", array()), "html", null, true);
                echo "
\t\t  </td><td style=\"display:none;\">
\t\t    ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["pl"], 0, array()), "attributes", array()), "lon", array()), "html", null, true);
                echo "
\t\t</td><tr>
\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t    </tbody></table>
\t  </div>
\t  ";
        } else {
            // line 70
            echo "\t      <h3>Aucun resultat pour le terme ";
            echo twig_escape_filter($this->env, (isset($context["term"]) ? $context["term"] : $this->getContext($context, "term")), "html", null, true);
            echo ".</h3>
\t  ";
        }
        // line 72
        echo "\t  
\t</div>
\t";
        
        $__internal_045738f2fe47ffce637dbeee4f4ab666cfe216d77ca124c343fed4a2b9351d5a->leave($__internal_045738f2fe47ffce637dbeee4f4ab666cfe216d77ca124c343fed4a2b9351d5a_prof);

    }

    public function getTemplateName()
    {
        return ":default:searchResult_old.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 72,  161 => 70,  156 => 67,  147 => 64,  142 => 62,  137 => 60,  132 => 58,  128 => 56,  124 => 55,  107 => 41,  104 => 40,  102 => 39,  83 => 23,  70 => 12,  64 => 11,  54 => 75,  52 => 11,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'gendloc.html.twig'%}*/
/* */
/* */
/* {% block sidebar%}*/
/* <div id="sidebar" class="sidebar active">*/
/* {{ include('sidebar_menu.html.twig') }}*/
/* */
/*       <!-- Tab panes -->*/
/*       <div class="sidebar-content collapsed">*/
/* 	*/
/* 	{% block search %}*/
/* 	<div class="sidebar-pane.active" id="search">*/
/*           <h1>Recherche</h1>*/
/* 	  <h3>Attention vue écran</h3>*/
/* 	  <script>*/
/* 	    function fillform(){*/
/* 	        searchform.nwlng.value = nw.lng;*/
/* 	        searchform.nwlat.value = nw.lat;*/
/* 	        searchform.selng.value = se.lng;*/
/* 	        searchform.selat.value = se.lat;*/
/* 	    }*/
/*       </script>*/
/* 	  <form name="searchform" action={{ path('search_result') }} onsubmit="fillform();">*/
/* 	    <input type="TEXT" name="term" id="term" autofocus>*/
/* 	    <input type="submit" value="RECHERCHER" >*/
/* 	    <input type="hidden" name="nwlng">*/
/* 	    <input type="hidden" name="nwlat">*/
/* 	    <input type="hidden" name="selng">*/
/* 	    <input type="hidden" name="selat">*/
/* 				</br></br>*/
/* 				<div id="res_topo"></div>*/
/* 				<div id="res_BAN"></div>*/
/* 				<div id="res_com"></div>*/
/* 	 </form>*/
/* 	  Recherche floue IGN, base adresse nationale et nominatim.*/
/* 	  </br>*/
/* 	  */
/* */
/* 	  {% if res.place is defined %}*/
/* */
/* 	  <h3>Résultats de la recherche pour le terme {{ term }}</h3>*/
/* */
/* 	  <div id="res_nominatim">*/
/* 	    <table id="nominatim-table"><caption>BASE NOMINATIM</caption>*/
/*    */
/* 	      <thead> <!-- En-t�te du tableau -->*/
/* 		<tr>*/
/* 		  <th style="display:none;">lat</th>*/
/* 		  <th>nom</th>*/
/* 		  <th>type</th>*/
/* 		  <th style="display:none;">lon</th>*/
/* 		</tr>*/
/* 	      </thead><tbody style="text-align:left">*/
/* 		*/
/* 		{% for pl in res.place %}*/
/* 	         */
/* 		<tr class=""><td style="display:none;">*/
/* 		    {{ pl.0.attributes.lat }}*/
/* 		  </td><td class="nom"> */
/* 		    {{ pl.0.attributes.display_name }}*/
/* 		  </td><td>*/
/* 		    {{ pl.0.attributes.type }}*/
/* 		  </td><td style="display:none;">*/
/* 		    {{ pl.0.attributes.lon }}*/
/* 		</td><tr>*/
/* 		  {% endfor %}*/
/* 	    </tbody></table>*/
/* 	  </div>*/
/* 	  {% else %}*/
/* 	      <h3>Aucun resultat pour le terme {{ term }}.</h3>*/
/* 	  {% endif %}*/
/* 	  */
/* 	</div>*/
/* 	{% endblock %}*/
/* 	*/
/*       </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
