<?php

/* @CoreHome/_dataTableJS.twig */
class __TwigTemplate_605e4be095e9253b9a53a73fa9b17e5e93e06d0b358fa6dafb1b0b83c0843779 extends Twig_Template
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
        echo "<script type=\"text/javascript\" defer=\"defer\">
    \$(document).ready(function () {
        require('piwik/UI/DataTable').initNewDataTables();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableJS.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <script type="text/javascript" defer="defer">*/
/*     $(document).ready(function () {*/
/*         require('piwik/UI/DataTable').initNewDataTables();*/
/*     });*/
/* </script>*/
/* */
