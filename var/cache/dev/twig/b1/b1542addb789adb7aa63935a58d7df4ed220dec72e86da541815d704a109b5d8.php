<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f05dcb3ca770a1390a2aa0421ce76f01cf36c0e4f9eba3e5d0532e99687c5a9d extends Twig_Template
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
        $__internal_f3094d9c1778d6a7e4c23c7149c0376b4482ee8a3b3ad1cc337f2d449418a8e3 = $this->env->getExtension("native_profiler");
        $__internal_f3094d9c1778d6a7e4c23c7149c0376b4482ee8a3b3ad1cc337f2d449418a8e3->enter($__internal_f3094d9c1778d6a7e4c23c7149c0376b4482ee8a3b3ad1cc337f2d449418a8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f3094d9c1778d6a7e4c23c7149c0376b4482ee8a3b3ad1cc337f2d449418a8e3->leave($__internal_f3094d9c1778d6a7e4c23c7149c0376b4482ee8a3b3ad1cc337f2d449418a8e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
