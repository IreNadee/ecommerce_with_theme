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

/* kiaria/template/common/footer.twig */
class __TwigTemplate_fdade81148f46119ef0281307e52e26e6b597dc20bceb37e7d28e94579b75b83 extends \Twig\Template
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
            // line 3
            $context["theme_options"] = twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "get", [0 => "theme_options"], "method", false, false, false, 3);
            // line 4
            echo "     ";
            $context["config"] = twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "get", [0 => "config"], "method", false, false, false, 4);
            // line 5
            echo "          
     ";
            // line 6
            $context["language_id"] = twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "get", [0 => "config_language_id"], "method", false, false, false, 6);
            // line 7
            echo "     ";
            $context["customfooter"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "customfooter"], "method", false, false, false, 7);
            // line 8
            echo "          
     ";
            // line 9
            $context["customfooter_top"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "customfooter_top"], "method", false, false, false, 9);
            // line 10
            echo "     ";
            $context["customfooter_bottom"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "customfooter_bottom"], "method", false, false, false, 10);
            // line 11
            echo "     ";
            $context["customfooter_center"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "customfooter"], "method", false, false, false, 11);
            // line 12
            echo "     ";
            $context["footer_center"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "footer"], "method", false, false, false, 12);
            // line 13
            echo "
     ";
            // line 14
            if ((((twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 14) || (twig_length_filter($this->env, ($context["customfooter_top"] ?? null)) > 0)) || (twig_length_filter($this->env, ($context["customfooter_bottom"] ?? null)) > 0)) || (twig_length_filter($this->env, ($context["customfooter_center"] ?? null)) > 0))) {
                echo " 
          ";
                // line 15
                if (((((((((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["customfooter"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["twitter_status"] ?? null) : null) == "1") || ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["customfooter"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["contact_status"] ?? null) : null) == "1")) || ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["customfooter"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["aboutus_status"] ?? null) : null) == "1")) || ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["customfooter"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["facebook_status"] ?? null) : null) == "1")) || (twig_length_filter($this->env, ($context["customfooter_top"] ?? null)) > 0)) || (twig_length_filter($this->env, ($context["customfooter_bottom"] ?? null)) > 0)) || (twig_length_filter($this->env, ($context["customfooter_center"] ?? null)) > 0))) {
                    echo " 
               
               ";
                    // line 17
                    $context["grids"] = 12;
                    echo " ";
                    $context["test"] = 0;
                    echo " 
               ";
                    // line 18
                    if (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["customfooter"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["aboutus_status"] ?? null) : null) == "1")) {
                        echo " ";
                        $context["test"] = (($context["test"] ?? null) + 1);
                        echo " ";
                    }
                    echo " 
               ";
                    // line 19
                    if (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["customfooter"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["twitter_status"] ?? null) : null) == "1")) {
                        echo " ";
                        $context["test"] = (($context["test"] ?? null) + 1);
                        echo " ";
                    }
                    echo " 
               ";
                    // line 20
                    if (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["customfooter"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["facebook_status"] ?? null) : null) == "1")) {
                        echo " ";
                        $context["test"] = (($context["test"] ?? null) + 1);
                        echo " ";
                    }
                    echo " 
               ";
                    // line 21
                    if (((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["customfooter"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["contact_status"] ?? null) : null) == "1")) {
                        echo " ";
                        $context["test"] = (($context["test"] ?? null) + 1);
                        echo " ";
                    }
                    echo " 
               ";
                    // line 22
                    if (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["customfooter"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["customblock_status"] ?? null) : null) == "1")) {
                        echo " ";
                        $context["test"] = (($context["test"] ?? null) + 1);
                        echo " ";
                    }
                    echo " 
               ";
                    // line 23
                    if ((($context["test"] ?? null) == 0)) {
                        echo " ";
                        $context["test"] = 1;
                        echo " ";
                    }
                    // line 24
                    echo "               ";
                    $context["grids"] = (12 / ($context["test"] ?? null));
                    echo " 
               ";
                    // line 25
                    if ((($context["test"] ?? null) == 5)) {
                        echo " ";
                        $context["grids"] = 25;
                    }
                    // line 26
                    echo "     
     
     <!-- CUSTOM FOOTER
          ================================================== -->
     <div class=\"custom-footer ";
                    // line 30
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_footer_layout"], "method", false, false, false, 30) == 1)) {
                        echo " ";
                        echo "full-width";
                        echo " ";
                    } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_footer_layout"], "method", false, false, false, 30) == 4)) {
                        echo " ";
                        echo "fixed3 fixed2";
                        echo " ";
                    } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "custom_footer_layout"], "method", false, false, false, 30) == 3)) {
                        echo " ";
                        echo "fixed2";
                        echo " ";
                    } else {
                        echo " ";
                        echo "fixed";
                        echo " ";
                    }
                    echo "\">
          <div class=\"background-custom-footer\"></div>
          <div class=\"background\">
               <div class=\"shadow\"></div>
               <div class=\"pattern\">
                    <div class=\"container\">
                         
                         ";
                    // line 37
                    if ((twig_length_filter($this->env, ($context["customfooter_top"] ?? null)) > 0)) {
                        echo " 
                              ";
                        // line 38
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["customfooter_top"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            echo " 
                                   ";
                            // line 39
                            echo $context["module"];
                            echo "
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 41
                        echo "                         ";
                    }
                    echo " 
                         
                         
                         ";
                    // line 44
                    if ((twig_length_filter($this->env, ($context["customfooter_center"] ?? null)) > 0)) {
                        echo " 
                              ";
                        // line 45
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["customfooter_center"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            echo " 
                                   ";
                            // line 46
                            echo $context["module"];
                            echo "
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 48
                        echo "                         ";
                    } else {
                        echo " 
                              <div class=\"row\">
                                   ";
                        // line 50
                        if (((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["customfooter"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["aboutus_status"] ?? null) : null) == "1")) {
                            echo " 
                                   <!-- About us -->
                                   <div class=\"col-sm-";
                            // line 52
                            echo ($context["grids"] ?? null);
                            echo "\">
                                        ";
                            // line 53
                            if (((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["customfooter"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["aboutus_title"] ?? null) : null) != "")) {
                                echo " 
                                        <h4>";
                                // line 54
                                echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["customfooter"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["aboutus_title"] ?? null) : null);
                                echo "</h4>
                                        ";
                            }
                            // line 55
                            echo " 
                                        <div class=\"custom-footer-text\">";
                            // line 56
                            echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "html_entity_decode", [0 => (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["customfooter"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["aboutus_text"] ?? null) : null)], "method", false, false, false, 56);
                            echo "</div>
                                   </div>
                                   ";
                        }
                        // line 58
                        echo " 
                                   
                                   ";
                        // line 60
                        if (((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["customfooter"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["contact_status"] ?? null) : null) == "1")) {
                            echo " 
                                   <!-- Contact -->
                                   <div class=\"col-sm-";
                            // line 62
                            echo ($context["grids"] ?? null);
                            echo "\">
                                        ";
                            // line 63
                            if (((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["customfooter"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["contact_title"] ?? null) : null) != "")) {
                                echo " 
                                        <h4>";
                                // line 64
                                echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["customfooter"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["contact_title"] ?? null) : null);
                                echo "</h4>
                                        ";
                            }
                            // line 65
                            echo " 
                                        <ul class=\"contact-us clearfix\">
                                             ";
                            // line 67
                            if ((((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["customfooter"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["contact_phone"] ?? null) : null) != "") || ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["customfooter"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["contact_phone2"] ?? null) : null) != ""))) {
                                echo " 
                                             <!-- Phone -->
                                             <li>
                                                  <i class=\"fa fa-mobile-phone\"></i>
                                                  <p>
                                                       ";
                                // line 72
                                if (((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["customfooter"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["contact_phone"] ?? null) : null) != "")) {
                                    echo " 
                                                            ";
                                    // line 73
                                    echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["customfooter"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["contact_phone"] ?? null) : null);
                                    echo "<br>
                                                       ";
                                }
                                // line 74
                                echo " 
                                                       ";
                                // line 75
                                if (((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["customfooter"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["contact_phone2"] ?? null) : null) != "")) {
                                    echo " 
                                                            ";
                                    // line 76
                                    echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["customfooter"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["contact_phone2"] ?? null) : null);
                                    echo " 
                                                       ";
                                }
                                // line 77
                                echo " 
                                                  </p>
                                             </li>
                                             ";
                            }
                            // line 80
                            echo " 
                                             ";
                            // line 81
                            if ((((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["customfooter"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["contact_email"] ?? null) : null) != "") || ((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["customfooter"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["contact_email2"] ?? null) : null) != ""))) {
                                echo " 
                                             <!-- Email -->
                                             <li>
                                                  <i class=\"fa fa-envelope\"></i>
                                                  <p>
                                                       ";
                                // line 86
                                if (((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["customfooter"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["contact_email"] ?? null) : null) != "")) {
                                    echo " 
                                                            <span>";
                                    // line 87
                                    echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["customfooter"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["contact_email"] ?? null) : null);
                                    echo "</span><br>
                                                       ";
                                }
                                // line 88
                                echo " 
                                                       ";
                                // line 89
                                if (((($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["customfooter"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["contact_email2"] ?? null) : null) != "")) {
                                    echo " 
                                                            <span>";
                                    // line 90
                                    echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["customfooter"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["contact_email2"] ?? null) : null);
                                    echo "</span>
                                                       ";
                                }
                                // line 91
                                echo " 
                                                  </p>
                                             </li>
                                             ";
                            }
                            // line 94
                            echo " 
                                             ";
                            // line 95
                            if ((((($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = ($context["customfooter"] ?? null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["contact_skype"] ?? null) : null) != "") || ((($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = ($context["customfooter"] ?? null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["contact_skype2"] ?? null) : null) != ""))) {
                                echo " 
                                             <!-- Phone -->
                                             <li>
                                                  <i class=\"fa fa-skype\"></i>
                                                  <p>
                                                       ";
                                // line 100
                                if (((($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["customfooter"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["contact_skype"] ?? null) : null) != "")) {
                                    echo " 
                                                            ";
                                    // line 101
                                    echo (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = ($context["customfooter"] ?? null)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["contact_skype"] ?? null) : null);
                                    echo "<br>
                                                       ";
                                }
                                // line 102
                                echo " 
                                                       ";
                                // line 103
                                if (((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = ($context["customfooter"] ?? null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["contact_skype2"] ?? null) : null) != "")) {
                                    echo " 
                                                            ";
                                    // line 104
                                    echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = ($context["customfooter"] ?? null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["contact_skype2"] ?? null) : null);
                                    echo " 
                                                       ";
                                }
                                // line 105
                                echo " 
                                                  </p>
                                             </li>
                                             ";
                            }
                            // line 108
                            echo " 
                                        </ul>
                                   </div>
                                   ";
                        }
                        // line 111
                        echo " 
                                   
                                   ";
                        // line 113
                        if (((($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = ($context["customfooter"] ?? null)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["twitter_status"] ?? null) : null) == "1")) {
                            echo " 
                                   <!-- Twitter -->
                                   <div class=\"col-sm-";
                            // line 115
                            echo ($context["grids"] ?? null);
                            echo "\">
                                        ";
                            // line 116
                            if (((($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = ($context["customfooter"] ?? null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["twitter_title"] ?? null) : null) != "")) {
                                echo " 
                                        <h4>";
                                // line 117
                                echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = ($context["customfooter"] ?? null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["twitter_title"] ?? null) : null);
                                echo "</h4>
                                        ";
                            }
                            // line 118
                            echo " 
                                        
                                        <div class=\"clear\">
                                             <a class=\"twitter-timeline\" href=\"https://twitter.com/";
                            // line 121
                            echo (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = ($context["customfooter"] ?? null)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["twitter_widget_id"] ?? null) : null);
                            echo "\" data-tweet-limit=\"2\">Tweets by ";
                            echo (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = ($context["customfooter"] ?? null)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["twitter_widget_id"] ?? null) : null);
                            echo "</a> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
                                        </div>
                                   </div>
                                   ";
                        }
                        // line 124
                        echo " 
                                   
                                   ";
                        // line 126
                        if (((($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = ($context["customfooter"] ?? null)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["facebook_status"] ?? null) : null) == "1")) {
                            echo " 
                                   <!-- Facebook -->
                                   <div class=\"col-sm-";
                            // line 128
                            echo ($context["grids"] ?? null);
                            echo "\">
                                        ";
                            // line 129
                            if (((($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = ($context["customfooter"] ?? null)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["facebook_title"] ?? null) : null) != "")) {
                                echo " 
                                        <h4>";
                                // line 130
                                echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = ($context["customfooter"] ?? null)) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["facebook_title"] ?? null) : null);
                                echo "</h4>
                                        ";
                            }
                            // line 131
                            echo " 
                                        
                                        <div id=\"fb-root\"></div>
                                        <script>(function(d, s, id) {
                                          var js, fjs = d.getElementsByTagName(s)[0];
                                          if (d.getElementById(id)) return;
                                          js = d.createElement(s); js.id = id;
                                          js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1\";
                                          fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));</script>
                                                                           
                                        <div id=\"facebook\">
                                             <div class=\"fb-like-box fb_iframe_widget\" profile_id=\"";
                            // line 143
                            echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = ($context["customfooter"] ?? null)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["facebook_id"] ?? null) : null);
                            echo "\" data-show-border=\"false\"
                                              data-width=\"260\" data-height=\"";
                            // line 144
                            if (((($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = ($context["customfooter"] ?? null)) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["facebook_height"] ?? null) : null) > 0)) {
                                echo " ";
                                echo (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = ($context["customfooter"] ?? null)) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["facebook_height"] ?? null) : null);
                                echo " ";
                            } else {
                                echo " ";
                                echo "210";
                                echo " ";
                            }
                            echo "\" ";
                            if (((($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = ($context["customfooter"] ?? null)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["show_faces"] ?? null) : null) != "1")) {
                                echo "data-connections=\"";
                                if (((($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = ($context["customfooter"] ?? null)) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["facebook_faces"] ?? null) : null) > 0)) {
                                    echo " ";
                                    echo (($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = ($context["customfooter"] ?? null)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["facebook_faces"] ?? null) : null);
                                    echo " ";
                                } else {
                                    echo " ";
                                    echo "8";
                                    echo " ";
                                }
                                echo "\"";
                            }
                            echo " data-colorscheme=\"";
                            if (((($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = ($context["customfooter"] ?? null)) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["color_scheme"] ?? null) : null) != "1")) {
                                echo " ";
                                echo "light";
                                echo " ";
                            } else {
                                echo " ";
                                echo "dark";
                                echo " ";
                            }
                            echo "\" data-stream=\"false\" data-header=\"false\" data-show-faces=\"";
                            if (((($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = ($context["customfooter"] ?? null)) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["show_faces"] ?? null) : null) == "1")) {
                                echo " ";
                                echo "false";
                                echo " ";
                            } else {
                                echo " ";
                                echo "true";
                                echo " ";
                            }
                            echo "\" fb-xfbml-state=\"rendered\"></div>
                                        </div>
                                   </div>
                                   ";
                        }
                        // line 147
                        echo " 
                                   
                                   ";
                        // line 149
                        if (((($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = (($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = ($context["customfooter"] ?? null)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["customblock_status"] ?? null) : null) == "1")) {
                            echo " 
                                   <!-- Custom block -->
                                   <div class=\"col-sm-";
                            // line 151
                            echo ($context["grids"] ?? null);
                            echo "\">
                                        ";
                            // line 152
                            if (((($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = ($context["customfooter"] ?? null)) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["customblock_title"] ?? null) : null) != "")) {
                                echo " 
                                        <h4>";
                                // line 153
                                echo (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = ($context["customfooter"] ?? null)) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["customblock_title"] ?? null) : null);
                                echo "</h4>
                                        ";
                            }
                            // line 154
                            echo " 
                                        <div class=\"custom-footer-text\">";
                            // line 155
                            echo twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "html_entity_decode", [0 => (($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = ($context["customfooter"] ?? null)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["customblock_text"] ?? null) : null)], "method", false, false, false, 155);
                            echo "</div>
                                   </div>
                                   ";
                        }
                        // line 157
                        echo " 
                              </div>
                         ";
                    }
                    // line 159
                    echo " 
                         
                         
                         ";
                    // line 162
                    if ((twig_length_filter($this->env, ($context["customfooter_bottom"] ?? null)) > 0)) {
                        echo " 
                              ";
                        // line 163
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["customfooter_bottom"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            echo " 
                                   ";
                            // line 164
                            echo $context["module"];
                            echo "
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 166
                        echo "                         ";
                    }
                    echo " 
                    </div>
               </div>
          </div>
     </div>
     ";
                }
                // line 171
                echo " ";
            }
            // line 172
            echo "
     <!-- FOOTER
          ================================================== -->
     <div class=\"footer ";
            // line 175
            if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_layout"], "method", false, false, false, 175) == 2)) {
                echo " ";
                echo "fixed";
                echo " ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_layout"], "method", false, false, false, 175) == 4)) {
                echo " ";
                echo "fixed3 fixed2";
                echo " ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "footer_layout"], "method", false, false, false, 175) == 3)) {
                echo " ";
                echo "fixed2";
                echo " ";
            } else {
                echo " ";
                echo "full-width";
                echo " ";
            }
            echo "\">
          <div class=\"background-footer\"></div>
          <div class=\"background\">
               <div class=\"shadow\"></div>
               <div class=\"pattern\">
                    <div class=\"container\">                      
                         
                         ";
            // line 182
            if ((twig_length_filter($this->env, ($context["footer_center"] ?? null)) > 0)) {
                echo " 
                              ";
                // line 183
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["footer_center"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    echo " 
                                   ";
                    // line 184
                    echo $context["module"];
                    echo "
                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "                         ";
            } else {
                echo " 
                              
                          ";
                // line 188
                $context["footer_top"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "footer_top"], "method", false, false, false, 188);
                // line 189
                echo "                          ";
                if ((twig_length_filter($this->env, ($context["footer_top"] ?? null)) > 0)) {
                    echo " 
                              ";
                    // line 190
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["footer_top"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                        echo " 
                                   ";
                        // line 191
                        echo $context["module"];
                        echo "
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 193
                    echo "                          ";
                }
                echo " 
                              
                              <div class=\"row footer-main-box\">
                                   
                              ";
                // line 197
                $context["footer_left"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "footer_left"], "method", false, false, false, 197);
                // line 198
                echo "                              ";
                $context["footer_right"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "footer_right"], "method", false, false, false, 198);
                // line 199
                echo "                              
                              ";
                // line 200
                $context["span"] = 3;
                // line 201
                echo "                              ";
                if (((twig_length_filter($this->env, ($context["footer_left"] ?? null)) > 0) && (twig_length_filter($this->env, ($context["footer_right"] ?? null)) > 0))) {
                    // line 202
                    echo "                                   ";
                    $context["span"] = 2;
                    // line 203
                    echo "                              ";
                } elseif (((twig_length_filter($this->env, ($context["footer_left"] ?? null)) > 0) || (twig_length_filter($this->env, ($context["footer_right"] ?? null)) > 0))) {
                    // line 204
                    echo "                                   ";
                    $context["span"] = 25;
                    // line 205
                    echo "                              ";
                }
                echo " 
                                   
                                   ";
                // line 207
                if ((twig_length_filter($this->env, ($context["footer_left"] ?? null)) > 0)) {
                    echo " 
                                   <div class=\"col-sm-";
                    // line 208
                    echo ($context["span"] ?? null);
                    echo "\">
                                   ";
                    // line 209
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["footer_left"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                        echo " 
                                        ";
                        // line 210
                        echo $context["module"];
                        echo "
                                   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 211
                    echo " 
                                   </div>
                                   ";
                }
                // line 213
                echo " 
                                   
                                   <!-- Information -->
                                   <div class=\"col-sm-";
                // line 216
                echo ($context["span"] ?? null);
                echo "\">
                                        <h4>";
                // line 217
                echo ($context["text_information"] ?? null);
                echo "</h4>
                                        <div class=\"strip-line\"></div>
                                        <ul>
                                             ";
                // line 220
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                    echo " 
                                             <li><a href=\"";
                    // line 221
                    echo (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = $context["information"]) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = $context["information"]) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7["title"] ?? null) : null);
                    echo "</a></li>
                                             ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 222
                echo " 
                                        </ul>
                                   </div>
                                   
                                   <!-- Customer Service -->
                                   <div class=\"col-sm-";
                // line 227
                echo ($context["span"] ?? null);
                echo "\">
                                        <h4>";
                // line 228
                echo ($context["text_service"] ?? null);
                echo "</h4>
                                        <div class=\"strip-line\"></div>
                                        <ul>
                                             <li><a href=\"";
                // line 231
                echo ($context["contact"] ?? null);
                echo "\">";
                echo ($context["text_contact"] ?? null);
                echo "</a></li>
                                             <li><a href=\"";
                // line 232
                echo ($context["return"] ?? null);
                echo "\">";
                echo ($context["text_return"] ?? null);
                echo "</a></li>
                                             <li><a href=\"";
                // line 233
                echo ($context["sitemap"] ?? null);
                echo "\">";
                echo ($context["text_sitemap"] ?? null);
                echo "</a></li>
                                        </ul> 
                                   </div>
                                   
                                   <!-- Extras -->
                                   <div class=\"col-sm-";
                // line 238
                echo ($context["span"] ?? null);
                echo "\">
                                        <h4>";
                // line 239
                echo ($context["text_extra"] ?? null);
                echo "</h4>
                                        <div class=\"strip-line\"></div>
                                        <ul>
                                             <li><a href=\"";
                // line 242
                echo ($context["manufacturer"] ?? null);
                echo "\">";
                echo ($context["text_manufacturer"] ?? null);
                echo "</a></li>
                                             <li><a href=\"";
                // line 243
                echo ($context["voucher"] ?? null);
                echo "\">";
                echo ($context["text_voucher"] ?? null);
                echo "</a></li>
                                             <li><a href=\"";
                // line 244
                echo ($context["affiliate"] ?? null);
                echo "\">";
                echo ($context["text_affiliate"] ?? null);
                echo "</a></li>
                                             <li><a href=\"";
                // line 245
                echo ($context["special"] ?? null);
                echo "\">";
                echo ($context["text_special"] ?? null);
                echo " </a></li>
                                        </ul>
                                   </div>
                                   
                                   <!-- My Account -->
                                   <div class=\"col-sm-";
                // line 250
                echo ($context["span"] ?? null);
                echo "\">
                                        <h4>";
                // line 251
                echo ($context["text_account"] ?? null);
                echo "</h4>
                                        <div class=\"strip-line\"></div>
                                        <ul>
                                             <li><a href=\"";
                // line 254
                echo ($context["account"] ?? null);
                echo "\">";
                echo ($context["text_account"] ?? null);
                echo "</a></li>
                                             <li><a href=\"";
                // line 255
                echo ($context["order"] ?? null);
                echo "\">";
                echo ($context["text_order"] ?? null);
                echo "</a></li>
                                             <li><a href=\"";
                // line 256
                echo ($context["wishlist"] ?? null);
                echo "\">";
                echo ($context["text_wishlist"] ?? null);
                echo "</a></li>
                                             <li><a href=\"";
                // line 257
                echo ($context["newsletter"] ?? null);
                echo "\">";
                echo ($context["text_newsletter"] ?? null);
                echo "</a></li>
                                        </ul>
                                   </div>
                                   
                                   ";
                // line 261
                if ((twig_length_filter($this->env, ($context["footer_right"] ?? null)) > 0)) {
                    echo " 
                                   <div class=\"col-sm-";
                    // line 262
                    echo ($context["span"] ?? null);
                    echo "\">
                                   ";
                    // line 263
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["footer_right"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                        echo " 
                                        ";
                        // line 264
                        echo $context["module"];
                        echo "
                                   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 265
                    echo " 
                                   </div>
                                   ";
                }
                // line 267
                echo " 
                              </div>
                              
                              
                         ";
                // line 271
                $context["footer_bottom"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "footer_bottom"], "method", false, false, false, 271);
                // line 272
                echo "                         ";
                if ((twig_length_filter($this->env, ($context["footer_bottom"] ?? null)) > 0)) {
                    echo " 
                              ";
                    // line 273
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["footer_bottom"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                        echo " 
                                   ";
                        // line 274
                        echo $context["module"];
                        echo "
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 276
                    echo "                         ";
                }
                echo " 
                              
                              <div class=\"row copyright\">
                                   <div class=\"col-sm-12\">
                                        ";
                // line 280
                if (twig_test_iterable(twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "payment"], "method", false, false, false, 280))) {
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "payment_status"], "method", false, false, false, 280) != "0")) {
                        echo " 
                                        <ul>
                                             ";
                        // line 282
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "get", [0 => "payment"], "method", false, false, false, 282));
                        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                            echo " 
                                                  ";
                            // line 283
                            echo "<li>";
                            echo "
                                                       ";
                            // line 284
                            if (((($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = $context["payment"]) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606["link"] ?? null) : null) != "")) {
                                // line 285
                                echo "                                                            ";
                                $context["new_tab"] = twig_constant("false");
                                // line 286
                                echo "                                                            ";
                                if (((($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = $context["payment"]) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd["new_tab"] ?? null) : null) == 1)) {
                                    // line 287
                                    echo "                                                                 ";
                                    $context["new_tab"] = " target=\"_blank\"";
                                    // line 288
                                    echo "                                                            ";
                                }
                                // line 289
                                echo "                                                            ";
                                echo (((("<a href=\"" . (($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = $context["payment"]) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e["link"] ?? null) : null)) . "\"") . ($context["new_tab"] ?? null)) . ">");
                                echo "
                                                       ";
                            }
                            // line 291
                            echo "                                                       ";
                            echo (((("<img src=\"image/" . (($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = $context["payment"]) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1["img"] ?? null) : null)) . "\" alt=\"") . (($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = $context["payment"]) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb["name"] ?? null) : null)) . "\">");
                            echo "
                                                       ";
                            // line 292
                            if (((($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = $context["payment"]) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf["link"] ?? null) : null) != "")) {
                                // line 293
                                echo "                                                            ";
                                echo "</a>";
                                echo "
                                                       ";
                            }
                            // line 295
                            echo "                                                  ";
                            echo "</li>";
                            echo " 
                                             ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 296
                        echo " 
                                        </ul>
                                        ";
                    }
                    // line 298
                    echo " ";
                }
                echo " 
                                        <!--
                                        OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
                                        Please donate via PayPal to donate@opencart.com
                                        //-->
                                        <p>";
                // line 303
                echo ($context["powered"] ?? null);
                echo "</p>
                                        <!--
                                        OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
                                        Please donate via PayPal to donate@opencart.com
                                        //-->
                                        
                                        
                                    ";
                // line 310
                $context["bottom"] = twig_get_attribute($this->env, $this->source, ($context["theme_options"] ?? null), "getModules", [0 => "bottom"], "method", false, false, false, 310);
                // line 311
                echo "                                    ";
                if ((twig_length_filter($this->env, ($context["bottom"] ?? null)) > 0)) {
                    echo " 
                                        ";
                    // line 312
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["bottom"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                        echo " 
                                             ";
                        // line 313
                        echo $context["module"];
                        echo "
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 315
                    echo "                                    ";
                }
                echo " 
                                   </div>
                              </div>
                         ";
            }
            // line 318
            echo " 
                    </div>
               </div>
          </div>
     </div>
     
     <script type=\"text/javascript\" src=\"catalog/view/theme/kiaria/js/megamenu.js\"></script>
