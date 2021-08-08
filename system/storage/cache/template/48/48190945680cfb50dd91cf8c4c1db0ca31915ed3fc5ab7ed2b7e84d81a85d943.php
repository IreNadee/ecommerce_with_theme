<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* kiaria/template/common/home.twig */
class __TwigTemplate_97c82ad56a0a5c06cf5fcf9127b38fe96292d877379a4463c375cb7b0dd86e8c extends \Twig\Template
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
        // line 1
        echo ($context["header"] ?? null);
        echo " 

";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "has", [0 => "theme_options"], "method", false, false, false, 3) == twig_constant("true"))) {
            // line 4
            echo "\t";
            $context["theme_options"] = twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "get", [0 => "theme_options"], "method", false, false, false, 4);
            // line 5
            echo "\t";
            $context["config"] = twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "get", [0 => "config"], "method", false, false, false, 5);
            echo " 
\t";
            // line 6
            $context["grid_center"] = 12;
            echo " 
\t";
            // line 7
            if ((($context["column_left"] ?? null) != "")) {
                echo " ";
                $context["grid_center"] = (($context["grid_center"] ?? null) - 3);
            }
            echo " 
\t";
            // line 8
            if ((($context["column_right"] ?? null) != "")) {
                echo " ";
                $context["grid_center"] = (($context["grid_center"] ?? null) - 3);
            }
            // line 9
            echo "
\t<!-- MAIN CONTENT
\t\t================================================== -->
\t<div class=\"main-content ";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "content_layout"], "method", false, false, false, 12) == 1)) {
                echo " ";
                echo "full-width";
                echo " ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "content_layout"], "method", false, false, false, 12) == 4)) {
                echo " ";
                echo "fixed3 fixed2";
                echo " ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "content_layout"], "method", false, false, false, 12) == 3)) {
                echo " ";
                echo "fixed2";
                echo " ";
            } else {
                echo " ";
                echo "fixed";
                echo " ";
            }
            echo " home\">
\t\t<div class=\"background-content\"></div>
\t\t<div class=\"background\">
\t\t\t<div class=\"shadow\"></div>
\t\t\t<div class=\"pattern\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t
\t\t\t\t\t";
            // line 19
            $context["preface_left"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "preface_left"], "method", false, false, false, 19);
            // line 20
            echo "\t\t\t\t\t";
            $context["preface_right"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "preface_right"], "method", false, false, false, 20);
            // line 21
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 22
            if (((twig_length_filter($this->env, ($context["preface_left"] ?? null)) > 0) || (twig_length_filter($this->env, ($context["preface_right"] ?? null)) > 0))) {
                echo " 
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 25
                if ((twig_length_filter($this->env, ($context["preface_left"] ?? null)) > 0)) {
                    // line 26
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["preface_left"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                        echo " 
\t\t\t\t\t\t\t\t\t";
                        // line 27
                        echo $context["module"];
                        echo "
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "\t\t\t\t\t\t\t";
                }
                echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 33
                if ((twig_length_filter($this->env, ($context["preface_right"] ?? null)) > 0)) {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["preface_right"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                        echo " 
\t\t\t\t\t\t\t\t\t";
                        // line 35
                        echo $context["module"];
                        echo "
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "\t\t\t\t\t\t\t";
                }
                echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 40
            echo " 
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
            // line 43
            $context["preface_fullwidth"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "preface_fullwidth"], "method", false, false, false, 43);
            // line 44
            echo "\t\t\t\t\t";
            if ((twig_length_filter($this->env, ($context["preface_fullwidth"] ?? null)) > 0)) {
                echo " 
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["preface_fullwidth"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    echo " 
\t\t\t\t\t\t\t\t\t";
                    // line 48
                    echo $context["module"];
                    echo "
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 53
            echo " 
\t\t\t\t\t
\t\t\t\t\t<div class=\"row\">\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 57
            $context["columnleft"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "column_left"], "method", false, false, false, 57);
            // line 58
            echo "\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, ($context["columnleft"] ?? null)) > 0)) {
                echo " 
\t\t\t\t\t\t<div class=\"col-md-3\" id=\"column_left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["columnleft"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 61
                    echo $context["module"];
                    echo "
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 65
            echo " 
\t\t\t\t\t\t";
            // line 66
            $context["grid_center"] = 12;
            echo " ";
            if ((twig_length_filter($this->env, ($context["columnleft"] ?? null)) > 0)) {
                echo " ";
                $context["grid_center"] = 9;
                echo " ";
            }
            echo " 
\t\t\t\t\t\t<div class=\"col-md-";
            // line 67
            echo ($context["grid_center"] ?? null);
            echo "\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 69
            $context["content_big_column"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "content_big_column"], "method", false, false, false, 69);
            // line 70
            echo "\t\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, ($context["content_big_column"] ?? null)) > 0)) {
                echo " 
\t\t\t\t\t\t\t\t";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["content_big_column"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    echo " 
\t\t\t\t\t\t\t\t\t";
                    // line 72
                    echo $context["module"];
                    echo "
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "\t\t\t\t\t\t\t";
            }
            echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 78
            $context["grid_content_top"] = 12;
            echo " 
\t\t\t\t\t\t\t\t";
            // line 79
            $context["grid_content_right"] = 3;
            // line 80
            echo "\t\t\t\t\t\t\t\t";
            $context["column_right"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "column_right"], "method", false, false, false, 80);
            echo " 
