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

/* kiaria/template/common/header/header_01.twig */
class __TwigTemplate_12cfdfd6392b96df5425923e3f623ec021da923f3ae9da9d2b398913be7e4e61 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "fixed_header"], "method", false, false, false, 1) == 1)) {
            echo " 
<!-- HEADER
\t================================================== -->
<div class=\"fixed-header-1 sticky-header header-type-24\">
\t<div class=\"background-header\"></div>
\t<div class=\"slider-header\">
\t\t<!-- Top of pages -->
\t\t<div id=\"top\" class=\"";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_layout"], "method", false, false, false, 8) == 1)) {
                echo " ";
                echo "full-width";
                echo " ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_layout"], "method", false, false, false, 8) == 4)) {
                echo " ";
                echo "fixed3 fixed2";
                echo " ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_layout"], "method", false, false, false, 8) == 3)) {
                echo " ";
                echo "fixed2";
                echo " ";
            } else {
                echo " ";
                echo "fixed";
                echo " ";
            }
            echo "\">
\t\t\t<div class=\"background-top\"></div>
\t\t\t<div class=\"background\">
\t\t\t\t<div class=\"shadow\"></div>
\t\t\t\t<div class=\"pattern\">
\t\t\t\t\t<div class=\"megamenu-background\">
\t\t\t\t\t     <div class=\"\">
\t\t\t\t\t          <div class=\"overflow-megamenu container\">
\t\t\t\t\t\t\t\t<div class=\"row mega-menu-modules\">
\t\t\t\t\t\t\t\t     <div class=\"col-md-3\">
\t\t\t\t\t\t\t\t          
\t\t\t\t\t\t\t\t ";
            // line 19
            $context["menu92"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "menu2"], "method", false, false, false, 19);
            // line 20
            echo "\t\t\t\t\t\t\t\t ";
            if ((twig_length_filter($this->env, ($context["menu92"] ?? null)) > 0)) {
                echo " 
\t\t\t\t\t\t\t\t \t";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["menu92"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    echo " 
\t\t\t\t\t\t\t\t \t\t";
                    // line 22
                    echo $context["module"];
                    echo "
\t\t\t\t\t\t\t\t \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "\t\t\t\t\t\t\t\t ";
            }
            echo " 
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t     
\t\t\t\t\t\t\t\t     <div class=\"col-md-9\">
\t\t\t\t\t\t\t\t         ";
            // line 28
            $context["search_cats"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getAllCategories", [], "method", false, false, false, 28);
            // line 29
            echo "\t\t\t\t\t\t\t\t         ";
            $context["category_id"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getCurrentCategory", [], "method", false, false, false, 29);
            // line 30
            echo "\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t          
\t\t\t\t\t\t\t\t          <div class=\"search_form\">     
\t\t\t\t\t\t\t\t               <div class=\"button-search\"></div>

\t\t\t\t\t\t\t\t               <div class=\"search-cat\">
\t\t\t\t\t\t\t\t                   <select name=\"category_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t                     <option value=\"0\">";
            // line 37
            echo (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "all_categories_text", 1 => twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 37)], "method", false, false, false, 37) != "")) ? (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "all_categories_text", 1 => twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 37)], "method", false, false, false, 37)) : ("All categories"));
            echo "</option>
