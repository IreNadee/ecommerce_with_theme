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

/* kiaria/template/new_elements/product.twig */
class __TwigTemplate_205c7466e83b71e08af6af6cddf54aa803a59d81781aa1ce948f9c53fd562c3d extends \Twig\Template
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
        $context["theme_options"] = twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "get", [0 => "theme_options"], "method", false, false, false, 1);
        // line 2
        $context["config"] = twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "get", [0 => "config"], "method", false, false, false, 2);
        // line 3
        echo "
<!-- Product -->
<div class=\"product clearfix product-hover\">
\t<div class=\"left\">
\t\t";
        // line 7
        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["product"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["thumb"] ?? null) : null)) {
            echo " 
\t\t\t";
            // line 8
            if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["product"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["special"] ?? null) : null) && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "display_text_sale"], "method", false, false, false, 8) != "0"))) {
                echo " 
\t\t\t\t";
                // line 9
                $context["text_sale"] = "Sale";
                // line 10
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_text", 1 => twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 10)], "method", false, false, false, 10) != "")) {
                    // line 11
                    echo "\t\t\t\t\t";
                    $context["text_sale"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_text", 1 => twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 11)], "method", false, false, false, 11);
                    // line 12
                    echo "\t\t\t\t";
                }
                echo " 

\t\t\t\t";
                // line 14
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "type_sale"], "method", false, false, false, 14) == "1")) {
                    echo " 
\t\t\t\t\t";
                    // line 15
                    $context["product_detail"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getDataProduct", [0 => (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["product"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["product_id"] ?? null) : null)], "method", false, false, false, 15);
                    // line 16
                    echo "\t\t\t\t\t";
                    $context["roznica_ceny"] = ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["product_detail"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["price"] ?? null) : null) - (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["product_detail"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["special"] ?? null) : null));
                    // line 17
                    echo "\t\t\t\t\t";
                    $context["procent"] = ((($context["roznica_ceny"] ?? null) * 100) / (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["product_detail"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["price"] ?? null) : null));
                    echo " 
\t\t\t\t\t<div class=\"sale\">-";
                    // line 18
                    echo twig_round(($context["procent"] ?? null));
                    echo "%</div>
\t\t\t\t";
                } else {
                    // line 19
                    echo " 
\t\t\t\t\t<div class=\"sale\">";
                    // line 20
                    echo ($context["text_sale"] ?? null);
                    echo "</div>
\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t
\t\t\t ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 23
($context["theme_options"] ?? null), "get", [0 => "display_text_new"], "method", false, false, false, 23) != "0") && twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "isLatestProduct", [0 => (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["product"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["product_id"] ?? null) : null)], "method", false, false, false, 23))) {
                echo " 
\t\t\t\t <div class=\"new\">";
                // line 24
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_text", 1 => twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 24)], "method", false, false, false, 24) != "")) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_text", 1 => twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 24)], "method", false, false, false, 24);
                    echo " ";
                } else {
                    echo " ";
                    echo "New";
                    echo " ";
                }
                echo "</div>
\t\t\t ";
            }
            // line 25
            echo " 
\t\t\t
\t\t\t<div class=\"image ";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_image_effect"], "method", false, false, false, 27) == "1")) {
                echo " ";
                echo "image-swap-effect";
                echo " ";
            }
            echo "\">
\t\t\t\t";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "quick_view"], "method", false, false, false, 28) == 1)) {
                echo " 
\t\t          <div class=\"quickview\"><a href=\"index.php?route=product/quickview&amp;product_id=";
                // line 29
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["product"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["product_id"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" data-original-title=\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "quickview_text", 1 => twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 29)], "method", false, false, false, 29) != "")) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "html_entity_decode", [0 => twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "quickview_text", 1 => twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 29)], "method", false, false, false, 29)], "method", false, false, false, 29);
                    echo " ";
                } else {
                    echo " ";
                    echo "Quickview";
                    echo " ";
                }
                echo "\"><i class=\"fa fa-search\"></i></a></div>
\t\t          ";
            }
            // line 30
            echo " 
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<a href=\"";
            // line 34
            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["product"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["href"] ?? null) : null);
            echo "\">
