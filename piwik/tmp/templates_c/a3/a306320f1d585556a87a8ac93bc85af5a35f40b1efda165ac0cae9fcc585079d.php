<?php

/* @CoreHome/_javaScriptDisabled.twig */
class __TwigTemplate_1b38042cd4b5198e34a455eca498e04e2ee0e05549ac3390f7419f1f6bef5003 extends Twig_Template
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
        echo "<noscript>
    <div id=\"javascriptDisabled\">";
        // line 2
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_JavascriptDisabled", "<a href=\"\">", "</a>"));
        echo "</div>
</noscript>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_javaScriptDisabled.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <noscript>*/
/*     <div id="javascriptDisabled">{{ 'CoreHome_JavascriptDisabled'|translate('<a href="">','</a>')|raw }}</div>*/
/* </noscript>*/
/* */
