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

/* /CreatePizza/create_pizza.html.twig */
class __TwigTemplate_3ff5574ff925e8130b139f9be39abe86 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/CreatePizza/create_pizza.html.twig"));

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
    <main class=\"container-pizza-form\" style=\"padding-left: 40px\">
        <form action=\"/admin/add\" class=\"pizza-form\" method=\"post\" id=\"pizzaform\" enctype=\"multipart/form-data\">
            <div class=\"default-input login-form__cost-input\">
                <label for=\"name\" class=\"default-label-text\">Название пиццы</label>
                <input type=\"text\" name=\"name\" class=\"default-input-field \" id=\"name\" placeholder=\" \" required>
            </div>
            <div class=\"default-input login-form__password-input\">
                <label for=\"description\" class=\"default-label-text\">Описание</label>
                <input type=\"text\" class=\"default-input-field \" name=\"description\" id=\"description\" placeholder=\" \" required>
            </div>
            <div class=\"default-input\">
                <label for=\"cost\" class=\"default-label-text\">Цена</label>
                <input type=\"text\" name=\"cost\" class=\"default-input-field \" id=\"cost\" placeholder=\" \" required>
            </div>
            <div class=\"default-input\">
                <label for=\"image\" class=\"default-label-text\">Изображение (.jpg, .png, .avif)</label>
                <input type=\"file\" name=\"image\" class=\"file-input-field\" id=\"image\" placeholder=\" \" accept=\"image/avif, image/jpeg, image/png, image/jpg\" required>
            </div>
            <button type=\"submit\" class=\"login-form__button\" name=\"Reg\" form=\"pizzaform\" title=\"Make\" id=\"login-button\">
                Make
            </button>
        </form>
    </main>
</body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/CreatePizza/create_pizza.html.twig";
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
    <main class=\"container-pizza-form\" style=\"padding-left: 40px\">
        <form action=\"/admin/add\" class=\"pizza-form\" method=\"post\" id=\"pizzaform\" enctype=\"multipart/form-data\">
            <div class=\"default-input login-form__cost-input\">
                <label for=\"name\" class=\"default-label-text\">Название пиццы</label>
                <input type=\"text\" name=\"name\" class=\"default-input-field \" id=\"name\" placeholder=\" \" required>
            </div>
            <div class=\"default-input login-form__password-input\">
                <label for=\"description\" class=\"default-label-text\">Описание</label>
                <input type=\"text\" class=\"default-input-field \" name=\"description\" id=\"description\" placeholder=\" \" required>
            </div>
            <div class=\"default-input\">
                <label for=\"cost\" class=\"default-label-text\">Цена</label>
                <input type=\"text\" name=\"cost\" class=\"default-input-field \" id=\"cost\" placeholder=\" \" required>
            </div>
            <div class=\"default-input\">
                <label for=\"image\" class=\"default-label-text\">Изображение (.jpg, .png, .avif)</label>
                <input type=\"file\" name=\"image\" class=\"file-input-field\" id=\"image\" placeholder=\" \" accept=\"image/avif, image/jpeg, image/png, image/jpg\" required>
            </div>
            <button type=\"submit\" class=\"login-form__button\" name=\"Reg\" form=\"pizzaform\" title=\"Make\" id=\"login-button\">
                Make
            </button>
        </form>
    </main>
</body>

</html>", "/CreatePizza/create_pizza.html.twig", "C:\\Users\\Денис\\Desktop\\pizzaproject\\pizza_proj\\templates\\CreatePizza\\create_pizza.html.twig");
    }
}
