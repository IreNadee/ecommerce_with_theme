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

/* kiaria/css/custom_colors.twig */
class __TwigTemplate_ae465c7f6d21c7ede7b00e27aea80876b8fa25d6d59e1820fabf5316a547030e extends \Twig\Template
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
        if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "font_status"], "method", false, false, false, 1) == "1") || (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "colors_status"], "method", false, false, false, 1) == "1"))) {
            echo " 
<style type=\"text/css\">
\t";
            // line 3
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "colors_status"], "method", false, false, false, 3) == "1")) {
                echo " 
\t\t";
                // line 4
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font_text"], "method", false, false, false, 4) != "")) {
                    echo " 
\t\tbody,
\t\t.product-filter .list-options select,
\t\t.blog-article .post .box .box-heading {
\t\t\tcolor: ";
                    // line 8
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font_text"], "method", false, false, false, 8);
                    echo ";
\t\t}
\t\t";
                }
                // line 10
                echo " 
\t\t
\t\t";
                // line 12
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font_links"], "method", false, false, false, 12) != "")) {
                    echo " 
\t\ta {
\t\t\tcolor: ";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font_links"], "method", false, false, false, 14);
                    echo ";
\t\t}
\t\t";
                }
                // line 16
                echo " 
\t\t
\t\t";
                // line 18
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font_links_hover"], "method", false, false, false, 18) != "")) {
                    echo " 
\t\ta:hover,
\t\tdiv.pagination-results ul li.active {
\t\t\tcolor: ";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font_links_hover"], "method", false, false, false, 21);
                    echo ";
\t\t}
\t\t
\t\t     ";
                    // line 24
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font_links_hover"], "method", false, false, false, 24) == "#fff")) {
                        echo " 
\t\t     div.pagination-results ul li.active {
\t\t          color: #c30a0a;
\t\t     }
\t\t     ";
                    }
                    // line 28
                    echo " 
\t\t     
\t\t     .product-info .radio-type-button span:hover,
\t\t     .product-info .radio-type-button span.active,
\t\t     .product-info .radio-type-button2 span:hover,
\t\t     .product-info .radio-type-button2 span.active,
\t\t     #main .mfilter-image ul li.mfilter-image-checked {
\t\t          border-color: ";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font_links_hover"], "method", false, false, false, 35);
                    echo ";
\t\t     }
\t\t     
\t\t     .product-info .radio-type-button2 span.active {
\t\t          background: ";
                    // line 39
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font_links_hover"], "method", false, false, false, 39);
                    echo ";
\t\t     }
\t\t";
                }
                // line 41
                echo " 
\t\t
\t\t";
                // line 43
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_price_text"], "method", false, false, false, 43) != "")) {
                    echo " 
\t\t.compare-info .price-new, 
\t\t.product-grid .product .price, 
\t\t.product-list .actions > div .price,
\t\t.product-info .price .price-new,
\t\tul.megamenu li .product .price,
\t\t.mini-cart-total td:last-child,
\t\t.cart-total table tr td:last-child,
\t\t.mini-cart-info td.total,
\t\t.advanced-grid-products .product .right .price,
\t\t.product-list .name-actions > .price,
\t\t.today-deals-products .product .price,
\t\t.medic-last-in-stock .price,
\t\t.architecture-products .product .right .price,
\t\t.matrialarts-products .matrial-product .right .price,
\t\t.today-deals-toys2-products .price,
\t\t.today-deals-petshop2-products .price,
\t\t.today-deals-shoes3-products .price,
\t\t.today-deals-computer8-products .price,
\t\t.today-deals-computer6-products .price,
\t\t.holidays-products .product .right .price,
\t\t.today-deals-computer6-products .countdown-section {
\t\t\tcolor: ";
                    // line 65
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_price_text"], "method", false, false, false, 65);
                    echo ";
\t\t}
\t\t";
                }
                // line 67
                echo " 
\t\t
\t\t";
                // line 69
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_price_old_text"], "method", false, false, false, 69) != "")) {
                    echo " 
\t\t.product-list .name-actions > .price .price-old,
\t\t.product-grid .product .price .price-old,
\t\t.today-deals-products .product .price .price-old,
\t\t.architecture-products .product .right .price .price-old,
\t\t.today-deals-toys2-products .price .price-old,
\t\t.today-deals-petshop2-products .price .price-old,
\t\t.today-deals-shoes3-products .price .price-old,
\t\t.today-deals-computer8-products .price .price-old,
\t\t.today-deals-computer6-products .price .price-old {
\t\t\tcolor: ";
                    // line 79
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_price_old_text"], "method", false, false, false, 79);
                    echo ";
\t\t}
\t\t";
                }
                // line 81
                echo " 
\t\t
\t\t";
                // line 83
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_price_old_text_on_product_page"], "method", false, false, false, 83) != "")) {
                    echo " 
\t\t.product-info .price .price-old {
\t\t\tcolor: ";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_price_old_text_on_product_page"], "method", false, false, false, 85);
                    echo ";
\t\t}
\t\t";
                }
                // line 87
                echo " 
\t\t
\t\t";
                // line 89
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background_color"], "method", false, false, false, 89) != "")) {
                    echo " 
\t\tbody,
\t\t.standard-body .full-width #mfilter-content-container > span:before {
\t\t\tbackground: ";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background_color"], "method", false, false, false, 92);
                    echo ";
\t\t}
\t\t";
                }
                // line 94
                echo " 
\t\t
\t\t";
                // line 96
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_hover_border_color"], "method", false, false, false, 96) != "")) {
                    echo " 
\t\t.product-grid .product:hover:before,
\t\t.product-list > div:hover {
\t\t\tborder-color: ";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_hover_border_color"], "method", false, false, false, 99);
                    echo ";
\t\t}
\t\t";
                }
                // line 101
                echo " 
\t\t
\t\t";
                // line 103
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "products_buttons_background_color"], "method", false, false, false, 103) != "")) {
                    echo " 
\t\t.product-grid .product .only-hover ul li a,
\t\t.architecture-products .product .right .only-hover ul li a,
\t\t.product-list .name-actions ul li a,
\t\t.today-deals-toys2-products .only-hover ul li a,
\t\t.today-deals-petshop2-products .only-hover ul li a,
\t\t.flower-product .right ul li a {
\t\t\tbackground-color: ";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "products_buttons_background_color"], "method", false, false, false, 110);
                    echo ";
\t\t}
\t\t";
                }
                // line 112
                echo " 
\t\t
\t\t";
                // line 114
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "products_buttons_border_color"], "method", false, false, false, 114) != "")) {
                    echo " 
\t\t.product-grid .product .only-hover ul li a,
\t\t.architecture-products .product .right .only-hover ul li a,
\t\t.product-list .name-actions ul li a,
\t\t.today-deals-toys2-products .only-hover ul li a,
\t\t.today-deals-petshop2-products .only-hover ul li a,
\t\t.flower-product .right ul li a {
\t\t\tborder-color: ";
                    // line 121
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "products_buttons_border_color"], "method", false, false, false, 121);
                    echo ";
\t\t}
\t\t";
                }
                // line 123
                echo " 
\t\t
\t\t";
                // line 125
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "products_buttons_icon_color"], "method", false, false, false, 125) != "")) {
                    echo " 
\t\t.product-grid .product .only-hover ul li a,
\t\t.architecture-products .product .right .only-hover ul li a,
\t\t.product-list .name-actions ul li a,
\t\t.today-deals-toys2-products .only-hover ul li a,
\t\t.today-deals-petshop2-products .only-hover ul li a,
\t\t.flower-product .right ul li a {
\t\t\tcolor: ";
                    // line 132
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "products_buttons_icon_color"], "method", false, false, false, 132);
                    echo ";
\t\t}
\t\t";
                }
                // line 134
                echo " 
\t\t
\t\t";
                // line 136
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "products_buttons_hover_background_color"], "method", false, false, false, 136) != "")) {
                    echo " 
\t\t.product-grid .product .only-hover ul li a:hover,
\t\t.architecture-products .product .right .only-hover ul li a:hover,
\t\t.product-list .name-actions ul li a:hover,
\t\t.today-deals-toys2-products .only-hover ul li a:hover,
\t\t.today-deals-petshop2-products .only-hover ul li a:hover,
\t\t.flower-product .right ul li a:hover {
\t\t\tbackground-color: ";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "products_buttons_hover_background_color"], "method", false, false, false, 143);
                    echo ";
\t\t}
\t\t";
                }
                // line 145
                echo " 
\t\t
\t\t";
                // line 147
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "products_buttons_hover_border_color"], "method", false, false, false, 147) != "")) {
                    echo " 
\t\t.product-grid .product .only-hover ul li a:hover,
\t\t.architecture-products .product .right .only-hover ul li a:hover,
\t\t.product-list .name-actions ul li a:hover,
\t\t.today-deals-toys2-products .only-hover ul li a:hover,
\t\t.today-deals-petshop2-products .only-hover ul li a:hover,
\t\t.flower-product .right ul li a:hover {
\t\t\tborder-color: ";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "products_buttons_hover_border_color"], "method", false, false, false, 154);
                    echo ";
\t\t}
\t\t";
                }
                // line 156
                echo " 
\t\t
\t\t";
                // line 158
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "products_buttons_hover_icon_color"], "method", false, false, false, 158) != "")) {
                    echo " 
\t\t.product-grid .product .only-hover ul li a:hover,
\t\t.architecture-products .product .right .only-hover ul li a:hover,
\t\t.product-list .name-actions ul li a:hover,
\t\t.today-deals-toys2-products .only-hover ul li a:hover,
\t\t.today-deals-petshop2-products .only-hover ul li a:hover,
\t\t.flower-product .right ul li a:hover {
\t\t\tcolor: ";
                    // line 165
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "products_buttons_hover_icon_color"], "method", false, false, false, 165);
                    echo ";
\t\t}
\t\t";
                }
                // line 167
                echo " 
\t\t
\t\t";
                // line 169
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "dropdown_background_color"], "method", false, false, false, 169) != "")) {
                    echo " 
\t\t.dropdown-menu,
\t\t.ui-autocomplete {
\t\t\tbackground: ";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "dropdown_background_color"], "method", false, false, false, 172);
                    echo " !important;
\t\t}
\t\t
\t\t.dropdown-menu:after,
\t\t.ui-autocomplete:after {
\t\t     border-bottom-color: ";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "dropdown_background_color"], "method", false, false, false, 177);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 179
                echo " 
\t\t
\t\t";
                // line 181
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "dropdown_text_color"], "method", false, false, false, 181) != "")) {
                    echo " 
\t\t.dropdown-menu {
\t\t\tcolor: ";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "dropdown_text_color"], "method", false, false, false, 183);
                    echo ";
\t\t}
\t\t";
                }
                // line 185
                echo " 
\t\t
\t\t";
                // line 187
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "dropdown_links_color"], "method", false, false, false, 187) != "")) {
                    echo " 
\t\t.dropdown-menu li a,
\t\t.dropdown-menu .mini-cart-info a,
\t\t.ui-autocomplete li a {
\t\t\tcolor: ";
                    // line 191
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "dropdown_links_color"], "method", false, false, false, 191);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 193
                echo " 
\t\t
\t\t";
                // line 195
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "dropdown_links_hover_color"], "method", false, false, false, 195) != "")) {
                    echo " 
\t\t.dropdown-menu li a:hover,
\t\t.dropdown-menu .mini-cart-info a:hover,
\t\t.ui-autocomplete li a:hover,
\t\t.ui-autocomplete li a.ui-state-focus {
\t\t\tcolor: ";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "dropdown_links_hover_color"], "method", false, false, false, 200);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 202
                echo " 
\t\t
\t\t";
                // line 204
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "inputs_background_color"], "method", false, false, false, 204) != "")) {
                    echo " 
\t\ttextarea, 
\t\tinput[type=\"text\"], 
\t\tinput[type=\"password\"], 
\t\tinput[type=\"datetime\"], 
\t\tinput[type=\"datetime-local\"], 
\t\tinput[type=\"date\"], 
\t\tinput[type=\"month\"], 
\t\tinput[type=\"time\"], 
\t\tinput[type=\"week\"], 
\t\tinput[type=\"number\"], 
\t\tinput[type=\"email\"], 
\t\tinput[type=\"url\"], 
\t\tinput[type=\"search\"], 
\t\tinput[type=\"tel\"], 
\t\tinput[type=\"color\"], 
\t\t.uneditable-input {
\t\t\tbackground: ";
                    // line 221
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "inputs_background_color"], "method", false, false, false, 221);
                    echo ";
\t\t}
\t\t";
                }
                // line 223
                echo " 
\t\t
\t\t";
                // line 225
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "inputs_background_focus_color"], "method", false, false, false, 225) != "")) {
                    echo " 
\t\ttextarea:focus,
\t\tinput[type=\"text\"]:focus,
\t\tinput[type=\"password\"]:focus,
\t\tinput[type=\"datetime\"]:focus,
\t\tinput[type=\"datetime-local\"]:focus,
\t\tinput[type=\"date\"]:focus,
\t\tinput[type=\"month\"]:focus,
\t\tinput[type=\"time\"]:focus,
\t\tinput[type=\"week\"]:focus,
\t\tinput[type=\"number\"]:focus,
\t\tinput[type=\"email\"]:focus,
\t\tinput[type=\"url\"]:focus,
\t\tinput[type=\"search\"]:focus,
\t\tinput[type=\"tel\"]:focus,
\t\tinput[type=\"color\"]:focus,
\t\t.uneditable-input:focus {
\t\t\tbackground: ";
                    // line 242
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "inputs_background_focus_color"], "method", false, false, false, 242);
                    echo ";
\t\t}
\t\t";
                }
                // line 244
                echo " 
\t\t
\t\t";
                // line 246
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "inputs_border_color"], "method", false, false, false, 246) != "")) {
                    echo " 
\t\ttextarea, 
\t\tinput[type=\"text\"], 
\t\tinput[type=\"password\"], 
\t\tinput[type=\"datetime\"], 
\t\tinput[type=\"datetime-local\"], 
\t\tinput[type=\"date\"], 
\t\tinput[type=\"month\"], 
\t\tinput[type=\"time\"], 
\t\tinput[type=\"week\"], 
\t\tinput[type=\"number\"], 
\t\tinput[type=\"email\"], 
\t\tinput[type=\"url\"], 
\t\tinput[type=\"search\"], 
\t\tinput[type=\"tel\"], 
\t\tinput[type=\"color\"], 
\t\t.uneditable-input {
\t\t\tborder: 1px solid ";
                    // line 263
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "inputs_border_color"], "method", false, false, false, 263);
                    echo ";
\t\t}
\t\t";
                }
                // line 265
                echo " 
\t\t
\t\t";
                // line 267
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "inputs_border_focus_color"], "method", false, false, false, 267) != "")) {
                    echo " 
\t\ttextarea:focus,
\t\tinput[type=\"text\"]:focus,
\t\tinput[type=\"password\"]:focus,
\t\tinput[type=\"datetime\"]:focus,
\t\tinput[type=\"datetime-local\"]:focus,
\t\tinput[type=\"date\"]:focus,
\t\tinput[type=\"month\"]:focus,
\t\tinput[type=\"time\"]:focus,
\t\tinput[type=\"week\"]:focus,
\t\tinput[type=\"number\"]:focus,
\t\tinput[type=\"email\"]:focus,
\t\tinput[type=\"url\"]:focus,
\t\tinput[type=\"search\"]:focus,
\t\tinput[type=\"tel\"]:focus,
\t\tinput[type=\"color\"]:focus,
\t\t.uneditable-input:focus {
\t\t\tborder: 1px solid ";
                    // line 284
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "inputs_border_focus_color"], "method", false, false, false, 284);
                    echo ";
\t\t}
\t\t";
                }
                // line 286
                echo " 
\t\t
\t\t";
                // line 288
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "inputs_text_color"], "method", false, false, false, 288) != "")) {
                    echo " 
\t\ttextarea, 
\t\tinput[type=\"text\"], 
\t\tinput[type=\"password\"], 
\t\tinput[type=\"datetime\"], 
\t\tinput[type=\"datetime-local\"], 
\t\tinput[type=\"date\"], 
\t\tinput[type=\"month\"], 
\t\tinput[type=\"time\"], 
\t\tinput[type=\"week\"], 
\t\tinput[type=\"number\"], 
\t\tinput[type=\"email\"], 
\t\tinput[type=\"url\"], 
\t\tinput[type=\"search\"], 
\t\tinput[type=\"tel\"], 
\t\tinput[type=\"color\"], 
\t\t.uneditable-input {
\t\t\tcolor: ";
                    // line 305
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "inputs_text_color"], "method", false, false, false, 305);
                    echo ";
\t\t}
\t\t
\t\t.mfilter-price-inputs input {
\t\t     color: ";
                    // line 309
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "inputs_text_color"], "method", false, false, false, 309);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 311
                echo " 
\t\t
\t\t";
                // line 313
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "selects_background_color"], "method", false, false, false, 313) != "")) {
                    echo " 
\t\tselect {
\t\t\tbackground: ";
                    // line 315
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "selects_background_color"], "method", false, false, false, 315);
                    echo ";
\t\t}
\t\t";
                }
                // line 317
                echo " 
\t\t
\t\t";
                // line 319
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "selects_border_color"], "method", false, false, false, 319) != "")) {
                    echo " 
\t\tselect {
\t\t\tborder-color: ";
                    // line 321
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "selects_border_color"], "method", false, false, false, 321);
                    echo ";
\t\t}
\t\t";
                }
                // line 323
                echo " 
\t\t
\t\t";
                // line 325
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "selects_text_color"], "method", false, false, false, 325) != "")) {
                    echo " 
\t\tselect {
\t\t\tcolor: ";
                    // line 327
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "selects_text_color"], "method", false, false, false, 327);
                    echo ";
\t\t}
\t\t";
                }
                // line 329
                echo " 
\t\t
\t\t";
                // line 331
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "selects_arrow_color"], "method", false, false, false, 331) != "")) {
                    echo " 
\t\t.select:after,
\t\t.product-filter .list-options .sort:after,
\t\t.product-filter .list-options .limit:after {
\t\t\tcolor: ";
                    // line 335
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "selects_arrow_color"], "method", false, false, false, 335);
                    echo ";
\t\t}
\t\t";
                }
                // line 337
                echo " 
\t\t
\t\t";
                // line 339
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_background_color"], "method", false, false, false, 339) != "")) {
                    echo " 
\t\t.box .box-content.products,
\t\t.product-grid .product-hover .only-hover {
\t\t\tbackground: ";
                    // line 342
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_background_color"], "method", false, false, false, 342);
                    echo ";
\t\t}
\t\t
\t\t.product-grid .product:before {
\t\t     border-color: ";
                    // line 346
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_background_color"], "method", false, false, false, 346);
                    echo ";
\t\t}
\t\t";
                }
                // line 348
                echo " 
\t\t
\t\t";
                // line 350
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_background_color"], "method", false, false, false, 350) != "")) {
                    echo " 
\t\t.product-filter,
\t\t.product-list,
\t\t.center-column .product-grid,
\t\t.standard-body .full-width .center-column.content-with-background:before,
\t\t.manufacturer-heading,
\t\t.manufacturer-content,
\t\t.center-column .tab-content,
\t\t.body-other .standard-body .full-width .product-info:before,
\t\t.product-info .cart,
\t\t.box .box-content.products,
\t\t.product-grid .product-hover .only-hover,
\t\thtml .mfp-iframe-scaler iframe,
\t\t.quickview body,
\t\ttable.attribute tr, table.list tr, .wishlist-product table tr, .wishlist-info table tr, .compare-info tr, .checkout-product table tr, .table tr, .table,
\t\t.spinner,
\t\timg[src=\"image/catalog/blank.gif\"],
\t\t#mfilter-content-container > span:before,
\t\t.cart-info table tr,
\t\t.center-column .panel-heading,
\t\t.center-column .panel-body,
\t\t.popup,
\t\t.product-block,
\t\t.review-list .text,
\t\t.modal-content,
\t\t.product-info .product-image,
\t\t.product-page-type-2 .standard-body .full-width .overflow-thumbnails-carousel,
\t\t.product-page-type-2 .standard-body .full-width .product-info .product-center:before,
\t\t.main-fixed3 .main-content .background,
\t\t.product-grid-type-2 .product-grid .product:hover:before,
\t\t.product-grid-type-3 .product-grid .product:hover:before,
\t\t.product-grid-type-5 .product-grid .product:hover:before,
\t\t.tab-content,
\t\t.news.v2  .media-body .bottom {
\t\t\tbackground-color: ";
                    // line 384
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_background_color"], "method", false, false, false, 384);
                    echo " !important;
\t\t}
\t\t
\t\t.review-list .text:after,
\t\t#main .post .comments-list .text:after {
\t\t     border-bottom-color: ";
                    // line 389
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_background_color"], "method", false, false, false, 389);
                    echo ";
\t\t}
\t\t
\t\t.product-grid .product:before {
\t\t     border-color: ";
                    // line 393
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_background_color"], "method", false, false, false, 393);
                    echo ";
\t\t}
\t\t
\t\t     ";
                    // line 396
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_background_color"], "method", false, false, false, 396) == "none")) {
                        echo " 
\t\t     .product-filter,
\t\t     .product-list,
\t\t     .center-column .product-grid,
\t\t     .standard-body .full-width .center-column.content-with-background:before,
\t\t     .manufacturer-heading,
\t\t     .manufacturer-content,
\t\t     .center-column .tab-content,
\t\t     .body-other .standard-body .full-width .product-info:before,
\t\t     .product-info .cart,
\t\t     .box .box-content.products,
\t\t     .product-grid .product-hover .only-hover,
\t\t     table.attribute tr, table.list tr, .wishlist-product table tr, .wishlist-info table tr, .compare-info tr, .checkout-product table tr, .table tr, .table,
\t\t     .cart-info table tr,
\t\t     .center-column .panel-heading,
\t\t     .center-column .panel-body,
\t\t     .product-block,
\t\t     .review-list .text,
\t\t     .product-info .product-image,
\t\t     .product-page-type-2 .standard-body .full-width .overflow-thumbnails-carousel,
\t\t     .product-page-type-2 .standard-body .full-width .product-info .product-center:before,
\t\t     .main-fixed3 .main-content .background,
\t\t     .product-grid-type-2 .product-grid .product:hover:before,
\t\t     .product-grid-type-3 .product-grid .product:hover:before,
\t\t     .product-grid-type-5 .product-grid .product:hover:before,
\t\t     .tab-content {
\t\t     \tbackground: none !important;
\t\t     }
\t\t     
\t\t     img[src=\"image/catalog/blank.gif\"],
\t\t     #mfilter-content-container > span:before,
\t\t     .popup,
\t\t     .spinner,
\t\t     html .mfp-iframe-scaler iframe,
\t\t     .quickview body,
\t\t     .modal-content,
\t\t     .news.v2  .media-body .bottom {
\t\t          background-color: ";
                        // line 433
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background_color"], "method", false, false, false, 433);
                        echo " !important;
\t\t     }
\t\t     
\t\t     .review-list .text:after,
\t\t     #main .post .comments-list .text:after {
\t\t          border-bottom-color: transparent;
\t\t     }
\t\t     
\t\t     .product-grid .product:before {
\t\t          border-color: transparent;
\t\t     }
\t\t     ";
                    }
                    // line 444
                    echo " 
\t\t";
                }
                // line 445
                echo " 
\t\t
\t\t";
                // line 447
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_border_color"], "method", false, false, false, 447) != "")) {
                    echo " 
\t\ttable.attribute,
\t\ttable.list,
\t\t.wishlist-product table,
\t\t.wishlist-info table,
\t\t.compare-info,
\t\t.cart-info table,
\t\t.checkout-product table,
\t\t.table,
\t\ttable.attribute td,
\t\ttable.list td,
\t\t.wishlist-product table td,
\t\t.wishlist-info table td,
\t\t.compare-info td,
\t\t.cart-info table td,
\t\t.checkout-product table td,
\t\t.table td ,
\t\t.manufacturer-list,
\t\t.manufacturer-heading,
\t\t.center-column .panel-body,
\t\t.review-list .text,
\t\t.product-info .cart,
\t\t.product-info .cart .links,
\t\t.product-info .cart .links a:last-child,
\t\t.product-info .cart .minimum,
\t\t.product-info .review,
\t\t.border-width-1 .standard-body .full-width .col-md-12 .col-md-12.center-column .cart-info thead td:first-child:before,
\t\t.cart-info table thead td,
\t\t#main .center-column .panel-heading,
\t\t.main-fixed .center-column .panel:last-child, .standard-body .full-width .center-column .panel:last-child, .standard-body .fixed .center-column .panel:last-child,
\t\t.center-column .panel-body,
\t\t.body-white.checkout-checkout .standard-body .full-width .center-column .panel:last-child,
\t\t.manufacturer-content,
\t\t.product-block,
\t\t.modal-header,
\t\t.product-info .thumbnails li img, .product-info .thumbnails-carousel img,
\t\t.product-info .product-image,
\t\t.box-type-15 .col-sm-12 .box.box-with-products .box-content,
\t\t.box-type-15 .col-md-12 .box.box-with-products .box-content,
\t\t.box-type-15 .col-sm-12 .filter-product .tab-content,
\t\t.box-type-15 .col-md-12 .filter-product .tab-content,
\t\t.body-white.module-faq .standard-body #main .full-width .center-column .faq-section:last-child .panel:last-child,
\t\t.product-info .radio-type-button2 span,
\t\t.product-info .radio-type-button span,
\t\t#main .mfilter-image ul li,
\t\t.news.v2  .media-body .bottom,
\t\t.news.v2 .media-body .date-published,
\t\t#main .post .comments-list .text,
\t\t#main .posts .post .post-content,
\t\t#main .post .date-published,
\t\t#main .post .meta,
\t\t#main .post .post-content,
\t\t.category-wall ul li a,
\t\t.more-link,
\t\t.body-white-type-2.checkout-cart .main-fixed .center-column > form > *:first-child,
\t\t#main .quickcheckout-content,
\t\t#main .quickcheckout-cart thead td,
\t\t#main .quickcheckout-cart tbody td,
\t\t#main table.quickcheckout-cart {
\t\t\tborder-color: ";
                    // line 506
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_border_color"], "method", false, false, false, 506);
                    echo ";
\t\t}
\t\t
\t\t.product-info .description,
\t\t.category-list {
\t\t     background: none;
\t\t     border-bottom: 1px solid ";
                    // line 512
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_border_color"], "method", false, false, false, 512);
                    echo ";
\t\t}
\t\t
\t\t.product-info .options,
\t\t.product-list,
\t\t.list-box li {
\t\t     background: none;
\t\t     border-top: 1px solid ";
                    // line 519
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_border_color"], "method", false, false, false, 519);
                    echo ";
\t\t}
\t\t
\t\t     .list-box li:first-child {
\t\t          border: none;
\t\t     }
\t\t
\t\t.box-with-products .clear:before,
\t\t.box-with-products .clear:after,
\t\t.product-grid .product:before,
\t\t.product-list > div:before,
\t\t.product-list .name-actions:before,
\t\t.product-list .desc:before,
\t\t.center-column .product-grid:before,
\t\t.center-column .product-grid:after,
\t\t.product-grid > .row:before,
\t\t.category-info:before,
\t\t.refine_search_overflow:after,
\t\t.tab-content:before,
\t\t.tab-content:after,
\t\t.product-filter .list-options .limit:before,
\t\t.product-filter .list-options .sort:before,
\t\t.product-filter .options .product-compare:before,
\t\t.is-countdown .countdown-section:after,
\t\t#main .quickcheckout-heading,
\t\t#main .quickcheckout-cart thead td {
\t\t     background: ";
                    // line 545
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_border_color"], "method", false, false, false, 545);
                    echo ";
\t\t}
\t\t
\t\t#main .quickcheckout-heading,
\t\t#main .quickcheckout-cart thead td {
\t\t\tcolor: #fff;
\t\t}
\t\t
\t\t.review-list .text:before,
\t\t#main .post .comments-list .text:before {
\t\t\tborder-bottom-color: ";
                    // line 555
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_border_color"], "method", false, false, false, 555);
                    echo ";
\t\t}
\t\t
\t\t@media (max-width: 500px) {
\t\t     .responsive #main .product-grid .row > div.col-xs-6 .product:after {
\t\t          background: ";
                    // line 560
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_border_color"], "method", false, false, false, 560);
                    echo ";
\t\t     }
\t\t}
\t\t
\t\t@media (max-width: 767px) {
\t\t     .responsive .product-grid .row > div.col-xs-6 .product:after {
\t\t          background: ";
                    // line 566
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_border_color"], "method", false, false, false, 566);
                    echo ";
\t\t     }
\t\t}
\t\t";
                }
                // line 569
                echo " 
\t\t
\t\t";
                // line 571
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_headings_color"], "method", false, false, false, 571) != "")) {
                    echo " 
\t\t.center-column h1,
\t\t.center-column h2,
\t\t.center-column h3,
\t\t.center-column h4,
\t\t.center-column h5,
\t\t.center-column h6,
\t\t.center-column legend,
\t\t.popup h4 {
\t\t     color: ";
                    // line 580
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_content_headings_color"], "method", false, false, false, 580);
                    echo ";
\t\t}
\t\t";
                }
                // line 582
                echo " 
\t\t
\t\t";
                // line 584
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "pagination_text_color"], "method", false, false, false, 584) != "")) {
                    echo " 
\t\t#mfilter-content-container > div.pagination-results .text-right,
\t\t.content-without-background #mfilter-content-container > p {
\t\t\tcolor: ";
                    // line 587
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "pagination_text_color"], "method", false, false, false, 587);
                    echo ";
\t\t}
\t\t";
                }
                // line 589
                echo " 
\t\t
\t\t";
                // line 591
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_filter_icon_color"], "method", false, false, false, 591) != "")) {
                    echo " 
\t\t.product-filter .options .button-group button {
\t\t\tcolor: ";
                    // line 593
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_filter_icon_color"], "method", false, false, false, 593);
                    echo ";
\t\t}
\t\t";
                }
                // line 595
                echo " 
\t\t
\t\t";
                // line 597
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_filter_icon_active_color"], "method", false, false, false, 597) != "")) {
                    echo " 
\t\t.product-filter .options .button-group button:hover,
\t\t.product-filter .options .button-group .active {
\t\t\tcolor: ";
                    // line 600
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "product_filter_icon_active_color"], "method", false, false, false, 600);
                    echo ";
\t\t}
\t\t";
                }
                // line 602
                echo " 
\t\t
\t\t";
                // line 604
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_text_color"], "method", false, false, false, 604) != "")) {
                    echo " 
\t\t.box .box-content {
\t\t\tcolor: ";
                    // line 606
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_text_color"], "method", false, false, false, 606);
                    echo ";
\t\t}
\t\t";
                }
                // line 608
                echo " 
\t\t
\t\t";
                // line 610
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_links_color"], "method", false, false, false, 610) != "")) {
                    echo " 
\t\t.box .box-content a {
\t\t\tcolor: ";
                    // line 612
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_links_color"], "method", false, false, false, 612);
                    echo ";
\t\t}
\t\t";
                }
                // line 614
                echo " 
\t\t
\t\t";
                // line 616
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_heading_background_color"], "method", false, false, false, 616) != "")) {
                    echo " 
\t\t.box,
\t\t.bg-filter-tabs,
\t\t.htabs:before {
\t\t\tbackground: ";
                    // line 620
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_heading_background_color"], "method", false, false, false, 620);
                    echo ";
\t\t}
\t\t";
                }
                // line 622
                echo " 
\t\t
\t\t";
                // line 624
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_heading_text_color"], "method", false, false, false, 624) != "")) {
                    echo " 
\t\t.box .box-heading,
\t\t.product-block .title-block,
\t\t.refine_search {
\t\t\tcolor: ";
                    // line 628
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_heading_text_color"], "method", false, false, false, 628);
                    echo ";
\t\t}
\t\t";
                }
                // line 630
                echo " 
\t\t
\t\t";
                // line 632
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_heading_border_bottom_color"], "method", false, false, false, 632) != "")) {
                    echo " 
\t\t.box .box-heading,
\t\t.product-block .title-block,
\t\t.refine_search,
\t\t.market-products-categories > ul > li > a {
\t\t\tborder-bottom-color: ";
                    // line 637
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_heading_border_bottom_color"], "method", false, false, false, 637);
                    echo ";
\t\t}
\t\t";
                }
                // line 639
                echo " 
\t\t
\t\t";
                // line 641
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_background_color"], "method", false, false, false, 641) != "")) {
                    echo " 
\t\t.col-sm-3 .box-no-advanced.box .box-content, .col-sm-4 .box-no-advanced.box .box-content, .col-md-3 .box-no-advanced.box .box-content, .col-md-4 .box-no-advanced.box .box-content {
\t\t\tbackground: ";
                    // line 643
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_background_color"], "method", false, false, false, 643);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 645
                echo " 
\t\t
\t\t";
                // line 647
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_border_color"], "method", false, false, false, 647) != "")) {
                    echo " 
\t\t.col-sm-3 .box-no-advanced.box .box-content, .col-sm-4 .box-no-advanced.box .box-content, .col-md-3 .box-no-advanced.box .box-content, .col-md-4 .box-no-advanced.box .box-content {
\t\t\tborder-color: ";
                    // line 649
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_border_color"], "method", false, false, false, 649);
                    echo ";
\t\t}
\t\t
\t\t.col-sm-3 .box-no-advanced.box .box-heading, .col-sm-4 .box-no-advanced.box .box-heading, .col-md-3 .box-no-advanced.box .box-heading, .col-md-4 .box-no-advanced.box .box-heading {
\t\t     border-color: ";
                    // line 653
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_border_color"], "method", false, false, false, 653);
                    echo ";
\t\t}
\t\t
     \t\t";
                    // line 656
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_border_color"], "method", false, false, false, 656) == "none")) {
                        echo " 
     \t\t.col-sm-3 .box-no-advanced.box .box-content, .col-sm-4 .box-no-advanced.box .box-content, .col-md-3 .box-no-advanced.box .box-content, .col-md-4 .box-no-advanced.box .box-content {
     \t\t\tborder: none;     \t\t
     \t\t}
     \t\t
     \t\t.col-sm-3 .box-no-advanced.box .box-heading, .col-sm-4 .box-no-advanced.box .box-heading, .col-md-3 .box-no-advanced.box .box-heading, .col-md-4 .box-no-advanced.box .box-heading {
     \t\t\tmargin-bottom: 2px;\t\t
     \t\t}
     \t\t";
                    }
                    // line 664
                    echo " 
