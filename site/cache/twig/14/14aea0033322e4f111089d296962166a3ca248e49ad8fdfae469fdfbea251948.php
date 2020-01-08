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

/* partials/base-root.html.twig */
class __TwigTemplate_f6974162c822e5ced4a2375275fa240a7067261df2e88860622b1b5274bf26be extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body' => [$this, 'block_body'],
            'noscript' => [$this, 'block_noscript'],
            'page' => [$this, 'block_page'],
            'navigation' => [$this, 'block_navigation'],
            'titlebar' => [$this, 'block_titlebar'],
            'content_wrapper' => [$this, 'block_content_wrapper'],
            'messages' => [$this, 'block_messages'],
            'widgets' => [$this, 'block_widgets'],
            'content_top' => [$this, 'block_content_top'],
            'content' => [$this, 'block_content'],
            'content_bottom' => [$this, 'block_content_bottom'],
            'footer' => [$this, 'block_footer'],
            'modals' => [$this, 'block_modals'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($this->getAttribute(($context["uri"] ?? null), "extension", [], "method") == "json")) {
            $this->loadTemplate("default.json.twig", "partials/base-root.html.twig", 1)->display($context);
        } else {
            // line 2
            echo "    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
    ";
            // line 5
            $this->displayBlock('head', $context, $blocks);
            // line 30
            echo "
    ";
            // line 31
            $this->displayBlock('assets', $context, $blocks);
            // line 35
            echo "    </head>
    ";
            // line 36
            $this->displayBlock('body', $context, $blocks);
            // line 136
            echo "    </html>
";
        }
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 7
        if (($context["title"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo " | ";
        } else {
            if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
                echo " | ";
            }
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
        ";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "description", [])) {
            // line 9
            echo "            <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "description", []), "html", null, true);
            echo "\">
        ";
        } else {
            // line 11
            echo "            <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "description", []), "html", null, true);
            echo "\">
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 14
            echo "            <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "robots", []), "html", null, true);
            echo "\">
        ";
        } else {
            // line 16
            echo "            <meta name=\"robots\" content=\"noindex, nofollow\">
        ";
        }
        // line 18
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["base_url_simple"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/favicon.png\">

        ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        $this->loadTemplate("partials/javascript-config.html.twig", "partials/base-root.html.twig", 25)->display($context);
        // line 26
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    ";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 22
        echo "            ";
        $this->loadTemplate("partials/stylesheets.html.twig", "partials/base-root.html.twig", 22)->display($context);
        // line 23
        echo "        ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        // line 27
        echo "            ";
        $this->loadTemplate("partials/javascripts.html.twig", "partials/base-root.html.twig", 27)->display($context);
        // line 28
        echo "        ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 31
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 33
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        // line 37
        echo "    <body class=\"ga-theme-17x ";
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "sidebar", []), "size", []) == "small")) ? ("sidebar-closed") : (""));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "body_classes", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
        echo "\">

    ";
        // line 39
        if ( !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.login"])) {
            // line 40
            echo "        ";
            $this->loadTemplate("partials/messages.html.twig", "partials/base-root.html.twig", 40)->display($context);
            // line 41
            echo "    ";
        } else {
            // line 42
            echo "
        ";
            // line 43
            $this->displayBlock('noscript', $context, $blocks);
            // line 46
            echo "
        ";
            // line 47
            $this->displayBlock('page', $context, $blocks);
            // line 128
            echo "
    ";
        }
        // line 130
        echo "
    ";
        // line 131
        $this->displayBlock('bottom', $context, $blocks);
        // line 134
        echo "    </body>
    ";
    }

    // line 43
    public function block_noscript($context, array $blocks = [])
    {
        // line 44
        echo "            ";
        $this->loadTemplate("partials/noscript.html.twig", "partials/base-root.html.twig", 44)->display($context);
        // line 45
        echo "        ";
    }

    // line 47
    public function block_page($context, array $blocks = [])
    {
        // line 48
        echo "        <div class=\"remodal-bg\">

            ";
        // line 50
        $this->displayBlock('navigation', $context, $blocks);
        // line 53
        echo "
            <main id=\"admin-main\" >
                ";
        // line 55
        $this->loadTemplate("partials/nav-toggle.html.twig", "partials/base-root.html.twig", 55)->display($context);
        // line 56
        echo "                <div id=\"titlebar\" class=\"titlebar\">
                    ";
        // line 57
        $this->displayBlock('titlebar', $context, $blocks);
        // line 58
        echo "                </div>

                ";
        // line 60
        $this->displayBlock('content_wrapper', $context, $blocks);
        // line 86
        echo "
                ";
        // line 87
        $this->displayBlock('modals', $context, $blocks);
        // line 123
        echo "
            </main>
            <div id='overlay'></div>
        </div>
        ";
    }

    // line 50
    public function block_navigation($context, array $blocks = [])
    {
        // line 51
        echo "                ";
        $this->loadTemplate("partials/nav.html.twig", "partials/base-root.html.twig", 51)->display($context);
        // line 52
        echo "            ";
    }

    // line 57
    public function block_titlebar($context, array $blocks = [])
    {
    }

    // line 60
    public function block_content_wrapper($context, array $blocks = [])
    {
        // line 61
        echo "                <div class=\"content-wrapper\">
                    <div class=\"";
        // line 62
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "content_padding", [])) {
            echo "content-padding";
        }
        echo "\">
                        ";
        // line 63
        $this->displayBlock('messages', $context, $blocks);
        // line 66
        echo "
                        ";
        // line 67
        $this->displayBlock('widgets', $context, $blocks);
        // line 68
        echo "                        <div class=\"default-box-shadow\">
                            ";
        // line 69
        $this->displayBlock('content_top', $context, $blocks);
        // line 70
        echo "                            <div class=\"admin-block\">";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "</div>
                            ";
        // line 73
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "show_github_msg", [])) {
            // line 74
            echo "                            <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADMIN_REPORT_ISSUE"), "html", null, true);
            echo "</a></div>
                            ";
        }
        // line 76
        echo "                            ";
        $this->displayBlock('content_bottom', $context, $blocks);
        // line 77
        echo "                        </div>
                        ";
        // line 78
        $this->displayBlock('footer', $context, $blocks);
        // line 83
        echo "                    </div>
                </div>
                ";
    }

    // line 63
    public function block_messages($context, array $blocks = [])
    {
        // line 64
        echo "                            ";
        $this->loadTemplate("partials/messages.html.twig", "partials/base-root.html.twig", 64)->display($context);
        // line 65
        echo "                        ";
    }

    // line 67
    public function block_widgets($context, array $blocks = [])
    {
    }

    // line 69
    public function block_content_top($context, array $blocks = [])
    {
    }

    // line 71
    public function block_content($context, array $blocks = [])
    {
    }

    // line 76
    public function block_content_bottom($context, array $blocks = [])
    {
    }

    // line 78
    public function block_footer($context, array $blocks = [])
    {
        // line 79
        echo "                        <footer id=\"footer\">
                             ";
        // line 80
        $this->loadTemplate("partials/footer.html.twig", "partials/base-root.html.twig", 80)->display($context);
        // line 81
        echo "                        </footer>
                        ";
    }

    // line 87
    public function block_modals($context, array $blocks = [])
    {
        // line 88
        echo "                <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
        echo "</h1>
                        <div class=\"error-content\"></div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"metadata\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1><span>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.METADATA"), "html", null, true);
        echo " for</span> <strong></strong></h1>
                        <div class=\"metadata-preview\">
                            <div class=\"meta-preview\"></div>
                            <div class=\"meta-content\"></div>
                        </div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
                        <p class=\"bigger\">
                            ";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>
                ";
    }

    // line 131
    public function block_bottom($context, array $blocks = [])
    {
        // line 132
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/base-root.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 132,  455 => 131,  446 => 118,  442 => 117,  435 => 113,  430 => 111,  421 => 105,  412 => 99,  403 => 93,  397 => 90,  393 => 88,  390 => 87,  385 => 81,  383 => 80,  380 => 79,  377 => 78,  372 => 76,  367 => 71,  362 => 69,  357 => 67,  353 => 65,  350 => 64,  347 => 63,  341 => 83,  339 => 78,  336 => 77,  333 => 76,  327 => 74,  325 => 73,  322 => 72,  320 => 71,  318 => 70,  316 => 69,  313 => 68,  311 => 67,  308 => 66,  306 => 63,  300 => 62,  297 => 61,  294 => 60,  289 => 57,  285 => 52,  282 => 51,  279 => 50,  271 => 123,  269 => 87,  266 => 86,  264 => 60,  260 => 58,  258 => 57,  255 => 56,  253 => 55,  249 => 53,  247 => 50,  243 => 48,  240 => 47,  236 => 45,  233 => 44,  230 => 43,  225 => 134,  223 => 131,  220 => 130,  216 => 128,  214 => 47,  211 => 46,  209 => 43,  206 => 42,  203 => 41,  200 => 40,  198 => 39,  188 => 37,  185 => 36,  178 => 33,  173 => 32,  170 => 31,  161 => 28,  158 => 27,  155 => 26,  151 => 23,  148 => 22,  145 => 21,  141 => 29,  138 => 26,  136 => 25,  133 => 24,  131 => 21,  125 => 19,  122 => 18,  118 => 16,  112 => 14,  109 => 13,  103 => 11,  97 => 9,  95 => 8,  82 => 7,  79 => 6,  76 => 5,  69 => 136,  67 => 36,  64 => 35,  62 => 31,  59 => 30,  57 => 5,  52 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if uri.extension() == 'json' %}{% include 'default.json.twig' %}{% else %}
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if title %}{{ title }} | {% else %}{% if header.title %}{{ header.title }} | {% endif %}{% endif %}{{ site.title }}</title>
        {% if header.description %}
            <meta name=\"description\" content=\"{{ header.description }}\">
        {% else %}
            <meta name=\"description\" content=\"{{ site.description }}\">
        {% endif %}
        {% if header.robots %}
            <meta name=\"robots\" content=\"{{ header.robots }}\">
        {% else %}
            <meta name=\"robots\" content=\"noindex, nofollow\">
        {% endif %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ base_url_simple }}{{ theme_url }}/images/favicon.png\">

        {% block stylesheets %}
            {% include 'partials/stylesheets.html.twig' %}
        {% endblock %}

        {% include 'partials/javascript-config.html.twig' %}
        {% block javascripts %}
            {% include 'partials/javascripts.html.twig' %}
        {% endblock %}
    {% endblock %}

    {% block assets deferred %}
        {{ assets.css()|raw }}
        {{ assets.js()|raw }}
    {% endblock %}
    </head>
    {% block body %}
    <body class=\"ga-theme-17x {{ config.plugins.admin.sidebar.size == 'small' ? 'sidebar-closed' : '' }} {{ config.plugins.admin.body_classes }} {{ body_classes }}\">

    {% if not authorize(['admin.login']) %}
        {% include 'partials/messages.html.twig' %}
    {% else %}

        {% block noscript %}
            {% include 'partials/noscript.html.twig' %}
        {% endblock noscript %}

        {% block page %}
        <div class=\"remodal-bg\">

            {% block navigation %}
                {% include 'partials/nav.html.twig' %}
            {% endblock %}

            <main id=\"admin-main\" >
                {% include 'partials/nav-toggle.html.twig' %}
                <div id=\"titlebar\" class=\"titlebar\">
                    {% block titlebar %}{% endblock %}
                </div>

                {% block content_wrapper %}
                <div class=\"content-wrapper\">
                    <div class=\"{% if config.plugins.admin.content_padding %}content-padding{% endif %}\">
                        {% block messages %}
                            {% include 'partials/messages.html.twig' %}
                        {% endblock %}

                        {% block widgets %}{% endblock %}
                        <div class=\"default-box-shadow\">
                            {% block content_top %}{% endblock %}
                            <div class=\"admin-block\">
                                {%- block content %}{% endblock -%}
                            </div>
                            {% if config.plugins.admin.show_github_msg %}
                            <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\" rel=\"noopener noreferrer\">{{ 'PLUGIN_ADMIN.ADMIN_REPORT_ISSUE'|tu }}</a></div>
                            {% endif %}
                            {% block content_bottom %}{% endblock %}
                        </div>
                        {% block footer %}
                        <footer id=\"footer\">
                             {% include 'partials/footer.html.twig' %}
                        </footer>
                        {% endblock %}
                    </div>
                </div>
                {% endblock %}

                {% block modals %}
                <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>{{ \"PLUGIN_ADMIN.ERROR\"|tu }}</h1>
                        <div class=\"error-content\"></div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">{{ \"PLUGIN_ADMIN.CLOSE\"|tu }}</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"metadata\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1><span>{{ \"PLUGIN_ADMIN.METADATA\"|tu }} for</span> <strong></strong></h1>
                        <div class=\"metadata-preview\">
                            <div class=\"meta-preview\"></div>
                            <div class=\"meta-content\"></div>
                        </div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">{{ \"PLUGIN_ADMIN.CLOSE\"|tu }}</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
                        <p class=\"bigger\">
                            {{ \"PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC\"|tu }}
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
                        </div>
                    </form>
                </div>
                {% endblock %}

            </main>
            <div id='overlay'></div>
        </div>
        {% endblock page %}

    {% endif %}

    {% block bottom %}
        {{ assets.js('bottom')|raw }}
    {% endblock %}
    </body>
    {% endblock body %}
    </html>
{% endif %}
", "partials/base-root.html.twig", "/code/user/plugins/admin/themes/grav/templates/partials/base-root.html.twig");
    }
}
