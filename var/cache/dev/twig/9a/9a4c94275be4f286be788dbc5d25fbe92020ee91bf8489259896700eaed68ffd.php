<?php

/* default/searchResult.html.twig */
class __TwigTemplate_ac6ff4d4239b08894cec31aabe5a5a6969e14f5af1b2438dcfc3028ac1bcafde extends Twig_Template
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
        $__internal_adb48fd156ae2219310e400dbf7fa831587e222fdf237e04ac5d29f0755e1434 = $this->env->getExtension("native_profiler");
        $__internal_adb48fd156ae2219310e400dbf7fa831587e222fdf237e04ac5d29f0755e1434->enter($__internal_adb48fd156ae2219310e400dbf7fa831587e222fdf237e04ac5d29f0755e1434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/searchResult.html.twig"));

        // line 2
        echo "
<html>\t
<body>
\t
\t
    ";
        // line 7
        if ($this->getAttribute((isset($context["res"]) ? $context["res"] : null), "place", array(), "any", true, true)) {
            echo " ";
            // line 8
            echo "
    <h3>RÃ©sultats de la recherche pour le terme ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["term"]) ? $context["term"] : $this->getContext($context, "term")), "html", null, true);
            echo "</h3>

    <table id=\"nominatim-table\"><caption>BASE NOMINATIM</caption>
   
        <thead> <!-- En-tête du tableau -->
            <tr>
    \t\t  <th style=\"display:none;\">lat</th>
        \t  <th style=\"display:none;\">lon</th>
    \t\t  <th>nom</th>
    \t\t  <th>type</th>
    \t\t</tr>
    \t</thead><tbody style=\"text-align:left\">
\t\t
\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "place", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pl"]) {
                echo " ";
                // line 23
                echo "\t         
        <tr class=\"\">
\t\t  <td style=\"display:none;\" class=\"lat\">
\t\t    ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["pl"], 0, array()), "attributes", array()), "lat", array()), "html", null, true);
                echo "
\t\t  </td><td style=\"display:none;\" class=\"lng\">
\t\t    ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["pl"], 0, array()), "attributes", array()), "lon", array()), "html", null, true);
                echo "
\t\t  </td><td class=\"nom\"> 
\t\t    ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["pl"], 0, array()), "attributes", array()), "display_name", array()), "html", null, true);
                echo "
\t\t  </td><td>
\t\t    ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["pl"], 0, array()), "attributes", array()), "type", array()), "html", null, true);
                echo "
\t\t  </td>
\t\t<tr>
\t\t
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t
\t  </tbody></table>
\t  
\t  ";
        } else {
            // line 41
            echo "\t  
\t      <h3>Aucun r&eacutesultat pour le terme ";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["term"]) ? $context["term"] : $this->getContext($context, "term")), "html", null, true);
            echo ".</h3>
\t      
\t  ";
        }
        // line 45
        echo "\t  


</body>
</html>
";
        
        $__internal_adb48fd156ae2219310e400dbf7fa831587e222fdf237e04ac5d29f0755e1434->leave($__internal_adb48fd156ae2219310e400dbf7fa831587e222fdf237e04ac5d29f0755e1434_prof);

    }

    public function getTemplateName()
    {
        return "default/searchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 45,  96 => 42,  93 => 41,  87 => 37,  76 => 32,  71 => 30,  66 => 28,  61 => 26,  56 => 23,  51 => 22,  35 => 9,  32 => 8,  29 => 7,  22 => 2,);
    }
}
/* {# Affichage des résultats dans l'onglet recherche de la sidebar #}*/
/* */
/* <html>	*/
/* <body>*/
/* 	*/
/* 	*/
/*     {% if res.place is defined %} {# Vérification de l'existence d'un résultat #}*/
/* */
/*     <h3>RÃ©sultats de la recherche pour le terme {{ term }}</h3>*/
/* */
/*     <table id="nominatim-table"><caption>BASE NOMINATIM</caption>*/
/*    */
/*         <thead> <!-- En-tête du tableau -->*/
/*             <tr>*/
/*     		  <th style="display:none;">lat</th>*/
/*         	  <th style="display:none;">lon</th>*/
/*     		  <th>nom</th>*/
/*     		  <th>type</th>*/
/*     		</tr>*/
/*     	</thead><tbody style="text-align:left">*/
/* 		*/
/* 		{% for pl in res.place %} {# boucle sur les résultats pour affichage des noms et types #}*/
/* 	         */
/*         <tr class="">*/
/* 		  <td style="display:none;" class="lat">*/
/* 		    {{ pl.0.attributes.lat }}*/
/* 		  </td><td style="display:none;" class="lng">*/
/* 		    {{ pl.0.attributes.lon }}*/
/* 		  </td><td class="nom"> */
/* 		    {{ pl.0.attributes.display_name }}*/
/* 		  </td><td>*/
/* 		    {{ pl.0.attributes.type }}*/
/* 		  </td>*/
/* 		<tr>*/
/* 		*/
/* 		{% endfor %}*/
/* 		*/
/* 	  </tbody></table>*/
/* 	  */
/* 	  {% else %}*/
/* 	  */
/* 	      <h3>Aucun r&eacutesultat pour le terme {{ term }}.</h3>*/
/* 	      */
/* 	  {% endif %}*/
/* 	  */
/* */
/* */
/* </body>*/
/* </html>*/
/* */
