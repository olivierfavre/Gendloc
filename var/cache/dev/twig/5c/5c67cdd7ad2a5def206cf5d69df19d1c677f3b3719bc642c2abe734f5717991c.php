<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_31c38958eb4e5557e42e81ca4bc17e217a032b0865a323b28ca3f8bd02428cc1 extends Twig_Template
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
        $__internal_da6e39e5116c16810dbd13d6f79231bd5ab84783201d32d7e0e215d06662a5f6 = $this->env->getExtension("native_profiler");
        $__internal_da6e39e5116c16810dbd13d6f79231bd5ab84783201d32d7e0e215d06662a5f6->enter($__internal_da6e39e5116c16810dbd13d6f79231bd5ab84783201d32d7e0e215d06662a5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_da6e39e5116c16810dbd13d6f79231bd5ab84783201d32d7e0e215d06662a5f6->leave($__internal_da6e39e5116c16810dbd13d6f79231bd5ab84783201d32d7e0e215d06662a5f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
