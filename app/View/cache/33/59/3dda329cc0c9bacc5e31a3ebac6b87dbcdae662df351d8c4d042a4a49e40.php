<?php

/* home.twig */
class __TwigTemplate_33593dda329cc0c9bacc5e31a3ebac6b87dbcdae662df351d8c4d042a4a49e40 extends Twig_Template
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
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\"/>
    <link rel=\"stylesheet\" href=\"assets/css/custom.css\"/>
    <link href=\"assets/css/jquery-ui.min.css\" rel=\"stylesheet\">



</head>
<body class=\"intro\">

<div id=\"wrapper\">
    <!-- Sidebar -->
    <div id=\"sidebar-wrapper\">

        <ul class=\"sidebar-nav\">
            <li class=\"sidebar-brand\">
                <h3 class=\"white\">Destacadas</h3>
            </li>

            ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["provinces"]) ? $context["provinces"] : null), "topTen", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["currentProvince"]) {
            // line 28
            echo "
                <li><a href=\"/municipios/";
            // line 29
            echo twig_escape_filter($this->env, twig_urlencode_filter(strtr($this->getAttribute($context["currentProvince"], "provincia", array()), "/", "-")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["currentProvince"], "provincia", array()), "html", null, true);
            echo "</a></li>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentProvince'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id=\"page-content-wrapper\">

        <div class=\"container-fluid\">
            <i class=\"fa fa-star\"></i>
            <!-- Navigation -->
            <!-- Static navbar -->
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>

                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"/\">Inicio</a></li>
                            <li><a href=\"/calculadora-provincia\">Calculador de provincia</a></li>

                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"search-nav\">
                                <form action=\"\" class=\"search-form\">
                                    <div class=\"form-group has-feedback\">
                                        <label for=\"search\" class=\"sr-only\">Search</label>
                                        <input type=\"text\" class=\"form-control\" name=\"search\" id=\"search\" placeholder=\"Provincia\">
                                        <span class=\"glyphicon glyphicon-search form-control-feedback\"></span>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>Provincias de España</h1>

                    <p>Aquí se muestran todas las provincias </p>
                    <ul class=\"list-inline\">
                        ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["provinces"]) ? $context["provinces"] : null), "all", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["currentProvince"]) {
            // line 81
            echo "
                            <li><a href=\"/municipios/";
            // line 82
            echo twig_escape_filter($this->env, twig_urlencode_filter(strtr($this->getAttribute($context["currentProvince"], "provincia", array()), "/", "-")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["currentProvince"], "provincia", array()), "html", null, true);
            echo "</a>
                            </li>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentProvince'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                    </ul>

                </div>
            </div>


        </div>

        <div class=\"container-fluid\">
            <div class=\"divider\"></div>
            <div class=\"row\">
            ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_slice($this->env, $this->getAttribute((isset($context["provinces"]) ? $context["provinces"] : null), "topTen", array()), 0, 6), 3));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 98
            echo "                ";
            $context["contador"] = 1;
            // line 99
            echo "                <div class=\"row\">
                    ";
            // line 100
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
                // line 101
                echo "                        <div class=\"col-md-4\">
                            <h2 class=\"textcenter\">";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "provincia", array()), "html", null, true);
                echo "</h2>
                            <a href=\"\">
                                <img class=\"img-responsive\"
                                     src=\"http://static";
                // line 105
                echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : null), "html", null, true);
                echo ".provincias.dev/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "imagen", array()), "html", null, true);
                echo "\"
                                     alt=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "imagen", array()), "html", null, true);
                echo "\"/></a>
                        </div>
                        ";
                // line 108
                $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : null) + 1);
                // line 109
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                <div class=\"divider\"></div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>Lorem Fistrum</h1>

                    <p>Lorem fistrum sexuarl fistro ese pedazo de a wan a gramenawer está la cosa muy malar pupita
                        torpedo benemeritaar qué dise usteer. Ese que llega condemor sexuarl me cago en tus muelas te
                        voy a borrar el cerito torpedo de la pradera diodeno. Ahorarr condemor ese que llega te va a
                        hasé pupitaa diodeno está la cosa muy malar hasta luego Lucas qué dise usteer benemeritaar la
                        caidita me cago en tus muelas. La caidita ahorarr a wan benemeritaar te va a hasé pupitaa te voy
                        a borrar el cerito te voy a borrar el cerito. Tiene musho peligro la caidita caballo blanco
                        caballo negroorl te va a hasé pupitaa pecador diodenoo diodenoo hasta luego Lucas.

                        Sexuarl por la gloria de mi madre jarl al ataquerl. La caidita hasta luego Lucas ese hombree de
                        la pradera. Papaar papaar papaar papaar papaar papaar pecador diodenoo te voy a borrar el
                        cerito. Al ataquerl ese que llega benemeritaar al ataquerl amatomaa por la gloria de mi madre.
                        Amatomaa la caidita apetecan quietooor pecador me cago en tus muelas por la gloria de mi madre
                        quietooor. Está la cosa muy malar llevame al sircoo se calle ustée pecador a peich de la pradera
                        sexuarl.

                        Lorem fistrum sexuarl fistro ese pedazo de a wan a gramenawer está la cosa muy malar pupita
                        torpedo benemeritaar qué dise usteer. Ese que llega condemor sexuarl me cago en tus muelas te
                        voy a borrar el cerito torpedo de la pradera diodeno. Ahorarr condemor ese que llega te va a
                        hasé pupitaa diodeno está la cosa muy malar hasta luego Lucas qué dise usteer benemeritaar la
                        caidita me cago en tus muelas. La caidita ahorarr a wan benemeritaar te va a hasé pupitaa te voy
                        a borrar el cerito te voy a borrar el cerito. Tiene musho peligro la caidita caballo blanco
                        caballo negroorl te va a hasé pupitaa pecador diodenoo diodenoo hasta luego Lucas.

                        Sexuarl por la gloria de mi madre jarl al ataquerl. La caidita hasta luego Lucas ese hombree de
                        la pradera. Papaar papaar papaar papaar papaar papaar pecador diodenoo te voy a borrar el
                        cerito. Al ataquerl ese que llega benemeritaar al ataquerl amatomaa por la gloria de mi madre.
                        Amatomaa la caidita apetecan quietooor pecador me cago en tus muelas por la gloria de mi madre
                        quietooor. Está la cosa muy malar llevame al sircoo se calle ustée pecador a peich de la pradera
                        sexuarl.

                        Va usté muy cargadoo va usté muy cargadoo fistro caballo blanco caballo negroorl mamaar pecador
                        apetecan torpedo me cago en tus muelas diodeno. Te voy a borrar el cerito no te digo trigo por
                        no llamarte Rodrigor mamaar apetecan condemor llevame al sircoo te va a hasé pupitaa fistro
                        pecador diodenoo está la cosa muy malar. Ese que llega jarl apetecan torpedo se calle ustée se
                        calle ustée la caidita. Me cago en tus muelas jarl qué dise usteer condemor te va a hasé
                        pupitaa. Hasta luego Lucas mamaar a peich ese pedazo de. Condemor me cago en tus muelas caballo
                        blanco caballo negroorl torpedo pupita por la gloria de mi madre qué dise usteer llevame al
                        sircoo la caidita diodeno. Diodeno tiene musho peligro te voy a borrar el cerito la caidita
                        apetecan jarl está la cosa muy malar papaar papaar no te digo trigo por no llamarte Rodrigor.
                        Ese hombree hasta luego Lucas se calle ustée benemeritaar diodeno te va a hasé pupitaa por la
                        gloria de mi madre tiene musho peligro. </p>


                </div>
            </div>

        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->