\t\t";
                }
                // line 665
                echo " 
\t\t
\t\t";
                // line 667
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_border_1_color"], "method", false, false, false, 667) != "")) {
                    echo " 
\t\t.col-sm-3 .box-no-advanced.box .box-content, .col-sm-4 .box-no-advanced.box .box-content, .col-md-3 .box-no-advanced.box .box-content, .col-md-4 .box-no-advanced.box .box-content {
\t\t\tborder: 1px solid ";
                    // line 669
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_border_1_color"], "method", false, false, false, 669);
                    echo ";
\t\t}
\t\t
\t\t     ";
                    // line 672
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_type"], "method", false, false, false, 672) != "12")) {
                        echo " 
     \t\t.col-sm-3 .box-no-advanced.box .box-heading, .col-sm-4 .box-no-advanced.box .box-heading, .col-md-3 .box-no-advanced.box .box-heading, .col-md-4 .box-no-advanced.box .box-heading {
     \t\t     border: none;
     \t\t}
     \t\t";
                    }
                    // line 676
                    echo " 
\t\t";
                }
                // line 677
                echo " 
\t\t
\t\t";
                // line 679
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_text_color"], "method", false, false, false, 679) != "")) {
                    echo " 
\t\t.col-sm-3 .box-no-advanced.box .box-content, .col-sm-4 .box-no-advanced.box .box-content, .col-md-3 .box-no-advanced.box .box-content, .col-md-4 .box-no-advanced.box .box-content,
\t\t#main .mfilter-price-inputs input {
\t\t\tcolor: ";
                    // line 682
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_text_color"], "method", false, false, false, 682);
                    echo ";
\t\t}
\t\t";
                }
                // line 684
                echo " 
\t\t
\t\t";
                // line 686
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_links_color"], "method", false, false, false, 686) != "")) {
                    echo " 
\t\t.col-sm-3 .box-no-advanced.box .box-content a, .col-sm-4 .box-no-advanced.box .box-content a, .col-md-3 .box-no-advanced.box .box-content a, .col-md-4 .box-no-advanced.box .box-content a {
\t\t\tcolor: ";
                    // line 688
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_links_color"], "method", false, false, false, 688);
                    echo ";
\t\t}
\t\t";
                }
                // line 690
                echo " 
\t\t
\t\t";
                // line 692
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_links_hover_color"], "method", false, false, false, 692) != "")) {
                    echo " 
\t\t.col-sm-3 .box-no-advanced.box .box-content a:hover, .col-sm-4 .box-no-advanced.box .box-content a:hover, .col-md-3 .box-no-advanced.box .box-content a:hover, .col-md-4 .box-no-advanced.box .box-content a:hover {
\t\t\tcolor: ";
                    // line 694
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_links_hover_color"], "method", false, false, false, 694);
                    echo ";
\t\t}
\t\t";
                }
                // line 696
                echo " 
\t\t
\t\t";
                // line 698
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_heading_background_color"], "method", false, false, false, 698) != "")) {
                    echo " 
\t\t.col-sm-3 .box-no-advanced.box, .col-sm-4 .box-no-advanced.box, .col-md-3 .box-no-advanced.box, .col-md-4 .box-no-advanced.box {
\t\t\tbackground: ";
                    // line 700
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_heading_background_color"], "method", false, false, false, 700);
                    echo ";
\t\t}
\t\t";
                }
                // line 702
                echo " 
\t\t
\t\t";
                // line 704
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_heading_text_color"], "method", false, false, false, 704) != "")) {
                    echo " 
\t\t.col-sm-3 .box-no-advanced.box .box-heading, .col-sm-4 .box-no-advanced.box .box-heading, .col-md-3 .box-no-advanced.box .box-heading, .col-md-4 .box-no-advanced.box .box-heading {
\t\t\tcolor: ";
                    // line 706
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_heading_text_color"], "method", false, false, false, 706);
                    echo ";
\t\t}
\t\t";
                }
                // line 708
                echo " 
\t\t
\t\t";
                // line 710
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_heading_border_bottom_color"], "method", false, false, false, 710) != "")) {
                    echo " 
\t\t.col-sm-3 .box-no-advanced.box .box-heading, .col-sm-4 .box-no-advanced.box .box-heading, .col-md-3 .box-no-advanced.box .box-heading, .col-md-4 .box-no-advanced.box .box-heading,
\t\t.col-sm-3 .blog-module.box .box-heading, .col-sm-4 .blog-module.box .box-heading, .col-md-3 .blog-module.box .box-heading, .col-md-4 .blog-module.box .box-heading {
\t\t\tborder-bottom-color: ";
                    // line 713
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_left_heading_border_bottom_color"], "method", false, false, false, 713);
                    echo ";
\t\t}
\t\t";
                }
                // line 715
                echo " 
\t\t
\t\t";
                // line 717
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_background_color"], "method", false, false, false, 717) != "")) {
                    echo " 
\t\theader {
\t\t\tbackground: ";
                    // line 719
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_background_color"], "method", false, false, false, 719);
                    echo ";
\t\t}
\t\t";
                }
                // line 721
                echo " 
\t\t
\t\t";
                // line 723
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_border_bottom_1_color"], "method", false, false, false, 723) != "")) {
                    echo " 
\t\t.header-type-3 #top {
\t\t\tborder-bottom: 1px solid ";
                    // line 725
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_border_bottom_1_color"], "method", false, false, false, 725);
                    echo ";
\t\t}
\t\t";
                }
                // line 727
                echo " 
\t\t
\t\t";
                // line 729
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_border_bottom_2_color"], "method", false, false, false, 729) != "")) {
                    echo " 
\t\t.header-type-3 #top {
\t\t\tborder-bottom: 2px solid ";
                    // line 731
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_border_bottom_2_color"], "method", false, false, false, 731);
                    echo ";
\t\t}
\t\t";
                }
                // line 733
                echo " 
\t\t
\t\t";
                // line 735
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_search_border_color"], "method", false, false, false, 735) != "")) {
                    echo " 
\t\t.header-type-3 #top .search_form,
\t\t.header-type-8 #top .search_form,
\t\t.body-header-type-27 #top .search_form {
\t\t\tborder-color: ";
                    // line 739
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_search_border_color"], "method", false, false, false, 739);
                    echo ";
\t\t}
\t\t";
                }
                // line 741
                echo " 
\t\t
\t\t";
                // line 743
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_search_background_color"], "method", false, false, false, 743) != "")) {
                    echo " 
\t\t.header-type-3 #top .search_form,
\t\t.header-type-8 #top .search_form,
\t\t.body-header-type-27 #top .search_form {
\t\t\tbackground-color: ";
                    // line 747
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_search_background_color"], "method", false, false, false, 747);
                    echo ";
\t\t}
\t\t
\t\t     ";
                    // line 750
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_search_background_color"], "method", false, false, false, 750) == "none")) {
                        echo " 
\t\t          .header-type-3 #top .search_form,
\t\t          .header-type-8 #top .search_form {
\t\t          \tbackground: none;
\t\t          }
\t\t     ";
                    }
                    // line 755
                    echo " 
\t\t";
                }
                // line 756
                echo " 
\t\t
\t\t";
                // line 758
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_search_icon_color"], "method", false, false, false, 758) != "")) {
                    echo " 
\t\t.header-type-3 #top .search_form,
\t\t.header-type-8 #top .search_form,
\t\t.body-header-type-27 #top .search_form .button-search {
\t\t\tcolor: ";
                    // line 762
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_search_icon_color"], "method", false, false, false, 762);
                    echo ";
\t\t}
\t\t";
                }
                // line 764
                echo " 
\t\t
\t\t";
                // line 766
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_search_border_hover_color"], "method", false, false, false, 766) != "")) {
                    echo " 
\t\t.header-type-3 #top .search_form:hover,
\t\t.header-type-8 #top .search_form:hover,
\t\t.body-header-type-27 #top .search_form:hover {
\t\t\tborder-color: ";
                    // line 770
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_search_border_hover_color"], "method", false, false, false, 770);
                    echo ";
\t\t}
\t\t";
                }
                // line 772
                echo " 
\t\t
\t\t";
                // line 774
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_search_background_hover_color"], "method", false, false, false, 774) != "")) {
                    echo " 
\t\t.header-type-3 #top .search_form:hover,
\t\t.header-type-8 #top .search_form:hover,
\t\t.body-header-type-27 #top .search_form:hover {
\t\t\tbackground-color: ";
                    // line 778
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_search_background_hover_color"], "method", false, false, false, 778);
                    echo ";
\t\t}
\t\t";
                }
                // line 780
                echo " 
\t\t
\t\t";
                // line 782
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_search_icon_hover_color"], "method", false, false, false, 782) != "")) {
                    echo " 
\t\t.header-type-3 #top .search_form:hover,
\t\t.header-type-8 #top .search_form:hover,
\t\t.body-header-type-27 #top .search_form:hover .button-search {
\t\t\tcolor: ";
                    // line 786
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_3_search_icon_hover_color"], "method", false, false, false, 786);
                    echo ";
\t\t}
\t\t";
                }
                // line 788
                echo " 
\t\t
\t\t";
                // line 790
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_color"], "method", false, false, false, 790) != "")) {
                    echo " 
\t\t.header-type-12 #top .search_form {
\t\t\tbackground: ";
                    // line 792
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_color"], "method", false, false, false, 792);
                    echo ";
\t\t}
\t\t";
                }
                // line 794
                echo " 
\t\t
\t\t";
                // line 796
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_top_color"], "method", false, false, false, 796) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_bottom_color"], "method", false, false, false, 796) != ""))) {
                    echo " 
\t\t.header-type-12 #top .search_form {
\t\t\tbackground: ";
                    // line 798
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_bottom_color"], "method", false, false, false, 798);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 799
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_bottom_color"], "method", false, false, false, 799);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_top_color"], "method", false, false, false, 799);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_bottom_color"], "method", false, false, false, 799);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 800
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_bottom_color"], "method", false, false, false, 800);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_top_color"], "method", false, false, false, 800);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_bottom_color"], "method", false, false, false, 800);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 801
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_bottom_color"], "method", false, false, false, 801);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_top_color"], "method", false, false, false, 801);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_bottom_color"], "method", false, false, false, 801);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 802
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_bottom_color"], "method", false, false, false, 802);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_top_color"], "method", false, false, false, 802);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_bottom_color"], "method", false, false, false, 802);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 803
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_bottom_color"], "method", false, false, false, 803);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_top_color"], "method", false, false, false, 803);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_bottom_color"], "method", false, false, false, 803);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 804
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_bottom_color"], "method", false, false, false, 804);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_top_color"], "method", false, false, false, 804);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_background_gradient_bottom_color"], "method", false, false, false, 804);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 806
                echo " 
\t\t
\t\t";
                // line 808
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_icon_color"], "method", false, false, false, 808) != "")) {
                    echo " 
\t\t.header-type-12 #top .search_form .button-search {
\t\t\tcolor: ";
                    // line 810
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_icon_color"], "method", false, false, false, 810);
                    echo ";
\t\t}
\t\t";
                }
                // line 812
                echo " 
\t\t
\t\t";
                // line 814
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_select_text_color"], "method", false, false, false, 814) != "")) {
                    echo " 
\t\t.header-type-12 #top .search_form .search-cat select,
\t\t.header-type-12 #top .search_form .search-cat .select:after {
\t\t\tcolor: ";
                    // line 817
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_select_text_color"], "method", false, false, false, 817);
                    echo ";
\t\t}
\t\t";
                }
                // line 819
                echo " 
\t\t
\t\t";
                // line 821
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_input_text_color"], "method", false, false, false, 821) != "")) {
                    echo " 
\t\t.header-type-12 #top .search_form input {
\t\t\tcolor: ";
                    // line 823
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_input_text_color"], "method", false, false, false, 823);
                    echo ";
\t\t}
\t\t
\t\t.header-type-12 #top .search_form input::-webkit-input-placeholder { /* WebKit, Blink, Edge */
\t\t    color:    ";
                    // line 827
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_input_text_color"], "method", false, false, false, 827);
                    echo ";
\t\t}
\t\t
\t\t.header-type-12 #top .search_form input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
\t\t   color:    ";
                    // line 831
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_input_text_color"], "method", false, false, false, 831);
                    echo ";
\t\t   opacity:  1;
\t\t}
\t\t
\t\t.header-type-12 #top .search_form input::-moz-placeholder { /* Mozilla Firefox 19+ */
\t\t   color:    ";
                    // line 836
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_input_text_color"], "method", false, false, false, 836);
                    echo ";
\t\t   opacity:  1;
\t\t}
\t\t
\t\t.header-type-12 #top .search_form input:-ms-input-placeholder { /* Internet Explorer 10-11 */
\t\t   color:    ";
                    // line 841
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_input_text_color"], "method", false, false, false, 841);
                    echo ";
\t\t}
\t\t";
                }
                // line 843
                echo " 
\t\t
\t\t";
                // line 845
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_input_background_color"], "method", false, false, false, 845) != "")) {
                    echo " 
\t\t.header-type-12 #top .search_form input {
\t\t\tbackground: ";
                    // line 847
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_input_background_color"], "method", false, false, false, 847);
                    echo ";
\t\t}
\t\t";
                }
                // line 849
                echo " 
\t\t
\t\t";
                // line 851
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_input_focus_background_color"], "method", false, false, false, 851) != "")) {
                    echo " 
\t\t.header-type-12 #top .search_form input:focus {
\t\t\tbackground: ";
                    // line 853
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_12_search_input_focus_background_color"], "method", false, false, false, 853);
                    echo ";
\t\t}
\t\t";
                }
                // line 855
                echo " 
\t\t
\t\t";
                // line 857
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_13_search_background_color"], "method", false, false, false, 857) != "")) {
                    echo " 
\t\t.header-type-13 .search_form {
\t\t\tbackground: ";
                    // line 859
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_13_search_background_color"], "method", false, false, false, 859);
                    echo ";
\t\t}
\t\t";
                }
                // line 861
                echo " 
\t\t
\t\t";
                // line 863
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_13_search_border_color"], "method", false, false, false, 863) != "")) {
                    echo " 
\t\t.header-type-13 .search-cat {
\t\t\tborder-color: ";
                    // line 865
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_13_search_border_color"], "method", false, false, false, 865);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 867
                echo " 
\t\t
\t\t";
                // line 869
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_13_search_select_text_color"], "method", false, false, false, 869) != "")) {
                    echo " 
\t\t.header-type-13 .search-cat select,
\t\t.header-type-13 .search-cat .select:after {
\t\t\tcolor: ";
                    // line 872
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_13_search_select_text_color"], "method", false, false, false, 872);
                    echo ";
\t\t}
\t\t";
                }
                // line 874
                echo " 
\t\t
\t\t";
                // line 876
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_13_search_input_text_color"], "method", false, false, false, 876) != "")) {
                    echo " 
\t\t.header-type-13 .overflow-input input {
\t\t\tcolor: ";
                    // line 878
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_13_search_input_text_color"], "method", false, false, false, 878);
                    echo ";
\t\t}
\t\t";
                }
                // line 880
                echo " 
\t\t
\t\t";
                // line 882
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_13_search_icon_background_color"], "method", false, false, false, 882) != "")) {
                    echo " 
\t\t.header-type-13 .button-search {
\t\t\tbackground: ";
                    // line 884
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_13_search_icon_background_color"], "method", false, false, false, 884);
                    echo ";
\t\t}
\t\t";
                }
                // line 886
                echo " 
\t\t
\t\t";
                // line 888
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_13_search_icon_hover_background_color"], "method", false, false, false, 888) != "")) {
                    echo " 
\t\t.header-type-13 .button-search:hover {
\t\t\tbackground: ";
                    // line 890
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_13_search_icon_hover_background_color"], "method", false, false, false, 890);
                    echo ";
\t\t}
\t\t";
                }
                // line 892
                echo " 
\t\t
\t\t";
                // line 894
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_13_search_icon_text_color"], "method", false, false, false, 894) != "")) {
                    echo " 
\t\t.header-type-13 .button-search {
\t\t\tcolor: ";
                    // line 896
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_13_search_icon_text_color"], "method", false, false, false, 896);
                    echo ";
\t\t}
\t\t";
                }
                // line 898
                echo " 
\t\t
\t\t";
                // line 900
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_13_search_icon_hover_text_color"], "method", false, false, false, 900) != "")) {
                    echo " 
\t\t.header-type-13 .button-search:hover {
\t\t\tcolor: ";
                    // line 902
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_type_13_search_icon_hover_text_color"], "method", false, false, false, 902);
                    echo ";
\t\t}
\t\t";
                }
                // line 904
                echo " 
\t\t
\t\t";
                // line 906
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_color"], "method", false, false, false, 906) != "")) {
                    echo " 
\t\t.header-type-15 #top .logo:before {
\t\t\tbackground: ";
                    // line 908
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_color"], "method", false, false, false, 908);
                    echo ";
\t\t}
\t\t";
                }
                // line 910
                echo " 
\t\t
\t\t";
                // line 912
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_top_color"], "method", false, false, false, 912) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_bottom_color"], "method", false, false, false, 912) != ""))) {
                    echo " 
\t\t.header-type-15 #top .logo:before {
\t\t\tbackground: ";
                    // line 914
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_bottom_color"], "method", false, false, false, 914);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 915
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_bottom_color"], "method", false, false, false, 915);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_top_color"], "method", false, false, false, 915);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_bottom_color"], "method", false, false, false, 915);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 916
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_bottom_color"], "method", false, false, false, 916);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_top_color"], "method", false, false, false, 916);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_bottom_color"], "method", false, false, false, 916);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 917
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_bottom_color"], "method", false, false, false, 917);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_top_color"], "method", false, false, false, 917);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_bottom_color"], "method", false, false, false, 917);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 918
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_bottom_color"], "method", false, false, false, 918);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_top_color"], "method", false, false, false, 918);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_bottom_color"], "method", false, false, false, 918);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 919
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_bottom_color"], "method", false, false, false, 919);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_top_color"], "method", false, false, false, 919);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_bottom_color"], "method", false, false, false, 919);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 920
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_bottom_color"], "method", false, false, false, 920);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_top_color"], "method", false, false, false, 920);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "logo_background_gradient_bottom_color"], "method", false, false, false, 920);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 922
                echo " 
\t\t
\t\t";
                // line 924
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_color"], "method", false, false, false, 924) != "")) {
                    echo " 
\t\t.top-bar {
\t\t\tbackground: ";
                    // line 926
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_color"], "method", false, false, false, 926);
                    echo ";
\t\t}
\t\t";
                }
                // line 928
                echo " 
\t\t
\t\t";
                // line 930
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_top_color"], "method", false, false, false, 930) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_bottom_color"], "method", false, false, false, 930) != ""))) {
                    echo " 
\t\t.top-bar {
\t\t     ";
                    // line 932
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_color"], "method", false, false, false, 932) == "")) {
                        echo " 
\t\t     padding: 5px 0px 12px 0px;
\t\t     ";
                    }
                    // line 934
                    echo " 
\t\t\tbackground: ";
                    // line 935
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_bottom_color"], "method", false, false, false, 935);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 936
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_bottom_color"], "method", false, false, false, 936);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_top_color"], "method", false, false, false, 936);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_bottom_color"], "method", false, false, false, 936);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 937
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_bottom_color"], "method", false, false, false, 937);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_top_color"], "method", false, false, false, 937);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_bottom_color"], "method", false, false, false, 937);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 938
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_bottom_color"], "method", false, false, false, 938);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_top_color"], "method", false, false, false, 938);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_bottom_color"], "method", false, false, false, 938);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 939
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_bottom_color"], "method", false, false, false, 939);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_top_color"], "method", false, false, false, 939);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_bottom_color"], "method", false, false, false, 939);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 940
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_bottom_color"], "method", false, false, false, 940);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_top_color"], "method", false, false, false, 940);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_bottom_color"], "method", false, false, false, 940);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 941
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_bottom_color"], "method", false, false, false, 941);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_top_color"], "method", false, false, false, 941);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_gradient_bottom_color"], "method", false, false, false, 941);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 943
                echo " 
\t\t
\t\t";
                // line 945
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_border_bottom_color"], "method", false, false, false, 945) != "")) {
                    echo " 
\t\t.top-bar {
\t\t\tborder-bottom: 1px solid ";
                    // line 947
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_border_bottom_color"], "method", false, false, false, 947);
                    echo ";
\t\t}
\t\t";
                }
                // line 949
                echo " 
\t\t
\t\t";
                // line 951
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_welcome_text"], "method", false, false, false, 951) != "")) {
                    echo " 
\t\t#top .welcome-text,
\t\t.top-bar .welcome-text {
\t\t\tcolor: ";
                    // line 954
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_welcome_text"], "method", false, false, false, 954);
                    echo ";
\t\t}
\t\t";
                }
                // line 956
                echo " 
\t\t
\t\t";
                // line 958
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_welcome_text_links_color"], "method", false, false, false, 958) != "")) {
                    echo " 
\t\t#top .welcome-text a,
\t\t.top-bar .welcome-text a {
\t\t\tcolor: ";
                    // line 961
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_welcome_text_links_color"], "method", false, false, false, 961);
                    echo ";
\t\t}
\t\t";
                }
                // line 963
                echo " 
\t\t
\t\t";
                // line 965
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_color"], "method", false, false, false, 965) != "")) {
                    echo " 
\t\t#top > .background {
\t\t\tbackground: ";
                    // line 967
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_color"], "method", false, false, false, 967);
                    echo ";
\t\t}
\t\t";
                }
                // line 969
                echo " 
\t\t
\t\t";
                // line 971
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_top"], "method", false, false, false, 971) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_bottom"], "method", false, false, false, 971) != ""))) {
                    echo " 
\t\t#top .background {
\t\t\tbackground: ";
                    // line 973
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_bottom"], "method", false, false, false, 973);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 974
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_bottom"], "method", false, false, false, 974);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_top"], "method", false, false, false, 974);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_bottom"], "method", false, false, false, 974);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 975
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_bottom"], "method", false, false, false, 975);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_top"], "method", false, false, false, 975);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_bottom"], "method", false, false, false, 975);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 976
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_bottom"], "method", false, false, false, 976);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_top"], "method", false, false, false, 976);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_bottom"], "method", false, false, false, 976);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 977
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_bottom"], "method", false, false, false, 977);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_top"], "method", false, false, false, 977);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_bottom"], "method", false, false, false, 977);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 978
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_bottom"], "method", false, false, false, 978);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_top"], "method", false, false, false, 978);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_bottom"], "method", false, false, false, 978);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 979
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_bottom"], "method", false, false, false, 979);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_top"], "method", false, false, false, 979);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_gradient_bottom"], "method", false, false, false, 979);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 981
                echo " 
\t\t
\t\t";
                // line 983
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_border_bottom_color"], "method", false, false, false, 983) != "")) {
                    echo " 
\t\t.megamenu-background {
\t\t\tborder-bottom-color: ";
                    // line 985
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_border_bottom_color"], "method", false, false, false, 985);
                    echo ";
\t\t}
\t\t
\t\t     ";
                    // line 988
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_border_bottom_color"], "method", false, false, false, 988) == "none")) {
                        echo " 
\t\t     .megamenu-background {
\t\t          border-bottom: none;
\t\t     }
\t\t     ";
                    }
                    // line 992
                    echo " 
\t\t";
                }
                // line 993
                echo " 
\t\t
\t\t";
                // line 995
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_border_bottom_1px_color"], "method", false, false, false, 995) != "")) {
                    echo " 
\t\t.megamenu-background {
\t\t\tborder-bottom: 1px solid ";
                    // line 997
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_border_bottom_1px_color"], "method", false, false, false, 997);
                    echo ";
\t\t}
\t\t";
                }
                // line 999
                echo " 
\t\t
\t\t";
                // line 1001
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_border_bottom_4px_color"], "method", false, false, false, 1001) != "")) {
                    echo " 
\t\t.megamenu-background {
\t\t\tborder-bottom: 4px solid ";
                    // line 1003
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_border_bottom_4px_color"], "method", false, false, false, 1003);
                    echo ";
\t\t}
\t\t";
                }
                // line 1005
                echo " 
\t\t
\t\t";
                // line 1007
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_links_color"], "method", false, false, false, 1007) != "")) {
                    echo " 
\t\t.top-bar .menu li a,
\t\t.header-type-9 #top #header-center .menu li a,
\t\t.header-type-17 #top #header-left .menu li a,
\t\t.header-type-26 #top .menu li a {
\t\t\tcolor: ";
                    // line 1012
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_links_color"], "method", false, false, false, 1012);
                    echo ";
\t\t}
\t\t";
                }
                // line 1014
                echo " 
\t\t
\t\t";
                // line 1016
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_links_hover_color"], "method", false, false, false, 1016) != "")) {
                    echo " 
\t\t.top-bar .menu li a:hover,
\t\t.header-type-9 #top #header-center .menu li a:hover,
\t\t.header-type-17 #top #header-left .menu li a:hover,
\t\t.header-type-26 #top .menu li a:hover {
\t\t\tcolor: ";
                    // line 1021
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_links_hover_color"], "method", false, false, false, 1021);
                    echo ";
\t\t}
\t\t";
                }
                // line 1023
                echo " 
\t\t
\t\t";
                // line 1025
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_search_input_background_color"], "method", false, false, false, 1025) != "")) {
                    echo " 
\t\t#top .search_form input {
\t\t\tbackground: ";
                    // line 1027
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_search_input_background_color"], "method", false, false, false, 1027);
                    echo ";
\t\t}
\t\t";
                }
                // line 1029
                echo " 
\t\t
\t\t";
                // line 1031
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_search_input_focus_background_color"], "method", false, false, false, 1031) != "")) {
                    echo " 
\t\t#top .search_form input:focus {
\t\t\tbackground: ";
                    // line 1033
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_search_input_focus_background_color"], "method", false, false, false, 1033);
                    echo ";
\t\t}
\t\t";
                }
                // line 1035
                echo " 
\t\t
\t\t";
                // line 1037
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_search_input_border_color"], "method", false, false, false, 1037) != "")) {
                    echo " 
\t\t#top .search_form input {
\t\t\tborder: 1px solid ";
                    // line 1039
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_search_input_border_color"], "method", false, false, false, 1039);
                    echo ";
\t\t}
\t\t";
                }
                // line 1041
                echo " 
\t\t
\t\t";
                // line 1043
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_search_input_focus_border_color"], "method", false, false, false, 1043) != "")) {
                    echo " 
\t\t#top .search_form input:focus {
\t\t\tborder: 1px solid ";
                    // line 1045
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_search_input_focus_border_color"], "method", false, false, false, 1045);
                    echo ";
\t\t}
\t\t";
                }
                // line 1047
                echo " 
\t\t
\t\t";
                // line 1049
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_search_input_text_color"], "method", false, false, false, 1049) != "")) {
                    echo " 
\t\t#top .search_form input {
\t\t\tcolor: ";
                    // line 1051
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_search_input_text_color"], "method", false, false, false, 1051);
                    echo ";
\t\t}
\t\t
\t\t#top .search_form input::-webkit-input-placeholder { /* WebKit, Blink, Edge */
\t\t    color:    ";
                    // line 1055
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_search_input_text_color"], "method", false, false, false, 1055);
                    echo ";
\t\t}
\t\t
\t\t#top .search_form input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
\t\t   color:    ";
                    // line 1059
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_search_input_text_color"], "method", false, false, false, 1059);
                    echo ";
\t\t   opacity:  1;
\t\t}
\t\t
\t\t#top .search_form input::-moz-placeholder { /* Mozilla Firefox 19+ */
\t\t   color:    ";
                    // line 1064
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_search_input_text_color"], "method", false, false, false, 1064);
                    echo ";
\t\t   opacity:  1;
\t\t}
\t\t
\t\t#top .search_form input:-ms-input-placeholder { /* Internet Explorer 10-11 */
\t\t   color:    ";
                    // line 1069
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_search_input_text_color"], "method", false, false, false, 1069);
                    echo ";
\t\t}
\t\t";
                }
                // line 1071
                echo " 
\t\t
\t\t";
                // line 1073
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_search_icon_color"], "method", false, false, false, 1073) != "")) {
                    echo " 
\t\t.search_form .button-search, 
\t\t.search_form .button-search2 {
\t\t\tcolor: ";
                    // line 1076
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_search_icon_color"], "method", false, false, false, 1076);
                    echo ";
\t\t}
\t\t";
                }
                // line 1078
                echo " 
\t\t
\t\t";
                // line 1080
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_change_bullet_color"], "method", false, false, false, 1080) != "")) {
                    echo " 
\t\t#top .dropdown > a:after {
\t\t\tcolor: ";
                    // line 1082
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_change_bullet_color"], "method", false, false, false, 1082);
                    echo ";
\t\t}
\t\t";
                }
                // line 1084
                echo " 
\t\t
\t\t";
                // line 1086
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_change_text_color"], "method", false, false, false, 1086) != "")) {
                    echo " 
\t\t#top .dropdown > a {
\t\t\tcolor: ";
                    // line 1088
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_change_text_color"], "method", false, false, false, 1088);
                    echo ";
\t\t}
\t\t";
                }
                // line 1090
                echo " 
\t\t
\t\t";
                // line 1092
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_change_text_hover_color"], "method", false, false, false, 1092) != "")) {
                    echo " 
\t\t#top .dropdown:hover > a {
\t\t\tcolor: ";
                    // line 1094
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_change_text_hover_color"], "method", false, false, false, 1094);
                    echo ";
\t\t}
\t\t";
                }
                // line 1096
                echo " 
\t\t
\t\t";
                // line 1098
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_change_bullet_hover_color"], "method", false, false, false, 1098) != "")) {
                    echo " 
\t\t#top .dropdown:hover > a:after {
\t\t\tcolor: ";
                    // line 1100
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_change_bullet_hover_color"], "method", false, false, false, 1100);
                    echo ";
\t\t}
\t\t";
                }
                // line 1102
                echo " 
\t\t
\t\t";
                // line 1104
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_border_color"], "method", false, false, false, 1104) != "")) {
                    echo " 
\t\t#top .my-account,
\t\t.rtl .header-type-10 #top .my-account {
\t\t\tborder-color: ";
                    // line 1107
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_border_color"], "method", false, false, false, 1107);
                    echo ";
\t\t\t";
                    // line 1108
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_border_color"], "method", false, false, false, 1108) == "none")) {
                        echo " 
\t\t\t     border: none;
\t\t\t     padding-top: 10px;
\t\t\t";
                    }
                    // line 1112
                    echo "\t\t}
\t\t";
                }
                // line 1113
                echo " 
\t\t
\t\t";
                // line 1115
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_color"], "method", false, false, false, 1115) != "")) {
                    echo " 
\t\t#top .my-account {
\t\t\tbackground: ";
                    // line 1117
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_color"], "method", false, false, false, 1117);
                    echo ";
\t\t}
\t\t";
                }
                // line 1119
                echo " 
\t\t
\t\t";
                // line 1121
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_top_color"], "method", false, false, false, 1121) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_bottom_color"], "method", false, false, false, 1121) != ""))) {
                    echo " 
\t\t#top .my-account {
\t\t\tbackground: ";
                    // line 1123
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_bottom_color"], "method", false, false, false, 1123);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 1124
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_bottom_color"], "method", false, false, false, 1124);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_top_color"], "method", false, false, false, 1124);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_bottom_color"], "method", false, false, false, 1124);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 1125
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_bottom_color"], "method", false, false, false, 1125);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_top_color"], "method", false, false, false, 1125);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_bottom_color"], "method", false, false, false, 1125);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 1126
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_bottom_color"], "method", false, false, false, 1126);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_top_color"], "method", false, false, false, 1126);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_bottom_color"], "method", false, false, false, 1126);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 1127
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_bottom_color"], "method", false, false, false, 1127);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_top_color"], "method", false, false, false, 1127);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_bottom_color"], "method", false, false, false, 1127);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 1128
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_bottom_color"], "method", false, false, false, 1128);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_top_color"], "method", false, false, false, 1128);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_bottom_color"], "method", false, false, false, 1128);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 1129
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_bottom_color"], "method", false, false, false, 1129);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_top_color"], "method", false, false, false, 1129);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_gradient_bottom_color"], "method", false, false, false, 1129);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 1131
                echo " 
\t\t
\t\t";
                // line 1133
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_icon_color"], "method", false, false, false, 1133) != "")) {
                    echo " 
\t\t#top .my-account,
\t\t.header-type-23 .dropdown i {
\t\t\tcolor: ";
                    // line 1136
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_icon_color"], "method", false, false, false, 1136);
                    echo ";
\t\t}
\t\t";
                }
                // line 1138
                echo " 
\t\t
\t\t";
                // line 1140
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_border_hover_color"], "method", false, false, false, 1140) != "")) {
                    echo " 
\t\t#top .my-account:hover,
\t\t.rtl .header-type-10 #top .my-account:hover {
\t\t\tborder-color: ";
                    // line 1143
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_border_hover_color"], "method", false, false, false, 1143);
                    echo ";
\t\t}
\t\t";
                }
                // line 1145
                echo " 
\t\t
\t\t";
                // line 1147
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_color"], "method", false, false, false, 1147) != "")) {
                    echo " 
\t\t#top .my-account:hover {
\t\t\tbackground: ";
                    // line 1149
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_color"], "method", false, false, false, 1149);
                    echo ";
\t\t}
\t\t";
                }
                // line 1151
                echo " 
\t\t
\t\t";
                // line 1153
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_top_color"], "method", false, false, false, 1153) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_bottom_color"], "method", false, false, false, 1153) != ""))) {
                    echo " 
\t\t#top .my-account:hover {
\t\t\tbackground: ";
                    // line 1155
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_bottom_color"], "method", false, false, false, 1155);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 1156
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_bottom_color"], "method", false, false, false, 1156);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_top_color"], "method", false, false, false, 1156);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_bottom_color"], "method", false, false, false, 1156);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 1157
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_bottom_color"], "method", false, false, false, 1157);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_top_color"], "method", false, false, false, 1157);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_bottom_color"], "method", false, false, false, 1157);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 1158
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_bottom_color"], "method", false, false, false, 1158);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_top_color"], "method", false, false, false, 1158);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_bottom_color"], "method", false, false, false, 1158);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 1159
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_bottom_color"], "method", false, false, false, 1159);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_top_color"], "method", false, false, false, 1159);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_bottom_color"], "method", false, false, false, 1159);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 1160
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_bottom_color"], "method", false, false, false, 1160);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_top_color"], "method", false, false, false, 1160);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_bottom_color"], "method", false, false, false, 1160);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 1161
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_bottom_color"], "method", false, false, false, 1161);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_top_color"], "method", false, false, false, 1161);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_background_hover_gradient_bottom_color"], "method", false, false, false, 1161);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 1163
                echo " 