\t\t\t\t\t\t\t\t                     ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["search_cats"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
                echo " 
\t\t\t\t\t\t\t\t                     ";
                // line 39
                if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["category_1"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["category_id"] ?? null) : null) == ($context["category_id"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t\t                     <option value=\"";
                    // line 40
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["category_1"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["category_id"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["category_1"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name"] ?? null) : null);
                    echo "</option>
\t\t\t\t\t\t\t\t                     ";
                } else {
                    // line 41
                    echo " 
\t\t\t\t\t\t\t\t                     <option value=\"";
                    // line 42
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["category_1"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["category_id"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["category_1"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["name"] ?? null) : null);
                    echo "</option>
\t\t\t\t\t\t\t\t                     ";
                }
                // line 43
                echo " 
\t\t\t\t\t\t\t\t                     ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["category_1"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["children"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    echo " 
\t\t\t\t\t\t\t\t                     ";
                    // line 45
                    if (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["category_2"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["category_id"] ?? null) : null) == ($context["category_id"] ?? null))) {
                        echo " 
\t\t\t\t\t\t\t\t                     <option value=\"";
                        // line 46
                        echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["category_2"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["category_id"] ?? null) : null);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;";
                        echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["category_2"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["name"] ?? null) : null);
                        echo "</option>
\t\t\t\t\t\t\t\t                     ";
                    } else {
                        // line 47
                        echo " 
\t\t\t\t\t\t\t\t                     <option value=\"";
                        // line 48
                        echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["category_2"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["category_id"] ?? null) : null);
                        echo "\">&nbsp;&nbsp;";
                        echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["category_2"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["name"] ?? null) : null);
                        echo "</option>
\t\t\t\t\t\t\t\t                     ";
                    }
                    // line 49
                    echo " 
\t\t\t\t\t\t\t\t                     ";
                    // line 50
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["category_2"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["children"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                        echo " 
\t\t\t\t\t\t\t\t                     ";
                        // line 51
                        if (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["category_3"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["category_id"] ?? null) : null) == ($context["category_id"] ?? null))) {
                            echo " 
\t\t\t\t\t\t\t\t                     <option value=\"";
                            // line 52
                            echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["category_3"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["category_id"] ?? null) : null);
                            echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;";
                            echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["category_3"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["name"] ?? null) : null);
                            echo "</option>
\t\t\t\t\t\t\t\t                     ";
                        } else {
                            // line 53
                            echo " 
\t\t\t\t\t\t\t\t                     <option value=\"";
                            // line 54
                            echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["category_3"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["category_id"] ?? null) : null);
                            echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["category_3"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["name"] ?? null) : null);
                            echo "</option>
\t\t\t\t\t\t\t\t                     ";
                        }
                        // line 55
                        echo " 
\t\t\t\t\t\t\t\t                     ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo " 
\t\t\t\t\t\t\t\t                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo " 
\t\t\t\t\t\t\t\t                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo " 
\t\t\t\t\t\t\t\t                   </select>
\t\t\t\t\t\t\t\t               </div>
\t\t\t\t\t\t\t\t               \t\t\t\t\t\t\t         
\t\t\t\t\t\t\t\t              <div class=\"overflow-input\"><input type=\"text\" class=\"input-block-level search-query\" name=\"search\" placeholder=\"";
            // line 62
            echo ($context["text_search"] ?? null);
            echo "\" id=\"search_query\" value=\"\" /></div>
