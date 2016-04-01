<?php

/* @Widgetize/iframe_empty.twig */
class __TwigTemplate_3cf4f6b19d675955adf835abfcefdc7932a46d531ccbcb7903ec1c9d9eb5d071 extends Twig_Template
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
