<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1ba7dcf9d6771962844c9b7b8ae39a6f7d05c8e75dc818c6a47aac13bfc20d42 extends Twig_Template
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
        $__internal_de2f2cd9d82e380251545a29a855771ab3f8e01fc4161f75f4b156fbf88d1e45 = $this->env->getExtension("native_profiler");
        $__internal_de2f2cd9d82e380251545a29a855771ab3f8e01fc4161f75f4b156fbf88d1e45->enter($__internal_de2f2cd9d82e380251545a29a855771ab3f8e01fc4161f75f4b156fbf88d1e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_de2f2cd9d82e380251545a29a855771ab3f8e01fc4161f75f4b156fbf88d1e45->leave($__internal_de2f2cd9d82e380251545a29a855771ab3f8e01fc4161f75f4b156fbf88d1e45_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
