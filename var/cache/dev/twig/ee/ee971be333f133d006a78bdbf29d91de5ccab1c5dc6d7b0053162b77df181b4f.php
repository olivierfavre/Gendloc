<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0afdc6b0583935cf029663b90a5c15b6fd5e97512cdbe40fd520a52eeffbb123 extends Twig_Template
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
        $__internal_71213a646f795088b6996b23686c3ebd19bd4c2c99c7b88e42ccbf9a06a51be2 = $this->env->getExtension("native_profiler");
        $__internal_71213a646f795088b6996b23686c3ebd19bd4c2c99c7b88e42ccbf9a06a51be2->enter($__internal_71213a646f795088b6996b23686c3ebd19bd4c2c99c7b88e42ccbf9a06a51be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_71213a646f795088b6996b23686c3ebd19bd4c2c99c7b88e42ccbf9a06a51be2->leave($__internal_71213a646f795088b6996b23686c3ebd19bd4c2c99c7b88e42ccbf9a06a51be2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
