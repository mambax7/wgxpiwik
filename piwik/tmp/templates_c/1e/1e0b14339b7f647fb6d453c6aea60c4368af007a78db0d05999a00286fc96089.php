<?php

/* @MultiSites/getSitesInfo.twig */
class __TwigTemplate_0538c1acc16f0e14f3fd3d890362ccc37ad415654fe0f3b3c7dc45568cfc1760 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'topcontrols' => array($this, 'block_topcontrols'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["isWidgetized"]) ? $context["isWidgetized"] : $this->getContext($context, "isWidgetized"))) ? ("empty.twig") : ("dashboard.twig")), "@MultiSites/getSitesInfo.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_topcontrols($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ( !(isset($context["isWidgetized"]) ? $context["isWidgetized"] : $this->getContext($context, "isWidgetized"))) {
            // line 5
            echo "        <div class=\"top_controls\">
            ";
            // line 6
            $this->loadTemplate("@CoreHome/_periodSelect.twig", "@MultiSites/getSitesInfo.twig", 6)->display($context);
            // line 7
            echo "            ";
            $this->loadTemplate("@CoreHome/_headerMessage.twig", "@MultiSites/getSitesInfo.twig", 7)->display($context);
            // line 8
            echo "        </div>
    ";
        }
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"container\" id=\"multisites\">

    <div id=\"main\">
        <div piwik-multisites-dashboard
             display-revenue-column=\"";
        // line 17
        if ((isset($context["displayRevenueColumn"]) ? $context["displayRevenueColumn"] : $this->getContext($context, "displayRevenueColumn"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
             page-size=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "html", null, true);
        echo "\"
             show-sparklines=\"";
        // line 19
        if ((isset($context["show_sparklines"]) ? $context["show_sparklines"] : $this->getContext($context, "show_sparklines"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
             date-sparkline=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["dateSparkline"]) ? $context["dateSparkline"] : $this->getContext($context, "dateSparkline")), "html", null, true);
        echo "\"
             auto-refresh-today-report=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["autoRefreshTodayReport"]) ? $context["autoRefreshTodayReport"] : $this->getContext($context, "autoRefreshTodayReport")), "html", null, true);
        echo "\">
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@MultiSites/getSitesInfo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  77 => 20,  69 => 19,  65 => 18,  57 => 17,  51 => 13,  48 => 12,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  19 => 1,);
    }
}
/* {% extends isWidgetized ? 'empty.twig' : 'dashboard.twig' %}*/
/* */
/* {% block topcontrols %}*/
/*     {% if not isWidgetized %}*/
/*         <div class="top_controls">*/
/*             {% include "@CoreHome/_periodSelect.twig" %}*/
/*             {% include "@CoreHome/_headerMessage.twig" %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="container" id="multisites">*/
/* */
/*     <div id="main">*/
/*         <div piwik-multisites-dashboard*/
/*              display-revenue-column="{% if displayRevenueColumn %}true{% else %}false{%endif%}"*/
/*              page-size="{{ limit }}"*/
/*              show-sparklines="{% if show_sparklines %}true{% else %}false{%endif%}"*/
/*              date-sparkline="{{ dateSparkline }}"*/
/*              auto-refresh-today-report="{{ autoRefreshTodayReport }}">*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
