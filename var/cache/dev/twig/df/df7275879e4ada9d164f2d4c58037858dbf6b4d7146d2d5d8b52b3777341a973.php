<?php

/* default/geoloc.html.twig */
class __TwigTemplate_49e544f196abeca6a40e082eadf92835478435f10581d3ab0c3037977e9498e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("gendloc.html.twig", "default/geoloc.html.twig", 3);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "gendloc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3afe2b19784ef1aebe7d0427c766392a690b3607b667fb73c4d2be9cf3df57b1 = $this->env->getExtension("native_profiler");
        $__internal_3afe2b19784ef1aebe7d0427c766392a690b3607b667fb73c4d2be9cf3df57b1->enter($__internal_3afe2b19784ef1aebe7d0427c766392a690b3607b667fb73c4d2be9cf3df57b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/geoloc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3afe2b19784ef1aebe7d0427c766392a690b3607b667fb73c4d2be9cf3df57b1->leave($__internal_3afe2b19784ef1aebe7d0427c766392a690b3607b667fb73c4d2be9cf3df57b1_prof);

    }

    // line 5
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e8f8f73bdc65571e0af3d29f9bfc0c4fc850a2df36bb8be0d061e72e7ff14bc0 = $this->env->getExtension("native_profiler");
        $__internal_e8f8f73bdc65571e0af3d29f9bfc0c4fc850a2df36bb8be0d061e72e7ff14bc0->enter($__internal_e8f8f73bdc65571e0af3d29f9bfc0c4fc850a2df36bb8be0d061e72e7ff14bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 6
        echo "<div id=\"sidebar\" class=\"sidebar active\">
  ";
        // line 7
        echo twig_include($this->env, $context, "sidebar_menu.html.twig");
        echo "
  
  <!-- Tab panes -->
  <div class=\"sidebar-content collapsed\">

    <!--tab GEOLOC-->
    <div class=\"sidebar-pane.active\" id=\"geoloc\">
      <h1>G&eacuteolocalisation</h1>

      <input id=\"phone\" type=\"tel\"></br></br>
      <select name=\"message\">
\t<option value=\"Geoloc\">Geoloc</option>
\t<option value=\"Tracking\">Tracking</option>
\t<option value=\"APN\">Photo</option>
\t<option value=\"APNV\" disabled>Video</option>
\t
      </select>
      <select name=\"lang\">
\t<option value=\"Français\">Fran&ccedilais</option>
\t<option value=\"Anglais\" disabled >Anglais</option>
\t<option value=\"Espagnol\" disabled >Espagnol</option>
\t<option value=\"Italien\" disabled >Italien</option>
\t<option value=\"Allemand\" disabled >Allemand</option>
\t<option value=\"Russe\" disabled >Russe</option>
      </select></br></br>
      <form id=\"validite\">
\t<input type=\"radio\" name=\"val\" value=\"1\" checked>2 HEURES
\t<input type=\"radio\" name=\"val\" value=\"2\">24 HEURES
\t<input type=\"radio\" name=\"val\" value=\"3\">DEFINITIF</br></br>
\t<input type=\"button\" onclick=\"sms()\" value=\"ENVOYER SMS\" >
      </form></br>
      <div id=\"res_sms\"></div>
      <div id=\"res_gendloc\"></div>
\t\t\t\t
      <script>
      // script qui gère le champ \"téléphone\"
\t\$(\"#phone\").intlTelInput({
\t    defaultCountry: \"auto\",
            preferredCountries: ['fr', 'gb', 'it', 'de', 'es', 'ch'],
\t    geoIpLookup: function(callback) {
\t        \$.get('http://ipinfo.io', function() {}, \"jsonp\").always(function(resp) {
\t            var countryCode = (resp && resp.country) ? resp.country : \"\";
\t            callback(countryCode);
\t        });
\t    },
\t    utilsScript: \"./js/intl-tel-input/lib/libphonenumber/build/utils.js\" // just for formatting/placeholders etc
\t});
\t
\t// Fonction qui permet l'envoi du sms
\tfunction sms(){

\t    //récupération des valeurs
\t    var telInput = \$(\"#phone\").intlTelInput(\"getNumber\");
\t    if (telInput) {
\t 
            var val=\$('input[name=val]:checked', '#validite').val()
            message = \$(\"#geoloc\").find( \"select[name='message']\" ).val(),
\t        lang = \$(\"#geoloc\").find( \"select[name='lang']\" ).val();
\t        url = \"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("sms_send");
        echo "\";
\t        //Send the data using post
\t        var posting = \$.get( url, { message: message, lang: lang, val: val, tel: telInput}) ;
\t        // Put the results in a div
\t        posting.done(function( data ) {
                    var content = \$( data );
                    \$( \"#res_sms\" ).empty().append( content );
\t        })
\t    }
\t}

\t//Mise à jour données gendloc 
\t\$(\"#res_sms\").load(\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("maj_sms");
        echo "\");
\tsetInterval(function(){
\t\$(\"#res_sms\").load(\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("maj_sms");
        echo "\")
\t}, 15000);
      </script>

    </div>
  </div>
</div>
";
        
        $__internal_e8f8f73bdc65571e0af3d29f9bfc0c4fc850a2df36bb8be0d061e72e7ff14bc0->leave($__internal_e8f8f73bdc65571e0af3d29f9bfc0c4fc850a2df36bb8be0d061e72e7ff14bc0_prof);

    }

    public function getTemplateName()
    {
        return "default/geoloc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 79,  119 => 77,  104 => 65,  43 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# Affichage de l'onglet géoloc de la sidebar #}*/
/* */
/* {% extends 'gendloc.html.twig'%}*/
/* */
/* {% block sidebar%}*/
/* <div id="sidebar" class="sidebar active">*/
/*   {{ include('sidebar_menu.html.twig') }}*/
/*   */
/*   <!-- Tab panes -->*/
/*   <div class="sidebar-content collapsed">*/
/* */
/*     <!--tab GEOLOC-->*/
/*     <div class="sidebar-pane.active" id="geoloc">*/
/*       <h1>G&eacuteolocalisation</h1>*/
/* */
/*       <input id="phone" type="tel"></br></br>*/
/*       <select name="message">*/
/* 	<option value="Geoloc">Geoloc</option>*/
/* 	<option value="Tracking">Tracking</option>*/
/* 	<option value="APN">Photo</option>*/
/* 	<option value="APNV" disabled>Video</option>*/
/* 	*/
/*       </select>*/
/*       <select name="lang">*/
/* 	<option value="Français">Fran&ccedilais</option>*/
/* 	<option value="Anglais" disabled >Anglais</option>*/
/* 	<option value="Espagnol" disabled >Espagnol</option>*/
/* 	<option value="Italien" disabled >Italien</option>*/
/* 	<option value="Allemand" disabled >Allemand</option>*/
/* 	<option value="Russe" disabled >Russe</option>*/
/*       </select></br></br>*/
/*       <form id="validite">*/
/* 	<input type="radio" name="val" value="1" checked>2 HEURES*/
/* 	<input type="radio" name="val" value="2">24 HEURES*/
/* 	<input type="radio" name="val" value="3">DEFINITIF</br></br>*/
/* 	<input type="button" onclick="sms()" value="ENVOYER SMS" >*/
/*       </form></br>*/
/*       <div id="res_sms"></div>*/
/*       <div id="res_gendloc"></div>*/
/* 				*/
/*       <script>*/
/*       // script qui gère le champ "téléphone"*/
/* 	$("#phone").intlTelInput({*/
/* 	    defaultCountry: "auto",*/
/*             preferredCountries: ['fr', 'gb', 'it', 'de', 'es', 'ch'],*/
/* 	    geoIpLookup: function(callback) {*/
/* 	        $.get('http://ipinfo.io', function() {}, "jsonp").always(function(resp) {*/
/* 	            var countryCode = (resp && resp.country) ? resp.country : "";*/
/* 	            callback(countryCode);*/
/* 	        });*/
/* 	    },*/
/* 	    utilsScript: "./js/intl-tel-input/lib/libphonenumber/build/utils.js" // just for formatting/placeholders etc*/
/* 	});*/
/* 	*/
/* 	// Fonction qui permet l'envoi du sms*/
/* 	function sms(){*/
/* */
/* 	    //récupération des valeurs*/
/* 	    var telInput = $("#phone").intlTelInput("getNumber");*/
/* 	    if (telInput) {*/
/* 	 */
/*             var val=$('input[name=val]:checked', '#validite').val()*/
/*             message = $("#geoloc").find( "select[name='message']" ).val(),*/
/* 	        lang = $("#geoloc").find( "select[name='lang']" ).val();*/
/* 	        url = "{{ path('sms_send') }}";*/
/* 	        //Send the data using post*/
/* 	        var posting = $.get( url, { message: message, lang: lang, val: val, tel: telInput}) ;*/
/* 	        // Put the results in a div*/
/* 	        posting.done(function( data ) {*/
/*                     var content = $( data );*/
/*                     $( "#res_sms" ).empty().append( content );*/
/* 	        })*/
/* 	    }*/
/* 	}*/
/* */
/* 	//Mise à jour données gendloc */
/* 	$("#res_sms").load("{{ path('maj_sms')}}");*/
/* 	setInterval(function(){*/
/* 	$("#res_sms").load("{{ path('maj_sms')}}")*/
/* 	}, 15000);*/
/*       </script>*/
/* */
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
