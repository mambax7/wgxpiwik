<?php

/* @Widgetize/iframe_empty.twig */
class __TwigTemplate_bc0f70fb80d266c64da0348cd4f75f1f8b69ad22fd6f9c60451a079e4f6a0a0f extends Twig_Template
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
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
    }

    public function getTemplateName()
    {
        return "@Widgetize/iframe_empty.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ content|raw }}*/
