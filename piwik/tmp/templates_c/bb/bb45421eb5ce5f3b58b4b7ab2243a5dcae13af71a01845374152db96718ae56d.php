<?php

/* @Dashboard/_header.twig */
class __TwigTemplate_10bd80592dbaceddef313b7df33756757d4cabbcb613a4f94ae11d90f44f59ff extends Twig_Template
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
        // line 2
        echo "<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
\t<meta http-equiv=\"x-ua-compatible\" content=\"IE=EDGE,chrome=1\" >
    <title>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Dashboard_Dashboard")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_WebAnalyticsReports")), "html", null, true);
        echo "</title>

    <!--[if lt IE 9]>
        <script language=\"javascript\" type=\"text/javascript\" src=\"libs/jqplot/excanvas.min.js\"></script>
    <![endif]-->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Dashboard/stylesheets/standalone.css\" />
";
        // line 15
        $this->loadTemplate("_jsGlobalVariables.twig", "@Dashboard/_header.twig", 15)->display($context);
        // line 16
        $this->loadTemplate("_jsCssIncludes.twig", "@Dashboard/_header.twig", 16)->display($context);
        // line 17
        echo "</head>
<body id=\"standalone\" ng-app=\"app\">
";
    }

    public function getTemplateName()
    {
        return "@Dashboard/_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 17,  41 => 16,  39 => 15,  27 => 8,  19 => 2,);
    }
}
/* {# This header is for loading the dashboard in stand alone mode #}*/
/* <!DOCTYPE html>*/
/* <html id="ng-app" ng-app="piwikApp">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="robots" content="noindex,nofollow">*/
/* 	<meta http-equiv="x-ua-compatible" content="IE=EDGE,chrome=1" >*/
/*     <title>{{ 'Dashboard_Dashboard'|translate }} - {{ 'CoreHome_WebAnalyticsReports'|translate }}</title>*/
/* */
/*     <!--[if lt IE 9]>*/
/*         <script language="javascript" type="text/javascript" src="libs/jqplot/excanvas.min.js"></script>*/
/*     <![endif]-->*/
/* */
/*     <link rel="stylesheet" type="text/css" href="plugins/Dashboard/stylesheets/standalone.css" />*/
/* {% include "_jsGlobalVariables.twig" %}*/
/* {% include "_jsCssIncludes.twig" %}*/
/* </head>*/
/* <body id="standalone" ng-app="app">*/
/* */
