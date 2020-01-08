<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/register.html.twig */
class __TwigTemplate_94e2243f3f2ed6fa4e78c75f679586557f0707555e3fc8ce640fc4aea4d1cc45 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'instructions' => [$this, 'block_instructions'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "partials/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        // line 5
        echo "<body id=\"admin-login-wrapper\">
    <section id=\"admin-login\" class=\"default-glow-shadow ";
        // line 6
        echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 7
        $this->loadTemplate("partials/login-logo.html.twig", "partials/register.html.twig", 7)->display($context);
        // line 8
        echo "
        ";
        // line 9
        $this->loadTemplate("partials/messages.html.twig", "partials/register.html.twig", 9)->display($context);
        // line 10
        echo "
        ";
        // line 11
        $this->displayBlock('instructions', $context, $blocks);
        // line 12
        echo "
        <form method=\"post\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
        echo "\">
            <div class=\"padding\">
            ";
        // line 15
        $this->displayBlock('form', $context, $blocks);
        // line 16
        echo "
            ";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
            </div>
        </form>
    </section>
</body>
";
    }

    // line 11
    public function block_instructions($context, array $blocks = [])
    {
    }

    // line 15
    public function block_form($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 15,  89 => 11,  79 => 17,  76 => 16,  74 => 15,  69 => 13,  66 => 12,  64 => 11,  61 => 10,  59 => 9,  56 => 8,  54 => 7,  50 => 6,  47 => 5,  44 => 4,  39 => 1,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set scope = scope ?: 'data.' %}

{% block body %}
<body id=\"admin-login-wrapper\">
    <section id=\"admin-login\" class=\"default-glow-shadow {{ classes }}\">
        {% include 'partials/login-logo.html.twig' %}

        {% include 'partials/messages.html.twig' %}

        {% block instructions %}{% endblock %}

        <form method=\"post\" action=\"{{ base_url_relative }}\">
            <div class=\"padding\">
            {% block form %}{% endblock %}

            {{ nonce_field('form', 'form-nonce')|raw }}
            </div>
        </form>
    </section>
</body>
{% endblock %}
", "partials/register.html.twig", "/code/user/plugins/admin/themes/grav/templates/partials/register.html.twig");
    }
}
