<?php

/* @PrestaShop/Admin/Common/Grid/Columns/Content/position_handle.html.twig */
class __TwigTemplate_abfc8fe8f5df3cff05de307443b12701130233a87d5c38602486433f7f84b9f7 extends Twig_Template
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
        $context["updateRouteParams"] = $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->arrayPluck(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", array()), "record_route_params", array()));
        // line 27
        echo "
<div class=\"position-drag-handle js-";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "id", array()), "html", null, true);
        echo "-position\"
     data-id=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", array()), "id_field", array()), array(), "array"), "html", null, true);
        echo "\"
     data-position=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", array()), "position_field", array()), array(), "array"), "html", null, true);
        echo "\"
     data-update-url=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", array()), "update_route", array()), ($context["updateRouteParams"] ?? null)), "html", null, true);
        echo "\"
     data-update-method=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", array()), "update_method", array()), "html", null, true);
        echo "\"
     data-pagination-offset=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grid"] ?? null), "pagination", array()), "offset", array()), "html", null, true);
        echo "\"
>
    <i class=\"material-icons\">drag_indicator</i>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/position_handle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 33,  43 => 32,  39 => 31,  35 => 30,  31 => 29,  27 => 28,  24 => 27,  22 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/position_handle.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\position_handle.html.twig");
    }
}