\t\t\t\t\t";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_image_effect"], "method", false, false, false, 35) == "1")) {
                // line 36
                echo "\t\t\t\t\t\t";
                $context["nthumb"] = twig_replace_filter((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["product"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["thumb"] ?? null) : null), [" " => "%20"]);
                // line 37
                echo "\t\t\t\t\t\t";
                $context["adres"] = twig_constant("HTTP_SERVER");
                // line 38
                echo "\t\t\t\t\t\t";
                $context["nthumb"] = twig_replace_filter(($context["nthumb"] ?? null), ["adres" => ""]);
                // line 39
                echo "\t\t\t\t\t\t";
                $context["image_size"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getimagesize", [0 => ($context["nthumb"] ?? null)], "method", false, false, false, 39);
                // line 40
                echo "\t\t\t\t\t\t";
                $context["image_swap"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "productImageSwap", [0 => (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["product"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["product_id"] ?? null) : null), 1 => (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["image_size"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[0] ?? null) : null), 2 => (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["image_size"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[1] ?? null) : null)], "method", false, false, false, 40);
                // line 41
                echo "\t\t\t\t\t\t";
                if ((($context["image_swap"] ?? null) != "")) {
                    echo " ";
                    echo (((("<img src=\"" . ($context["image_swap"] ?? null)) . "\" alt=\"") . (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["product"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["name"] ?? null) : null)) . "\" class=\"swap-image\" />");
                }
                // line 42
                echo "\t\t\t\t\t";
            }
            echo " 
\t\t\t\t\t
\t\t\t\t\t";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "lazy_loading_images"], "method", false, false, false, 44) != "0")) {
                echo " 
\t\t\t\t\t<img src=\"image/catalog/blank.gif\" data-echo=\"";
                // line 45
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["product"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["thumb"] ?? null) : null);
                echo "\" alt=\"";
                echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["product"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["name"] ?? null) : null);
                echo "\" class=\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_image_effect"], "method", false, false, false, 45) == "2")) {
                    echo " ";
                    echo "zoom-image-effect";
                    echo " ";
                }
                echo "\" />
\t\t\t\t\t";
            } else {
                // line 46
                echo " 
\t\t\t\t\t<img src=\"";
                // line 47
                echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["product"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["thumb"] ?? null) : null);
                echo "\" alt=\"";
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["product"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["name"] ?? null) : null);
                echo "\" class=\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_image_effect"], "method", false, false, false, 47) == "2")) {
                    echo " ";
                    echo "zoom-image-effect";
                    echo " ";
                }
                echo "\" />
\t\t\t\t\t";
            }
            // line 48
            echo " 
\t\t\t\t</a>
\t\t\t</div>
\t\t";
        } else {
            // line 51
            echo " 
\t\t\t<div class=\"image\">
\t\t\t\t<a href=\"";
            // line 53
            echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["product"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["href"] ?? null) : null);
            echo "\"><img src=\"image/no_image.jpg\" alt=\"";
            echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["product"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["name"] ?? null) : null);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_image_effect"], "method", false, false, false, 53) == "2")) {
                echo " ";
                echo "class=\"zoom-image-effect\"";
                echo " ";
            }
            echo " /></a>
\t\t\t</div>
\t\t";
        }
        // line 55
        echo " 
