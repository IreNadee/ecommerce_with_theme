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

/* kiaria/template/common/cart.twig */
class __TwigTemplate_688f788965d3b01c9b392261aafe0358b1dc88fed07677ebd6b806a68016d60e extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "has", [0 => "theme_options"], "method", false, false, false, 1) == twig_constant("true"))) {
            echo " 
";
            // line 2
            $context["theme_options"] = twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "get", [0 => "theme_options"], "method", false, false, false, 2);
            // line 3
            $context["config"] = twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "get", [0 => "config"], "method", false, false, false, 3);
            // line 4
            $context["cart_info"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getCart", [], "method", false, false, false, 4);
            echo " 

<!-- Cart block -->
<div id=\"cart_block\" class=\"dropdown\">
\t<div class=\"cart-heading dropdown-toogle\" data-hover=\"dropdown\" data-toggle=\"dropdown\" onclick=\"window.location.href = '";
            // line 8
            echo ($context["cart"] ?? null);
            echo "'\">
\t\t<i class=\"cart-count\"><span id=\"total_count_ajax\">";
            // line 9
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["cart_info"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["total_item"] ?? null) : null);
            echo "</span></i>
\t\t
\t\t";
            // line 11
            if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "colors_status"], "method", false, false, false, 11) == 1) && ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "cart_icon"], "method", false, false, false, 11) != "") || (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "cart_icon_hover"], "method", false, false, false, 11) != "")))) {
                echo " 
\t\t     <i class=\"cart-icon ";
                // line 12
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "cart_icon_hover"], "method", false, false, false, 12) == "")) {
                    echo " ";
                    echo "cart-icon-no-hover";
                    echo " ";
                }
                echo "\">
\t\t     \t<img src=\"image/";
                // line 13
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "cart_icon_hover"], "method", false, false, false, 13) != "")) {
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "cart_icon_hover"], "method", false, false, false, 13);
                } else {
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "cart_icon"], "method", false, false, false, 13);
                }
                echo "\" class=\"cart-icon-hover\" alt=\"\">
\t\t     \t<img src=\"image/";
                // line 14
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "cart_icon"], "method", false, false, false, 14) != "")) {
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "cart_icon"], "method", false, false, false, 14);
                } else {
                    echo "catalog/view/theme/kiaria/img/icon-cart.png";
                }
                echo "\" class=\"cart-icon-standard\" alt=\"\">
\t\t     </i>
\t\t";
            } else {
                // line 16
                echo " 
\t\t     <i class=\"cart-icon\"><img src=\"catalog/view/theme/kiaria/img/icon-cart-hover.png\" class=\"cart-icon-hover\" alt=\"\"><img src=\"catalog/view/theme/kiaria/img/icon-cart.png\" class=\"cart-icon-standard\" alt=\"\"></i>
\t\t";
            }
            // line 18
            echo " 
\t\t
\t\t<p><strong id=\"total_price_ajax\"><span id=\"total_price\">";
            // line 20
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["cart_info"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["total_price"] ?? null) : null);
            echo "</span></strong></p>
\t</div>
\t
\t<div class=\"dropdown-menu\" id=\"cart_content\"><div id=\"cart_content_ajax\">
\t\t";
            // line 24
            if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
                echo " 
\t\t<div class=\"mini-cart-info\">
\t\t  <table>
\t\t    ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    echo " 
\t\t    \t
\t\t    <tr>
\t\t      <td class=\"image\">";
                    // line 30
                    if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["product"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["thumb"] ?? null) : null)) {
                        echo " 
\t\t        <a href=\"";
                        // line 31
                        echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["product"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["href"] ?? null) : null);
                        echo "\"><img src=\"";
                        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["product"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["thumb"] ?? null) : null);
                        echo "\" alt=\"";
                        echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["product"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["name"] ?? null) : null);
                        echo "\" title=\"";
                        echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["product"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null);
                        echo "\" /></a>
\t\t        ";
                    }
                    // line 32
                    echo "</td>
