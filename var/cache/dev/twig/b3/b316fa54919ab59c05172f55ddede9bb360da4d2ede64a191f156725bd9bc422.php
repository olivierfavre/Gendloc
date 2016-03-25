<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_09c601739cc64bb0efc00f784d5ef0bb0e2f8ed9aec99db428083f30dacb5fa7 extends Twig_Template
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
        $__internal_a94e19a9fdac7115b735baba7607a996c3d5780d2a8d7424a4e7f9c3a1a39b11 = $this->env->getExtension("native_profiler");
        $__internal_a94e19a9fdac7115b735baba7607a996c3d5780d2a8d7424a4e7f9c3a1a39b11->enter($__internal_a94e19a9fdac7115b735baba7607a996c3d5780d2a8d7424a4e7f9c3a1a39b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a94e19a9fdac7115b735baba7607a996c3d5780d2a8d7424a4e7f9c3a1a39b11->leave($__internal_a94e19a9fdac7115b735baba7607a996c3d5780d2a8d7424a4e7f9c3a1a39b11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
