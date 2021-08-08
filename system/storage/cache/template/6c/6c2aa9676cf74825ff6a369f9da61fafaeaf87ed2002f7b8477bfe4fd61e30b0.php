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

/* kiaria/template/common/header.twig */
class __TwigTemplate_6f146b4518369a7d2a9d4c5b0de405d53064c57a7d6572a447fac39dd0e5039a extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "has", [0 => "theme_options"], "method", false, false, false, 1) == twig_constant("false"))) {
            echo " 
  <style>
    body {
      display: none !important;
    }
  </style>
  <script>
    window.location = 'themeinstall/index.php';
  </script>
";
        } else {
            // line 11
            echo "\t";
            $context["theme_options"] = twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "get", [0 => "theme_options"], "method", false, false, false, 11);
            // line 12
            echo "\t";
            $context["config"] = twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "get", [0 => "config"], "method", false, false, false, 12);
            // line 13
            echo "\t";
            $context["request"] = twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "get", [0 => "request"], "method", false, false, false, 13);
            // line 14
            echo "\t";
            $context["page_direction"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_direction"], "method", false, false, false, 14);
            echo " 
\t";
            // line 15
            $context["language_id"] = twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 15);
            echo " 

\t";
            // line 17
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "get", [], "any", false, true, false, 17), "route", [], "array", true, true, false, 17)) {
                // line 18
                echo "\t\t";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "get", [], "any", false, true, false, 18), "product_id", [], "array", true, true, false, 18)) {
                    // line 19
                    echo "\t\t\t";
                    $context["class"] = ("-" . (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "get", [], "any", false, false, false, 19)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["product_id"] ?? null) : null));
                    // line 20
                    echo "\t\t";
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "get", [], "any", false, true, false, 20), "path", [], "array", true, true, false, 20)) {
                    // line 21
                    echo "\t\t\t";
                    $context["class"] = ("-" . (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "get", [], "any", false, false, false, 21)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["path"] ?? null) : null));
                    // line 22
                    echo "\t\t";
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "get", [], "any", false, true, false, 22), "manufacturer_id", [], "array", true, true, false, 22)) {
                    // line 23
                    echo "\t\t\t";
                    $context["class"] = ("-" . (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "get", [], "any", false, false, false, 23)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["manufacturer_id"] ?? null) : null));
                    // line 24
                    echo "\t\t";
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "get", [], "any", false, true, false, 24), "information_id", [], "array", true, true, false, 24)) {
                    // line 25
                    echo "\t\t\t";
                    $context["class"] = ("-" . (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "get", [], "any", false, false, false, 25)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["information_id"] ?? null) : null));
                    // line 26
                    echo "\t\t";
                } else {
                    echo " 
\t\t\t";
                    // line 27
                    $context["class"] = "";
                    // line 28
                    echo "\t\t";
                }
                // line 29
                echo "
\t\t";
                // line 30
                $context["klasa"] = (twig_replace_filter((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "get", [], "any", false, false, false, 30)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["route"] ?? null) : null), ["/" => "-"]) . ($context["class"] ?? null));
                // line 31
                echo "\t";
            } else {
                echo " 
\t\t";
                // line 32
                $context["klasa"] = "common-home";
                // line 33
                echo "\t";
            }
            echo " 
\t<!DOCTYPE html>
\t<!--[if IE 7]> <html lang=\"";
            // line 35
            echo ($context["lang"] ?? null);
            echo "\" class=\"ie7 ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "responsive_design"], "method", false, false, false, 35) == "0")) {
                echo " ";
                echo "no-";
                echo " ";
            }
            echo "responsive";
            echo ((((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["page_direction"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null) == "RTL")) ? (" rtl") : (""));
            echo "\" ";
            echo ((((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["page_direction"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null) == "RTL")) ? ("dir=\"rtl\"") : (""));
            echo "> <![endif]-->  
\t<!--[if IE 8]> <html lang=\"";
            // line 36
            echo ($context["lang"] ?? null);
            echo "\" class=\"ie8 ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "responsive_design"], "method", false, false, false, 36) == "0")) {
                echo " ";
                echo "no-";
                echo " ";
            }
            echo "responsive";
            echo ((((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["page_direction"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null) == "RTL")) ? (" rtl") : (""));
            echo "\" ";
            echo ((((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["page_direction"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["language_id"] ?? null)] ?? null) : null) == "RTL")) ? ("dir=\"rtl\"") : (""));
            echo "> <![endif]-->  
\t<!--[if IE 9]> <html lang=\"";
            // line 37
            echo ($context["lang"] ?? null);
            echo "\" class=\"ie9 ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "responsive_design"], "method", false, false, false, 37) == "0")) {
                echo " ";
                echo "no-";
                echo " ";
            }
            echo "responsive";
            echo ((((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["page_direction"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["language_id"] ?? null)] ?? null) : null) == "RTL")) ? (" rtl") : (""));
            echo "\" ";
            echo ((((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["page_direction"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["language_id"] ?? null)] ?? null) : null) == "RTL")) ? ("dir=\"rtl\"") : (""));
            echo "> <![endif]-->  
\t<!--[if !IE]><!--> <html lang=\"";
            // line 38
            echo ($context["lang"] ?? null);
            echo "\" class=\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "responsive_design"], "method", false, false, false, 38) == "0")) {
                echo " ";
                echo "no-";
                echo " ";
            }
            echo "responsive";
            echo ((((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["page_direction"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["language_id"] ?? null)] ?? null) : null) == "RTL")) ? (" rtl") : (""));
            echo "\" ";
            echo ((((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["page_direction"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[($context["language_id"] ?? null)] ?? null) : null) == "RTL")) ? ("dir=\"rtl\"") : (""));
            echo "> <!--<![endif]-->  
\t<head>
\t\t<title>";
            // line 40
            echo ($context["title"] ?? null);
            echo "</title>
\t\t<base href=\"";
            // line 41
            echo ($context["base"] ?? null);
            echo "\" />

\t\t<!-- Meta -->
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
\t\t";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "responsive_design"], "method", false, false, false, 46) != "0")) {
                echo " 
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t";
            }
            // line 48
            echo " 
\t\t";
            // line 49
            if (($context["description"] ?? null)) {
                echo " 
\t\t<meta name=\"description\" content=\"";
                // line 50
                echo strip_tags(($context["description"] ?? null));
                echo "\" />
\t\t";
            }
            // line 51
            echo " 
\t\t";
            // line 52
            if (($context["keywords"] ?? null)) {
                echo " 
\t\t<meta name=\"keywords\" content=\"";
                // line 53
                echo strip_tags(($context["keywords"] ?? null));
                echo "\" />
\t\t";
            }
            // line 54
            echo " 
