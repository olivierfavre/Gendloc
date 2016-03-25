<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3a4665f520820c2d41aadffc70a54923af4dd727a75fdf558962162c8ecddb83 extends Twig_Template
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
        $__internal_0f331c93e124caa16b14a2f11c37fe7f655c4104fdfb648f3bd83a08b08daec1 = $this->env->getExtension("native_profiler");
        $__internal_0f331c93e124caa16b14a2f11c37fe7f655c4104fdfb648f3bd83a08b08daec1->enter($__internal_0f331c93e124caa16b14a2f11c37fe7f655c4104fdfb648f3bd83a08b08daec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0f331c93e124caa16b14a2f11c37fe7f655c4104fdfb648f3bd83a08b08daec1->leave($__internal_0f331c93e124caa16b14a2f11c37fe7f655c4104fdfb648f3bd83a08b08daec1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