\t\t
\t\t";
                // line 1165
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_icon_hover_color"], "method", false, false, false, 1165) != "")) {
                    echo " 
\t\t#top .my-account:hover,
\t\t.header-type-23 .dropdown:hover i {
\t\t\tcolor: ";
                    // line 1168
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_my_account_icon_hover_color"], "method", false, false, false, 1168);
                    echo ";
\t\t}
\t\t";
                }
                // line 1170
                echo " 
\t\t
\t\t";
                // line 1172
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_border_color"], "method", false, false, false, 1172) != "")) {
                    echo " 
\t\t#top #cart_block .cart-heading .cart-icon,
\t\t.cart-block-type-2 #top #cart_block .cart-heading,
\t\t.cart-block-type-9 #top #cart_block .cart-heading,
\t\t.cart-block-type-8 #top #cart_block .cart-heading,
\t\t.cart-block-type-7 #top #cart_block .cart-heading,
\t\t.cart-block-type-4 #top #cart_block .cart-heading,
\t\t.cart-block-type-6 #top #cart_block .cart-heading,
\t\t.cart-block-type-8 #top #cart_block .cart-heading p,
\t\t.cart-block-type-4 #top #cart_block .cart-heading .cart-icon,
\t\t.rtl .cart-block-type-8 #top #cart_block .cart-heading p,
\t\t.rtl .header-type-10 #top #cart_block .cart-heading .cart-icon,
\t\t.rtl .cart-block-type-4 #top #cart_block .cart-heading .cart-icon {
\t\t\tborder-color: ";
                    // line 1185
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_border_color"], "method", false, false, false, 1185);
                    echo ";
\t\t}
\t\t
\t\t     ";
                    // line 1188
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_border_color"], "method", false, false, false, 1188) == "none")) {
                        echo " 
\t\t     #top #cart_block .cart-heading .cart-icon,
\t\t     .rtl .header-type-10 #top #cart_block .cart-heading .cart-icon,
\t\t     .cart-block-type-2 #top #cart_block .cart-heading,
\t\t     .cart-block-type-9 #top #cart_block .cart-heading,
\t\t     .cart-block-type-8 #top #cart_block .cart-heading,
\t\t     .cart-block-type-7 #top #cart_block .cart-heading,
\t\t     .cart-block-type-4 #top #cart_block .cart-heading,
\t\t     .cart-block-type-6 #top #cart_block .cart-heading,
\t\t     .cart-block-type-8 #top #cart_block .cart-heading p,
\t\t     .rtl .cart-block-type-8 #top #cart_block .cart-heading p,
\t\t     .cart-block-type-4 #top #cart_block .cart-heading .cart-icon,
\t\t     .rtl .cart-block-type-4 #top #cart_block .cart-heading .cart-icon {
\t\t     \tborder-color: transparent;
\t\t     }
\t\t     ";
                    }
                    // line 1203
                    echo " 
\t\t     
\t\t";
                }
                // line 1205
                echo " 
\t\t
\t\t";
                // line 1207
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_color"], "method", false, false, false, 1207) != "")) {
                    echo " 
\t\t#top #cart_block .cart-heading .cart-icon,
\t\t.cart-block-type-2 #top #cart_block .cart-heading,
\t\t.cart-block-type-9 #top #cart_block .cart-heading,
\t\t.cart-block-type-8 #top #cart_block .cart-heading,
\t\t.cart-block-type-7 #top #cart_block .cart-heading,
\t\t.cart-block-type-4 #top #cart_block .cart-heading {
\t\t\tbackground: ";
                    // line 1214
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_color"], "method", false, false, false, 1214);
                    echo ";
\t\t}
\t\t";
                }
                // line 1216
                echo " 
\t\t
\t\t";
                // line 1218
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_top_color"], "method", false, false, false, 1218) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_bottom_color"], "method", false, false, false, 1218) != ""))) {
                    echo " 
\t\t#top #cart_block .cart-heading .cart-icon,
\t\t.cart-block-type-2 #top #cart_block .cart-heading,
\t\t.cart-block-type-9 #top #cart_block .cart-heading,
\t\t.cart-block-type-8 #top #cart_block .cart-heading,
\t\t.cart-block-type-7 #top #cart_block .cart-heading,
\t\t.cart-block-type-4 #top #cart_block .cart-heading {
\t\t\tbackground: ";
                    // line 1225
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_bottom_color"], "method", false, false, false, 1225);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 1226
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_bottom_color"], "method", false, false, false, 1226);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_top_color"], "method", false, false, false, 1226);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_bottom_color"], "method", false, false, false, 1226);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 1227
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_bottom_color"], "method", false, false, false, 1227);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_top_color"], "method", false, false, false, 1227);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_bottom_color"], "method", false, false, false, 1227);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 1228
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_bottom_color"], "method", false, false, false, 1228);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_top_color"], "method", false, false, false, 1228);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_bottom_color"], "method", false, false, false, 1228);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 1229
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_bottom_color"], "method", false, false, false, 1229);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_top_color"], "method", false, false, false, 1229);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_bottom_color"], "method", false, false, false, 1229);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 1230
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_bottom_color"], "method", false, false, false, 1230);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_top_color"], "method", false, false, false, 1230);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_bottom_color"], "method", false, false, false, 1230);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 1231
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_bottom_color"], "method", false, false, false, 1231);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_top_color"], "method", false, false, false, 1231);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_gradient_bottom_color"], "method", false, false, false, 1231);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 1233
                echo " 
\t\t
\t\t";
                // line 1235
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_hover_border_color"], "method", false, false, false, 1235) != "")) {
                    echo " 
\t\t#top #cart_block:hover .cart-heading .cart-icon,
\t\t.cart-block-type-2 #top #cart_block:hover .cart-heading,
\t\t.cart-block-type-9 #top #cart_block:hover .cart-heading,
\t\t.cart-block-type-8 #top #cart_block:hover .cart-heading,
\t\t.cart-block-type-7 #top #cart_block:hover .cart-heading,
\t\t.cart-block-type-4 #top #cart_block:hover .cart-heading,
\t\t.cart-block-type-6 #top #cart_block:hover .cart-heading,
\t\t.cart-block-type-8 #top #cart_block:hover .cart-heading p,
\t\t.cart-block-type-4 #top #cart_block:hover .cart-heading .cart-icon,
\t\t.rtl .cart-block-type-8 #top #cart_block:hover .cart-heading p,
\t\t.rtl .header-type-10 #top #cart_block:hover .cart-heading .cart-icon,
\t\t.rtl .cart-block-type-4 #top #cart_block:hover .cart-heading .cart-icon {
\t\t\tborder-color: ";
                    // line 1248
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_hover_border_color"], "method", false, false, false, 1248);
                    echo ";
\t\t}
\t\t
\t\t     ";
                    // line 1251
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_hover_border_color"], "method", false, false, false, 1251) == "none")) {
                        echo " 
\t\t     #top #cart_block:hover .cart-heading .cart-icon,
\t\t     .cart-block-type-2 #top #cart_block:hover .cart-heading,
\t\t     .cart-block-type-9 #top #cart_block:hover .cart-heading,
\t\t     .cart-block-type-8 #top #cart_block:hover .cart-heading,
\t\t     .cart-block-type-7 #top #cart_block:hover .cart-heading,
\t\t     .cart-block-type-4 #top #cart_block:hover .cart-heading,
\t\t     .cart-block-type-6 #top #cart_block:hover .cart-heading,
\t\t     .cart-block-type-8 #top #cart_block:hover .cart-heading p,
\t\t     .cart-block-type-4 #top #cart_block:hover .cart-heading .cart-icon,
\t\t     .rtl .cart-block-type-8 #top #cart_block:hover .cart-heading p,
\t\t     .rtl .header-type-10 #top #cart_block:hover .cart-heading .cart-icon,
\t\t     .rtl .cart-block-type-4 #top #cart_block:hover .cart-heading .cart-icon {
\t\t     \tborder-color: transparent;
\t\t     }
\t\t     ";
                    }
                    // line 1266
                    echo " 
\t\t";
                }
                // line 1267
                echo " 
\t\t
\t\t";
                // line 1269
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_hover_background_color"], "method", false, false, false, 1269) != "")) {
                    echo " 
\t\t#top #cart_block:hover .cart-heading .cart-icon,
\t\t.cart-block-type-2 #top #cart_block:hover .cart-heading,
\t\t.cart-block-type-9 #top #cart_block:hover .cart-heading,
\t\t.cart-block-type-8 #top #cart_block:hover .cart-heading,
\t\t.cart-block-type-7 #top #cart_block:hover .cart-heading,
\t\t.cart-block-type-4 #top #cart_block:hover .cart-heading {
\t\t\tbackground: ";
                    // line 1276
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_hover_background_color"], "method", false, false, false, 1276);
                    echo ";
\t\t}
\t\t";
                }
                // line 1278
                echo " 
\t\t
\t\t";
                // line 1280
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_top_color"], "method", false, false, false, 1280) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_bottom_color"], "method", false, false, false, 1280) != ""))) {
                    echo " 
\t\t#top #cart_block:hover .cart-heading .cart-icon,
\t\t.cart-block-type-2 #top #cart_block:hover .cart-heading,
\t\t.cart-block-type-9 #top #cart_block:hover .cart-heading,
\t\t.cart-block-type-8 #top #cart_block:hover .cart-heading,
\t\t.cart-block-type-7 #top #cart_block:hover .cart-heading,
\t\t.cart-block-type-4 #top #cart_block:hover .cart-heading {
\t\t\tbackground: ";
                    // line 1287
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_bottom_color"], "method", false, false, false, 1287);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 1288
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_bottom_color"], "method", false, false, false, 1288);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_top_color"], "method", false, false, false, 1288);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_bottom_color"], "method", false, false, false, 1288);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 1289
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_bottom_color"], "method", false, false, false, 1289);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_top_color"], "method", false, false, false, 1289);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_bottom_color"], "method", false, false, false, 1289);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 1290
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_bottom_color"], "method", false, false, false, 1290);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_top_color"], "method", false, false, false, 1290);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_bottom_color"], "method", false, false, false, 1290);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 1291
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_bottom_color"], "method", false, false, false, 1291);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_top_color"], "method", false, false, false, 1291);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_bottom_color"], "method", false, false, false, 1291);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 1292
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_bottom_color"], "method", false, false, false, 1292);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_top_color"], "method", false, false, false, 1292);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_bottom_color"], "method", false, false, false, 1292);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 1293
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_bottom_color"], "method", false, false, false, 1293);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_top_color"], "method", false, false, false, 1293);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_icon_background_hover_gradient_bottom_color"], "method", false, false, false, 1293);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 1295
                echo " 
\t\t
\t\t";
                // line 1297
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_text_color"], "method", false, false, false, 1297) != "")) {
                    echo " 
\t\t#top #cart_block .cart-heading .cart-count {
\t\t\tcolor: ";
                    // line 1299
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_text_color"], "method", false, false, false, 1299);
                    echo ";
\t\t}
\t\t";
                }
                // line 1301
                echo " 
\t\t
\t\t";
                // line 1303
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_color"], "method", false, false, false, 1303) != "")) {
                    echo " 
\t\t#top #cart_block .cart-heading .cart-count {
\t\t\tbackground-color: ";
                    // line 1305
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_color"], "method", false, false, false, 1305);
                    echo ";
\t\t}
\t\t";
                }
                // line 1307
                echo " 
\t\t
\t\t";
                // line 1309
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_top_color"], "method", false, false, false, 1309) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_bottom_color"], "method", false, false, false, 1309) != ""))) {
                    echo " 
\t\t#top #cart_block .cart-heading .cart-count {
\t\t\tbackground: ";
                    // line 1311
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_bottom_color"], "method", false, false, false, 1311);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 1312
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_bottom_color"], "method", false, false, false, 1312);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_top_color"], "method", false, false, false, 1312);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_bottom_color"], "method", false, false, false, 1312);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 1313
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_bottom_color"], "method", false, false, false, 1313);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_top_color"], "method", false, false, false, 1313);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_bottom_color"], "method", false, false, false, 1313);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 1314
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_bottom_color"], "method", false, false, false, 1314);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_top_color"], "method", false, false, false, 1314);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_bottom_color"], "method", false, false, false, 1314);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 1315
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_bottom_color"], "method", false, false, false, 1315);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_top_color"], "method", false, false, false, 1315);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_bottom_color"], "method", false, false, false, 1315);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 1316
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_bottom_color"], "method", false, false, false, 1316);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_top_color"], "method", false, false, false, 1316);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_bottom_color"], "method", false, false, false, 1316);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 1317
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_bottom_color"], "method", false, false, false, 1317);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_top_color"], "method", false, false, false, 1317);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_background_gradient_bottom_color"], "method", false, false, false, 1317);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 1319
                echo " 
\t\t
\t\t";
                // line 1321
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_price_color"], "method", false, false, false, 1321) != "")) {
                    echo " 
\t\t#top #cart_block .cart-heading p {
\t\t\tcolor: ";
                    // line 1323
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_price_color"], "method", false, false, false, 1323);
                    echo ";
\t\t}
\t\t";
                }
                // line 1325
                echo " 
\t\t
\t\t";
                // line 1327
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_bullet_color"], "method", false, false, false, 1327) != "")) {
                    echo " 
\t\t#top #cart_block .cart-heading p:after {
\t\t\tcolor: ";
                    // line 1329
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_bullet_color"], "method", false, false, false, 1329);
                    echo ";
\t\t}
\t\t";
                }
                // line 1331
                echo " 
\t\t
\t\t";
                // line 1333
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_text_color"], "method", false, false, false, 1333) != "")) {
                    echo " 
\t\t#top #cart_block:hover .cart-heading .cart-count {
\t\t\tcolor: ";
                    // line 1335
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_text_color"], "method", false, false, false, 1335);
                    echo ";
\t\t}
\t\t";
                }
                // line 1337
                echo " 
\t\t
\t\t";
                // line 1339
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_color"], "method", false, false, false, 1339) != "")) {
                    echo " 
\t\t#top #cart_block:hover .cart-heading .cart-count {
\t\t\tbackground-color: ";
                    // line 1341
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_color"], "method", false, false, false, 1341);
                    echo ";
\t\t}
\t\t";
                }
                // line 1343
                echo " 
\t\t
\t\t";
                // line 1345
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_top_color"], "method", false, false, false, 1345) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_bottom_color"], "method", false, false, false, 1345) != ""))) {
                    echo " 
\t\t#top #cart_block:hover .cart-heading .cart-count {
\t\t\tbackground: ";
                    // line 1347
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_bottom_color"], "method", false, false, false, 1347);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 1348
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_bottom_color"], "method", false, false, false, 1348);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_top_color"], "method", false, false, false, 1348);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_bottom_color"], "method", false, false, false, 1348);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 1349
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_bottom_color"], "method", false, false, false, 1349);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_top_color"], "method", false, false, false, 1349);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_bottom_color"], "method", false, false, false, 1349);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 1350
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_bottom_color"], "method", false, false, false, 1350);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_top_color"], "method", false, false, false, 1350);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_bottom_color"], "method", false, false, false, 1350);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 1351
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_bottom_color"], "method", false, false, false, 1351);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_top_color"], "method", false, false, false, 1351);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_bottom_color"], "method", false, false, false, 1351);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 1352
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_bottom_color"], "method", false, false, false, 1352);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_top_color"], "method", false, false, false, 1352);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_bottom_color"], "method", false, false, false, 1352);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 1353
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_bottom_color"], "method", false, false, false, 1353);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_top_color"], "method", false, false, false, 1353);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_amount_hover_background_gradient_bottom_color"], "method", false, false, false, 1353);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 1355
                echo " 
\t\t
\t\t";
                // line 1357
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_price_hover_color"], "method", false, false, false, 1357) != "")) {
                    echo " 
\t\t#top #cart_block:hover .cart-heading p {
\t\t\tcolor: ";
                    // line 1359
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_price_hover_color"], "method", false, false, false, 1359);
                    echo ";
\t\t}
\t\t";
                }
                // line 1361
                echo " 
\t\t
\t\t";
                // line 1363
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_bullet_hover_color"], "method", false, false, false, 1363) != "")) {
                    echo " 
\t\t#top #cart_block:hover .cart-heading p:after {
\t\t\tcolor: ";
                    // line 1365
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_cart_bullet_hover_color"], "method", false, false, false, 1365);
                    echo ";
\t\t}
\t\t";
                }
                // line 1367
                echo " 
\t\t
\t\t";
                // line 1369
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "megafilter_bullets_background_color"], "method", false, false, false, 1369) != "")) {
                    echo " 
\t\t#main .mfilter-slider-slider .ui-slider-handle, #main #mfilter-price-slider .ui-slider-handle {
\t\t     background: ";
                    // line 1371
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "megafilter_bullets_background_color"], "method", false, false, false, 1371);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 1373
                echo " 
\t\t
\t\t";
                // line 1375
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "megafilter_background_color_of_slider"], "method", false, false, false, 1375) != "")) {
                    echo " 
\t\t#main .mfilter-slider-slider .ui-slider-range, #main #mfilter-price-slider .ui-slider-range {
\t\t     background: ";
                    // line 1377
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "megafilter_background_color_of_slider"], "method", false, false, false, 1377);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 1379
                echo " 
\t\t
\t\t";
                // line 1381
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_links_bullet_color"], "method", false, false, false, 1381) != "")) {
                    echo " 
\t\tul.megamenu > li.with-sub-menu > a strong:after {
\t\t\tcolor: ";
                    // line 1383
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_links_bullet_color"], "method", false, false, false, 1383);
                    echo ";
\t\t}
\t\t";
                }
                // line 1385
                echo " 
\t\t
\t\t";
                // line 1387
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_links_bullet_hover_color"], "method", false, false, false, 1387) != "")) {
                    echo " 
\t\tul.megamenu > li.with-sub-menu:hover > a strong:after {
\t\t\tcolor: ";
                    // line 1389
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_links_bullet_hover_color"], "method", false, false, false, 1389);
                    echo ";
\t\t}
\t\t";
                }
                // line 1391
                echo " 
\t\t
\t\t";
                // line 1393
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_color"], "method", false, false, false, 1393) != "")) {
                    echo " 
\t\t.megamenu-background {
\t\t\tbackground-color: ";
                    // line 1395
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_color"], "method", false, false, false, 1395);
                    echo ";
\t\t}
\t\t";
                }
                // line 1397
                echo " 
\t\t
\t\t";
                // line 1399
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_top_color"], "method", false, false, false, 1399) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1399) != ""))) {
                    echo " 
\t\t.megamenu-background {
\t\t\tbackground: ";
                    // line 1401
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1401);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 1402
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1402);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_top_color"], "method", false, false, false, 1402);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1402);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 1403
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1403);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_top_color"], "method", false, false, false, 1403);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1403);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 1404
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1404);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_top_color"], "method", false, false, false, 1404);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1404);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 1405
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1405);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_top_color"], "method", false, false, false, 1405);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1405);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 1406
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1406);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_top_color"], "method", false, false, false, 1406);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1406);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 1407
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1407);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_top_color"], "method", false, false, false, 1407);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1407);
                    echo " 99%); /* W3C */
\t\t}
\t\t
\t\t     ";
                    // line 1410
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "megamenu_type"], "method", false, false, false, 1410) == "26")) {
                        echo " 
\t\t          .megamenu-background {
\t\t          \tbackground: ";
                        // line 1412
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_top_color"], "method", false, false, false, 1412);
                        echo "; /* Old browsers */
\t\t          \tbackground: -moz-linear-gradient(top,  ";
                        // line 1413
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_top_color"], "method", false, false, false, 1413);
                        echo " 50%, ";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1413);
                        echo " 100%); /* FF3.6+ */
\t\t          \tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(50%,";
                        // line 1414
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_top_color"], "method", false, false, false, 1414);
                        echo "), color-stop(100%,";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1414);
                        echo ")); /* Chrome,Safari4+ */
\t\t          \tbackground: -webkit-linear-gradient(top,  ";
                        // line 1415
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_top_color"], "method", false, false, false, 1415);
                        echo " 50%,";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1415);
                        echo " 100%); /* Chrome10+,Safari5.1+ */
\t\t          \tbackground: -o-linear-gradient(top,  ";
                        // line 1416
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_top_color"], "method", false, false, false, 1416);
                        echo " 50%,";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1416);
                        echo " 100%); /* Opera 11.10+ */
\t\t          \tbackground: -ms-linear-gradient(top,  ";
                        // line 1417
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_top_color"], "method", false, false, false, 1417);
                        echo " 50%,";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1417);
                        echo " 100%); /* IE10+ */
\t\t          \tbackground: linear-gradient(to bottom,  ";
                        // line 1418
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_top_color"], "method", false, false, false, 1418);
                        echo " 50%,";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_gradient_bottom_color"], "method", false, false, false, 1418);
                        echo " 100%); /* W3C */
\t\t          }
\t\t     ";
                    }
                    // line 1420
                    echo " 
\t\t";
                }
                // line 1421
                echo " 
\t\t
\t\t";
                // line 1423
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_links_color"], "method", false, false, false, 1423) != "")) {
                    echo " 
\t\tul.megamenu > li > a {
\t\t\tcolor: ";
                    // line 1425
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_links_color"], "method", false, false, false, 1425);
                    echo ";
\t\t}
\t\t";
                }
                // line 1427
                echo " 
\t\t
\t\t";
                // line 1429
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_links_hover_color"], "method", false, false, false, 1429) != "")) {
                    echo " 
\t\tul.megamenu > li:hover > a,
\t\tul.megamenu > li.active > a,
\t\tul.megamenu > li.home > a {
\t\t\tcolor: ";
                    // line 1433
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "main_links_hover_color"], "method", false, false, false, 1433);
                    echo ";
\t\t}
\t\t";
                }
                // line 1435
                echo " 
\t\t
\t\t";
                // line 1437
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_text_color"], "method", false, false, false, 1437) != "")) {
                    echo " 
\t\t.horizontal ul.megamenu > li.pull-right > a {
\t\t\tcolor: ";
                    // line 1439
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_text_color"], "method", false, false, false, 1439);
                    echo ";
\t\t}
\t\t";
                }
                // line 1441
                echo " 
\t\t
\t\t";
                // line 1443
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_color"], "method", false, false, false, 1443) != "")) {
                    echo " 
\t\t.horizontal ul.megamenu > li.pull-right > a {
\t\t\tbackground: ";
                    // line 1445
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_color"], "method", false, false, false, 1445);
                    echo ";
\t\t}
\t\t";
                }
                // line 1447
                echo " 
\t\t
\t\t";
                // line 1449
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_top_color"], "method", false, false, false, 1449) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_bottom_color"], "method", false, false, false, 1449) != ""))) {
                    echo " 
\t\t.horizontal ul.megamenu > li.pull-right > a {
\t\t\tbackground: ";
                    // line 1451
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_bottom_color"], "method", false, false, false, 1451);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 1452
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_bottom_color"], "method", false, false, false, 1452);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_top_color"], "method", false, false, false, 1452);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_bottom_color"], "method", false, false, false, 1452);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 1453
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_bottom_color"], "method", false, false, false, 1453);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_top_color"], "method", false, false, false, 1453);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_bottom_color"], "method", false, false, false, 1453);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 1454
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_bottom_color"], "method", false, false, false, 1454);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_top_color"], "method", false, false, false, 1454);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_bottom_color"], "method", false, false, false, 1454);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 1455
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_bottom_color"], "method", false, false, false, 1455);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_top_color"], "method", false, false, false, 1455);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_bottom_color"], "method", false, false, false, 1455);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 1456
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_bottom_color"], "method", false, false, false, 1456);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_top_color"], "method", false, false, false, 1456);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_bottom_color"], "method", false, false, false, 1456);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 1457
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_bottom_color"], "method", false, false, false, 1457);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_top_color"], "method", false, false, false, 1457);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_link_position_right_background_gradient_bottom_color"], "method", false, false, false, 1457);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 1459
                echo " 
\t\t
\t\t";
                // line 1461
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_text_color"], "method", false, false, false, 1461) != "")) {
                    echo " 
\t\t#main .vertical .megamenuToogle-wrapper .container {
\t\t\tcolor: ";
                    // line 1463
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_text_color"], "method", false, false, false, 1463);
                    echo ";
\t\t}
\t\t";
                }
                // line 1465
                echo " 
\t\t
\t\t";
                // line 1467
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_bullet_color"], "method", false, false, false, 1467) != "")) {
                    echo " 
\t\t#main .vertical .megamenuToogle-wrapper .container:after {
\t\t\tcolor: ";
                    // line 1469
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_bullet_color"], "method", false, false, false, 1469);
                    echo ";
\t\t}
\t\t
\t\t.megamenu-type-15 .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\t.megamenu-type-15 .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\t.megamenu-type-15 .megamenu-background .vertical .megamenuToogle-wrapper:before {
\t\t     background: ";
                    // line 1475
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_bullet_color"], "method", false, false, false, 1475);
                    echo ";
\t\t}
\t\t
\t\t.megamenu-type-20 .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\t.megamenu-type-20 .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\t.megamenu-type-20 .megamenu-background .vertical .megamenuToogle-wrapper:before {
\t\t     background: ";
                    // line 1481
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_bullet_color"], "method", false, false, false, 1481);
                    echo ";
\t\t}
\t\t
\t\t.megamenu-type-34 .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\t.megamenu-type-34 .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\t.megamenu-type-34 .megamenu-background .vertical .megamenuToogle-wrapper:before {
\t\t     background: ";
                    // line 1487
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_bullet_color"], "method", false, false, false, 1487);
                    echo ";
\t\t}
\t\t
\t\t.megamenu-type-28 .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\t.megamenu-type-28 .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\t.megamenu-type-28 .megamenu-background .vertical .megamenuToogle-wrapper:before {
\t\t     background: ";
                    // line 1493
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_bullet_color"], "method", false, false, false, 1493);
                    echo ";
\t\t}
\t\t
\t\t.megamenu-type-25 .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\t.megamenu-type-25 .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\t.megamenu-type-25 .megamenu-background .vertical .megamenuToogle-wrapper:before {
\t\t     background: ";
                    // line 1499
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_bullet_color"], "method", false, false, false, 1499);
                    echo ";
\t\t}
\t\t
\t\t.megamenu-type-18 .slideshow-modules .vertical .megamenuToogle-wrapper .container:before,
\t\t.megamenu-type-18 .slideshow-modules .vertical .megamenuToogle-wrapper .container:after,
\t\t.megamenu-type-18 .slideshow-modules .vertical .megamenuToogle-wrapper:before {
\t\t     background: ";
                    // line 1505
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_bullet_color"], "method", false, false, false, 1505);
                    echo ";
\t\t}
\t\t";
                }
                // line 1507
                echo " 
\t\t
\t\t";
                // line 1509
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_color"], "method", false, false, false, 1509) != "")) {
                    echo " 
\t\t#main .vertical .megamenuToogle-wrapper,
\t\t.standard-body .full-width .megamenu-background .mega-menu-modules > div:first-child:before {
\t\t\tbackground-color: ";
                    // line 1512
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_color"], "method", false, false, false, 1512);
                    echo ";
\t\t}
\t\t
\t\t     @media (max-width: 991px) {
     \t\t     .responsive .standard-body .full-width .megamenu-background .megaMenuToggle:before {
     \t\t          background-color: ";
                    // line 1517
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_color"], "method", false, false, false, 1517);
                    echo ";
     \t\t     }
\t\t     }
\t\t";
                }
                // line 1520
                echo " 
\t\t
\t\t";
                // line 1522
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_top_color"], "method", false, false, false, 1522) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1522) != ""))) {
                    echo " 
\t\t#main .vertical .megamenuToogle-wrapper,
\t\t.standard-body .full-width .megamenu-background .mega-menu-modules > div:first-child:before {
\t\t\tbackground: ";
                    // line 1525
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1525);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 1526
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1526);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_top_color"], "method", false, false, false, 1526);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1526);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 1527
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1527);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_top_color"], "method", false, false, false, 1527);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1527);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 1528
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1528);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_top_color"], "method", false, false, false, 1528);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1528);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 1529
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1529);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_top_color"], "method", false, false, false, 1529);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1529);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 1530
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1530);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_top_color"], "method", false, false, false, 1530);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1530);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 1531
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1531);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_top_color"], "method", false, false, false, 1531);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1531);
                    echo " 99%); /* W3C */
\t\t}
\t\t     @media (max-width: 991px) {
\t\t          .responsive .standard-body .full-width .megamenu-background .megaMenuToggle:before {
\t\t               background: ";
                    // line 1535
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1535);
                    echo "; /* Old browsers */
\t\t               background: -moz-linear-gradient(top, ";
                    // line 1536
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1536);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_top_color"], "method", false, false, false, 1536);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1536);
                    echo " 99%); /* FF3.6+ */
\t\t               background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 1537
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1537);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_top_color"], "method", false, false, false, 1537);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1537);
                    echo ")); /* Chrome,Safari4+ */
\t\t               background: -webkit-linear-gradient(top, ";
                    // line 1538
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1538);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_top_color"], "method", false, false, false, 1538);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1538);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t               background: -o-linear-gradient(top, ";
                    // line 1539
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1539);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_top_color"], "method", false, false, false, 1539);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1539);
                    echo " 99%); /* Opera 11.10+ */
\t\t               background: -ms-linear-gradient(top, ";
                    // line 1540
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1540);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_top_color"], "method", false, false, false, 1540);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1540);
                    echo " 99%); /* IE10+ */
\t\t               background: linear-gradient(to bottom, ";
                    // line 1541
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1541);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_top_color"], "method", false, false, false, 1541);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1541);
                    echo " 99%); /* W3C */
\t\t          }
\t\t     }
\t\t";
                }
                // line 1544
                echo " 
\t\t
\t\t";
                // line 1546
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_text_color"], "method", false, false, false, 1546) != "")) {
                    echo " 
\t\t#main .vertical:hover .megamenuToogle-wrapper .container,
\t\t.common-home.show-vertical-megamenu #main .megamenu-background .vertical .megamenuToogle-wrapper .container,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page #main .megamenu-background .vertical .megamenuToogle-wrapper .container,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page #main .megamenu-background .vertical .megamenuToogle-wrapper .container,
\t\t.common-home.show-vertical-megamenu #main .slideshow-modules .vertical .megamenuToogle-wrapper .container {
\t\t\tcolor: ";
                    // line 1552
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_text_color"], "method", false, false, false, 1552);
                    echo ";
\t\t}
\t\t";
                }
                // line 1554
                echo " 
\t\t
\t\t";
                // line 1556
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_bullet_color"], "method", false, false, false, 1556) != "")) {
                    echo " 
\t\t#main .vertical:hover .megamenuToogle-wrapper .container:after,
\t\t.common-home.show-vertical-megamenu #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after {
\t\t\tcolor: ";
                    // line 1561
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_bullet_color"], "method", false, false, false, 1561);
                    echo ";
\t\t}
\t\t
\t\t.megamenu-type-15 .megamenu-background .vertical:hover .megamenuToogle-wrapper .container:before,
\t\t.megamenu-type-15 .megamenu-background .vertical:hover .megamenuToogle-wrapper .container:after,
\t\t.megamenu-type-15 .megamenu-background .vertical:hover .megamenuToogle-wrapper:before,
\t\t.megamenu-type-18 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:before,
\t\t.megamenu-type-18 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:after,
\t\t.megamenu-type-18 .slideshow-modules .vertical:hover .megamenuToogle-wrapper:before,
\t\t.megamenu-type-20 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:before,
\t\t.megamenu-type-20 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:after,
\t\t.megamenu-type-20 .slideshow-modules .vertical:hover .megamenuToogle-wrapper:before,
\t\t.megamenu-type-34 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:before,
\t\t.megamenu-type-34 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:after,
\t\t.megamenu-type-34 .slideshow-modules .vertical:hover .megamenuToogle-wrapper:before,
\t\t.megamenu-type-28 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:before,
\t\t.megamenu-type-28 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:after,
\t\t.megamenu-type-28 .slideshow-modules .vertical:hover .megamenuToogle-wrapper:before,
\t\t.megamenu-type-25 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:before,
\t\t.megamenu-type-25 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:after,
\t\t.megamenu-type-25 .slideshow-modules .vertical:hover .megamenuToogle-wrapper:before,
\t\t.common-home.show-vertical-megamenu.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\t.common-home.show-vertical-megamenu.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\t.common-home.show-vertical-megamenu.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\t.common-home.show-vertical-megamenu.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\t.common-home.show-vertical-megamenu.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\t.common-home.show-vertical-megamenu.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\t.common-home.show-vertical-megamenu.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\t.common-home.show-vertical-megamenu.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\t.common-home.show-vertical-megamenu.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\t.common-home.show-vertical-megamenu.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\t.common-home.show-vertical-megamenu.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\t.common-home.show-vertical-megamenu.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\t.common-home.show-vertical-megamenu.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\t.common-home.show-vertical-megamenu.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\t.common-home.show-vertical-megamenu.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\t.common-home.show-vertical-megamenu.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\t.common-home.show-vertical-megamenu.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\t.common-home.show-vertical-megamenu.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper:before {
\t\t     background: ";
                    // line 1636
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_bullet_color"], "method", false, false, false, 1636);
                    echo ";
\t\t}
\t\t";
                }
                // line 1638
                echo " 
\t\t
\t\t";
                // line 1640
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_color"], "method", false, false, false, 1640) != "")) {
                    echo " 
\t\t#main .vertical:hover .megamenuToogle-wrapper,
\t\t.common-home.show-vertical-megamenu #main .megamenu-background .vertical .megamenuToogle-wrapper,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page #main .megamenu-background .vertical .megamenuToogle-wrapper,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page #main .megamenu-background .vertical .megamenuToogle-wrapper,
\t\t.common-home.show-vertical-megamenu #main .slideshow-modules .vertical .megamenuToogle-wrapper {
\t\t\tbackground-color: ";
                    // line 1646
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_color"], "method", false, false, false, 1646);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 1648
                echo " 
