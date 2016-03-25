<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f5eb758ea7165527dc4e617b0f2416c53aba390f678b854fd585ef6aa275f465 extends Twig_Template
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
        $__internal_7027ccc5cec72f2832e463ea70d65d4a8d8a1aff3103b22ec56c75f01c90ab7c = $this->env->getExtension("native_profiler");
        $__internal_7027ccc5cec72f2832e463ea70d65d4a8d8a1aff3103b22ec56c75f01c90ab7c->enter($__internal_7027ccc5cec72f2832e463ea70d65d4a8d8a1aff3103b22ec56c75f01c90ab7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7027ccc5cec72f2832e463ea70d65d4a8d8a1aff3103b22ec56c75f01c90ab7c->leave($__internal_7027ccc5cec72f2832e463ea70d65d4a8d8a1aff3103b22ec56c75f01c90ab7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