\t\t\t\t\t\t\t\t              
\t\t\t\t\t\t\t\t              ";
            // line 64
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "quick_search_autosuggest"], "method", false, false, false, 64) != "0")) {
                echo " 
\t\t\t\t\t\t\t\t                  <div id=\"autocomplete-results\" class=\"autocomplete-results\"></div>
\t\t\t\t\t\t\t\t           
\t\t\t\t\t\t\t\t                  <script type=\"text/javascript\">
\t\t\t\t\t\t\t\t                  \$(document).ready(function() {
\t\t\t\t\t\t\t\t           
\t\t\t\t\t\t\t\t                      \$('#search_query').autocomplete({
\t\t\t\t\t\t\t\t                          delay: 0,
\t\t\t\t\t\t\t\t                          appendTo: \"#autocomplete-results\",
\t\t\t\t\t\t\t\t                          source: function(request, response) {  
\t\t\t\t\t\t\t\t           
\t\t\t\t\t\t\t\t                              var category_filter = \$('header select[name=\\'category_id\\']').val();
\t\t\t\t\t\t\t\t                              var category_filter_url = '';
\t\t\t\t\t\t\t\t                              if (category_filter) {
\t\t\t\t\t\t\t\t                                  category_filter_url = '&filter_category_id=' + encodeURIComponent(category_filter);
\t\t\t\t\t\t\t\t                              }
\t\t\t\t\t\t\t\t                              \$.ajax({
\t\t\t\t\t\t\t\t                                  url: 'index.php?route=search/autocomplete&filter_name=' +  encodeURIComponent(request.term) + category_filter_url,
\t\t\t\t\t\t\t\t                                  dataType: 'json',
\t\t\t\t\t\t\t\t                                  success: function(json) {
\t\t\t\t\t\t\t\t                                      response(\$.map(json, function(item) {
\t\t\t\t\t\t\t\t                                          return {
\t\t\t\t\t\t\t\t                                              label: item.name,
\t\t\t\t\t\t\t\t                                              value: item.product_id,
\t\t\t\t\t\t\t\t                                              href: item.href,
\t\t\t\t\t\t\t\t                                              thumb: item.thumb,
\t\t\t\t\t\t\t\t                                              desc: item.desc,
\t\t\t\t\t\t\t\t                                              price: item.price
\t\t\t\t\t\t\t\t                                          }
\t\t\t\t\t\t\t\t                                      }));
\t\t\t\t\t\t\t\t                                  }
\t\t\t\t\t\t\t\t                              });
\t\t\t\t\t\t\t\t                          },
\t\t\t\t\t\t\t\t                          select: function(event, ui) {
\t\t\t\t\t\t\t\t                              document.location.href = ui.item.href;
\t\t\t\t\t\t\t\t           
\t\t\t\t\t\t\t\t                              return false;
\t\t\t\t\t\t\t\t                          },
\t\t\t\t\t\t\t\t                          focus: function(event, ui) {
\t\t\t\t\t\t\t\t                              return false;
\t\t\t\t\t\t\t\t                          },
\t\t\t\t\t\t\t\t                          minLength: 2
\t\t\t\t\t\t\t\t                      })
\t\t\t\t\t\t\t\t                      .data( \"ui-autocomplete\" )._renderItem = function( ul, item ) {
\t\t\t\t\t\t\t\t                        return \$( \"<li>\" )
\t\t\t\t\t\t\t\t                          .append( \"<a>\" + item.label + \"</a>\" )
\t\t\t\t\t\t\t\t                          .appendTo( ul );
\t\t\t\t\t\t\t\t                      };
\t\t\t\t\t\t\t\t                  });
\t\t\t\t\t\t\t\t                  </script>
\t\t\t\t\t\t\t\t              ";
            }
            // line 114
            echo " 
\t\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- End megamenu-background -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        }
        // line 126
        echo " 

<!-- HEADER
\t================================================== -->
<header class=\"header-type-24\">
\t<div class=\"background-header\"></div>
\t<div class=\"slider-header\">
\t\t<!-- Top of pages -->
\t\t<div id=\"top\" class=\"";
        // line 134
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_layout"], "method", false, false, false, 134) == 1)) {
            echo " ";
            echo "full-width";
            echo " ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_layout"], "method", false, false, false, 134) == 4)) {
            echo " ";
            echo "fixed3 fixed2";
            echo " ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_layout"], "method", false, false, false, 134) == 3)) {
            echo " ";
            echo "fixed2";
            echo " ";
        } else {
            echo " ";
            echo "fixed";
            echo " ";
        }
        echo "\">
\t\t\t
\t\t\t
\t\t<div class=\"top-bar\">
        <div class=\"container\">
        
         <div class=\"col-sm-3\">
         <ul class=\"social-icon\">
         <li><i class=\"fa fa-facebook\"></i></li>
         <li><i class=\"fa fa-google-plus\"></i></li>
         <li><i class=\"fa fa-twitter\"></i></li>
         <li><i class=\"fa fa-linkedin\"></i></li>
         
         </ul>
         
         </div>
        
         <div class=\"col-sm-9\">
\t\t\t 
\t\t\t
\t\t\t  ";
        // line 154
        $context["top_block"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "top_block"], "method", false, false, false, 154);
        // line 155
        echo "\t\t\t\t\t\t\t ";
        if ((twig_length_filter($this->env, ($context["top_block"] ?? null)) > 0)) {
            echo " 
\t\t\t\t\t\t\t \t";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["top_block"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                echo " 
\t\t\t\t\t\t\t \t\t";
                // line 157
                echo $context["module"];
                echo "
\t\t\t\t\t\t\t \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "\t\t\t\t\t\t\t ";
        }
        echo " 
