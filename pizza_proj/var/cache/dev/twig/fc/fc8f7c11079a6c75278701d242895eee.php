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

/* Order/product_order_card.html.twig */
class __TwigTemplate_fe446b2de2cdc89eff9be4201c452479 extends Template
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
        return "/Order/order.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Order/product_order_card.html.twig"));

        $this->parent = $this->loadTemplate("/Order/order.html.twig", "Order/product_order_card.html.twig", 1);
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
        yield "        <form action=\"/catalog/order/create\" class=\"product\" id=\"order";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pizza"]) || array_key_exists("pizza", $context) ? $context["pizza"] : (function () { throw new RuntimeError('Variable "pizza" does not exist.', 3, $this->source); })()), "pizza_id", [], "any", false, false, false, 3), "html", null, true);
        yield "\" method=\"post\">
            <img class=\"product__image\" src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pizza"]) || array_key_exists("pizza", $context) ? $context["pizza"] : (function () { throw new RuntimeError('Variable "pizza" does not exist.', 4, $this->source); })()), "image_path", [], "any", false, false, false, 4), "html", null, true);
        yield "\" alt=\"\">
            <h2 class=\"product__name\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pizza"]) || array_key_exists("pizza", $context) ? $context["pizza"] : (function () { throw new RuntimeError('Variable "pizza" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield "</h2>
            <div class=\"product__description\">
                <p class=\"product__description-text\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pizza"]) || array_key_exists("pizza", $context) ? $context["pizza"] : (function () { throw new RuntimeError('Variable "pizza" does not exist.', 7, $this->source); })()), "description", [], "any", false, false, false, 7), "html", null, true);
        yield "</p>
            </div>
            <div class=\"default-input address-input\">
                <label for=\"address\" class=\"default-label-text\">Адрес</label>
                <input type=\"text\" name=\"address\" class=\"default-input-field address-input-field\" id=\"address\" placeholder=\" \" required>
            </div>
            <div class=\"product__footer\">
                <p class=\"product__price\">Итого: ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pizza"]) || array_key_exists("pizza", $context) ? $context["pizza"] : (function () { throw new RuntimeError('Variable "pizza" does not exist.', 14, $this->source); })()), "cost", [], "any", false, false, false, 14), "html", null, true);
        yield " р</p>
                <button class=\"make-order-button\" type=\"submit\" form=\"order";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pizza"]) || array_key_exists("pizza", $context) ? $context["pizza"] : (function () { throw new RuntimeError('Variable "pizza" does not exist.', 15, $this->source); })()), "pizza_id", [], "any", false, false, false, 15), "html", null, true);
        yield "\"> Заказать</button>
            </div>
            <input type=\"hidden\" name=\"pizzaId\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pizza"]) || array_key_exists("pizza", $context) ? $context["pizza"] : (function () { throw new RuntimeError('Variable "pizza" does not exist.', 17, $this->source); })()), "pizza_id", [], "any", false, false, false, 17), "html", null, true);
        yield "\">

        </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Order/product_order_card.html.twig";
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
        return array (  93 => 17,  88 => 15,  84 => 14,  74 => 7,  69 => 5,  65 => 4,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends \"/Order/order.html.twig\" %}
{% block content %}
        <form action=\"/catalog/order/create\" class=\"product\" id=\"order{{ pizza.pizza_id }}\" method=\"post\">
            <img class=\"product__image\" src=\"{{ pizza.image_path }}\" alt=\"\">
            <h2 class=\"product__name\">{{ pizza.name }}</h2>
            <div class=\"product__description\">
                <p class=\"product__description-text\">{{ pizza.description }}</p>
            </div>
            <div class=\"default-input address-input\">
                <label for=\"address\" class=\"default-label-text\">Адрес</label>
                <input type=\"text\" name=\"address\" class=\"default-input-field address-input-field\" id=\"address\" placeholder=\" \" required>
            </div>
            <div class=\"product__footer\">
                <p class=\"product__price\">Итого: {{ pizza.cost }} р</p>
                <button class=\"make-order-button\" type=\"submit\" form=\"order{{ pizza.pizza_id }}\"> Заказать</button>
            </div>
            <input type=\"hidden\" name=\"pizzaId\" value=\"{{ pizza.pizza_id }}\">

        </form>
{% endblock %}", "Order/product_order_card.html.twig", "C:\\Users\\Денис\\Desktop\\pizzaproject\\pizza_proj\\templates\\Order\\product_order_card.html.twig");
    }
}
