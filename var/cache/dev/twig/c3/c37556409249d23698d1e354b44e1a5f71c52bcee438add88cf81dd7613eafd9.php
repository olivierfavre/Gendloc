<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f88511adb475bea9422d82ed6dad23b8da3630635f1d9a3a29a5fff079bd9561 extends Twig_Template
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
        $__internal_1e08580f22c2cdac2d1e4b00738ecb4f2a4f7b9648854bbe8d1cfceebaa9b35b = $this->env->getExtension("native_profiler");
        $__internal_1e08580f22c2cdac2d1e4b00738ecb4f2a4f7b9648854bbe8d1cfceebaa9b35b->enter($__internal_1e08580f22c2cdac2d1e4b00738ecb4f2a4f7b9648854bbe8d1cfceebaa9b35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1e08580f22c2cdac2d1e4b00738ecb4f2a4f7b9648854bbe8d1cfceebaa9b35b->leave($__internal_1e08580f22c2cdac2d1e4b00738ecb4f2a4f7b9648854bbe8d1cfceebaa9b35b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
