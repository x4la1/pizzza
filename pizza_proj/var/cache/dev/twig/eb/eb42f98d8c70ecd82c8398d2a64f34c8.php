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

/* /register/loginform.php */
class __TwigTemplate_d39d35da9a806f8b36c9e2464986536c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/register/loginform.php"));

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
            <h1 class=\"login__title\">Register</h1>
            <form action=\"/user/register\" class=\"login__form\" id=\"login\" method=\"post\">
                <div class=\"default-input login-form__email-input\">
                    <label for=\"first_name\" class=\"default-label-text\">First Name</label>
                    <input type=\"text\" name=\"first_name\" class=\"default-input-field email-input-field\" id=\"first_name\" placeholder=\" \" required>
                </div>
                <div class=\"default-input login-form__password-input\">
                    <label for=\"last_name\" class=\"default-label-text\">Last Name</label>
                    <input type=\"text\" class=\"default-input-field password-input-field\" name=\"last_name\" id=\"last_name\" placeholder=\" \" required>
                </div>
                <div class=\"default-input\">
                    <label for=\"email\" class=\"default-label-text\">Email</label>
                    <input type=\"text\" name=\"email\" class=\"default-input-field email-input-field\" id=\"email\" placeholder=\" \" required>
                </div>
                <div class=\"default-input\">
                    <label for=\"phone\" class=\"default-label-text\">Phone number</label>
                    <input type=\"text\" name=\"phone\" class=\"default-input-field email-input-field\" id=\"phone\" placeholder=\" \" required>
                </div>
                <button type=\"submit\" class=\"login-form__button\" name=\"Reg\" form=\"login\" title=\"Log In\" id=\"login-button\">
                    Register
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
        return "/register/loginform.php";
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
            <h1 class=\"login__title\">Register</h1>
            <form action=\"/user/register\" class=\"login__form\" id=\"login\" method=\"post\">
                <div class=\"default-input login-form__email-input\">
                    <label for=\"first_name\" class=\"default-label-text\">First Name</label>
                    <input type=\"text\" name=\"first_name\" class=\"default-input-field email-input-field\" id=\"first_name\" placeholder=\" \" required>
                </div>
                <div class=\"default-input login-form__password-input\">
                    <label for=\"last_name\" class=\"default-label-text\">Last Name</label>
                    <input type=\"text\" class=\"default-input-field password-input-field\" name=\"last_name\" id=\"last_name\" placeholder=\" \" required>
                </div>
                <div class=\"default-input\">
                    <label for=\"email\" class=\"default-label-text\">Email</label>
                    <input type=\"text\" name=\"email\" class=\"default-input-field email-input-field\" id=\"email\" placeholder=\" \" required>
                </div>
                <div class=\"default-input\">
                    <label for=\"phone\" class=\"default-label-text\">Phone number</label>
                    <input type=\"text\" name=\"phone\" class=\"default-input-field email-input-field\" id=\"phone\" placeholder=\" \" required>
                </div>
                <button type=\"submit\" class=\"login-form__button\" name=\"Reg\" form=\"login\" title=\"Log In\" id=\"login-button\">
                    Register
                </button>
            </form>
        </div>
    </main>
</body>

</html>", "/register/loginform.php", "C:\\Users\\Денис\\Desktop\\pizzaproject\\pizza_proj\\templates\\Register\\loginform.php");
    }
}