\t\t
\t\t";
                // line 1650
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1650) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1650) != ""))) {
                    echo " 
\t\t#main .vertical:hover .megamenuToogle-wrapper,
\t\t.common-home.show-vertical-megamenu #main .megamenu-background .vertical .megamenuToogle-wrapper,
\t\tbody[class*=\"product-category-\"].show-vertical-megamenu-category-page #main .megamenu-background .vertical .megamenuToogle-wrapper,
\t\tbody[class*=\"product-product-\"].show-vertical-megamenu-product-page #main .megamenu-background .vertical .megamenuToogle-wrapper,
\t\t.common-home.show-vertical-megamenu #main .slideshow-modules .vertical .megamenuToogle-wrapper {
\t\t\tbackground: ";
                    // line 1656
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1656);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 1657
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1657);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1657);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1657);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 1658
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1658);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1658);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1658);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 1659
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1659);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1659);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1659);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 1660
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1660);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1660);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1660);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 1661
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1661);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1661);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1661);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 1662
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1662);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1662);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1662);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 1664
                echo " 
\t\t
\t\t";
                // line 1666
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_background_color"], "method", false, false, false, 1666) != "")) {
                    echo " 
\t\t#main .vertical .megamenu-wrapper {
\t\t\tbackground-color: ";
                    // line 1668
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_background_color"], "method", false, false, false, 1668);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 1670
                echo " 
\t\t
\t\t";
                // line 1672
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_border_color"], "method", false, false, false, 1672) != "")) {
                    echo " 
\t\t#main .vertical ul.megamenu > li {
\t\t\tborder-color: ";
                    // line 1674
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_border_color"], "method", false, false, false, 1674);
                    echo ";
\t\t}
\t\t";
                }
                // line 1676
                echo " 
\t\t
\t\t";
                // line 1678
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_border2_color"], "method", false, false, false, 1678) != "")) {
                    echo " 
\t\t#main .vertical .megamenu-wrapper {
\t\t\tborder: 1px solid ";
                    // line 1680
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_border2_color"], "method", false, false, false, 1680);
                    echo ";
\t\t\tborder-top: none;
\t\t}
\t\t";
                }
                // line 1683
                echo " 
\t\t
\t\t";
                // line 1685
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_border3_color"], "method", false, false, false, 1685) != "")) {
                    echo " 
\t\t#main .vertical .megamenu-wrapper {
\t\t\tborder: 2px solid ";
                    // line 1687
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_border3_color"], "method", false, false, false, 1687);
                    echo ";
\t\t\tborder-top: none;
\t\t}
\t\t";
                }
                // line 1690
                echo " 
\t\t
\t\t";
                // line 1692
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_links_color"], "method", false, false, false, 1692) != "")) {
                    echo " 
\t\t#main .vertical ul.megamenu > li > a {
\t\t\tcolor: ";
                    // line 1694
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_links_color"], "method", false, false, false, 1694);
                    echo ";
\t\t}
\t\t";
                }
                // line 1696
                echo " 
\t\t
\t\t";
                // line 1698
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_links_hover_color"], "method", false, false, false, 1698) != "")) {
                    echo " 
\t\t#main .vertical ul.megamenu > li:hover > a,
\t\t#main .vertical ul.megamenu > li.active > a {
\t\t\tcolor: ";
                    // line 1701
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_links_hover_color"], "method", false, false, false, 1701);
                    echo ";
\t\t}
\t\t";
                }
                // line 1703
                echo " 
\t\t
\t\t";
                // line 1705
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_links_hover_background_color"], "method", false, false, false, 1705) != "")) {
                    echo " 
\t\t#main .vertical ul.megamenu > li:hover {
\t\t\tbackground: ";
                    // line 1707
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_links_hover_background_color"], "method", false, false, false, 1707);
                    echo ";
\t\t}
\t\t";
                }
                // line 1709
                echo " 
\t\t
\t\t";
                // line 1711
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_bullet_color"], "method", false, false, false, 1711) != "")) {
                    echo " 
\t\t#main .vertical ul.megamenu > li.with-sub-menu > a:before,
\t\t#main .vertical ul.megamenu > li.with-sub-menu > a:after {
\t\t\tcolor: ";
                    // line 1714
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_bullet_color"], "method", false, false, false, 1714);
                    echo ";
\t\t}
\t\t";
                }
                // line 1716
                echo " 
\t\t
\t\t";
                // line 1718
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_bullet_hover_color"], "method", false, false, false, 1718) != "")) {
                    echo " 
\t\t#main .vertical ul.megamenu > li.with-sub-menu:hover > a:before,
\t\t#main .vertical ul.megamenu > li.with-sub-menu:hover > a:after {
\t\t\tcolor: ";
                    // line 1721
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "vertical_menu_content_bullet_hover_color"], "method", false, false, false, 1721);
                    echo ";
\t\t}
\t\t";
                }
                // line 1723
                echo " 
\t\t
\t\t";
                // line 1725
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_background_color"], "method", false, false, false, 1725) != "")) {
                    echo " 
\t\tul.megamenu li .sub-menu .content,
\t\tul.megamenu li .sub-menu .content .hover-menu .menu ul ul {
\t\t\tbackground: ";
                    // line 1728
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_background_color"], "method", false, false, false, 1728);
                    echo ";
\t\t}
\t\t
\t\tul.megamenu > li > .sub-menu > .content > .arrow:after {
\t\t     border-bottom-color: ";
                    // line 1732
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_background_color"], "method", false, false, false, 1732);
                    echo ";
\t\t}
\t\t
\t\t.vertical ul.megamenu > li > .sub-menu > .content > .arrow:after,
\t\tul.megamenu li .sub-menu .content .hover-menu .menu ul ul:after {
\t\t     border-right-color: ";
                    // line 1737
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_background_color"], "method", false, false, false, 1737);
                    echo ";
\t\t}
\t\t
\t\t     .rtl ul.megamenu li .sub-menu .content .hover-menu .menu ul ul:after,
\t\t     .rtl .vertical ul.megamenu > li > .sub-menu > .content > .arrow:after {
\t\t          border-left-color: ";
                    // line 1742
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_background_color"], "method", false, false, false, 1742);
                    echo ";
\t\t     }
\t\t
\t\t@media (max-width: 767px) {
\t\t     .responsive ul.megamenu li .sub-menu .content .hover-menu .menu ul li a,
\t\t     .responsive ul.megamenu li .sub-menu .content .static-menu .menu ul li a,
\t\t     .responsive ul.megamenu li .sub-menu .content .hover-menu .menu ul li a:hover,
\t\t     .responsive ul.megamenu li .sub-menu .content .static-menu .menu ul li a:hover,
\t\t     .responsive ul.megamenu li .sub-menu .content .hover-menu .menu ul li.active > a,
\t\t     .responsive ul.megamenu li .sub-menu .content .static-menu .menu ul li.active > a {
\t\t          background: ";
                    // line 1752
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_background_color"], "method", false, false, false, 1752);
                    echo ";
\t\t     }
\t\t     
\t\t     .responsive ul.megamenu li .sub-menu .content .hover-menu .menu ul li, 
\t\t     .responsive ul.megamenu li .sub-menu .content .static-menu .menu ul li,
\t\t     .responsive ul.megamenu .sub-menu .content .row > div {
\t\t          border-top-color: rgba(120,120,120,0.15);
\t\t     }
\t\t}
\t\t";
                }
                // line 1761
                echo " 
\t\t
\t\t";
                // line 1763
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_text_color"], "method", false, false, false, 1763) != "")) {
                    echo " 
\t\tul.megamenu li .sub-menu .content {
\t\t\tcolor: ";
                    // line 1765
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_text_color"], "method", false, false, false, 1765);
                    echo ";
\t\t}
\t\t";
                }
                // line 1767
                echo " 
\t\t
\t\t";
                // line 1769
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_links_color"], "method", false, false, false, 1769) != "")) {
                    echo " 
\t\tul.megamenu li .sub-menu .content a {
\t\t\tcolor: ";
                    // line 1771
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_links_color"], "method", false, false, false, 1771);
                    echo ";
\t\t}
\t\t";
                }
                // line 1773
                echo " 
\t\t
\t\t";
                // line 1775
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_links_hover_color"], "method", false, false, false, 1775) != "")) {
                    echo " 
\t\tul.megamenu li .sub-menu .content a:hover,
\t\tul.megamenu li .sub-menu .content .hover-menu .menu ul li:hover > a {
\t\t\tcolor: ";
                    // line 1778
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_links_hover_color"], "method", false, false, false, 1778);
                    echo ";
\t\t}
\t\t";
                }
                // line 1780
                echo " 
\t\t
\t\t";
                // line 1782
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_bullets_color"], "method", false, false, false, 1782) != "")) {
                    echo " 
\t\tul.megamenu li .sub-menu .content .hover-menu a.with-submenu:before {
\t\t\tcolor: ";
                    // line 1784
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_bullets_color"], "method", false, false, false, 1784);
                    echo ";
\t\t}
\t\t";
                }
                // line 1786
                echo " 
\t\t
\t\t";
                // line 1788
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_bullets_hover_color"], "method", false, false, false, 1788) != "")) {
                    echo " 
\t\tul.megamenu li .sub-menu .content .hover-menu a.with-submenu:after,
\t\tul.megamenu li .sub-menu .content .hover-menu li:hover > a.with-submenu:before {
\t\t\tcolor: ";
                    // line 1791
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_bullets_hover_color"], "method", false, false, false, 1791);
                    echo ";
\t\t}
\t\t";
                }
                // line 1793
                echo " 
\t\t
\t\t";
                // line 1795
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_main_links_in_visible_type_color"], "method", false, false, false, 1795) != "")) {
                    echo " 
\t\tul.megamenu li .sub-menu .content .static-menu a.main-menu{
\t\t\tcolor: ";
                    // line 1797
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_main_links_in_visible_type_color"], "method", false, false, false, 1797);
                    echo ";
\t\t}
\t\t";
                }
                // line 1799
                echo " 
\t\t
\t\t";
                // line 1801
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_main_links_hover_in_visible_type_color"], "method", false, false, false, 1801) != "")) {
                    echo " 
\t\tul.megamenu li .sub-menu .content .static-menu a.main-menu:hover {
\t\t\tcolor: ";
                    // line 1803
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_main_links_hover_in_visible_type_color"], "method", false, false, false, 1803);
                    echo ";
\t\t}
\t\t";
                }
                // line 1805
                echo " 
\t\t
\t\t";
                // line 1807
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_main_links_in_visible_type_border_bottom_color"], "method", false, false, false, 1807) != "")) {
                    echo " 
\t\tul.megamenu li .sub-menu .content .static-menu a.main-menu:after {
\t\t\tbackground: ";
                    // line 1809
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "submenu_main_links_in_visible_type_border_bottom_color"], "method", false, false, false, 1809);
                    echo ";
\t\t}
\t\t";
                }
                // line 1811
                echo " 
\t\t
\t\t";
                // line 1813
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_color"], "method", false, false, false, 1813) != "")) {
                    echo " 
\t\t.megamenuToogle-wrapper {
\t\t\tbackground-color: ";
                    // line 1815
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_color"], "method", false, false, false, 1815);
                    echo ";
\t\t}
\t\t
\t\t     @media (max-width: 991px) {
\t\t          .responsive .standard-body .full-width .megamenu-background .megaMenuToggle:before {
\t\t               background-color: ";
                    // line 1820
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_color"], "method", false, false, false, 1820);
                    echo ";
\t\t          }
\t\t     }
\t\t";
                }
                // line 1823
                echo " 
\t\t
\t\t";
                // line 1825
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_top_color"], "method", false, false, false, 1825) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1825) != ""))) {
                    echo " 
\t\t.megamenuToogle-wrapper {
\t\t\tbackground: ";
                    // line 1827
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1827);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 1828
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1828);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_top_color"], "method", false, false, false, 1828);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1828);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 1829
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1829);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_top_color"], "method", false, false, false, 1829);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1829);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 1830
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1830);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_top_color"], "method", false, false, false, 1830);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1830);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 1831
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1831);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_top_color"], "method", false, false, false, 1831);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1831);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 1832
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1832);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_top_color"], "method", false, false, false, 1832);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1832);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 1833
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1833);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_top_color"], "method", false, false, false, 1833);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1833);
                    echo " 99%); /* W3C */
\t\t}
\t\t
\t\t     ";
                    // line 1836
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "megamenu_type"], "method", false, false, false, 1836) == "26")) {
                        echo " 
\t\t          .megamenuToogle-wrapper {
\t\t          \tbackground: ";
                        // line 1838
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_top_color"], "method", false, false, false, 1838);
                        echo "; /* Old browsers */
\t\t          \tbackground: -moz-linear-gradient(top,  ";
                        // line 1839
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_top_color"], "method", false, false, false, 1839);
                        echo " 50%, ";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1839);
                        echo " 100%); /* FF3.6+ */
\t\t          \tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(50%,";
                        // line 1840
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_top_color"], "method", false, false, false, 1840);
                        echo "), color-stop(100%,";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1840);
                        echo ")); /* Chrome,Safari4+ */
\t\t          \tbackground: -webkit-linear-gradient(top,  ";
                        // line 1841
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_top_color"], "method", false, false, false, 1841);
                        echo " 50%,";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1841);
                        echo " 100%); /* Chrome10+,Safari5.1+ */
\t\t          \tbackground: -o-linear-gradient(top,  ";
                        // line 1842
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_top_color"], "method", false, false, false, 1842);
                        echo " 50%,";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1842);
                        echo " 100%); /* Opera 11.10+ */
\t\t          \tbackground: -ms-linear-gradient(top,  ";
                        // line 1843
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_top_color"], "method", false, false, false, 1843);
                        echo " 50%,";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1843);
                        echo " 100%); /* IE10+ */
\t\t          \tbackground: linear-gradient(to bottom,  ";
                        // line 1844
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_top_color"], "method", false, false, false, 1844);
                        echo " 50%,";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_background_gradient_bottom_color"], "method", false, false, false, 1844);
                        echo " 100%); /* W3C */
\t\t          }
\t\t     ";
                    }
                    // line 1846
                    echo " 
\t\t";
                }
                // line 1847
                echo " 
\t\t
\t\t";
                // line 1849
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_text_color"], "method", false, false, false, 1849) != "")) {
                    echo " 
\t\t.megamenuToogle-wrapper .container {
\t\t\tcolor: ";
                    // line 1851
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_text_color"], "method", false, false, false, 1851);
                    echo ";
\t\t}
\t\t";
                }
                // line 1853
                echo " 
\t\t
\t\t";
                // line 1855
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_bullet_color"], "method", false, false, false, 1855) != "")) {
                    echo " 
\t\t.megamenuToogle-wrapper .container > div span {
\t\t\tbackground: ";
                    // line 1857
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_bullet_color"], "method", false, false, false, 1857);
                    echo ";
\t\t}
\t\t";
                }
                // line 1859
                echo " 
\t\t
\t\t";
                // line 1861
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_color"], "method", false, false, false, 1861) != "")) {
                    echo " 
\t\t.megamenuToogle-wrapper:hover,
\t\t.active .megamenuToogle-wrapper {
\t\t\tbackground-color: ";
                    // line 1864
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_color"], "method", false, false, false, 1864);
                    echo ";
\t\t}
\t\t";
                }
                // line 1866
                echo " 
\t\t
\t\t";
                // line 1868
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1868) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1868) != ""))) {
                    echo " 
\t\t.megamenuToogle-wrapper:hover,
\t\t.active .megamenuToogle-wrapper {
\t\t\tbackground: ";
                    // line 1871
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1871);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 1872
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1872);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1872);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1872);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 1873
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1873);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1873);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1873);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 1874
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1874);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1874);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1874);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 1875
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1875);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1875);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1875);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 1876
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1876);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1876);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1876);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 1877
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1877);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1877);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1877);
                    echo " 99%); /* W3C */
\t\t}
\t\t
\t\t     ";
                    // line 1880
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "megamenu_type"], "method", false, false, false, 1880) == "26")) {
                        echo " 
\t\t          .megamenuToogle-wrapper:hover,
\t\t          .active .megamenuToogle-wrapper {
\t\t          \tbackground: ";
                        // line 1883
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1883);
                        echo "; /* Old browsers */
\t\t          \tbackground: -moz-linear-gradient(top,  ";
                        // line 1884
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1884);
                        echo " 50%, ";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1884);
                        echo " 100%); /* FF3.6+ */
\t\t          \tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(50%,";
                        // line 1885
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1885);
                        echo "), color-stop(100%,";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1885);
                        echo ")); /* Chrome,Safari4+ */
\t\t          \tbackground: -webkit-linear-gradient(top,  ";
                        // line 1886
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1886);
                        echo " 50%,";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1886);
                        echo " 100%); /* Chrome10+,Safari5.1+ */
\t\t          \tbackground: -o-linear-gradient(top,  ";
                        // line 1887
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1887);
                        echo " 50%,";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1887);
                        echo " 100%); /* Opera 11.10+ */
\t\t          \tbackground: -ms-linear-gradient(top,  ";
                        // line 1888
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1888);
                        echo " 50%,";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1888);
                        echo " 100%); /* IE10+ */
\t\t          \tbackground: linear-gradient(to bottom,  ";
                        // line 1889
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_top_color"], "method", false, false, false, 1889);
                        echo " 50%,";
                        echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_background_gradient_bottom_color"], "method", false, false, false, 1889);
                        echo " 100%); /* W3C */
\t\t          }
\t\t     ";
                    }
                    // line 1891
                    echo " 
\t\t";
                }
                // line 1892
                echo " 
\t\t
\t\t";
                // line 1894
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_text_color"], "method", false, false, false, 1894) != "")) {
                    echo " 
\t\t.megamenuToogle-wrapper:hover .container,
\t\t.active .megamenuToogle-wrapper .container {
\t\t\tcolor: ";
                    // line 1897
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_text_color"], "method", false, false, false, 1897);
                    echo ";
\t\t}
\t\t";
                }
                // line 1899
                echo " 
\t\t
\t\t";
                // line 1901
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_bullet_color"], "method", false, false, false, 1901) != "")) {
                    echo " 
\t\t.megamenuToogle-wrapper:hover .container > div span,
\t\t.active .megamenuToogle-wrapper .container > div span {
\t\t\tbackground: ";
                    // line 1904
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_heading_hover_bullet_color"], "method", false, false, false, 1904);
                    echo ";
\t\t}
\t\t";
                }
                // line 1906
                echo " 
\t\t
\t\t";
                // line 1908
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_content_background_color"], "method", false, false, false, 1908) != "")) {
                    echo " 
\t\t@media (max-width: 991px) {
     \t\t.responsive .horizontal .megamenu-wrapper {
     \t\t\tbackground: ";
                    // line 1911
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_content_background_color"], "method", false, false, false, 1911);
                    echo " !important;
     \t\t}
\t\t}
\t\t";
                }
                // line 1914
                echo " 
\t\t
\t\t";
                // line 1916
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_content_border_color"], "method", false, false, false, 1916) != "")) {
                    echo " 
\t\t@media (max-width: 991px) {
\t\t\t.responsive .horizontal .megamenu-wrapper {
\t\t\t\tborder: 1px solid ";
                    // line 1919
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_content_border_color"], "method", false, false, false, 1919);
                    echo " !important;
\t\t\t\tborder-top: none !important;
\t\t\t}
\t\t}
\t\t";
                }
                // line 1923
                echo " 
\t\t
\t\t";
                // line 1925
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_content_link_color"], "method", false, false, false, 1925) != "")) {
                    echo " 
\t\t@media (max-width: 991px) {
\t\t\t.responsive .horizontal ul.megamenu > li > a {
\t\t\t\tcolor: ";
                    // line 1928
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_content_link_color"], "method", false, false, false, 1928);
                    echo " !important;
\t\t\t}
\t\t}
\t\t";
                }
                // line 1931
                echo " 
\t\t
\t\t";
                // line 1933
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_content_link_active_color"], "method", false, false, false, 1933) != "")) {
                    echo " 
\t\t@media (max-width: 991px) {
\t\t\t.responsive .horizontal ul.megamenu > li:hover > a,
\t\t\t.responsive .horizontal ul.megamenu > li.active > a {
\t\t\t\tcolor: ";
                    // line 1937
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_content_link_active_color"], "method", false, false, false, 1937);
                    echo " !important;
\t\t\t}
\t\t}
\t\t";
                }
                // line 1940
                echo " 
\t\t
\t\t";
                // line 1942
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_content_link_border_top_color"], "method", false, false, false, 1942) != "")) {
                    echo " 
\t\t@media (max-width: 991px) {
\t\t\t.responsive .horizontal ul.megamenu > li {
\t\t\t\tborder-top-color: ";
                    // line 1945
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_content_link_border_top_color"], "method", false, false, false, 1945);
                    echo " !important;
\t\t\t}
\t\t}
\t\t";
                }
                // line 1948
                echo " 
\t\t
\t\t";
                // line 1950
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_content_link_hover_background_color"], "method", false, false, false, 1950) != "")) {
                    echo " 
\t\t@media (max-width: 991px) {
\t\t\t.responsive ul.megamenu > li:hover,
\t\t\t.responsive ul.megamenu > li.active {
\t\t\t\tbackground: ";
                    // line 1954
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_content_link_hover_background_color"], "method", false, false, false, 1954);
                    echo " !important;
\t\t\t}
\t\t}
\t\t";
                }
                // line 1957
                echo " 
\t\t
\t\t";
                // line 1959
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_content_plus_minus_color"], "method", false, false, false, 1959) != "")) {
                    echo " 
\t\t@media (max-width: 991px) {
\t\t\t.responsive ul.megamenu > li.with-sub-menu .open-menu,
\t\t\t.responsive ul.megamenu > li.with-sub-menu .close-menu {
\t\t\t\tcolor: ";
                    // line 1963
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_content_plus_minus_color"], "method", false, false, false, 1963);
                    echo " !important;
\t\t\t}
\t\t}
\t\t";
                }
                // line 1966
                echo " 
\t\t
\t\t";
                // line 1968
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "horizontal_type_2_menu_background_color"], "method", false, false, false, 1968) != "")) {
                    echo " 
\t\t.horizontal-type-2 {
\t\t\tbackground: ";
                    // line 1970
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "horizontal_type_2_menu_background_color"], "method", false, false, false, 1970);
                    echo ";
\t\t}
\t\t";
                }
                // line 1972
                echo " 
\t\t
\t\t";
                // line 1974
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "horizontal_type_2_menu_links_color"], "method", false, false, false, 1974) != "")) {
                    echo " 
\t\t.horizontal-type-2 ul.megamenu > li > a strong {
\t\t\tcolor: ";
                    // line 1976
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "horizontal_type_2_menu_links_color"], "method", false, false, false, 1976);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 1978
                echo " 
\t\t
\t\t";
                // line 1980
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "horizontal_type_2_menu_bullet_color"], "method", false, false, false, 1980) != "")) {
                    echo " 
\t\t.horizontal-type-2 ul.megamenu > li > a strong:after {
\t\t\tcolor: ";
                    // line 1982
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "horizontal_type_2_menu_bullet_color"], "method", false, false, false, 1982);
                    echo " !important;
\t\t}
\t\t     @media (max-width: 991px) {
     \t\t     .responsive .horizontal-type-2 ul.megamenu > li.with-sub-menu .open-menu, 
     \t\t     .responsive .horizontal-type-2 ul.megamenu > li.with-sub-menu .close-menu {
     \t\t          color: ";
                    // line 1987
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "horizontal_type_2_menu_bullet_color"], "method", false, false, false, 1987);
                    echo " !important;
     \t\t     }
\t\t     }
\t\t";
                }
                // line 1990
                echo " 
\t\t
\t\t";
                // line 1992
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "horizontal_type_2_menu_links_hover_color"], "method", false, false, false, 1992) != "")) {
                    echo " 
\t\t.horizontal-type-2 ul.megamenu > li:hover > a strong,
\t\t.horizontal-type-2 ul.megamenu > li.active > a strong {
\t\t\tcolor: ";
                    // line 1995
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "horizontal_type_2_menu_links_hover_color"], "method", false, false, false, 1995);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 1997
                echo " 
\t\t
\t\t";
                // line 1999
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "horizontal_type_2_menu_bullet_hover_color"], "method", false, false, false, 1999) != "")) {
                    echo " 
\t\t.horizontal-type-2 ul.megamenu > li:hover > a strong:after,
\t\t.horizontal-type-2 ul.megamenu > li.active > a strong:after {
\t\t\tcolor: ";
                    // line 2002
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "horizontal_type_2_menu_bullet_hover_color"], "method", false, false, false, 2002);
                    echo " !important;
\t\t}
\t\t     
\t\t     @media (max-width: 991px) {
\t\t          .responsive .horizontal-type-2 ul.megamenu > li.with-sub-menu .close-menu {
\t\t               color: ";
                    // line 2007
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "horizontal_type_2_menu_bullet_color"], "method", false, false, false, 2007);
                    echo " !important;
\t\t          }
\t\t     }
\t\t";
                }
                // line 2010
                echo " 
\t\t
\t\t";
                // line 2012
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_background_color"], "method", false, false, false, 2012) != "")) {
                    echo " 
\t\t#main .breadcrumb .background {
\t\t\tbackground: ";
                    // line 2014
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_background_color"], "method", false, false, false, 2014);
                    echo ";
\t\t}
\t\t";
                }
                // line 2016
                echo " 
\t\t
\t\t";
                // line 2018
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_border_bottom_color"], "method", false, false, false, 2018) != "")) {
                    echo " 
\t\t#main .breadcrumb .background {
\t\t\tborder-bottom: 1px solid ";
                    // line 2020
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_border_bottom_color"], "method", false, false, false, 2020);
                    echo ";
\t\t\tbackground-image: none;
\t\t}
\t\t";
                }
                // line 2023
                echo " 
\t\t
\t\t";
                // line 2025
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_border_bottom_4px_color"], "method", false, false, false, 2025) != "")) {
                    echo " 
\t\t#main .breadcrumb .background {
\t\t\tborder-bottom: 4px solid ";
                    // line 2027
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_border_bottom_4px_color"], "method", false, false, false, 2027);
                    echo ";
\t\t\tbackground-image: none;
\t\t}
\t\t";
                }
                // line 2030
                echo " 
\t\t
\t\t";
                // line 2032
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_border_top_color"], "method", false, false, false, 2032) != "")) {
                    echo " 
\t\t#main .breadcrumb .background {
\t\t\tborder-top: 1px solid ";
                    // line 2034
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_border_top_color"], "method", false, false, false, 2034);
                    echo ";
\t\t\tbackground-image: none;
\t\t}
\t\t";
                }
                // line 2037
                echo " 
\t\t
\t\t";
                // line 2039
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_heading_color"], "method", false, false, false, 2039) != "")) {
                    echo " 
\t\t.breadcrumb .container h1 {
\t\t\tcolor: ";
                    // line 2041
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_heading_color"], "method", false, false, false, 2041);
                    echo ";
\t\t}
\t\t";
                }
                // line 2043
                echo " 
\t\t
\t\t";
                // line 2045
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_heading_border_bottom_color"], "method", false, false, false, 2045) != "")) {
                    echo " 
\t\t.breadcrumb .container h1 {
\t\t\tborder-bottom-color: ";
                    // line 2047
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_heading_border_bottom_color"], "method", false, false, false, 2047);
                    echo ";
\t\t}
\t\t";
                }
                // line 2049
                echo " 
\t\t
\t\t";
                // line 2051
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_links_color"], "method", false, false, false, 2051) != "")) {
                    echo " 
\t\t.breadcrumb ul,
\t\t.breadcrumb ul a {
\t\t\tcolor: ";
                    // line 2054
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_links_color"], "method", false, false, false, 2054);
                    echo ";
\t\t}
\t\t";
                }
                // line 2056
                echo " 
\t\t
\t\t";
                // line 2058
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_links_hover_color"], "method", false, false, false, 2058) != "")) {
                    echo " 
\t\t.breadcrumb ul a:hover {
\t\t\tcolor: ";
                    // line 2060
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_links_hover_color"], "method", false, false, false, 2060);
                    echo ";
\t\t}
\t\t";
                }
                // line 2062
                echo " 
\t\t
\t\t";
                // line 2064
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_price_color"], "method", false, false, false, 2064) != "")) {
                    echo " 
\t\t.next-product .right .price {
\t\t\tcolor: ";
                    // line 2066
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_price_color"], "method", false, false, false, 2066);
                    echo ";
\t\t}
\t\t";
                }
                // line 2068
                echo " 
\t\t
\t\t";
                // line 2070
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_button_background_color"], "method", false, false, false, 2070) != "")) {
                    echo " 
\t\t.button-previous-next,
\t\t.next-product {
\t\t\tbackground: ";
                    // line 2073
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_button_background_color"], "method", false, false, false, 2073);
                    echo ";
\t\t}
\t\t";
                }
                // line 2075
                echo " 
\t\t
\t\t";
                // line 2077
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_button_border_color"], "method", false, false, false, 2077) != "")) {
                    echo " 
\t\t.button-previous-next,
\t\t.next-product {
\t\t\tborder-color: ";
                    // line 2080
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_button_border_color"], "method", false, false, false, 2080);
                    echo ";
\t\t}
\t\t";
                }
                // line 2082
                echo " 
\t\t
\t\t";
                // line 2084
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_button_text_color"], "method", false, false, false, 2084) != "")) {
                    echo " 
\t\t.button-previous-next {
\t\t\tcolor: ";
                    // line 2086
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_button_text_color"], "method", false, false, false, 2086);
                    echo ";
\t\t}
\t\t";
                }
                // line 2088
                echo " 
\t\t
\t\t";
                // line 2090
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_button_hover_background_color"], "method", false, false, false, 2090) != "")) {
                    echo " 
\t\t.button-previous-next:hover {
\t\t\tbackground: ";
                    // line 2092
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_button_hover_background_color"], "method", false, false, false, 2092);
                    echo ";
\t\t}
\t\t";
                }
                // line 2094
                echo " 
\t\t
\t\t";
                // line 2096
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_button_hover_border_color"], "method", false, false, false, 2096) != "")) {
                    echo " 
\t\t.button-previous-next:hover {
\t\t\tborder-color: ";
                    // line 2098
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_button_hover_border_color"], "method", false, false, false, 2098);
                    echo ";
\t\t}
\t\t";
                }
                // line 2100
                echo " 
\t\t
\t\t";
                // line 2102
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_button_hover_text_color"], "method", false, false, false, 2102) != "")) {
                    echo " 
\t\t.button-previous-next:hover {
\t\t\tcolor: ";
                    // line 2104
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "breadcrumb_button_hover_text_color"], "method", false, false, false, 2104);
                    echo ";
\t\t}
\t\t";
                }
                // line 2106
                echo " 
\t\t
\t\t";
                // line 2108
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_background_color"], "method", false, false, false, 2108) != "")) {
                    echo " 
\t\t#main .box-with-categories .box-content {
\t\t\tbackground: ";
                    // line 2110
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_background_color"], "method", false, false, false, 2110);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2112
                echo " 
\t\t
\t\t";
                // line 2114
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_border_color"], "method", false, false, false, 2114) != "")) {
                    echo " 
\t\t.box-with-categories .box-content {
\t\t\tborder: 2px solid ";
                    // line 2116
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_border_color"], "method", false, false, false, 2116);
                    echo " !important;
\t\t\tborder-top: none !important;
\t\t}
\t\t";
                }
                // line 2119
                echo " 
\t\t
\t\t";
                // line 2121
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_border_1px_color"], "method", false, false, false, 2121) != "")) {
                    echo " 
\t\t.box-with-categories .box-content {
\t\t\tborder: 1px solid ";
                    // line 2123
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_border_1px_color"], "method", false, false, false, 2123);
                    echo " !important;
\t\t\t
\t\t\t";
                    // line 2125
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_border_1px_color"], "method", false, false, false, 2125) == "#e5e5e5")) {
                        echo " 
\t\t\tborder-top: none !important;
\t\t\t";
                    }
                    // line 2127
                    echo " 
\t\t}
\t\t";
                }
                // line 2129
                echo " 
\t\t
\t\t";
                // line 2131
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_link_border_top_color"], "method", false, false, false, 2131) != "")) {
                    echo " 
\t\t.box-category > ul li {
\t\t\tborder-top-color: ";
                    // line 2133
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_link_border_top_color"], "method", false, false, false, 2133);
                    echo ";
\t\t}
\t\t";
                }
                // line 2135
                echo " 
\t\t
\t\t";
                // line 2137
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_links_color"], "method", false, false, false, 2137) != "")) {
                    echo " 
\t\t#main .box-category ul li > a {
\t\t\tcolor: ";
                    // line 2139
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_links_color"], "method", false, false, false, 2139);
                    echo ";
\t\t}
\t\t";
                }
                // line 2141
                echo " 
\t\t
\t\t";
                // line 2143
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_links_hover_color"], "method", false, false, false, 2143) != "")) {
                    echo " 
\t\t#main .box-category ul li > a:hover {
\t\t\tcolor: ";
                    // line 2145
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_links_hover_color"], "method", false, false, false, 2145);
                    echo ";
\t\t}
\t\t";
                }
                // line 2147
                echo " 
\t\t
\t\t";
                // line 2149
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_links_active_color"], "method", false, false, false, 2149) != "")) {
                    echo " 
\t\t#main .box-category ul li a.active {
\t\t\tcolor: ";
                    // line 2151
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_links_active_color"], "method", false, false, false, 2151);
                    echo ";
\t\t}
\t\t";
                }
                // line 2153
                echo " 
\t\t
\t\t";
                // line 2155
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_links_hover_background_color"], "method", false, false, false, 2155) != "")) {
                    echo " 
\t\t.box-category > ul li > a:hover, 
\t\t.box-category > ul li:hover > a, 
\t\t.box-category > ul li a.active {
\t\t\tbackground: ";
                    // line 2159
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_links_hover_background_color"], "method", false, false, false, 2159);
                    echo ";
\t\t}
\t\t";
                }
                // line 2161
                echo " 
\t\t
\t\t";
                // line 2163
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_bullet_color"], "method", false, false, false, 2163) != "")) {
                    echo " 
