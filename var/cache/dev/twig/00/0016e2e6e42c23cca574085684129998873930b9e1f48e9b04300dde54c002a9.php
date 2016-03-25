<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_43f17e3ff7ddf8bba165e7063fa70c591940fc06828f3797535bed26c77c2e64 extends Twig_Template
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
        $__internal_5f266f4d98b7532af509a1fdf0586f6aa70206594a00046fc78e1241bb9688df = $this->env->getExtension("native_profiler");
        $__internal_5f266f4d98b7532af509a1fdf0586f6aa70206594a00046fc78e1241bb9688df->enter($__internal_5f266f4d98b7532af509a1fdf0586f6aa70206594a00046fc78e1241bb9688df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5f266f4d98b7532af509a1fdf0586f6aa70206594a00046fc78e1241bb9688df->leave($__internal_5f266f4d98b7532af509a1fdf0586f6aa70206594a00046fc78e1241bb9688df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
