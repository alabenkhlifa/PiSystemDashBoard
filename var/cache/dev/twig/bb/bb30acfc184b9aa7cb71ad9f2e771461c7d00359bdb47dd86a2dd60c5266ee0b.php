<?php

/* @User/Default/dashboard.html.twig */
class __TwigTemplate_0bf4cbf8df5628a74ab9a9b1a923a740aadf5bf2e202ec1b69eb83e7b9b02f93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@User/Default/layout.html.twig", "@User/Default/dashboard.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@User/Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mail";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"m-content\">
    <div class=\"m-portlet m-portlet--mobile\">
        <div class=\"m-portlet__head\">
            <div class=\"m-portlet__head-caption\">
                <div class=\"m-portlet__head-title\">
                    <h3 class=\"m-portlet__head-text\">
                        Dashboard
                    </h3>
                </div>
            </div>
        </div>
        <div class=\"m-portlet__body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th style=\"width: 150px\">Server's Name</th>
                        <th>IP Address</th>
                        <th style=\"width: 200px\">UP</th>
                        <th>Warning</th>
                        <th>Down</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Gaddour's PC</td>
                        <td><code>192.168.3.36</code></td>
                        <td>
                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["table"]) ? $context["table"] : $this->getContext($context, "table")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 34
            echo "                                ";
            if (($context["value"] == "OK")) {
                // line 35
                echo "                                    <span class=\"m-badge m-badge--success\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["key"]), "html", null, true);
                echo "</span>
                                ";
            }
            // line 37
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                        </td>
                        <td>
                            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["table"]) ? $context["table"] : $this->getContext($context, "table")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 41
            echo "                                ";
            if (($context["value"] == "WARNING")) {
                // line 42
                echo "                                    <span class=\"m-badge m-badge--warning\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["key"]), "html", null, true);
                echo "</span>
                                ";
            }
            // line 44
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                        </td>
                        <td>
                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["table"]) ? $context["table"] : $this->getContext($context, "table")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 48
            echo "                                ";
            if (($context["value"] == "CRITICAL")) {
                // line 49
                echo "                                    <span class=\"m-badge m-badge--danger\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["key"]), "html", null, true);
                echo "</span>
                                ";
            }
            // line 51
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    ";
        // line 60
        $this->displayBlock('scripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_scripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 61
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/demo/default/custom/components/datatables/base/html-table.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 61,  159 => 60,  149 => 52,  143 => 51,  137 => 49,  134 => 48,  130 => 47,  126 => 45,  120 => 44,  114 => 42,  111 => 41,  107 => 40,  103 => 38,  97 => 37,  91 => 35,  88 => 34,  84 => 33,  54 => 5,  48 => 4,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@User/Default/layout.html.twig' %}
{% block title %}Mail{% endblock title %}

{% block body %}
    <div class=\"m-content\">
    <div class=\"m-portlet m-portlet--mobile\">
        <div class=\"m-portlet__head\">
            <div class=\"m-portlet__head-caption\">
                <div class=\"m-portlet__head-title\">
                    <h3 class=\"m-portlet__head-text\">
                        Dashboard
                    </h3>
                </div>
            </div>
        </div>
        <div class=\"m-portlet__body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th style=\"width: 150px\">Server's Name</th>
                        <th>IP Address</th>
                        <th style=\"width: 200px\">UP</th>
                        <th>Warning</th>
                        <th>Down</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Gaddour's PC</td>
                        <td><code>192.168.3.36</code></td>
                        <td>
                            {% for key, value in table %}
                                {% if value == 'OK' %}
                                    <span class=\"m-badge m-badge--success\">{{ key | upper }}</span>
                                {% endif %}
                            {% endfor %}
                        </td>
                        <td>
                            {% for key, value in table %}
                                {% if value == 'WARNING' %}
                                    <span class=\"m-badge m-badge--warning\">{{ key | upper }}</span>
                                {% endif %}
                            {% endfor %}
                        </td>
                        <td>
                            {% for key, value in table %}
                                {% if value == 'CRITICAL' %}
                                    <span class=\"m-badge m-badge--danger\">{{ key | upper }}</span>
                                {% endif %}
                            {% endfor %}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    {% block scripts %}
        <script src=\"{{ asset('assets/demo/default/custom/components/datatables/base/html-table.js') }}\" type=\"text/javascript\"></script>
    {% endblock scripts %}
{% endblock body %}", "@User/Default/dashboard.html.twig", "C:\\wamp64\\www\\edirassa\\src\\UserBundle\\Resources\\views\\Default\\dashboard.html.twig");
    }
}
