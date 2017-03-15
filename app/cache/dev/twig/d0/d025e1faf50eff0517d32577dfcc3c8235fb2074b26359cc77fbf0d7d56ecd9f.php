<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_08601c8024254c7ea42ec13bc3e0719cc5b047e86d4e97e11788a30121f790ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79a3f5ae4696b6dbac1e7a0476cd02923ce2cb18ed0bc241337e83c776dc1852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a3f5ae4696b6dbac1e7a0476cd02923ce2cb18ed0bc241337e83c776dc1852->enter($__internal_79a3f5ae4696b6dbac1e7a0476cd02923ce2cb18ed0bc241337e83c776dc1852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79a3f5ae4696b6dbac1e7a0476cd02923ce2cb18ed0bc241337e83c776dc1852->leave($__internal_79a3f5ae4696b6dbac1e7a0476cd02923ce2cb18ed0bc241337e83c776dc1852_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a3dce7e0471e565b33dbb10b64c988ecbde283ad6ba7cb54f7720a4b0920a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3dce7e0471e565b33dbb10b64c988ecbde283ad6ba7cb54f7720a4b0920a2c->enter($__internal_3a3dce7e0471e565b33dbb10b64c988ecbde283ad6ba7cb54f7720a4b0920a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3a3dce7e0471e565b33dbb10b64c988ecbde283ad6ba7cb54f7720a4b0920a2c->leave($__internal_3a3dce7e0471e565b33dbb10b64c988ecbde283ad6ba7cb54f7720a4b0920a2c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_033f030bd948d2fbb2bc3dceb113be55bfd8176fad6795ea500b31762156c146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033f030bd948d2fbb2bc3dceb113be55bfd8176fad6795ea500b31762156c146->enter($__internal_033f030bd948d2fbb2bc3dceb113be55bfd8176fad6795ea500b31762156c146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_033f030bd948d2fbb2bc3dceb113be55bfd8176fad6795ea500b31762156c146->leave($__internal_033f030bd948d2fbb2bc3dceb113be55bfd8176fad6795ea500b31762156c146_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_626660bdf8ab6f3e7a6741f45c941428aeead85297751abe730f47bb210b0273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626660bdf8ab6f3e7a6741f45c941428aeead85297751abe730f47bb210b0273->enter($__internal_626660bdf8ab6f3e7a6741f45c941428aeead85297751abe730f47bb210b0273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_626660bdf8ab6f3e7a6741f45c941428aeead85297751abe730f47bb210b0273->leave($__internal_626660bdf8ab6f3e7a6741f45c941428aeead85297751abe730f47bb210b0273_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/magb94/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
