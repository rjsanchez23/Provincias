<?php

/* municipios.twig */
class __TwigTemplate_f04e339b7d3d82344ebd0b798c9b0e339c8e0a0628e9a4ad9a1e3e0a58c723c3 extends Twig_Template
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
            <div class=\"col-lg-4 col-md-offset-4\">
                <h1>Municipios de ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "provincia", array()), "html", null, true);
        echo "</h1>

                <p>Aquí se muestran los municipios pertenecientes a ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "provincia", array()), "html", null, true);
        echo " </p>
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">


                <ul class=\"list-unstyled\">
                    ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "municipios", array()), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["currentMunicipio"]) {
            // line 56
            echo "
                        <li>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["currentMunicipio"], "municipio", array()), "html", null, true);
            echo "</li>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentMunicipio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </ul>
                    </div>
                </div>

                <ul class=\"pagination\">
                    ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "pagination", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 67
            echo "                    ";
            if (($context["i"] == $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "page", array()))) {
                // line 68
                echo "                    <li class=\"active\"><a href=\"/municipios/";
                echo twig_escape_filter($this->env, twig_urlencode_filter(strtr($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "provincia", array()), "/", "-")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 70
                echo "                    <li><a href=\"/municipios/";
                echo twig_escape_filter($this->env, twig_urlencode_filter(strtr($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "provincia", array()), "/", "-")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 72
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
                </ul>

            </div>
        </div>



    </div>


    <script type=\"text/javascript\" src=\"/assets/js/jquery.min.js\"></script>

    <script type=\"text/javascript\" src=\"/assets/js/bootstrap.min.js\"></script>

</body>
</html> ";
    }

    public function getTemplateName()
    {
        return "municipios.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 73,  132 => 72,  122 => 70,  112 => 68,  109 => 67,  105 => 66,  98 => 61,  88 => 57,  85 => 56,  81 => 55,  72 => 49,  67 => 47,  19 => 1,);
    }
}
