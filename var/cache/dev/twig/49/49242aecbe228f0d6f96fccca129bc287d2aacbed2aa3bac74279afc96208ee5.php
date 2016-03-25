<?php

/* security/login.html.twig */
class __TwigTemplate_ae21f06d13b8fdd49fdfc6e68dd923302979be2de6a794fb55b4192b308a4e8a extends Twig_Template
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
        $__internal_40a26e6bd071ba9e103cae418aa0ffc144cee1ad09a0c24ea9294a3214060a64 = $this->env->getExtension("native_profiler");
        $__internal_40a26e6bd071ba9e103cae418aa0ffc144cee1ad09a0c24ea9294a3214060a64->enter($__internal_40a26e6bd071ba9e103cae418aa0ffc144cee1ad09a0c24ea9294a3214060a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40a26e6bd071ba9e103cae418aa0ffc144cee1ad09a0c24ea9294a3214060a64->leave($__internal_40a26e6bd071ba9e103cae418aa0ffc144cee1ad09a0c24ea9294a3214060a64_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b0269f5bdeaf627f0124662ff6b5bcb6a89c76a380e3690e1b8ead14dabbdc9 = $this->env->getExtension("native_profiler");
        $__internal_3b0269f5bdeaf627f0124662ff6b5bcb6a89c76a380e3690e1b8ead14dabbdc9->enter($__internal_3b0269f5bdeaf627f0124662ff6b5bcb6a89c76a380e3690e1b8ead14dabbdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " GENDLOC - LOGIN ";
        
        $__internal_3b0269f5bdeaf627f0124662ff6b5bcb6a89c76a380e3690e1b8ead14dabbdc9->leave($__internal_3b0269f5bdeaf627f0124662ff6b5bcb6a89c76a380e3690e1b8ead14dabbdc9_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4fcc46b9af3f1e0f51c51594a303db1db168be5733073321e88612d004072fd1 = $this->env->getExtension("native_profiler");
        $__internal_4fcc46b9af3f1e0f51c51594a303db1db168be5733073321e88612d004072fd1->enter($__internal_4fcc46b9af3f1e0f51c51594a303db1db168be5733073321e88612d004072fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/log/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_4fcc46b9af3f1e0f51c51594a303db1db168be5733073321e88612d004072fd1->leave($__internal_4fcc46b9af3f1e0f51c51594a303db1db168be5733073321e88612d004072fd1_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_828f0bcbfa240576cfa20ece30a4a202100cea4ff5576c4b1d12d1892d08a05b = $this->env->getExtension("native_profiler");
        $__internal_828f0bcbfa240576cfa20ece30a4a202100cea4ff5576c4b1d12d1892d08a05b->enter($__internal_828f0bcbfa240576cfa20ece30a4a202100cea4ff5576c4b1d12d1892d08a05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/log/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/log/jquery.ui.shake.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_828f0bcbfa240576cfa20ece30a4a202100cea4ff5576c4b1d12d1892d08a05b->leave($__internal_828f0bcbfa240576cfa20ece30a4a202100cea4ff5576c4b1d12d1892d08a05b_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8e9c1a32a7d2ce135739ef83e037b448de754337a37f3d2ffe92cc7e2d96060 = $this->env->getExtension("native_profiler");
        $__internal_c8e9c1a32a7d2ce135739ef83e037b448de754337a37f3d2ffe92cc7e2d96060->enter($__internal_c8e9c1a32a7d2ce135739ef83e037b448de754337a37f3d2ffe92cc7e2d96060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c8e9c1a32a7d2ce135739ef83e037b448de754337a37f3d2ffe92cc7e2d96060->leave($__internal_c8e9c1a32a7d2ce135739ef83e037b448de754337a37f3d2ffe92cc7e2d96060_prof);

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