\t\t
\t\t";
        // line 57
        if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "display_specials_countdown"], "method", false, false, false, 57) == "1") && (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["product"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["special"] ?? null) : null))) {
            echo " 
\t\t\t";
            // line 58
            $context["countdown"] = (twig_random($this->env, 5000) * twig_random($this->env, 50000));
            echo " 
\t\t ";
            // line 59
            $context["product_detail"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getDataProduct", [0 => (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["product"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["product_id"] ?? null) : null)], "method", false, false, false, 59);
            // line 60
            echo "\t\t ";
            $context["date_end"] = (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["product_detail"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["date_end"] ?? null) : null);
            // line 61
            echo "\t\t ";
            if (((($context["date_end"] ?? null) != "0000-00-00") && ($context["date_end"] ?? null))) {
                echo " 
               \t\t<script>
               \t\t\$(function () {
               \t\t\tvar austDay = new Date();
               \t\t\taustDay = new Date(";
                // line 65
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "date", [0 => "Y", 1 => twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "strtotime", [0 => ($context["date_end"] ?? null)], "method", false, false, false, 65)], "method", false, false, false, 65);
                echo ", ";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "date", [0 => "m", 1 => twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "strtotime", [0 => ($context["date_end"] ?? null)], "method", false, false, false, 65)], "method", false, false, false, 65);
                echo " - 1, ";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "date", [0 => "d", 1 => twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "strtotime", [0 => ($context["date_end"] ?? null)], "method", false, false, false, 65)], "method", false, false, false, 65);
                echo ");
               \t\t\t\$('#countdown";
                // line 66
                echo ($context["countdown"] ?? null);
                echo "').countdown({until: austDay});
               \t\t});
               \t\t</script>
               \t\t<div id=\"countdown";
                // line 69
                echo ($context["countdown"] ?? null);
                echo "\" class=\"clearfix\"></div>
     \t\t     ";
            }
            // line 70
            echo " 
\t\t";
        }
        // line 71
        echo "  
\t</div>
\t<div class=\"right\">
\t\t<div class=\"name\"><a href=\"";
        // line 74
        echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["product"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["href"] ?? null) : null);
        echo "\">";
        echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["product"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["name"] ?? null) : null);
        echo "</a></div>
\t\t";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_grid_type"], "method", false, false, false, 75) == "7")) {
            echo " 
\t\t\t";
            // line 76
            $context["product_detail"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getDataProduct", [0 => (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["product"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["product_id"] ?? null) : null)], "method", false, false, false, 76);
            echo " 
\t\t\t<div class=\"brand\">";
            // line 77
            echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["product_detail"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["manufacturer"] ?? null) : null);
            echo "</div>
\t\t";
        }
        // line 78
        echo " 
\t\t
\t\t";
        // line 80
        if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["product"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["price"] ?? null) : null)) {
            echo " 
\t\t<div class=\"price\">
\t\t\t";
            // line 82
            if ( !(($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["product"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["special"] ?? null) : null)) {
                echo " 
\t\t\t";
                // line 83
                echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["product"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["price"] ?? null) : null);
                echo " 
\t\t\t";
            } else {
                // line 84
                echo " 
\t\t\t<span class=\"price-old\">";
                // line 85
                echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["product"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["price"] ?? null) : null);
                echo "</span> <span class=\"price-new\">";
                echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["product"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["special"] ?? null) : null);
                echo "</span>
\t\t\t";
            }
            // line 86
            echo " 
\t\t</div>
\t\t";
        }
        // line 88
        echo " 
\t\t
\t\t
\t\t";
        // line 91
        if ((((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "display_add_to_compare"], "method", false, false, false, 91) != "0") || (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "display_add_to_wishlist"], "method", false, false, false, 91) != "0")) || (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "display_add_to_cart"], "method", false, false, false, 91) != "0"))) {
            echo " 
\t\t<div class=\"only-hover\">
\t\t     <ul>
\t\t          ";
            // line 94
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "display_add_to_cart"], "method", false, false, false, 94) != "0")) {
                echo " 
\t\t               ";
                // line 95
                $context["enquiry"] = twig_constant("false");
                echo " 
\t\t               \t";
                // line 96
                if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "product_blocks_module"], "method", false, false, false, 96) != "")) {
                    echo " ";
                    $context["enquiry"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "productIsEnquiry", [0 => (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["product"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["product_id"] ?? null) : null)], "method", false, false, false, 96);
                    echo " ";
                }
                // line 97
                echo "\t\t \t\t\t\t";
                if (twig_test_iterable(($context["enquiry"] ?? null))) {
                    echo " 
\t\t               \t\t<li><a href=\"javascript:openPopup('";
                    // line 98
                    echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["enquiry"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["popup_module"] ?? null) : null);
                    echo "', '";
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["product"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["product_id"] ?? null) : null);
                    echo "')\" data-toggle=\"tooltip\" data-original-title=\"";
                    echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["enquiry"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["block_name"] ?? null) : null);
                    echo "\"><i class=\"fa fa-question\"></i></a></li>