\t\t
\t\t";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                echo " 
\t\t<link href=\"";
                // line 57
                echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["link"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["href"] ?? null) : null);
                echo "\" rel=\"";
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["link"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["rel"] ?? null) : null);
                echo "\" />
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo " 
\t\t
\t\t<!-- Google Fonts -->
\t\t<link href=\"//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\" type=\"text/css\">
\t\t
\t \t";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "font_status"], "method", false, false, false, 63) == "1")) {
                // line 64
                echo "\t\t\t";
                $context["lista_fontow"] = [];
                // line 65
                echo "\t \t\t";
                if ((((((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 65) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 65) != "standard")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 65) != "Arial")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 65) != "Georgia")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 65) != "Times New Roman"))) {
                    // line 66
                    echo "\t\t\t\t";
                    $context["font"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 66);
                    // line 67
                    echo "\t\t\t\t";
                    $context["lista_fontow"] = twig_array_merge(($context["lista_fontow"] ?? null), [0 => ($context["font"] ?? null)]);
                    // line 68
                    echo "\t\t\t";
                }
                // line 69
                echo "\t\t\t
\t\t\t";
                // line 70
                if ((((((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_bar"], "method", false, false, false, 70) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_bar"], "method", false, false, false, 70) != "standard")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_bar"], "method", false, false, false, 70) != "Arial")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_bar"], "method", false, false, false, 70) != "Georgia")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_bar"], "method", false, false, false, 70) != "Times New Roman"))) {
                    // line 71
                    echo "\t\t\t\t";
                    $context["font"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_bar"], "method", false, false, false, 71);
                    // line 72
                    echo "\t\t\t\t";
                    if (!twig_in_filter(($context["font"] ?? null), ($context["lista_fontow"] ?? null))) {
                        // line 73
                        echo "\t\t\t\t\t";
                        $context["lista_fontow"] = twig_array_merge(($context["lista_fontow"] ?? null), [0 => ($context["font"] ?? null)]);
                        // line 74
                        echo "\t\t\t\t";
                    }
                    // line 75
                    echo "\t\t\t";
                }
                // line 76
                echo "\t\t\t
\t\t\t";
                // line 77
                if ((((((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_submenu_heading"], "method", false, false, false, 77) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_submenu_heading"], "method", false, false, false, 77) != "standard")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_submenu_heading"], "method", false, false, false, 77) != "Arial")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_submenu_heading"], "method", false, false, false, 77) != "Georgia")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_submenu_heading"], "method", false, false, false, 77) != "Times New Roman"))) {
                    // line 78
                    echo "\t\t\t\t";
                    $context["font"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_submenu_heading"], "method", false, false, false, 78);
                    // line 79
                    echo "\t\t\t\t";
                    if (!twig_in_filter(($context["font"] ?? null), ($context["lista_fontow"] ?? null))) {
                        // line 80
                        echo "\t\t\t\t\t";
                        $context["lista_fontow"] = twig_array_merge(($context["lista_fontow"] ?? null), [0 => ($context["font"] ?? null)]);
                        // line 81
                        echo "\t\t\t\t";
                    }
                    // line 82
                    echo "\t\t\t";
                }
                // line 83
                echo "\t\t\t
\t\t\t";
                // line 84
                if ((((((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_heading"], "method", false, false, false, 84) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_heading"], "method", false, false, false, 84) != "standard")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_heading"], "method", false, false, false, 84) != "Arial")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_heading"], "method", false, false, false, 84) != "Georgia")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_heading"], "method", false, false, false, 84) != "Times New Roman"))) {
                    // line 85
                    echo "\t\t\t\t";
                    $context["font"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_heading"], "method", false, false, false, 85);
                    // line 86
                    echo "\t\t\t\t";
                    if (!twig_in_filter(($context["font"] ?? null), ($context["lista_fontow"] ?? null))) {
                        // line 87
                        echo "\t\t\t\t\t";
                        $context["lista_fontow"] = twig_array_merge(($context["lista_fontow"] ?? null), [0 => ($context["font"] ?? null)]);
                        // line 88
                        echo "\t\t\t\t";
                    }
                    // line 89
                    echo "\t\t\t";
                }
                // line 90
                echo "\t\t\t
\t\t\t";
                // line 91
                if ((((((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_links"], "method", false, false, false, 91) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_links"], "method", false, false, false, 91) != "standard")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_links"], "method", false, false, false, 91) != "Arial")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_links"], "method", false, false, false, 91) != "Georgia")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_links"], "method", false, false, false, 91) != "Times New Roman"))) {
                    // line 92
                    echo "\t\t\t\t";
                    $context["font"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_links"], "method", false, false, false, 92);
                    // line 93
                    echo "\t\t\t\t";
                    if (!twig_in_filter(($context["font"] ?? null), ($context["lista_fontow"] ?? null))) {
                        // line 94
                        echo "\t\t\t\t\t";
                        $context["lista_fontow"] = twig_array_merge(($context["lista_fontow"] ?? null), [0 => ($context["font"] ?? null)]);
                        // line 95
                        echo "\t\t\t\t";
                    }
                    // line 96
                    echo "\t\t\t";
                }
                // line 97
                echo "\t\t\t
\t\t\t";
                // line 98
                if ((((((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "headlines"], "method", false, false, false, 98) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "headlines"], "method", false, false, false, 98) != "standard")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "headlines"], "method", false, false, false, 98) != "Arial")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "headlines"], "method", false, false, false, 98) != "Georgia")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "headlines"], "method", false, false, false, 98) != "Times New Roman"))) {
                    // line 99
                    echo "\t\t\t\t";
                    $context["font"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "headlines"], "method", false, false, false, 99);
                    // line 100
                    echo "\t\t\t\t";
                    if (!twig_in_filter(($context["font"] ?? null), ($context["lista_fontow"] ?? null))) {
                        // line 101
                        echo "\t\t\t\t\t";
                        $context["lista_fontow"] = twig_array_merge(($context["lista_fontow"] ?? null), [0 => ($context["font"] ?? null)]);
                        // line 102
                        echo "\t\t\t\t";
                    }
                    // line 103
                    echo "\t\t\t";
                }
                // line 104
                echo "\t\t\t
\t\t\t";
                // line 105
                if ((((((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_headlines"], "method", false, false, false, 105) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_headlines"], "method", false, false, false, 105) != "standard")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_headlines"], "method", false, false, false, 105) != "Arial")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_headlines"], "method", false, false, false, 105) != "Georgia")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_headlines"], "method", false, false, false, 105) != "Times New Roman"))) {
                    // line 106
                    echo "\t\t\t\t";
                    $context["font"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_headlines"], "method", false, false, false, 106);
                    // line 107
                    echo "\t\t\t\t";
                    if (!twig_in_filter(($context["font"] ?? null), ($context["lista_fontow"] ?? null))) {
                        // line 108
                        echo "\t\t\t\t\t";
                        $context["lista_fontow"] = twig_array_merge(($context["lista_fontow"] ?? null), [0 => ($context["font"] ?? null)]);
                        // line 109
                        echo "\t\t\t\t";
                    }
                    // line 110
                    echo "\t\t\t";
                }
                // line 111
                echo "\t\t\t
