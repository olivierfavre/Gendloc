<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b258bd56569358119ed61916f57b16dbfeb05d0661210b10a624a177d68d7d2a extends Twig_Template
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
        $__internal_5e605676f8d37d8e49738b1c5889d64b50113ca1fd4794b30f97f611d787d9a7 = $this->env->getExtension("native_profiler");
        $__internal_5e605676f8d37d8e49738b1c5889d64b50113ca1fd4794b30f97f611d787d9a7->enter($__internal_5e605676f8d37d8e49738b1c5889d64b50113ca1fd4794b30f97f611d787d9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5e605676f8d37d8e49738b1c5889d64b50113ca1fd4794b30f97f611d787d9a7->leave($__internal_5e605676f8d37d8e49738b1c5889d64b50113ca1fd4794b30f97f611d787d9a7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
