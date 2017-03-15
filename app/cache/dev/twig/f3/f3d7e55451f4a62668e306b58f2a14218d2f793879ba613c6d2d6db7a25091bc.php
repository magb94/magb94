<?php

/* MagbBundle:Default:index.html.twig */
class __TwigTemplate_f80f1933d3a95c14daa774b7154b2fcf294118a4905161288c4fd04cf9bcbdb5 extends Twig_Template
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
        $__internal_db3e6ed88e503f3ee6caf4cc8a7722eff9a30c6223bbcd06ad46043c3c2ca787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3e6ed88e503f3ee6caf4cc8a7722eff9a30c6223bbcd06ad46043c3c2ca787->enter($__internal_db3e6ed88e503f3ee6caf4cc8a7722eff9a30c6223bbcd06ad46043c3c2ca787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MagbBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_db3e6ed88e503f3ee6caf4cc8a7722eff9a30c6223bbcd06ad46043c3c2ca787->leave($__internal_db3e6ed88e503f3ee6caf4cc8a7722eff9a30c6223bbcd06ad46043c3c2ca787_prof);

    }

    public function getTemplateName()
    {
        return "MagbBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "MagbBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/magb94/src/MagbBundle/Resources/views/Default/index.html.twig");
    }
}
