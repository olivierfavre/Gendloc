<?php

/* default/smsloc.html.twig */
class __TwigTemplate_9971cc0d4fc163eedee6464dfd3a4e42e67a84816a471a3616bbb6c7e18a560f extends Twig_Template
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
        $__internal_5439f3f8ab07af9c97a3954ac5f37da31cd764f4360c612dff013d5332d9c7f2 = $this->env->getExtension("native_profiler");
        $__internal_5439f3f8ab07af9c97a3954ac5f37da31cd764f4360c612dff013d5332d9c7f2->enter($__internal_5439f3f8ab07af9c97a3954ac5f37da31cd764f4360c612dff013d5332d9c7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/smsloc.html.twig"));

        // line 2
        echo "
<html>
  <body>
    <table id=\"res_loc\">
      
      <thead> <!-- En-tête du tableau -->
    \t<tr>
    \t  <th>Telephone</th>
          <th>Date</th>
    \t  <th>Statut</th>
    \t</tr>

      </thead>
      <tbody style=\"text-align:left\">
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " <!-- boucle sur les lignes du tableau \$data envoyé par GendlocController -->
        <tr>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tel_number", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "heure", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "statut", array()), "html", null, true);
            echo "</td>
        ";
            // line 21
            if ($this->getAttribute($context["item"], "lat", array(), "any", true, true)) {
                echo " <!-- définition des variables class pour pouvoir afficher les informations présentes dans le popup qui apparaît lorsqu'on clique sur un marker de géoloc -->
            <td style=\"display:none;\" class=\"lat\">";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "lat", array()), "html", null, true);
                echo "</td>
            <td style=\"display:none;\" class=\"lng\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "lng", array()), "html", null, true);
                echo "</td>
            <td style=\"display:none;\" class=\"tel\">";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tel_number", array()), "html", null, true);
                echo "</td>
            <td style=\"display:none;\" class=\"heure\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "heure", array()), "html", null, true);
                echo "</td>
            ";
                // line 26
                if ($this->getAttribute($context["item"], "altitude", array(), "any", true, true)) {
                    // line 27
                    echo "                <td style=\"display:none;\" class=\"alt\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "altitude", array()), "html", null, true);
                    echo "</td> 
                <td style=\"display:none;\" class=\"com\">";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "commune", array()), "html", null, true);
                    echo "</td>
                <td style=\"display:none;\" class=\"bp\">";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "service", array()), "html", null, true);
                    echo "</td>
            ";
                }
                // line 31
                echo "        </tr>
        ";
            } else {
                // line 33
                echo "            no data
        ";
            }
            // line 35
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "      </tbody>
    </table>
  </body>
</html>
";
        
        $__internal_5439f3f8ab07af9c97a3954ac5f37da31cd764f4360c612dff013d5332d9c7f2->leave($__internal_5439f3f8ab07af9c97a3954ac5f37da31cd764f4360c612dff013d5332d9c7f2_prof);

    }

    public function getTemplateName()
    {
        return "default/smsloc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 36,  103 => 35,  99 => 33,  95 => 31,  90 => 29,  86 => 28,  81 => 27,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  63 => 22,  59 => 21,  55 => 20,  49 => 19,  45 => 18,  38 => 16,  22 => 2,);
    }
}
/* {# Affichage du tableau des géoloc dans l'onglet géoloc #}*/
/* */
/* <html>*/
/*   <body>*/
/*     <table id="res_loc">*/
/*       */
/*       <thead> <!-- En-tête du tableau -->*/
/*     	<tr>*/
/*     	  <th>Telephone</th>*/
/*           <th>Date</th>*/
/*     	  <th>Statut</th>*/
/*     	</tr>*/
/* */
/*       </thead>*/
/*       <tbody style="text-align:left">*/
/*       {% for item in data %} <!-- boucle sur les lignes du tableau $data envoyé par GendlocController -->*/
/*         <tr>*/
/*             <td>{{ item.tel_number }}</td>*/
/*             <td>{{ item.date }} - {{ item.heure }}</td>*/
/*             <td>{{ item.statut }}</td>*/
/*         {% if item.lat is defined %} <!-- définition des variables class pour pouvoir afficher les informations présentes dans le popup qui apparaît lorsqu'on clique sur un marker de géoloc -->*/
/*             <td style="display:none;" class="lat">{{ item.lat }}</td>*/
/*             <td style="display:none;" class="lng">{{ item.lng }}</td>*/
/*             <td style="display:none;" class="tel">{{ item.tel_number }}</td>*/
/*             <td style="display:none;" class="heure">{{ item.heure }}</td>*/
/*             {% if item.altitude is defined %}*/
/*                 <td style="display:none;" class="alt">{{ item.altitude }}</td> */
/*                 <td style="display:none;" class="com">{{ item.commune }}</td>*/
/*                 <td style="display:none;" class="bp">{{ item.service }}</td>*/
/*             {% endif %}*/
/*         </tr>*/
/*         {% else%}*/
/*             no data*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*   </body>*/
/* </html>*/
/* */
