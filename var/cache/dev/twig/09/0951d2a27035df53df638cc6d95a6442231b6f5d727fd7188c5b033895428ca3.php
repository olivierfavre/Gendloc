<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1119bc77d9f2516a78cec001ace7db6ef79b7088739891e53d0c37929f5c7427 extends Twig_Template
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
        $__internal_263d6391059e10b9f69dc1d674d4da36e73f39e6f005b194b79a9f73d4fe4eb2 = $this->env->getExtension("native_profiler");
        $__internal_263d6391059e10b9f69dc1d674d4da36e73f39e6f005b194b79a9f73d4fe4eb2->enter($__internal_263d6391059e10b9f69dc1d674d4da36e73f39e6f005b194b79a9f73d4fe4eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_263d6391059e10b9f69dc1d674d4da36e73f39e6f005b194b79a9f73d4fe4eb2->leave($__internal_263d6391059e10b9f69dc1d674d4da36e73f39e6f005b194b79a9f73d4fe4eb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