\t\t\t";
                // line 112
                if ((((((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_name"], "method", false, false, false, 112) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_name"], "method", false, false, false, 112) != "standard")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_name"], "method", false, false, false, 112) != "Arial")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_name"], "method", false, false, false, 112) != "Georgia")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_name"], "method", false, false, false, 112) != "Times New Roman"))) {
                    // line 113
                    echo "\t\t\t\t";
                    $context["font"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_name"], "method", false, false, false, 113);
                    // line 114
                    echo "\t\t\t\t";
                    if (!twig_in_filter(($context["font"] ?? null), ($context["lista_fontow"] ?? null))) {
                        // line 115
                        echo "\t\t\t\t\t";
                        $context["lista_fontow"] = twig_array_merge(($context["lista_fontow"] ?? null), [0 => ($context["font"] ?? null)]);
                        // line 116
                        echo "\t\t\t\t";
                    }
                    // line 117
                    echo "\t\t\t";
                }
                // line 118
                echo "\t\t\t
\t\t\t";
                // line 119
                if ((((((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_font"], "method", false, false, false, 119) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_font"], "method", false, false, false, 119) != "standard")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_font"], "method", false, false, false, 119) != "Arial")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_font"], "method", false, false, false, 119) != "Georgia")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_font"], "method", false, false, false, 119) != "Times New Roman"))) {
                    // line 120
                    echo "\t\t\t\t";
                    $context["font"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_font"], "method", false, false, false, 120);
                    // line 121
                    echo "\t\t\t\t";
                    if (!twig_in_filter(($context["font"] ?? null), ($context["lista_fontow"] ?? null))) {
                        // line 122
                        echo "\t\t\t\t\t";
                        $context["lista_fontow"] = twig_array_merge(($context["lista_fontow"] ?? null), [0 => ($context["font"] ?? null)]);
                        // line 123
                        echo "\t\t\t\t";
                    }
                    // line 124
                    echo "\t\t\t";
                }
                // line 125
                echo "\t\t\t
\t\t\t";
                // line 126
                if ((((((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price"], "method", false, false, false, 126) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price"], "method", false, false, false, 126) != "standard")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price"], "method", false, false, false, 126) != "Arial")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price"], "method", false, false, false, 126) != "Georgia")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price"], "method", false, false, false, 126) != "Times New Roman"))) {
                    // line 127
                    echo "\t\t\t\t";
                    $context["font"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price"], "method", false, false, false, 127);
                    // line 128
                    echo "\t\t\t\t";
                    if (!twig_in_filter(($context["font"] ?? null), ($context["lista_fontow"] ?? null))) {
                        // line 129
                        echo "\t\t\t\t\t";
                        $context["lista_fontow"] = twig_array_merge(($context["lista_fontow"] ?? null), [0 => ($context["font"] ?? null)]);
                        // line 130
                        echo "\t\t\t\t";
                    }
                    // line 131
                    echo "\t\t\t";
                }
                // line 132
                echo "\t\t\t
\t\t\t";
                // line 133
                if ((((((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_new_font"], "method", false, false, false, 133) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_new_font"], "method", false, false, false, 133) != "standard")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_new_font"], "method", false, false, false, 133) != "Arial")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_new_font"], "method", false, false, false, 133) != "Georgia")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_new_font"], "method", false, false, false, 133) != "Times New Roman"))) {
                    // line 134
                    echo "\t\t\t\t";
                    $context["font"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_new_font"], "method", false, false, false, 134);
                    // line 135
                    echo "\t\t\t\t";
                    if (!twig_in_filter(($context["font"] ?? null), ($context["lista_fontow"] ?? null))) {
                        // line 136
                        echo "\t\t\t\t\t";
                        $context["lista_fontow"] = twig_array_merge(($context["lista_fontow"] ?? null), [0 => ($context["font"] ?? null)]);
                        // line 137
                        echo "\t\t\t\t";
                    }
                    // line 138
                    echo "\t\t\t";
                }
                // line 139
                echo "\t\t\t
\t\t\t";
                // line 140
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["lista_fontow"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
                    echo " 
\t\t\t\t";
                    // line 141
                    echo (("<link href=\"//fonts.googleapis.com/css?family=" . twig_urlencode_filter($context["font"])) . ":800,700,600,500,400,300,200,100\" rel=\"stylesheet\" type=\"text/css\">");
                    echo "
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "\t\t";
            }
            // line 144
            echo "\t\t
\t\t
\t\t";
            // line 146
            $context["lista_plikow"] = [0 => "catalog/view/theme/kiaria/css/bootstrap.css", 1 => "catalog/view/theme/kiaria/css/animate.css", 2 => "catalog/view/theme/kiaria/css/stylesheet.css", 3 => "catalog/view/theme/kiaria/css/responsive.css", 4 => "catalog/view/theme/kiaria/css/menu.css", 5 => "catalog/view/theme/kiaria/css/owl.carousel.css", 6 => "catalog/view/theme/kiaria/css/font-awesome.min.css"];
            // line 154
            echo " 
\t\t
\t\t";
            // line 157
            echo "\t\t
\t\t";
            // line 158
            if (((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["page_direction"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[($context["language_id"] ?? null)] ?? null) : null) == "RTL")) {
                // line 159
                echo "\t\t ";
                $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/css/rtl.css"]);
                // line 160
                echo "\t\t ";
                $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/css/bootstrap_rtl.css"]);
                // line 161
                echo "\t\t";
            }
            // line 162
            echo "\t\t
\t\t";
            // line 164
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "full_screen_background_slider_module"], "method", false, false, false, 164) != "")) {
                echo " ";
                $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/css/jquery.vegas.css"]);
            }
            // line 165
            echo "\t\t
\t\t";
            // line 167
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "category_wall_module"], "method", false, false, false, 167) != "")) {
                echo " ";
                $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/css/category_wall.css"]);
            }
            // line 168
            echo "\t\t
\t\t";
            // line 170
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "filter_product_module"], "method", false, false, false, 170) != "")) {
                echo " ";
                $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/css/filter_product.css"]);
            }
            // line 171
            echo "\t\t
\t\t";
            // line 173
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_width"], "method", false, false, false, 173) == 1)) {
                echo " ";
                $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/css/wide-grid.css"]);
            }
            echo " 
\t\t
\t\t";
            // line 176
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_width"], "method", false, false, false, 176) == 3)) {
                echo " ";
                $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/css/standard-grid.css"]);
            }
            // line 177
            echo "\t\t