\t\t#main .box-category ul li .head a {
\t\t\tcolor: ";
                    // line 2165
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_bullet_color"], "method", false, false, false, 2165);
                    echo ";
\t\t}
\t\t";
                }
                // line 2167
                echo " 
\t\t
\t\t";
                // line 2169
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_color"], "method", false, false, false, 2169) != "")) {
                    echo " 
\t\t.box-with-categories .box-heading {
\t\t\tbackground: ";
                    // line 2171
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_color"], "method", false, false, false, 2171);
                    echo ";
\t\t}
\t\t";
                }
                // line 2173
                echo " 
\t\t
\t\t";
                // line 2175
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_top_color"], "method", false, false, false, 2175) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_bottom_color"], "method", false, false, false, 2175) != ""))) {
                    echo " 
\t\t.box-with-categories .box-heading {
\t\t\tbackground: ";
                    // line 2177
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_bottom_color"], "method", false, false, false, 2177);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 2178
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_bottom_color"], "method", false, false, false, 2178);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_top_color"], "method", false, false, false, 2178);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_bottom_color"], "method", false, false, false, 2178);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 2179
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_bottom_color"], "method", false, false, false, 2179);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_top_color"], "method", false, false, false, 2179);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_bottom_color"], "method", false, false, false, 2179);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 2180
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_bottom_color"], "method", false, false, false, 2180);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_top_color"], "method", false, false, false, 2180);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_bottom_color"], "method", false, false, false, 2180);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 2181
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_bottom_color"], "method", false, false, false, 2181);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_top_color"], "method", false, false, false, 2181);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_bottom_color"], "method", false, false, false, 2181);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 2182
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_bottom_color"], "method", false, false, false, 2182);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_top_color"], "method", false, false, false, 2182);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_bottom_color"], "method", false, false, false, 2182);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 2183
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_bottom_color"], "method", false, false, false, 2183);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_top_color"], "method", false, false, false, 2183);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_background_gradient_bottom_color"], "method", false, false, false, 2183);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 2185
                echo " 
\t\t
\t\t";
                // line 2187
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_text_color"], "method", false, false, false, 2187) != "")) {
                    echo " 
\t\t.box-with-categories .box-heading {
\t\t\tcolor: ";
                    // line 2189
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_categories_heading_text_color"], "method", false, false, false, 2189);
                    echo ";
\t\t}
\t\t";
                }
                // line 2191
                echo " 
\t\t
\t\t";
                // line 2193
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_background_color"], "method", false, false, false, 2193) != "")) {
                    echo " 
\t\t.box.box-with-products,
\t\t.product-filter,
\t\t.product-list, 
\t\t.center-column .product-grid,
\t\t#main .box .box-content.products,
\t\tbody #main .post .box.box-with-products .box-content,
\t\t.product-grid .product-hover .only-hover,
\t\t.product-grid-type-2 .product-grid .product:hover:before, 
\t\t.product-grid-type-3 .product-grid .product:hover:before, 
\t\t.product-grid-type-5 .product-grid .product:hover:before,
\t\t.product-info .product-image {
\t\t\tbackground-color: ";
                    // line 2205
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_background_color"], "method", false, false, false, 2205);
                    echo " !important;
\t\t}
\t\t
\t\t.product-grid .product:before {
\t\t     border-color: ";
                    // line 2209
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_border_color"], "method", false, false, false, 2209);
                    echo ";
\t\t}
\t\t
\t\t     ";
                    // line 2212
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_background_color"], "method", false, false, false, 2212) == "none")) {
                        echo " 
\t\t     .box.box-with-products,
\t\t     .product-filter,
\t\t     .product-list, 
\t\t     .center-column .product-grid,
\t\t     .box .box-content.products,
\t\t     .product-grid .product-hover .only-hover,
\t\t     .product-grid-type-2 .product-grid .product:hover:before, 
\t\t     .product-grid-type-3 .product-grid .product:hover:before, 
\t\t     .product-grid-type-5 .product-grid .product:hover:before {
\t\t     \tbackground: none !important;
\t\t     }
\t\t     
\t\t     .product-grid .product:before {
\t\t          border-color: transparent;
\t\t     }
\t\t     ";
                    }
                    // line 2228
                    echo " 
\t\t";
                }
                // line 2229
                echo " 
\t\t
\t\t";
                // line 2231
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_border_color"], "method", false, false, false, 2231) != "")) {
                    echo " 
\t\t.box-with-products .clear:before, 
\t\t.box-with-products .clear:after, 
\t\t.product-grid .product:before, 
\t\t.product-list > div:before, 
\t\t.product-list .desc:before,
\t\t.product-list .name-actions:before,
\t\t.center-column .product-grid:before, 
\t\t.center-column .product-grid:after, 
\t\t.product-grid > .row:before, 
\t\t.product-filter .list-options .limit:before, 
\t\t.product-filter .list-options .sort:before, 
\t\t.product-filter .options .product-compare:before {
\t\t\tbackground-color: ";
                    // line 2244
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_border_color"], "method", false, false, false, 2244);
                    echo ";
\t\t}
\t\t
\t\t.product-list {
\t\t     border-color: ";
                    // line 2248
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_border_color"], "method", false, false, false, 2248);
                    echo ";
\t\t}
\t\t
\t\t     @media (max-width: 767px) {
     \t\t     .responsive .product-grid .row > div.col-xs-6 .product:after {
     \t\t         background: ";
                    // line 2253
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_border_color"], "method", false, false, false, 2253);
                    echo ";
     \t\t     }
\t\t     }
\t\t     
\t\t     @media (max-width: 500px) {
     \t\t     .responsive #main .product-grid .row > div.col-xs-6 .product:after {
     \t\t         background: ";
                    // line 2259
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_border_color"], "method", false, false, false, 2259);
                    echo ";
     \t\t     }
\t\t     }
\t\t";
                }
                // line 2262
                echo " 
\t\t
\t\t";
                // line 2264
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_text_color"], "method", false, false, false, 2264) != "")) {
                    echo " 
\t\t.box.box-with-products,
\t\t.product-filter,
\t\t.product-list, 
\t\t.center-column .product-grid,
\t\t.box .box-content.products,
\t\t.product-grid .product-hover .only-hover,
\t\t.product-filter .list-options select {
\t\t\tcolor: ";
                    // line 2272
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_text_color"], "method", false, false, false, 2272);
                    echo ";
\t\t}
\t\t";
                }
                // line 2274
                echo " 
\t\t
\t\t";
                // line 2276
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_links_color"], "method", false, false, false, 2276) != "")) {
                    echo " 
\t\t.box.box-with-products a,
\t\t.product-filter a,
\t\t.product-list a, 
\t\t.center-column .product-grid a,
\t\t.box .box-content.products a,
\t\t.product-grid .product-hover .only-hover a {
\t\t\tcolor: ";
                    // line 2283
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_links_color"], "method", false, false, false, 2283);
                    echo ";
\t\t}
\t\t";
                }
                // line 2285
                echo " 
\t\t
\t\t";
                // line 2287
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_links_hover_color"], "method", false, false, false, 2287) != "")) {
                    echo " 
\t\t.box.box-with-products a:hover,
\t\t.product-filter a:hover,
\t\t.product-list a:hover, 
\t\t.center-column .product-grid a:hover,
\t\t.box .box-content.products a:hover,
\t\t.product-grid .product-hover .only-hover a:hover {
\t\t\tcolor: ";
                    // line 2294
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_links_hover_color"], "method", false, false, false, 2294);
                    echo ";
\t\t}
\t\t";
                }
                // line 2296
                echo " 
\t\t
\t\t";
                // line 2298
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_heading_color"], "method", false, false, false, 2298) != "")) {
                    echo " 
\t\t.box.box-with-products .box-heading {
\t\t\tcolor: ";
                    // line 2300
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_heading_color"], "method", false, false, false, 2300);
                    echo ";
\t\t}
\t\t";
                }
                // line 2302
                echo " 
\t\t
\t\t";
                // line 2304
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_heading_border_bottom_color"], "method", false, false, false, 2304) != "")) {
                    echo " 
\t\t.box.box-with-products .box-heading {
\t\t\tborder-bottom-color: ";
                    // line 2306
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_with_products_heading_border_bottom_color"], "method", false, false, false, 2306);
                    echo ";
\t\t}
\t\t";
                }
                // line 2308
                echo " 
\t\t
\t\t";
                // line 2310
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_color"], "method", false, false, false, 2310) != "")) {
                    echo " 
\t\t.box > .prev, 
\t\t.box > .next,
\t\t.product-info .thumbnails-carousel .owl-buttons .owl-prev, 
\t\t.product-info .thumbnails-carousel .owl-buttons .owl-next,
\t\tdiv.pagination-results ul li,
\t\t.tab-content .prev-button,
\t\t.tab-content .next-button {
\t\t\tbackground: ";
                    // line 2318
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_color"], "method", false, false, false, 2318);
                    echo ";
\t\t}
\t\t";
                }
                // line 2320
                echo " 
\t\t
\t\t";
                // line 2322
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_top_color"], "method", false, false, false, 2322) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_bottom_color"], "method", false, false, false, 2322) != ""))) {
                    echo " 
\t\t.box > .prev, 
\t\t.box > .next,
\t\t.product-info .thumbnails-carousel .owl-buttons .owl-prev, 
\t\t.product-info .thumbnails-carousel .owl-buttons .owl-next,
\t\tdiv.pagination-results ul li,
\t\t.tab-content .prev-button,
\t\t.tab-content .next-button {
\t\t\tbackground: ";
                    // line 2330
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_bottom_color"], "method", false, false, false, 2330);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 2331
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_bottom_color"], "method", false, false, false, 2331);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_top_color"], "method", false, false, false, 2331);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_bottom_color"], "method", false, false, false, 2331);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 2332
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_bottom_color"], "method", false, false, false, 2332);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_top_color"], "method", false, false, false, 2332);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_bottom_color"], "method", false, false, false, 2332);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 2333
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_bottom_color"], "method", false, false, false, 2333);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_top_color"], "method", false, false, false, 2333);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_bottom_color"], "method", false, false, false, 2333);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 2334
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_bottom_color"], "method", false, false, false, 2334);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_top_color"], "method", false, false, false, 2334);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_bottom_color"], "method", false, false, false, 2334);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 2335
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_bottom_color"], "method", false, false, false, 2335);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_top_color"], "method", false, false, false, 2335);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_bottom_color"], "method", false, false, false, 2335);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 2336
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_bottom_color"], "method", false, false, false, 2336);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_top_color"], "method", false, false, false, 2336);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_background_gradient_bottom_color"], "method", false, false, false, 2336);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 2338
                echo " 
\t\t
\t\t";
                // line 2340
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_text_color"], "method", false, false, false, 2340) != "")) {
                    echo " 
\t\t.box > .prev, 
\t\t.box > .next,
\t\t.product-info .thumbnails-carousel .owl-buttons .owl-prev, 
\t\t.product-info .thumbnails-carousel .owl-buttons .owl-next,
\t\tdiv.pagination-results ul li,
\t\t.tab-content .prev-button,
\t\t.tab-content .next-button {
\t\t\tcolor: ";
                    // line 2348
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_text_color"], "method", false, false, false, 2348);
                    echo ";
\t\t}
\t\t";
                }
                // line 2350
                echo " 
\t\t
\t\t";
                // line 2352
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_border_color"], "method", false, false, false, 2352) != "")) {
                    echo " 
\t\t.box > .prev, 
\t\t.box > .next,
\t\t.product-info .thumbnails-carousel .owl-buttons .owl-prev, 
\t\t.product-info .thumbnails-carousel .owl-buttons .owl-next,
\t\tdiv.pagination-results ul li,
\t\t.tab-content .prev-button,
\t\t.tab-content .next-button {
\t\t\tborder-color: ";
                    // line 2360
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_border_color"], "method", false, false, false, 2360);
                    echo ";
\t\t}
\t\t";
                }
                // line 2362
                echo " 
\t\t
\t\t";
                // line 2364
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_color"], "method", false, false, false, 2364) != "")) {
                    echo " 
\t\t.box > .prev:hover, 
\t\t.box > .next:hover,
\t\t.product-info .thumbnails-carousel .owl-buttons .owl-prev:hover, 
\t\t.product-info .thumbnails-carousel .owl-buttons .owl-next:hover,
\t\tdiv.pagination-results ul li:hover,
\t\t.tab-content .prev-button:hover,
\t\t.tab-content .next-button:hover {
\t\t\tbackground: ";
                    // line 2372
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_color"], "method", false, false, false, 2372);
                    echo ";
\t\t}
\t\t";
                }
                // line 2374
                echo " 
\t\t
\t\t";
                // line 2376
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_top_color"], "method", false, false, false, 2376) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_bottom_color"], "method", false, false, false, 2376) != ""))) {
                    echo " 
\t\t.box > .prev:hover, 
\t\t.box > .next:hover,
\t\t.product-info .thumbnails-carousel .owl-buttons .owl-prev:hover, 
\t\t.product-info .thumbnails-carousel .owl-buttons .owl-next:hover,
\t\tdiv.pagination-results ul li:hover,
\t\t.tab-content .prev-button:hover,
\t\t.tab-content .next-button:hover {
\t\t\tbackground: ";
                    // line 2384
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_bottom_color"], "method", false, false, false, 2384);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 2385
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_bottom_color"], "method", false, false, false, 2385);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_top_color"], "method", false, false, false, 2385);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_bottom_color"], "method", false, false, false, 2385);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 2386
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_bottom_color"], "method", false, false, false, 2386);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_top_color"], "method", false, false, false, 2386);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_bottom_color"], "method", false, false, false, 2386);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 2387
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_bottom_color"], "method", false, false, false, 2387);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_top_color"], "method", false, false, false, 2387);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_bottom_color"], "method", false, false, false, 2387);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 2388
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_bottom_color"], "method", false, false, false, 2388);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_top_color"], "method", false, false, false, 2388);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_bottom_color"], "method", false, false, false, 2388);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 2389
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_bottom_color"], "method", false, false, false, 2389);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_top_color"], "method", false, false, false, 2389);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_bottom_color"], "method", false, false, false, 2389);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 2390
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_bottom_color"], "method", false, false, false, 2390);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_top_color"], "method", false, false, false, 2390);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_background_gradient_bottom_color"], "method", false, false, false, 2390);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 2392
                echo " 
\t\t
\t\t";
                // line 2394
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_text_color"], "method", false, false, false, 2394) != "")) {
                    echo " 
\t\t.box > .prev:hover, 
\t\t.box > .next:hover,
\t\t.product-info .thumbnails-carousel .owl-buttons .owl-prev:hover, 
\t\t.product-info .thumbnails-carousel .owl-buttons .owl-next:hover,
\t\tdiv.pagination-results ul li:hover,
\t\t.tab-content .prev-button:hover,
\t\t.tab-content .next-button:hover {
\t\t\tcolor: ";
                    // line 2402
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_text_color"], "method", false, false, false, 2402);
                    echo ";
\t\t}
\t\t";
                }
                // line 2404
                echo " 
\t\t
\t\t";
                // line 2406
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_border_color"], "method", false, false, false, 2406) != "")) {
                    echo " 
\t\t.box > .prev:hover, 
\t\t.box > .next:hover,
\t\t.product-info .thumbnails-carousel .owl-buttons .owl-prev:hover, 
\t\t.product-info .thumbnails-carousel .owl-buttons .owl-next:hover,
\t\tdiv.pagination-results ul li:hover,
\t\t.tab-content .prev-button:hover,
\t\t.tab-content .next-button:hover {
\t\t\tborder-color: ";
                    // line 2414
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "box_button_hover_border_color"], "method", false, false, false, 2414);
                    echo ";
\t\t}
\t\t";
                }
                // line 2416
                echo " 
\t\t
\t\t";
                // line 2418
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "tabs_link_active"], "method", false, false, false, 2418) != "")) {
                    echo " 
\t\t.filter-product .filter-tabs ul > li.active > a, .filter-product .filter-tabs ul > li.active > a:hover, .filter-product .filter-tabs ul > li.active > a:focus, .htabs a.selected, .htabs a:hover {
\t\t\tcolor: ";
                    // line 2420
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "tabs_link_active"], "method", false, false, false, 2420);
                    echo ";
\t\t}
\t\t";
                }
                // line 2422
                echo " 
\t\t
\t\t";
                // line 2424
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "tabs_link_active_border_bottom_color"], "method", false, false, false, 2424) != "")) {
                    echo " 
\t\t.htabs a.selected:before,
\t\t.filter-product .filter-tabs ul > li.active > a:before {
\t\t\tbackground: ";
                    // line 2427
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "tabs_link_active_border_bottom_color"], "method", false, false, false, 2427);
                    echo ";
\t\t}
\t\t";
                }
                // line 2429
                echo " 
\t\t
\t\t";
                // line 2431
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "tabs_links_color"], "method", false, false, false, 2431) != "")) {
                    echo " 
\t\t.filter-product .filter-tabs ul > li > a,
\t\t.htabs a {
\t\t\tcolor: ";
                    // line 2434
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "tabs_links_color"], "method", false, false, false, 2434);
                    echo ";
\t\t}
\t\t";
                }
                // line 2436
                echo " 
\t\t
\t\t";
                // line 2438
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "category_wall_heading_border_bottom_color"], "method", false, false, false, 2438) != "")) {
                    echo " 
\t\t.categories-wall .category-wall h3 {
\t\t\tborder-bottom-color: ";
                    // line 2440
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "category_wall_heading_border_bottom_color"], "method", false, false, false, 2440);
                    echo ";
\t\t}
\t\t";
                }
                // line 2442
                echo " 
\t\t
\t\t";
                // line 2444
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "category_wall_button_background_color"], "method", false, false, false, 2444) != "")) {
                    echo " 
\t\t.categories-wall .category-wall .more-categories {
\t\t\tbackground: ";
                    // line 2446
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "category_wall_button_background_color"], "method", false, false, false, 2446);
                    echo ";
\t\t}
\t\t";
                }
                // line 2448
                echo " 
\t\t
\t\t";
                // line 2450
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "category_wall_button_border_color"], "method", false, false, false, 2450) != "")) {
                    echo " 
\t\t.categories-wall .category-wall .more-categories {
\t\t\tborder-color: ";
                    // line 2452
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "category_wall_button_border_color"], "method", false, false, false, 2452);
                    echo ";
\t\t}
\t\t";
                }
                // line 2454
                echo " 
\t\t
\t\t";
                // line 2456
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "category_wall_button_text_color"], "method", false, false, false, 2456) != "")) {
                    echo " 
\t\t.categories-wall .category-wall .more-categories {
\t\t\tcolor: ";
                    // line 2458
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "category_wall_button_text_color"], "method", false, false, false, 2458);
                    echo ";
\t\t}
\t\t";
                }
                // line 2460
                echo " 
\t\t
\t\t";
                // line 2462
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "category_wall_button_hover_background_color"], "method", false, false, false, 2462) != "")) {
                    echo " 
\t\t.categories-wall .category-wall .more-categories:hover {
\t\t\tbackground: ";
                    // line 2464
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "category_wall_button_hover_background_color"], "method", false, false, false, 2464);
                    echo ";
\t\t}
\t\t";
                }
                // line 2466
                echo " 
\t\t
\t\t";
                // line 2468
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "category_wall_button_hover_border_color"], "method", false, false, false, 2468) != "")) {
                    echo " 
\t\t.categories-wall .category-wall .more-categories:hover {
\t\t\tborder-color: ";
                    // line 2470
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "category_wall_button_hover_border_color"], "method", false, false, false, 2470);
                    echo ";
\t\t}
\t\t";
                }
                // line 2472
                echo " 
\t\t
\t\t";
                // line 2474
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "category_wall_button_hover_text_color"], "method", false, false, false, 2474) != "")) {
                    echo " 
\t\t.categories-wall .category-wall .more-categories:hover {
\t\t\tcolor: ";
                    // line 2476
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "category_wall_button_hover_text_color"], "method", false, false, false, 2476);
                    echo ";
\t\t}
\t\t";
                }
                // line 2478
                echo " 
\t\t
\t\t";
                // line 2480
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_heading_border_bottom_color"], "method", false, false, false, 2480) != "")) {
                    echo " 
\t\t.popup h4:after {
\t\t\tbackground: ";
                    // line 2482
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_heading_border_bottom_color"], "method", false, false, false, 2482);
                    echo ";
\t\t}
\t\t";
                }
                // line 2484
                echo " 
\t\t
\t\t";
                // line 2486
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_input_text_color"], "method", false, false, false, 2486) != "")) {
                    echo " 
\t\t.popup .newsletter input {
\t\t\tcolor: ";
                    // line 2488
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_input_text_color"], "method", false, false, false, 2488);
                    echo ";
\t\t}
\t\t
\t\t.popup .newsletter input::-webkit-input-placeholder { /* WebKit, Blink, Edge */
\t\t    color:    ";
                    // line 2492
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_input_text_color"], "method", false, false, false, 2492);
                    echo ";
\t\t}
\t\t
\t\t.popup .newsletter input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
\t\t   color:    ";
                    // line 2496
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_input_text_color"], "method", false, false, false, 2496);
                    echo ";
\t\t   opacity:  1;
\t\t}
\t\t
\t\t.popup .newsletter input::-moz-placeholder { /* Mozilla Firefox 19+ */
\t\t   color:    ";
                    // line 2501
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_input_text_color"], "method", false, false, false, 2501);
                    echo ";
\t\t   opacity:  1;
\t\t}
\t\t
\t\t.popup .newsletter input:-ms-input-placeholder { /* Internet Explorer 10-11 */
\t\t   color:    ";
                    // line 2506
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_input_text_color"], "method", false, false, false, 2506);
                    echo ";
\t\t}
\t\t";
                }
                // line 2508
                echo " 
\t\t
\t\t";
                // line 2510
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_input_background_color"], "method", false, false, false, 2510) != "")) {
                    echo " 
\t\t.popup .newsletter input {
\t\t\tbackground: ";
                    // line 2512
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_input_background_color"], "method", false, false, false, 2512);
                    echo ";
\t\t}
\t\t";
                }
                // line 2514
                echo " 
\t\t
\t\t";
                // line 2516
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_input_focus_background_color"], "method", false, false, false, 2516) != "")) {
                    echo " 
\t\t.popup .newsletter input:focus {
\t\t\tbackground: ";
                    // line 2518
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_input_focus_background_color"], "method", false, false, false, 2518);
                    echo ";
\t\t}
\t\t";
                }
                // line 2520
                echo " 
\t\t
\t\t";
                // line 2522
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_subscribe_button_text_color"], "method", false, false, false, 2522) != "")) {
                    echo " 
\t\t.popup .newsletter .subscribe {
\t\t\tcolor: ";
                    // line 2524
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_subscribe_button_text_color"], "method", false, false, false, 2524);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2526
                echo " 
\t\t
\t\t";
                // line 2528
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_subscribe_button_background_color"], "method", false, false, false, 2528) != "")) {
                    echo " 
\t\t.popup .newsletter .subscribe {
\t\t\tbackground: ";
                    // line 2530
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_subscribe_button_background_color"], "method", false, false, false, 2530);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2532
                echo " 
\t\t
\t\t";
                // line 2534
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_subscribe_button_hover_text_color"], "method", false, false, false, 2534) != "")) {
                    echo " 
\t\t.popup .newsletter .subscribe:hover {
\t\t\tcolor: ";
                    // line 2536
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_subscribe_button_hover_text_color"], "method", false, false, false, 2536);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2538
                echo " 
\t\t
\t\t";
                // line 2540
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_subscribe_button_hover_background_color"], "method", false, false, false, 2540) != "")) {
                    echo " 
\t\t.popup .newsletter .subscribe:hover {
\t\t\tbackground: ";
                    // line 2542
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_newsletter_subscribe_button_hover_background_color"], "method", false, false, false, 2542);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2544
                echo " 
\t\t
\t\t";
                // line 2546
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_close_button_background_color"], "method", false, false, false, 2546) != "")) {
                    echo " 
\t\tbody .popup-module .mfp-close {
\t\t\tbackground: ";
                    // line 2548
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_close_button_background_color"], "method", false, false, false, 2548);
                    echo ";
\t\t}
\t\t";
                }
                // line 2550
                echo " 
\t\t
\t\t";
                // line 2552
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_close_button_border_color"], "method", false, false, false, 2552) != "")) {
                    echo " 
\t\tbody .popup-module .mfp-close {
\t\t\tborder-color: ";
                    // line 2554
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_close_button_border_color"], "method", false, false, false, 2554);
                    echo ";
\t\t}
\t\t";
                }
                // line 2556
                echo " 
\t\t
\t\t";
                // line 2558
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_close_button_text_color"], "method", false, false, false, 2558) != "")) {
                    echo " 
\t\tbody .popup-module .mfp-close {
\t\t\tcolor: ";
                    // line 2560
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_close_button_text_color"], "method", false, false, false, 2560);
                    echo ";
\t\t}
\t\t";
                }
                // line 2562
                echo " 
\t\t
\t\t";
                // line 2564
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_close_button_hover_background_color"], "method", false, false, false, 2564) != "")) {
                    echo " 
\t\tbody .popup-module .mfp-close:hover {
\t\t\tbackground: ";
                    // line 2566
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_close_button_hover_background_color"], "method", false, false, false, 2566);
                    echo ";
\t\t}
\t\t";
                }
                // line 2568
                echo " 
\t\t
\t\t";
                // line 2570
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_close_button_hover_border_color"], "method", false, false, false, 2570) != "")) {
                    echo " 
\t\tbody .popup-module .mfp-close:hover {
\t\t\tborder-color: ";
                    // line 2572
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_close_button_hover_border_color"], "method", false, false, false, 2572);
                    echo ";
\t\t}
\t\t";
                }
                // line 2574
                echo " 
\t\t
\t\t";
                // line 2576
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_close_button_hover_text_color"], "method", false, false, false, 2576) != "")) {
                    echo " 
\t\tbody .popup-module .mfp-close:hover {
\t\t\tcolor: ";
                    // line 2578
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "popup_close_button_hover_text_color"], "method", false, false, false, 2578);
                    echo ";
\t\t}
\t\t";
                }
                // line 2580
                echo " 
\t\t
\t\t";
                // line 2582
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_background_color"], "method", false, false, false, 2582) != "")) {
                    echo " 
\t\t#slider .pattern {
\t\t\tbackground: ";
                    // line 2584
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_background_color"], "method", false, false, false, 2584);
                    echo ";
\t\t}
\t\t
\t\t.spinner {
\t\t     background-color: ";
                    // line 2588
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_background_color"], "method", false, false, false, 2588);
                    echo ";
\t\t}
\t\t";
                }
                // line 2590
                echo " 
\t\t
\t\t";
                // line 2592
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_loader_background_color"], "method", false, false, false, 2592) != "")) {
                    echo " 
\t\t.spinner {
\t\t     background-color: ";
                    // line 2594
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_loader_background_color"], "method", false, false, false, 2594);
                    echo ";
\t\t}
\t\t";
                }
                // line 2596
                echo " 
\t\t
\t\t";
                // line 2598
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_border_bottom_4px_color"], "method", false, false, false, 2598) != "")) {
                    echo " 
\t\t#slider .pattern {
\t\t\tborder-bottom: 4px solid ";
                    // line 2600
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_border_bottom_4px_color"], "method", false, false, false, 2600);
                    echo ";
\t\t}
\t\t";
                }
                // line 2602
                echo " 
\t\t
\t\t";
                // line 2604
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_buttons_background_color"], "method", false, false, false, 2604) != "")) {
                    echo " 
\t\t.camera_wrap .owl-controls .owl-buttons .owl-prev, .camera_wrap .owl-controls .owl-buttons .owl-next,
\t\t#main .tp-leftarrow.default,
\t\t#main .tp-rightarrow.default,
\t\t#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-prev,
\t\t#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-next {
\t\t\tbackground: ";
                    // line 2610
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_buttons_background_color"], "method", false, false, false, 2610);
                    echo ";
\t\t}
\t\t";
                }
                // line 2612
                echo " 
\t\t
\t\t";
                // line 2614
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_buttons_hover_background_color"], "method", false, false, false, 2614) != "")) {
                    echo " 
\t\t.camera_wrap .owl-controls .owl-buttons .owl-prev:hover, .camera_wrap .owl-controls .owl-buttons .owl-next:hover,
\t\t#main .tp-leftarrow.default:hover,
\t\t#main .tp-rightarrow.default:hover,
\t\t#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-prev:hover,
\t\t#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-next:hover {
\t\t\tbackground: ";
                    // line 2620
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_buttons_hover_background_color"], "method", false, false, false, 2620);
                    echo ";
\t\t}
\t\t";
                }
                // line 2622
                echo " 
\t\t
\t\t";
                // line 2624
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_buttons_icon_color"], "method", false, false, false, 2624) != "")) {
                    echo " 
\t\t.camera_wrap .owl-controls .owl-buttons .owl-prev:before, .camera_wrap .owl-controls .owl-buttons .owl-next:before,
\t\t#main .tp-leftarrow.default:before,
\t\t#main .tp-rightarrow.default:before,
\t\t#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-prev:before,
\t\t#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-next:before {
\t\t\tcolor: ";
                    // line 2630
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_buttons_icon_color"], "method", false, false, false, 2630);
                    echo ";
\t\t}
\t\t";
                }
                // line 2632
                echo " 
\t\t
\t\t";
                // line 2634
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_buttons_hover_icon_color"], "method", false, false, false, 2634) != "")) {
                    echo " 
\t\t.camera_wrap .owl-controls .owl-buttons .owl-prev:hover:before, .camera_wrap .owl-controls .owl-buttons .owl-next:hover:before,
\t\t#main .tp-leftarrow.default:hover:before,
\t\t#main .tp-rightarrow.default:hover:before,
\t\t#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-prev:hover:before,
\t\t#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-next:hover:before {
\t\t\tcolor: ";
                    // line 2640
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_buttons_hover_icon_color"], "method", false, false, false, 2640);
                    echo ";
\t\t}
\t\t";
                }
                // line 2642
                echo " 
\t\t
\t\t";
                // line 2644
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_buttons_border_color"], "method", false, false, false, 2644) != "")) {
                    echo " 
\t\t.camera_wrap .owl-controls .owl-buttons .owl-prev, .camera_wrap .owl-controls .owl-buttons .owl-next,
\t\t#main .tp-leftarrow.default,
\t\t#main .tp-rightarrow.default,
\t\t#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-prev,
\t\t#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-next {
\t\t\tborder: 1px solid ";
                    // line 2650
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_buttons_border_color"], "method", false, false, false, 2650);
                    echo ";
\t\t}
\t\t";
                }
                // line 2652
                echo " 
\t\t
\t\t";
                // line 2654
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_buttons_hover_border_color"], "method", false, false, false, 2654) != "")) {
                    echo " 
\t\t.camera_wrap .owl-controls .owl-buttons .owl-prev:hover, .camera_wrap .owl-controls .owl-buttons .owl-next:hover,
\t\t#main .tp-leftarrow.default:hover,
\t\t#main .tp-rightarrow.default:hover,
\t\t#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-prev:hover,
\t\t#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-next:hover {
\t\t\tborder: 1px solid ";
                    // line 2660
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_buttons_hover_border_color"], "method", false, false, false, 2660);
                    echo ";
\t\t}
\t\t";
                }
                // line 2662
                echo " 
\t\t
\t\t";
                // line 2664
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_border_color"], "method", false, false, false, 2664) != "")) {
                    echo " 
\t\t.sale {
\t\t\tborder: 1px solid ";
                    // line 2666
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_border_color"], "method", false, false, false, 2666);
                    echo ";
\t\t}
\t\t";
                }
                // line 2668
                echo " 
\t\t
\t\t";
                // line 2670
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_color"], "method", false, false, false, 2670) != "")) {
                    echo " 
\t\t.sale {
\t\t\tbackground: ";
                    // line 2672
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_color"], "method", false, false, false, 2672);
                    echo ";
\t\t}
\t\t";
                }
                // line 2674
                echo " 
\t\t
\t\t";
                // line 2676
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_top"], "method", false, false, false, 2676) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_bottom"], "method", false, false, false, 2676) != ""))) {
                    echo " 
\t\t.sale {
\t\t\tbackground: ";
                    // line 2678
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_bottom"], "method", false, false, false, 2678);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 2679
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_bottom"], "method", false, false, false, 2679);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_top"], "method", false, false, false, 2679);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_bottom"], "method", false, false, false, 2679);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 2680
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_bottom"], "method", false, false, false, 2680);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_top"], "method", false, false, false, 2680);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_bottom"], "method", false, false, false, 2680);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 2681
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_bottom"], "method", false, false, false, 2681);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_top"], "method", false, false, false, 2681);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_bottom"], "method", false, false, false, 2681);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 2682
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_bottom"], "method", false, false, false, 2682);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_top"], "method", false, false, false, 2682);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_bottom"], "method", false, false, false, 2682);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 2683
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_bottom"], "method", false, false, false, 2683);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_top"], "method", false, false, false, 2683);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_bottom"], "method", false, false, false, 2683);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 2684
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_bottom"], "method", false, false, false, 2684);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_top"], "method", false, false, false, 2684);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_background_gradient_bottom"], "method", false, false, false, 2684);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 2686
                echo " 
\t\t
\t\t";
                // line 2688
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_color_text"], "method", false, false, false, 2688) != "")) {
                    echo " 
\t\t.sale {
\t\t\tcolor: ";
                    // line 2690
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_color_text"], "method", false, false, false, 2690);
                    echo ";
\t\t}
\t\t";
                }
                // line 2692
                echo " 
\t\t
\t\t";
                // line 2694
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_border_color"], "method", false, false, false, 2694) != "")) {
                    echo " 
\t\t#main .new {
\t\t\tborder: 1px solid ";
                    // line 2696
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_border_color"], "method", false, false, false, 2696);
                    echo ";
\t\t}
\t\t";
                }
                // line 2698
                echo " 
\t\t
\t\t";
                // line 2700
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_color"], "method", false, false, false, 2700) != "")) {
                    echo " 
\t\t#main .new {
\t\t\tbackground: ";
                    // line 2702
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_color"], "method", false, false, false, 2702);
                    echo ";
\t\t}
\t\t";
                }
                // line 2704
                echo " 
