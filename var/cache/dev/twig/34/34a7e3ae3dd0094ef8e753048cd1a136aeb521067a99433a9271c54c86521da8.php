<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_63d71b9a175119bdeb035e0b3f7a30028059d3847d7b601b55a7bc99fd2ea69a extends Twig_Template
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
        $__internal_143eedc98267428ac55969f8b2dad6ba0cce1b8f84f41caa4e8f39b42ecae589 = $this->env->getExtension("native_profiler");
        $__internal_143eedc98267428ac55969f8b2dad6ba0cce1b8f84f41caa4e8f39b42ecae589->enter($__internal_143eedc98267428ac55969f8b2dad6ba0cce1b8f84f41caa4e8f39b42ecae589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_143eedc98267428ac55969f8b2dad6ba0cce1b8f84f41caa4e8f39b42ecae589->leave($__internal_143eedc98267428ac55969f8b2dad6ba0cce1b8f84f41caa4e8f39b42ecae589_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
