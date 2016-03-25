<?php

/* default/succes.html.twig */
class __TwigTemplate_0e5915e2f469091db4b8162b68e8a4dbe338fd450b50f9778e4b346badfa0488 extends Twig_Template
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
        $__internal_fc9958a794c193e1f50bee991da9206369c928c06472e1e79e4a73faf60d9059 = $this->env->getExtension("native_profiler");
        $__internal_fc9958a794c193e1f50bee991da9206369c928c06472e1e79e4a73faf60d9059->enter($__internal_fc9958a794c193e1f50bee991da9206369c928c06472e1e79e4a73faf60d9059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/succes.html.twig"));

        // line 2
        echo "
<html>
  <body>
   

\t";
        // line 7
        if (((isset($context["prec"]) ? $context["prec"] : $this->getContext($context, "prec")) <= 15)) {
            // line 8
            echo "\t<table width='100%'>
\t\t<tr><td><div id='vert'>PRECISION 100 m</div></td></tr>
\t\t<tr><td><div id='vert'>PRECISION 30 m</div></td></tr>
\t\t<tr><td><div id='vert'>PRECISION 15 m</div></td></tr>
\t</table><br>
\t<table width='100%'><tr><td><H1>SUCCES</H1></td></tr></table></br>Message envoy&eacute &agrave ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["unite"]) ? $context["unite"] : $this->getContext($context, "unite")), "html", null, true);
            echo "
\t
\t";
        } elseif ((        // line 15
(isset($context["prec"]) ? $context["prec"] : $this->getContext($context, "prec")) <= 30)) {
            // line 16
            echo "\t<table width='100%'>
\t\t<tr><td><div id='vert'>PRECISION 100 m</div></td></tr>
\t\t<tr><td><div id='vert'>PRECISION 30 m</div></td></tr>
\t\t<tr><td><div id='rouge'>PRECISION 15 m</div></td></tr>
\t</table><br>
        <table width='100%'><tr><td><H1>PATIENTER</H1></td></tr></table>
\t";
        } else {
            // line 23
            echo "\t<table width='100%'>
\t\t<tr><td><div id='vert'>PRECISION 100 m</div></td></tr>
\t\t<tr><td><div id='rouge'>PRECISION 30 m</div></td></tr>
\t\t<tr><td><div id='rouge'>PRECISION 15 m</div></td></tr>
\t</table><br>
        <table width='100%'><tr><td><H1>PATIENTER</H1></td></tr></table>
\t";
        }
        // line 30
        echo "

    
  </body>
</html>
";
        
        $__internal_fc9958a794c193e1f50bee991da9206369c928c06472e1e79e4a73faf60d9059->leave($__internal_fc9958a794c193e1f50bee991da9206369c928c06472e1e79e4a73faf60d9059_prof);

    }

    public function getTemplateName()
    {
        return "default/succes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 30,  54 => 23,  45 => 16,  43 => 15,  38 => 13,  31 => 8,  29 => 7,  22 => 2,);
    }
}
/* {# Gestion de l'affichage des informations visibles par le requérant  #}*/
/* */
/* <html>*/
/*   <body>*/
/*    */
/* */
/* 	{% if prec <= 15 %}*/
/* 	<table width='100%'>*/
/* 		<tr><td><div id='vert'>PRECISION 100 m</div></td></tr>*/
/* 		<tr><td><div id='vert'>PRECISION 30 m</div></td></tr>*/
/* 		<tr><td><div id='vert'>PRECISION 15 m</div></td></tr>*/
/* 	</table><br>*/
/* 	<table width='100%'><tr><td><H1>SUCCES</H1></td></tr></table></br>Message envoy&eacute &agrave {{ unite }}*/
/* 	*/
/* 	{% elseif prec <= 30 %}*/
/* 	<table width='100%'>*/
/* 		<tr><td><div id='vert'>PRECISION 100 m</div></td></tr>*/
/* 		<tr><td><div id='vert'>PRECISION 30 m</div></td></tr>*/
/* 		<tr><td><div id='rouge'>PRECISION 15 m</div></td></tr>*/
/* 	</table><br>*/
/*         <table width='100%'><tr><td><H1>PATIENTER</H1></td></tr></table>*/
/* 	{% else %}*/
/* 	<table width='100%'>*/
/* 		<tr><td><div id='vert'>PRECISION 100 m</div></td></tr>*/
/* 		<tr><td><div id='rouge'>PRECISION 30 m</div></td></tr>*/
/* 		<tr><td><div id='rouge'>PRECISION 15 m</div></td></tr>*/
/* 	</table><br>*/
/*         <table width='100%'><tr><td><H1>PATIENTER</H1></td></tr></table>*/
/* 	{% endif %}*/
/* */
/* */
/*     */
/*   </body>*/
/* </html>*/
/* */