\t\t\t\t\t\t\t\t";
            // line 81
            if ((twig_length_filter($this->env, ($context["column_right"] ?? null)) > 0)) {
                // line 82
                echo "\t\t\t\t\t\t\t\t\t";
                if ((($context["grid_center"] ?? null) == 9)) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["grid_content_top"] = 8;
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["grid_content_right"] = 4;
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t";
                } else {
                    echo " 
\t\t\t\t\t\t\t\t\t\t";
                    // line 86
                    $context["grid_content_top"] = 9;
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["grid_content_right"] = 3;
                    // line 88
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 90
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-";
            // line 91
            echo ($context["grid_content_top"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 93
            $context["content_top"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "content_top"], "method", false, false, false, 93);
            // line 94
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, ($context["content_top"] ?? null)) > 0)) {
                echo " 
\t\t\t\t\t\t\t\t\t\t";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["content_top"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 96
                    echo $context["module"];
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "\t\t\t\t\t\t\t\t\t";
            }
            echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 101
            if ((twig_length_filter($this->env, ($context["column_right"] ?? null)) > 0)) {
                echo " 
\t\t\t\t\t\t\t\t<div class=\"col-md-";
                // line 102
                echo ($context["grid_content_right"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["column_right"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t";
                    // line 104
                    echo $context["module"];
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 107
            echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row\">\t
\t\t\t\t\t\t<div class=\"col-sm-12\">\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 115
            $context["contentbottom"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "content_bottom"], "method", false, false, false, 115);
            // line 116
            echo "\t\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, ($context["contentbottom"] ?? null)) > 0)) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 117
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["contentbottom"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    echo " 
\t\t\t\t\t\t\t\t\t";
                    // line 118
                    echo $context["module"];
                    echo "
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            // line 121
            echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 129
        echo "
";
        // line 130
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "kiaria/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 130,  423 => 129,  413 => 121,  409 => 120,  401 => 118,  395 => 117,  390 => 116,  388 => 115,  378 => 107,  373 => 105,  365 => 104,  359 => 103,  355 => 102,  351 => 101,  344 => 98,  336 => 96,  330 => 95,  325 => 94,  323 => 93,  318 => 91,  315 => 90,  312 => 89,  309 => 88,  306 => 87,  304 => 86,  299 => 85,  296 => 84,  293 => 83,  290 => 82,  288 => 81,  283 => 80,  281 => 79,  277 => 78,  269 => 74,  261 => 72,  255 => 71,  250 => 70,  248 => 69,  243 => 67,  233 => 66,  230 => 65,  225 => 63,  217 => 61,  211 => 60,  205 => 58,  203 => 57,  197 => 53,  191 => 50,  183 => 48,  177 => 47,  170 => 44,  168 => 43,  163 => 40,  155 => 37,  147 => 35,  140 => 34,  138 => 33,  130 => 29,  122 => 27,  115 => 26,  113 => 25,  107 => 22,  104 => 21,  101 => 20,  99 => 19,  73 => 12,  68 => 9,  63 => 8,  56 => 7,  52 => 6,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kiaria/template/common/home.twig", "");
    }
}
