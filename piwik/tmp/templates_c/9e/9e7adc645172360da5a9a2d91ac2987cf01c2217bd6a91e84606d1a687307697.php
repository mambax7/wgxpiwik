<?php

/* @Dashboard/index.twig */
class __TwigTemplate_4c18097289b196866f63ea616e6760dcc83d0b8ec335b58cabe2b798088f63c1 extends Twig_Template
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
        $this->loadTemplate("@Dashboard/_header.twig", "@Dashboard/index.twig", 1)->display($context);
        // line 2
        echo "<div class=\"top_controls\">
    ";
        // line 3
        $this->loadTemplate("@CoreHome/_periodSelect.twig", "@Dashboard/index.twig", 3)->display($context);
        // line 4
        echo "    ";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.nextToCalendar"));
        echo "
    ";
        // line 5
        $this->loadTemplate($context["dashboardSettingsControl"]->getTemplateFile(), "@Dashboard/index.twig", 5)->display(array_merge($context, $context["dashboardSettingsControl"]->getTemplateVars()));
        // line 6
        echo "    <div id=\"Dashboard\" class=\"piwikTopControl borderedControl piwikSelector\">
        <ul>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dashboards"]) ? $context["dashboards"] : $this->getContext($context, "dashboards")));
        foreach ($context['_seq'] as $context["_key"] => $context["dashboard"]) {
            // line 9
            echo "                <li class=\"dashboardMenuItem\" id=\"Dashboard_embeddedIndex_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dashboard"], "iddashboard", array()), "html", null, true);
            echo "\">
                    <a href=\"javascript:\$('#dashboardWidgetsArea').dashboard('loadDashboard', ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["dashboard"], "iddashboard", array()), "html", null, true);
            echo ");\"
                       class=\"title\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["dashboard"], "name", array()));
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </ul>
    </div>
</div>
";
        // line 17
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@Dashboard/index.twig", 17);
        // line 18
        echo $context["ajax"]->getloadingDiv();
        echo "
";
        // line 19
        $this->loadTemplate("@Dashboard/embeddedIndex.twig", "@Dashboard/index.twig", 19)->display($context);
        // line 20
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@Dashboard/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  70 => 19,  66 => 18,  64 => 17,  59 => 14,  50 => 11,  46 => 10,  41 => 9,  37 => 8,  33 => 6,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include "@Dashboard/_header.twig" %}*/
/* <div class="top_controls">*/
/*     {% include "@CoreHome/_periodSelect.twig" %}*/
/*     {{ postEvent("Template.nextToCalendar") }}*/
/*     {% render dashboardSettingsControl %}*/
/*     <div id="Dashboard" class="piwikTopControl borderedControl piwikSelector">*/
/*         <ul>*/
/*             {% for dashboard in dashboards %}*/
/*                 <li class="dashboardMenuItem" id="Dashboard_embeddedIndex_{{ dashboard.iddashboard }}">*/
/*                     <a href="javascript:$('#dashboardWidgetsArea').dashboard('loadDashboard', {{ dashboard.iddashboard }});"*/
/*                        class="title">{{ dashboard.name|escape }}</a>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* {% import 'ajaxMacros.twig' as ajax %}*/
/* {{ ajax.loadingDiv }}*/
/* {% include "@Dashboard/embeddedIndex.twig" %}*/
/* </body>*/
/* </html>*/
