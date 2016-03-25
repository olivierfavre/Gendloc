<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ab7e263116e82650d1df9e6508f77af94eb2108d8f6b26710acd143be2a47360 extends Twig_Template
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
        $__internal_249a01ae8214296f9ee7e1d631a306dfa2d6b4cf1b5e6438f4490df5b5793266 = $this->env->getExtension("native_profiler");
        $__internal_249a01ae8214296f9ee7e1d631a306dfa2d6b4cf1b5e6438f4490df5b5793266->enter($__internal_249a01ae8214296f9ee7e1d631a306dfa2d6b4cf1b5e6438f4490df5b5793266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_249a01ae8214296f9ee7e1d631a306dfa2d6b4cf1b5e6438f4490df5b5793266->leave($__internal_249a01ae8214296f9ee7e1d631a306dfa2d6b4cf1b5e6438f4490df5b5793266_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
