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

/* kiaria/template/extension/module/carousel.twig */
class __TwigTemplate_3b3beffa17fe35e31ff6be9206cd87689520bb1757cbfbace3fd22dd9bc46b04 extends \Twig\Template
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
            echo "  ";
            $context["config"] = twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "get", [0 => "config"], "method", false, false, false, 3);
            // line 4
            echo "  ";
            $context["page_direction"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_direction"], "method", false, false, false, 4);
            echo " ";
            $context["language_id"] = twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 4);
            echo " 
  <div class=\"box clearfix box-with-products with-scroll\">
    <!-- Carousel nav -->
    <a class=\"next\" href=\"#our_brands\" id=\"brands_next\"><span></span></a>
    <a class=\"prev\" href=\"#our_brands\" id=\"brands_prev\"><span></span></a>
    
    <div class=\"box-heading\">";
            // line 10
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "our_brands_text", 1 => twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 10)], "method", false, false, false, 10) != "")) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "html_entity_decode", [0 => twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "our_brands_text", 1 => twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 10)], "method", false, false, false, 10)], "method", false, false, false, 10);
                echo " ";
            } else {
                echo " ";
                echo "Our brands";
                echo " ";
            }
            echo "</div>
    <div class=\"clear\"></div>
    <div class=\"box-content products\">     
       <div id=\"our_brands\" class=\"owl-carousel carousel-brands\">
         ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                echo " 
         <div class=\"item text-center\">
           ";
                // line 16
                if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["banner"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["link"] ?? null) : null)) {
                    echo " 
           <a href=\"";
                    // line 17
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["banner"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["link"] ?? null) : null);
                    echo "\"><img src=\"";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["banner"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["image"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["banner"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["title"] ?? null) : null);
                    echo "\" class=\"img-responsive\" /></a>
           ";
                } else {
                    // line 18
                    echo " 
           <img src=\"";
                    // line 19
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["banner"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["image"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["banner"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["title"] ?? null) : null);
                    echo "\" class=\"img-responsive\" />
           ";
                }
                // line 20
                echo " 
         </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo " 
       </div>
       
       <script type=\"text/javascript\"><!--
       
       var ourbrands = \$('#our_brands').owlCarousel({
        items: 6,
        autoPlay: 3000,
        navigation: false,
        ";
            // line 31
            if (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["page_direction"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null) == "RTL")) {
                echo " 
        direction: 'rtl'
        ";
            }
            // line 33
            echo " 
       });
       
       \$(\"#brands_next\").click(function(){
           ourbrands.trigger('owl.next');
           return false;
         });
         
       \$(\"#brands_prev\").click(function(){
           ourbrands.trigger('owl.prev');
           return false;
       });
       --></script>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "kiaria/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 33,  122 => 31,  111 => 22,  103 => 20,  96 => 19,  93 => 18,  84 => 17,  80 => 16,  73 => 14,  58 => 10,  46 => 4,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kiaria/template/extension/module/carousel.twig", "");
    }
}