\t\t
\t\t";
                // line 2706
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_top"], "method", false, false, false, 2706) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_bottom"], "method", false, false, false, 2706) != ""))) {
                    echo " 
\t\t#main .new {
\t\t\tbackground: ";
                    // line 2708
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_bottom"], "method", false, false, false, 2708);
                    echo "; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 2709
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_bottom"], "method", false, false, false, 2709);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_top"], "method", false, false, false, 2709);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_bottom"], "method", false, false, false, 2709);
                    echo " 99%); /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 2710
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_bottom"], "method", false, false, false, 2710);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_top"], "method", false, false, false, 2710);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_bottom"], "method", false, false, false, 2710);
                    echo ")); /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 2711
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_bottom"], "method", false, false, false, 2711);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_top"], "method", false, false, false, 2711);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_bottom"], "method", false, false, false, 2711);
                    echo " 99%); /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 2712
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_bottom"], "method", false, false, false, 2712);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_top"], "method", false, false, false, 2712);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_bottom"], "method", false, false, false, 2712);
                    echo " 99%); /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 2713
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_bottom"], "method", false, false, false, 2713);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_top"], "method", false, false, false, 2713);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_bottom"], "method", false, false, false, 2713);
                    echo " 99%); /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 2714
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_bottom"], "method", false, false, false, 2714);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_top"], "method", false, false, false, 2714);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_background_gradient_bottom"], "method", false, false, false, 2714);
                    echo " 99%); /* W3C */
\t\t}
\t\t";
                }
                // line 2716
                echo " 
\t\t
\t\t";
                // line 2718
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_color_text"], "method", false, false, false, 2718) != "")) {
                    echo " 
\t\t#main .new {
\t\t\tcolor: ";
                    // line 2720
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_color_text"], "method", false, false, false, 2720);
                    echo ";
\t\t}
\t\t";
                }
                // line 2722
                echo " 
\t\t
\t\t";
                // line 2724
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "ratings_background_color"], "method", false, false, false, 2724) != "")) {
                    echo " 
\t\t.rating i {
\t\t\tcolor: ";
                    // line 2726
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "ratings_background_color"], "method", false, false, false, 2726);
                    echo ";
\t\t}
\t\t";
                }
                // line 2728
                echo " 
\t\t
\t\t";
                // line 2730
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "ratings_active_background_color"], "method", false, false, false, 2730) != "")) {
                    echo " 
\t\t.rating i.active {
\t\t\tcolor: ";
                    // line 2732
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "ratings_active_background_color"], "method", false, false, false, 2732);
                    echo ";
\t\t}
\t\t";
                }
                // line 2734
                echo " 
\t\t
\t\t";
                // line 2736
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_color_text"], "method", false, false, false, 2736) != "")) {
                    echo " 
\t\t.button, .btn {
\t\t\tcolor: ";
                    // line 2738
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_color_text"], "method", false, false, false, 2738);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2740
                echo " 
\t\t
\t\t";
                // line 2742
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_color"], "method", false, false, false, 2742) != "")) {
                    echo " 
\t\t.button, .btn {
\t\t\tbackground: ";
                    // line 2744
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_color"], "method", false, false, false, 2744);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2746
                echo " 
\t\t
\t\t";
                // line 2748
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_border_color"], "method", false, false, false, 2748) != "")) {
                    echo " 
\t\t.button, .btn {
\t\t\tborder: 1px solid ";
                    // line 2750
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_border_color"], "method", false, false, false, 2750);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2752
                echo " 
\t\t
\t\t";
                // line 2754
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_top"], "method", false, false, false, 2754) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_bottom"], "method", false, false, false, 2754) != ""))) {
                    echo " 
\t\t.button, .btn {
\t\t\tbackground: ";
                    // line 2756
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_bottom"], "method", false, false, false, 2756);
                    echo " !important; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 2757
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_bottom"], "method", false, false, false, 2757);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_top"], "method", false, false, false, 2757);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_bottom"], "method", false, false, false, 2757);
                    echo " 99%) !important; /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 2758
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_bottom"], "method", false, false, false, 2758);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_top"], "method", false, false, false, 2758);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_bottom"], "method", false, false, false, 2758);
                    echo ")) !important; /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 2759
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_bottom"], "method", false, false, false, 2759);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_top"], "method", false, false, false, 2759);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_bottom"], "method", false, false, false, 2759);
                    echo " 99%) !important; /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 2760
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_bottom"], "method", false, false, false, 2760);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_top"], "method", false, false, false, 2760);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_bottom"], "method", false, false, false, 2760);
                    echo " 99%) !important; /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 2761
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_bottom"], "method", false, false, false, 2761);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_top"], "method", false, false, false, 2761);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_bottom"], "method", false, false, false, 2761);
                    echo " 99%) !important; /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 2762
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_bottom"], "method", false, false, false, 2762);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_top"], "method", false, false, false, 2762);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_background_gradient_bottom"], "method", false, false, false, 2762);
                    echo " 99%) !important; /* W3C */
\t\t}
\t\t";
                }
                // line 2764
                echo " 
\t\t
\t\t";
                // line 2766
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_color_text"], "method", false, false, false, 2766) != "")) {
                    echo " 
\t\t.button:hover, .btn:hover {
\t\t\tcolor: ";
                    // line 2768
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_color_text"], "method", false, false, false, 2768);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2770
                echo " 
\t\t
\t\t";
                // line 2772
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_border_color"], "method", false, false, false, 2772) != "")) {
                    echo " 
\t\t.button:hover, .btn:hover {
\t\t\tborder: 1px solid ";
                    // line 2774
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_border_color"], "method", false, false, false, 2774);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2776
                echo " 
\t\t
\t\t";
                // line 2778
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_color"], "method", false, false, false, 2778) != "")) {
                    echo " 
\t\t.button:hover, .btn:hover {
\t\t\tbackground: ";
                    // line 2780
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_color"], "method", false, false, false, 2780);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2782
                echo " 
\t\t
\t\t";
                // line 2784
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_top"], "method", false, false, false, 2784) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_bottom"], "method", false, false, false, 2784) != ""))) {
                    echo " 
\t\t.button:hover, .btn:hover {
\t\t\tbackground: ";
                    // line 2786
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_bottom"], "method", false, false, false, 2786);
                    echo " !important; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 2787
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_bottom"], "method", false, false, false, 2787);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_top"], "method", false, false, false, 2787);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_bottom"], "method", false, false, false, 2787);
                    echo " 99%) !important; /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 2788
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_bottom"], "method", false, false, false, 2788);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_top"], "method", false, false, false, 2788);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_bottom"], "method", false, false, false, 2788);
                    echo ")) !important; /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 2789
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_bottom"], "method", false, false, false, 2789);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_top"], "method", false, false, false, 2789);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_bottom"], "method", false, false, false, 2789);
                    echo " 99%) !important; /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 2790
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_bottom"], "method", false, false, false, 2790);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_top"], "method", false, false, false, 2790);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_bottom"], "method", false, false, false, 2790);
                    echo " 99%) !important; /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 2791
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_bottom"], "method", false, false, false, 2791);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_top"], "method", false, false, false, 2791);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_bottom"], "method", false, false, false, 2791);
                    echo " 99%) !important; /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 2792
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_bottom"], "method", false, false, false, 2792);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_top"], "method", false, false, false, 2792);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "buttons_hover_background_gradient_bottom"], "method", false, false, false, 2792);
                    echo " 99%) !important; /* W3C */
\t\t}
\t\t";
                }
                // line 2794
                echo " 
\t\t
\t\t";
                // line 2796
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_color_text"], "method", false, false, false, 2796) != "")) {
                    echo " 
\t\t.buttons .left .button, .buttons .center .button, .btn-default, .input-group-btn .btn-primary {
\t\t\tcolor: ";
                    // line 2798
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_color_text"], "method", false, false, false, 2798);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2800
                echo " 
\t\t
\t\t";
                // line 2802
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_border_color"], "method", false, false, false, 2802) != "")) {
                    echo " 
\t\t.buttons .left .button, .buttons .center .button, .btn-default, .input-group-btn .btn-primary {
\t\t\tborder: 1px solid ";
                    // line 2804
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_border_color"], "method", false, false, false, 2804);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2806
                echo " 
\t\t
\t\t";
                // line 2808
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_color"], "method", false, false, false, 2808) != "")) {
                    echo " 
\t\t.buttons .left .button, .buttons .center .button, .btn-default, .input-group-btn .btn-primary {
\t\t\tbackground: ";
                    // line 2810
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_color"], "method", false, false, false, 2810);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2812
                echo " 
\t\t
\t\t";
                // line 2814
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_top"], "method", false, false, false, 2814) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_bottom"], "method", false, false, false, 2814) != ""))) {
                    echo " 
\t\t.buttons .left .button, .buttons .center .button, .btn-default, .input-group-btn .btn-primary {
\t\t\tbackground: ";
                    // line 2816
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_bottom"], "method", false, false, false, 2816);
                    echo " !important; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 2817
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_bottom"], "method", false, false, false, 2817);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_top"], "method", false, false, false, 2817);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_bottom"], "method", false, false, false, 2817);
                    echo " 99%) !important; /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 2818
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_bottom"], "method", false, false, false, 2818);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_top"], "method", false, false, false, 2818);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_bottom"], "method", false, false, false, 2818);
                    echo ")) !important; /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 2819
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_bottom"], "method", false, false, false, 2819);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_top"], "method", false, false, false, 2819);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_bottom"], "method", false, false, false, 2819);
                    echo " 99%) !important; /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 2820
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_bottom"], "method", false, false, false, 2820);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_top"], "method", false, false, false, 2820);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_bottom"], "method", false, false, false, 2820);
                    echo " 99%) !important; /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 2821
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_bottom"], "method", false, false, false, 2821);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_top"], "method", false, false, false, 2821);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_bottom"], "method", false, false, false, 2821);
                    echo " 99%) !important; /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 2822
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_bottom"], "method", false, false, false, 2822);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_top"], "method", false, false, false, 2822);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_background_gradient_bottom"], "method", false, false, false, 2822);
                    echo " 99%) !important; /* W3C */
\t\t}
\t\t";
                }
                // line 2824
                echo " 
\t\t
\t\t";
                // line 2826
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_color_text"], "method", false, false, false, 2826) != "")) {
                    echo " 
\t\t.buttons .left .button:hover, .buttons .center .button:hover, .btn-default:hover, .input-group-btn .btn-primary:hover {
\t\t\tcolor: ";
                    // line 2828
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_color_text"], "method", false, false, false, 2828);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2830
                echo " 
\t\t
\t\t";
                // line 2832
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_border_color"], "method", false, false, false, 2832) != "")) {
                    echo " 
\t\t.buttons .left .button:hover, .buttons .center .button:hover, .btn-default:hover, .input-group-btn .btn-primary:hover {
\t\t\tborder: 1px solid ";
                    // line 2834
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_border_color"], "method", false, false, false, 2834);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2836
                echo " 
\t\t
\t\t";
                // line 2838
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_color"], "method", false, false, false, 2838) != "")) {
                    echo " 
\t\t.buttons .left .button:hover, .buttons .center .button:hover, .btn-default:hover, .input-group-btn .btn-primary:hover {
\t\t\tbackground: ";
                    // line 2840
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_color"], "method", false, false, false, 2840);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2842
                echo " 
\t\t
\t\t";
                // line 2844
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_top"], "method", false, false, false, 2844) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_bottom"], "method", false, false, false, 2844) != ""))) {
                    echo " 
\t\t.buttons .left .button:hover, .buttons .center .button:hover, .btn-default:hover, .input-group-btn .btn-primary:hover {
\t\t\tbackground: ";
                    // line 2846
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_bottom"], "method", false, false, false, 2846);
                    echo " !important; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 2847
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_bottom"], "method", false, false, false, 2847);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_top"], "method", false, false, false, 2847);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_bottom"], "method", false, false, false, 2847);
                    echo " 99%) !important; /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 2848
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_bottom"], "method", false, false, false, 2848);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_top"], "method", false, false, false, 2848);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_bottom"], "method", false, false, false, 2848);
                    echo ")) !important; /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 2849
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_bottom"], "method", false, false, false, 2849);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_top"], "method", false, false, false, 2849);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_bottom"], "method", false, false, false, 2849);
                    echo " 99%) !important; /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 2850
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_bottom"], "method", false, false, false, 2850);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_top"], "method", false, false, false, 2850);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_bottom"], "method", false, false, false, 2850);
                    echo " 99%) !important; /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 2851
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_bottom"], "method", false, false, false, 2851);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_top"], "method", false, false, false, 2851);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_bottom"], "method", false, false, false, 2851);
                    echo " 99%) !important; /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 2852
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_bottom"], "method", false, false, false, 2852);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_top"], "method", false, false, false, 2852);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_buttons_hover_background_gradient_bottom"], "method", false, false, false, 2852);
                    echo " 99%) !important; /* W3C */
\t\t}
\t\t";
                }
                // line 2854
                echo " 
\t\t
\t\t";
                // line 2856
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "customfooter_color_text"], "method", false, false, false, 2856) != "")) {
                    echo " 
\t\t.custom-footer .pattern,
\t\t.custom-footer .pattern a,
\t\tul.contact-us li {
\t\t\tcolor: ";
                    // line 2860
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "customfooter_color_text"], "method", false, false, false, 2860);
                    echo ";
\t\t}
\t\t";
                }
                // line 2862
                echo " 
\t\t
\t\t";
                // line 2864
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "customfooter_color_heading"], "method", false, false, false, 2864) != "")) {
                    echo " 
\t\t.custom-footer h4 {
\t\t\tcolor: ";
                    // line 2866
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "customfooter_color_heading"], "method", false, false, false, 2866);
                    echo ";
\t\t}
\t\t";
                }
                // line 2868
                echo " 
\t\t
\t\t";
                // line 2870
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "customfooter_color_icon_heading"], "method", false, false, false, 2870) != "")) {
                    echo " 
\t\t.custom-footer h4 i,
\t\tul.contact-us li span,
\t\t.custom-footer .tweets li a {
\t\t\tcolor: ";
                    // line 2874
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "customfooter_color_icon_heading"], "method", false, false, false, 2874);
                    echo ";
\t\t}
\t\t";
                }
                // line 2876
                echo " 
\t\t
\t\t";
                // line 2878
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "customfooter_color_icon_contact_us"], "method", false, false, false, 2878) != "")) {
                    echo " 
\t\tul.contact-us li i,
\t\t.tweets li:before {
\t\t\tcolor: ";
                    // line 2881
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "customfooter_color_icon_contact_us"], "method", false, false, false, 2881);
                    echo ";
\t\t}
\t\t";
                }
                // line 2883
                echo " 
\t\t
\t\t";
                // line 2885
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "customfooter_border_color"], "method", false, false, false, 2885) != "")) {
                    echo " 
\t\t.custom-footer h4,
\t\t.custom-footer .background,
\t\t.standard-body .custom-footer .background,
\t\t.fb-like-box,
\t\tul.contact-us li i {
\t\t\tborder-color: ";
                    // line 2891
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "customfooter_border_color"], "method", false, false, false, 2891);
                    echo ";
\t\t}
\t\t";
                }
                // line 2893
                echo " 
\t\t
\t\t";
                // line 2895
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "customfooter_background_color"], "method", false, false, false, 2895) != "")) {
                    echo " 
\t\t.custom-footer .background,
\t\t.standard-body .custom-footer .background {
\t\t\tbackground: ";
                    // line 2898
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "customfooter_background_color"], "method", false, false, false, 2898);
                    echo ";
\t\t}
\t\t
\t\t.custom-footer .pattern {
\t\t\tbackground: none;
\t\t}
\t\t";
                }
                // line 2904
                echo " 
\t\t
\t\t";
                // line 2906
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_color_text"], "method", false, false, false, 2906) != "")) {
                    echo " 
\t\t.footer .pattern,
\t\t.footer .pattern a {
\t\t\tcolor: ";
                    // line 2909
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_color_text"], "method", false, false, false, 2909);
                    echo ";
\t\t}
\t\t";
                }
                // line 2911
                echo " 
\t\t
\t\t";
                // line 2913
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_color_links"], "method", false, false, false, 2913) != "")) {
                    echo " 
\t\t.footer .pattern a {
\t\t\tcolor: ";
                    // line 2915
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_color_links"], "method", false, false, false, 2915);
                    echo ";
\t\t}
\t\t";
                }
                // line 2917
                echo " 
\t\t
\t\t";
                // line 2919
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_color_links_hover"], "method", false, false, false, 2919) != "")) {
                    echo " 
\t\t.footer .pattern a:hover {
\t\t\tcolor: ";
                    // line 2921
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_color_links_hover"], "method", false, false, false, 2921);
                    echo ";
\t\t}
\t\t";
                }
                // line 2923
                echo " 
\t\t
\t\t";
                // line 2925
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_color_heading"], "method", false, false, false, 2925) != "")) {
                    echo " 
\t\t.footer h4 {
\t\t\tcolor: ";
                    // line 2927
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_color_heading"], "method", false, false, false, 2927);
                    echo ";
\t\t}
\t\t";
                }
                // line 2929
                echo " 
\t\t
\t\t";
                // line 2931
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_color_heading_border_bottom"], "method", false, false, false, 2931) != "")) {
                    echo " 
\t\t.footer h4 {
\t\t\tborder-bottom-color: ";
                    // line 2933
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_color_heading_border_bottom"], "method", false, false, false, 2933);
                    echo ";
\t\t}
\t\t";
                }
                // line 2935
                echo " 
\t\t
\t\t";
                // line 2937
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_background_color"], "method", false, false, false, 2937) != "")) {
                    echo " 
\t\t.footer .background,
\t\t.standard-body .footer .background,
\t\t.copyright .background,
\t\t.standard-body .copyright .background {
\t\t\tbackground: ";
                    // line 2942
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_background_color"], "method", false, false, false, 2942);
                    echo ";
\t\t}
\t\t";
                }
                // line 2944
                echo " 
\t\t
\t\t";
                // line 2946
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_border_color"], "method", false, false, false, 2946) != "")) {
                    echo " 
\t\t.footer .container > .row:before, 
\t\t.footer .advanced-grid .container > div > .row:before,
\t\t.footer .container > .row > div:before, 
\t\t.footer .advanced-grid .container > div > .row > div:before,
\t\t.footer-type-11 .footer .container > .row:nth-last-child(2) > div:before, 
\t\t.footer-type-11 .footer .advanced-grid .container > div > .row:nth-last-child(2) > div:before,
\t\t.footer-type-16 .footer .container > .row:nth-last-child(2) > div:before, 
\t\t.footer-type-16 .footer .advanced-grid .container > div > .row:nth-last-child(2) > div:before,
\t\t.footer-type-21 .footer .container > .row > div:last-child:after, 
\t\t.footer-type-21 .footer .advanced-grid .container > div > .row > div:last-child:after {
\t\t\tbackground: ";
                    // line 2957
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_border_color"], "method", false, false, false, 2957);
                    echo ";
\t\t}
\t\t
\t\t.footer-type-11 .footer .container > .row:nth-last-child(2), 
\t\t.footer-type-11 .footer .advanced-grid .container > div > .row:nth-last-child(2),
\t\t.footer-type-16 .footer .container > .row:nth-last-child(2), 
\t\t.footer-type-16 .footer .advanced-grid .container > div > .row:nth-last-child(2) {
\t\t     border-color: ";
                    // line 2964
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_border_color"], "method", false, false, false, 2964);
                    echo ";
\t\t}
\t\t";
                }
                // line 2966
                echo " 
\t\t
\t\t";
                // line 2968
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_color_text"], "method", false, false, false, 2968) != "")) {
                    echo " 
\t\t.footer-button {
\t\t\tcolor: ";
                    // line 2970
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_color_text"], "method", false, false, false, 2970);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2972
                echo " 
\t\t
\t\t";
                // line 2974
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_color"], "method", false, false, false, 2974) != "")) {
                    echo " 
\t\t.footer-button {
\t\t\tbackground: ";
                    // line 2976
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_color"], "method", false, false, false, 2976);
                    echo ";
\t\t}
\t\t";
                }
                // line 2978
                echo " 
\t\t
\t\t";
                // line 2980
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_top"], "method", false, false, false, 2980) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_bottom"], "method", false, false, false, 2980) != ""))) {
                    echo " 
\t\t.footer-button {
\t\t\tbackground: ";
                    // line 2982
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_bottom"], "method", false, false, false, 2982);
                    echo " !important; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 2983
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_bottom"], "method", false, false, false, 2983);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_top"], "method", false, false, false, 2983);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_bottom"], "method", false, false, false, 2983);
                    echo " 99%) !important; /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 2984
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_bottom"], "method", false, false, false, 2984);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_top"], "method", false, false, false, 2984);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_bottom"], "method", false, false, false, 2984);
                    echo ")) !important; /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 2985
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_bottom"], "method", false, false, false, 2985);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_top"], "method", false, false, false, 2985);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_bottom"], "method", false, false, false, 2985);
                    echo " 99%) !important; /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 2986
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_bottom"], "method", false, false, false, 2986);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_top"], "method", false, false, false, 2986);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_bottom"], "method", false, false, false, 2986);
                    echo " 99%) !important; /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 2987
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_bottom"], "method", false, false, false, 2987);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_top"], "method", false, false, false, 2987);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_bottom"], "method", false, false, false, 2987);
                    echo " 99%) !important; /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 2988
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_bottom"], "method", false, false, false, 2988);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_top"], "method", false, false, false, 2988);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_background_gradient_bottom"], "method", false, false, false, 2988);
                    echo " 99%) !important; /* W3C */
\t\t}
\t\t";
                }
                // line 2990
                echo " 
\t\t
\t\t";
                // line 2992
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_color_text"], "method", false, false, false, 2992) != "")) {
                    echo " 
\t\t.footer-button:hover {
\t\t\tcolor: ";
                    // line 2994
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_color_text"], "method", false, false, false, 2994);
                    echo " !important;
\t\t}
\t\t";
                }
                // line 2996
                echo " 
\t\t
\t\t";
                // line 2998
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_color"], "method", false, false, false, 2998) != "")) {
                    echo " 
\t\t.footer-button:hover {
\t\t\tbackground: ";
                    // line 3000
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_color"], "method", false, false, false, 3000);
                    echo ";
\t\t}
\t\t";
                }
                // line 3002
                echo " 
\t\t
\t\t";
                // line 3004
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_top"], "method", false, false, false, 3004) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_bottom"], "method", false, false, false, 3004) != ""))) {
                    echo " 
\t\t.footer-button:hover {
\t\t\tbackground: ";
                    // line 3006
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_bottom"], "method", false, false, false, 3006);
                    echo " !important; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 3007
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_bottom"], "method", false, false, false, 3007);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_top"], "method", false, false, false, 3007);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_bottom"], "method", false, false, false, 3007);
                    echo " 99%) !important; /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 3008
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_bottom"], "method", false, false, false, 3008);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_top"], "method", false, false, false, 3008);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_bottom"], "method", false, false, false, 3008);
                    echo ")) !important; /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 3009
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_bottom"], "method", false, false, false, 3009);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_top"], "method", false, false, false, 3009);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_bottom"], "method", false, false, false, 3009);
                    echo " 99%) !important; /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 3010
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_bottom"], "method", false, false, false, 3010);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_top"], "method", false, false, false, 3010);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_bottom"], "method", false, false, false, 3010);
                    echo " 99%) !important; /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 3011
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_bottom"], "method", false, false, false, 3011);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_top"], "method", false, false, false, 3011);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_bottom"], "method", false, false, false, 3011);
                    echo " 99%) !important; /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 3012
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_bottom"], "method", false, false, false, 3012);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_top"], "method", false, false, false, 3012);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_button_hover_background_gradient_bottom"], "method", false, false, false, 3012);
                    echo " 99%) !important; /* W3C */
\t\t}
\t\t";
                }
                // line 3014
                echo " 
\t\t
\t\t";
                // line 3016
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_date_text"], "method", false, false, false, 3016) != "")) {
                    echo " 
\t\t#main .post .date-published,
\t\t#main .news.v2 .media-body .bottom,
\t\t.cosmetics-news .media .date-published,
\t\t.medic-news .media .date-published,
\t\t.wine-news .media .date-published,
\t\t.cameras-news .media .date-published {
\t\t\tcolor: ";
                    // line 3023
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_date_text"], "method", false, false, false, 3023);
                    echo ";
\t\t}
\t\t";
                }
                // line 3025
                echo " 
\t\t
\t\t";
                // line 3027
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_categories_links_color"], "method", false, false, false, 3027) != "")) {
                    echo " 
\t\t#main .post .meta > li a {
\t\t\tcolor: ";
                    // line 3029
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_categories_links_color"], "method", false, false, false, 3029);
                    echo ";
\t\t}
\t\t";
                }
                // line 3031
                echo " 
\t\t
\t\t";
                // line 3033
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_categories_links_hover_color"], "method", false, false, false, 3033) != "")) {
                    echo " 
\t\t#main .post .meta > li a:hover {
\t\t\tcolor: ";
                    // line 3035
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_categories_links_hover_color"], "method", false, false, false, 3035);
                    echo ";
\t\t}
\t\t";
                }
                // line 3037
                echo " 
\t\t
\t\t";
                // line 3039
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_text_color"], "method", false, false, false, 3039) != "")) {
                    echo " 
\t\t#main .tagcloud a,
\t\t#main .post .tags a,
\t\t#main .news .media-body .tags a,
\t\t#main .posts .post .tags a,
\t\t.cosmetics-news .media .tags a,
\t\t.cameras-news .media .tags a {
\t\t\tcolor: ";
                    // line 3046
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_text_color"], "method", false, false, false, 3046);
                    echo ";
\t\t}
\t\t";
                }
                // line 3048
                echo " 
\t\t
\t\t";
                // line 3050
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_color"], "method", false, false, false, 3050) != "")) {
                    echo " 
\t\t#main .tagcloud a,
\t\t#main .post .tags a,
\t\t#main .news .media-body .tags a,
\t\t#main .posts .post .tags a,
\t\t.cosmetics-news .media .tags a,
\t\t.cameras-news .media .tags a {
\t\t\tbackground: ";
                    // line 3057
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_color"], "method", false, false, false, 3057);
                    echo ";
\t\t}
\t\t";
                }
                // line 3059
                echo " 
\t\t
\t\t";
                // line 3061
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_top_color"], "method", false, false, false, 3061) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_bottom_color"], "method", false, false, false, 3061) != ""))) {
                    echo " 
\t\t#main .tagcloud a,
\t\t#main .post .tags a,
\t\t#main .news .media-body .tags a,
\t\t#main .posts .post .tags a,
\t\t.cosmetics-news .media .tags a,
\t\t.cameras-news .media .tags a {
\t\t\tbackground: ";
                    // line 3068
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_bottom_color"], "method", false, false, false, 3068);
                    echo " !important; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 3069
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_bottom_color"], "method", false, false, false, 3069);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_top_color"], "method", false, false, false, 3069);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_bottom_color"], "method", false, false, false, 3069);
                    echo " 99%) !important; /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 3070
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_bottom_color"], "method", false, false, false, 3070);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_top_color"], "method", false, false, false, 3070);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_bottom_color"], "method", false, false, false, 3070);
                    echo ")) !important; /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 3071
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_bottom_color"], "method", false, false, false, 3071);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_top_color"], "method", false, false, false, 3071);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_bottom_color"], "method", false, false, false, 3071);
                    echo " 99%) !important; /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 3072
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_bottom_color"], "method", false, false, false, 3072);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_top_color"], "method", false, false, false, 3072);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_bottom_color"], "method", false, false, false, 3072);
                    echo " 99%) !important; /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 3073
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_bottom_color"], "method", false, false, false, 3073);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_top_color"], "method", false, false, false, 3073);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_bottom_color"], "method", false, false, false, 3073);
                    echo " 99%) !important; /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 3074
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_bottom_color"], "method", false, false, false, 3074);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_top_color"], "method", false, false, false, 3074);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_background_gradient_bottom_color"], "method", false, false, false, 3074);
                    echo " 99%) !important; /* W3C */
\t\t}
\t\t";
                }
                // line 3076
                echo " 
\t\t
\t\t";
                // line 3078
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_text_color"], "method", false, false, false, 3078) != "")) {
                    echo " 
\t\t#main .tagcloud a:hover,
\t\t#main .post .tags a:hover,
\t\t#main .news .media-body .tags a:hover,
\t\t#main .posts .post .tags a:hover,
\t\t.cosmetics-news .media .tags a:hover,
\t\t.cameras-news .media .tags a:hover {
\t\t\tcolor: ";
                    // line 3085
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_text_color"], "method", false, false, false, 3085);
                    echo ";
\t\t}
\t\t";
                }
                // line 3087
                echo " 
\t\t
\t\t";
                // line 3089
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_color"], "method", false, false, false, 3089) != "")) {
                    echo " 
\t\t#main .tagcloud a:hover,
\t\t#main .post .tags a:hover,
\t\t#main .news .media-body .tags a:hover,
\t\t#main .posts .post .tags a:hover,
\t\t.cosmetics-news .media .tags a:hover,
\t\t.cameras-news .media .tags a:hover {
\t\t\tbackground: ";
                    // line 3096
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_color"], "method", false, false, false, 3096);
                    echo ";
\t\t}
\t\t";
                }
                // line 3098
                echo " 
\t\t
\t\t";
                // line 3100
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_top_color"], "method", false, false, false, 3100) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_bottom_color"], "method", false, false, false, 3100) != ""))) {
                    echo " 
\t\t#main .tagcloud a:hover,
\t\t#main .post .tags a:hover,
\t\t#main .news .media-body .tags a:hover,
\t\t#main .posts .post .tags a:hover,
\t\t.cosmetics-news .media .tags a:hover,
\t\t.cameras-news .media .tags a:hover {
\t\t\tbackground: ";
                    // line 3107
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_bottom_color"], "method", false, false, false, 3107);
                    echo " !important; /* Old browsers */
\t\t\tbackground: -moz-linear-gradient(top, ";
                    // line 3108
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_bottom_color"], "method", false, false, false, 3108);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_top_color"], "method", false, false, false, 3108);
                    echo " 0%, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_bottom_color"], "method", false, false, false, 3108);
                    echo " 99%) !important; /* FF3.6+ */
\t\t\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,";
                    // line 3109
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_bottom_color"], "method", false, false, false, 3109);
                    echo "), color-stop(0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_top_color"], "method", false, false, false, 3109);
                    echo "), color-stop(99%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_bottom_color"], "method", false, false, false, 3109);
                    echo ")) !important; /* Chrome,Safari4+ */
\t\t\tbackground: -webkit-linear-gradient(top, ";
                    // line 3110
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_bottom_color"], "method", false, false, false, 3110);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_top_color"], "method", false, false, false, 3110);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_bottom_color"], "method", false, false, false, 3110);
                    echo " 99%) !important; /* Chrome10+,Safari5.1+ */
\t\t\tbackground: -o-linear-gradient(top, ";
                    // line 3111
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_bottom_color"], "method", false, false, false, 3111);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_top_color"], "method", false, false, false, 3111);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_bottom_color"], "method", false, false, false, 3111);
                    echo " 99%) !important; /* Opera 11.10+ */
\t\t\tbackground: -ms-linear-gradient(top, ";
                    // line 3112
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_bottom_color"], "method", false, false, false, 3112);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_top_color"], "method", false, false, false, 3112);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_bottom_color"], "method", false, false, false, 3112);
                    echo " 99%) !important; /* IE10+ */
\t\t\tbackground: linear-gradient(to bottom, ";
                    // line 3113
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_bottom_color"], "method", false, false, false, 3113);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_top_color"], "method", false, false, false, 3113);
                    echo " 0%,";
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_tag_hover_background_gradient_bottom_color"], "method", false, false, false, 3113);
                    echo " 99%) !important; /* W3C */
\t\t}
\t\t";
                }
                // line 3115
                echo " 
\t\t
\t\t";
                // line 3117
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_button_background_color"], "method", false, false, false, 3117) != "")) {
                    echo " 
\t\t#main .posts .button-more,
\t\t.wine-news .button-more {
\t\t\tbackground: ";
                    // line 3120
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_button_background_color"], "method", false, false, false, 3120);
                    echo ";
\t\t}
\t\t";
                }
                // line 3122
                echo " 
\t\t
\t\t";
                // line 3124
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_button_border_color"], "method", false, false, false, 3124) != "")) {
                    echo " 
\t\t#main .posts .button-more,
\t\t.wine-news .button-more {
\t\t\tborder-color: ";
                    // line 3127
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_button_border_color"], "method", false, false, false, 3127);
                    echo ";
\t\t}
\t\t";
                }
                // line 3129
                echo " 
\t\t
\t\t";
                // line 3131
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_button_text_color"], "method", false, false, false, 3131) != "")) {
                    echo " 
\t\t#main .posts .button-more,
\t\t.wine-news .button-more {
\t\t\tcolor: ";
                    // line 3134
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_button_text_color"], "method", false, false, false, 3134);
                    echo ";
\t\t}
\t\t";
                }
                // line 3136
                echo " 
\t\t
\t\t";
                // line 3138
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_button_hover_background_color"], "method", false, false, false, 3138) != "")) {
                    echo " 
\t\t#main .posts .button-more:hover,
\t\t.wine-news .button-more:hover {
\t\t\tbackground: ";
                    // line 3141
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_button_hover_background_color"], "method", false, false, false, 3141);
                    echo ";
\t\t}
\t\t";
                }
                // line 3143
                echo " 
\t\t
\t\t";
                // line 3145
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_button_hover_border_color"], "method", false, false, false, 3145) != "")) {
                    echo " 
\t\t#main .posts .button-more:hover,
\t\t.wine-news .button-more:hover {
\t\t\tborder-color: ";
                    // line 3148
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_button_hover_border_color"], "method", false, false, false, 3148);
                    echo ";
\t\t}
\t\t";
                }
                // line 3150
                echo " 
\t\t
\t\t";
                // line 3152
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_button_hover_text_color"], "method", false, false, false, 3152) != "")) {
                    echo " 
\t\t#main .posts .button-more:hover,
\t\t.wine-news .button-more:hover {
\t\t\tcolor: ";
                    // line 3155
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "blog_button_hover_text_color"], "method", false, false, false, 3155);
                    echo ";
\t\t}
\t\t";
                }
                // line 3157
                echo " 
\t";
            }
            // line 3158
            echo " 
