<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /admin/product_card.html.twig */
class __TwigTemplate_fe8bc904d44ea74678d202985ca68cce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/catalog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/product_card.html.twig"));

        $this->parent = $this->loadTemplate("admin/catalog.html.twig", "/admin/product_card.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pizzas"]) || array_key_exists("pizzas", $context) ? $context["pizzas"] : (function () { throw new RuntimeError('Variable "pizzas" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
            // line 4
            yield "        <form action=\"catalog/delete\" class=\"product\" id=\"order";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pizza"], "pizza_id", [], "any", false, false, false, 4), "html", null, true);
            yield "\" method=\"post\">
            <img class=\"product__image\" src=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pizza"], "image_path", [], "any", false, false, false, 5), "html", null, true);
            yield "\" alt=\"\">
            <h2 class=\"product__name\">";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pizza"], "name", [], "any", false, false, false, 6), "html", null, true);
            yield "</h2>
            <div class=\"product__description\">
                <p class=\"product__description-text\">";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pizza"], "description", [], "any", false, false, false, 8), "html", null, true);
            yield "</p>
            </div>
            <div class=\"product__footer\">
                <p class=\"product__price\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pizza"], "cost", [], "any", false, false, false, 11), "html", null, true);
            yield " р</p>
                <button class=\"make-order-button\" type=\"submit\" form=\"order";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pizza"], "pizza_id", [], "any", false, false, false, 12), "html", null, true);
            yield "\"> Удалить </button>
            </div>
            <input type=\"hidden\" name=\"pizzaId\" value=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pizza"], "pizza_id", [], "any", false, false, false, 14), "html", null, true);
            yield "\">
        </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/admin/product_card.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  94 => 14,  89 => 12,  85 => 11,  79 => 8,  74 => 6,  70 => 5,  65 => 4,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/catalog.html.twig\" %}
{% block content %}
    {% for pizza in pizzas %}
        <form action=\"catalog/delete\" class=\"product\" id=\"order{{ pizza.pizza_id }}\" method=\"post\">
            <img class=\"product__image\" src=\"{{ pizza.image_path }}\" alt=\"\">
            <h2 class=\"product__name\">{{ pizza.name }}</h2>
            <div class=\"product__description\">
                <p class=\"product__description-text\">{{ pizza.description }}</p>
            </div>
            <div class=\"product__footer\">
                <p class=\"product__price\">{{ pizza.cost }} р</p>
                <button class=\"make-order-button\" type=\"submit\" form=\"order{{ pizza.pizza_id }}\"> Удалить </button>
            </div>
            <input type=\"hidden\" name=\"pizzaId\" value=\"{{ pizza.pizza_id }}\">
        </form>
    {% endfor %}
{% endblock %}
", "/admin/product_card.html.twig", "C:\\Users\\Денис\\Desktop\\pizzaproject\\pizza_proj\\templates\\Admin\\product_card.html.twig");
    }
}
