<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_05ef927eb1e7d678780ec564d5f6550c402445ed929f67fe739935570361f055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a9e9e6e53e41bad2783259e4a06e403f0f208e93043a98cc8d8a8f5690afd52 = $this->env->getExtension("native_profiler");
        $__internal_6a9e9e6e53e41bad2783259e4a06e403f0f208e93043a98cc8d8a8f5690afd52->enter($__internal_6a9e9e6e53e41bad2783259e4a06e403f0f208e93043a98cc8d8a8f5690afd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6a9e9e6e53e41bad2783259e4a06e403f0f208e93043a98cc8d8a8f5690afd52->leave($__internal_6a9e9e6e53e41bad2783259e4a06e403f0f208e93043a98cc8d8a8f5690afd52_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7efc455dbfd80afc2d96b822314899fcd8796a9ff3d781dd81db1cdabe092a84 = $this->env->getExtension("native_profiler");
        $__internal_7efc455dbfd80afc2d96b822314899fcd8796a9ff3d781dd81db1cdabe092a84->enter($__internal_7efc455dbfd80afc2d96b822314899fcd8796a9ff3d781dd81db1cdabe092a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7efc455dbfd80afc2d96b822314899fcd8796a9ff3d781dd81db1cdabe092a84->leave($__internal_7efc455dbfd80afc2d96b822314899fcd8796a9ff3d781dd81db1cdabe092a84_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