\t\t\t
\t\t\t 
\t\t\t  
\t\t\t\t\t\t\t     <div class=\"overflow-change-menu\">
\t\t\t\t\t\t\t          
\t\t\t\t\t\t\t          
\t\t\t\t\t\t\t          <!-- Links -->
\t\t\t\t\t\t\t          <ul class=\"menu\">
\t\t\t\t\t\t\t\t     <li>Free Shipping on order over \$85</li>
\t\t\t\t\t\t\t          \t<li><a href=\"";
        // line 169
        echo ($context["account"] ?? null);
        echo "\"><i class=\"fa fa-user\"></i><span>";
        echo ($context["text_account"] ?? null);
        echo "</span></a></li>
\t\t\t\t\t\t\t          \t<li><a href=\"";
        // line 170
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\"><i class=\"fa fa-gift\"></i><span>";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
\t\t\t\t\t\t\t          \t<li><a href=\"";
        // line 171
        echo ($context["shopping_cart"] ?? null);
        echo "\"><i class=\"fa fa-cart-plus\"></i><span>";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
\t\t\t\t\t\t\t          \t<li><a href=\"";
        // line 172
        echo ($context["checkout"] ?? null);
        echo "\"><i class=\"fa fa-check\"></i><span>";
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li>
\t\t\t\t\t\t\t\t\t\t  <li>";
        // line 173
        echo (($context["currency"] ?? null) . ($context["language"] ?? null));
        echo " </li>
\t\t\t\t\t\t\t          </ul>
\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t             
          
        
             </div>
        
        \t          </div>
\t\t\t 
\t\t\t 
\t\t\t
\t\t\t<div class=\"background-top\"></div>
\t\t\t<div class=\"background\">
\t\t\t\t<div class=\"shadow\"></div>
\t\t\t\t<div class=\"pattern\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t     
\t\t\t\t\t\t     <!-- Header Left -->
\t\t\t\t\t\t     <div class=\"col-md-3\" id=\"header-left\">
\t\t\t\t\t\t\t\t ";
        // line 196
        if (($context["logo"] ?? null)) {
            echo " 
\t\t\t\t\t\t          <!-- Logo -->
\t\t\t\t\t\t          <div class=\"logo\"><a href=\"";
            // line 198
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" /></a></div>
\t\t\t\t\t\t\t\t ";
        }
        // line 199
        echo " 
\t\t\t\t\t\t     </div>
\t\t\t\t\t\t     

\t\t\t\t\t\t\t<!-- Header Right -->
\t\t\t\t\t\t\t<div class=\"col-md-6 text-right\" id=\"header-right\">
\t\t\t\t\t\t\t     
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t    
        \t\t
\t\t\t\t\t\t\t     
\t\t\t\t\t\t\t     <div class=\"clear\"></div>
\t\t\t\t\t\t\t     
\t\t\t\t\t\t\t     
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t        ";
        // line 214
        $context["search_cats"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getAllCategories", [], "method", false, false, false, 214);
        // line 215
        echo "\t\t\t\t\t\t\t\t        ";
        $context["category_id"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getCurrentCategory", [], "method", false, false, false, 215);
        // line 216
        echo "\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t          
\t\t\t\t\t\t\t\t          <div class=\"search_form\">     
\t\t\t\t\t\t\t\t               <div class=\"button-search\"></div>

\t\t\t\t\t\t\t\t               <div class=\"search-cat\">
\t\t\t\t\t\t\t\t                   <select name=\"category_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t                     <option value=\"0\">";
        // line 223
        echo (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "all_categories_text", 1 => twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 223)], "method", false, false, false, 223) != "")) ? (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "all_categories_text", 1 => twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 223)], "method", false, false, false, 223)) : ("All categories"));
        echo "</option>