\t\t               ";
                } else {
                    // line 99
                    echo " 
\t\t               \t\t<li class=\"add-to-cart\"><a onclick=\"cart.add('";
                    // line 100
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["product"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["product_id"] ?? null) : null);
                    echo "');\" data-toggle=\"tooltip\" data-original-title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\"><i class=\"fa fa-plus\"></i>Add to Cart</a></li>
\t\t               ";
                }
                // line 101
                echo " 
\t\t          ";
            }
            // line 102
            echo " 
\t\t          
\t\t          
\t\t     
\t\t\t\t";
            // line 106
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "display_add_to_compare"], "method", false, false, false, 106) != "0")) {
                echo " 
\t\t\t\t<li><a onclick=\"compare.add('";
                // line 107
                echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["product"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["product_id"] ?? null) : null);
                echo "');\" data-toggle=\"tooltip\" data-original-title=\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "add_to_compare_text", 1 => twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 107)], "method", false, false, false, 107) != "")) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "add_to_compare_text", 1 => twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 107)], "method", false, false, false, 107);
                    echo " ";
                } else {
                    echo " ";
                    echo "Add to compare";
                    echo " ";
                }
                echo "\"><i class=\"fa fa-refresh\"></i>Add to Compare</a></li>
\t\t\t\t";
            }
            // line 108
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 110
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "display_add_to_wishlist"], "method", false, false, false, 110) != "0")) {
                echo " 
\t\t\t\t<li><a onclick=\"wishlist.add('";
                // line 111
                echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["product"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["product_id"] ?? null) : null);
                echo "');\" data-toggle=\"tooltip\" data-original-title=\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "add_to_wishlist_text", 1 => twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 111)], "method", false, false, false, 111) != "")) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "add_to_wishlist_text", 1 => twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 111)], "method", false, false, false, 111);
                    echo " ";
                } else {
                    echo " ";
                    echo "Add to wishlist";
                    echo " ";
                }
                echo "\"><i class=\"fa fa-heart-o\"></i>Add to Wishlist</a></li>
\t\t\t\t";
            }
            // line 112
            echo " 
\t\t\t</ul>
\t\t</div>
\t\t";
        }
        // line 115
        echo " 
\t\t
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "kiaria/template/new_elements/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 115,  449 => 112,  434 => 111,  430 => 110,  426 => 108,  411 => 107,  407 => 106,  401 => 102,  397 => 101,  390 => 100,  387 => 99,  378 => 98,  373 => 97,  367 => 96,  363 => 95,  359 => 94,  353 => 91,  348 => 88,  343 => 86,  336 => 85,  333 => 84,  328 => 83,  324 => 82,  319 => 80,  315 => 78,  310 => 77,  306 => 76,  302 => 75,  296 => 74,  291 => 71,  287 => 70,  282 => 69,  276 => 66,  268 => 65,  260 => 61,  257 => 60,  255 => 59,  251 => 58,  247 => 57,  243 => 55,  229 => 53,  225 => 51,  219 => 48,  206 => 47,  203 => 46,  190 => 45,  186 => 44,  180 => 42,  174 => 41,  171 => 40,  168 => 39,  165 => 38,  162 => 37,  159 => 36,  157 => 35,  153 => 34,  147 => 30,  132 => 29,  128 => 28,  120 => 27,  116 => 25,  103 => 24,  99 => 23,  96 => 22,  91 => 20,  88 => 19,  83 => 18,  78 => 17,  75 => 16,  73 => 15,  69 => 14,  63 => 12,  60 => 11,  57 => 10,  55 => 9,  51 => 8,  47 => 7,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kiaria/template/new_elements/product.twig", "C:\\xampp\\htdocs\\onlineshop\\catalog\\view\\theme\\kiaria\\template\\new_elements\\product.twig");
    }
}
