<?php

/* MagbBundle:Default:index.html.twig */
class __TwigTemplate_1579c7eb555d3900ee4fb92d47d22abc12bc13f49952c24d31c9f55b4f3e92fe extends Twig_Template
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
        // line 1
        echo "Hello World!
";
    }

    public function getTemplateName()
    {
        return "MagbBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MagbBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/magb94/src/MagbBundle/Resources/views/Default/index.html.twig");
    }
}