</div>
</div>
";
        }
        // line 327
        echo " 
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "kiaria/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1061 => 327,  1049 => 318,  1041 => 315,  1033 => 313,  1027 => 312,  1022 => 311,  1020 => 310,  1010 => 303,  1001 => 298,  996 => 296,  987 => 295,  981 => 293,  979 => 292,  974 => 291,  968 => 289,  965 => 288,  962 => 287,  959 => 286,  956 => 285,  954 => 284,  950 => 283,  944 => 282,  937 => 280,  929 => 276,  921 => 274,  915 => 273,  910 => 272,  908 => 271,  902 => 267,  897 => 265,  889 => 264,  883 => 263,  879 => 262,  875 => 261,  866 => 257,  860 => 256,  854 => 255,  848 => 254,  842 => 251,  838 => 250,  828 => 245,  822 => 244,  816 => 243,  810 => 242,  804 => 239,  800 => 238,  790 => 233,  784 => 232,  778 => 231,  772 => 228,  768 => 227,  761 => 222,  751 => 221,  745 => 220,  739 => 217,  735 => 216,  730 => 213,  725 => 211,  717 => 210,  711 => 209,  707 => 208,  703 => 207,  697 => 205,  694 => 204,  691 => 203,  688 => 202,  685 => 201,  683 => 200,  680 => 199,  677 => 198,  675 => 197,  667 => 193,  659 => 191,  653 => 190,  648 => 189,  646 => 188,  640 => 186,  632 => 184,  626 => 183,  622 => 182,  596 => 175,  591 => 172,  588 => 171,  578 => 166,  570 => 164,  564 => 163,  560 => 162,  555 => 159,  550 => 157,  544 => 155,  541 => 154,  536 => 153,  532 => 152,  528 => 151,  523 => 149,  519 => 147,  470 => 144,  466 => 143,  452 => 131,  447 => 130,  443 => 129,  439 => 128,  434 => 126,  430 => 124,  421 => 121,  416 => 118,  411 => 117,  407 => 116,  403 => 115,  398 => 113,  394 => 111,  388 => 108,  382 => 105,  377 => 104,  373 => 103,  370 => 102,  365 => 101,  361 => 100,  353 => 95,  350 => 94,  344 => 91,  339 => 90,  335 => 89,  332 => 88,  327 => 87,  323 => 86,  315 => 81,  312 => 80,  306 => 77,  301 => 76,  297 => 75,  294 => 74,  289 => 73,  285 => 72,  277 => 67,  273 => 65,  268 => 64,  264 => 63,  260 => 62,  255 => 60,  251 => 58,  245 => 56,  242 => 55,  237 => 54,  233 => 53,  229 => 52,  224 => 50,  218 => 48,  210 => 46,  204 => 45,  200 => 44,  193 => 41,  185 => 39,  179 => 38,  175 => 37,  149 => 30,  143 => 26,  138 => 25,  133 => 24,  127 => 23,  119 => 22,  111 => 21,  103 => 20,  95 => 19,  87 => 18,  81 => 17,  76 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  58 => 9,  55 => 8,  52 => 7,  50 => 6,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kiaria/template/common/footer.twig", "");
    }
}