\t\t\t\t\t\t\t\t                     ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["search_cats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            echo " 
\t\t\t\t\t\t\t\t                     ";
            // line 225
            if (((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["category_1"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["category_id"] ?? null) : null) == ($context["category_id"] ?? null))) {
                echo " 
\t\t\t\t\t\t\t\t                     <option value=\"";
                // line 226
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["category_1"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["category_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["category_1"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t                     ";
            } else {
                // line 227
                echo " 
\t\t\t\t\t\t\t\t                     <option value=\"";
                // line 228
                echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["category_1"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["category_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["category_1"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t                     ";
            }
            // line 229
            echo " 
\t\t\t\t\t\t\t\t                     ";
            // line 230
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["category_1"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["children"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                echo " 
\t\t\t\t\t\t\t\t                     ";
                // line 231
                if (((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["category_2"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["category_id"] ?? null) : null) == ($context["category_id"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t\t                     <option value=\"";
                    // line 232
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["category_2"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["category_id"] ?? null) : null);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;";
                    echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["category_2"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["name"] ?? null) : null);
                    echo "</option>
\t\t\t\t\t\t\t\t                     ";
                } else {
                    // line 233
                    echo " 
\t\t\t\t\t\t\t\t                     <option value=\"";
                    // line 234
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["category_2"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["category_id"] ?? null) : null);
                    echo "\">&nbsp;&nbsp;";
                    echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["category_2"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["name"] ?? null) : null);
                    echo "</option>
\t\t\t\t\t\t\t\t                     ";
                }
                // line 235
                echo " 
\t\t\t\t\t\t\t\t                     ";
                // line 236
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["category_2"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["children"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    echo " 
\t\t\t\t\t\t\t\t                     ";
                    // line 237
                    if (((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["category_3"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["category_id"] ?? null) : null) == ($context["category_id"] ?? null))) {
                        echo " 
\t\t\t\t\t\t\t\t                     <option value=\"";
                        // line 238
                        echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["category_3"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["category_id"] ?? null) : null);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["category_3"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["name"] ?? null) : null);
                        echo "</option>
\t\t\t\t\t\t\t\t                     ";
                    } else {
                        // line 239
                        echo " 
\t\t\t\t\t\t\t\t                     <option value=\"";
                        // line 240
                        echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["category_3"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["category_id"] ?? null) : null);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["category_3"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["name"] ?? null) : null);
                        echo "</option>
\t\t\t\t\t\t\t\t                     ";
                    }
                    // line 241
                    echo " 
\t\t\t\t\t\t\t\t                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 242
                echo " 
\t\t\t\t\t\t\t\t                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo " 
\t\t\t\t\t\t\t\t                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo " 
\t\t\t\t\t\t\t\t                   </select>
\t\t\t\t\t\t\t\t               </div>
\t\t\t\t\t\t\t\t               \t\t\t\t\t\t\t         
\t\t\t\t\t\t\t\t              <div class=\"overflow-input\"><input type=\"text\" class=\"input-block-level search-query\" name=\"search\" placeholder=\"";
        // line 248
        echo ($context["text_search"] ?? null);
        echo "\" id=\"search_query\" value=\"\" /></div>
\t\t\t\t\t\t\t\t              
\t\t\t\t\t\t\t\t              ";
        // line 250
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "quick_search_autosuggest"], "method", false, false, false, 250) != "0")) {
            echo " 
\t\t\t\t\t\t\t\t                  <div id=\"autocomplete-results\" class=\"autocomplete-results\"></div>
\t\t\t\t\t\t\t\t           
\t\t\t\t\t\t\t\t                  <script type=\"text/javascript\">
\t\t\t\t\t\t\t\t                  \$(document).ready(function() {
\t\t\t\t\t\t\t\t           
\t\t\t\t\t\t\t\t                      \$('#search_query').autocomplete({
\t\t\t\t\t\t\t\t                          delay: 0,
\t\t\t\t\t\t\t\t                          appendTo: \"#autocomplete-results\",
\t\t\t\t\t\t\t\t                          source: function(request, response) {  
\t\t\t\t\t\t\t\t           
\t\t\t\t\t\t\t\t                              var category_filter = \$('header select[name=\\'category_id\\']').val();
\t\t\t\t\t\t\t\t                              var category_filter_url = '';
\t\t\t\t\t\t\t\t                              if (category_filter) {
\t\t\t\t\t\t\t\t                                  category_filter_url = '&filter_category_id=' + encodeURIComponent(category_filter);
\t\t\t\t\t\t\t\t                              }
\t\t\t\t\t\t\t\t                              \$.ajax({
\t\t\t\t\t\t\t\t                                  url: 'index.php?route=search/autocomplete&filter_name=' +  encodeURIComponent(request.term) + category_filter_url,
\t\t\t\t\t\t\t\t                                  dataType: 'json',
\t\t\t\t\t\t\t\t                                  success: function(json) {
\t\t\t\t\t\t\t\t                                      response(\$.map(json, function(item) {
\t\t\t\t\t\t\t\t                                          return {
\t\t\t\t\t\t\t\t                                              label: item.name,
\t\t\t\t\t\t\t\t                                              value: item.product_id,
\t\t\t\t\t\t\t\t                                              href: item.href,
\t\t\t\t\t\t\t\t                                              thumb: item.thumb,
\t\t\t\t\t\t\t\t                                              desc: item.desc,
\t\t\t\t\t\t\t\t                                              price: item.price
\t\t\t\t\t\t\t\t                                          }
\t\t\t\t\t\t\t\t                                      }));
\t\t\t\t\t\t\t\t                                  }
\t\t\t\t\t\t\t\t                              });
\t\t\t\t\t\t\t\t                          },
\t\t\t\t\t\t\t\t                          select: function(event, ui) {
\t\t\t\t\t\t\t\t                              document.location.href = ui.item.href;
\t\t\t\t\t\t\t\t           
\t\t\t\t\t\t\t\t                              return false;
\t\t\t\t\t\t\t\t                          },
\t\t\t\t\t\t\t\t                          focus: function(event, ui) {
\t\t\t\t\t\t\t\t                              return false;
\t\t\t\t\t\t\t\t                          },
\t\t\t\t\t\t\t\t                          minLength: 2
\t\t\t\t\t\t\t\t                      })
\t\t\t\t\t\t\t\t                      .data( \"ui-autocomplete\" )._renderItem = function( ul, item ) {
\t\t\t\t\t\t\t\t                        return \$( \"<li>\" )
\t\t\t\t\t\t\t\t                          .append( \"<a>\" + item.label + \"</a>\" )
\t\t\t\t\t\t\t\t                          .appendTo( ul );
\t\t\t\t\t\t\t\t                      };
\t\t\t\t\t\t\t\t                  });
\t\t\t\t\t\t\t\t                  </script>
\t\t\t\t\t\t\t\t              ";
        }
        // line 300
        echo " 
\t\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-3 head-right\">
\t\t\t\t\t\t
\t\t\t\t\t\t              <ul>
                                       <li>";
        // line 308
        echo ($context["cart"] ?? null);
        echo " </li>
\t\t\t\t\t\t\t           <li class=\"account\"><a href=\"";
        // line 309
        echo ($context["account"] ?? null);
        echo "\"><i class=\"fa fa-user\"></i><span>Sign In</span></a></li>
                                      
                                       </ul>
\t\t\t\t\t\t\t               </div>

\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row menu\">
\t\t\t\t\t<div class=\"megamenu-background\">
\t\t\t\t\t     <div class=\"\">
\t\t\t\t\t          <div class=\"overflow-megamenu container\">
\t\t\t\t\t\t\t\t<div class=\"row mega-menu-modules\">
\t\t\t\t\t\t\t\t <div class=\"col-md-3\">
\t\t\t\t\t\t\t\t          
\t\t\t\t\t\t\t\t ";
        // line 324
        $context["menu92"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "menu2"], "method", false, false, false, 324);
        // line 325
        echo "\t\t\t\t\t\t\t\t ";
        if ((twig_length_filter($this->env, ($context["menu92"] ?? null)) > 0)) {
            echo " 
\t\t\t\t\t\t\t\t \t";
            // line 326
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu92"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                echo " 
\t\t\t\t\t\t\t\t \t\t";
                // line 327
                echo $context["module"];
                echo "
\t\t\t\t\t\t\t\t \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 329
            echo "\t\t\t\t\t\t\t\t ";
        }
        echo " 
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t     
\t\t\t\t\t\t\t\t     <div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t";
        // line 335
        $context["menu9"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "menu"], "method", false, false, false, 335);
        // line 336
        echo "\t\t\t\t\t\t\t\t";
        if ((twig_length_filter($this->env, ($context["menu9"] ?? null)) > 0)) {
            echo " 
\t\t\t\t\t\t\t\t          <div class=\"megamenu-background\">
\t\t\t\t\t\t\t\t               <div class=\"\">
\t\t\t\t\t\t\t\t                    <div class=\"overflow-megamenu container\">
\t\t\t\t\t\t\t\t     \t\t\t\t
\t\t\t\t\t\t\t\t \t\t\t\t";
            // line 341
            if ((twig_length_filter($this->env, ($context["menu9"] ?? null)) > 1)) {
                echo " ";
                echo "<div class=\"row mega-menu-modules\">";
            }
            // line 342
            echo "\t\t\t\t\t\t\t\t \t\t\t\t";
            $context["i"] = 0;
            // line 343
            echo "\t\t\t\t\t\t\t\t \t\t\t\t 
\t\t\t\t\t\t\t\t \t\t\t\t";
            // line 344
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu9"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                echo " 
\t\t\t\t\t\t\t\t \t\t\t\t ";
                // line 345
                if (((($context["i"] ?? null) == 0) && (twig_length_filter($this->env, ($context["menu9"] ?? null)) > 1))) {
                    echo " ";
                    echo "<div class=\"col-md-3\">";
                }
                // line 346
                echo "\t\t\t\t\t\t\t\t \t\t\t\t ";
                if (((($context["i"] ?? null) == 1) && (twig_length_filter($this->env, ($context["menu9"] ?? null)) > 1))) {
                    echo " ";
                    echo "<div class=\"col-md-9\">";
                }
                // line 347
                echo "\t\t\t\t\t\t\t\t \t\t\t\t\t ";
                echo $context["module"];
                echo "
\t\t\t\t\t\t\t\t \t\t\t\t\t";
                // line 348
                if (((twig_length_filter($this->env, ($context["menu9"] ?? null)) > 1) && ((($context["i"] ?? null) == 0) || (($context["i"] ?? null) == 1)))) {
                    echo " ";
                    echo "</div>";
                }
                // line 349
                echo "\t\t\t\t\t\t\t\t \t\t\t\t\t";
                if (((twig_length_filter($this->env, ($context["menu9"] ?? null)) > 1) && (($context["i"] ?? null) == 1))) {
                    echo " ";
                    echo "</div>";
                }
                // line 350
                echo "\t\t\t\t\t\t\t\t \t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 351
                echo "\t\t\t\t\t\t\t\t \t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
\t\t\t\t\t\t\t\t     \t\t\t</div>
\t\t\t\t\t\t\t\t     \t\t</div>
\t\t\t\t\t\t\t\t     \t</div>
\t\t\t\t\t\t\t\t ";
        } else {
            // line 355
            echo " 
\t\t\t\t\t\t\t\t \t";
            // line 356
            echo ($context["menu"] ?? null);
            echo "
\t\t\t\t\t\t\t\t ";
        }
        // line 357
        echo "\t 
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t
\t\t\t\t\t\t       ";
        // line 363
        if (($context["logged"] ?? null)) {
            echo " 
\t\t\t\t\t\t\t   \t\t<div class=\"my-account-with-logout\">
\t\t\t\t\t\t\t   \t\t\t<a href=\"";
            // line 365
            echo ($context["account"] ?? null);
            echo "\" onclick=\"window.location.href = '";
            echo ($context["account"] ?? null);
            echo "'\" class=\"my-account\" data-hover=\"dropdown\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i></a>
\t\t\t\t\t\t\t   \t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t   \t\t\t\t<li><a href=\"";
            // line 367
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t   \t\t\t\t<li><a href=\"";
            // line 368
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t   \t\t\t</ul>
\t\t\t\t\t\t\t   \t\t</div>
\t\t\t\t\t\t\t   \t";
        } else {
            // line 371
            echo " 
\t\t\t\t\t\t\t   \t\t
\t\t\t\t\t\t\t   \t";
        }
        // line 373
        echo " 
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t</div>\t\t 
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- End megamenu-background -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t";
        // line 391
        $context["slideshow"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "slideshow"], "method", false, false, false, 391);
        echo " 
