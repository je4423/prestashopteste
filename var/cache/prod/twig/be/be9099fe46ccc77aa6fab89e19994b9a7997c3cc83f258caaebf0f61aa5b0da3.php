<?php

/* @PrestaShop/Admin/Common/Grid/Columns/Content/data.html.twig */
class __TwigTemplate_b91d8bd10496ad8b07cf3bf7620f39791227a9570a8f7efecb765bfabeae6e79 extends Twig_Template
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
        // line 25
        echo "
";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", array()), "field", array()), array(), "array"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/data.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\data.html.twig");
    }
}
