<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4ba561d1b6e03df27ada919cd2c3393929b8937812e6010f575bdbef0dc5f360 extends Twig_Template
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
        $__internal_fb9abac941fa211e9d9b8b7c3bbe9b1bd3b7501a72f0d37feb7b462d1dcfc341 = $this->env->getExtension("native_profiler");
        $__internal_fb9abac941fa211e9d9b8b7c3bbe9b1bd3b7501a72f0d37feb7b462d1dcfc341->enter($__internal_fb9abac941fa211e9d9b8b7c3bbe9b1bd3b7501a72f0d37feb7b462d1dcfc341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fb9abac941fa211e9d9b8b7c3bbe9b1bd3b7501a72f0d37feb7b462d1dcfc341->leave($__internal_fb9abac941fa211e9d9b8b7c3bbe9b1bd3b7501a72f0d37feb7b462d1dcfc341_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
