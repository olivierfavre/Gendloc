<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_13c12019c1a89d620027dbabfe042b291b6f8c7171cb167497cccc820c51d043 extends Twig_Template
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
        $__internal_3d8407701046e6b4120111189a1fa4a40af44806302cfb4f71285692d4237ffa = $this->env->getExtension("native_profiler");
        $__internal_3d8407701046e6b4120111189a1fa4a40af44806302cfb4f71285692d4237ffa->enter($__internal_3d8407701046e6b4120111189a1fa4a40af44806302cfb4f71285692d4237ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3d8407701046e6b4120111189a1fa4a40af44806302cfb4f71285692d4237ffa->leave($__internal_3d8407701046e6b4120111189a1fa4a40af44806302cfb4f71285692d4237ffa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
