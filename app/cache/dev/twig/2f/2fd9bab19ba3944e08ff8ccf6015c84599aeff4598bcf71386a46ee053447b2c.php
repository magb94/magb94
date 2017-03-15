<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_de470bbaaf8648b73f54584af6620c5c08f50b491484698b4168538b7b9fe516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_945be4dc383531fd83169e81994cdd7d948b84a72de2cf290b4a684e2f8ffc72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945be4dc383531fd83169e81994cdd7d948b84a72de2cf290b4a684e2f8ffc72->enter($__internal_945be4dc383531fd83169e81994cdd7d948b84a72de2cf290b4a684e2f8ffc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_945be4dc383531fd83169e81994cdd7d948b84a72de2cf290b4a684e2f8ffc72->leave($__internal_945be4dc383531fd83169e81994cdd7d948b84a72de2cf290b4a684e2f8ffc72_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39fef58113a054df2375a6729b8cc4cb2b558b593f1c03ec0636d7594069d54b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39fef58113a054df2375a6729b8cc4cb2b558b593f1c03ec0636d7594069d54b->enter($__internal_39fef58113a054df2375a6729b8cc4cb2b558b593f1c03ec0636d7594069d54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_39fef58113a054df2375a6729b8cc4cb2b558b593f1c03ec0636d7594069d54b->leave($__internal_39fef58113a054df2375a6729b8cc4cb2b558b593f1c03ec0636d7594069d54b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a470b5b310a3b6d404bd602ff5740d1703a5c0d1481cdf2b490b5162c39ff781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a470b5b310a3b6d404bd602ff5740d1703a5c0d1481cdf2b490b5162c39ff781->enter($__internal_a470b5b310a3b6d404bd602ff5740d1703a5c0d1481cdf2b490b5162c39ff781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a470b5b310a3b6d404bd602ff5740d1703a5c0d1481cdf2b490b5162c39ff781->leave($__internal_a470b5b310a3b6d404bd602ff5740d1703a5c0d1481cdf2b490b5162c39ff781_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_782cd21b6207e26e45b6bc8427c31b4986e62a1a1c3dfb2af197bff3775bce34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782cd21b6207e26e45b6bc8427c31b4986e62a1a1c3dfb2af197bff3775bce34->enter($__internal_782cd21b6207e26e45b6bc8427c31b4986e62a1a1c3dfb2af197bff3775bce34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_782cd21b6207e26e45b6bc8427c31b4986e62a1a1c3dfb2af197bff3775bce34->leave($__internal_782cd21b6207e26e45b6bc8427c31b4986e62a1a1c3dfb2af197bff3775bce34_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/magb94/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