\t\t";
            // line 179
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "spacing_between_columns"], "method", false, false, false, 179) == 2)) {
                echo " ";
                $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/css/spacing_20.css"]);
            }
            // line 180
            echo "
\t\t";
            // line 181
            echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "compressorCodeCss", [0 => "kiaria", 1 => ($context["lista_plikow"] ?? null), 2 => twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "compressor_code_status"], "method", false, false, false, 181), 3 => twig_constant("HTTP_SERVER")], "method", false, false, false, 181);
            echo "
\t\t
\t\t";
            // line 184
            echo "\t\t";
            $this->loadTemplate("kiaria/css/custom_colors.twig", "kiaria/template/common/header.twig", 184)->display($context);
            // line 185
            echo "\t\t
\t\t";
            // line 186
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_code_css_status"], "method", false, false, false, 186) == 1)) {
                echo " 
\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/kiaria/skins/store_";
                // line 187
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "store"], "method", false, false, false, 187);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "skin"], "method", false, false, false, 187);
                echo "/css/custom_code.css\">
\t\t";
            }
            // line 188
            echo " 
\t\t
\t\t";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                echo " 
\t\t\t";
                // line 191
                if (twig_in_filter("mf/jquery-ui.min.css", (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["style"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["href"] ?? null) : null))) {
                    echo " 
\t\t\t\t<link rel=\"";
                    // line 192
                    echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["style"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["rel"] ?? null) : null);
                    echo "\" type=\"text/css\" href=\"catalog/view/theme/kiaria/css/jquery-ui.min.css\" media=\"";
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["style"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["media"] ?? null) : null);
                    echo "\" />
\t\t\t";
                } elseif (twig_in_filter("mf/style.css", (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 =                 // line 193
$context["style"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["href"] ?? null) : null))) {
                    echo " 
\t\t\t\t<link rel=\"";
                    // line 194
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["style"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["rel"] ?? null) : null);
                    echo "\" type=\"text/css\" href=\"catalog/view/theme/kiaria/css/mega_filter.css\" media=\"";
                    echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["style"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["media"] ?? null) : null);
                    echo "\" />
\t\t\t";
                } elseif (twig_in_filter("blog-news", (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c =                 // line 195
$context["style"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["href"] ?? null) : null))) {
                    echo " 
\t\t\t\t<link rel=\"";
                    // line 196
                    echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["style"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["rel"] ?? null) : null);
                    echo "\" type=\"text/css\" href=\"catalog/view/theme/kiaria/css/blog.css\" media=\"";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["style"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["media"] ?? null) : null);
                    echo "\" />
\t\t\t";
                } elseif (((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 =                 // line 197
$context["style"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["href"] ?? null) : null) != "catalog/view/javascript/jquery/owl-carousel/owl.carousel.css")) {
                    echo " 
\t\t\t\t<link rel=\"";
                    // line 198
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["style"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["rel"] ?? null) : null);
                    echo "\" type=\"text/css\" href=\"";
                    echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["style"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["href"] ?? null) : null);
                    echo "\" media=\"";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["style"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["media"] ?? null) : null);
                    echo "\" />
\t\t\t";
                }
                // line 199
                echo " 
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo " 

\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/magnific/magnific-popup.css\" media=\"screen\" />
\t\t
\t\t";
            // line 204
            if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_width"], "method", false, false, false, 204) == 2) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "max_width"], "method", false, false, false, 204) > 900))) {
                echo " 
\t\t<style type=\"text/css\">
\t\t\t.standard-body .full-width .container {
\t\t\t\tmax-width: ";
                // line 207
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "max_width"], "method", false, false, false, 207);
                echo "px;
\t\t\t\t";
                // line 208
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "responsive_design"], "method", false, false, false, 208) == "0")) {
                    echo " 
\t\t\t\twidth: ";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "max_width"], "method", false, false, false, 209);
                    echo "px;
\t\t\t\t";
                }
                // line 210
                echo " 
\t\t\t}
\t\t\t
\t\t\t.main-fixed,
\t\t\t.fixed-body-2-2,
\t\t\t.standard-body .fixed2 .background {
\t\t\t\tmax-width: ";
                // line 216
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "max_width"], "method", false, false, false, 216);
                echo "px;
\t\t\t\t";
                // line 217
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "responsive_design"], "method", false, false, false, 217) == "0")) {
                    echo " 
\t\t\t\twidth: ";
                    // line 218
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "max_width"], "method", false, false, false, 218);
                    echo "px;
\t\t\t\t";
                }
                // line 219
                echo " 
\t\t\t}
\t\t\t
\t\t\t.standard-body .fixed .background {
\t\t\t     max-width: ";
                // line 223
                echo (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "max_width"], "method", false, false, false, 223) - 90);
                echo "px;
\t\t\t     ";
                // line 224
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "responsive_design"], "method", false, false, false, 224) == "0")) {
                    echo " 
\t\t\t     width: ";
                    // line 225
                    echo (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "max_width"], "method", false, false, false, 225) - 90);
                    echo "px;
\t\t\t     ";
                }
                // line 226
                echo " 
\t\t\t}
\t\t</style>
\t\t";
            }
            // line 230
            echo "\t\t  
\t    ";
            // line 231
            $context["lista_plikow"] = [];
            echo " 
\t 
\t ";
            // line 233
            $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/js/jquery-2.1.1.min.js"]);
            // line 234
            echo "\t ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "file_exists", [0 => "catalog/view/javascript/mf/jquery-ui.min.js"], "method", false, false, false, 234)) {
                $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/javascript/mf/jquery-ui.min.js"]);
            }
            // line 235
            echo "\t ";
            $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/js/jquery-migrate-1.2.1.min.js"]);
            // line 236
            echo "\t ";
            $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/js/jquery.easing.1.3.js"]);
            // line 237
            echo "\t ";
            $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/js/bootstrap.min.js"]);
            // line 238
            echo "\t ";
            $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/js/twitter-bootstrap-hover-dropdown.js"]);
            // line 239
            echo "\t ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "lazy_loading_images"], "method", false, false, false, 239) != "0")) {
                echo " ";
                $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/js/echo.min.js"]);
            }
            // line 240
            echo "\t ";
            $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/js/common.js"]);
            // line 241
            echo "\t ";
            $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/js/tweetfeed.min.js"]);
            // line 242
            echo "\t ";
            $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/js/bootstrap-notify.min.js"]);
            // line 243
            echo "\t 
