<?php

/* default/sidebar.html.twig */
class __TwigTemplate_8bd5e48c7e73f8c77117a3983fb29959a880b06847ecfb534632fc9a46f90659 extends Twig_Template
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
        $__internal_1abb187d0290373063f1eb8786f04031d8253430cd8749454e3200f0ff97c478 = $this->env->getExtension("native_profiler");
        $__internal_1abb187d0290373063f1eb8786f04031d8253430cd8749454e3200f0ff97c478->enter($__internal_1abb187d0290373063f1eb8786f04031d8253430cd8749454e3200f0ff97c478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/sidebar.html.twig"));

        // line 1
        echo "<div id=\"sidebar\" class=\"sidebar active\">

 ";
        // line 3
        echo twig_include($this->env, $context, "sidebar_menu.html.twig");
        echo "

</div>
";
        
        $__internal_1abb187d0290373063f1eb8786f04031d8253430cd8749454e3200f0ff97c478->leave($__internal_1abb187d0290373063f1eb8786f04031d8253430cd8749454e3200f0ff97c478_prof);

    }

    public function getTemplateName()
    {
        return "default/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="sidebar" class="sidebar active">*/
/* */
/*  {{ include('sidebar_menu.html.twig') }}*/
/* */
/* </div>*/
/* */
