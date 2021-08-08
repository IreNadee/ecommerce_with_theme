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

/* kiaria/template/extension/module/featured.twig */
class __TwigTemplate_44b9bf7c546b9056ad74d74b4cf7a09132d30fc4a1297d093ca7ea2412587f05 extends \Twig\Template
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
            $context["class"] = 3;
            echo " 
  ";
            // line 3
            $context["id"] = (twig_random($this->env, 5000) * twig_random($this->env, 50000));
            // line 4
            echo "  ";
            $context["all"] = 4;
            echo " 
  ";
            // line 5
            $context["row"] = 4;
            echo " 

  ";
            // line 7
            $context["theme_options"] = twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "get", [0 => "theme_options"], "method", false, false, false, 7);
            // line 8
            echo "  ";
            $context["config"] = twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "get", [0 => "config"], "method", false, false, false, 8);
            // line 9
            echo "  ";
            $context["page_direction"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_direction"], "method", false, false, false, 9);
            echo " ";
            $context["language_id"] = twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 9);
            // line 10
            echo "
  ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_per_pow"], "method", false, false, false, 11) == 6)) {
                echo " ";
                $context["class"] = 2;
                echo " ";
            }
            // line 12
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_per_pow"], "method", false, false, false, 12) == 5)) {
                echo " ";
                $context["class"] = 25;
                echo " ";
            }
            // line 13
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_per_pow"], "method", false, false, false, 13) == 3)) {
                echo " ";
                $context["class"] = 4;
                echo " ";
            }
            // line 14
            echo "
  ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_per_pow"], "method", false, false, false, 15) > 1)) {
                echo " ";
                $context["row"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_per_pow"], "method", false, false, false, 15);
                echo " ";
                $context["all"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_per_pow"], "method", false, false, false, 15);
                echo " ";
            }
            echo " 

  <div class=\"box clearfix box-with-products ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_scroll_featured"], "method", false, false, false, 17) != "0")) {
                echo " ";
                echo "with-scroll";
                echo " ";
            }
            echo " box-no-advanced\">
    ";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_scroll_featured"], "method", false, false, false, 18) != "0")) {
                echo " 
    <!-- Carousel nav -->
    <a class=\"next\" href=\"#myCarousel";
                // line 20
                echo ($context["id"] ?? null);
                echo "\" id=\"myCarousel";
                echo ($context["id"] ?? null);
                echo "_next\"><span></span></a>
    <a class=\"prev\" href=\"#myCarousel";
                // line 21
                echo ($context["id"] ?? null);
                echo "\" id=\"myCarousel";
                echo ($context["id"] ?? null);
                echo "_prev\"><span></span></a>
    ";
            }
            // line 22
            echo " 
    
    <div class=\"box-heading\">";
            // line 24
            echo ($context["heading_title"] ?? null);
            echo "</div>
    <div class=\"strip-line\"></div>
    <div class=\"clear\"></div>
    <div class=\"box-content products\">
      <div class=\"box-product\">
        <div id=\"myCarousel";
            // line 29
            echo ($context["id"] ?? null);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_scroll_featured"], "method", false, false, false, 29) != "0")) {
                echo "class=\"carousel slide\"";
            }
            echo ">
          <!-- Carousel items -->
          <div class=\"carousel-inner\">
            ";
            // line 32
            $context["i"] = 0;
            echo " ";
            $context["row_fluid"] = 0;
            echo " ";
            $context["item"] = 0;
            echo " 
              ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " ";
                $context["row_fluid"] = (($context["row_fluid"] ?? null) + 1);
                echo " 
                ";
                // line 34
                if ((($context["i"] ?? null) == 0)) {
                    echo " ";
                    $context["item"] = (($context["item"] ?? null) + 1);
                    echo " ";
                    echo "<div class=\"active item\"><div class=\"product-grid\"><div class=\"row\">";
                    echo " ";
                }
                echo " 
                ";
                // line 35
                $context["r"] = (($context["row_fluid"] ?? null) - (twig_round((($context["row_fluid"] ?? null) / ($context["row"] ?? null)), 0, "floor") * ($context["all"] ?? null)));
                echo " 

                ";
                // line 37
                if (((($context["row_fluid"] ?? null) > ($context["all"] ?? null)) && (($context["r"] ?? null) == 1))) {
                    echo " 
                  ";
                    // line 38
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_scroll_featured"], "method", false, false, false, 38) != "0")) {
                        echo " 
                      ";
                        // line 39
                        echo "</div></div></div><div class=\"item\"><div class=\"product-grid\"><div class=\"row\">";
                        echo " ";
                        $context["item"] = (($context["item"] ?? null) + 1);
                        echo " 
                  ";
                    } else {
                        // line 40
                        echo " 
                    ";
                        // line 41
                        echo "</div><div class=\"row\">";
                        echo " 
                  ";
                    }
                    // line 42
                    echo " 
                ";
                } else {
                    // line 43
                    echo " 
                  ";
                    // line 44
                    $context["r"] = (($context["row_fluid"] ?? null) - (twig_round((($context["row_fluid"] ?? null) / ($context["row"] ?? null)), 0, "floor") * ($context["row"] ?? null)));
                    echo " 
                  ";
                    // line 45
                    if (((($context["row_fluid"] ?? null) > ($context["row"] ?? null)) && (($context["r"] ?? null) == 1))) {
                        echo " 
                    ";
                        // line 46
                        echo "</div><div class=\"row\">";
                        echo " 
                  ";
                    }
                    // line 47
                    echo " 
                ";
                }
                // line 48
                echo " 

                <div class=\"col-sm-";
                // line 50
                echo ($context["class"] ?? null);
                echo " col-xs-6 ";
                if ((($context["class"] ?? null) == 2)) {
                    echo " ";
                    echo "col-md-25 col-lg-2 col-sm-3 ";
                    echo " ";
                }
                echo " ";
                if (((($context["class"] ?? null) == 2) && (($context["r"] ?? null) == 0))) {
                    echo " ";
                    echo "hidden-md hidden-sm";
                    echo " ";
                }
                echo " ";
                if (((($context["class"] ?? null) == 2) && (($context["r"] ?? null) == 5))) {
                    echo " ";
                    echo "hidden-sm";
                    echo " ";
                }
                echo " ";
                if ((($context["class"] ?? null) == 25)) {
                    echo " ";
                    echo "col-md-25 col-lg-25 col-sm-3 ";
                    echo " ";
                }
                echo " ";
                if (((($context["class"] ?? null) == 25) && (($context["r"] ?? null) == 0))) {
                    echo " ";
                    echo "hidden-sm";
                    echo " ";
                }
                echo "\">
                  ";
                // line 51
                $this->loadTemplate("kiaria/template/new_elements/product.twig", "kiaria/template/extension/module/featured.twig", 51)->display($context);
                // line 52
                echo "                </div>
              ";
                // line 53
                $context["i"] = (($context["i"] ?? null) + 1);
                echo " 
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo " 
            ";
            // line 55
            if ((($context["i"] ?? null) > 0)) {
                echo " ";
                echo "</div></div></div>";
                echo " ";
            }
            echo " 
          </div>
      </div>
      </div>
    </div>
  </div>

  ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_scroll_featured"], "method", false, false, false, 62) != "0")) {
                echo " 
  <script type=\"text/javascript\">
  \$(document).ready(function() {
    var owl";
                // line 65
                echo ($context["id"] ?? null);
                echo " = \$(\".box #myCarousel";
                echo ($context["id"] ?? null);
                echo " .carousel-inner\");
    
    \$(\"#myCarousel";
                // line 67
                echo ($context["id"] ?? null);
                echo "_next\").click(function(){
        owl";
                // line 68
                echo ($context["id"] ?? null);
                echo ".trigger('owl.next');
        return false;
      })
    \$(\"#myCarousel";
                // line 71
                echo ($context["id"] ?? null);
                echo "_prev\").click(function(){
        owl";
                // line 72
                echo ($context["id"] ?? null);
                echo ".trigger('owl.prev');
        return false;
    });
      
    owl";
                // line 76
                echo ($context["id"] ?? null);
                echo ".owlCarousel({
        slideSpeed : 500,
        singleItem:true,
        ";
                // line 79
                if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["page_direction"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["language_id"] ?? null)] ?? null) : null) == "RTL")) {
                    echo " 
        direction: 'rtl'
        ";
                }
                // line 81
                echo " 
     });
  });
  </script>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "kiaria/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 81,  359 => 79,  353 => 76,  346 => 72,  342 => 71,  336 => 68,  332 => 67,  325 => 65,  319 => 62,  305 => 55,  302 => 54,  286 => 53,  283 => 52,  281 => 51,  247 => 50,  243 => 48,  239 => 47,  234 => 46,  230 => 45,  226 => 44,  223 => 43,  219 => 42,  214 => 41,  211 => 40,  204 => 39,  200 => 38,  196 => 37,  191 => 35,  181 => 34,  160 => 33,  152 => 32,  142 => 29,  134 => 24,  130 => 22,  123 => 21,  117 => 20,  112 => 18,  104 => 17,  93 => 15,  90 => 14,  83 => 13,  76 => 12,  70 => 11,  67 => 10,  62 => 9,  59 => 8,  57 => 7,  52 => 5,  47 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kiaria/template/extension/module/featured.twig", "");
    }
}