\t ";
            // line 245
            echo "\t ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "display_specials_countdown"], "method", false, false, false, 245) == "1")) {
                // line 246
                echo "\t ";
                $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/js/jquery.plugin.min.js"]);
                // line 247
                echo "\t ";
                $context["countdown"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "jquery_countdown_translate"], "method", false, false, false, 247);
                // line 248
                echo "\t ";
                $context["language_id"] = twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 248);
                // line 249
                echo "\t ";
                if (twig_get_attribute($this->env, $this->source, ($context["countdown"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 249)) {
                    // line 250
                    echo "\t \t";
                    $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => ("catalog/view/theme/kiaria/js/countdown/" . (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["countdown"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[($context["language_id"] ?? null)] ?? null) : null))]);
                    // line 251
                    echo "\t ";
                } else {
                    echo " 
\t \t";
                    // line 252
                    $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/js/countdown/jquery.countdown.min.js"]);
                    // line 253
                    echo "\t ";
                }
                // line 254
                echo "\t ";
            }
            // line 255
            echo "\t 
\t ";
            // line 257
            echo "\t ";
            if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "banner_module"], "method", false, false, false, 257) != "")) {
                echo " ";
                $context["lista_plikow"] = twig_array_merge(($context["lista_plikow"] ?? null), [0 => "catalog/view/theme/kiaria/js/jquery.cycle2.min.js"]);
            }
            // line 258
            echo "\t 
\t ";
            // line 259
            echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "compressorCodeJs", [0 => "kiaria", 1 => ($context["lista_plikow"] ?? null), 2 => twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "compressor_code_status"], "method", false, false, false, 259), 3 => twig_constant("HTTPS_SERVER")], "method", false, false, false, 259);
            echo "
\t    
\t    ";
            // line 262
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "full_screen_background_slider_module"], "method", false, false, false, 262) != "")) {
                echo " 
\t        <script type=\"text/javascript\" src=\"catalog/view/theme/kiaria/js/jquery.vegas.min.js\"></script>
\t    ";
            }
            // line 264
            echo " 
\t    
\t    <script type=\"text/javascript\" src=\"catalog/view/theme/kiaria/js/owl.carousel.min.js\"></script>
\t    
\t    ";
            // line 268
            if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "quick_search_autosuggest"], "method", false, false, false, 268) != "0") && (($context["klasa"] ?? null) != "account-tracking"))) {
                echo " 
\t    \t<script type=\"text/javascript\" src=\"catalog/view/theme/kiaria/js/jquery-ui-1.10.4.custom.min.js\"></script>
\t    ";
            }
            // line 270
            echo " 
\t    
\t    <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js\"></script>
\t\t
\t\t<script type=\"text/javascript\">
\t\t\tvar responsive_design = '";
            // line 275
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "responsive_design"], "method", false, false, false, 275) == "0")) {
                echo "no";
            } else {
                echo "yes";
            }
            echo "';
\t\t</script>
\t\t
\t\t";
            // line 278
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                echo " 
\t\t\t";
                // line 279
                if (($context["script"] != "catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js")) {
                    echo " 
\t\t\t\t<script type=\"text/javascript\" src=\"";
                    // line 280
                    echo $context["script"];
                    echo "\"></script>
\t\t\t";
                }
                // line 281
                echo " 
\t\t\t";
                // line 282
                if (twig_in_filter("mega_filter.js", $context["script"])) {
                    echo " 
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\tfunction display_MFP(view) {
\t\t\t\t\t     ";
                    // line 285
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "quick_view"], "method", false, false, false, 285) == 1)) {
                        echo " 
\t\t\t\t\t     \$('.quickview a').magnificPopup({
\t\t\t\t\t          preloader: true,
\t\t\t\t\t          tLoading: '',
\t\t\t\t\t          type: 'iframe',
\t\t\t\t\t          mainClass: 'quickview',
\t\t\t\t\t          removalDelay: 200,
\t\t\t\t\t          gallery: {
\t\t\t\t\t           enabled: true
\t\t\t\t\t          }
\t\t\t\t\t     });
\t\t\t\t\t     ";
                    }
                    // line 296
                    echo " 
\t\t\t\t\t}
\t\t\t\t</script>
\t\t\t";
                }
                // line 299
                echo " 
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo " 
\t\t
\t\t";
            // line 302
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_code_javascript_status"], "method", false, false, false, 302) == 1)) {
                echo " 
\t\t\t<script type=\"text/javascript\" src=\"catalog/view/theme/kiaria/skins/store_";
                // line 303
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "store"], "method", false, false, false, 303);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "skin"], "method", false, false, false, 303);
                echo "/js/custom_code.js\"></script>
\t\t";
            }
            // line 304
            echo " 
\t\t
\t\t";
            // line 306
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
                echo " 
\t\t";
                // line 307
                echo $context["analytic"];
                echo " 
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 308
            echo "  
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"https://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t\t<script src=\"catalog/view/theme/kiaria/js/respond.min.js\"></script>
\t\t<![endif]-->
\t</head>\t
\t<body class=\"";
            // line 314
            echo ($context["klasa"] ?? null);
            echo " ";
            if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_width"], "method", false, false, false, 314) == 2) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "max_width"], "method", false, false, false, 314) > 1400))) {
                echo " ";
                echo "body-full-width";
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_list_type"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("product-list-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_list_type"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_grid_type"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("product-grid-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_grid_type"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "dropdown_menu_type"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("dropdown-menu-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "dropdown_menu_type"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "products_buttons_action"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("products-buttons-action-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "products_buttons_action"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_prev_next_in_slider"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("buttons-prev-next-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_prev_next_in_slider"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "inputs_type"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("inputs-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "inputs_type"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "cart_block_type"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("cart-block-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "cart_block_type"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "my_account_type"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("my-account-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "my_account_type"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_type"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("top-bar-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_type"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "show_vertical_menu_category_page"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo "show-vertical-megamenu-category-page";
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "show_vertical_menu_product_page"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo "show-vertical-megamenu-product-page";
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "show_vertical_menu"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo "show-vertical-megamenu";
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_page_type"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("product-page-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_page_type"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "megamenu_type"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("megamenu-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "megamenu_type"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "search_type_in_header"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("search-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "search_type_in_header"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "megamenu_label_type"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("megamenu-label-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "megamenu_label_type"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_type"], "method", false, false, false, 314) == 7)) {
                echo " ";
                echo "box-type-4";
                echo " ";
            } else {
                echo " ";
                echo "no-box-type-7";
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_type"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("box-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_type"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_margin_top"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("header-margin-top-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_margin_top"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_new_type"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("sale-new-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_new_type"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_type"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("button-body-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_type"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "countdown_special"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("countdown-special-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "countdown_special"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_type"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("footer-type-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_type"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_style"], "method", false, false, false, 314) > 0)) {
                echo " ";
                echo ("breadcrumb-style-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_style"], "method", false, false, false, 314));
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "border_width"], "method", false, false, false, 314) == "1")) {
                echo " ";
                echo "border-width-1";
                echo " ";
            } else {
                echo " ";
                echo "border-width-0";
                echo " ";
            }
            echo " ";
            if (((((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background_color"], "method", false, false, false, 314) == "#ffffff") || ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_background_color"], "method", false, false, false, 314) == twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background_color"], "method", false, false, false, 314)) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background_color"], "method", false, false, false, 314) != ""))) || (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_background_color"], "method", false, false, false, 314) == "none")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "colors_status"], "method", false, false, false, 314) == "1"))) {
                echo " ";
                echo "body-white";
                echo " ";
            } else {
                echo " ";
                echo "body-other";
                echo " ";
            }
            echo " ";
            if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_background_color"], "method", false, false, false, 314) == "none") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "colors_status"], "method", false, false, false, 314) == "1"))) {
                echo " ";
                echo "body-white-type-2";
                echo " ";
            }
            echo " ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_background_color"], "method", false, false, false, 314) == "none") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_background_color"], "method", false, false, false, 314) == "#ffffff")) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "colors_status"], "method", false, false, false, 314) == "1"))) {
                echo " ";
                echo "body-white-type-3";
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "hover_effect"], "method", false, false, false, 314) == "1")) {
                echo " ";
                echo ("banners-effect-" . twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "hover_effect_type"], "method", false, false, false, 314));
                echo " ";
            }
            echo " body-header-type-";
            echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 314);
            echo "\">
