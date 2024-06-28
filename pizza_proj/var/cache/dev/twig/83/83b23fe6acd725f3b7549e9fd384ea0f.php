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

/* admin/catalog.html.twig */
class __TwigTemplate_b4b48e37de4e87bbc38abf6584667400 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/catalog.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\">

<head>
    <title>Title</title>
    <link rel=\"stylesheet\" href=\"/Static/Css/catalog.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap\"
          rel=\"stylesheet\">
    <style>
        @import url('https://fonts.cdnfonts.com/css/lora');
    </style>
</head>

<body>
<main class=\"main-catalog\">
    <div class=\"catalog__title\">
        <h2 class=\"catalog__title-text\">Пиццы</h2>
        <form  action=\"/admin/add-form\" class=\"btn-form\" id=\"btn-form\" method=\"post\">
            <button type=\"submit\" form=\"btn-form\" class=\"add-btn-form\"><img class=\"add-icon-form\" src=\"/Static/Images/add-icon.png\"></button>
        </form>

    </div>
    <div class=\"catalog\">
        ";
        // line 27
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 29
        yield "    </div>
</main>
</body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 28
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/catalog.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  91 => 28,  84 => 27,  72 => 29,  70 => 27,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <title>Title</title>
    <link rel=\"stylesheet\" href=\"/Static/Css/catalog.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap\"
          rel=\"stylesheet\">
    <style>
        @import url('https://fonts.cdnfonts.com/css/lora');
    </style>
</head>

<body>
<main class=\"main-catalog\">
    <div class=\"catalog__title\">
        <h2 class=\"catalog__title-text\">Пиццы</h2>
        <form  action=\"/admin/add-form\" class=\"btn-form\" id=\"btn-form\" method=\"post\">
            <button type=\"submit\" form=\"btn-form\" class=\"add-btn-form\"><img class=\"add-icon-form\" src=\"/Static/Images/add-icon.png\"></button>
        </form>

    </div>
    <div class=\"catalog\">
        {% block content %}
        {% endblock %}
    </div>
</main>
</body>

</html>", "admin/catalog.html.twig", "C:\\Users\\Денис\\Desktop\\pizzaproject\\pizza_proj\\templates\\Admin\\catalog.html.twig");
    }
}
