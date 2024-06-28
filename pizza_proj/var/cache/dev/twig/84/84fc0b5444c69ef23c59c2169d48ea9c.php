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

/* /Others/ty_page.html */
class __TwigTemplate_bd326d873eaf19f26091ef7a29dd44b4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/Others/ty_page.html"));

        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
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
<main class=\"main-order\" style=\"margin-top: 400px\">
    <div class=\"main-order__title\" style=\"border: 0\" >
        <h1 class=\"main-order__text\"  style=\"margin-top: 10px\">Спасибо за заказ!</h1>
    </div>

</main>
</body>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/Others/ty_page.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
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
<main class=\"main-order\" style=\"margin-top: 400px\">
    <div class=\"main-order__title\" style=\"border: 0\" >
        <h1 class=\"main-order__text\"  style=\"margin-top: 10px\">Спасибо за заказ!</h1>
    </div>

</main>
</body>", "/Others/ty_page.html", "C:\\Users\\Денис\\Desktop\\pizzaproject\\pizza_proj\\templates\\Others\\ty_page.html");
    }
}
