<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a3b1a850c6e658c53e5f87ca0a315bbc981e07f4b8fc71d85f457845ece9f329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e7324ce19f9a963864b330ec7173272fd22604fbb032539b90b410c3ffb7f27 = $this->env->getExtension("native_profiler");
        $__internal_3e7324ce19f9a963864b330ec7173272fd22604fbb032539b90b410c3ffb7f27->enter($__internal_3e7324ce19f9a963864b330ec7173272fd22604fbb032539b90b410c3ffb7f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e7324ce19f9a963864b330ec7173272fd22604fbb032539b90b410c3ffb7f27->leave($__internal_3e7324ce19f9a963864b330ec7173272fd22604fbb032539b90b410c3ffb7f27_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_420fbb1b5d23c071d9715bfcf0ea1720e505a455844fb81a3760e4a59d18d142 = $this->env->getExtension("native_profiler");
        $__internal_420fbb1b5d23c071d9715bfcf0ea1720e505a455844fb81a3760e4a59d18d142->enter($__internal_420fbb1b5d23c071d9715bfcf0ea1720e505a455844fb81a3760e4a59d18d142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_420fbb1b5d23c071d9715bfcf0ea1720e505a455844fb81a3760e4a59d18d142->leave($__internal_420fbb1b5d23c071d9715bfcf0ea1720e505a455844fb81a3760e4a59d18d142_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_86d0e621556fa06a6c5a8ec8455f7182971a13f1a4253f4c8e859d6ae20831bc = $this->env->getExtension("native_profiler");
        $__internal_86d0e621556fa06a6c5a8ec8455f7182971a13f1a4253f4c8e859d6ae20831bc->enter($__internal_86d0e621556fa06a6c5a8ec8455f7182971a13f1a4253f4c8e859d6ae20831bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_86d0e621556fa06a6c5a8ec8455f7182971a13f1a4253f4c8e859d6ae20831bc->leave($__internal_86d0e621556fa06a6c5a8ec8455f7182971a13f1a4253f4c8e859d6ae20831bc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76fea08e9aacc3b5f3b6483c1d8f340de2c61318d3b1f91f9e26f64334f851a4 = $this->env->getExtension("native_profiler");
        $__internal_76fea08e9aacc3b5f3b6483c1d8f340de2c61318d3b1f91f9e26f64334f851a4->enter($__internal_76fea08e9aacc3b5f3b6483c1d8f340de2c61318d3b1f91f9e26f64334f851a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_76fea08e9aacc3b5f3b6483c1d8f340de2c61318d3b1f91f9e26f64334f851a4->leave($__internal_76fea08e9aacc3b5f3b6483c1d8f340de2c61318d3b1f91f9e26f64334f851a4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