<script type=\"text/javascript\" src=\"assets/js/jquery.min.js\"></script>

<script type=\"text/javascript\" src=\"assets/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"assets/js/jquery-ui.min.js\"></script>
<script>
    var data = [
        ";
        // line 177
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["provinces"]) ? $context["provinces"] : null), "all", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["currentProvince"]) {
            // line 178
            echo "                { value: \"";
            echo twig_escape_filter($this->env, twig_urlencode_filter(strtr($this->getAttribute($context["currentProvince"], "provincia", array()), "/", "-")), "html", null, true);
            echo "\", label: \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["currentProvince"], "provincia", array()), "html", null, true);
            echo "\" },
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentProvince'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "

    ];
    \$(function() {
        \$(\"#search\").autocomplete({
            source: data
        }).data(\"ui-autocomplete\")._renderItem = function (ul, item) {

            return \$(\"<li>\").append(\"<a href='/municipios/\"+item.value+\"' >\"+item.label+\"</a>\").appendTo(ul);
        };
    });

</script>


</body>
</html> ";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 180,  267 => 178,  263 => 177,  196 => 112,  189 => 110,  183 => 109,  181 => 108,  176 => 106,  170 => 105,  164 => 102,  161 => 101,  157 => 100,  154 => 99,  151 => 98,  147 => 97,  134 => 86,  122 => 82,  119 => 81,  115 => 80,  65 => 32,  54 => 29,  51 => 28,  47 => 27,  19 => 1,);
    }
}
