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

/* Admin/login.html */
class __TwigTemplate_e62b84a0253acb9ea5640050e2eea21d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/login.html"));

        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <link rel=\"stylesheet\" href=\"./Static/Css/login_form.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap\" rel=\"stylesheet\">
    <style>
        @import url('https://fonts.cdnfonts.com/css/lora');
    </style>
</head>

<body>
<main class=\"content\">
    <div class=\"login\">
        <h1 class=\"login__title\">Log In</h1>
        <form action=\"/admin/login\" class=\"login__form\" id=\"login\" method=\"post\">
            <div class=\"default-input login-form__email-input\">
                <label for=\"admin_login\" class=\"default-label-text\">Login</label>
                <input type=\"text\" name=\"admin_login\" class=\"default-input-field email-input-field\" id=\"admin_login\" placeholder=\" \" required>
            </div>
            <div class=\"default-input login-form__password-input\">
                <label for=\"admin_password\" class=\"default-label-text\">Password</label>
                <input type=\"text\" class=\"default-input-field\" name=\"admin_password\" id=\"admin_password\" placeholder=\" \" required>
            </div>

            <button type=\"submit\" class=\"login-form__button\" name=\"Reg\" form=\"login\" title=\"Log In\" id=\"login-button\">
                Log In
            </button>
        </form>
    </div>
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
        return "Admin/login.html";
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
    <link rel=\"stylesheet\" href=\"./Static/Css/login_form.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap\" rel=\"stylesheet\">
    <style>
        @import url('https://fonts.cdnfonts.com/css/lora');
    </style>
</head>

<body>
<main class=\"content\">
    <div class=\"login\">
        <h1 class=\"login__title\">Log In</h1>
        <form action=\"/admin/login\" class=\"login__form\" id=\"login\" method=\"post\">
            <div class=\"default-input login-form__email-input\">
                <label for=\"admin_login\" class=\"default-label-text\">Login</label>
                <input type=\"text\" name=\"admin_login\" class=\"default-input-field email-input-field\" id=\"admin_login\" placeholder=\" \" required>
            </div>
            <div class=\"default-input login-form__password-input\">
                <label for=\"admin_password\" class=\"default-label-text\">Password</label>
                <input type=\"text\" class=\"default-input-field\" name=\"admin_password\" id=\"admin_password\" placeholder=\" \" required>
            </div>

            <button type=\"submit\" class=\"login-form__button\" name=\"Reg\" form=\"login\" title=\"Log In\" id=\"login-button\">
                Log In
            </button>
        </form>
    </div>
</main>
</body>

</html>", "Admin/login.html", "C:\\Users\\Денис\\Desktop\\pizzaproject\\pizza_proj\\templates\\Admin\\login.html");
    }
}
