<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_22f3429d341c976c500d8df0a0e5bde3fa356ed515e1ef1703b486f1ce425dba extends Twig_Template
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
        $__internal_79ca9e664ed75a4e056a8b47f1d9b84f229d806a5054956c57c2bf0235ea23cf = $this->env->getExtension("native_profiler");
        $__internal_79ca9e664ed75a4e056a8b47f1d9b84f229d806a5054956c57c2bf0235ea23cf->enter($__internal_79ca9e664ed75a4e056a8b47f1d9b84f229d806a5054956c57c2bf0235ea23cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_79ca9e664ed75a4e056a8b47f1d9b84f229d806a5054956c57c2bf0235ea23cf->leave($__internal_79ca9e664ed75a4e056a8b47f1d9b84f229d806a5054956c57c2bf0235ea23cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