\t";
            // line 315
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "widget_facebook_status"], "method", false, false, false, 315) == 1)) {
                echo " 
\t<div class=\"facebook_";
                // line 316
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "widget_facebook_position"], "method", false, false, false, 316) == 1)) {
                    echo "left";
                } else {
                    echo "right";
                }
                echo " hidden-xs hidden-sm\">
\t\t<div class=\"facebook-icon\"></div>
\t\t<div class=\"facebook-content\">
\t\t\t<script>(function(d, s, id) {
\t\t\t  var js, fjs = d.getElementsByTagName(s)[0];
\t\t\t  if (d.getElementById(id)) return;
\t\t\t  js = d.createElement(s); js.id = id;
\t\t\t  js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1\";
\t\t\t  fjs.parentNode.insertBefore(js, fjs);
\t\t\t}(document, 'script', 'facebook-jssdk'));</script>
\t\t\t
\t\t\t<div class=\"fb-like-box fb_iframe_widget\" profile_id=\"";
                // line 327
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "widget_facebook_id"], "method", false, false, false, 327);
                echo "\" data-colorscheme=\"light\" data-height=\"370\" data-connections=\"16\" fb-xfbml-state=\"rendered\"></div>
\t\t</div>
\t\t
\t\t<script type=\"text/javascript\">    
\t\t\$(function() {  
\t\t\t\$(\".facebook_right\").hover(function() {            
\t\t\t\t\$(\".facebook_right\").stop(true, false).animate({right: \"0\"}, 800, 'easeOutQuint');        
\t\t\t}, function() {            
\t\t\t\t\$(\".facebook_right\").stop(true, false).animate({right: \"-308\"}, 800, 'easeInQuint');        
\t\t\t}, 1000);    
\t\t
\t\t\t\$(\".facebook_left\").hover(function() {            
\t\t\t\t\$(\".facebook_left\").stop(true, false).animate({left: \"0\"}, 800, 'easeOutQuint');        
\t\t\t}, function() {            
\t\t\t\t\$(\".facebook_left\").stop(true, false).animate({left: \"-308\"}, 800, 'easeInQuint');        
\t\t\t}, 1000);    
\t\t});  
\t\t</script>
\t</div>
\t";
            }
            // line 346
            echo " 

\t";
            // line 348
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "widget_twitter_status"], "method", false, false, false, 348) == 1)) {
                echo " 
\t<div class=\"twitter_";
                // line 349
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "widget_twitter_position"], "method", false, false, false, 349) == 1)) {
                    echo "left";
                } else {
                    echo "right";
                }
                echo " hidden-xs hidden-sm\">
\t\t<div class=\"twitter-icon\"></div>
\t\t<div class=\"twitter-content\">
\t\t\t<a class=\"twitter-timeline\" href=\"https://twitter.com/";
                // line 352
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "widget_twitter_user_name"], "method", false, false, false, 352);
                echo "\" data-tweet-limit=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "widget_twitter_limit"], "method", false, false, false, 352);
                echo "\">Tweets by ";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "widget_twitter_user_name"], "method", false, false, false, 352);
                echo "</a> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
\t\t</div>
\t\t
\t\t<script type=\"text/javascript\">    
\t\t\$(function() {  
\t\t\t\$(\".twitter_right\").hover(function() {            
\t\t\t\t\$(\".twitter_right\").stop(true, false).animate({right: \"0\"}, 800, 'easeOutQuint');        
\t\t\t}, function() {            
\t\t\t\t\$(\".twitter_right\").stop(true, false).animate({right: \"-308\"}, 800, 'easeInQuint');        
\t\t\t}, 1000);    
\t\t
\t\t\t\$(\".twitter_left\").hover(function() {            
\t\t\t\t\$(\".twitter_left\").stop(true, false).animate({left: \"0\"}, 800, 'easeOutQuint');        
\t\t\t}, function() {            
\t\t\t\t\$(\".twitter_left\").stop(true, false).animate({left: \"-308\"}, 800, 'easeInQuint');        
\t\t\t}, 1000);    
\t\t});  
\t\t</script>
\t</div>
\t";
            }
            // line 372
            echo "
\t";
            // line 373
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "widget_custom_status"], "method", false, false, false, 373) == 1)) {
                echo " 
\t<div class=\"custom_";
                // line 374
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "widget_custom_position"], "method", false, false, false, 374) == 1)) {
                    echo "left";
                } else {
                    echo "right";
                }
                echo " hidden-xs hidden-sm\">
\t\t<div class=\"custom-icon\"></div>
\t\t<div class=\"custom-content\">
\t\t\t";
                // line 377
                $context["lang_id"] = twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 377);
                echo " 
\t\t\t";
                // line 378
                $context["custom_content"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "widget_custom_content"], "method", false, false, false, 378);
                echo " 
\t\t\t";
                // line 379
                if (twig_get_attribute($this->env, $this->source, ($context["custom_content"] ?? null), ($context["lang_id"] ?? null), [], "array", true, true, false, 379)) {
                    echo " ";
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["custom_content"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[($context["lang_id"] ?? null)] ?? null) : null);
                }
                echo " 