\t\t\t
\t";
            // line 3160
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "font_status"], "method", false, false, false, 3160) == "1")) {
                echo " 
\t\tbody,
\t\ttextarea, input[type=\"text\"], input[type=\"password\"], input[type=\"datetime\"], input[type=\"datetime-local\"], input[type=\"date\"], input[type=\"month\"], input[type=\"time\"], input[type=\"week\"], input[type=\"number\"], input[type=\"email\"], input[type=\"url\"], input[type=\"search\"], input[type=\"tel\"], input[type=\"color\"], .uneditable-input, select {
\t\t\tfont-size: ";
                // line 3163
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font_px"], "method", false, false, false, 3163);
                echo "px;
\t\t\tfont-weight: ";
                // line 3164
                echo (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font_weight"], "method", false, false, false, 3164) * 100);
                echo " !important;
\t\t\t";
                // line 3165
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3165) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3165) != "standard"))) {
                    echo " 
\t\t\tfont-family: ";
                    // line 3166
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3166);
                    echo ";
\t\t\t";
                }
                // line 3167
                echo " 
\t\t}
\t\t
\t\tul.megamenu .megamenu-label,
\t\t#main .news .media-body h5,
\t\t#main .posts .post .post-title {
\t\t     ";
                // line 3173
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3173) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3173) != "standard"))) {
                    echo " 
\t\t     font-family: ";
                    // line 3174
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3174);
                    echo ";
\t\t     ";
                }
                // line 3175
                echo " 
\t\t}
\t\t
\t\t@media (max-width: 767px) {
\t\t     .responsive ul.megamenu li .sub-menu .content .hover-menu .menu ul li a,
\t\t     .responsive ul.megamenu li .sub-menu .content .static-menu .menu ul li a {
\t\t          ";
                // line 3181
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3181) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3181) != "standard"))) {
                    echo " 
\t\t          font-family: ";
                    // line 3182
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3182);
                    echo ";
\t\t          ";
                }
                // line 3183
                echo " 
\t\t     }
\t\t}
\t\t     
\t\t";
                // line 3187
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3187) == "standard") || (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3187) == "Poppins"))) {
                    echo " 
\t\tbody.firefox-mac,
\t\tbody.firefox-mac input,
\t\tbody.firefox-mac select {
\t\t     font-weight: 300 !important;
\t\t}
\t\t";
                }
                // line 3193
                echo " 
\t\t
\t\t";
                // line 3195
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3195) == "Oswald")) {
                    echo " 
\t\t.header-type-2 #top .dropdown > a:after {
\t\t     margin-top: 6px;
\t\t}
\t\t
\t\t.header-type-2 #top #cart_block .cart-heading p {
\t\t     line-height: 20px;
\t\t}
\t\t";
                }
                // line 3203
                echo " 
\t\t
\t\t";
                // line 3205
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3205) == "Alegreya")) {
                    echo " 
\t\t#top #cart_block .cart-heading p {
\t\t     line-height: 19px;
\t\t}
\t\t
\t\t.product-filter .list-options .sort:after,
\t\t.product-filter .list-options .limit:after {
\t\t     top: 2px;
\t\t}
\t\t
\t\t.product-filter .options .product-compare {
\t\t     position: relative;
\t\t     margin-top: -2px;
\t\t     padding-bottom: 22px;
\t\t}
\t\t
\t\t.product-filter .options .button-group {
\t\t     padding-bottom: 21px;
\t\t}
\t\t";
                }
                // line 3224
                echo " 
\t\t
\t\t";
                // line 3226
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3226) == "Playfair Display")) {
                    echo " 
\t\t#top #cart_block .cart-heading p:after {
\t\t     margin-top: 5px;
\t\t}
\t\t
\t\t.megamenu-background .vertical .megamenuToogle-wrapper .container:after {
\t\t     margin-top: 6px;
\t\t}
\t\t
\t\t.button, .btn {
\t\t     padding-top: 12px;
\t\t     padding-bottom: 11px;
\t\t}
\t\t
\t\t#main .new,
\t\t.sale,
\t\t.footer-button,
\t\t.button-previous-next {
\t\t     padding-top: 7px;
\t\t     padding-bottom: 6px;
\t\t}
\t\t
\t\t#top #cart_block .cart-heading .cart-count {
\t\t     padding-top: 3px;
\t\t}
\t\t";
                }
                // line 3251
                echo " 
\t\t
\t\t";
                // line 3253
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3253) == "Dosis")) {
                    echo " 
\t\t.button, .btn {
\t\t     padding-top: 12px;
\t\t     padding-bottom: 11px;
\t\t}
\t\t
\t\t#main .new,
\t\t.sale,
\t\t.footer-button,
\t\t.button-previous-next {
\t\t     padding-top: 5px;
\t\t     padding-bottom: 5px;
\t\t}
\t\t
\t\t.product-info .cart .add-to-cart #button-cart {
\t\t     font-size: 13px !important;
\t\t}
\t\t
\t\t.box-with-categories .box-heading {
\t\t     padding-bottom: 24px;
\t\t}
\t\t
\t\t.icon-enquiry[align=left] {
\t\t     margin-top: 1px;
\t\t}
\t\t
\t\t#top #cart_block .cart-heading p:after {
\t\t     margin-top: 5px;
\t\t}
\t\t";
                }
                // line 3282
                echo " 
\t\t
\t\t.center-column .panel-heading h4 {
\t\t     ";
                // line 3285
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3285) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3285) != "standard"))) {
                    echo " 
\t\t     font-family: ";
                    // line 3286
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font"], "method", false, false, false, 3286);
                    echo ";
\t\t     ";
                }
                // line 3287
                echo " 
\t\t}
\t\t
\t\t.dropdown-menu,
\t\tbody .dropdown-menu > li > a,
\t\t.top-bar .menu li a,
\t\t#top .dropdown > a,
\t\t.product-info .cart .add-to-cart p,
\t\t.header-notice,
\t\t.header-type-9 #top #header-center .menu li a,
\t\t.welcome-text,
\t\t.header-type-16 #top #header-left .menu li {
\t\t\tfont-size: ";
                // line 3299
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font_smaller_px"], "method", false, false, false, 3299);
                echo "px;
\t\t}
\t\t
\t\t";
                // line 3302
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font_smaller_px"], "method", false, false, false, 3302) == 14)) {
                    echo " 
\t\t#top .dropdown > a:after {
\t\t     margin-top: 6px;
\t\t}
\t\t";
                }
                // line 3306
                echo " 
\t\t
\t\t.product-filter .options .product-compare a,
\t\t.product-info .cart .links a,
\t\t.button-previous-next,
\t\t.footer-button,
\t\t.button-white-with-red-text,
\t\ttable.attribute thead td,
\t\ttable.list thead td,
\t\t.wishlist-product table thead td,
\t\t.wishlist-info table thead td,
\t\t.compare-info thead td,
\t\t.checkout-product table thead td,
\t\t.table thead td,
\t\t.cart-info table thead td,
\t\t.manufacturer-heading,
\t\t.center-column .panel-heading h4,
\t\tul.box-filter > li > span,
\t\t.popup .form-contact .contact-label label,
\t\t.categories-wall .category-wall .more-categories,
\t\t.mfilter-heading,
\t\t.product-info .options2 > div > label {
\t\t\tfont-size: ";
                // line 3328
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font_very_small_px"], "method", false, false, false, 3328);
                echo "px !important;
\t\t\t
\t\t\t";
                // line 3330
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_font_very_small_transform"], "method", false, false, false, 3330) == "none")) {
                    echo " 
\t\t\ttext-transform: none !important;
\t\t\t";
                }
                // line 3332
                echo " 
\t\t}

\t\tul.megamenu li .sub-menu .content .static-menu a.main-menu {
\t\t\tfont-size: ";
                // line 3336
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_submenu_heading_px"], "method", false, false, false, 3336);
                echo "px;
\t\t\tfont-weight: ";
                // line 3337
                echo (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_submenu_heading_weight"], "method", false, false, false, 3337) * 100);
                echo " !important;
\t\t\t";
                // line 3338
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_submenu_heading"], "method", false, false, false, 3338) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_submenu_heading"], "method", false, false, false, 3338) != "standard"))) {
                    echo " 
\t\t\tfont-family: ";
                    // line 3339
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_submenu_heading"], "method", false, false, false, 3339);
                    echo ";
\t\t\t";
                }
                // line 3340
                echo " 
\t\t\t
\t\t\t";
                // line 3342
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_submenu_heading_transform"], "method", false, false, false, 3342) == "uppercase")) {
                    echo " 
\t\t\ttext-transform: uppercase;
\t\t\t";
                }
                // line 3344
                echo " 
\t\t\t
\t\t\t";
                // line 3346
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_submenu_heading_line_height"], "method", false, false, false, 3346) >= 1)) {
                    echo " 
\t\t\tline-height: ";
                    // line 3347
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_submenu_heading_line_height"], "method", false, false, false, 3347);
                    echo ";
\t\t\t";
                }
                // line 3348
                echo " 
\t\t}
\t\t
\t\tul.megamenu > li > a strong,
\t\t.megamenuToogle-wrapper .container {
\t\t\tfont-size: ";
                // line 3353
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_bar_px"], "method", false, false, false, 3353);
                echo "px;
\t\t\tfont-weight: ";
                // line 3354
                echo (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_bar_weight"], "method", false, false, false, 3354) * 100);
                echo " !important;
\t\t\t";
                // line 3355
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_bar"], "method", false, false, false, 3355) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_bar"], "method", false, false, false, 3355) != "standard"))) {
                    echo " 
\t\t\tfont-family: ";
                    // line 3356
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_bar"], "method", false, false, false, 3356);
                    echo ";
\t\t\t";
                }
                // line 3357
                echo " 
\t\t\t
\t\t\t";
                // line 3359
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_bar_transform"], "method", false, false, false, 3359) == "uppercase")) {
                    echo " 
\t\t\ttext-transform: uppercase;
\t\t\t";
                }
                // line 3361
                echo " 
\t\t}
\t\t
\t\t";
                // line 3364
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_bar_line_height"], "method", false, false, false, 3364) >= 1)) {
                    echo " 
\t\t.horizontal ul.megamenu > li > a,
\t\t.megamenuToogle-wrapper .container {
\t\t     line-height: ";
                    // line 3367
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_bar_line_height"], "method", false, false, false, 3367);
                    echo ";
\t\t}
\t\t";
                }
                // line 3369
                echo " 
\t\t
\t\t.box .box-heading,
\t\t.center-column h1, 
\t\t.center-column h2, 
\t\t.center-column h3, 
\t\t.center-column h4, 
\t\t.center-column h5, 
\t\t.center-column h6,
\t\t.products-carousel-overflow .box-heading,
\t\t.htabs a,
\t\t.product-info .options h2,
\t\th3,
\t\th4,
\t\th6,
\t\t.product-block .title-block,
\t\t.filter-product .filter-tabs ul > li > a,
\t\t.popup h4,
\t\t.product-info .product-name a,
\t\tlegend {
\t\t\tfont-size: ";
                // line 3389
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "headlines_px"], "method", false, false, false, 3389);
                echo "px;
\t\t\tfont-weight: ";
                // line 3390
                echo (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "headlines_weight"], "method", false, false, false, 3390) * 100);
                echo " !important;
\t\t\t";
                // line 3391
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "headlines"], "method", false, false, false, 3391) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "headlines"], "method", false, false, false, 3391) != "standard"))) {
                    echo " 
\t\t\tfont-family: ";
                    // line 3392
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "headlines"], "method", false, false, false, 3392);
                    echo ";
\t\t\t";
                }
                // line 3393
                echo " 
\t\t\t
\t\t\t";
                // line 3395
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "headlines_transform"], "method", false, false, false, 3395) == "uppercase")) {
                    echo " 
\t\t\ttext-transform: uppercase;
\t\t\t";
                }
                // line 3397
                echo " 
\t\t}
\t\t
\t\t.box-with-categories .box-heading,
\t\t.vertical .megamenuToogle-wrapper .container {
\t\t\tfont-size: ";
                // line 3402
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_heading_px"], "method", false, false, false, 3402);
                echo "px;
\t\t\tfont-weight: ";
                // line 3403
                echo (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_heading_weight"], "method", false, false, false, 3403) * 100);
                echo " !important;
\t\t\t";
                // line 3404
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_heading"], "method", false, false, false, 3404) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_heading"], "method", false, false, false, 3404) != "standard"))) {
                    echo " 
\t\t\tfont-family: ";
                    // line 3405
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_heading"], "method", false, false, false, 3405);
                    echo ";
\t\t\t";
                }
                // line 3406
                echo " 
\t\t\t
\t\t\t";
                // line 3408
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_heading_transform"], "method", false, false, false, 3408) == "uppercase")) {
                    echo " 
\t\t\ttext-transform: uppercase;
\t\t\t";
                }
                // line 3410
                echo " 
\t\t}
\t\t
\t\t";
                // line 3413
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_heading_line_height"], "method", false, false, false, 3413) >= 1)) {
                    echo " 
\t\t.box-with-categories .box-heading,
\t\t.vertical .megamenuToogle-wrapper .container {
\t\t     line-height: ";
                    // line 3416
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_heading_line_height"], "method", false, false, false, 3416);
                    echo ";
\t\t}
\t\t";
                }
                // line 3418
                echo " 
\t\t
\t\t.box-category ul li > a,
\t\t.vertical ul.megamenu > li > a strong {
\t\t\tfont-size: ";
                // line 3422
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_links_px"], "method", false, false, false, 3422);
                echo "px;
\t\t\tfont-weight: ";
                // line 3423
                echo (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_links_weight"], "method", false, false, false, 3423) * 100);
                echo " !important;
\t\t\t";
                // line 3424
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_links"], "method", false, false, false, 3424) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_links"], "method", false, false, false, 3424) != "standard"))) {
                    echo " 
\t\t\tfont-family: ";
                    // line 3425
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_links"], "method", false, false, false, 3425);
                    echo ";
\t\t\t";
                }
                // line 3426
                echo " 
\t\t\t
\t\t\t";
                // line 3428
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_links_transform"], "method", false, false, false, 3428) == "uppercase")) {
                    echo " 
\t\t\ttext-transform: uppercase;
\t\t\t";
                }
                // line 3430
                echo " 
\t\t\t
\t\t\t";
                // line 3432
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_links_line_height"], "method", false, false, false, 3432) >= 1)) {
                    echo " 
\t\t\tline-height: ";
                    // line 3433
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_links_line_height"], "method", false, false, false, 3433);
                    echo ";
\t\t\t";
                }
                // line 3434
                echo " 
\t\t}
\t\t
\t\t     ";
                // line 3437
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_links_weight"], "method", false, false, false, 3437) == "4")) {
                    echo " 
\t\t     .firefox-mac .box-category ul li > a,
\t\t     .firefox-mac .vertical ul.megamenu > li > a strong {
\t\t          font-weight: 300 !important;
\t\t     }
\t\t     ";
                }
                // line 3442
                echo " 
\t\t
\t\t";
                // line 3444
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_box_links_px"], "method", false, false, false, 3444) == 13)) {
                    echo " 
\t\t.box-category ul li > a {
\t\t     padding-top: 16px;
\t\t}
\t\t";
                }
                // line 3448
                echo " 
\t\t
\t\t.sale,
\t\t#main .new {
\t\t\tfont-size: ";
                // line 3452
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_new_font_px"], "method", false, false, false, 3452);
                echo "px;
\t\t\tfont-weight: ";
                // line 3453
                echo (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_new_font_weight"], "method", false, false, false, 3453) * 100);
                echo " !important;
\t\t\t";
                // line 3454
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_new_font"], "method", false, false, false, 3454) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_new_font"], "method", false, false, false, 3454) != "standard"))) {
                    echo " 
\t\t\tfont-family: ";
                    // line 3455
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_new_font"], "method", false, false, false, 3455);
                    echo ";
\t\t\t";
                }
                // line 3456
                echo " 
\t\t\t
\t\t\t";
                // line 3458
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_new_font_text_transform"], "method", false, false, false, 3458) == "none")) {
                    echo " 
\t\t\ttext-transform: none;
\t\t\t";
                }
                // line 3460
                echo " 
\t\t\t
\t\t\t";
                // line 3462
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_new_line_height"], "method", false, false, false, 3462) >= 1)) {
                    echo " 
\t\t\tline-height: ";
                    // line 3463
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_new_line_height"], "method", false, false, false, 3463);
                    echo ";
\t\t\t";
                }
                // line 3464
                echo " 
\t\t}
\t\t
\t\t.footer h4,
\t\t.custom-footer h4 {
\t\t\tfont-size: ";
                // line 3469
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_headlines_px"], "method", false, false, false, 3469);
                echo "px;
\t\t\tfont-weight: ";
                // line 3470
                echo (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_headlines_weight"], "method", false, false, false, 3470) * 100);
                echo " !important;
\t\t\t";
                // line 3471
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_headlines"], "method", false, false, false, 3471) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_headlines"], "method", false, false, false, 3471) != "standard"))) {
                    echo " 
\t\t\tfont-family: ";
                    // line 3472
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_headlines"], "method", false, false, false, 3472);
                    echo ";
\t\t\t";
                }
                // line 3473
                echo " 
\t\t\t
\t\t\t";
                // line 3475
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_headlines_transform"], "method", false, false, false, 3475) == "uppercase")) {
                    echo " 
\t\t\ttext-transform: uppercase;
\t\t\t";
                }
                // line 3477
                echo " 
\t\t}
\t\t
\t\t.breadcrumb .container h1 {
\t\t\tfont-size: ";
                // line 3481
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_name_px"], "method", false, false, false, 3481);
                echo "px;
\t\t\tfont-weight: ";
                // line 3482
                echo (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_name_weight"], "method", false, false, false, 3482) * 100);
                echo " !important;
\t\t\t";
                // line 3483
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_name"], "method", false, false, false, 3483) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_name"], "method", false, false, false, 3483) != "standard"))) {
                    echo " 
\t\t\tfont-family: ";
                    // line 3484
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_name"], "method", false, false, false, 3484);
                    echo ";
\t\t\t";
                }
                // line 3485
                echo " 
\t\t\t
\t\t\t";
                // line 3487
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "page_name_transform"], "method", false, false, false, 3487) == "uppercase")) {
                    echo " 
\t\t\ttext-transform: uppercase;
\t\t\t";
                }
                // line 3489
                echo " 
\t\t}
\t\t
\t\t.button,
\t\t.btn,
\t\t.footer-button {
\t\t\tfont-size: ";
                // line 3495
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_font_px"], "method", false, false, false, 3495);
                echo "px !important; 
\t\t\tfont-weight: ";
                // line 3496
                echo (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_font_weight"], "method", false, false, false, 3496) * 100);
                echo " !important;
\t\t\t";
                // line 3497
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_font"], "method", false, false, false, 3497) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_font"], "method", false, false, false, 3497) != "standard"))) {
                    echo " 
\t\t\tfont-family: ";
                    // line 3498
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_font"], "method", false, false, false, 3498);
                    echo ";
\t\t\t";
                }
                // line 3499
                echo " 
\t\t\t
\t\t\t";
                // line 3501
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_font_text_transform"], "method", false, false, false, 3501) == "none")) {
                    echo " 
\t\t\ttext-transform: none;
\t\t\t";
                }
                // line 3503
                echo " 
\t\t\t
\t\t\t";
                // line 3505
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_font_line_height"], "method", false, false, false, 3505) >= 1)) {
                    echo " 
\t\t\tline-height: ";
                    // line 3506
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_font_line_height"], "method", false, false, false, 3506);
                    echo ";
\t\t\t";
                }
                // line 3507
                echo " 
\t\t}
\t\t
\t\t";
                // line 3510
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_font_px"], "method", false, false, false, 3510) > 12)) {
                    echo " 
\t\t.product-info .cart .add-to-cart #button-cart {
\t\t     font-size: ";
                    // line 3512
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_font_px"], "method", false, false, false, 3512);
                    echo "px !important; 
\t\t}
\t\t";
                }
                // line 3514
                echo " 
\t\t
\t\t";
                // line 3516
                if (((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price"], "method", false, false, false, 3516) != "") && (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price"], "method", false, false, false, 3516) != "standard"))) {
                    echo " 
\t\t.product-grid .product .price, 
\t\t.product-list .name-actions > .price, 
\t\t.product-info .price .price-new,
\t\tul.megamenu li .product .price,
\t\t.advanced-grid-products .product .right .price,
\t\t#top #cart_block .cart-heading p strong,
\t\t.cart-total table tr td:last-child,
\t\t.mini-cart-info td.total,
\t\t.mini-cart-total td:last-child,
\t\t.today-deals-products .product .price,
\t\t.product-info .price .price-old,
\t\t.architecture-products .product .right .price,
\t\t.matrialarts-products .matrial-product .right .price,
\t\t.today-deals-toys2-products .price,
\t\t.today-deals-petshop2-products .price,
\t\t.today-deals-shoes3-products .price,
\t\t.today-deals-computer8-products .price,
\t\t.today-deals-computer6-products .price {
\t\t\tfont-family: ";
                    // line 3535
                    echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price"], "method", false, false, false, 3535);
                    echo ";
\t\t}
\t\t";
                }
                // line 3537
                echo " 
\t\t
\t\t";
                // line 3539
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price"], "method", false, false, false, 3539) == "Teko")) {
                    echo " 
\t\t.product-grid .product .price, 
\t\t.product-list .name-actions > .price, 
\t\t.product-info .price .price-new,
\t\tul.megamenu li .product .price,
\t\t.advanced-grid-products .product .right .price,
\t\t#top #cart_block .cart-heading p strong,
\t\t.cart-total table tr td:last-child,
\t\t.mini-cart-info td.total,
\t\t.mini-cart-total td:last-child,
\t\t.today-deals-products .product .price,
\t\t.product-info .price .price-old {
\t\t     line-height: 1.3;
\t\t}
\t\t
\t\t#top #cart_block .cart-heading p:after {
\t\t     margin-top: 6px;
\t\t}
\t\t
\t\t#top #cart_block .cart-heading p {
\t\t     padding-top: 10px;
\t\t}
\t\t";
                }
                // line 3561
                echo " 
\t\t
\t\t.product-grid .product .price,
\t\t.advanced-grid-products .product .right .price,
\t\t#top #cart_block .cart-heading p strong,
\t\t.cart-total table tr td:last-child,
\t\t.mini-cart-info td.total,
\t\t.mini-cart-total td:last-child,
\t\t.today-deals-products .product .price,
\t\t.architecture-products .product .right .price,
\t\t.matrialarts-products .matrial-product .right .price {
\t\t\tfont-size: ";
                // line 3572
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price_px_small"], "method", false, false, false, 3572);
                echo "px;
\t\t\tfont-weight: ";
                // line 3573
                echo (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price_weight"], "method", false, false, false, 3573) * 100);
                echo " !important;
\t\t}
\t\t
\t\t";
                // line 3576
                if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price_px_small"], "method", false, false, false, 3576) == 20)) {
                    echo " 
\t\t#top #cart_block .cart-heading p strong,
\t\t.cart-total table tr td:last-child,
\t\t.mini-cart-total td:last-child,
\t\t.mini-cart-info td.total {
\t\t     font-size: 14px;
\t\t}
\t\t";
                }
                // line 3583
                echo " 
\t\t
\t\t.product-info .price .price-new {
\t\t\tfont-size: ";
                // line 3586
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price_px"], "method", false, false, false, 3586);
                echo "px;
\t\t\tfont-weight: ";
                // line 3587
                echo (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price_weight"], "method", false, false, false, 3587) * 100);
                echo " !important;
\t\t}
\t\t
\t\t.product-list .name-actions > .price {
\t\t\tfont-size: ";
                // line 3591
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price_px_medium"], "method", false, false, false, 3591);
                echo "px;
\t\t\tfont-weight: ";
                // line 3592
                echo (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price_weight"], "method", false, false, false, 3592) * 100);
                echo " !important;
\t\t}
\t\t
\t\t.price-old,
\t\t.today-deals-products .product .price .price-old,
\t\t.architecture-products .product .right .price .price-old {
\t\t\tfont-size: ";
                // line 3598
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price_px_old_price"], "method", false, false, false, 3598);
                echo "px;
\t\t\tfont-weight: ";
                // line 3599
                echo (twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_price_weight"], "method", false, false, false, 3599) * 100);
                echo ";
\t\t}
\t";
            }
            // line 3601
            echo " 
</style>
";
        }
        // line 3603
        echo " 

";
        // line 3605
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "background_status"], "method", false, false, false, 3605) == 1)) {
            echo " 
<style type=\"text/css\">
\t";
            // line 3607
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background_background"], "method", false, false, false, 3607) == "1")) {
                echo " 
\tbody { background-image:none !important; }
\t";
            }
            // line 3609
            echo " 
\t";
            // line 3610
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background_background"], "method", false, false, false, 3610) == "2")) {
                echo " 
\tbody { background-image:url(image/";
                // line 3611
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background"], "method", false, false, false, 3611);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background_position"], "method", false, false, false, 3611);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background_repeat"], "method", false, false, false, 3611);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background_attachment"], "method", false, false, false, 3611);
                echo " !important; }
\t";
            }
            // line 3612
            echo " 
\t";
            // line 3613
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background_background"], "method", false, false, false, 3613) == "3")) {
                echo " 
\tbody { background-image:url(image/subtle_patterns/";
                // line 3614
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background_subtle_patterns"], "method", false, false, false, 3614);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background_position"], "method", false, false, false, 3614);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background_repeat"], "method", false, false, false, 3614);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body_background_attachment"], "method", false, false, false, 3614);
                echo " !important; }
\t";
            }
            // line 3615
            echo " 
\t
\t";
            // line 3617
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body2_background_background"], "method", false, false, false, 3617) == "1")) {
                echo " 
\tbody .standard-body:before, 
\tbody .fixed-body:before { background-image:none !important; }
\t";
            }
            // line 3620
            echo " 
\t";
            // line 3621
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body2_background_background"], "method", false, false, false, 3621) == "2")) {
                echo " 
\tbody .standard-body:before, 
\tbody .fixed-body:before { background-image:url(image/";
                // line 3623
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body2_background"], "method", false, false, false, 3623);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body2_background_position"], "method", false, false, false, 3623);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body2_background_repeat"], "method", false, false, false, 3623);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body2_background_attachment"], "method", false, false, false, 3623);
                echo " !important; }
\t";
            }
            // line 3624
            echo " 
\t";
            // line 3625
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body2_background_background"], "method", false, false, false, 3625) == "3")) {
                echo " 
\tbody .standard-body:before, 
\tbody .fixed-body:before { background-image:url(image/subtle_patterns/";
                // line 3627
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body2_background_subtle_patterns"], "method", false, false, false, 3627);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body2_background_position"], "method", false, false, false, 3627);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body2_background_repeat"], "method", false, false, false, 3627);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body2_background_attachment"], "method", false, false, false, 3627);
                echo " !important; }
\t";
            }
            // line 3628
            echo " 
\t
\t";
            // line 3630
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body3_background_background"], "method", false, false, false, 3630) == "1")) {
                echo " 
\t.fixed-body,
\t.standard-body { }
\t";
            }
            // line 3633
            echo " 
\t";
            // line 3634
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body3_background_background"], "method", false, false, false, 3634) == "2")) {
                echo " 
\t.fixed-body,
\t.standard-body { background-image:url(image/";
                // line 3636
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body3_background"], "method", false, false, false, 3636);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body3_background_position"], "method", false, false, false, 3636);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body3_background_repeat"], "method", false, false, false, 3636);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body3_background_attachment"], "method", false, false, false, 3636);
                echo " !important; }
\t";
            }
            // line 3637
            echo " 
\t";
            // line 3638
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body3_background_background"], "method", false, false, false, 3638) == "3")) {
                echo " 
\t.fixed-body,
\t.standard-body { background-image:url(image/subtle_patterns/";
                // line 3640
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body3_background_subtle_patterns"], "method", false, false, false, 3640);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body3_background_position"], "method", false, false, false, 3640);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body3_background_repeat"], "method", false, false, false, 3640);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "body3_background_attachment"], "method", false, false, false, 3640);
                echo " !important; }
\t";
            }
            // line 3641
            echo " 
\t
\t";
            // line 3643
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_background"], "method", false, false, false, 3643) == "1")) {
                echo " 
\t.top-bar { background-image:none !important; }
\t";
            }
            // line 3645
            echo " 
\t";
            // line 3646
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_background"], "method", false, false, false, 3646) == "2")) {
                echo " 
\t.top-bar { background-image:url(image/";
                // line 3647
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background"], "method", false, false, false, 3647);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_position"], "method", false, false, false, 3647);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_repeat"], "method", false, false, false, 3647);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_attachment"], "method", false, false, false, 3647);
                echo " !important; }
\t";
            }
            // line 3648
            echo " 
\t";
            // line 3649
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_background"], "method", false, false, false, 3649) == "3")) {
                echo " 
\t.top-bar { background-image:url(image/subtle_patterns/";
                // line 3650
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_subtle_patterns"], "method", false, false, false, 3650);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_position"], "method", false, false, false, 3650);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_repeat"], "method", false, false, false, 3650);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_bar_background_attachment"], "method", false, false, false, 3650);
                echo " !important; }
\t";
            }
            // line 3651
            echo " 
\t
\t";
            // line 3653
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_background_background"], "method", false, false, false, 3653) == "1")) {
                echo " 
\theader { background-image:none !important; }
\t";
            }
            // line 3655
            echo " 
\t";
            // line 3656
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_background_background"], "method", false, false, false, 3656) == "2")) {
                echo " 
\theader { background-image:url(image/";
                // line 3657
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_background"], "method", false, false, false, 3657);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_background_position"], "method", false, false, false, 3657);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_background_repeat"], "method", false, false, false, 3657);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_background_attachment"], "method", false, false, false, 3657);
                echo " !important; }
\t";
            }
            // line 3658
            echo " 
\t";
            // line 3659
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_background_background"], "method", false, false, false, 3659) == "3")) {
                echo " 
\theader { background-image:url(image/subtle_patterns/";
                // line 3660
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_background_subtle_patterns"], "method", false, false, false, 3660);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_background_position"], "method", false, false, false, 3660);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_background_repeat"], "method", false, false, false, 3660);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "header_background_attachment"], "method", false, false, false, 3660);
                echo " !important; }
\t";
            }
            // line 3661
            echo " 
\t
\t";
            // line 3663
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_background"], "method", false, false, false, 3663) == "1")) {
                echo " 
\t#top > .background { background-image:none !important; }
\t";
            }
            // line 3665
            echo " 
\t";
            // line 3666
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_background"], "method", false, false, false, 3666) == "2")) {
                echo " 
\t#top > .background { background-image:url(image/";
                // line 3667
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background"], "method", false, false, false, 3667);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_position"], "method", false, false, false, 3667);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_repeat"], "method", false, false, false, 3667);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_attachment"], "method", false, false, false, 3667);
                echo " !important; }
\t";
            }
            // line 3668
            echo " 
\t";
            // line 3669
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_background"], "method", false, false, false, 3669) == "3")) {
                echo " 
\t#top > .background { background-image:url(image/subtle_patterns/";
                // line 3670
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_subtle_patterns"], "method", false, false, false, 3670);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_position"], "method", false, false, false, 3670);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_repeat"], "method", false, false, false, 3670);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "top_background_attachment"], "method", false, false, false, 3670);
                echo " !important; }
\t";
            }
            // line 3671
            echo " 
\t
\t";
            // line 3673
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_background"], "method", false, false, false, 3673) == "1")) {
                echo " 
\t.megamenu-background, .megamenu-background > div, .standard-body .full-width .megamenu-background .mega-menu-modules > div:first-child:before,
\t.responsive .standard-body .full-width .megamenu-background .megaMenuToggle:before, .megamenuToogle-wrapper .megamenuToogle-pattern { background-image:none !important; }
\t";
            }
            // line 3676
            echo " 
\t";
            // line 3677
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_background"], "method", false, false, false, 3677) == "2")) {
                echo " 
\t.megamenu-background > div {
\t     background-image:url(image/";
                // line 3679
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background"], "method", false, false, false, 3679);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_position"], "method", false, false, false, 3679);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_repeat"], "method", false, false, false, 3679);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_attachment"], "method", false, false, false, 3679);
                echo " !important;
\t}
\t
\t.standard-body .full-width .megamenu-background .mega-menu-modules > div:first-child:before,
\t.responsive .standard-body .full-width .megamenu-background .megaMenuToggle:before, .megamenuToogle-wrapper .megamenuToogle-pattern { background-image:none !important; }
\t";
            }
            // line 3684
            echo " 
\t";
            // line 3685
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_background"], "method", false, false, false, 3685) == "3")) {
                echo " 
\t.megamenu-background > div { background-image:url(image/subtle_patterns/";
                // line 3686
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_subtle_patterns"], "method", false, false, false, 3686);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_position"], "method", false, false, false, 3686);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_repeat"], "method", false, false, false, 3686);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "menu_background_attachment"], "method", false, false, false, 3686);
                echo " !important; }
\t";
            }
            // line 3687
            echo " 
\t
\t";
            // line 3689
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_background_background"], "method", false, false, false, 3689) == "1")) {
                echo " 
\t#slider .pattern { background-image:none !important; }
\t";
            }
            // line 3691
            echo " 
\t";
            // line 3692
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_background_background"], "method", false, false, false, 3692) == "2")) {
                echo " 
\t#slider .pattern { background-image:url(image/";
                // line 3693
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_background"], "method", false, false, false, 3693);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_background_position"], "method", false, false, false, 3693);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_background_repeat"], "method", false, false, false, 3693);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_background_attachment"], "method", false, false, false, 3693);
                echo " !important; }
\t";
            }
            // line 3694
            echo " 
\t";
            // line 3695
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_background_background"], "method", false, false, false, 3695) == "3")) {
                echo " 
\t#slider .pattern { background-image:url(image/subtle_patterns/";
                // line 3696
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_background_subtle_patterns"], "method", false, false, false, 3696);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_background_position"], "method", false, false, false, 3696);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_background_repeat"], "method", false, false, false, 3696);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "slider_background_attachment"], "method", false, false, false, 3696);
                echo " !important; }
\t";
            }
            // line 3697
            echo " 