\t\t      <td class=\"name\"><a href=\"";
                    // line 33
                    echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["product"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["product"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["name"] ?? null) : null);
                    echo "</a>
\t\t        <div>
\t\t          ";
                    // line 35
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["product"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["option"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " 
\t\t          - <small>";
                        // line 36
                        echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["option"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["name"] ?? null) : null);
                        echo " ";
                        echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["option"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["value"] ?? null) : null);
                        echo "</small><br />
\t\t          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo " 
\t\t          ";
                    // line 38
                    if ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["product"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["recurring"] ?? null) : null)) {
                        echo " 
\t\t          - <small>";
                        // line 39
                        echo ($context["text_recurring"] ?? null);
                        echo " ";
                        echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["product"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["recurring"] ?? null) : null);
                        echo "</small><br />
\t\t          ";
                    }
                    // line 40
                    echo " 
\t\t        </div></td>
\t\t      <td class=\"quantity\">x&nbsp;";
                    // line 42
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["product"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["quantity"] ?? null) : null);
                    echo "</td>
\t\t      <td class=\"total\">";
                    // line 43
                    echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["product"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["total"] ?? null) : null);
                    echo "</td>
\t\t      <td class=\"remove\"><a href=\"javascript:;\" onclick=\"cart.remove('";
                    // line 44
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["product"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["cart_id"] ?? null) : null);
                    echo "');\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\">x</a></td>
\t\t    </tr>
\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo " 
\t\t    ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                    echo " 
\t\t    <tr>
\t\t      <td class=\"image\"></td>
\t\t      <td class=\"name\">";
                    // line 50
                    echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["voucher"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["description"] ?? null) : null);
                    echo "</td>
\t\t      <td class=\"quantity\">x&nbsp;1</td>
\t\t      <td class=\"total\">";
                    // line 52
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["voucher"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["amount"] ?? null) : null);
                    echo "</td>
\t\t      <td class=\"remove\"><a href=\"javascript:;\" onclick=\"voucher.remove('";
                    // line 53
                    echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["voucher"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["key"] ?? null) : null);
                    echo "');\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\">x</a></td>
\t\t    </tr>
\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo " 
\t\t  </table>
\t\t</div>
\t\t<div class=\"mini-cart-total\">
\t\t  <table>
\t\t    ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                    echo " 
\t\t    <tr>
\t\t      <td class=\"right\"><b>";
                    // line 62
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["total"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["title"] ?? null) : null);
                    echo ":</b></td>
\t\t      <td class=\"right\">";
                    // line 63
                    echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["total"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["text"] ?? null) : null);
                    echo "</td>
\t\t    </tr>
\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo " 
\t\t  </table>
\t\t</div>
\t\t
\t\t<div class=\"checkout\"><a href=\"";
                // line 69
                echo ($context["cart"] ?? null);
                echo "\" class=\"button btn-default\">";
                echo ($context["text_cart"] ?? null);
                echo "</a> &nbsp;<a href=\"";
                echo ($context["checkout"] ?? null);
                echo "\" class=\"button\">";
                echo ($context["text_checkout"] ?? null);
                echo "</a></div>
\t\t";
            } else {
                // line 70
                echo " 
\t\t<div class=\"empty\">";
                // line 71
                echo ($context["text_empty"] ?? null);
                echo "</div>
\t\t";
            }
            // line 72
            echo "  
\t</div></div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "kiaria/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 72,  277 => 71,  274 => 70,  263 => 69,  257 => 65,  248 => 63,  244 => 62,  237 => 60,  230 => 55,  219 => 53,  215 => 52,  210 => 50,  202 => 47,  199 => 46,  188 => 44,  184 => 43,  180 => 42,  176 => 40,  169 => 39,  165 => 38,  162 => 37,  152 => 36,  146 => 35,  139 => 33,  136 => 32,  125 => 31,  121 => 30,  113 => 27,  107 => 24,  100 => 20,  96 => 18,  91 => 16,  81 => 14,  73 => 13,  65 => 12,  61 => 11,  56 => 9,  52 => 8,  45 => 4,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kiaria/template/common/cart.twig", "");
    }
}