\t\t</div>
\t\t
\t\t<script type=\"text/javascript\">    
\t\t\$(function() {  
\t\t\t\$(\".custom_right\").hover(function() {            
\t\t\t\t\$(\".custom_right\").stop(true, false).animate({right: \"0\"}, 800, 'easeOutQuint');        
\t\t\t}, function() {            
\t\t\t\t\$(\".custom_right\").stop(true, false).animate({right: \"-308\"}, 800, 'easeInQuint');        
\t\t\t}, 1000);    
\t\t
\t\t\t\$(\".custom_left\").hover(function() {            
\t\t\t\t\$(\".custom_left\").stop(true, false).animate({left: \"0\"}, 800, 'easeOutQuint');        
\t\t\t}, function() {            
\t\t\t\t\$(\".custom_left\").stop(true, false).animate({left: \"-308\"}, 800, 'easeInQuint');        
\t\t\t}, 1000);    
\t\t});  
\t\t</script>
\t\t
\t</div>
\t";
            }
            // line 399
            echo " 

\t";
            // line 401
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "quick_view"], "method", false, false, false, 401) == 1)) {
                echo " 
\t<script type=\"text/javascript\">
\t\$(window).load(function(){
\t     \$('.quickview a').magnificPopup({
\t          preloader: true,
\t          tLoading: '',
\t          type: 'iframe',
\t          mainClass: 'quickview',
\t          removalDelay: 200,
\t          gallery: {
\t           enabled: true
\t          }
\t     });
\t});
\t</script>
\t";
            }
            // line 416
            echo " 

\t";
            // line 418
            $context["popup"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "popup"], "method", false, false, false, 418);
            // line 419
            echo "\t";
            if ((twig_length_filter($this->env, ($context["popup"] ?? null)) > 0)) {
                echo " 
\t\t";
                // line 420
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["popup"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    echo " 
\t\t\t";
                    // line 421
                    echo $context["module"];
                    echo "
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 423
                echo "\t";
            }
            echo " 


\t";
            // line 426
            $context["header_notice"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "header_notice"], "method", false, false, false, 426);
            // line 427
            echo "\t";
            if ((twig_length_filter($this->env, ($context["header_notice"] ?? null)) > 0)) {
                echo " 
\t\t";
                // line 428
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["header_notice"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    echo " 
\t\t\t";
                    // line 429
                    echo $context["module"];
                    echo "
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 431
                echo "\t";
            }
            // line 432
            echo "

\t";
            // line 434
            $context["cookie"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "cookie"], "method", false, false, false, 434);
            // line 435
            echo "\t";
            if ((twig_length_filter($this->env, ($context["cookie"] ?? null)) > 0)) {
                echo " 
\t\t";
                // line 436
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cookie"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    echo " 
\t\t\t";
                    // line 437
                    echo $context["module"];
                    echo "
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 439
                echo "\t";
            }
            echo " 


\t <div class=\"";
            // line 442
            if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_layout"], "method", false, false, false, 442) == 1) || (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_layout"], "method", false, false, false, 442) == 5))) {
                echo " ";
                echo "standard-body";
                echo " ";
            } else {
                echo " ";
                echo "fixed-body";
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_layout"], "method", false, false, false, 442) == 7)) {
                echo " ";
                echo " fixed-body-shoes";
                echo " ";
            }
            echo " ";
            if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_layout"], "method", false, false, false, 442) == 4) || (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_layout"], "method", false, false, false, 442) == 6))) {
                echo " ";
                echo " fixed-body-2";
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_layout"], "method", false, false, false, 442) == 5)) {
                echo " ";
                echo " fixed-body-2-2";
                echo " ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_layout"], "method", false, false, false, 442) == 3)) {
                echo " ";
                echo " with-shadow";
                echo " ";
            }
            echo "\">
\t\t<div id=\"main\" class=\"";
            // line 443
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_layout"], "method", false, false, false, 443) == 4)) {
                echo " ";
                echo "main-fixed2 main-fixed";
                echo " ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_layout"], "method", false, false, false, 443) == 6)) {
                echo " ";
                echo "main-fixed2 main-fixed3 main-fixed";
                echo " ";
            } elseif (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_layout"], "method", false, false, false, 443) != 1) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_layout"], "method", false, false, false, 443) != 5))) {
                echo " ";
                echo "main-fixed";
                echo " ";
            }
            echo "\">

\t\t\t";
            // line 445
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 445) == 2)) {
                // line 446
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_02.twig", "kiaria/template/common/header.twig", 446)->display($context);
                // line 447
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 447) == 3)) {
                // line 448
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_03.twig", "kiaria/template/common/header.twig", 448)->display($context);
                // line 449
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 449) == 4)) {
                // line 450
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_04.twig", "kiaria/template/common/header.twig", 450)->display($context);
                // line 451
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 451) == 5)) {
                // line 452
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_05.twig", "kiaria/template/common/header.twig", 452)->display($context);
                // line 453
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 453) == 6)) {
                // line 454
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_06.twig", "kiaria/template/common/header.twig", 454)->display($context);
                // line 455
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 455) == 7)) {
                // line 456
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_07.twig", "kiaria/template/common/header.twig", 456)->display($context);
                // line 457
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 457) == 8)) {
                // line 458
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_08.twig", "kiaria/template/common/header.twig", 458)->display($context);
                // line 459
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 459) == 9)) {
                // line 460
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_09.twig", "kiaria/template/common/header.twig", 460)->display($context);
                // line 461
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 461) == 10)) {
                // line 462
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_10.twig", "kiaria/template/common/header.twig", 462)->display($context);
                // line 463
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 463) == 11)) {
                // line 464
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_11.twig", "kiaria/template/common/header.twig", 464)->display($context);
                // line 465
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 465) == 12)) {
                // line 466
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_12.twig", "kiaria/template/common/header.twig", 466)->display($context);
                // line 467
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 467) == 13)) {
                // line 468
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_13.twig", "kiaria/template/common/header.twig", 468)->display($context);
                // line 469
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 469) == 14)) {
                // line 470
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_14.twig", "kiaria/template/common/header.twig", 470)->display($context);
                // line 471
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 471) == 15)) {
                // line 472
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_15.twig", "kiaria/template/common/header.twig", 472)->display($context);
                // line 473
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 473) == 16)) {
                // line 474
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_16.twig", "kiaria/template/common/header.twig", 474)->display($context);
                // line 475
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 475) == 17)) {
                // line 476
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_17.twig", "kiaria/template/common/header.twig", 476)->display($context);
                // line 477
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 477) == 18)) {
                // line 478
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_18.twig", "kiaria/template/common/header.twig", 478)->display($context);
                // line 479
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 479) == 19)) {
                // line 480
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_19.twig", "kiaria/template/common/header.twig", 480)->display($context);
                // line 481
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 481) == 20)) {
                // line 482
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_20.twig", "kiaria/template/common/header.twig", 482)->display($context);
                // line 483
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 483) == 21)) {
                // line 484
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_21.twig", "kiaria/template/common/header.twig", 484)->display($context);
                // line 485
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 485) == 22)) {
                // line 486
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_22.twig", "kiaria/template/common/header.twig", 486)->display($context);
                // line 487
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 487) == 23)) {
                // line 488
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_23.twig", "kiaria/template/common/header.twig", 488)->display($context);
                // line 489
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 489) == 24)) {
                // line 490
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_24.twig", "kiaria/template/common/header.twig", 490)->display($context);
                // line 491
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 491) == 25)) {
                // line 492
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_25.twig", "kiaria/template/common/header.twig", 492)->display($context);
                // line 493
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 493) == 26)) {
                // line 494
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_26.twig", "kiaria/template/common/header.twig", 494)->display($context);
                // line 495
                echo "\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type"], "method", false, false, false, 495) == 27)) {
                // line 496
                echo "\t\t\t\t";
                $this->loadTemplate("kiaria/template/common/header/header_27.twig", "kiaria/template/common/header.twig", 496)->display($context);
                // line 497
                echo "\t\t\t";
            } else {
                echo " 
\t\t\t\t";
                // line 498
                $this->loadTemplate("kiaria/template/common/header/header_01.twig", "kiaria/template/common/header.twig", 498)->display($context);
                // line 499
                echo "\t\t\t";
            }
            echo " 