\t
     ";
            // line 3699
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_background_background"], "method", false, false, false, 3699) == "1")) {
                echo " 
     .footer .pattern { background-image:none !important; }
     ";
            }
            // line 3701
            echo " 
     ";
            // line 3702
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_background_background"], "method", false, false, false, 3702) == "2")) {
                echo " 
     .footer .pattern { background-image:url(image/";
                // line 3703
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_background"], "method", false, false, false, 3703);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_background_position"], "method", false, false, false, 3703);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_background_repeat"], "method", false, false, false, 3703);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_background_attachment"], "method", false, false, false, 3703);
                echo " !important; }
     ";
            }
            // line 3704
            echo " 
     ";
            // line 3705
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_background_background"], "method", false, false, false, 3705) == "3")) {
                echo " 
     .footer .pattern { background-image:url(image/subtle_patterns/";
                // line 3706
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_background_subtle_patterns"], "method", false, false, false, 3706);
                echo ");background-position:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_background_position"], "method", false, false, false, 3706);
                echo ";background-repeat:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_background_repeat"], "method", false, false, false, 3706);
                echo " !important;background-attachment:";
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_background_attachment"], "method", false, false, false, 3706);
                echo " !important; }
     ";
            }
            // line 3707
            echo " 
\t
\t";
            // line 3709
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_heading_background_background"], "method", false, false, false, 3709) == "2")) {
                echo " 
\t.box-with-categories .box-heading { background-image:url(image/";
                // line 3710
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "categories_heading_background"], "method", false, false, false, 3710);
                echo ");background-repeat: repeat;background-position: top left; }
\t";
            }
            // line 3711
            echo " 
\t
\t";
            // line 3713
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_navigation_background_background"], "method", false, false, false, 3713) == "2")) {
                echo " 
\t.megamenuToogle-wrapper { background-image:url(image/";
                // line 3714
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "mobile_menu_navigation_background"], "method", false, false, false, 3714);
                echo ") !important;background-repeat: repeat;background-position: top left; }
\t";
            }
            // line 3715
            echo " 
\t
\t";
            // line 3717
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_label_background_background"], "method", false, false, false, 3717) == "2")) {
                echo " 
\t#main .new { background-image:url(image/";
                // line 3718
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "new_label_background"], "method", false, false, false, 3718);
                echo ") !important;background-repeat: repeat;background-position: top left; }
\t";
            }
            // line 3719
            echo " 
\t
\t";
            // line 3721
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_label_background_background"], "method", false, false, false, 3721) == "2")) {
                echo " 
\t.sale { background-image:url(image/";
                // line 3722
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "sale_label_background"], "method", false, false, false, 3722);
                echo ") !important;background-repeat: repeat;background-position: top left; }
\t";
            }
            // line 3723
            echo " 
\t
\t";
            // line 3725
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_background_background"], "method", false, false, false, 3725) == "2")) {
                echo " 
\t.button, .btn, .button:hover, .btn:hover { background-image:url(image/";
                // line 3726
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "button_background"], "method", false, false, false, 3726);
                echo ") !important;background-repeat: repeat !important;background-position: top left !important; }
\t";
            }
            // line 3727
            echo " 
\t
\t";
            // line 3729
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_button_background_background"], "method", false, false, false, 3729) == "2")) {
                echo " 
\t.buttons .left .button,
\t.buttons .center .button,
\t.btn-default,
\t.input-group-btn .btn-primary,
\t.buttons .left .button:hover,
\t.buttons .center .button:hover,
\t.btn-default:hover,
\t.input-group-btn .btn-primary:hover { background-image:url(image/";
                // line 3737
                echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "second_button_background"], "method", false, false, false, 3737);
                echo ") !important;background-repeat: repeat !important;background-position: top left !important; }
\t";
            }
            // line 3738
            echo " 
</style>
";
        }
    }

    public function getTemplateName()
    {
        return "kiaria/css/custom_colors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  8973 => 3738,  8968 => 3737,  8957 => 3729,  8953 => 3727,  8948 => 3726,  8944 => 3725,  8940 => 3723,  8935 => 3722,  8931 => 3721,  8927 => 3719,  8922 => 3718,  8918 => 3717,  8914 => 3715,  8909 => 3714,  8905 => 3713,  8901 => 3711,  8896 => 3710,  8892 => 3709,  8888 => 3707,  8877 => 3706,  8873 => 3705,  8870 => 3704,  8859 => 3703,  8855 => 3702,  8852 => 3701,  8846 => 3699,  8842 => 3697,  8831 => 3696,  8827 => 3695,  8824 => 3694,  8813 => 3693,  8809 => 3692,  8806 => 3691,  8800 => 3689,  8796 => 3687,  8785 => 3686,  8781 => 3685,  8778 => 3684,  8763 => 3679,  8758 => 3677,  8755 => 3676,  8748 => 3673,  8744 => 3671,  8733 => 3670,  8729 => 3669,  8726 => 3668,  8715 => 3667,  8711 => 3666,  8708 => 3665,  8702 => 3663,  8698 => 3661,  8687 => 3660,  8683 => 3659,  8680 => 3658,  8669 => 3657,  8665 => 3656,  8662 => 3655,  8656 => 3653,  8652 => 3651,  8641 => 3650,  8637 => 3649,  8634 => 3648,  8623 => 3647,  8619 => 3646,  8616 => 3645,  8610 => 3643,  8606 => 3641,  8595 => 3640,  8590 => 3638,  8587 => 3637,  8576 => 3636,  8571 => 3634,  8568 => 3633,  8561 => 3630,  8557 => 3628,  8546 => 3627,  8541 => 3625,  8538 => 3624,  8527 => 3623,  8522 => 3621,  8519 => 3620,  8512 => 3617,  8508 => 3615,  8497 => 3614,  8493 => 3613,  8490 => 3612,  8479 => 3611,  8475 => 3610,  8472 => 3609,  8466 => 3607,  8461 => 3605,  8457 => 3603,  8452 => 3601,  8446 => 3599,  8442 => 3598,  8433 => 3592,  8429 => 3591,  8422 => 3587,  8418 => 3586,  8413 => 3583,  8402 => 3576,  8396 => 3573,  8392 => 3572,  8379 => 3561,  8353 => 3539,  8349 => 3537,  8343 => 3535,  8321 => 3516,  8317 => 3514,  8311 => 3512,  8306 => 3510,  8301 => 3507,  8296 => 3506,  8292 => 3505,  8288 => 3503,  8282 => 3501,  8278 => 3499,  8273 => 3498,  8269 => 3497,  8265 => 3496,  8261 => 3495,  8253 => 3489,  8247 => 3487,  8243 => 3485,  8238 => 3484,  8234 => 3483,  8230 => 3482,  8226 => 3481,  8220 => 3477,  8214 => 3475,  8210 => 3473,  8205 => 3472,  8201 => 3471,  8197 => 3470,  8193 => 3469,  8186 => 3464,  8181 => 3463,  8177 => 3462,  8173 => 3460,  8167 => 3458,  8163 => 3456,  8158 => 3455,  8154 => 3454,  8150 => 3453,  8146 => 3452,  8140 => 3448,  8132 => 3444,  8128 => 3442,  8119 => 3437,  8114 => 3434,  8109 => 3433,  8105 => 3432,  8101 => 3430,  8095 => 3428,  8091 => 3426,  8086 => 3425,  8082 => 3424,  8078 => 3423,  8074 => 3422,  8068 => 3418,  8062 => 3416,  8056 => 3413,  8051 => 3410,  8045 => 3408,  8041 => 3406,  8036 => 3405,  8032 => 3404,  8028 => 3403,  8024 => 3402,  8017 => 3397,  8011 => 3395,  8007 => 3393,  8002 => 3392,  7998 => 3391,  7994 => 3390,  7990 => 3389,  7968 => 3369,  7962 => 3367,  7956 => 3364,  7951 => 3361,  7945 => 3359,  7941 => 3357,  7936 => 3356,  7932 => 3355,  7928 => 3354,  7924 => 3353,  7917 => 3348,  7912 => 3347,  7908 => 3346,  7904 => 3344,  7898 => 3342,  7894 => 3340,  7889 => 3339,  7885 => 3338,  7881 => 3337,  7877 => 3336,  7871 => 3332,  7865 => 3330,  7860 => 3328,  7836 => 3306,  7828 => 3302,  7822 => 3299,  7808 => 3287,  7803 => 3286,  7799 => 3285,  7794 => 3282,  7761 => 3253,  7757 => 3251,  7728 => 3226,  7724 => 3224,  7701 => 3205,  7697 => 3203,  7685 => 3195,  7681 => 3193,  7671 => 3187,  7665 => 3183,  7660 => 3182,  7656 => 3181,  7648 => 3175,  7643 => 3174,  7639 => 3173,  7631 => 3167,  7626 => 3166,  7622 => 3165,  7618 => 3164,  7614 => 3163,  7608 => 3160,  7604 => 3158,  7600 => 3157,  7594 => 3155,  7588 => 3152,  7584 => 3150,  7578 => 3148,  7572 => 3145,  7568 => 3143,  7562 => 3141,  7556 => 3138,  7552 => 3136,  7546 => 3134,  7540 => 3131,  7536 => 3129,  7530 => 3127,  7524 => 3124,  7520 => 3122,  7514 => 3120,  7508 => 3117,  7504 => 3115,  7494 => 3113,  7486 => 3112,  7478 => 3111,  7470 => 3110,  7462 => 3109,  7454 => 3108,  7450 => 3107,  7440 => 3100,  7436 => 3098,  7430 => 3096,  7420 => 3089,  7416 => 3087,  7410 => 3085,  7400 => 3078,  7396 => 3076,  7386 => 3074,  7378 => 3073,  7370 => 3072,  7362 => 3071,  7354 => 3070,  7346 => 3069,  7342 => 3068,  7332 => 3061,  7328 => 3059,  7322 => 3057,  7312 => 3050,  7308 => 3048,  7302 => 3046,  7292 => 3039,  7288 => 3037,  7282 => 3035,  7277 => 3033,  7273 => 3031,  7267 => 3029,  7262 => 3027,  7258 => 3025,  7252 => 3023,  7242 => 3016,  7238 => 3014,  7228 => 3012,  7220 => 3011,  7212 => 3010,  7204 => 3009,  7196 => 3008,  7188 => 3007,  7184 => 3006,  7179 => 3004,  7175 => 3002,  7169 => 3000,  7164 => 2998,  7160 => 2996,  7154 => 2994,  7149 => 2992,  7145 => 2990,  7135 => 2988,  7127 => 2987,  7119 => 2986,  7111 => 2985,  7103 => 2984,  7095 => 2983,  7091 => 2982,  7086 => 2980,  7082 => 2978,  7076 => 2976,  7071 => 2974,  7067 => 2972,  7061 => 2970,  7056 => 2968,  7052 => 2966,  7046 => 2964,  7036 => 2957,  7022 => 2946,  7018 => 2944,  7012 => 2942,  7004 => 2937,  7000 => 2935,  6994 => 2933,  6989 => 2931,  6985 => 2929,  6979 => 2927,  6974 => 2925,  6970 => 2923,  6964 => 2921,  6959 => 2919,  6955 => 2917,  6949 => 2915,  6944 => 2913,  6940 => 2911,  6934 => 2909,  6928 => 2906,  6924 => 2904,  6914 => 2898,  6908 => 2895,  6904 => 2893,  6898 => 2891,  6889 => 2885,  6885 => 2883,  6879 => 2881,  6873 => 2878,  6869 => 2876,  6863 => 2874,  6856 => 2870,  6852 => 2868,  6846 => 2866,  6841 => 2864,  6837 => 2862,  6831 => 2860,  6824 => 2856,  6820 => 2854,  6810 => 2852,  6802 => 2851,  6794 => 2850,  6786 => 2849,  6778 => 2848,  6770 => 2847,  6766 => 2846,  6761 => 2844,  6757 => 2842,  6751 => 2840,  6746 => 2838,  6742 => 2836,  6736 => 2834,  6731 => 2832,  6727 => 2830,  6721 => 2828,  6716 => 2826,  6712 => 2824,  6702 => 2822,  6694 => 2821,  6686 => 2820,  6678 => 2819,  6670 => 2818,  6662 => 2817,  6658 => 2816,  6653 => 2814,  6649 => 2812,  6643 => 2810,  6638 => 2808,  6634 => 2806,  6628 => 2804,  6623 => 2802,  6619 => 2800,  6613 => 2798,  6608 => 2796,  6604 => 2794,  6594 => 2792,  6586 => 2791,  6578 => 2790,  6570 => 2789,  6562 => 2788,  6554 => 2787,  6550 => 2786,  6545 => 2784,  6541 => 2782,  6535 => 2780,  6530 => 2778,  6526 => 2776,  6520 => 2774,  6515 => 2772,  6511 => 2770,  6505 => 2768,  6500 => 2766,  6496 => 2764,  6486 => 2762,  6478 => 2761,  6470 => 2760,  6462 => 2759,  6454 => 2758,  6446 => 2757,  6442 => 2756,  6437 => 2754,  6433 => 2752,  6427 => 2750,  6422 => 2748,  6418 => 2746,  6412 => 2744,  6407 => 2742,  6403 => 2740,  6397 => 2738,  6392 => 2736,  6388 => 2734,  6382 => 2732,  6377 => 2730,  6373 => 2728,  6367 => 2726,  6362 => 2724,  6358 => 2722,  6352 => 2720,  6347 => 2718,  6343 => 2716,  6333 => 2714,  6325 => 2713,  6317 => 2712,  6309 => 2711,  6301 => 2710,  6293 => 2709,  6289 => 2708,  6284 => 2706,  6280 => 2704,  6274 => 2702,  6269 => 2700,  6265 => 2698,  6259 => 2696,  6254 => 2694,  6250 => 2692,  6244 => 2690,  6239 => 2688,  6235 => 2686,  6225 => 2684,  6217 => 2683,  6209 => 2682,  6201 => 2681,  6193 => 2680,  6185 => 2679,  6181 => 2678,  6176 => 2676,  6172 => 2674,  6166 => 2672,  6161 => 2670,  6157 => 2668,  6151 => 2666,  6146 => 2664,  6142 => 2662,  6136 => 2660,  6127 => 2654,  6123 => 2652,  6117 => 2650,  6108 => 2644,  6104 => 2642,  6098 => 2640,  6089 => 2634,  6085 => 2632,  6079 => 2630,  6070 => 2624,  6066 => 2622,  6060 => 2620,  6051 => 2614,  6047 => 2612,  6041 => 2610,  6032 => 2604,  6028 => 2602,  6022 => 2600,  6017 => 2598,  6013 => 2596,  6007 => 2594,  6002 => 2592,  5998 => 2590,  5992 => 2588,  5985 => 2584,  5980 => 2582,  5976 => 2580,  5970 => 2578,  5965 => 2576,  5961 => 2574,  5955 => 2572,  5950 => 2570,  5946 => 2568,  5940 => 2566,  5935 => 2564,  5931 => 2562,  5925 => 2560,  5920 => 2558,  5916 => 2556,  5910 => 2554,  5905 => 2552,  5901 => 2550,  5895 => 2548,  5890 => 2546,  5886 => 2544,  5880 => 2542,  5875 => 2540,  5871 => 2538,  5865 => 2536,  5860 => 2534,  5856 => 2532,  5850 => 2530,  5845 => 2528,  5841 => 2526,  5835 => 2524,  5830 => 2522,  5826 => 2520,  5820 => 2518,  5815 => 2516,  5811 => 2514,  5805 => 2512,  5800 => 2510,  5796 => 2508,  5790 => 2506,  5782 => 2501,  5774 => 2496,  5767 => 2492,  5760 => 2488,  5755 => 2486,  5751 => 2484,  5745 => 2482,  5740 => 2480,  5736 => 2478,  5730 => 2476,  5725 => 2474,  5721 => 2472,  5715 => 2470,  5710 => 2468,  5706 => 2466,  5700 => 2464,  5695 => 2462,  5691 => 2460,  5685 => 2458,  5680 => 2456,  5676 => 2454,  5670 => 2452,  5665 => 2450,  5661 => 2448,  5655 => 2446,  5650 => 2444,  5646 => 2442,  5640 => 2440,  5635 => 2438,  5631 => 2436,  5625 => 2434,  5619 => 2431,  5615 => 2429,  5609 => 2427,  5603 => 2424,  5599 => 2422,  5593 => 2420,  5588 => 2418,  5584 => 2416,  5578 => 2414,  5567 => 2406,  5563 => 2404,  5557 => 2402,  5546 => 2394,  5542 => 2392,  5532 => 2390,  5524 => 2389,  5516 => 2388,  5508 => 2387,  5500 => 2386,  5492 => 2385,  5488 => 2384,  5477 => 2376,  5473 => 2374,  5467 => 2372,  5456 => 2364,  5452 => 2362,  5446 => 2360,  5435 => 2352,  5431 => 2350,  5425 => 2348,  5414 => 2340,  5410 => 2338,  5400 => 2336,  5392 => 2335,  5384 => 2334,  5376 => 2333,  5368 => 2332,  5360 => 2331,  5356 => 2330,  5345 => 2322,  5341 => 2320,  5335 => 2318,  5324 => 2310,  5320 => 2308,  5314 => 2306,  5309 => 2304,  5305 => 2302,  5299 => 2300,  5294 => 2298,  5290 => 2296,  5284 => 2294,  5274 => 2287,  5270 => 2285,  5264 => 2283,  5254 => 2276,  5250 => 2274,  5244 => 2272,  5233 => 2264,  5229 => 2262,  5222 => 2259,  5213 => 2253,  5205 => 2248,  5198 => 2244,  5182 => 2231,  5178 => 2229,  5174 => 2228,  5154 => 2212,  5148 => 2209,  5141 => 2205,  5126 => 2193,  5122 => 2191,  5116 => 2189,  5111 => 2187,  5107 => 2185,  5097 => 2183,  5089 => 2182,  5081 => 2181,  5073 => 2180,  5065 => 2179,  5057 => 2178,  5053 => 2177,  5048 => 2175,  5044 => 2173,  5038 => 2171,  5033 => 2169,  5029 => 2167,  5023 => 2165,  5018 => 2163,  5014 => 2161,  5008 => 2159,  5001 => 2155,  4997 => 2153,  4991 => 2151,  4986 => 2149,  4982 => 2147,  4976 => 2145,  4971 => 2143,  4967 => 2141,  4961 => 2139,  4956 => 2137,  4952 => 2135,  4946 => 2133,  4941 => 2131,  4937 => 2129,  4932 => 2127,  4926 => 2125,  4921 => 2123,  4916 => 2121,  4912 => 2119,  4905 => 2116,  4900 => 2114,  4896 => 2112,  4890 => 2110,  4885 => 2108,  4881 => 2106,  4875 => 2104,  4870 => 2102,  4866 => 2100,  4860 => 2098,  4855 => 2096,  4851 => 2094,  4845 => 2092,  4840 => 2090,  4836 => 2088,  4830 => 2086,  4825 => 2084,  4821 => 2082,  4815 => 2080,  4809 => 2077,  4805 => 2075,  4799 => 2073,  4793 => 2070,  4789 => 2068,  4783 => 2066,  4778 => 2064,  4774 => 2062,  4768 => 2060,  4763 => 2058,  4759 => 2056,  4753 => 2054,  4747 => 2051,  4743 => 2049,  4737 => 2047,  4732 => 2045,  4728 => 2043,  4722 => 2041,  4717 => 2039,  4713 => 2037,  4706 => 2034,  4701 => 2032,  4697 => 2030,  4690 => 2027,  4685 => 2025,  4681 => 2023,  4674 => 2020,  4669 => 2018,  4665 => 2016,  4659 => 2014,  4654 => 2012,  4650 => 2010,  4643 => 2007,  4635 => 2002,  4629 => 1999,  4625 => 1997,  4619 => 1995,  4613 => 1992,  4609 => 1990,  4602 => 1987,  4594 => 1982,  4589 => 1980,  4585 => 1978,  4579 => 1976,  4574 => 1974,  4570 => 1972,  4564 => 1970,  4559 => 1968,  4555 => 1966,  4548 => 1963,  4541 => 1959,  4537 => 1957,  4530 => 1954,  4523 => 1950,  4519 => 1948,  4512 => 1945,  4506 => 1942,  4502 => 1940,  4495 => 1937,  4488 => 1933,  4484 => 1931,  4477 => 1928,  4471 => 1925,  4467 => 1923,  4459 => 1919,  4453 => 1916,  4449 => 1914,  4442 => 1911,  4436 => 1908,  4432 => 1906,  4426 => 1904,  4420 => 1901,  4416 => 1899,  4410 => 1897,  4404 => 1894,  4400 => 1892,  4396 => 1891,  4388 => 1889,  4382 => 1888,  4376 => 1887,  4370 => 1886,  4364 => 1885,  4358 => 1884,  4354 => 1883,  4348 => 1880,  4338 => 1877,  4330 => 1876,  4322 => 1875,  4314 => 1874,  4306 => 1873,  4298 => 1872,  4294 => 1871,  4288 => 1868,  4284 => 1866,  4278 => 1864,  4272 => 1861,  4268 => 1859,  4262 => 1857,  4257 => 1855,  4253 => 1853,  4247 => 1851,  4242 => 1849,  4238 => 1847,  4234 => 1846,  4226 => 1844,  4220 => 1843,  4214 => 1842,  4208 => 1841,  4202 => 1840,  4196 => 1839,  4192 => 1838,  4187 => 1836,  4177 => 1833,  4169 => 1832,  4161 => 1831,  4153 => 1830,  4145 => 1829,  4137 => 1828,  4133 => 1827,  4128 => 1825,  4124 => 1823,  4117 => 1820,  4109 => 1815,  4104 => 1813,  4100 => 1811,  4094 => 1809,  4089 => 1807,  4085 => 1805,  4079 => 1803,  4074 => 1801,  4070 => 1799,  4064 => 1797,  4059 => 1795,  4055 => 1793,  4049 => 1791,  4043 => 1788,  4039 => 1786,  4033 => 1784,  4028 => 1782,  4024 => 1780,  4018 => 1778,  4012 => 1775,  4008 => 1773,  4002 => 1771,  3997 => 1769,  3993 => 1767,  3987 => 1765,  3982 => 1763,  3978 => 1761,  3965 => 1752,  3952 => 1742,  3944 => 1737,  3936 => 1732,  3929 => 1728,  3923 => 1725,  3919 => 1723,  3913 => 1721,  3907 => 1718,  3903 => 1716,  3897 => 1714,  3891 => 1711,  3887 => 1709,  3881 => 1707,  3876 => 1705,  3872 => 1703,  3866 => 1701,  3860 => 1698,  3856 => 1696,  3850 => 1694,  3845 => 1692,  3841 => 1690,  3834 => 1687,  3829 => 1685,  3825 => 1683,  3818 => 1680,  3813 => 1678,  3809 => 1676,  3803 => 1674,  3798 => 1672,  3794 => 1670,  3788 => 1668,  3783 => 1666,  3779 => 1664,  3769 => 1662,  3761 => 1661,  3753 => 1660,  3745 => 1659,  3737 => 1658,  3729 => 1657,  3725 => 1656,  3716 => 1650,  3712 => 1648,  3706 => 1646,  3697 => 1640,  3693 => 1638,  3687 => 1636,  3609 => 1561,  3601 => 1556,  3597 => 1554,  3591 => 1552,  3582 => 1546,  3578 => 1544,  3567 => 1541,  3559 => 1540,  3551 => 1539,  3543 => 1538,  3535 => 1537,  3527 => 1536,  3523 => 1535,  3512 => 1531,  3504 => 1530,  3496 => 1529,  3488 => 1528,  3480 => 1527,  3472 => 1526,  3468 => 1525,  3462 => 1522,  3458 => 1520,  3451 => 1517,  3443 => 1512,  3437 => 1509,  3433 => 1507,  3427 => 1505,  3418 => 1499,  3409 => 1493,  3400 => 1487,  3391 => 1481,  3382 => 1475,  3373 => 1469,  3368 => 1467,  3364 => 1465,  3358 => 1463,  3353 => 1461,  3349 => 1459,  3339 => 1457,  3331 => 1456,  3323 => 1455,  3315 => 1454,  3307 => 1453,  3299 => 1452,  3295 => 1451,  3290 => 1449,  3286 => 1447,  3280 => 1445,  3275 => 1443,  3271 => 1441,  3265 => 1439,  3260 => 1437,  3256 => 1435,  3250 => 1433,  3243 => 1429,  3239 => 1427,  3233 => 1425,  3228 => 1423,  3224 => 1421,  3220 => 1420,  3212 => 1418,  3206 => 1417,  3200 => 1416,  3194 => 1415,  3188 => 1414,  3182 => 1413,  3178 => 1412,  3173 => 1410,  3163 => 1407,  3155 => 1406,  3147 => 1405,  3139 => 1404,  3131 => 1403,  3123 => 1402,  3119 => 1401,  3114 => 1399,  3110 => 1397,  3104 => 1395,  3099 => 1393,  3095 => 1391,  3089 => 1389,  3084 => 1387,  3080 => 1385,  3074 => 1383,  3069 => 1381,  3065 => 1379,  3059 => 1377,  3054 => 1375,  3050 => 1373,  3044 => 1371,  3039 => 1369,  3035 => 1367,  3029 => 1365,  3024 => 1363,  3020 => 1361,  3014 => 1359,  3009 => 1357,  3005 => 1355,  2995 => 1353,  2987 => 1352,  2979 => 1351,  2971 => 1350,  2963 => 1349,  2955 => 1348,  2951 => 1347,  2946 => 1345,  2942 => 1343,  2936 => 1341,  2931 => 1339,  2927 => 1337,  2921 => 1335,  2916 => 1333,  2912 => 1331,  2906 => 1329,  2901 => 1327,  2897 => 1325,  2891 => 1323,  2886 => 1321,  2882 => 1319,  2872 => 1317,  2864 => 1316,  2856 => 1315,  2848 => 1314,  2840 => 1313,  2832 => 1312,  2828 => 1311,  2823 => 1309,  2819 => 1307,  2813 => 1305,  2808 => 1303,  2804 => 1301,  2798 => 1299,  2793 => 1297,  2789 => 1295,  2779 => 1293,  2771 => 1292,  2763 => 1291,  2755 => 1290,  2747 => 1289,  2739 => 1288,  2735 => 1287,  2725 => 1280,  2721 => 1278,  2715 => 1276,  2705 => 1269,  2701 => 1267,  2697 => 1266,  2678 => 1251,  2672 => 1248,  2656 => 1235,  2652 => 1233,  2642 => 1231,  2634 => 1230,  2626 => 1229,  2618 => 1228,  2610 => 1227,  2602 => 1226,  2598 => 1225,  2588 => 1218,  2584 => 1216,  2578 => 1214,  2568 => 1207,  2564 => 1205,  2559 => 1203,  2540 => 1188,  2534 => 1185,  2518 => 1172,  2514 => 1170,  2508 => 1168,  2502 => 1165,  2498 => 1163,  2488 => 1161,  2480 => 1160,  2472 => 1159,  2464 => 1158,  2456 => 1157,  2448 => 1156,  2444 => 1155,  2439 => 1153,  2435 => 1151,  2429 => 1149,  2424 => 1147,  2420 => 1145,  2414 => 1143,  2408 => 1140,  2404 => 1138,  2398 => 1136,  2392 => 1133,  2388 => 1131,  2378 => 1129,  2370 => 1128,  2362 => 1127,  2354 => 1126,  2346 => 1125,  2338 => 1124,  2334 => 1123,  2329 => 1121,  2325 => 1119,  2319 => 1117,  2314 => 1115,  2310 => 1113,  2306 => 1112,  2299 => 1108,  2295 => 1107,  2289 => 1104,  2285 => 1102,  2279 => 1100,  2274 => 1098,  2270 => 1096,  2264 => 1094,  2259 => 1092,  2255 => 1090,  2249 => 1088,  2244 => 1086,  2240 => 1084,  2234 => 1082,  2229 => 1080,  2225 => 1078,  2219 => 1076,  2213 => 1073,  2209 => 1071,  2203 => 1069,  2195 => 1064,  2187 => 1059,  2180 => 1055,  2173 => 1051,  2168 => 1049,  2164 => 1047,  2158 => 1045,  2153 => 1043,  2149 => 1041,  2143 => 1039,  2138 => 1037,  2134 => 1035,  2128 => 1033,  2123 => 1031,  2119 => 1029,  2113 => 1027,  2108 => 1025,  2104 => 1023,  2098 => 1021,  2090 => 1016,  2086 => 1014,  2080 => 1012,  2072 => 1007,  2068 => 1005,  2062 => 1003,  2057 => 1001,  2053 => 999,  2047 => 997,  2042 => 995,  2038 => 993,  2034 => 992,  2026 => 988,  2020 => 985,  2015 => 983,  2011 => 981,  2001 => 979,  1993 => 978,  1985 => 977,  1977 => 976,  1969 => 975,  1961 => 974,  1957 => 973,  1952 => 971,  1948 => 969,  1942 => 967,  1937 => 965,  1933 => 963,  1927 => 961,  1921 => 958,  1917 => 956,  1911 => 954,  1905 => 951,  1901 => 949,  1895 => 947,  1890 => 945,  1886 => 943,  1876 => 941,  1868 => 940,  1860 => 939,  1852 => 938,  1844 => 937,  1836 => 936,  1832 => 935,  1829 => 934,  1823 => 932,  1818 => 930,  1814 => 928,  1808 => 926,  1803 => 924,  1799 => 922,  1789 => 920,  1781 => 919,  1773 => 918,  1765 => 917,  1757 => 916,  1749 => 915,  1745 => 914,  1740 => 912,  1736 => 910,  1730 => 908,  1725 => 906,  1721 => 904,  1715 => 902,  1710 => 900,  1706 => 898,  1700 => 896,  1695 => 894,  1691 => 892,  1685 => 890,  1680 => 888,  1676 => 886,  1670 => 884,  1665 => 882,  1661 => 880,  1655 => 878,  1650 => 876,  1646 => 874,  1640 => 872,  1634 => 869,  1630 => 867,  1624 => 865,  1619 => 863,  1615 => 861,  1609 => 859,  1604 => 857,  1600 => 855,  1594 => 853,  1589 => 851,  1585 => 849,  1579 => 847,  1574 => 845,  1570 => 843,  1564 => 841,  1556 => 836,  1548 => 831,  1541 => 827,  1534 => 823,  1529 => 821,  1525 => 819,  1519 => 817,  1513 => 814,  1509 => 812,  1503 => 810,  1498 => 808,  1494 => 806,  1484 => 804,  1476 => 803,  1468 => 802,  1460 => 801,  1452 => 800,  1444 => 799,  1440 => 798,  1435 => 796,  1431 => 794,  1425 => 792,  1420 => 790,  1416 => 788,  1410 => 786,  1403 => 782,  1399 => 780,  1393 => 778,  1386 => 774,  1382 => 772,  1376 => 770,  1369 => 766,  1365 => 764,  1359 => 762,  1352 => 758,  1348 => 756,  1344 => 755,  1335 => 750,  1329 => 747,  1322 => 743,  1318 => 741,  1312 => 739,  1305 => 735,  1301 => 733,  1295 => 731,  1290 => 729,  1286 => 727,  1280 => 725,  1275 => 723,  1271 => 721,  1265 => 719,  1260 => 717,  1256 => 715,  1250 => 713,  1244 => 710,  1240 => 708,  1234 => 706,  1229 => 704,  1225 => 702,  1219 => 700,  1214 => 698,  1210 => 696,  1204 => 694,  1199 => 692,  1195 => 690,  1189 => 688,  1184 => 686,  1180 => 684,  1174 => 682,  1168 => 679,  1164 => 677,  1160 => 676,  1152 => 672,  1146 => 669,  1141 => 667,  1137 => 665,  1133 => 664,  1121 => 656,  1115 => 653,  1108 => 649,  1103 => 647,  1099 => 645,  1093 => 643,  1088 => 641,  1084 => 639,  1078 => 637,  1070 => 632,  1066 => 630,  1060 => 628,  1053 => 624,  1049 => 622,  1043 => 620,  1036 => 616,  1032 => 614,  1026 => 612,  1021 => 610,  1017 => 608,  1011 => 606,  1006 => 604,  1002 => 602,  996 => 600,  990 => 597,  986 => 595,  980 => 593,  975 => 591,  971 => 589,  965 => 587,  959 => 584,  955 => 582,  949 => 580,  937 => 571,  933 => 569,  926 => 566,  917 => 560,  909 => 555,  896 => 545,  867 => 519,  857 => 512,  848 => 506,  786 => 447,  782 => 445,  778 => 444,  763 => 433,  723 => 396,  717 => 393,  710 => 389,  702 => 384,  665 => 350,  661 => 348,  655 => 346,  648 => 342,  642 => 339,  638 => 337,  632 => 335,  625 => 331,  621 => 329,  615 => 327,  610 => 325,  606 => 323,  600 => 321,  595 => 319,  591 => 317,  585 => 315,  580 => 313,  576 => 311,  570 => 309,  563 => 305,  543 => 288,  539 => 286,  533 => 284,  513 => 267,  509 => 265,  503 => 263,  483 => 246,  479 => 244,  473 => 242,  453 => 225,  449 => 223,  443 => 221,  423 => 204,  419 => 202,  413 => 200,  405 => 195,  401 => 193,  395 => 191,  388 => 187,  384 => 185,  378 => 183,  373 => 181,  369 => 179,  363 => 177,  355 => 172,  349 => 169,  345 => 167,  339 => 165,  329 => 158,  325 => 156,  319 => 154,  309 => 147,  305 => 145,  299 => 143,  289 => 136,  285 => 134,  279 => 132,  269 => 125,  265 => 123,  259 => 121,  249 => 114,  245 => 112,  239 => 110,  229 => 103,  225 => 101,  219 => 99,  213 => 96,  209 => 94,  203 => 92,  197 => 89,  193 => 87,  187 => 85,  182 => 83,  178 => 81,  172 => 79,  159 => 69,  155 => 67,  149 => 65,  124 => 43,  120 => 41,  114 => 39,  107 => 35,  98 => 28,  90 => 24,  84 => 21,  78 => 18,  74 => 16,  68 => 14,  63 => 12,  59 => 10,  53 => 8,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kiaria/css/custom_colors.twig", "C:\\xampp\\htdocs\\onlineshop\\catalog\\view\\theme\\kiaria\\css\\custom_colors.twig");
    }
}
