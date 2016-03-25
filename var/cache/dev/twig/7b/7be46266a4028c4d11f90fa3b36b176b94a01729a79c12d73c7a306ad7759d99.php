<?php

/* security/login.html.twig */
class __TwigTemplate_242510cd8326abb89da51e7bb3256d7f8ab0828881119b4ca80d2dab4b1ca867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("gendloc.html.twig", "security/login.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "gendloc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95d44fc101779916e7ea0508b4c309ddc1aa1c043332dc21b2f07cd2869866e7 = $this->env->getExtension("native_profiler");
        $__internal_95d44fc101779916e7ea0508b4c309ddc1aa1c043332dc21b2f07cd2869866e7->enter($__internal_95d44fc101779916e7ea0508b4c309ddc1aa1c043332dc21b2f07cd2869866e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95d44fc101779916e7ea0508b4c309ddc1aa1c043332dc21b2f07cd2869866e7->leave($__internal_95d44fc101779916e7ea0508b4c309ddc1aa1c043332dc21b2f07cd2869866e7_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9896f604b24a90c1da9b474b770e129683d24643ff2153356ba93fbb81fed91e = $this->env->getExtension("native_profiler");
        $__internal_9896f604b24a90c1da9b474b770e129683d24643ff2153356ba93fbb81fed91e->enter($__internal_9896f604b24a90c1da9b474b770e129683d24643ff2153356ba93fbb81fed91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " GENDLOC - LOGIN ";
        
        $__internal_9896f604b24a90c1da9b474b770e129683d24643ff2153356ba93fbb81fed91e->leave($__internal_9896f604b24a90c1da9b474b770e129683d24643ff2153356ba93fbb81fed91e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_90a3b7b0f57278bc5325890aba2c9cc44b6f1a0597072d0fca814748deb520fe = $this->env->getExtension("native_profiler");
        $__internal_90a3b7b0f57278bc5325890aba2c9cc44b6f1a0597072d0fca814748deb520fe->enter($__internal_90a3b7b0f57278bc5325890aba2c9cc44b6f1a0597072d0fca814748deb520fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/log/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_90a3b7b0f57278bc5325890aba2c9cc44b6f1a0597072d0fca814748deb520fe->leave($__internal_90a3b7b0f57278bc5325890aba2c9cc44b6f1a0597072d0fca814748deb520fe_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_418f370823f9a5ee8f4aad5d334edb7c16ed9d07bbbd4e4c7f1d764773596d07 = $this->env->getExtension("native_profiler");
        $__internal_418f370823f9a5ee8f4aad5d334edb7c16ed9d07bbbd4e4c7f1d764773596d07->enter($__internal_418f370823f9a5ee8f4aad5d334edb7c16ed9d07bbbd4e4c7f1d764773596d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/log/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/log/jquery.ui.shake.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_418f370823f9a5ee8f4aad5d334edb7c16ed9d07bbbd4e4c7f1d764773596d07->leave($__internal_418f370823f9a5ee8f4aad5d334edb7c16ed9d07bbbd4e4c7f1d764773596d07_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_126e5c3266d3c3db0eca3bc581a57a623398265f1e33a2dad2da6cf3921ea183 = $this->env->getExtension("native_profiler");
        $__internal_126e5c3266d3c3db0eca3bc581a57a623398265f1e33a2dad2da6cf3921ea183->enter($__internal_126e5c3266d3c3db0eca3bc581a57a623398265f1e33a2dad2da6cf3921ea183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "
<div id=\"main\">
</br></br></br></br></br></br></br></br>
<div id=\"box\">
    
<form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Nom :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"input\"/>

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" class=\"input\"/><br/>
\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" >
\t<input type=\"submit\" class=\"button button-primary\" value=\"ENTRER\" id=\"login\"/>

\t<div id=\"error\">
        ";
        // line 34
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 35
            echo "            Combinaison login/mot de passe invalide.
            <script>
\t\t      \$('#box').shake();
            </script>
\t    ";
        }
        // line 40
        echo "\t</div>
</form>
</div>
</div>
";
        
        $__internal_126e5c3266d3c3db0eca3bc581a57a623398265f1e33a2dad2da6cf3921ea183->leave($__internal_126e5c3266d3c3db0eca3bc581a57a623398265f1e33a2dad2da6cf3921ea183_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 40,  119 => 35,  117 => 34,  110 => 30,  103 => 26,  98 => 24,  91 => 19,  85 => 18,  76 => 14,  71 => 13,  65 => 12,  55 => 9,  49 => 8,  37 => 6,  11 => 4,);
    }
}
/* {# Affichage de la page de connexion #}*/
/* */
/* {# app/Resources/views/security/login.html.twig #}*/
/* {% extends 'gendloc.html.twig' %}*/
/* */
/* {% block title %} GENDLOC - LOGIN {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <link href="{{ asset('css/log/style.css') }}" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="{{ asset('js/log/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('js/log/jquery.ui.shake.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* <div id="main">*/
/* </br></br></br></br></br></br></br></br>*/
/* <div id="box">*/
/*     */
/* <form action="{{ path('login') }}" method="post">*/
/*     <label for="username">Nom :</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" class="input"/>*/
/* */
/*     <label for="password">Mot de passe :</label>*/
/*     <input type="password" id="password" name="_password" class="input"/><br/>*/
/* 	<input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}" >*/
/* 	<input type="submit" class="button button-primary" value="ENTRER" id="login"/>*/
/* */
/* 	<div id="error">*/
/*         {% if error %}*/
/*             Combinaison login/mot de passe invalide.*/
/*             <script>*/
/* 		      $('#box').shake();*/
/*             </script>*/
/* 	    {% endif %}*/
/* 	</div>*/
/* </form>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