";
        }
    }

    public function getTemplateName()
    {
        return "kiaria/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1608 => 499,  1606 => 498,  1601 => 497,  1598 => 496,  1595 => 495,  1592 => 494,  1589 => 493,  1586 => 492,  1583 => 491,  1580 => 490,  1577 => 489,  1574 => 488,  1571 => 487,  1568 => 486,  1565 => 485,  1562 => 484,  1559 => 483,  1556 => 482,  1553 => 481,  1550 => 480,  1547 => 479,  1544 => 478,  1541 => 477,  1538 => 476,  1535 => 475,  1532 => 474,  1529 => 473,  1526 => 472,  1523 => 471,  1520 => 470,  1517 => 469,  1514 => 468,  1511 => 467,  1508 => 466,  1505 => 465,  1502 => 464,  1499 => 463,  1496 => 462,  1493 => 461,  1490 => 460,  1487 => 459,  1484 => 458,  1481 => 457,  1478 => 456,  1475 => 455,  1472 => 454,  1469 => 453,  1466 => 452,  1463 => 451,  1460 => 450,  1457 => 449,  1454 => 448,  1451 => 447,  1448 => 446,  1446 => 445,  1429 => 443,  1393 => 442,  1386 => 439,  1378 => 437,  1372 => 436,  1367 => 435,  1365 => 434,  1361 => 432,  1358 => 431,  1350 => 429,  1344 => 428,  1339 => 427,  1337 => 426,  1330 => 423,  1322 => 421,  1316 => 420,  1311 => 419,  1309 => 418,  1305 => 416,  1286 => 401,  1282 => 399,  1255 => 379,  1251 => 378,  1247 => 377,  1237 => 374,  1233 => 373,  1230 => 372,  1203 => 352,  1193 => 349,  1189 => 348,  1185 => 346,  1162 => 327,  1144 => 316,  1140 => 315,  942 => 314,  934 => 308,  926 => 307,  920 => 306,  916 => 304,  909 => 303,  905 => 302,  901 => 300,  894 => 299,  888 => 296,  873 => 285,  867 => 282,  864 => 281,  859 => 280,  855 => 279,  849 => 278,  839 => 275,  832 => 270,  826 => 268,  820 => 264,  813 => 262,  808 => 259,  805 => 258,  799 => 257,  796 => 255,  793 => 254,  790 => 253,  788 => 252,  783 => 251,  780 => 250,  777 => 249,  774 => 248,  771 => 247,  768 => 246,  765 => 245,  762 => 243,  759 => 242,  756 => 241,  753 => 240,  747 => 239,  744 => 238,  741 => 237,  738 => 236,  735 => 235,  730 => 234,  728 => 233,  723 => 231,  720 => 230,  714 => 226,  709 => 225,  705 => 224,  701 => 223,  695 => 219,  690 => 218,  686 => 217,  682 => 216,  674 => 210,  669 => 209,  665 => 208,  661 => 207,  655 => 204,  649 => 200,  642 => 199,  633 => 198,  629 => 197,  623 => 196,  619 => 195,  613 => 194,  609 => 193,  603 => 192,  599 => 191,  593 => 190,  589 => 188,  582 => 187,  578 => 186,  575 => 185,  572 => 184,  567 => 181,  564 => 180,  558 => 179,  555 => 177,  549 => 176,  540 => 173,  537 => 171,  531 => 170,  528 => 168,  522 => 167,  519 => 165,  513 => 164,  510 => 162,  507 => 161,  504 => 160,  501 => 159,  499 => 158,  496 => 157,  492 => 154,  490 => 146,  486 => 144,  483 => 143,  475 => 141,  469 => 140,  466 => 139,  463 => 138,  460 => 137,  457 => 136,  454 => 135,  451 => 134,  449 => 133,  446 => 132,  443 => 131,  440 => 130,  437 => 129,  434 => 128,  431 => 127,  429 => 126,  426 => 125,  423 => 124,  420 => 123,  417 => 122,  414 => 121,  411 => 120,  409 => 119,  406 => 118,  403 => 117,  400 => 116,  397 => 115,  394 => 114,  391 => 113,  389 => 112,  386 => 111,  383 => 110,  380 => 109,  377 => 108,  374 => 107,  371 => 106,  369 => 105,  366 => 104,  363 => 103,  360 => 102,  357 => 101,  354 => 100,  351 => 99,  349 => 98,  346 => 97,  343 => 96,  340 => 95,  337 => 94,  334 => 93,  331 => 92,  329 => 91,  326 => 90,  323 => 89,  320 => 88,  317 => 87,  314 => 86,  311 => 85,  309 => 84,  306 => 83,  303 => 82,  300 => 81,  297 => 80,  294 => 79,  291 => 78,  289 => 77,  286 => 76,  283 => 75,  280 => 74,  277 => 73,  274 => 72,  271 => 71,  269 => 70,  266 => 69,  263 => 68,  260 => 67,  257 => 66,  254 => 65,  251 => 64,  249 => 63,  242 => 58,  232 => 57,  226 => 56,  222 => 54,  217 => 53,  213 => 52,  210 => 51,  205 => 50,  201 => 49,  198 => 48,  192 => 46,  184 => 41,  180 => 40,  165 => 38,  151 => 37,  137 => 36,  123 => 35,  117 => 33,  115 => 32,  110 => 31,  108 => 30,  105 => 29,  102 => 28,  100 => 27,  95 => 26,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  69 => 17,  64 => 15,  59 => 14,  56 => 13,  53 => 12,  50 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kiaria/template/common/header.twig", "");
    }
}
