<?php

/* calculadoraProvincia.twig */
class __TwigTemplate_9a5ec00532746c2a2439a2c8cb18bc9019305cd93fc616cf60d35ba9719f9b55 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>MPWAR Provincias - Home</title>
    <link rel=\"stylesheet\" href=\"/assets/css/bootstrap.min.css\"/>
    <link rel=\"stylesheet\" href=\"/assets/css/custom.css\"/>


</head>
<body class=\"intro\">




    <div class=\"container\">
        <!-- Navigation -->
        <!-- Static navbar -->
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"
                            aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>

                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"/\">Inicio</a></li>
                        <li class=\"active\"><a href=\"/calculadora-provincia\">Calculador de provincia</a></li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1>Calculadora de provincias</h1>

                <p>Introduzca el codigo postal que desea buscar </p>

                <form class=\"form-inline\" id=\"cpForm\">

                    <div class=\"form-group\">
                        <label for=\"codigoPostal\">Código postal</label>
                        <input type=\"text\" class=\"form-control\" id=\"codigoPostal\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\" id=\"cpButton\">Buscar</button>
                </form>

            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">

                ";
        // line 65
        if (array_key_exists("provincia", $context)) {
            // line 66
            echo "                 <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["provincia"]) ? $context["provincia"] : null), "cPostal", array()), "html", null, true);
            echo " => <a href=\"/municipios/";
            echo twig_escape_filter($this->env, twig_urlencode_filter(strtr($this->getAttribute((isset($context["provincia"]) ? $context["provincia"] : null), "provincia", array()), "/", "-")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["provincia"]) ? $context["provincia"] : null), "provincia", array()), "html", null, true);
            echo "</a></h1>
                ";
        }
        // line 68
        echo "            </div>
        </div>



    </div>


    <script type=\"text/javascript\" src=\"/assets/js/jquery.min.js\"></script>

    <script type=\"text/javascript\" src=\"/assets/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"/assets/js/calculadora.js\"></script>


</body>
</html> ";
    }

    public function getTemplateName()
    {
        return "calculadoraProvincia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 68,  87 => 66,  85 => 65,  19 => 1,);
    }
}