\t ";
        // line 392
        if ((twig_length_filter($this->env, ($context["slideshow"] ?? null)) > 0)) {
            echo " 
\t<!-- Slider -->
\t<div id=\"slider\" class=\"";
            // line 394
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slideshow_layout"], "method", false, false, false, 394) == 1)) {
                echo " ";
                echo "full-width";
                echo " ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slideshow_layout"], "method", false, false, false, 394) == 4)) {
                echo " ";
                echo "fixed3 fixed2";
                echo " ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slideshow_layout"], "method", false, false, false, 394) == 3)) {
                echo " ";
                echo "fixed2";
                echo " ";
            } else {
                echo " ";
                echo "fixed";
                echo " ";
            }
            echo "\">
\t\t<div class=\"background-slider\"></div>
\t\t<div class=\"background\">
\t\t\t<div class=\"shadow\"></div>
\t\t\t<div class=\"pattern\">
\t\t\t\t";
            // line 399
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slideshow"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                echo " 
\t\t\t\t";
                // line 400
                echo $context["module"];
                echo " 
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 401
            echo " 
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 405
        echo " 
</header>";
    }

    public function getTemplateName()
    {
        return "kiaria/template/common/header/header_01.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  925 => 405,  918 => 401,  910 => 400,  904 => 399,  880 => 394,  875 => 392,  871 => 391,  851 => 373,  846 => 371,  837 => 368,  831 => 367,  824 => 365,  819 => 363,  811 => 357,  806 => 356,  803 => 355,  791 => 351,  788 => 350,  782 => 349,  777 => 348,  772 => 347,  766 => 346,  761 => 345,  755 => 344,  752 => 343,  749 => 342,  744 => 341,  735 => 336,  733 => 335,  723 => 329,  715 => 327,  709 => 326,  704 => 325,  702 => 324,  684 => 309,  680 => 308,  670 => 300,  616 => 250,  611 => 248,  605 => 244,  598 => 243,  591 => 242,  584 => 241,  577 => 240,  574 => 239,  567 => 238,  563 => 237,  557 => 236,  554 => 235,  547 => 234,  544 => 233,  537 => 232,  533 => 231,  527 => 230,  524 => 229,  517 => 228,  514 => 227,  507 => 226,  503 => 225,  497 => 224,  493 => 223,  484 => 216,  481 => 215,  479 => 214,  462 => 199,  451 => 198,  446 => 196,  420 => 173,  414 => 172,  408 => 171,  402 => 170,  396 => 169,  382 => 159,  374 => 157,  368 => 156,  363 => 155,  361 => 154,  322 => 134,  312 => 126,  297 => 114,  243 => 64,  238 => 62,  232 => 58,  225 => 57,  218 => 56,  211 => 55,  204 => 54,  201 => 53,  194 => 52,  190 => 51,  184 => 50,  181 => 49,  174 => 48,  171 => 47,  164 => 46,  160 => 45,  154 => 44,  151 => 43,  144 => 42,  141 => 41,  134 => 40,  130 => 39,  124 => 38,  120 => 37,  111 => 30,  108 => 29,  106 => 28,  98 => 24,  90 => 22,  84 => 21,  79 => 20,  77 => 19,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kiaria/template/common/header/header_01.twig", "C:\\xampp\\htdocs\\onlineshop\\catalog\\view\\theme\\kiaria\\template\\common\\header\\header_01.twig");
    }
}
