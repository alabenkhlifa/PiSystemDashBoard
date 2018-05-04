<?php

/* @User/Default/mail.html.twig */
class __TwigTemplate_385993b8a0d81e6e30359708f1c3f705eb5bbed8c2ddd4023c893392abbecf28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@User/Default/layout.html.twig", "@User/Default/mail.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/mail.html.twig"));

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
                        Mail App
                    </h3>
                </div>
            </div>
        </div>
        <div class=\"m-portlet__body\">
            <div class=\"m_datatable m-datatable m-datatable--default m-datatable--brand m-datatable--loaded\" id=\"auto_column_hide\" style=\"\">
                <table class=\"m-datatable__table\" width=\"100%\">
                    <thead class=\"m-datatable__head\">
                    <tr class=\"m-datatable__row\" style=\"left: 0px;\">
                        <th title=\"Field #1\" class=\"m-datatable__cell m-datatable__cell--sort\" data-field=\"Order ID\"><span style=\"width: 110px;\">Username</span></th>
                        <th title=\"Field #2\" class=\"m-datatable__cell m-datatable__cell--sort\" data-field=\"Owner\"><span style=\"width: 110px;\">PassWord</span></th>
                        <th title=\"Field #3\" class=\"m-datatable__cell m-datatable__cell--sort\" data-field=\"Contact\"><span style=\"width: 110px;\">Connect</span></th>
                    </tr>
                    </thead>
                    <tbody class=\"m-datatable__body\">
                    <tr data-row=\"0\" class=\"m-datatable__row\" style=\"left: 0px;\">
                        <td data-field=\"PC-Name\" class=\"m-datatable__cell\"><span style=\"width: 120px;\">ala@edirassa.tn</span></td>
                        <td data-field=\"IP\" class=\"m-datatable__cell\"><span style=\"width: 110px;\">ala</span></td>
                        <td data-field=\"Button\" class=\"m-datatable__cell\"><span style=\"width: 110px;\"><a type=\"button\" class=\"btn m-btn--pill btn-outline-danger btn-sm\" target=\"_blank\" href=\"http://192.168.3.36:8004/\">Connect</a></span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    ";
        // line 38
        $this->displayBlock('scripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_scripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 39
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/demo/default/custom/components/datatables/base/html-table.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 39,  89 => 38,  54 => 5,  48 => 4,  36 => 2,  11 => 1,);
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
                        Mail App
                    </h3>
                </div>
            </div>
        </div>
        <div class=\"m-portlet__body\">
            <div class=\"m_datatable m-datatable m-datatable--default m-datatable--brand m-datatable--loaded\" id=\"auto_column_hide\" style=\"\">
                <table class=\"m-datatable__table\" width=\"100%\">
                    <thead class=\"m-datatable__head\">
                    <tr class=\"m-datatable__row\" style=\"left: 0px;\">
                        <th title=\"Field #1\" class=\"m-datatable__cell m-datatable__cell--sort\" data-field=\"Order ID\"><span style=\"width: 110px;\">Username</span></th>
                        <th title=\"Field #2\" class=\"m-datatable__cell m-datatable__cell--sort\" data-field=\"Owner\"><span style=\"width: 110px;\">PassWord</span></th>
                        <th title=\"Field #3\" class=\"m-datatable__cell m-datatable__cell--sort\" data-field=\"Contact\"><span style=\"width: 110px;\">Connect</span></th>
                    </tr>
                    </thead>
                    <tbody class=\"m-datatable__body\">
                    <tr data-row=\"0\" class=\"m-datatable__row\" style=\"left: 0px;\">
                        <td data-field=\"PC-Name\" class=\"m-datatable__cell\"><span style=\"width: 120px;\">ala@edirassa.tn</span></td>
                        <td data-field=\"IP\" class=\"m-datatable__cell\"><span style=\"width: 110px;\">ala</span></td>
                        <td data-field=\"Button\" class=\"m-datatable__cell\"><span style=\"width: 110px;\"><a type=\"button\" class=\"btn m-btn--pill btn-outline-danger btn-sm\" target=\"_blank\" href=\"http://192.168.3.36:8004/\">Connect</a></span></td>
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
{% endblock body %}", "@User/Default/mail.html.twig", "C:\\wamp64\\www\\edirassa\\src\\UserBundle\\Resources\\views\\Default\\mail.html.twig");
    }
}
