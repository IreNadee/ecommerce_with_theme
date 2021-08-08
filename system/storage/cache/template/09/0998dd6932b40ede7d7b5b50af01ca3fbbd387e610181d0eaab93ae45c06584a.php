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

/* extension/module/kiaria.twig */
class __TwigTemplate_c08bf4b7ae0655776137dd49097e0689252df5f8e1716cd4ef5c4a042d2c6794 extends \Twig\Template
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

\t";
        // line 3
        $context["fonts"] = [0 => "standard", 1 => "ABeeZee", 2 => "Abel", 3 => "Abril Fatface", 4 => "Aclonica", 5 => "Acme", 6 => "Actor", 7 => "Adamina", 8 => "Advent Pro", 9 => "Aguafina Script", 10 => "Akronim", 11 => "Aladin", 12 => "Aldrich", 13 => "Alef", 14 => "Alegreya", 15 => "Alegreya SC", 16 => "Alex Brush", 17 => "Alfa Slab One", 18 => "Alice", 19 => "Alike", 20 => "Alike Angular", 21 => "Allan", 22 => "Allerta", 23 => "Allerta Stencil", 24 => "Allura", 25 => "Almendra", 26 => "Almendra Display", 27 => "Almendra SC", 28 => "Amarante", 29 => "Amaranth", 30 => "Amatic SC", 31 => "Amethysta", 32 => "Anaheim", 33 => "Andada", 34 => "Andika", 35 => "Angkor", 36 => "Annie Use Your Telescope", 37 => "Anonymous Pro", 38 => "Antic", 39 => "Antic Didone", 40 => "Antic Slab", 41 => "Anton", 42 => "Arapey", 43 => "Arbutus", 44 => "Arbutus Slab", 45 => "Architects Daughter", 46 => "Archivo Black", 47 => "Archivo Narrow", 48 => "Arial", 49 => "Arimo", 50 => "Arizonia", 51 => "Armata", 52 => "Artifika", 53 => "Arvo", 54 => "Asap", 55 => "Asset", 56 => "Astloch", 57 => "Asul", 58 => "Atomic Age", 59 => "Aubrey", 60 => "Audiowide", 61 => "Autour One", 62 => "Average", 63 => "Average Sans", 64 => "Averia Gruesa Libre", 65 => "Averia Libre", 66 => "Averia Sans Libre", 67 => "Averia Serif Libre", 68 => "Bad Script", 69 => "Balthazar", 70 => "Bangers", 71 => "Basic", 72 => "Battambang", 73 => "Baumans", 74 => "Bayon", 75 => "Belgrano", 76 => "Belleza", 77 => "BenchNine", 78 => "Bentham", 79 => "Berkshire Swash", 80 => "Bevan", 81 => "Bigelow Rules", 82 => "Bigshot One", 83 => "Bilbo", 84 => "Bilbo Swash Caps", 85 => "Bitter", 86 => "Black Ops One", 87 => "Bokor", 88 => "Bonbon", 89 => "Boogaloo", 90 => "Bowlby One", 91 => "Bowlby One SC", 92 => "Brawler", 93 => "Bree Serif", 94 => "Bubblegum Sans", 95 => "Bubbler One", 96 => "Buda", 97 => "Buenard", 98 => "Butcherman", 99 => "Butterfly Kids", 100 => "Cabin", 101 => "Cabin Condensed", 102 => "Cabin Sketch", 103 => "Caesar Dressing", 104 => "Cagliostro", 105 => "Calligraffitti", 106 => "Cambo", 107 => "Candal", 108 => "Cantarell", 109 => "Cantata One", 110 => "Cantora One", 111 => "Capriola", 112 => "Cardo", 113 => "Carme", 114 => "Carrois Gothic", 115 => "Carrois Gothic SC", 116 => "Carter One", 117 => "Caudex", 118 => "Cedarville Cursive", 119 => "Ceviche One", 120 => "Changa One", 121 => "Chango", 122 => "Chau Philomene One", 123 => "Chela One", 124 => "Chelsea Market", 125 => "Chenla", 126 => "Cherry Cream Soda", 127 => "Cherry Swash", 128 => "Chewy", 129 => "Chicle", 130 => "Chivo", 131 => "Cinzel", 132 => "Cinzel Decorative", 133 => "Clicker Script", 134 => "Coda", 135 => "Coda Caption", 136 => "Codystar", 137 => "Combo", 138 => "Comfortaa", 139 => "Coming Soon", 140 => "Concert One", 141 => "Condiment", 142 => "Content", 143 => "Contrail One", 144 => "Convergence", 145 => "Cookie", 146 => "Copse", 147 => "Corben", 148 => "Courgette", 149 => "Cousine", 150 => "Coustard", 151 => "Covered By Your Grace", 152 => "Crafty Girls", 153 => "Creepster", 154 => "Crete Round", 155 => "Crimson Text", 156 => "Croissant One", 157 => "Crushed", 158 => "Cuprum", 159 => "Cutive", 160 => "Cutive Mono", 161 => "Damion", 162 => "Dancing Script", 163 => "Dangrek", 164 => "Dawning of a New Day", 165 => "Days One", 166 => "Delius", 167 => "Delius Swash Caps", 168 => "Delius Unicase", 169 => "Della Respira", 170 => "Denk One", 171 => "Devonshire", 172 => "Didact Gothic", 173 => "Diplomata", 174 => "Diplomata SC", 175 => "Domine", 176 => "Donegal One", 177 => "Doppio One", 178 => "Dorsa", 179 => "Dosis", 180 => "Dr Sugiyama", 181 => "Droid Sans", 182 => "Droid Sans Mono", 183 => "Droid Serif", 184 => "Duru Sans", 185 => "Dynalight", 186 => "EB Garamond", 187 => "Eagle Lake", 188 => "Eater", 189 => "Economica", 190 => "Electrolize", 191 => "Elsie", 192 => "Elsie Swash Caps", 193 => "Emblema One", 194 => "Emilys Candy", 195 => "Engagement", 196 => "Englebert", 197 => "Enriqueta", 198 => "Erica One", 199 => "Esteban", 200 => "Euphoria Script", 201 => "Ewert", 202 => "Exo", 203 => "Expletus Sans", 204 => "Fanwood Text", 205 => "Fascinate", 206 => "Fascinate Inline", 207 => "Faster One", 208 => "Fasthand", 209 => "Fauna One", 210 => "Federant", 211 => "Federo", 212 => "Felipa", 213 => "Fenix", 214 => "Finger Paint", 215 => "Fjalla One", 216 => "Fjord One", 217 => "Flamenco", 218 => "Flavors", 219 => "Fondamento", 220 => "Fontdiner Swanky", 221 => "Forum", 222 => "Francois One", 223 => "Freckle Face", 224 => "Fredericka the Great", 225 => "Fredoka One", 226 => "Freehand", 227 => "Fresca", 228 => "Frijole", 229 => "Fruktur", 230 => "Fugaz One", 231 => "GFS Didot", 232 => "GFS Neohellenic", 233 => "Gabriela", 234 => "Gafata", 235 => "Galdeano", 236 => "Galindo", 237 => "Gentium Basic", 238 => "Gentium Book Basic", 239 => "Geo", 240 => "Georgia", 241 => "Geostar", 242 => "Geostar Fill", 243 => "Germania One", 244 => "Gilda Display", 245 => "Give You Glory", 246 => "Glass Antiqua", 247 => "Glegoo", 248 => "Gloria Hallelujah", 249 => "Goblin One", 250 => "Gochi Hand", 251 => "Gorditas", 252 => "Goudy Bookletter 1911", 253 => "Graduate", 254 => "Grand Hotel", 255 => "Gravitas One", 256 => "Great Vibes", 257 => "Griffy", 258 => "Gruppo", 259 => "Gudea", 260 => "Habibi", 261 => "Hammersmith One", 262 => "Hanalei", 263 => "Hanalei Fill", 264 => "Handlee", 265 => "Hanuman", 266 => "Happy Monkey", 267 => "Headland One", 268 => "Henny Penny", 269 => "Herr Von Muellerhoff", 270 => "Holtwood One SC", 271 => "Homemade Apple", 272 => "Homenaje", 273 => "IM Fell DW Pica", 274 => "IM Fell DW Pica SC", 275 => "IM Fell Double Pica", 276 => "IM Fell Double Pica SC", 277 => "IM Fell English", 278 => "IM Fell English SC", 279 => "IM Fell French Canon", 280 => "IM Fell French Canon SC", 281 => "IM Fell Great Primer", 282 => "IM Fell Great Primer SC", 283 => "Iceberg", 284 => "Iceland", 285 => "Imprima", 286 => "Inconsolata", 287 => "Inder", 288 => "Indie Flower", 289 => "Inika", 290 => "Irish Grover", 291 => "Istok Web", 292 => "Italiana", 293 => "Italianno", 294 => "Jacques Francois", 295 => "Jacques Francois Shadow", 296 => "Jim Nightshade", 297 => "Jockey One", 298 => "Jolly Lodger", 299 => "Josefin Sans", 300 => "Josefin Slab", 301 => "Joti One", 302 => "Judson", 303 => "Julee", 304 => "Julius Sans One", 305 => "Junge", 306 => "Jura", 307 => "Just Another Hand", 308 => "Just Me Again Down Here", 309 => "Kameron", 310 => "Karla", 311 => "Kaushan Script", 312 => "Kavoon", 313 => "Keania One", 314 => "Kelly Slab", 315 => "Kenia", 316 => "Khmer", 317 => "Kite One", 318 => "Knewave", 319 => "Kotta One", 320 => "Koulen", 321 => "Kranky", 322 => "Kreon", 323 => "Kristi", 324 => "Krona One", 325 => "La Belle Aurore", 326 => "Lancelot", 327 => "Lato", 328 => "League Script", 329 => "Leckerli One", 330 => "Ledger", 331 => "Lekton", 332 => "Lemon", 333 => "Libre Baskerville", 334 => "Life Savers", 335 => "Lilita One", 336 => "Lily Script One", 337 => "Limelight", 338 => "Linden Hill", 339 => "Lobster", 340 => "Lobster Two", 341 => "Londrina Outline", 342 => "Londrina Shadow", 343 => "Londrina Sketch", 344 => "Londrina Solid", 345 => "Lora", 346 => "Love Ya Like A Sister", 347 => "Loved by the King", 348 => "Lovers Quarrel", 349 => "Luckiest Guy", 350 => "Lusitana", 351 => "Lustria", 352 => "Macondo", 353 => "Macondo Swash Caps", 354 => "Magra", 355 => "Maiden Orange", 356 => "Mako", 357 => "Marcellus", 358 => "Marcellus SC", 359 => "Marck Script", 360 => "Margarine", 361 => "Marko One", 362 => "Marmelad", 363 => "Marvel", 364 => "Mate", 365 => "Mate SC", 366 => "Maven Pro", 367 => "McLaren", 368 => "Meddon", 369 => "MedievalSharp", 370 => "Medula One", 371 => "Megrim", 372 => "Meie Script", 373 => "Merienda", 374 => "Merienda One", 375 => "Merriweather", 376 => "Merriweather Sans", 377 => "Metal", 378 => "Metal Mania", 379 => "Metamorphous", 380 => "Metrophobic", 381 => "Michroma", 382 => "Milonga", 383 => "Miltonian", 384 => "Miltonian Tattoo", 385 => "Miniver", 386 => "Miss Fajardose", 387 => "Modern Antiqua", 388 => "Molengo", 389 => "Molle", 390 => "Monda", 391 => "Monofett", 392 => "Monoton", 393 => "Monsieur La Doulaise", 394 => "Montaga", 395 => "Montez", 396 => "Montserrat", 397 => "Montserrat Alternates", 398 => "Montserrat Subrayada", 399 => "Moul", 400 => "Moulpali", 401 => "Mountains of Christmas", 402 => "Mouse Memoirs", 403 => "Mr Bedfort", 404 => "Mr Dafoe", 405 => "Mr De Haviland", 406 => "Mrs Saint Delafield", 407 => "Mrs Sheppards", 408 => "Muli", 409 => "Mystery Quest", 410 => "Neucha", 411 => "Neuton", 412 => "New Rocker", 413 => "News Cycle", 414 => "Niconne", 415 => "Nixie One", 416 => "Nobile", 417 => "Nokora", 418 => "Norican", 419 => "Nosifer", 420 => "Nothing You Could Do", 421 => "Noticia Text", 422 => "Noto Sans", 423 => "Noto Serif", 424 => "Nova Cut", 425 => "Nova Flat", 426 => "Nova Mono", 427 => "Nova Oval", 428 => "Nova Round", 429 => "Nova Script", 430 => "Nova Slim", 431 => "Nova Square", 432 => "Numans", 433 => "Nunito", 434 => "Odor Mean Chey", 435 => "Offside", 436 => "Old Standard TT", 437 => "Oldenburg", 438 => "Oleo Script", 439 => "Oleo Script Swash Caps", 440 => "Open Sans", 441 => "Open Sans Condensed", 442 => "Oranienbaum", 443 => "Orbitron", 444 => "Oregano", 445 => "Orienta", 446 => "Original Surfer", 447 => "Oswald", 448 => "Over the Rainbow", 449 => "Overlock", 450 => "Overlock SC", 451 => "Ovo", 452 => "Oxygen", 453 => "Oxygen Mono", 454 => "PT Mono", 455 => "PT Sans", 456 => "PT Sans Caption", 457 => "PT Sans Narrow", 458 => "PT Serif", 459 => "PT Serif Caption", 460 => "Pacifico", 461 => "Paprika", 462 => "Parisienne", 463 => "Passero One", 464 => "Passion One", 465 => "Pathway Gothic One", 466 => "Patrick Hand", 467 => "Patrick Hand SC", 468 => "Patua One", 469 => "Paytone One", 470 => "Peralta", 471 => "Permanent Marker", 472 => "Petit Formal Script", 473 => "Petrona", 474 => "Philosopher", 475 => "Piedra", 476 => "Pinyon Script", 477 => "Pirata One", 478 => "Plaster", 479 => "Play", 480 => "Playball", 481 => "Playfair Display", 482 => "Playfair Display SC", 483 => "Podkova", 484 => "Poiret One", 485 => "Poller One", 486 => "Poly", 487 => "Pompiere", 488 => "Pontano Sans", 489 => "Poppins", 490 => "Port Lligat Sans", 491 => "Port Lligat Slab", 492 => "Prata", 493 => "Preahvihear", 494 => "Press Start 2P", 495 => "Princess Sofia", 496 => "Prociono", 497 => "Prosto One", 498 => "Puritan", 499 => "Purple Purse", 500 => "Quando", 501 => "Quantico", 502 => "Quattrocento", 503 => "Quattrocento Sans", 504 => "Questrial", 505 => "Quicksand", 506 => "Quintessential", 507 => "Qwigley", 508 => "Racing Sans One", 509 => "Radley", 510 => "Raleway", 511 => "Raleway Dots", 512 => "Rajdhani", 513 => "Rambla", 514 => "Rammetto One", 515 => "Ranchers", 516 => "Rancho", 517 => "Rationale", 518 => "Redressed", 519 => "Reenie Beanie", 520 => "Revalia", 521 => "Ribeye", 522 => "Ribeye Marrow", 523 => "Righteous", 524 => "Risque", 525 => "Roboto", 526 => "Roboto Condensed", 527 => "Roboto Slab", 528 => "Rochester", 529 => "Rock Salt", 530 => "Rokkitt", 531 => "Romanesco", 532 => "Ropa Sans", 533 => "Rosario", 534 => "Rosarivo", 535 => "Rouge Script", 536 => "Ruda", 537 => "Rufina", 538 => "Ruge Boogie", 539 => "Ruluko", 540 => "Rum Raisin", 541 => "Ruslan Display", 542 => "Russo One", 543 => "Ruthie", 544 => "Rye", 545 => "Sacramento", 546 => "Sail", 547 => "Salsa", 548 => "Sanchez", 549 => "Sancreek", 550 => "Sansita One", 551 => "Sarina", 552 => "Satisfy", 553 => "Scada", 554 => "Schoolbell", 555 => "Seaweed Script", 556 => "Sevillana", 557 => "Seymour One", 558 => "Shadows Into Light", 559 => "Shadows Into Light Two", 560 => "Shanti", 561 => "Share", 562 => "Share Tech", 563 => "Share Tech Mono", 564 => "Shojumaru", 565 => "Short Stack", 566 => "Siemreap", 567 => "Sigmar One", 568 => "Signika", 569 => "Signika Negative", 570 => "Simonetta", 571 => "Sintony", 572 => "Sirin Stencil", 573 => "Six Caps", 574 => "Skranji", 575 => "Slackey", 576 => "Smokum", 577 => "Smythe", 578 => "Sniglet", 579 => "Snippet", 580 => "Snowburst One", 581 => "Sofadi One", 582 => "Sofia", 583 => "Sonsie One", 584 => "Sorts Mill Goudy", 585 => "Source Code Pro", 586 => "Source Sans Pro", 587 => "Special Elite", 588 => "Spicy Rice", 589 => "Spinnaker", 590 => "Spirax", 591 => "Squada One", 592 => "Stalemate", 593 => "Stalinist One", 594 => "Stardos Stencil", 595 => "Stint Ultra Condensed", 596 => "Stint Ultra Expanded", 597 => "Stoke", 598 => "Strait", 599 => "Sue Ellen Francisco", 600 => "Sunshiney", 601 => "Supermercado One", 602 => "Suwannaphum", 603 => "Swanky and Moo Moo", 604 => "Syncopate", 605 => "Tangerine", 606 => "Taprom", 607 => "Tauri", 608 => "Teko", 609 => "Telex", 610 => "Tenor Sans", 611 => "Text Me One", 612 => "The Girl Next Door", 613 => "Tienne", 614 => "Times New Roman", 615 => "Tinos", 616 => "Titan One", 617 => "Titillium Web", 618 => "Trade Winds", 619 => "Trocchi", 620 => "Trochut", 621 => "Trykker", 622 => "Tulpen One", 623 => "Ubuntu", 624 => "Ubuntu Condensed", 625 => "Ubuntu Mono", 626 => "Ultra", 627 => "Uncial Antiqua", 628 => "Underdog", 629 => "Unica One", 630 => "UnifrakturCook", 631 => "UnifrakturMaguntia", 632 => "Unkempt", 633 => "Unlock", 634 => "Unna", 635 => "VT323", 636 => "Vampiro One", 637 => "Varela", 638 => "Varela Round", 639 => "Vast Shadow", 640 => "Vibur", 641 => "Vidaloka", 642 => "Viga", 643 => "Voces", 644 => "Volkhov", 645 => "Vollkorn", 646 => "Voltaire", 647 => "Waiting for the Sunrise", 648 => "Wallpoet", 649 => "Walter Turncoat", 650 => "Warnes", 651 => "Wellfleet", 652 => "Wendy One", 653 => "Wire One", 654 => "Yantramanav", 655 => "Yanone Kaffeesatz", 656 => "Yellowtail", 657 => "Yeseva One", 658 => "Yesteryear", 659 => "Zeyada"];
        // line 665
        echo "


<link href='https://fonts.googleapis.com/css?family=Poppins:700,600,500,400,300' rel='stylesheet' type='text/css'>
<link rel=\"stylesheet\" type=\"text/css\" href=\"view/stylesheet/css/colorpicker.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"view/stylesheet/template_options.css\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>  
<script type=\"text/javascript\" src=\"view/javascript/jquery/colorpicker.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery.cookie.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/beforeafter/jquery-ui.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/beforeafter/jquery.beforeafter-1.4.min.js\"></script>
<script type=\"text/javascript\">
\$.fn.tabs = function() {
\tvar selector = this;
\t
\tthis.each(function() {
\t\tvar obj = \$(this); 
\t\t
\t\t\$(obj.attr('href')).hide();
\t\t
\t\t\$(obj).click(function() {
\t\t\t\$(selector).removeClass('selected');
\t\t\t
\t\t\t\$(selector).each(function(i, element) {
\t\t\t\t\$(\$(element).attr('href')).hide();
\t\t\t});
\t\t\t
\t\t\t\$(this).addClass('selected');
\t\t\t
\t\t\t\$(\$(this).attr('href')).show();
\t\t\t
\t\t\treturn false;
\t\t});
\t});

\t\$(this).show();
\t
\t\$(this).first().click();
};
</script>

";
        // line 708
        echo ($context["column_left"] ?? null);
        echo " 
<div id=\"content\"><div class=\"container-fluid\">
\t<div class=\"page-header\">
\t    <h1>Kiaria Theme Options</h1>
\t    <ul class=\"breadcrumb\">
\t\t     ";
        // line 713
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
\t\t      <li><a href=\"";
            // line 714
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
\t\t      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 715
        echo " 
\t    </ul>
\t  </div>

\t";
        // line 719
        if (($context["error_warning"] ?? null)) {
            echo " 
\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 720
            echo ($context["error_warning"] ?? null);
            echo " 
\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        } elseif (        // line 723
($context["success"] ?? null)) {
            echo " 
\t\t<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 724
            echo ($context["success"] ?? null);
            echo " 
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 727
        echo " 

<!-- Theme Options -->

<div class=\"set-size\" id=\"theme-options\">
\t
\t<form action=\"";
        // line 733
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
\t
 \t\t<!-- MULTISTORE -->
\t\t<div id=\"tb_store_select\">
\t\t\t<label class=\"inline\">Store</label>
\t\t\t<select name=\"d_store_id\" id=\"d_store_id\">
\t\t\t";
        // line 739
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo " 
\t\t\t\t<option value=\"";
            // line 740
            echo ((("index.php?route=extension/module/kiaria&store_id=" . (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["store"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["store_id"] ?? null) : null)) . "&user_token=") . ($context["user_token"] ?? null));
            echo "\"";
            if ((($context["store_id"] ?? null) == (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["store"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["store_id"] ?? null) : null))) {
                echo " ";
                echo " selected=\"selected\"";
            }
            echo ">";
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["store"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["name"] ?? null) : null);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 741
        echo " 
\t\t\t</select>
\t\t</div>
\t\t\t\t\t    
\t\t<input type=\"hidden\" name=\"store_id\" value=\"";
        // line 745
        echo ($context["store_id"] ?? null);
        echo "\" />
\t\t\t\t\t    
\t\t<script type=\"text/javascript\">
\t\t\t\$(document).ready(function (){
\t\t\t\t\$(\"#d_store_id\").bind(\"change\", function() {
\t\t\t\t\twindow.location = \$(this).val();
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$(\"#form input\").keypress(function(event) {
\t\t\t\t    if (event.which == 13) {
\t\t\t\t        return false;
\t\t\t\t    }
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$(\".button-add\").click(function() {
\t\t\t\t\t\$(\".add-skin\").show();
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t});
\t\t</script>
\t\t<!-- END MULTISTORE -->
\t\t
\t\t<!-- Unlimited theme skins -->
 \t\t<div class=\"content theme-skins\" style=\"overflow: visible;position: relative;z-index: 1\">
\t\t\t<div>
\t\t\t\t<ul class=\"skins\">
\t\t\t\t\t";
        // line 771
        $context["liczba_skinow"] = 0;
        echo " ";
        if (array_key_exists("skins", $context)) {
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["skins"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["skin"]) {
                echo " ";
                $context["liczba_skinow"] = (($context["liczba_skinow"] ?? null) + 1);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
        }
        echo " 
\t\t\t\t\t";
        // line 772
        $context["aktywny_skin"] = twig_constant("false");
        echo " ";
        if ((($context["liczba_skinow"] ?? null) > 0)) {
            echo " 
\t\t\t\t\t<li><p class=\"active-skin\">Active<br>skin:</p></li>
\t\t\t\t\t<li>
\t\t\t\t\t     <div class=\"arrow\"></div>
\t\t\t\t\t\t<select name=\"skin\" class=\"select-skins\">
\t\t\t\t\t\t\t";
            // line 777
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["skins"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["skin"]) {
                echo " 
\t\t\t\t\t\t\t<option";
                // line 778
                if (($context["skin"] == ($context["active_skin_edit"] ?? null))) {
                    echo " ";
                    $context["aktywny_skin"] = twig_constant("true");
                    echo " ";
                    echo " selected=\"selected\"";
                    echo " ";
                }
                echo " value=\"";
                echo $context["skin"];
                echo "\" style=\"font-size: 12px !important\">";
                echo $context["skin"];
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 779
            echo " 
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"hidden\" name=\"save_skin\" value=\"";
            // line 781
            echo ($context["active_skin_edit"] ?? null);
            echo "\" />
\t\t\t\t\t</li>
\t\t\t\t\t<li><input type=\"submit\" name=\"button-active\" class=\"button-active\"></li>
\t\t\t\t\t";
        }
        // line 784
        echo " 
\t\t\t\t\t<li><a onclick=\"#\" class=\"button-add\"><span>Add</span></a><div class=\"add-skin\"><input type=\"text\" name=\"add-skin-name\" class=\"add-skin-name\" value=\"\"><input type=\"submit\" name=\"add-skin\" value=\"Add skin\" class=\"button-add-skin\"></div></li>
\t\t\t\t\t";
        // line 786
        if ((($context["liczba_skinow"] ?? null) > 0)) {
            echo " 
\t\t\t\t\t<li><input type=\"submit\" name=\"button-edit\" class=\"button-edit\"></li>
\t\t\t\t\t<li><input type=\"submit\" name=\"button-delete\" class=\"button-delete\" onclick=\"return confirm('Are you sure you want to delete?')\"></li>
\t\t\t\t\t";
        }
        // line 789
        echo " 
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t 
\t\t";
        // line 794
        if (((($context["liczba_skinow"] ?? null) > 0) && ((($context["active_skin"] ?? null) != "") || (($context["aktywny_skin"] ?? null) == twig_constant("true"))))) {
            echo " 
\t\t<!-- Content -->
\t\t
\t\t<div class=\"content\">
\t\t
\t\t\t<div>
\t\t\t\t<!-- Tabs -->
\t\t\t\t
\t\t\t\t<div class=\"bg-tabs\">
\t\t\t\t
\t\t\t\t\t<!-- General, Design, Footer TABS -->
\t\t\t\t\t
\t\t\t\t\t<div id=\"tabs\" class=\"htabs main-tabs\">
                        <div class=\"menu-switcher\"></div>
\t\t\t\t\t\t<a href=\"#tab_general\" id=\"general\"><span>General settings</span></a>
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"#tab_footer\" id=\"tfooter\"><span>Custom footer</span></a>
\t\t\t\t\t\t<a href=\"#tab_custom_block\" id=\"tcustomblock\"><span>Custom block</span></a>
\t\t\t\t\t\t<a href=\"#tab_custom_code\" id=\"tcustomcode\"><span>Custom code</span></a>
\t\t\t\t\t\t<a href=\"#tab_payment\" id=\"tpayment\"><span>Payment icons</span></a>
\t\t\t\t\t\t<a href=\"#tab_widgets\" id=\"twidgets\"><span>Widgets</span></a>
\t\t\t\t\t\t<a href=\"#tab_compressor_code\" id=\"tcompressorcode\"><span>Compressor code</span></a>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- End General, Design Footer Tabs -->
\t\t\t\t\t
\t\t\t\t\t<!-- /////////////////// General -->
\t\t\t\t\t
\t\t\t\t\t<div id=\"tab_general\" class=\"tab-content2\">
\t\t\t\t\t
\t\t\t\t\t\t<!-- Font, colors, background TABS -->
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tabs_general\" class=\"htabs tabs-design\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"#tab_layout\" id=\"tlayout\"><span>Layout</span></a>
\t\t\t\t\t\t\t<a href=\"#tab_product\" id=\"tproduct\"><span>Product</span></a>
\t\t\t\t\t\t\t<a href=\"#tab_category\" id=\"tcategory\"><span>Category</span></a>
\t\t\t\t\t\t\t<a href=\"#tab_header\" id=\"theader\"><span>Header</span></a>
\t\t\t\t\t\t\t<a href=\"#tab_translations\" id=\"ttranslations\"><span>Translations</span></a>
\t\t\t\t\t\t\t<a href=\"#tab_banners\" id=\"tbanners\"><span>Banners</span></a>
\t\t\t\t\t\t\t<a href=\"#tab_rodo\" id=\"trodo\"><span>Rodo</span></a>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- **************** Tab GENERAL OPTIONS -->
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab_layout\" class=\"tab-content\">
                            <div class=\"input with-status\">
                                <p>Responsive Design:</p>
                                ";
            // line 846
            if (((($context["responsive_design"] ?? null) == 0) && (($context["responsive_design"] ?? null) != ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"responsive_design\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"responsive_design\"></div>";
                echo " ";
            }
            echo " 
                                <input name=\"responsive_design\" value=\"";
            // line 847
            echo ($context["responsive_design"] ?? null);
            echo "\" id=\"responsive_design\" type=\"hidden\" />
                                <div class=\"clear\"></div>
                            </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Input -->
\t\t\t\t\t\t\t<div class=\"input\">
\t\t\t\t\t\t\t\t<p>Page Width:</p>
\t\t\t\t\t\t\t\t<select name=\"page_width\" class=\"select-page-width\">
\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 855
            if ((($context["page_width"] ?? null) == 1)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Wide (1220px)</option>
\t\t\t\t\t\t\t\t\t<option value=\"3\" ";
            // line 856
            if ((($context["page_width"] ?? null) == 3)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Standard (980px)</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
            // line 857
            if ((($context["page_width"] ?? null) == 2)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Full width</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Input -->
\t\t\t\t\t\t\t<div class=\"input page-width\" ";
            // line 863
            if ((($context["page_width"] ?? null) != 2)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo ">
\t\t\t\t\t\t\t\t<p>Max width:</p>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"max_width\" value=\"";
            // line 865
            echo ($context["max_width"] ?? null);
            echo "\" style=\"margin-right:10px;width:60px\">
\t\t\t\t\t\t\t\t<div style=\"float:left;width:auto;padding-top:12px\"><span style=\"color:#808080;font-size:11px\">px</span></div>
\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Input -->
\t\t\t\t\t\t\t<div class=\"input\">
\t\t\t\t\t\t\t\t<p>Spacing between columns:</p>
\t\t\t\t\t\t\t\t<select name=\"spacing_between_columns\">
\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 874
            if ((($context["spacing_between_columns"] ?? null) == 1)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Default (30px)</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
            // line 875
            if ((($context["spacing_between_columns"] ?? null) == 2)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Type 2 (20px)</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Input -->
\t\t\t\t\t\t\t\t\t<div class=\"input\">
\t\t\t\t\t\t\t\t\t\t<p>Page Direction:</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"list-language\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 884
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"language select\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 886
                $context["language_id"] = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["language"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["language_id"] ?? null) : null);
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 887
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["language"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["code"] ?? null) : null);
                echo "/";
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["language"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["language"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
\t\t\t\t\t\t\t\t\t\t\t\t<select type=\"text\" name=\"page_direction[";
                // line 888
                echo ($context["language_id"] ?? null);
                echo "]\" >
\t\t\t\t\t\t\t                <option value=\"LTR\" ";
                // line 889
                if ((twig_get_attribute($this->env, $this->source, ($context["page_direction"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 889) && ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["page_direction"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["language_id"] ?? null)] ?? null) : null) == "LTR"))) {
                    echo " ";
                    echo "selected";
                    echo " ";
                }
                echo ">LTR (Left To Right)</option>
\t\t\t\t\t\t\t                <option value=\"RTL\" ";
                // line 890
                if ((twig_get_attribute($this->env, $this->source, ($context["page_direction"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 890) && ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["page_direction"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["language_id"] ?? null)] ?? null) : null) == "RTL"))) {
                    echo " ";
                    echo "selected";
                    echo " ";
                }
                echo ">RTL (Right To Left)</option>
\t\t\t\t\t\t\t            </select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 893
            echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"section\">
                                <div class=\"section-title\">
                                    <h4>Sections</h4>
                                </div>
                                <div class=\"section-content\">
                                    <!-- Input -->
                                    <div class=\"input\">
                                        <p>Main:</p>
                                        <select name=\"main_layout\">
                                            <option value=\"1\" ";
            // line 907
            if ((($context["main_layout"] ?? null) == 1)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Full width</option>
                                            <option value=\"2\" ";
            // line 908
            if ((($context["main_layout"] ?? null) == 2)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed</option>
                                            <option value=\"7\" ";
            // line 909
            if ((($context["main_layout"] ?? null) == 7)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed type 2</option>
                                            <option value=\"3\" ";
            // line 910
            if ((($context["main_layout"] ?? null) == 3)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed with shadow</option>
                                            <option value=\"4\" ";
            // line 911
            if ((($context["main_layout"] ?? null) == 4)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed without background</option>
                                            <option value=\"5\" ";
            // line 912
            if ((($context["main_layout"] ?? null) == 5)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed without background type 2</option>
                                            <option value=\"6\" ";
            // line 913
            if ((($context["main_layout"] ?? null) == 6)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed without background type 3</option>
                                        </select>
                                        <div class=\"clear\"></div>
                                    </div>
                               

                                    <!-- Input -->
                                    <div class=\"input\">
                                        <p>Header:</p>
                                        <select name=\"header_layout\">
                                            <option value=\"1\" ";
            // line 923
            if ((($context["header_layout"] ?? null) == 1)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Full width</option>
                                            <option value=\"2\" ";
            // line 924
            if ((($context["header_layout"] ?? null) == 2)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed</option>
                                            <option value=\"3\" ";
            // line 925
            if ((($context["header_layout"] ?? null) == 3)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed type 2</option>
                                            <option value=\"4\" ";
            // line 926
            if ((($context["header_layout"] ?? null) == 4)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed type 3</option>
                                        </select>
                                        <div class=\"clear\"></div>
                                    </div>

                                    <!-- Input -->
                                    <div class=\"input\">
                                        <p>Slideshow:</p>
                                        <select name=\"slideshow_layout\">
                                            <option value=\"1\" ";
            // line 935
            if ((($context["slideshow_layout"] ?? null) == 1)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Full width</option>
                                            <option value=\"2\" ";
            // line 936
            if ((($context["slideshow_layout"] ?? null) == 2)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed</option>
                                            <option value=\"3\" ";
            // line 937
            if ((($context["slideshow_layout"] ?? null) == 3)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed type 2</option>
                                            <option value=\"4\" ";
            // line 938
            if ((($context["slideshow_layout"] ?? null) == 4)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed type 3</option>
                                        </select>
                                        <div class=\"clear\"></div>
                                    </div>

                                    <!-- Input -->
                                    <div class=\"input\">
                                        <p>Breadcrumb:</p>
                                        <select name=\"breadcrumb_layout\">
                                            <option value=\"1\" ";
            // line 947
            if ((($context["breadcrumb_layout"] ?? null) == 1)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Full width</option>
                                            <option value=\"2\" ";
            // line 948
            if ((($context["breadcrumb_layout"] ?? null) == 2)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed</option>
                                            <option value=\"3\" ";
            // line 949
            if ((($context["breadcrumb_layout"] ?? null) == 3)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed type 2</option>
                                            <option value=\"4\" ";
            // line 950
            if ((($context["breadcrumb_layout"] ?? null) == 4)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed type 3</option>
                                        </select>
                                        <div class=\"clear\"></div>
                                    </div>

                                    <!-- Input -->
                                    <div class=\"input\">
                                        <p>Content:</p>
                                        <select name=\"content_layout\">
                                            <option value=\"1\" ";
            // line 959
            if ((($context["content_layout"] ?? null) == 1)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Full width</option>
                                            <option value=\"2\" ";
            // line 960
            if ((($context["content_layout"] ?? null) == 2)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed</option>
                                            <option value=\"3\" ";
            // line 961
            if ((($context["content_layout"] ?? null) == 3)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed type 2</option>
                                            <option value=\"4\" ";
            // line 962
            if ((($context["content_layout"] ?? null) == 4)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed type 3</option>
                                        </select>
                                        <div class=\"clear\"></div>
                                    </div>

                                    <!-- Input -->
                                    <div class=\"input\">
                                        <p>Custom Footer:</p>
                                        <select name=\"custom_footer_layout\">
                                            <option value=\"1\" ";
            // line 971
            if ((($context["custom_footer_layout"] ?? null) == 1)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Full width</option>
                                            <option value=\"2\" ";
            // line 972
            if ((($context["custom_footer_layout"] ?? null) == 2)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed</option>
                                            <option value=\"3\" ";
            // line 973
            if ((($context["custom_footer_layout"] ?? null) == 3)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed type 2</option>
                                            <option value=\"4\" ";
            // line 974
            if ((($context["custom_footer_layout"] ?? null) == 4)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed type 3</option>
                                        </select>
                                        <div class=\"clear\"></div>
                                    </div>

                                    <!-- Input -->
                                    <div class=\"input\">
                                        <p>Footer:</p>
                                        <select name=\"footer_layout\">
                                            <option value=\"1\" ";
            // line 983
            if ((($context["footer_layout"] ?? null) == 1)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Full width</option>
                                            <option value=\"2\" ";
            // line 984
            if ((($context["footer_layout"] ?? null) == 2)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed</option>
                                            <option value=\"3\" ";
            // line 985
            if ((($context["footer_layout"] ?? null) == 3)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed type 2</option>
                                            <option value=\"4\" ";
            // line 986
            if ((($context["footer_layout"] ?? null) == 4)) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">Fixed type 3</option>
                                        </select>
                                        <div class=\"clear\"></div>
                                    </div>
                                </div>
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Product -->
\t\t\t\t\t\t<div id=\"tab_product\" class=\"tab-content\">
                            <div class=\"section\">
                                <div class=\"input with-status\">
                                    <p style=\"width:270px\">Lazy loading images:</p>
                                    ";
            // line 999
            if (((($context["lazy_loading_images"] ?? null) == 0) && (($context["lazy_loading_images"] ?? null) != ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"lazy_loading_images\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"lazy_loading_images\"></div>";
                echo " ";
            }
            echo " 
                                    <input name=\"lazy_loading_images\" value=\"";
            // line 1000
            echo ($context["lazy_loading_images"] ?? null);
            echo "\" id=\"lazy_loading_images\" type=\"hidden\" />
                                    <div class=\"clear\"></div>
                                </div>
                            </div>
\t\t\t\t\t\t\t<div class=\"section\">
                                <div class=\"input with-status\">
                                    <p style=\"width:270px\">Sale badge:</p>
                                    ";
            // line 1007
            if (((($context["display_text_sale"] ?? null) == 0) && (($context["display_text_sale"] ?? null) != ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"display_text_sale\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"display_text_sale\"></div>";
                echo " ";
            }
            echo " 
                                    <input name=\"display_text_sale\" value=\"";
            // line 1008
            echo ($context["display_text_sale"] ?? null);
            echo "\" id=\"display_text_sale\" type=\"hidden\" />
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:270px\">Type Sale:</p>
                                    <select name=\"type_sale\">
                                        <option value=\"0\" ";
            // line 1015
            if ((($context["type_sale"] ?? null) == "0")) {
                echo " selected=\"selected\"";
            }
            echo ">Text</option>
                                        <option value=\"1\" ";
            // line 1016
            if ((($context["type_sale"] ?? null) == "1")) {
                echo " selected=\"selected\"";
            }
            echo ">%</option>
                                    </select>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:270px\">Text Sale:</p>
                                    <div class=\"list-language\">
                                        ";
            // line 1024
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <div class=\"language\">
                                            ";
                // line 1026
                $context["language_id"] = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["language"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["language_id"] ?? null) : null);
                echo " 
                                            <img src=\"language/";
                // line 1027
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["language"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["code"] ?? null) : null);
                echo "/";
                echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["language"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["language"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                            <input type=\"text\" name=\"sale_text[";
                // line 1028
                echo ($context["language_id"] ?? null);
                echo "]\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["sale_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1028)) {
                    echo " ";
                    echo (("value=\"" . (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["sale_text"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[($context["language_id"] ?? null)] ?? null) : null)) . "\"");
                    echo " ";
                }
                echo ">
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1030
            echo " 
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input with-status\">
                                    <p style=\"width:270px\">Display New:</p>
                                    ";
            // line 1037
            if (((($context["display_text_new"] ?? null) == 0) && (($context["display_text_new"] ?? null) != ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"display_text_new\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"display_text_new\"></div>";
                echo " ";
            }
            echo " 
                                    <input name=\"display_text_new\" value=\"";
            // line 1038
            echo ($context["display_text_new"] ?? null);
            echo "\" id=\"display_text_new\" type=\"hidden\" />
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:270px\">Text New:</p>
                                    <div class=\"list-language\">
                                        ";
            // line 1045
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <div class=\"language\">
                                            ";
                // line 1047
                $context["language_id"] = (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["language"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["language_id"] ?? null) : null);
                echo " 
                                            <img src=\"language/";
                // line 1048
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["language"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["code"] ?? null) : null);
                echo "/";
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["language"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["language"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                            <input type=\"text\" name=\"new_text[";
                // line 1049
                echo ($context["language_id"] ?? null);
                echo "]\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["new_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1049)) {
                    echo " ";
                    echo (("value=\"" . (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["new_text"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[($context["language_id"] ?? null)] ?? null) : null)) . "\"");
                    echo " ";
                }
                echo ">
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1051
            echo " 
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>
                                
                                <div class=\"input\">
                                    <p style=\"width:270px\">New Products label limit:</p>
                                    <input type=\"text\" name=\"new_products_label_limit\" style=\"width:60px\" value=\"";
            // line 1058
            echo ($context["new_products_label_limit"] ?? null);
            echo "\" />
                                    <div class=\"clear\"></div>
                                </div>
                            </div>
\t\t\t\t\t\t\t<div class=\"section\">
                                <div class=\"section-title\">
                                <h4>Product page</h4>
                                </div>
                                <div class=\"section-content\">
                                    <div class=\"input\">
                                        <p style=\"width:270px\">Previous next products buttons:</p>
                                        <select name=\"product_breadcrumb\">
                                            <option value=\"0\" ";
            // line 1070
            if ((($context["product_breadcrumb"] ?? null) == "0")) {
                echo " selected=\"selected\"";
            }
            echo ">With details</option>
                                            <option value=\"1\" ";
            // line 1071
            if ((($context["product_breadcrumb"] ?? null) == "1")) {
                echo " selected=\"selected\"";
            }
            echo ">Only button</option>
                                            <option value=\"2\" ";
            // line 1072
            if ((($context["product_breadcrumb"] ?? null) == "2")) {
                echo " selected=\"selected\"";
            }
            echo ">Disable</option>
                                        </select>
                                        <a href=\"http://themenis.com/opencart/kiaria/doc\" class=\"hint-tooltip\" data-toggle=\"tooltip\" title=\"Go to the documentation to se how it works\" target=\"_blank\"></a>
                                        <div class=\"clear\"></div>
                                    </div>

                                    <div class=\"input\">
                                        <p style=\"width:270px\">Product image zoom:</p>
                                        <select name=\"product_image_zoom\">
                                            <option value=\"0\" ";
            // line 1081
            if ((($context["product_image_zoom"] ?? null) == "0")) {
                echo " selected=\"selected\"";
            }
            echo ">Cloud Zoom</option>
                                            <option value=\"1\" ";
            // line 1082
            if ((($context["product_image_zoom"] ?? null) == "1")) {
                echo " selected=\"selected\"";
            }
            echo ">Inner Cloud Zoom</option>
                                            <option value=\"2\" ";
            // line 1083
            if ((($context["product_image_zoom"] ?? null) == "2")) {
                echo " selected=\"selected\"";
            }
            echo ">Default</option>
                                        </select>
                                        <div class=\"clear\"></div>
                                    </div>

                                    <div class=\"input\">
                                        <p style=\"width:270px\">Product image size:</p>
                                        <select name=\"product_image_size\">
                                            <option value=\"1\" ";
            // line 1091
            if ((($context["product_image_size"] ?? null) == "1")) {
                echo " selected=\"selected\"";
            }
            echo ">Small</option>
                                            <option value=\"2\" ";
            // line 1092
            if (((($context["product_image_size"] ?? null) == "2") || (($context["product_image_size"] ?? null) < 1))) {
                echo " selected=\"selected\"";
            }
            echo ">Medium</option>
                                            <option value=\"3\" ";
            // line 1093
            if ((($context["product_image_size"] ?? null) == "3")) {
                echo " selected=\"selected\"";
            }
            echo ">Large</option>
                                        </select>
                                        <div class=\"clear\"></div>
                                    </div>

                                    <div class=\"input\">
                                        <p style=\"width:270px\">Position image additional:</p>
                                        <select name=\"position_image_additional\">
                                            <option value=\"1\" ";
            // line 1101
            if ((($context["position_image_additional"] ?? null) == "1")) {
                echo " selected=\"selected\"";
            }
            echo ">Bottom</option>
                                            <option value=\"2\" ";
            // line 1102
            if ((($context["position_image_additional"] ?? null) == "2")) {
                echo " selected=\"selected\"";
            }
            echo ">Left</option>
                                        </select>
                                        <div class=\"clear\"></div>
                                    </div>

                                    <div class=\"input with-status\">
                                        <p style=\"width:270px\">Product social share:</p>
                                        ";
            // line 1109
            if (((($context["product_social_share"] ?? null) == 0) && (($context["product_social_share"] ?? null) != ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"product_social_share\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"product_social_share\"></div>";
                echo " ";
            }
            echo " 
                                        <input name=\"product_social_share\" value=\"";
            // line 1110
            echo ($context["product_social_share"] ?? null);
            echo "\" id=\"product_social_share\" type=\"hidden\" />
                                        <div class=\"clear\"></div>
                                    </div>

                                    <div class=\"input with-status\">
                                        <p style=\"width:270px\">Related products:</p>
                                        ";
            // line 1116
            if (((($context["product_related_status"] ?? null) == 0) && (($context["product_related_status"] ?? null) != ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"product_related_status\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"product_related_status\"></div>";
                echo " ";
            }
            echo " 
                                        <input name=\"product_related_status\" value=\"";
            // line 1117
            echo ($context["product_related_status"] ?? null);
            echo "\" id=\"product_related_status\" type=\"hidden\" />
                                        <div class=\"clear\"></div>
                                    </div>


                                    <div class=\"input\">
                                        <p style=\"width:270px\">Option radio style:</p>
                                        <select name=\"product_page_radio_style\">
                                            <option value=\"0\" ";
            // line 1125
            if ((($context["product_page_radio_style"] ?? null) == "0")) {
                echo " selected=\"selected\"";
            }
            echo ">Default</option>
                                            <option value=\"1\" ";
            // line 1126
            if ((($context["product_page_radio_style"] ?? null) == "1")) {
                echo " selected=\"selected\"";
            }
            echo ">Button</option>
                                        </select>
                                        <div class=\"clear\"></div>
                                    </div>

                                    <div class=\"input\">
                                        <p style=\"width:270px\">Option radio image size:</p>
                                        <input type=\"text\" name=\"product_page_radio_image_width\" style=\"width:60px\" value=\"";
            // line 1133
            echo ($context["product_page_radio_image_width"] ?? null);
            echo "\" />
                                        <div style=\"float:left;width:auto;padding-right:15px;position:relative;margin-left:-5px;padding-top:12px\"> x </div>
                                        <input type=\"text\" name=\"product_page_radio_image_height\" style=\"width:60px\" value=\"";
            // line 1135
            echo ($context["product_page_radio_image_height"] ?? null);
            echo "\" />
                                        <div class=\"clear\"></div>
                                    </div>

                                    <div class=\"input\">
                                        <p style=\"width:270px\">Option checkbox style:</p>
                                        <select name=\"product_page_checkbox_style\">
                                            <option value=\"0\" ";
            // line 1142
            if ((($context["product_page_checkbox_style"] ?? null) == "0")) {
                echo " selected=\"selected\"";
            }
            echo ">Default</option>
                                            <option value=\"1\" ";
            // line 1143
            if ((($context["product_page_checkbox_style"] ?? null) == "1")) {
                echo " selected=\"selected\"";
            }
            echo ">Button</option>
                                        </select>
                                        <div class=\"clear\"></div>
                                    </div>
                                </div>
                            </div>
\t\t\t\t\t\t\t<div class=\"section\">
                                <div class=\"section-title\">
                                    <h4>Product grid</h4>
                                </div>
                                <div class=\"section-content\">
                                    <div class=\"input\">
                                        <p style=\"width:270px\">Product number per row:</p>
                                        <select name=\"product_per_pow\">
                                            <option value=\"3\"";
            // line 1157
            if ((($context["product_per_pow"] ?? null) == "3")) {
                echo " selected=\"selected\"";
            }
            echo ">3</option>
                                            <option value=\"4\"";
            // line 1158
            if (((($context["product_per_pow"] ?? null) == "4") || (($context["product_per_pow"] ?? null) < 3))) {
                echo " selected=\"selected\"";
            }
            echo ">4</option>
                                            <option value=\"5\"";
            // line 1159
            if ((($context["product_per_pow"] ?? null) == "5")) {
                echo " selected=\"selected\"";
            }
            echo ">5</option>
                                            <option value=\"6\"";
            // line 1160
            if ((($context["product_per_pow"] ?? null) == "6")) {
                echo " selected=\"selected\"";
            }
            echo ">6</option>
                                        </select>
                                        <div class=\"clear\"></div>
                                    </div>
                                
                                    <div class=\"input\">
                                        <p style=\"width:270px\">Product image effect:</p>
                                        <select name=\"product_image_effect\">
                                            <option value=\"0\"";
            // line 1168
            if ((($context["product_image_effect"] ?? null) == "0")) {
                echo " selected=\"selected\"";
            }
            echo ">None</option>
                                            <option value=\"1\"";
            // line 1169
            if ((($context["product_image_effect"] ?? null) == "1")) {
                echo " selected=\"selected\"";
            }
            echo ">Swap image effect</option>
                                            <option value=\"2\"";
            // line 1170
            if ((($context["product_image_effect"] ?? null) == "2")) {
                echo " selected=\"selected\"";
            }
            echo ">Zoom image effect</option>
                                        </select>
                                        <div class=\"clear\"></div>
                                    </div>
                                    
                                    <!-- Input -->
                                    <div class=\"input\">
                                    \t<p style=\"width:270px\">jQuery countdown translate:</p>
                                    \t<div class=\"list-language\">
                                    \t\t";
            // line 1179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                    \t\t<div class=\"language select\">
                                    \t\t\t";
                // line 1181
                $context["language_id"] = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["language"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["language_id"] ?? null) : null);
                echo " 
                                    \t\t\t<img src=\"language/";
                // line 1182
                echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["language"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["code"] ?? null) : null);
                echo "/";
                echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["language"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["language"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                    \t\t\t<select type=\"text\" name=\"jquery_countdown_translate[";
                // line 1183
                echo ($context["language_id"] ?? null);
                echo "]\" >                                  \t\t\t

";
                // line 1185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["jquery_countdowns"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["jquery_countdown"]) {
                    // line 1186
                    echo "                                    \t\t\t\t
  <option value=\"";
                    // line 1187
                    echo $context["jquery_countdown"];
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["jquery_countdown_translate"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1187) && ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["jquery_countdown_translate"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[($context["language_id"] ?? null)] ?? null) : null) == $context["jquery_countdown"]))) {
                        echo " ";
                        echo "selected";
                        echo " ";
                    }
                    echo ">";
                    echo $context["jquery_countdown"];
                    echo "</option>
 \t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jquery_countdown'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1189
                echo " \t\t\t 
                                        </select>
                                    \t\t</div>
                                    \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1192
            echo " 
                                    \t</div>
                                    \t<div class=\"clear\"></div>
                                    </div>

                                    <div class=\"input with-status\">
                                        <p style=\"width:270px\">Quick view:</p>
                                        ";
            // line 1199
            if ((($context["quick_view"] ?? null) == 0)) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"quick_view\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"quick_view\"></div>";
                echo " ";
            }
            echo " 
                                        <input name=\"quick_view\" value=\"";
            // line 1200
            echo ($context["quick_view"] ?? null);
            echo "\" id=\"quick_view\" type=\"hidden\" />
                                        <div class=\"clear\"></div>
                                    </div>
                                    
                                    <div class=\"inputs-grouped\">
                                        <div class=\"pull-left\">
                                            <div class=\"input\">
                                                <p style=\"width:272px\">Display elements on product grid:</p>
                                                <div class=\"clear\"></div>
                                            </div>
                                        </div>
                                        <div class=\"pull-left\">
                                            
                                            <div class=\"input inline\">
                                                <label style=\"width:240px\"> 
                                                    ";
            // line 1215
            if (((($context["display_specials_countdown"] ?? null) == 0) || (($context["display_specials_countdown"] ?? null) == ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"display_specials_countdown\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"display_specials_countdown\"></div>";
                echo " ";
            }
            echo " 
                                                    <input name=\"display_specials_countdown\" value=\"";
            // line 1216
            echo ($context["display_specials_countdown"] ?? null);
            echo "\" id=\"display_specials_countdown\" type=\"hidden\" />
                                                    <span>specials countdown </span>
                                                </label>
                                            </div>
                                            
                                            <div class=\"input inline\">
                                                <label style=\"width:240px\">
                                                    ";
            // line 1223
            if (((($context["display_add_to_wishlist"] ?? null) == 0) && (($context["display_add_to_wishlist"] ?? null) != ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"display_add_to_wishlist\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"display_add_to_wishlist\"></div>";
                echo " ";
            }
            echo " 
                                                    <input name=\"display_add_to_wishlist\" value=\"";
            // line 1224
            echo ($context["display_add_to_wishlist"] ?? null);
            echo "\" id=\"display_add_to_wishlist\" type=\"hidden\" />
                                                    <span>add to wishlist</span>
                                                </label>
                                            </div>
                                            <br>
                                            <div class=\"input inline\">
                                                <label style=\"width:240px\">
                                                    ";
            // line 1231
            if (((($context["display_add_to_compare"] ?? null) == 0) && (($context["display_add_to_compare"] ?? null) != ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"display_add_to_compare\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"display_add_to_compare\"></div>";
                echo " ";
            }
            echo " 
                                                    <input name=\"display_add_to_compare\" value=\"";
            // line 1232
            echo ($context["display_add_to_compare"] ?? null);
            echo "\" id=\"display_add_to_compare\" type=\"hidden\" />
                                                    <span>add to compare</span>
                                                </label>
                                            </div>
                                            
                                            <div class=\"input inline\">
                                                <label style=\"width:240px\">
                                                    ";
            // line 1239
            if (((($context["display_add_to_cart"] ?? null) == 0) && (($context["display_add_to_cart"] ?? null) != ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"display_add_to_cart\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"display_add_to_cart\"></div>";
                echo " ";
            }
            echo " 
                                                    <input name=\"display_add_to_cart\" value=\"";
            // line 1240
            echo ($context["display_add_to_cart"] ?? null);
            echo "\" id=\"display_add_to_cart\" type=\"hidden\" />
                                                    <span>add to cart</span>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=\"inputs-grouped\">
                                        <div class=\"pull-left\">
                                            <div class=\"input\">
                                                <p style=\"width:272px\">Product scroll:</p>
                                                <div class=\"clear\"></div>
                                            </div>
                                        </div>
                                        <div class=\"pull-left\">
                                            
                                            <div class=\"input inline\">
                                                <label style=\"width:240px\">
                                                    ";
            // line 1258
            if (((($context["product_scroll_latest"] ?? null) == 0) && (($context["product_scroll_latest"] ?? null) != ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"product_scroll_latest\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"product_scroll_latest\"></div>";
                echo " ";
            }
            echo " 
                                                    <input name=\"product_scroll_latest\" value=\"";
            // line 1259
            echo ($context["product_scroll_latest"] ?? null);
            echo "\" id=\"product_scroll_latest\" type=\"hidden\" />
                                                    <span>latest</span>
                                                </label>
                                            </div>
                                            
                                            <div class=\"input inline\">
                                                <label style=\"width:240px\">
                                                    ";
            // line 1266
            if (((($context["product_scroll_bestsellers"] ?? null) == 0) && (($context["product_scroll_bestsellers"] ?? null) != ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"product_scroll_bestsellers\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"product_scroll_bestsellers\"></div>";
                echo " ";
            }
            echo " 
                                                    <input name=\"product_scroll_bestsellers\" value=\"";
            // line 1267
            echo ($context["product_scroll_bestsellers"] ?? null);
            echo "\" id=\"product_scroll_bestsellers\" type=\"hidden\" /> 
                                                    <span>bestsellers</span>
                                                </label>
                                            </div>
                                            <br>
                                            <div class=\"input inline\">
                                                <label style=\"width:240px\">
                                                    ";
            // line 1274
            if (((($context["product_scroll_featured"] ?? null) == 0) && (($context["product_scroll_featured"] ?? null) != ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"product_scroll_featured\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"product_scroll_featured\"></div>";
                echo " ";
            }
            echo " 
                                                    <input name=\"product_scroll_featured\" value=\"";
            // line 1275
            echo ($context["product_scroll_featured"] ?? null);
            echo "\" id=\"product_scroll_featured\" type=\"hidden\" />
                                                    <span>featured</span>
                                                </label>
                                            </div>
                                            
                                            <div class=\"input inline\">
                                                <label style=\"width:240px\">
                                                    ";
            // line 1282
            if (((($context["product_scroll_specials"] ?? null) == 0) && (($context["product_scroll_specials"] ?? null) != ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"product_scroll_specials\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"product_scroll_specials\"></div>";
                echo " ";
            }
            echo " 
                                                    <input name=\"product_scroll_specials\" value=\"";
            // line 1283
            echo ($context["product_scroll_specials"] ?? null);
            echo "\" id=\"product_scroll_specials\" type=\"hidden\" />
                                                    <span>specials</span>
                                                </label>
                                            </div>
                                            <br>
                                            <div class=\"input inline\">
                                                <label style=\"width:240px\">
                                                    ";
            // line 1290
            if (((($context["product_scroll_related"] ?? null) == 0) && (($context["product_scroll_related"] ?? null) != ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"product_scroll_related\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"product_scroll_related\"></div>";
                echo " ";
            }
            echo " 
                                                    <input name=\"product_scroll_related\" value=\"";
            // line 1291
            echo ($context["product_scroll_related"] ?? null);
            echo "\" id=\"product_scroll_related\" type=\"hidden\" />
                                                    <span>related</span>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Category -->
\t\t\t\t\t\t<div id=\"tab_category\" class=\"tab-content\">
                            <div class=\"section last\">
                                <!-- Input -->
                                <div class=\"input\">
                                    <p style=\"width:270px\">Product grid number per row:</p>
                                    <select name=\"product_per_pow2\">
                                        <option value=\"2\"";
            // line 1310
            if ((($context["product_per_pow2"] ?? null) == "2")) {
                echo " selected=\"selected\"";
            }
            echo ">2</option>
                                        <option value=\"3\"";
            // line 1311
            if ((($context["product_per_pow2"] ?? null) == "3")) {
                echo " selected=\"selected\"";
            }
            echo ">3</option>
                                        <option value=\"4\"";
            // line 1312
            if (((($context["product_per_pow2"] ?? null) == "4") || (($context["product_per_pow2"] ?? null) < 2))) {
                echo " selected=\"selected\"";
            }
            echo ">4</option>
                                        <option value=\"5\"";
            // line 1313
            if ((($context["product_per_pow2"] ?? null) == "5")) {
                echo " selected=\"selected\"";
            }
            echo ">5</option>
                                        <option value=\"6\"";
            // line 1314
            if ((($context["product_per_pow2"] ?? null) == "6")) {
                echo " selected=\"selected\"";
            }
            echo ">6</option>
                                    </select>
                                    <div class=\"clear\"></div>
                                </div>

                                <!-- Input -->
                                <div class=\"input\">
                                    <p style=\"width:270px\">Default list/grid:</p>
                                    <select name=\"default_list_grid\">
                                        <option value=\"0\" ";
            // line 1323
            if ((($context["default_list_grid"] ?? null) == "0")) {
                echo " selected=\"selected\"";
            }
            echo ">List</option>
                                        <option value=\"1\" ";
            // line 1324
            if ((($context["default_list_grid"] ?? null) == "1")) {
                echo " selected=\"selected\"";
            }
            echo ">Grid</option>
                                    </select>
                                    <div class=\"clear\"></div>
                                </div>

                                <!-- Input -->
                                <div class=\"input\">
                                    <p style=\"width:270px\">Refine search style:</p>
                                    <select name=\"refine_search_style\">
                                        <option value=\"0\" ";
            // line 1333
            if ((($context["refine_search_style"] ?? null) == "0")) {
                echo " selected=\"selected\"";
            }
            echo ">With images</option>
                                        <option value=\"1\" ";
            // line 1334
            if ((($context["refine_search_style"] ?? null) == "1")) {
                echo " selected=\"selected\"";
            }
            echo ">Text only</option>
                                        <option value=\"2\" ";
            // line 1335
            if ((($context["refine_search_style"] ?? null) == "2")) {
                echo " selected=\"selected\"";
            }
            echo ">Disable</option>
                                    </select>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:270px\">Refine search number per row:</p>
                                    <select name=\"refine_search_number\">
                                        <option value=\"2\"";
            // line 1343
            if ((($context["refine_search_number"] ?? null) == "2")) {
                echo " selected=\"selected\"";
            }
            echo ">2</option>
                                        <option value=\"3\"";
            // line 1344
            if (((($context["refine_search_number"] ?? null) == "3") || (($context["refine_search_number"] ?? null) < 2))) {
                echo " selected=\"selected\"";
            }
            echo ">3</option>
                                        <option value=\"4\"";
            // line 1345
            if ((($context["refine_search_number"] ?? null) == "4")) {
                echo " selected=\"selected\"";
            }
            echo ">4</option>
                                        <option value=\"5\"";
            // line 1346
            if ((($context["refine_search_number"] ?? null) == "5")) {
                echo " selected=\"selected\"";
            }
            echo ">5</option>
                                        <option value=\"6\"";
            // line 1347
            if ((($context["refine_search_number"] ?? null) == "6")) {
                echo " selected=\"selected\"";
            }
            echo ">6</option>
                                    </select>
                                    <div class=\"clear\"></div>
                                </div>

                                <!-- Input -->
                                <div class=\"input\">
                                    <p style=\"width:270px\">Refine search image size:</p>
                                    <input type=\"text\" name=\"refine_image_width\" style=\"width:60px\" value=\"";
            // line 1355
            echo ($context["refine_image_width"] ?? null);
            echo "\" />
                                    <div style=\"float:left;width:auto;padding-right:15px;position:relative;margin-left:-5px;padding-top:12px\"> x </div>
                                    <input type=\"text\" name=\"refine_image_height\" style=\"width:60px\" value=\"";
            // line 1357
            echo ($context["refine_image_height"] ?? null);
            echo "\" />
                                    <div class=\"clear\"></div>
                                </div>
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Header -->
\t\t\t\t\t\t<div id=\"tab_header\" class=\"tab-content\">
                            <div class=\"section\">
                                <div class=\"input with-status\">
                                    <p style=\"width:370px\">Always show vertical megamenu in home page:</p>
                                    ";
            // line 1368
            if ((($context["show_vertical_menu"] ?? null) == 0)) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"show_vertical_menu\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"show_vertical_menu\"></div>";
                echo " ";
            }
            echo " 
                                    <input name=\"show_vertical_menu\" value=\"";
            // line 1369
            echo ($context["show_vertical_menu"] ?? null);
            echo "\" id=\"show_vertical_menu\" type=\"hidden\" />
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input with-status\">
                                    <p style=\"width:370px\">Always show vertical megamenu in category page:</p>
                                    ";
            // line 1375
            if ((($context["show_vertical_menu_category_page"] ?? null) == 0)) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"show_vertical_menu_category_page\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"show_vertical_menu_category_page\"></div>";
                echo " ";
            }
            echo " 
                                    <input name=\"show_vertical_menu_category_page\" value=\"";
            // line 1376
            echo ($context["show_vertical_menu_category_page"] ?? null);
            echo "\" id=\"show_vertical_menu_category_page\" type=\"hidden\" />
                                    <div class=\"clear\"></div>
                                </div>
                                
                                <div class=\"input with-status\">
                                    <p style=\"width:370px\">Always show vertical megamenu in product page:</p>
                                    ";
            // line 1382
            if ((($context["show_vertical_menu_product_page"] ?? null) == 0)) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"show_vertical_menu_product_page\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"show_vertical_menu_product_page\"></div>";
                echo " ";
            }
            echo " 
                                    <input name=\"show_vertical_menu_product_page\" value=\"";
            // line 1383
            echo ($context["show_vertical_menu_product_page"] ?? null);
            echo "\" id=\"show_vertical_menu_product_page\" type=\"hidden\" />
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input with-status\">
                                    <p style=\"width:370px\">Quick Search Auto-Suggest:</p>
                                    ";
            // line 1389
            if (((($context["quick_search_autosuggest"] ?? null) == 0) && (($context["quick_search_autosuggest"] ?? null) != ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"quick_search_autosuggest\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"quick_search_autosuggest\"></div>";
                echo " ";
            }
            echo " 
                                    <input name=\"quick_search_autosuggest\" value=\"";
            // line 1390
            echo ($context["quick_search_autosuggest"] ?? null);
            echo "\" id=\"quick_search_autosuggest\" type=\"hidden\" />
                                    <div class=\"clear\"></div>
                                </div>
                                
                                <div class=\"input with-status\">
                                    <p style=\"width:370px\">Fixed header/menu:</p>
                                    ";
            // line 1396
            if ((($context["fixed_header"] ?? null) == 0)) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"fixed_header\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"fixed_header\"></div>";
                echo " ";
            }
            echo " 
                                    <input name=\"fixed_header\" value=\"";
            // line 1397
            echo ($context["fixed_header"] ?? null);
            echo "\" id=\"fixed_header\" type=\"hidden\" />
                                    <div class=\"clear\"></div>
                                </div>
                            </div>
                            <div class=\"section\">
                                <p style=\"margin: 10px 0\">
                                <span style=\"color: #de3609; font-weight: 600\">Here you can choose only header type = elements position, margins, paddings</span><br>
                                    If you need content from other header like phone number you need to set it in custom modules.<br>
                                Headers color you can change in Design & Colors › Colors
                                </p>
                            </div>
\t\t\t\t\t\t\t
                            <div class=\"section accordion opened\">
                                <div class=\"section-title\">
                                    <h4 >Universal, simple<br> headers</h4>
                                    <div class=\"expander\"></div>
                                </div>
                                <div class=\"section-content no-pad\">
                                    <div class=\"hint\">
                                        You can set these headers for any skin you want
                                    </div>
                                    <div class=\"input\">
                                        <div class=\"custom-headers\" style=\"float:left;width: 750px\">
                                            <div class=\"header_name\">Header 1</div>
                                            <div class=\"header_type ";
            // line 1421
            if ((($context["header_type"] ?? null) < 2)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"1\" ";
            // line 1423
            if ((($context["header_type"] ?? null) < 2)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_01.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>
                                            
                                            <div class=\"header_name\">Header 2</div>
                                            <div class=\"header_type ";
            // line 1430
            if ((($context["header_type"] ?? null) == 2)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"2\" ";
            // line 1432
            if ((($context["header_type"] ?? null) == 2)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_02.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">Header 3</div>
                                            <div class=\"header_type ";
            // line 1439
            if ((($context["header_type"] ?? null) == 5)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"5\" ";
            // line 1441
            if ((($context["header_type"] ?? null) == 5)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_03.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>
                                            
                                            <div class=\"header_name\">Header 4</div>
                                            <div class=\"header_type ";
            // line 1448
            if ((($context["header_type"] ?? null) == 6)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"6\" ";
            // line 1450
            if ((($context["header_type"] ?? null) == 6)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_04.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">Header 5</div>
                                            <div class=\"header_type ";
            // line 1457
            if ((($context["header_type"] ?? null) == 7)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"7\" ";
            // line 1459
            if ((($context["header_type"] ?? null) == 7)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_05.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">Header 6</div>
                                            <div class=\"header_type ";
            // line 1466
            if ((($context["header_type"] ?? null) == 9)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"9\" ";
            // line 1468
            if ((($context["header_type"] ?? null) == 9)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_06.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">Header 7</div>
                                            <div class=\"header_type ";
            // line 1475
            if ((($context["header_type"] ?? null) == 11)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"11\" ";
            // line 1477
            if ((($context["header_type"] ?? null) == 11)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_07.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">Header 8</div>
                                            <div class=\"header_type ";
            // line 1484
            if ((($context["header_type"] ?? null) == 12)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                <input type=\"radio\" name=\"header_type\" value=\"12\" ";
            // line 1486
            if ((($context["header_type"] ?? null) == 12)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                <img src=\"view/image/module_template/header_08.jpg\" alt=\"\" />
                                                <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">Header 9</div>
                                            <div class=\"header_type ";
            // line 1493
            if ((($context["header_type"] ?? null) == 17)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"17\" ";
            // line 1495
            if ((($context["header_type"] ?? null) == 17)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_09.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>   
                                                </label>
                                            </div>

                                            <div class=\"header_name\">Header 10</div>
                                            <div class=\"header_type ";
            // line 1502
            if ((($context["header_type"] ?? null) == 20)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"20\" ";
            // line 1504
            if ((($context["header_type"] ?? null) == 20)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_10.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"section accordion last\">
                                <div class=\"section-title\">
                                    <h4 >Advanced<br> headers</h4>
                                    <div class=\"expander\"></div>
                                </div>
                                <div class=\"section-content  no-pad\">
                                    <div class=\"hint\">
                                        It's best to use them with selected skins<br>
                                        You can use them with others skins but with changes in <span class=\"color-red\">\"Custom Modules\"</span> and <span class=\"color-red\">\"MegaMenu\"</span><br>
                                        or <span class=\"color-red\">\"Sample Data\"</span> installation<br><br>

                                        <span style=\"font-weight: 400\">
                                            Remember that each skin have demo admin panel so you can check settings for each module.
                                        </span>
                                    </div>
                                    <div class=\"input\">
                                        <div class=\"custom-headers\" style=\"float:left;width: 750px\">
                                     
                                            <div class=\"header_name\">
                                                <span>Header 11</span>
                                                <ul>
                                                    <li>Barber</li>
                                                    <li>Computer 3</li>
                                                    <li>Furniture</li>
                                                    <li>Natural Cosmetics</li>
                                                    <li>Wine</li>
                                                    <li>Skins without Vertical megamenu</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1542
            if ((($context["header_type"] ?? null) == 3)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"3\" ";
            // line 1544
            if ((($context["header_type"] ?? null) == 3)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_11.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">
                                                <span>Header 12</span>
                                                <ul>
                                                    <li>fashion 3</li>
                                                    <li>fashion simple</li>
                                                    <li>jewelry</li>
                                                    <li>jewelry black</li>
                                                    <li>Skins without Vertical megamenu</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1560
            if ((($context["header_type"] ?? null) == 4)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"4\" ";
            // line 1562
            if ((($context["header_type"] ?? null) == 4)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_12.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">
                                                <span>Header 13</span>
                                                <ul>
                                                    <li>medic</li>
                                                    <li>cosmetics2</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1575
            if ((($context["header_type"] ?? null) == 8)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"8\" ";
            // line 1577
            if ((($context["header_type"] ?? null) == 8)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_13.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">
                                                <span>Header 14</span>
                                                <ul>
                                                    <li>fashion 2</li>
                                                    <li>Skins without Vertical megamenu</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1590
            if ((($context["header_type"] ?? null) == 10)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"10\" ";
            // line 1592
            if ((($context["header_type"] ?? null) == 10)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_14.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">
                                                <span>Header 15</span>
                                                <ul>
                                                    <li>Market</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1604
            if ((($context["header_type"] ?? null) == 13)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"13\" ";
            // line 1606
            if ((($context["header_type"] ?? null) == 13)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_15.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">
                                                <span>Header 16</span>
                                                <ul>
                                                    <li>Material arts</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1618
            if ((($context["header_type"] ?? null) == 14)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"14\" ";
            // line 1620
            if ((($context["header_type"] ?? null) == 14)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_16.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            
                                            <div class=\"header_name\">
                                                <span>Header 17</span>
                                                <ul>
                                                    <li>Sport</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1633
            if ((($context["header_type"] ?? null) == 15)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"15\" ";
            // line 1635
            if ((($context["header_type"] ?? null) == 15)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_17.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">
                                                <span>Header 18</span>
                                                <ul>
                                                    <li>Exclusive</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1647
            if ((($context["header_type"] ?? null) == 16)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"16\" ";
            // line 1649
            if ((($context["header_type"] ?? null) == 16)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_18.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            
                                            <div class=\"header_name\">
                                                <span>Header 19</span>
                                                <ul>
                                                    <li>Coffe</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1662
            if ((($context["header_type"] ?? null) == 18)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"18\" ";
            // line 1664
            if ((($context["header_type"] ?? null) == 18)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_19.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">
                                                <span>Header 20</span>
                                                <ul>
                                                    <li>Car parts</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1676
            if ((($context["header_type"] ?? null) == 19)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"19\" ";
            // line 1678
            if ((($context["header_type"] ?? null) == 19)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_20.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">
                                                <span>Header 21</span>
                                                <ul>
                                                    <li>Flowers</li>
                                                    <li>Sport winter</li>
                                                    <li>Skins without Vertical megamenu</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1692
            if ((($context["header_type"] ?? null) == 21)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"21\" ";
            // line 1694
            if ((($context["header_type"] ?? null) == 21)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_21.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">
                                                <span>Header 22</span>
                                                <ul>
                                                    <li>Audio</li>
                                                    <li>Skins without Vertical megamenu</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1707
            if ((($context["header_type"] ?? null) == 22)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"22\" ";
            // line 1709
            if ((($context["header_type"] ?? null) == 22)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_22.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">
                                                <span>Header 23</span>
                                                <ul>
                                                    <li>Holidays</li>
                                                    <li>Skins without Vertical megamenu</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1722
            if ((($context["header_type"] ?? null) == 23)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"23\" ";
            // line 1724
            if ((($context["header_type"] ?? null) == 23)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_23.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">
                                                <span>Header 24</span>
                                                <ul>
                                                    <li>Books</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1736
            if ((($context["header_type"] ?? null) == 24)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"24\" ";
            // line 1738
            if ((($context["header_type"] ?? null) == 24)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_24.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">
                                                <span>Header 25</span>
                                                <ul>
                                                    <li>Ceramica</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1750
            if ((($context["header_type"] ?? null) == 25)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"25\" ";
            // line 1752
            if ((($context["header_type"] ?? null) == 25)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_25.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>

                                            <div class=\"header_name\">
                                                <span>Header 26</span>
                                                <ul>
                                                    <li>Lingerie</li>
                                                    <li>Skins without Vertical megamenu</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1765
            if ((($context["header_type"] ?? null) == 26)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"26\" ";
            // line 1767
            if ((($context["header_type"] ?? null) == 26)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_26.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>
                                            
                                            <div class=\"header_name\">
                                                <span>Header 27</span>
                                                <ul>
                                                    <li>Fashion7</li>
                                                </ul>
                                            </div>
                                            <div class=\"header_type ";
            // line 1779
            if ((($context["header_type"] ?? null) == 27)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" name=\"header_type\" value=\"27\" ";
            // line 1781
            if ((($context["header_type"] ?? null) == 27)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <img src=\"view/image/module_template/header_27.jpg\" alt=\"\" />
                                                    <div class=\"clear\"></div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class=\"clear\"></div>
                                    </div>
                                </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t
 \t\t\t\t\t\t<!-- Translations -->
\t\t\t\t\t\t<div id=\"tab_translations\" class=\"tab-content\">
\t\t\t\t\t\t\t<div class=\"section last\">
                                <div class=\"input\">
                                    <p style=\"width:200px\">Welcome text in top bar:</p>
                                    <div class=\"list-language\">
                                        ";
            // line 1799
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <div class=\"language\">
                                            ";
                // line 1801
                $context["language_id"] = (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["language"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["language_id"] ?? null) : null);
                echo " 
                                            <img src=\"language/";
                // line 1802
                echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["language"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["code"] ?? null) : null);
                echo "/";
                echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["language"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["language"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                            <input type=\"text\" name=\"welcome_text[";
                // line 1803
                echo ($context["language_id"] ?? null);
                echo "]\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["welcome_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1803)) {
                    echo " ";
                    echo (("value=\"" . (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["welcome_text"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[($context["language_id"] ?? null)] ?? null) : null)) . "\"");
                    echo " ";
                }
                echo ">
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1805
            echo " 
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:200px\">Shopping cart:</p>
                                    <div class=\"list-language\">
                                        ";
            // line 1813
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <div class=\"language\">
                                            ";
                // line 1815
                $context["language_id"] = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["language"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["language_id"] ?? null) : null);
                echo " 
                                            <img src=\"language/";
                // line 1816
                echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["language"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["code"] ?? null) : null);
                echo "/";
                echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["language"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["language"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                            <input type=\"text\" name=\"shopping_cart_text[";
                // line 1817
                echo ($context["language_id"] ?? null);
                echo "]\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["shopping_cart_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1817)) {
                    echo " ";
                    echo (("value=\"" . (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["shopping_cart_text"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[($context["language_id"] ?? null)] ?? null) : null)) . "\"");
                    echo " ";
                }
                echo ">
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1819
            echo " 
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:200px\">Home:</p>
                                    <div class=\"list-language\">
                                        ";
            // line 1827
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <div class=\"language\">
                                            ";
                // line 1829
                $context["language_id"] = (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["language"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["language_id"] ?? null) : null);
                echo " 
                                            <img src=\"language/";
                // line 1830
                echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["language"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["code"] ?? null) : null);
                echo "/";
                echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["language"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["language"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                            <input type=\"text\" name=\"home_text[";
                // line 1831
                echo ($context["language_id"] ?? null);
                echo "]\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["home_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1831)) {
                    echo " ";
                    echo (("value=\"" . (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["home_text"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[($context["language_id"] ?? null)] ?? null) : null)) . "\"");
                    echo " ";
                }
                echo ">
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1833
            echo " 
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:200px\">Add to compare:</p>
                                    <div class=\"list-language\">
                                        ";
            // line 1841
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <div class=\"language\">
                                            ";
                // line 1843
                $context["language_id"] = (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["language"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["language_id"] ?? null) : null);
                echo " 
                                            <img src=\"language/";
                // line 1844
                echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["language"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["code"] ?? null) : null);
                echo "/";
                echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["language"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["language"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                            <input type=\"text\" name=\"add_to_compare_text[";
                // line 1845
                echo ($context["language_id"] ?? null);
                echo "]\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["add_to_compare_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1845)) {
                    echo " ";
                    echo (("value=\"" . (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["add_to_compare_text"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[($context["language_id"] ?? null)] ?? null) : null)) . "\"");
                    echo " ";
                }
                echo ">
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1847
            echo " 
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:200px\">Add to wishlist:</p>
                                    <div class=\"list-language\">
                                        ";
            // line 1855
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <div class=\"language\">
                                            ";
                // line 1857
                $context["language_id"] = (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["language"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["language_id"] ?? null) : null);
                echo " 
                                            <img src=\"language/";
                // line 1858
                echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["language"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["code"] ?? null) : null);
                echo "/";
                echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["language"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["language"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                            <input type=\"text\" name=\"add_to_wishlist_text[";
                // line 1859
                echo ($context["language_id"] ?? null);
                echo "]\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["add_to_wishlist_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1859)) {
                    echo " ";
                    echo (("value=\"" . (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["add_to_wishlist_text"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a[($context["language_id"] ?? null)] ?? null) : null)) . "\"");
                    echo " ";
                }
                echo ">
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1861
            echo " 
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:200px\">Quickview:</p>
                                    <div class=\"list-language\">
                                        ";
            // line 1869
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <div class=\"language\">
                                            ";
                // line 1871
                $context["language_id"] = (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["language"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["language_id"] ?? null) : null);
                echo " 
                                            <img src=\"language/";
                // line 1872
                echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["language"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["code"] ?? null) : null);
                echo "/";
                echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["language"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["language"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                            <input type=\"text\" name=\"quickview_text[";
                // line 1873
                echo ($context["language_id"] ?? null);
                echo "]\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["quickview_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1873)) {
                    echo " ";
                    echo (("value=\"" . (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["quickview_text"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[($context["language_id"] ?? null)] ?? null) : null)) . "\"");
                    echo " ";
                }
                echo ">
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1875
            echo " 
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:200px\">More details:</p>
                                    <div class=\"list-language\">
                                        ";
            // line 1883
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <div class=\"language\">
                                            ";
                // line 1885
                $context["language_id"] = (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["language"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["language_id"] ?? null) : null);
                echo " 
                                            <img src=\"language/";
                // line 1886
                echo (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["language"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["code"] ?? null) : null);
                echo "/";
                echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["language"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["language"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                            <input type=\"text\" name=\"more_details_text[";
                // line 1887
                echo ($context["language_id"] ?? null);
                echo "]\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["more_details_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1887)) {
                    echo " ";
                    echo (("value=\"" . (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["more_details_text"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0[($context["language_id"] ?? null)] ?? null) : null)) . "\"");
                    echo " ";
                }
                echo ">
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1889
            echo " 
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:200px\">Our brands:</p>
                                    <div class=\"list-language\">
                                        ";
            // line 1897
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <div class=\"language\">
                                            ";
                // line 1899
                $context["language_id"] = (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["language"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["language_id"] ?? null) : null);
                echo " 
                                            <img src=\"language/";
                // line 1900
                echo (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["language"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["code"] ?? null) : null);
                echo "/";
                echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["language"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["language"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                            <input type=\"text\" name=\"our_brands_text[";
                // line 1901
                echo ($context["language_id"] ?? null);
                echo "]\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["our_brands_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1901)) {
                    echo " ";
                    echo (("value=\"" . (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = ($context["our_brands_text"] ?? null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d[($context["language_id"] ?? null)] ?? null) : null)) . "\"");
                    echo " ";
                }
                echo ">
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1903
            echo " 
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:200px\">Limited time offer:</p>
                                    <div class=\"list-language\">
                                        ";
            // line 1911
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <div class=\"language\">
                                            ";
                // line 1913
                $context["language_id"] = (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = $context["language"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["language_id"] ?? null) : null);
                echo " 
                                            <img src=\"language/";
                // line 1914
                echo (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = $context["language"]) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["code"] ?? null) : null);
                echo "/";
                echo (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["language"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["language"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                            <input type=\"text\" name=\"limited_time_offer_text[";
                // line 1915
                echo ($context["language_id"] ?? null);
                echo "]\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["limited_time_offer_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1915)) {
                    echo " ";
                    echo (("value=\"" . (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = ($context["limited_time_offer_text"] ?? null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921[($context["language_id"] ?? null)] ?? null) : null)) . "\"");
                    echo " ";
                }
                echo ">
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1917
            echo " 
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:200px\">Previous product:</p>
                                    <div class=\"list-language\">
                                        ";
            // line 1925
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <div class=\"language\">
                                            ";
                // line 1927
                $context["language_id"] = (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = $context["language"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["language_id"] ?? null) : null);
                echo " 
                                            <img src=\"language/";
                // line 1928
                echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["language"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["code"] ?? null) : null);
                echo "/";
                echo (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = $context["language"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = $context["language"]) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                            <input type=\"text\" name=\"previous_product_text[";
                // line 1929
                echo ($context["language_id"] ?? null);
                echo "]\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["previous_product_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1929)) {
                    echo " ";
                    echo (("value=\"" . (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = ($context["previous_product_text"] ?? null)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a[($context["language_id"] ?? null)] ?? null) : null)) . "\"");
                    echo " ";
                }
                echo ">
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1931
            echo " 
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:200px\">Next product:</p>
                                    <div class=\"list-language\">
                                        ";
            // line 1939
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <div class=\"language\">
                                            ";
                // line 1941
                $context["language_id"] = (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = $context["language"]) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["language_id"] ?? null) : null);
                echo " 
                                            <img src=\"language/";
                // line 1942
                echo (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = $context["language"]) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["code"] ?? null) : null);
                echo "/";
                echo (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = $context["language"]) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = $context["language"]) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                            <input type=\"text\" name=\"next_product_text[";
                // line 1943
                echo ($context["language_id"] ?? null);
                echo "]\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["next_product_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1943)) {
                    echo " ";
                    echo (("value=\"" . (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = ($context["next_product_text"] ?? null)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030[($context["language_id"] ?? null)] ?? null) : null)) . "\"");
                    echo " ";
                }
                echo ">
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1945
            echo " 
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:200px\">All categories:</p>
                                    <div class=\"list-language\">
                                        ";
            // line 1953
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <div class=\"language\">
                                            ";
                // line 1955
                $context["language_id"] = (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = $context["language"]) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["language_id"] ?? null) : null);
                echo " 
                                            <img src=\"language/";
                // line 1956
                echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["language"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["code"] ?? null) : null);
                echo "/";
                echo (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = $context["language"]) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = $context["language"]) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                            <input type=\"text\" name=\"all_categories_text[";
                // line 1957
                echo ($context["language_id"] ?? null);
                echo "]\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["all_categories_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1957)) {
                    echo " ";
                    echo (("value=\"" . (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = ($context["all_categories_text"] ?? null)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768[($context["language_id"] ?? null)] ?? null) : null)) . "\"");
                    echo " ";
                }
                echo ">
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1959
            echo " 
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:200px\">Shop by car:</p>
                                    <div class=\"list-language\">
                                        ";
            // line 1967
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <div class=\"language\">
                                            ";
                // line 1969
                $context["language_id"] = (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = $context["language"]) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["language_id"] ?? null) : null);
                echo " 
                                            <img src=\"language/";
                // line 1970
                echo (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = $context["language"]) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["code"] ?? null) : null);
                echo "/";
                echo (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = $context["language"]) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = $context["language"]) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                            <input type=\"text\" name=\"shop_by_car_text[";
                // line 1971
                echo ($context["language_id"] ?? null);
                echo "]\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["shop_by_car_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1971)) {
                    echo " ";
                    echo (("value=\"" . (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = ($context["shop_by_car_text"] ?? null)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3[($context["language_id"] ?? null)] ?? null) : null)) . "\"");
                    echo " ";
                }
                echo ">
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1973
            echo " 
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"input\">
                                    <p style=\"width:200px\">Shop by brand:</p>
                                    <div class=\"list-language\">
                                        ";
            // line 1981
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <div class=\"language\">
                                            ";
                // line 1983
                $context["language_id"] = (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = $context["language"]) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["language_id"] ?? null) : null);
                echo " 
                                            <img src=\"language/";
                // line 1984
                echo (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = $context["language"]) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["code"] ?? null) : null);
                echo "/";
                echo (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = $context["language"]) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = $context["language"]) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" />
                                            <input type=\"text\" name=\"shop_by_brand_text[";
                // line 1985
                echo ($context["language_id"] ?? null);
                echo "]\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["shop_by_brand_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 1985)) {
                    echo " ";
                    echo (("value=\"" . (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = ($context["shop_by_brand_text"] ?? null)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e[($context["language_id"] ?? null)] ?? null) : null)) . "\"");
                    echo " ";
                }
                echo ">
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1987
            echo " 
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
 \t\t\t\t\t\t<div id=\"tab_banners\" class=\"tab-content\">
\t\t\t\t\t\t         <div class=\"input with-status\">
\t\t\t\t\t\t             <p style=\"width:140px\">Hover effect:</p>
\t\t\t\t\t\t             ";
            // line 1998
            if ((($context["hover_effect"] ?? null) == 0)) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"hover_effect\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"hover_effect\"></div>";
                echo " ";
            }
            echo " 
\t\t\t\t\t\t             <input name=\"hover_effect\" value=\"";
            // line 1999
            echo ($context["hover_effect"] ?? null);
            echo "\" id=\"hover_effect\" type=\"hidden\" />
\t\t\t\t\t\t             <div class=\"clear\"></div>
\t\t\t\t\t\t         </div>
\t\t\t\t\t\t         
\t\t\t\t\t\t         <div class=\"hint\" style=\"margin-top: 25px\">Hover over image below to see effect.</div>
\t\t\t\t\t\t         
                                    <div class=\"input\">
                                        <div class=\"custom-banners\" style=\"float:left;width: 615px\">
                                            <input type=\"hidden\" name=\"hover_effect_type\" value=\"";
            // line 2007
            if ((($context["hover_effect_type"] ?? null) > 1)) {
                echo " ";
                echo ($context["hover_effect_type"] ?? null);
                echo " ";
            } else {
                echo " ";
                echo 1;
                echo " ";
            }
            echo "\" />
                                             
                                            <div class=\"banner_name\">Hover effect 1</div>
                                            <div class=\"banners-effect-1 hover_effect_type ";
            // line 2010
            if ((($context["hover_effect_type"] ?? null) < 2)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" class=\"hover_effect_types\" value=\"1\" ";
            // line 2012
            if ((($context["hover_effect_type"] ?? null) < 2)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <div class=\"banners\"><div><a href=\"javascript: void()\" onclick=\"void()\"><img src=\"view/image/module_template/banner-01.png\" alt=\"\" /></a></div></div>
                                                </label>
                                            </div>
                                            
                                            <div class=\"banner_name\">Hover effect 2</div>
                                            <div class=\"banners-effect-2 hover_effect_type ";
            // line 2018
            if ((($context["hover_effect_type"] ?? null) == 2)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" class=\"hover_effect_types\" value=\"2\" ";
            // line 2020
            if ((($context["hover_effect_type"] ?? null) == 2)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <div class=\"banners\"><div><a href=\"javascript: void()\" onclick=\"void()\"><img src=\"view/image/module_template/banner-01.png\" alt=\"\" /></a></div></div>
                                                </label>
                                            </div>

                                            <div class=\"banner_name\">Hover effect 3</div>
                                            <div class=\"banners-effect-3 hover_effect_type ";
            // line 2026
            if ((($context["hover_effect_type"] ?? null) == 3)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" class=\"hover_effect_types\" value=\"3\" ";
            // line 2028
            if ((($context["hover_effect_type"] ?? null) == 3)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <div class=\"banners\"><div><a href=\"javascript: void()\" onclick=\"void()\"><img src=\"view/image/module_template/banner-01.png\" alt=\"\" /></a></div></div>
                                                </label>
                                            </div>
                                            
                                            <div class=\"banner_name\">Hover effect 4</div>
                                            <div class=\"banners-effect-4 hover_effect_type ";
            // line 2034
            if ((($context["hover_effect_type"] ?? null) == 4)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" class=\"hover_effect_types\" value=\"4\" ";
            // line 2036
            if ((($context["hover_effect_type"] ?? null) == 4)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <div class=\"banners\"><div><a href=\"javascript: void()\" onclick=\"void()\"><img src=\"view/image/module_template/banner-01.png\" alt=\"\" /></a></div></div>
                                                </label>
                                            </div>

                                            <div class=\"banner_name\">Hover effect 5</div>
                                            <div class=\"banners-effect-5 hover_effect_type ";
            // line 2042
            if ((($context["hover_effect_type"] ?? null) == 5)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" class=\"hover_effect_types\" value=\"5\" ";
            // line 2044
            if ((($context["hover_effect_type"] ?? null) == 5)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <div class=\"banners\"><div><a href=\"javascript: void()\" onclick=\"void()\"><img src=\"view/image/module_template/banner-01.png\" alt=\"\" /></a></div></div>
                                                </label>
                                            </div>

                                            <div class=\"banner_name\">Hover effect 6</div>
                                            <div class=\"banners-effect-6 hover_effect_type ";
            // line 2050
            if ((($context["hover_effect_type"] ?? null) == 6)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" class=\"hover_effect_types\" value=\"6\" ";
            // line 2052
            if ((($context["hover_effect_type"] ?? null) == 6)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <div class=\"banners\"><div><a href=\"javascript: void()\" onclick=\"void()\"><img src=\"view/image/module_template/banner-01.png\" alt=\"\" /></a></div></div>
                                                </label>
                                            </div>

                                            <div class=\"banner_name\">Hover effect 7</div>
                                            <div class=\"banners-effect-7 hover_effect_type ";
            // line 2058
            if ((($context["hover_effect_type"] ?? null) == 7)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" class=\"hover_effect_types\" value=\"7\" ";
            // line 2060
            if ((($context["hover_effect_type"] ?? null) == 7)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <div class=\"banners\"><div><a href=\"javascript: void()\" onclick=\"void()\"><img src=\"view/image/module_template/banner-01.png\" alt=\"\" /></a></div></div>
                                                </label>
                                            </div>

                                            <div class=\"banner_name\">Hover effect 8</div>
                                            <div class=\"banners-effect-8 hover_effect_type ";
            // line 2066
            if ((($context["hover_effect_type"] ?? null) == 8)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                <input type=\"radio\" class=\"hover_effect_types\" value=\"8\" ";
            // line 2068
            if ((($context["hover_effect_type"] ?? null) == 8)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <div class=\"banners\"><div><a href=\"javascript: void()\" onclick=\"void()\"><img src=\"view/image/module_template/banner-01.png\" alt=\"\" /></a></div></div>
                                                </label>
                                            </div>

                                            <div class=\"banner_name\">Hover effect 9</div>
                                            <div class=\"banners-effect-9 hover_effect_type ";
            // line 2074
            if ((($context["hover_effect_type"] ?? null) == 9)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" class=\"hover_effect_types\" value=\"9\" ";
            // line 2076
            if ((($context["hover_effect_type"] ?? null) == 9)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <div class=\"banners\"><div><a href=\"javascript: void()\" onclick=\"void()\"><img src=\"view/image/module_template/banner-01.png\" alt=\"\" /></a></div></div>
                                                </label>
                                            </div>

                                            <div class=\"banner_name\">Hover effect 10</div>
                                            <div class=\"banners-effect-10 hover_effect_type ";
            // line 2082
            if ((($context["hover_effect_type"] ?? null) == 10)) {
                echo " ";
                echo "active\"";
                echo " ";
            }
            echo "\">
                                                <label>
                                                    <input type=\"radio\" class=\"hover_effect_types\" value=\"10\" ";
            // line 2084
            if ((($context["hover_effect_type"] ?? null) == 10)) {
                echo " ";
                echo "checked=\"checked\"";
                echo " ";
            }
            echo " />
                                                    <div class=\"banners\"><div><a href=\"javascript: void()\" onclick=\"void()\"><img src=\"view/image/module_template/banner-01.png\" alt=\"\" /></a></div></div>
                                                </label>
                                            </div>
                                        </div>
                                   </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
 \t\t\t\t\t\t<div id=\"tab_rodo\" class=\"tab-content\">
\t\t\t\t\t         <div class=\"input with-status\">
\t\t\t\t\t             <p style=\"width:140px\">Status:</p>
\t\t\t\t\t             ";
            // line 2095
            if ((($context["rodo_status"] ?? null) == 0)) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"rodo_status\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"rodo_status\"></div>";
                echo " ";
            }
            echo " 
\t\t\t\t\t             <input name=\"rodo_status\" value=\"";
            // line 2096
            echo ($context["rodo_status"] ?? null);
            echo "\" id=\"rodo_status\" type=\"hidden\" />
\t\t\t\t\t             <div class=\"clear\"></div>
\t\t\t\t\t         </div>

\t\t\t\t\t\t\t<div class=\"section\">
                                <div class=\"section-title\">
                                    <h4>Text</h4>
                                </div>
                                <div class=\"section-content\">
                                
\t\t\t\t\t\t\t\t\t";
            // line 2106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t";
                // line 2107
                $context["language_id"] = (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = $context["language"]) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["language_id"] ?? null) : null);
                echo " 
\t                                    <div class=\"rodo-textarea\">\t\t
\t                                    \t<img src=\"language/";
                // line 2109
                echo (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = $context["language"]) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["code"] ?? null) : null);
                echo "/";
                echo (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = $context["language"]) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["code"] ?? null) : null);
                echo ".png\" title=\"";
                echo (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = $context["language"]) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["name"] ?? null) : null);
                echo "\" />\t\t\t\t\t\t\t\t
\t                                        ";
                // line 2110
                if (twig_get_attribute($this->env, $this->source, ($context["rodo_text"] ?? null), ($context["language_id"] ?? null), [], "array", true, true, false, 2110)) {
                    echo " 
\t                                            <textarea rows=\"0\" cols=\"0\" name=\"rodo_text[";
                    // line 2111
                    echo ($context["language_id"] ?? null);
                    echo "]\" id=\"rodo_text_";
                    echo ($context["language_id"] ?? null);
                    echo "\">";
                    if (((($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = ($context["rodo_text"] ?? null)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1[($context["language_id"] ?? null)] ?? null) : null) != "")) {
                        echo (($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = ($context["rodo_text"] ?? null)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24[($context["language_id"] ?? null)] ?? null) : null);
                    } else {
                        echo "I agree <a href=\"#\" target=\"_blank\"><b>terms and conditions</b></a> and <a href=\"#\" target=\"_blank\"><b>Privacy Policy</b></a>.";
                    }
                    echo "</textarea>
\t                                        ";
                } else {
                    // line 2112
                    echo " 
\t                                            <textarea rows=\"0\" cols=\"0\" name=\"rodo_text[";
                    // line 2113
                    echo ($context["language_id"] ?? null);
                    echo "]\" id=\"rodo_text_";
                    echo ($context["language_id"] ?? null);
                    echo "\">I agree <a href=\"#\" target=\"_blank\"><b>terms and conditions</b></a> and <a href=\"#\" target=\"_blank\"><b>Privacy Policy</b></a>.</textarea>
\t                                        ";
                }
                // line 2114
                echo " 
\t                                    </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2116
            echo " 

                                    <!-- End Input -->
                                </div>
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- **************** END TAB GENERAL OPTIONS -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- ////////////////////// End General -->
\t\t\t\t\t
\t\t\t\t\t<!-- Design -->
\t\t\t\t\t
\t\t\t\t\t
                                        
                 
\t\t\t\t\t
\t\t\t\t\t<!-- End Design -->
\t\t\t\t\t
\t\t\t\t\t<!-- Footer -->
\t\t\t\t\t
\t\t\t\t\t<div id=\"tab_footer\" class=\"tab-content3\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"footer_left\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Contact, About us, Facebook TABS -->
\t\t\t\t\t\t\t
                            <div id=\"tabs_footer\" class=\"htabs main-tabs\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 2147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t\t\t\t<a href=\"#tab_customfooter_";
                // line 2148
                echo (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = $context["language"]) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["language_id"] ?? null) : null);
                echo "\"><img src=\"language/";
                echo (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = $context["language"]) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["code"] ?? null) : null);
                echo "/";
                echo (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = $context["language"]) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = $context["language"]) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" /><span>";
                echo (($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = $context["language"]) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["name"] ?? null) : null);
                echo "</span></a>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2149
            echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
                           
\t\t\t\t\t\t\t<!-- End Contact, About us, Facebook Tabs -->
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"footer_right\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 2159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t\t\t";
                // line 2160
                $context["language_id"] = (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = $context["language"]) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["language_id"] ?? null) : null);
                echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"tab_customfooter_";
                // line 2162
                echo ($context["language_id"] ?? null);
                echo "\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- Contact, About us, Facebook TABS -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"tabs_";
                // line 2166
                echo ($context["language_id"] ?? null);
                echo "\" class=\"htabs tabs-design\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"#tab_contact_";
                // line 2168
                echo ($context["language_id"] ?? null);
                echo "\" class=\"tcontact\"><span>Contact</span></a>
\t\t\t\t\t\t\t\t\t<a href=\"#tab_aboutus_";
                // line 2169
                echo ($context["language_id"] ?? null);
                echo "\" class=\"taboutus\"><span>About us</span></a>
\t\t\t\t\t\t\t\t\t<a href=\"#tab_facebook_";
                // line 2170
                echo ($context["language_id"] ?? null);
                echo "\" class=\"tfacebook\"><span>Facebook</span></a>
\t\t\t\t\t\t\t\t\t<a href=\"#tab_twitter_";
                // line 2171
                echo ($context["language_id"] ?? null);
                echo "\" class=\"ttwitter\"><span>Twitter</span></a>
\t\t\t\t\t\t\t\t\t<a href=\"#tab_customblock_";
                // line 2172
                echo ($context["language_id"] ?? null);
                echo "\" class=\"tcustomblock\"><span>Custom</span></a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- Contact, About us, Facebook -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- TAB CONTACT -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"tab_contact_";
                // line 2180
                echo ($context["language_id"] ?? null);
                echo "\" class=\"tab-content4\">
\t\t\t\t\t\t\t\t
                                    <div class=\"section\">
\t\t\t\t\t\t\t\t\t<!-- Status -->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 2185
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2185), "contact_status", [], "array", true, true, false, 2185)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t";
                    // line 2186
                    if (((($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = (($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = ($context["customfooter"] ?? null)) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["contact_status"] ?? null) : null) == 1)) {
                        echo " ";
                        echo (("<div class=\"status status-on\" title=\"1\" rel=\"customfooter_" . ($context["language_id"] ?? null)) . "_contact_status\"></div>");
                        echo " ";
                    } else {
                        echo " ";
                        echo (("<div class=\"status status-off\" title=\"0\" rel=\"customfooter_" . ($context["language_id"] ?? null)) . "_contact_status\"></div>");
                        echo " ";
                    }
                    echo " 
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<input name=\"customfooter[";
                    // line 2188
                    echo ($context["language_id"] ?? null);
                    echo "][contact_status]\" value=\"";
                    echo (($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = (($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = ($context["customfooter"] ?? null)) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606["contact_status"] ?? null) : null);
                    echo "\" id=\"customfooter_";
                    echo ($context["language_id"] ?? null);
                    echo "_contact_status\" type=\"hidden\" />
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 2189
                    echo " 
\t\t\t\t\t\t\t\t\t\t";
                    // line 2190
                    echo (("<div class=\"status status-off\" title=\"0\" rel=\"customfooter_" . ($context["language_id"] ?? null)) . "_contact_status\"></div>");
                    echo " 
\t\t\t\t\t\t\t\t\t\t<input name=\"customfooter[";
                    // line 2191
                    echo ($context["language_id"] ?? null);
                    echo "][contact_status]\" value=\"0\" id=\"customfooter_";
                    echo ($context["language_id"] ?? null);
                    echo "_contact_status\" type=\"hidden\" />
\t\t\t\t\t\t\t\t\t";
                }
                // line 2192
                echo " 
                                    </div>
                                    
                                    
                                    <div class=\"section\">
                                        <div class=\"section-title\">
                                            <h4>Contact</h4>
                                        </div>
                                        <div class=\"section-content\">
\t\t\t\t\t\t\t\t\t
                                        <!-- Input -->

                                        <div class=\"input\">

                                            <p>Title:</p>
                                            ";
                // line 2207
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2207), "contact_title", [], "array", true, true, false, 2207)) {
                    echo " 
                                                <input name=\"customfooter[";
                    // line 2208
                    echo ($context["language_id"] ?? null);
                    echo "][contact_title]\" type=\"text\" value=\"";
                    echo (($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = (($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = ($context["customfooter"] ?? null)) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e["contact_title"] ?? null) : null);
                    echo "\" />
                                            ";
                } else {
                    // line 2209
                    echo " 
                                                <input name=\"customfooter[";
                    // line 2210
                    echo ($context["language_id"] ?? null);
                    echo "][contact_title]\" type=\"text\" value=\"\" />
                                            ";
                }
                // line 2211
                echo " 

                                            <div class=\"clear\"></div>

                                        </div>

                                        <!-- End Input -->
                                        <!-- Input -->

                                        <div class=\"input\">

                                            <p>Phone:</p>
                                            ";
                // line 2223
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2223), "contact_phone", [], "array", true, true, false, 2223)) {
                    echo " 
                                                <input name=\"customfooter[";
                    // line 2224
                    echo ($context["language_id"] ?? null);
                    echo "][contact_phone]\" type=\"text\" value=\"";
                    echo (($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = (($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = ($context["customfooter"] ?? null)) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb["contact_phone"] ?? null) : null);
                    echo "\" />
                                            ";
                } else {
                    // line 2225
                    echo " 
                                                <input name=\"customfooter[";
                    // line 2226
                    echo ($context["language_id"] ?? null);
                    echo "][contact_phone]\" type=\"text\" value=\"\" />
                                            ";
                }
                // line 2227
                echo " 

                                            <div class=\"clear\"></div>

                                        </div>

                                        <!-- End Input -->
                                        <!-- Input -->

                                        <div class=\"input\">

                                            <p>Phone 2:</p>
                                            ";
                // line 2239
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2239), "contact_phone2", [], "array", true, true, false, 2239)) {
                    echo " 
                                                <input name=\"customfooter[";
                    // line 2240
                    echo ($context["language_id"] ?? null);
                    echo "][contact_phone2]\" type=\"text\" value=\"";
                    echo (($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = (($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = ($context["customfooter"] ?? null)) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b["contact_phone2"] ?? null) : null);
                    echo "\" />
                                            ";
                } else {
                    // line 2241
                    echo " 
                                                <input name=\"customfooter[";
                    // line 2242
                    echo ($context["language_id"] ?? null);
                    echo "][contact_phone2]\" type=\"text\" value=\"\" />
                                            ";
                }
                // line 2243
                echo " 

                                            <div class=\"clear\"></div>

                                        </div>

                                        <!-- End Input -->
                                        <!-- Input -->

                                        <div class=\"input\">

                                            <p>Skype:</p>
                                            ";
                // line 2255
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2255), "contact_skype", [], "array", true, true, false, 2255)) {
                    echo " 
                                                <input name=\"customfooter[";
                    // line 2256
                    echo ($context["language_id"] ?? null);
                    echo "][contact_skype]\" type=\"text\" value=\"";
                    echo (($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = (($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 = ($context["customfooter"] ?? null)) && is_array($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3) || $__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 instanceof ArrayAccess ? ($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345["contact_skype"] ?? null) : null);
                    echo "\" />
                                            ";
                } else {
                    // line 2257
                    echo " 
                                                <input name=\"customfooter[";
                    // line 2258
                    echo ($context["language_id"] ?? null);
                    echo "][contact_skype]\" type=\"text\" value=\"\" />
                                            ";
                }
                // line 2259
                echo " 

                                            <div class=\"clear\"></div>

                                        </div>

                                        <!-- End Input -->
                                        <!-- Input -->

                                        <div class=\"input\">

                                            <p>Skype 2:</p>
                                            ";
                // line 2271
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2271), "contact_skype2", [], "array", true, true, false, 2271)) {
                    echo " 
                                                <input name=\"customfooter[";
                    // line 2272
                    echo ($context["language_id"] ?? null);
                    echo "][contact_skype2]\" type=\"text\" value=\"";
                    echo (($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 = (($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 = ($context["customfooter"] ?? null)) && is_array($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938) || $__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 instanceof ArrayAccess ? ($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0) || $__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 instanceof ArrayAccess ? ($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0["contact_skype2"] ?? null) : null);
                    echo "\" />
                                            ";
                } else {
                    // line 2273
                    echo " 
                                                <input name=\"customfooter[";
                    // line 2274
                    echo ($context["language_id"] ?? null);
                    echo "][contact_skype2]\" type=\"text\" value=\"\" />
                                            ";
                }
                // line 2275
                echo " 

                                            <div class=\"clear\"></div>

                                        </div>

                                        <!-- End Input -->
                                        <!-- Input -->

                                        <div class=\"input\">

                                            <p>E-mail:</p>
                                            ";
                // line 2287
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2287), "contact_email", [], "array", true, true, false, 2287)) {
                    echo " 
                                                <input name=\"customfooter[";
                    // line 2288
                    echo ($context["language_id"] ?? null);
                    echo "][contact_email]\" type=\"text\" value=\"";
                    echo (($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 = (($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa = ($context["customfooter"] ?? null)) && is_array($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa) || $__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa instanceof ArrayAccess ? ($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3) || $__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 instanceof ArrayAccess ? ($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3["contact_email"] ?? null) : null);
                    echo "\" />
                                            ";
                } else {
                    // line 2289
                    echo " 
                                                <input name=\"customfooter[";
                    // line 2290
                    echo ($context["language_id"] ?? null);
                    echo "][contact_email]\" type=\"text\" value=\"\" />
                                            ";
                }
                // line 2291
                echo " 

                                            <div class=\"clear\"></div>

                                        </div>

                                        <!-- End Input -->
                                        <!-- Input -->

                                        <div class=\"input\">

                                            <p>E-mail 2:</p>
                                            ";
                // line 2303
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2303), "contact_email2", [], "array", true, true, false, 2303)) {
                    echo " 
                                                <input name=\"customfooter[";
                    // line 2304
                    echo ($context["language_id"] ?? null);
                    echo "][contact_email2]\" type=\"text\" value=\"";
                    echo (($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb = (($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c = ($context["customfooter"] ?? null)) && is_array($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c) || $__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c instanceof ArrayAccess ? ($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb) || $__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb instanceof ArrayAccess ? ($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb["contact_email2"] ?? null) : null);
                    echo "\" />
                                            ";
                } else {
                    // line 2305
                    echo " 
                                                <input name=\"customfooter[";
                    // line 2306
                    echo ($context["language_id"] ?? null);
                    echo "][contact_email2]\" type=\"text\" value=\"\" />
                                            ";
                }
                // line 2307
                echo " 

                                            <div class=\"clear\"></div>

                                        </div>

                                        <!-- End Input -->
                                        </div>
                                    </div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- End TAB CONTACT -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- TAB About us -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"tab_aboutus_";
                // line 2323
                echo ($context["language_id"] ?? null);
                echo "\" class=\"tab-content4\">
\t\t\t\t\t\t\t\t
                                    <div class=\"section\">
                                        <!-- Status -->

                                        ";
                // line 2328
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2328), "aboutus_status", [], "array", true, true, false, 2328)) {
                    echo " 
                                            ";
                    // line 2329
                    if (((($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a = (($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 = ($context["customfooter"] ?? null)) && is_array($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6) || $__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 instanceof ArrayAccess ? ($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a) || $__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a instanceof ArrayAccess ? ($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a["aboutus_status"] ?? null) : null) == 1)) {
                        echo " ";
                        echo (("<div class=\"status status-on\" title=\"1\" rel=\"customfooter_" . ($context["language_id"] ?? null)) . "_aboutus_status\"></div>");
                        echo " ";
                    } else {
                        echo " ";
                        echo (("<div class=\"status status-off\" title=\"0\" rel=\"customfooter_" . ($context["language_id"] ?? null)) . "_aboutus_status\"></div>");
                        echo " ";
                    }
                    echo " 

                                            <input name=\"customfooter[";
                    // line 2331
                    echo ($context["language_id"] ?? null);
                    echo "][aboutus_status]\" value=\"";
                    echo (($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b = (($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 = ($context["customfooter"] ?? null)) && is_array($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526) || $__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 instanceof ArrayAccess ? ($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b) || $__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b instanceof ArrayAccess ? ($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b["aboutus_status"] ?? null) : null);
                    echo "\" id=\"customfooter_";
                    echo ($context["language_id"] ?? null);
                    echo "_aboutus_status\" type=\"hidden\" />
                                        ";
                } else {
                    // line 2332
                    echo " 
                                            ";
                    // line 2333
                    echo (("<div class=\"status status-off\" title=\"0\" rel=\"customfooter_" . ($context["language_id"] ?? null)) . "_aboutus_status\"></div>");
                    echo " 
                                            <input name=\"customfooter[";
                    // line 2334
                    echo ($context["language_id"] ?? null);
                    echo "][aboutus_status]\" value=\"0\" id=\"customfooter_";
                    echo ($context["language_id"] ?? null);
                    echo "_aboutus_status\" type=\"hidden\" />
                                        ";
                }
                // line 2335
                echo " 
                                    </div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"section\">
                                        <div class=\"section-title\">
                                            <h4>About us</h4>
                                        </div>
                                        <div class=\"section-content\">
\t\t\t\t\t\t\t\t\t
                                            <!-- Input -->

                                            <div class=\"input\">

                                                <p>Title:</p>
                                                ";
                // line 2349
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2349), "aboutus_title", [], "array", true, true, false, 2349)) {
                    echo " 
                                                    <input name=\"customfooter[";
                    // line 2350
                    echo ($context["language_id"] ?? null);
                    echo "][aboutus_title]\" type=\"text\" value=\"";
                    echo (($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f = (($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c = ($context["customfooter"] ?? null)) && is_array($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c) || $__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c instanceof ArrayAccess ? ($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f) || $__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f instanceof ArrayAccess ? ($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f["aboutus_title"] ?? null) : null);
                    echo "\" />
                                                ";
                } else {
                    // line 2351
                    echo " 
                                                    <input name=\"customfooter[";
                    // line 2352
                    echo ($context["language_id"] ?? null);
                    echo "][aboutus_title]\" type=\"text\" value=\"\" />
                                                ";
                }
                // line 2353
                echo " 

                                                <div class=\"clear\"></div>

                                            </div>

                                            <!-- End Input -->

                                            <!-- Input -->

                                            <div class=\"input-with-editor editor-no-border\">\t\t\t\t\t\t\t\t\t\t

                                                ";
                // line 2365
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2365), "aboutus_text", [], "array", true, true, false, 2365)) {
                    echo " 
                                                    <textarea rows=\"0\" cols=\"0\" name=\"customfooter[";
                    // line 2366
                    echo ($context["language_id"] ?? null);
                    echo "][aboutus_text]\" id=\"customfooter_";
                    echo ($context["language_id"] ?? null);
                    echo "_aboutus_text\">";
                    echo (($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 = (($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff = ($context["customfooter"] ?? null)) && is_array($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff) || $__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff instanceof ArrayAccess ? ($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74) || $__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 instanceof ArrayAccess ? ($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74["aboutus_text"] ?? null) : null);
                    echo "</textarea>
                                                ";
                } else {
                    // line 2367
                    echo " 
                                                    <textarea rows=\"0\" cols=\"0\" name=\"customfooter[";
                    // line 2368
                    echo ($context["language_id"] ?? null);
                    echo "][aboutus_text]\" id=\"customfooter_";
                    echo ($context["language_id"] ?? null);
                    echo "_aboutus_text\"></textarea>
                                                ";
                }
                // line 2369
                echo " 

                                                <div class=\"clear\"></div>

                                                <script type=\"text/javascript\">
                                                    \$('#customfooter_";
                // line 2374
                echo ($context["language_id"] ?? null);
                echo "_aboutus_text').summernote({
                                                        height: 250
                                                    });
                                                </script>

                                            </div>

                                            <!-- End Input -->
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- End TAB About US -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- TAB Facebook -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"tab_facebook_";
                // line 2391
                echo ($context["language_id"] ?? null);
                echo "\" class=\"tab-content4\">
\t\t\t\t\t\t\t\t
                                    <div class=\"section\">
                                        <!-- Status -->

                                        ";
                // line 2396
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2396), "facebook_status", [], "array", true, true, false, 2396)) {
                    echo " 
                                            ";
                    // line 2397
                    if (((($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 = (($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 = ($context["customfooter"] ?? null)) && is_array($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5) || $__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 instanceof ArrayAccess ? ($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918) || $__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 instanceof ArrayAccess ? ($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918["facebook_status"] ?? null) : null) == 1)) {
                        echo " ";
                        echo (("<div class=\"status status-on\" title=\"1\" rel=\"customfooter_" . ($context["language_id"] ?? null)) . "_facebook_status\"></div>");
                        echo " ";
                    } else {
                        echo " ";
                        echo (("<div class=\"status status-off\" title=\"0\" rel=\"customfooter_" . ($context["language_id"] ?? null)) . "_facebook_status\"></div>");
                        echo " ";
                    }
                    echo " 

                                            <input name=\"customfooter[";
                    // line 2399
                    echo ($context["language_id"] ?? null);
                    echo "][facebook_status]\" value=\"";
                    echo (($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 = (($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 = ($context["customfooter"] ?? null)) && is_array($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20) || $__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 instanceof ArrayAccess ? ($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219) || $__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 instanceof ArrayAccess ? ($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219["facebook_status"] ?? null) : null);
                    echo "\" id=\"customfooter_";
                    echo ($context["language_id"] ?? null);
                    echo "_facebook_status\" type=\"hidden\" />
                                        ";
                } else {
                    // line 2400
                    echo " 
                                            ";
                    // line 2401
                    echo (("<div class=\"status status-off\" title=\"0\" rel=\"customfooter_" . ($context["language_id"] ?? null)) . "_facebook_status\"></div>");
                    echo " 
                                            <input name=\"customfooter[";
                    // line 2402
                    echo ($context["language_id"] ?? null);
                    echo "][facebook_status]\" value=\"0\" id=\"customfooter_";
                    echo ($context["language_id"] ?? null);
                    echo "_facebook_status\" type=\"hidden\" />
                                        ";
                }
                // line 2403
                echo " 
                                    </div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"section\">
                                        <div class=\"section-title\">
                                            <h4>Facebook</h4>
                                        </div>
                                        <div class=\"section-content\">
\t\t\t\t\t\t\t\t\t
                                            <!-- Input -->

                                            <div class=\"input\">

                                                <p>Title:</p>
                                                ";
                // line 2417
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2417), "facebook_title", [], "array", true, true, false, 2417)) {
                    echo " 
                                                    <input name=\"customfooter[";
                    // line 2418
                    echo ($context["language_id"] ?? null);
                    echo "][facebook_title]\" type=\"text\" value=\"";
                    echo (($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 = (($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 = ($context["customfooter"] ?? null)) && is_array($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0) || $__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 instanceof ArrayAccess ? ($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16) || $__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 instanceof ArrayAccess ? ($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16["facebook_title"] ?? null) : null);
                    echo "\" />
                                                ";
                } else {
                    // line 2419
                    echo " 
                                                    <input name=\"customfooter[";
                    // line 2420
                    echo ($context["language_id"] ?? null);
                    echo "][facebook_title]\" type=\"text\" value=\"\" />
                                                ";
                }
                // line 2421
                echo " 

                                                <div class=\"clear\"></div>

                                            </div>

                                            <!-- End Input -->

                                            <!-- Input -->

                                            <div class=\"input\">

                                                <p>Facebook ID:</p>
                                                ";
                // line 2434
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2434), "facebook_id", [], "array", true, true, false, 2434)) {
                    echo " 
                                                    <input name=\"customfooter[";
                    // line 2435
                    echo ($context["language_id"] ?? null);
                    echo "][facebook_id]\" type=\"text\" value=\"";
                    echo (($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 = (($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 = ($context["customfooter"] ?? null)) && is_array($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008) || $__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 instanceof ArrayAccess ? ($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1) || $__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 instanceof ArrayAccess ? ($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1["facebook_id"] ?? null) : null);
                    echo "\" />
                                                ";
                } else {
                    // line 2436
                    echo " 
                                                    <input name=\"customfooter[";
                    // line 2437
                    echo ($context["language_id"] ?? null);
                    echo "][facebook_id]\" type=\"text\" value=\"\" />
                                                ";
                }
                // line 2438
                echo " 

                                                <div class=\"clear\"></div>

                                            </div>

                                            <!-- End Input -->
                                            <!-- Input -->

                                            <div class=\"input\">

                                                <p>Show Faces:</p>
                                                <select name=\"customfooter[";
                // line 2450
                echo ($context["language_id"] ?? null);
                echo "][show_faces]\">
                                                    ";
                // line 2451
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2451), "show_faces", [], "array", true, true, false, 2451)) {
                    echo " 
                                                        <option value=\"0\" ";
                    // line 2452
                    if (((($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 = (($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 = ($context["customfooter"] ?? null)) && is_array($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315) || $__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 instanceof ArrayAccess ? ($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00) || $__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 instanceof ArrayAccess ? ($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00["show_faces"] ?? null) : null) == "0")) {
                        echo " selected=\"selected\"";
                    }
                    echo ">Yes</option>
                                                        <option value=\"1\" ";
                    // line 2453
                    if (((($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb = (($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde = ($context["customfooter"] ?? null)) && is_array($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde) || $__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde instanceof ArrayAccess ? ($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb) || $__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb instanceof ArrayAccess ? ($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb["show_faces"] ?? null) : null) == "1")) {
                        echo " selected=\"selected\"";
                    }
                    echo ">No</option>
                                                    ";
                } else {
                    // line 2454
                    echo " 
                                                        <option value=\"0\" selected=\"selected\">Yes</option>
                                                        <option value=\"1\">No</option>\t\t\t\t\t\t              
                                                    ";
                }
                // line 2457
                echo " 
                                                </select>

                                                <div class=\"clear\"></div>

                                            </div>

                                            <!-- End Input -->
                                            <!-- Input -->

                                            <div class=\"input\">

                                                <p>Number of faces:</p>
                                                ";
                // line 2470
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2470), "facebook_faces", [], "array", true, true, false, 2470)) {
                    echo " 
                                                    <input name=\"customfooter[";
                    // line 2471
                    echo ($context["language_id"] ?? null);
                    echo "][facebook_faces]\" type=\"text\" value=\"";
                    echo (($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 = (($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f = ($context["customfooter"] ?? null)) && is_array($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f) || $__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f instanceof ArrayAccess ? ($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5) || $__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 instanceof ArrayAccess ? ($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5["facebook_faces"] ?? null) : null);
                    echo "\" />
                                                ";
                } else {
                    // line 2472
                    echo " 
                                                    <input name=\"customfooter[";
                    // line 2473
                    echo ($context["language_id"] ?? null);
                    echo "][facebook_faces]\" type=\"text\" value=\"\" />
                                                ";
                }
                // line 2474
                echo " 

                                                <div class=\"clear\"></div>

                                            </div>

                                            <!-- End Input -->
                                            <!-- Input -->

                                            <div class=\"input\">

                                                <p>Height:</p>
                                                ";
                // line 2486
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2486), "facebook_height", [], "array", true, true, false, 2486)) {
                    echo " 
                                                    <input name=\"customfooter[";
                    // line 2487
                    echo ($context["language_id"] ?? null);
                    echo "][facebook_height]\" type=\"text\" value=\"";
                    echo (($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b = (($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d = ($context["customfooter"] ?? null)) && is_array($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d) || $__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d instanceof ArrayAccess ? ($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b) || $__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b instanceof ArrayAccess ? ($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b["facebook_height"] ?? null) : null);
                    echo "\" />
                                                ";
                } else {
                    // line 2488
                    echo " 
                                                    <input name=\"customfooter[";
                    // line 2489
                    echo ($context["language_id"] ?? null);
                    echo "][facebook_height]\" type=\"text\" value=\"\" />
                                                ";
                }
                // line 2490
                echo " 
                                                <span style=\"display: block;float: left;width: auto;padding-top:12px\">px</span>

                                                <div class=\"clear\"></div>

                                            </div>

                                            <!-- End Input -->
                                            <!-- Input -->

                                            <div class=\"input\">

                                                <p>Color scheme:</p>
                                                <select name=\"customfooter[";
                // line 2503
                echo ($context["language_id"] ?? null);
                echo "][color_scheme]\">
                                                    ";
                // line 2504
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2504), "color_scheme", [], "array", true, true, false, 2504)) {
                    echo " 
                                                        <option value=\"0\" ";
                    // line 2505
                    if (((($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d = (($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 = ($context["customfooter"] ?? null)) && is_array($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2) || $__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 instanceof ArrayAccess ? ($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d) || $__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d instanceof ArrayAccess ? ($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d["color_scheme"] ?? null) : null) == "0")) {
                        echo " selected=\"selected\"";
                    }
                    echo ">Light</option>
                                                        <option value=\"1\" ";
                    // line 2506
                    if (((($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 = (($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a = ($context["customfooter"] ?? null)) && is_array($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a) || $__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a instanceof ArrayAccess ? ($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6) || $__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 instanceof ArrayAccess ? ($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6["color_scheme"] ?? null) : null) == "1")) {
                        echo " selected=\"selected\"";
                    }
                    echo ">Dark</option>
                                                    ";
                } else {
                    // line 2507
                    echo " 
                                                        <option value=\"0\" selected=\"selected\">Light</option>
                                                        <option value=\"1\">Dark</option>\t\t\t\t\t\t              
                                                    ";
                }
                // line 2510
                echo " 
                                                </select>

                                                <div class=\"clear\"></div>

                                            </div>

                                            <!-- End Input -->
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- End TAB Facebook -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- TAB Twitter -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"tab_twitter_";
                // line 2527
                echo ($context["language_id"] ?? null);
                echo "\" class=\"tab-content4\">
\t\t\t\t\t\t\t\t
                                    <div class=\"section\">
                                        <!-- Status -->

                                        ";
                // line 2532
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2532), "twitter_status", [], "array", true, true, false, 2532)) {
                    echo " 
                                            ";
                    // line 2533
                    if (((($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee = (($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 = ($context["customfooter"] ?? null)) && is_array($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523) || $__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 instanceof ArrayAccess ? ($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee) || $__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee instanceof ArrayAccess ? ($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee["twitter_status"] ?? null) : null) == 1)) {
                        echo " ";
                        echo (("<div class=\"status status-on\" title=\"1\" rel=\"customfooter_" . ($context["language_id"] ?? null)) . "_twitter_status\"></div>");
                        echo " ";
                    } else {
                        echo " ";
                        echo (("<div class=\"status status-off\" title=\"0\" rel=\"customfooter_" . ($context["language_id"] ?? null)) . "_twitter_status\"></div>");
                        echo " ";
                    }
                    echo " 

                                            <input name=\"customfooter[";
                    // line 2535
                    echo ($context["language_id"] ?? null);
                    echo "][twitter_status]\" value=\"";
                    echo (($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc = (($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a = ($context["customfooter"] ?? null)) && is_array($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a) || $__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a instanceof ArrayAccess ? ($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc) || $__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc instanceof ArrayAccess ? ($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc["twitter_status"] ?? null) : null);
                    echo "\" id=\"customfooter_";
                    echo ($context["language_id"] ?? null);
                    echo "_twitter_status\" type=\"hidden\" />
                                        ";
                } else {
                    // line 2536
                    echo " 
                                            ";
                    // line 2537
                    echo (("<div class=\"status status-off\" title=\"0\" rel=\"customfooter_" . ($context["language_id"] ?? null)) . "_twitter_status\"></div>");
                    echo " 
                                            <input name=\"customfooter[";
                    // line 2538
                    echo ($context["language_id"] ?? null);
                    echo "][twitter_status]\" value=\"0\" id=\"customfooter_";
                    echo ($context["language_id"] ?? null);
                    echo "_twitter_status\" type=\"hidden\" />
                                        ";
                }
                // line 2539
                echo " 
                                    </div>

\t\t\t\t\t\t\t\t\t<div class=\"section\">
                                        <div class=\"section-title\">
                                            <h4>Twiter</h4>
                                        </div>
                                        <div class=\"section-content\">

                                            <!-- Input -->

                                            <div class=\"input\">

                                                <p>Title:</p>
                                                ";
                // line 2553
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2553), "twitter_title", [], "array", true, true, false, 2553)) {
                    echo " 
                                                    <input name=\"customfooter[";
                    // line 2554
                    echo ($context["language_id"] ?? null);
                    echo "][twitter_title]\" type=\"text\" value=\"";
                    echo (($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f = (($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d = ($context["customfooter"] ?? null)) && is_array($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d) || $__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d instanceof ArrayAccess ? ($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f) || $__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f instanceof ArrayAccess ? ($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f["twitter_title"] ?? null) : null);
                    echo "\" />
                                                ";
                } else {
                    // line 2555
                    echo " 
                                                    <input name=\"customfooter[";
                    // line 2556
                    echo ($context["language_id"] ?? null);
                    echo "][twitter_title]\" type=\"text\" value=\"\" />
                                                ";
                }
                // line 2557
                echo " 

                                                <div class=\"clear\"></div>

                                            </div>

                                            <!-- End Input -->
                                            <!-- Input -->

                                            <div class=\"input\">

                                                <p>Twitter username:</p>
                                                ";
                // line 2569
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2569), "twitter_widget_id", [], "array", true, true, false, 2569)) {
                    echo " 
                                                    <input name=\"customfooter[";
                    // line 2570
                    echo ($context["language_id"] ?? null);
                    echo "][twitter_widget_id]\" type=\"text\" value=\"";
                    echo (($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e = (($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 = ($context["customfooter"] ?? null)) && is_array($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81) || $__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 instanceof ArrayAccess ? ($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e) || $__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e instanceof ArrayAccess ? ($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e["twitter_widget_id"] ?? null) : null);
                    echo "\" />
                                                ";
                } else {
                    // line 2571
                    echo " 
                                                    <input name=\"customfooter[";
                    // line 2572
                    echo ($context["language_id"] ?? null);
                    echo "][twitter_widget_id]\" type=\"text\" value=\"\" />
                                                ";
                }
                // line 2573
                echo " 

                                                <div class=\"clear\"></div>

                                            </div>

                                            <!-- End Input -->
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- End TAB Twitter -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- TAB Custom block -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"tab_customblock_";
                // line 2589
                echo ($context["language_id"] ?? null);
                echo "\" class=\"tab-content4\">
\t\t\t\t\t\t\t\t
                                    <div class=\"section\">
                                        <!-- Status -->

                                        ";
                // line 2594
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2594), "customblock_status", [], "array", true, true, false, 2594)) {
                    echo " 
                                            ";
                    // line 2595
                    if (((($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d = (($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786 = ($context["customfooter"] ?? null)) && is_array($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786) || $__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786 instanceof ArrayAccess ? ($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d) || $__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d instanceof ArrayAccess ? ($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d["customblock_status"] ?? null) : null) == 1)) {
                        echo " ";
                        echo (("<div class=\"status status-on\" title=\"1\" rel=\"customfooter_" . ($context["language_id"] ?? null)) . "_customblock_status\"></div>");
                        echo " ";
                    } else {
                        echo " ";
                        echo (("<div class=\"status status-off\" title=\"0\" rel=\"customfooter_" . ($context["language_id"] ?? null)) . "_customblock_status\"></div>");
                        echo " ";
                    }
                    echo " 

                                            <input name=\"customfooter[";
                    // line 2597
                    echo ($context["language_id"] ?? null);
                    echo "][customblock_status]\" value=\"";
                    echo (($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4 = (($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1 = ($context["customfooter"] ?? null)) && is_array($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1) || $__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1 instanceof ArrayAccess ? ($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4) || $__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4 instanceof ArrayAccess ? ($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4["customblock_status"] ?? null) : null);
                    echo "\" id=\"customfooter_";
                    echo ($context["language_id"] ?? null);
                    echo "_customblock_status\" type=\"hidden\" />
                                        ";
                } else {
                    // line 2598
                    echo " 
                                            ";
                    // line 2599
                    echo (("<div class=\"status status-off\" title=\"0\" rel=\"customfooter_" . ($context["language_id"] ?? null)) . "_customblock_status\"></div>");
                    echo " 
                                            <input name=\"customfooter[";
                    // line 2600
                    echo ($context["language_id"] ?? null);
                    echo "][customblock_status]\" value=\"0\" id=\"customfooter_";
                    echo ($context["language_id"] ?? null);
                    echo "_customblock_status\" type=\"hidden\" />
                                        ";
                }
                // line 2601
                echo " 
                                    </div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"section\">
                                        <div class=\"section-title\">
                                            <h4>Custom block</h4>
                                        </div>
                                        <div class=\"section-content\">

                                            <!-- Input -->

                                            <div class=\"input\">

                                                <p>Title:</p>
                                                ";
                // line 2615
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2615), "customblock_title", [], "array", true, true, false, 2615)) {
                    echo " 
                                                    <input name=\"customfooter[";
                    // line 2616
                    echo ($context["language_id"] ?? null);
                    echo "][customblock_title]\" type=\"text\" value=\"";
                    echo (($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc = (($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6 = ($context["customfooter"] ?? null)) && is_array($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6) || $__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6 instanceof ArrayAccess ? ($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc) || $__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc instanceof ArrayAccess ? ($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc["customblock_title"] ?? null) : null);
                    echo "\" />
                                                ";
                } else {
                    // line 2617
                    echo " 
                                                    <input name=\"customfooter[";
                    // line 2618
                    echo ($context["language_id"] ?? null);
                    echo "][customblock_title]\" type=\"text\" value=\"\" />
                                                ";
                }
                // line 2619
                echo " 

                                                <div class=\"clear\"></div>

                                            </div>

                                            <!-- End Input -->

                                            <!-- Input -->

                                            <div class=\"input-with-editor editor-no-border\">\t\t\t\t\t\t\t\t\t\t

                                                ";
                // line 2631
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customfooter"] ?? null), ($context["language_id"] ?? null), [], "array", false, true, false, 2631), "customblock_text", [], "array", true, true, false, 2631)) {
                    echo " 
                                                    <textarea rows=\"0\" cols=\"0\" name=\"customfooter[";
                    // line 2632
                    echo ($context["language_id"] ?? null);
                    echo "][customblock_text]\" id=\"customfooter_";
                    echo ($context["language_id"] ?? null);
                    echo "_customblock_text\">";
                    echo (($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181 = (($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9 = ($context["customfooter"] ?? null)) && is_array($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9) || $__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9 instanceof ArrayAccess ? ($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181) || $__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181 instanceof ArrayAccess ? ($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181["customblock_text"] ?? null) : null);
                    echo "</textarea>
                                                ";
                } else {
                    // line 2633
                    echo " 
                                                    <textarea rows=\"0\" cols=\"0\" name=\"customfooter[";
                    // line 2634
                    echo ($context["language_id"] ?? null);
                    echo "][customblock_text]\" id=\"customfooter_";
                    echo ($context["language_id"] ?? null);
                    echo "_customblock_text\"></textarea>
                                                ";
                }
                // line 2635
                echo " 

                                                <div class=\"clear\"></div>

                                                <script type=\"text/javascript\">
                                                    \$('#customfooter_";
                // line 2640
                echo ($context["language_id"] ?? null);
                echo "_customblock_text').summernote({
                                                        height: 250
                                                    });
                                                </script>

                                            </div>

                                            <!-- End Input -->
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- End TAB Custom block -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\t\t\t\t\$('#tabs_";
                // line 2656
                echo ($context["language_id"] ?? null);
                echo " a').tabs();
\t\t\t\t\t\t\t\tif(\$.cookie('tabs_";
                // line 2657
                echo ($context["language_id"] ?? null);
                echo "') > 0) {
\t\t\t\t\t\t\t\t\t\$('#tabs_";
                // line 2658
                echo ($context["language_id"] ?? null);
                echo " a').eq(\$.cookie('tabs_";
                echo ($context["language_id"] ?? null);
                echo "')).trigger(\"click\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\$('#tabs_";
                // line 2660
                echo ($context["language_id"] ?? null);
                echo " a').click(function() {
\t\t\t\t\t\t\t\t\tvar element_index = \$('#tabs_";
                // line 2661
                echo ($context["language_id"] ?? null);
                echo " a').index(this);
\t\t\t\t\t\t\t\t\t\$.cookie('tabs_";
                // line 2662
                echo ($context["language_id"] ?? null);
                echo "', element_index); 
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t//--></script> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2668
            echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<p style=\"font-size:1px;line-height:1px;height:1px;clear:both;margin:0px;padding:0px;\"></p>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- End Footer -->
\t\t\t\t\t
\t\t\t\t\t<!-- ''''''''''''''' PAYMENT -->
\t\t\t\t\t
\t\t\t\t\t<div id=\"tab_payment\" class=\"tab-content\">
\t\t\t\t\t
                        <div class=\"section\">
                            <!-- Status -->
                            ";
            // line 2684
            if (((($context["payment_status"] ?? null) == 0) && (($context["payment_status"] ?? null) != ""))) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"payment_status\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"payment_status\"></div>";
                echo " ";
            }
            echo " 
                            <input name=\"payment_status\" value=\"";
            // line 2685
            echo ($context["payment_status"] ?? null);
            echo "\" id=\"payment_status\" type=\"hidden\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table class=\"payment_images\" id=\"payment\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"first\">Icon</td>
\t\t\t\t\t\t\t\t\t<td>Name</td>
\t\t\t\t\t\t\t\t\t<td>Link</td>
\t\t\t\t\t\t\t\t\t<td>Sort</td>
\t\t\t\t\t\t\t\t\t<td>New Tab</td>
\t\t\t\t\t\t\t\t\t<td>Delete</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t";
            // line 2698
            $context["module_row"] = 0;
            echo " ";
            if ((($context["payment"] ?? null) != "")) {
                echo " 
\t\t\t\t\t\t\t\t";
                // line 2699
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["payment"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["payments"]) {
                    echo " 
\t\t\t\t\t\t\t\t<tbody id=\"payment";
                    // line 2700
                    echo ($context["module_row"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"first\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"own_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment[";
                    // line 2704
                    echo ($context["module_row"] ?? null);
                    echo "][img]\" value=\"";
                    echo (($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af = $context["payments"]) && is_array($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af) || $__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af instanceof ArrayAccess ? ($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af["img"] ?? null) : null);
                    echo "\" id=\"input-";
                    echo ($context["module_row"] ?? null);
                    echo "_img_preview\" />
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 2706
                    if (((($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab = $context["payments"]) && is_array($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab) || $__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab instanceof ArrayAccess ? ($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab["img"] ?? null) : null) == "")) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-";
                        // line 2707
                        echo ($context["module_row"] ?? null);
                        echo "_img_preview\" class=\"img-thumbnail img-edit\" data-toggle=\"image\"><img src=\"";
                        echo ($context["placeholder"] ?? null);
                        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                        echo ($context["placeholder"] ?? null);
                        echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 2708
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-";
                        // line 2709
                        echo ($context["module_row"] ?? null);
                        echo "_img_preview\" class=\"img-thumbnail img-edit\" data-toggle=\"image\"><img src=\"../image/";
                        echo (($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94 = $context["payments"]) && is_array($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94) || $__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94 instanceof ArrayAccess ? ($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94["img"] ?? null) : null);
                        echo "\" alt=\"\" data-placeholder=\"";
                        echo ($context["placeholder"] ?? null);
                        echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 2710
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"payment-name\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"";
                    // line 2715
                    if (twig_get_attribute($this->env, $this->source, $context["payments"], "name", [], "array", true, true, false, 2715)) {
                        echo " ";
                        echo (($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c = $context["payments"]) && is_array($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c) || $__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c instanceof ArrayAccess ? ($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c["name"] ?? null) : null);
                        echo " ";
                    }
                    echo "\" name=\"payment[";
                    echo ($context["module_row"] ?? null);
                    echo "][name]\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"";
                    // line 2719
                    if (twig_get_attribute($this->env, $this->source, $context["payments"], "link", [], "array", true, true, false, 2719)) {
                        echo " ";
                        echo (($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd = $context["payments"]) && is_array($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd) || $__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd instanceof ArrayAccess ? ($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd["link"] ?? null) : null);
                        echo " ";
                    }
                    echo "\" name=\"payment[";
                    echo ($context["module_row"] ?? null);
                    echo "][link]\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"sort\" value=\"";
                    // line 2722
                    if (twig_get_attribute($this->env, $this->source, $context["payments"], "sort", [], "array", true, true, false, 2722)) {
                        echo " ";
                        echo (($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0 = $context["payments"]) && is_array($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0) || $__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0 instanceof ArrayAccess ? ($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0["sort"] ?? null) : null);
                        echo " ";
                    }
                    echo "\" name=\"payment[";
                    echo ($context["module_row"] ?? null);
                    echo "][sort]\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 2725
                    if (twig_get_attribute($this->env, $this->source, $context["payments"], "new_tab", [], "array", true, true, false, 2725)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 2726
                        if ((((($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b = $context["payments"]) && is_array($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b) || $__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b instanceof ArrayAccess ? ($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b["new_tab"] ?? null) : null) == 0) && ((($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070 = $context["payments"]) && is_array($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070) || $__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070 instanceof ArrayAccess ? ($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070["new_tab"] ?? null) : null) != ""))) {
                            echo " ";
                            echo (("<div class=\"status status-off\" title=\"0\" rel=\"payment_" . ($context["module_row"] ?? null)) . "_new_tab\"></div>");
                            echo " ";
                        } else {
                            echo " ";
                            echo (("<div class=\"status status-on\" title=\"1\" rel=\"payment_" . ($context["module_row"] ?? null)) . "_new_tab\"></div>");
                            echo " ";
                        }
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 2727
                        echo " ";
                        echo (("<div class=\"status status-off\" title=\"0\" rel=\"payment_" . ($context["module_row"] ?? null)) . "_new_tab\"></div>");
                        echo " ";
                    }
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t<input name=\"payment[";
                    // line 2728
                    echo ($context["module_row"] ?? null);
                    echo "][new_tab]\" value=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["payments"], "new_tab", [], "array", true, true, false, 2728)) {
                        echo " ";
                        echo (($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf = $context["payments"]) && is_array($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf) || $__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf instanceof ArrayAccess ? ($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf["new_tab"] ?? null) : null);
                        echo " ";
                    } else {
                        echo " ";
                        echo "0";
                        echo " ";
                    }
                    echo "\" id=\"payment_";
                    echo ($context["module_row"] ?? null);
                    echo "_new_tab\" type=\"hidden\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#payment";
                    // line 2731
                    echo ($context["module_row"] ?? null);
                    echo "').remove();\" class=\"remove-payment\">Remove</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t";
                    // line 2735
                    $context["module_row"] = (($context["module_row"] ?? null) + 1);
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payments'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
\t\t\t\t\t\t\t";
            }
            // line 2736
            echo " 
\t\t\t\t\t\t\t<tfoot></tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t
                        <a onclick=\"addPayment();\" class=\"add-item-payment\">Add<br> item</a>
\t\t\t\t\t\t
\t\t\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\t\tvar module_row = ";
            // line 2743
            echo ($context["module_row"] ?? null);
            echo ";
\t\t\t\t\t\t
\t\t\t\t\t\tfunction addPayment() {
\t\t\t\t\t\t\thtml  = '<tbody id=\"payment' + module_row + '\">';
\t\t\t\t\t\t\thtml += '  <tr>';
\t\t\t\t\t\t\thtml += '\t <td class=\"first\">';
\t\t\t\t\t\t\thtml += '\t\t<div class=\"own_image\"><input type=\"hidden\" name=\"payment[' + module_row + '][img]\" value=\"\" id=\"input-' + module_row + '_img_preview\" /><a href=\"\" id=\"thumb-' + module_row + '_img_preview\" class=\"img-thumbnail img-edit\" data-toggle=\"image\"><img src=\"";
            // line 2749
            echo ($context["placeholder"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a></div>';
\t\t\t\t\t\t\thtml += '\t </td>';
\t\t\t\t\t\t\thtml += '    <td>';
\t\t\t\t\t\t\thtml += '\t\t<div class=\"payment_name\"><input type=\"text\" name=\"payment[' + module_row + '][name]\"></div>';
\t\t\t\t\t\t\thtml += '    </td>';
\t\t\t\t\t\t\thtml += '    <td>';
\t\t\t\t\t\t\thtml += '\t\t<input type=\"text\" name=\"payment[' + module_row + '][link]\">';
\t\t\t\t\t\t\thtml += '    </td>';
\t\t\t\t\t\t\thtml += '    <td>';
\t\t\t\t\t\t\thtml += '\t\t<input type=\"text\" class=\"sort\" name=\"payment[' + module_row + '][sort]\">';
\t\t\t\t\t\t\thtml += '    </td>';
\t\t\t\t\t\t\thtml += '    <td>';
\t\t\t\t\t\t\thtml += '\t\t<div class=\"status status-off\" title=\"0\" rel=\"payment_' + module_row + '_new_tab\"></div><input name=\"payment[' + module_row + '][new_tab]\" value=\"0\" id=\"payment_' + module_row + '_new_tab\" type=\"hidden\" />';
\t\t\t\t\t\t\thtml += '    </td>';
\t\t\t\t\t\t\thtml += '    <td><a onclick=\"\$(\\'#payment' + module_row + '\\').remove();\" class=\"remove-payment\">Remove</a></td>';
\t\t\t\t\t\t\thtml += '  </tr>';
\t\t\t\t\t\t\thtml += '</tbody>';
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#payment tfoot').before(html);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tmodule_row++;
\t\t\t\t\t\t}
\t\t\t\t\t\t//--></script> 
\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- ''''''''''''''''' END PAYMENT -->
\t\t\t\t\t
\t\t\t\t\t<!-- Custom code -->
\t\t\t\t\t
\t\t\t\t\t<div id=\"tab_custom_code\" class=\"tab-content2\">
\t\t\t\t\t
\t\t\t\t\t\t<!-- Font, colors, background TABS -->
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tabs_custom_code\" class=\"htabs tabs-design\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"#tab_css\" id=\"tcss\"><span>Css</span></a>
\t\t\t\t\t\t\t<a href=\"#tab_javascript\" id=\"tjavascript\"><span>Javascript</span></a>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- ....... TABS CSS -->
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab_css\" class=\"tab-content\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Status -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 2796
            if ((($context["custom_code_css_status"] ?? null) == 1)) {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"custom_code_css_status\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"custom_code_css_status\"></div>";
                echo " ";
            }
            echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input name=\"custom_code_css_status\" value=\"";
            // line 2798
            echo ($context["custom_code_css_status"] ?? null);
            echo "\" id=\"custom_code_css_status\" type=\"hidden\" />
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Input -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"input\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 2804
            if (array_key_exists("custom_code_css", $context)) {
                echo " 
\t\t\t\t\t\t\t\t<textarea rows=\"0\" cols=\"0\" name=\"custom_code_css\">";
                // line 2805
                echo ($context["custom_code_css"] ?? null);
                echo "</textarea>
\t\t\t\t\t\t\t\t";
            } else {
                // line 2806
                echo " 
\t\t\t\t\t\t\t\t<textarea rows=\"0\" cols=\"0\" name=\"custom_code_css\"></textarea>
\t\t\t\t\t\t\t\t";
            }
            // line 2808
            echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- End Input -->
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- ....... END TABS CSS -->
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- ....... TABS JAVASCRIPT -->
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab_javascript\" class=\"tab-content\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Status -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 2826
            if ((($context["custom_code_javascript_status"] ?? null) == 1)) {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"custom_code_javascript_status\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"custom_code_javascript_status\"></div>";
                echo " ";
            }
            echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input name=\"custom_code_javascript_status\" value=\"";
            // line 2828
            echo ($context["custom_code_javascript_status"] ?? null);
            echo "\" id=\"custom_code_javascript_status\" type=\"hidden\" />
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Input -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"input\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 2834
            if (array_key_exists("custom_code_js", $context)) {
                echo " 
\t\t\t\t\t\t\t\t<textarea rows=\"0\" cols=\"0\" name=\"custom_code_js\">";
                // line 2835
                echo ($context["custom_code_js"] ?? null);
                echo "</textarea>
\t\t\t\t\t\t\t\t";
            } else {
                // line 2836
                echo " 
\t\t\t\t\t\t\t\t<textarea rows=\"0\" cols=\"0\" name=\"custom_code_js\"></textarea>
\t\t\t\t\t\t\t\t";
            }
            // line 2838
            echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- End Input -->
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- ....... END TABS JAVASCRIPT -->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- End Custom code -->
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- Widget -->
\t\t\t\t\t
\t\t\t\t\t<div id=\"tab_widgets\" class=\"tab-content2\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tabs_widgets\" class=\"htabs tabs-design\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"#tab_widget_facebook\" class=\"tfacebook\"><span>Facebook</span></a>
\t\t\t\t\t\t\t<a href=\"#tab_widget_twitter\" class=\"ttwitter\"><span>Twitter</span></a>
\t\t\t\t\t\t\t<a href=\"#tab_widget_custom\" class=\"tcustomblock\"><span>Custom</span></a>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab_widget_facebook\" class=\"tab-content\">
\t\t\t\t\t\t
                            <div class=\"section\">
\t\t\t\t\t\t\t<!-- Status -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 2872
            if ((($context["widget_facebook_status"] ?? null) == 1)) {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"widget_facebook_status\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"widget_facebook_status\"></div>";
                echo " ";
            }
            echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input name=\"widget_facebook_status\" value=\"";
            // line 2874
            echo ($context["widget_facebook_status"] ?? null);
            echo "\" id=\"widget_facebook_status\" type=\"hidden\" />
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
                            <div class=\"section\">
                                <div class=\"section-title\">
                                    <h4>Facebook</h4>
                                </div>
                                <div class=\"section-content\">
\t\t\t\t\t\t\t
                                    <!-- Input -->

                                    <div class=\"input\">

                                        <p>Facebook ID:</p>
                                        ";
            // line 2889
            if (array_key_exists("widget_facebook_id", $context)) {
                echo " 
                                            <input name=\"widget_facebook_id\" type=\"text\" value=\"";
                // line 2890
                echo ($context["widget_facebook_id"] ?? null);
                echo "\" />
                                        ";
            } else {
                // line 2891
                echo " 
                                            <input name=\"widget_facebook_id\" type=\"text\" value=\"\" />
                                        ";
            }
            // line 2893
            echo " 

                                        <a href=\"http://findmyfacebookid.com/\" target=\"_blank\" style=\"display: block;float: left;width: auto;margin-top: 7px\">Find your Facebook ID »</a>

                                        <div class=\"clear\"></div>

                                    </div>

                                    <!-- End Input -->
                                    <!-- Input -->

                                    <div class=\"input\">

                                        <p>Position:</p>
                                        <select name=\"widget_facebook_position\">
                                            ";
            // line 2908
            if (array_key_exists("widget_facebook_position", $context)) {
                echo " 
                                               <option value=\"0\" ";
                // line 2909
                if ((($context["widget_facebook_position"] ?? null) == "0")) {
                    echo " selected=\"selected\"";
                }
                echo ">Right</option>
                                               <option value=\"1\" ";
                // line 2910
                if ((($context["widget_facebook_position"] ?? null) == "1")) {
                    echo " selected=\"selected\"";
                }
                echo ">Left</option>
                                             ";
            } else {
                // line 2911
                echo " 
                                                <option value=\"0\" selected=\"selected\">Right</option>
                                                <option value=\"1\">Left</option>\t\t\t\t\t\t              
                                             ";
            }
            // line 2914
            echo " 
                                        </select>

                                        <div class=\"clear\"></div>

                                     </div>

                                    <!-- End Input -->
                                </div>
                            </div>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab_widget_twitter\" class=\"tab-content\">
\t\t\t\t\t\t
                            <div class=\"section\">
\t\t\t\t\t\t\t<!-- Status -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 2932
            if ((($context["widget_twitter_status"] ?? null) == 1)) {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"widget_twitter_status\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"widget_twitter_status\"></div>";
                echo " ";
            }
            echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input name=\"widget_twitter_status\" value=\"";
            // line 2934
            echo ($context["widget_twitter_status"] ?? null);
            echo "\" id=\"widget_twitter_status\" type=\"hidden\" />
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
                            <div class=\"section\">
                                <div class=\"section-title\">
                                    <h4>Twitter</h4>
                                </div>
                                <div class=\"section-content\">
\t\t\t\t\t\t\t
                                    <!-- Input -->

                                    <div class=\"input\">

                                        <p>Twitter username:</p>
                                        ";
            // line 2949
            if (array_key_exists("widget_twitter_user_name", $context)) {
                echo " 
                                            <input name=\"widget_twitter_user_name\" type=\"text\" value=\"";
                // line 2950
                echo ($context["widget_twitter_user_name"] ?? null);
                echo "\" />
                                        ";
            } else {
                // line 2951
                echo " 
                                            <input name=\"widget_twitter_user_name\" type=\"text\" value=\"\" />
                                        ";
            }
            // line 2953
            echo " 

                                        <div class=\"clear\"></div>

                                    </div>

                                    <!-- End Input -->

                                    <!-- Input -->

                                    <div class=\"input\">

                                        <p>Tweet limit:</p>
                                        <select name=\"widget_twitter_limit\">
                                            ";
            // line 2967
            if (array_key_exists("widget_twitter_limit", $context)) {
                echo " 
                                               <option value=\"1\" ";
                // line 2968
                if ((($context["widget_twitter_limit"] ?? null) == "1")) {
                    echo " selected=\"selected\"";
                }
                echo ">1</option>
                                               <option value=\"2\" ";
                // line 2969
                if ((($context["widget_twitter_limit"] ?? null) == "2")) {
                    echo " selected=\"selected\"";
                }
                echo ">2</option>
                                               <option value=\"3\" ";
                // line 2970
                if ((($context["widget_twitter_limit"] ?? null) == "3")) {
                    echo " selected=\"selected\"";
                }
                echo ">3</option>
                                             ";
            } else {
                // line 2971
                echo " 
                                                <option value=\"1\">1</option>
                                                <option value=\"2\">2</option>\t\t\t\t\t\t              
                                                <option value=\"3\" selected=\"selected\">3</option>\t\t\t\t\t\t              
                                             ";
            }
            // line 2975
            echo " 
                                        </select>

                                        <div class=\"clear\"></div>

                                     </div>

                                    <!-- End Input -->

                                    <!-- Input -->

                                    <div class=\"input\">

                                        <p>Position:</p>
                                        <select name=\"widget_twitter_position\">
                                            ";
            // line 2990
            if (array_key_exists("widget_twitter_position", $context)) {
                echo " 
                                               <option value=\"0\" ";
                // line 2991
                if ((($context["widget_twitter_position"] ?? null) == "0")) {
                    echo " selected=\"selected\"";
                }
                echo ">Right</option>
                                               <option value=\"1\" ";
                // line 2992
                if ((($context["widget_twitter_position"] ?? null) == "1")) {
                    echo " selected=\"selected\"";
                }
                echo ">Left</option>
                                             ";
            } else {
                // line 2993
                echo " 
                                                <option value=\"0\" selected=\"selected\">Right</option>
                                                <option value=\"1\">Left</option>\t\t\t\t\t\t              
                                             ";
            }
            // line 2996
            echo " 
                                        </select>

                                        <div class=\"clear\"></div>

                                     </div>

                                    <!-- End Input -->
                                </div>
                            </div>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab_widget_custom\" class=\"tab-content\">
\t\t\t\t\t\t
                            <div class=\"section\">
                                <!-- Status -->

                                ";
            // line 3014
            if ((($context["widget_custom_status"] ?? null) == 1)) {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"widget_custom_status\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"widget_custom_status\"></div>";
                echo " ";
            }
            echo " 

                                <input name=\"widget_custom_status\" value=\"";
            // line 3016
            echo ($context["widget_custom_status"] ?? null);
            echo "\" id=\"widget_custom_status\" type=\"hidden\" />

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
                            <div class=\"section\">
                                <div class=\"section-title\">
                                    <h4>Custom block</h4>
                                </div>
                                <div class=\"section-content\">
\t\t\t\t\t\t\t
                                    <div class=\"customblocktabs htabs\">
                                        ";
            // line 3027
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                                        <a href=\"#content_customblock_";
                // line 3028
                echo (($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e = $context["language"]) && is_array($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e) || $__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e instanceof ArrayAccess ? ($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e["language_id"] ?? null) : null);
                echo "\"><img src=\"language/";
                echo (($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4 = $context["language"]) && is_array($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4) || $__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4 instanceof ArrayAccess ? ($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4["code"] ?? null) : null);
                echo "/";
                echo (($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825 = $context["language"]) && is_array($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825) || $__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825 instanceof ArrayAccess ? ($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825["code"] ?? null) : null);
                echo ".png\" title=\"";
                echo (($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308 = $context["language"]) && is_array($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308) || $__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308 instanceof ArrayAccess ? ($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308["name"] ?? null) : null);
                echo "\" /> ";
                echo (($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb = $context["language"]) && is_array($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb) || $__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb instanceof ArrayAccess ? ($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb["name"] ?? null) : null);
                echo "</a>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3029
            echo " 
                                    </div>

                                    ";
            // line 3032
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " ";
                $context["lang_id"] = (($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7 = $context["language"]) && is_array($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7) || $__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7 instanceof ArrayAccess ? ($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7["language_id"] ?? null) : null);
                echo " 
                                    <!-- Input -->
                                    <div id=\"content_customblock_";
                // line 3034
                echo (($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9 = $context["language"]) && is_array($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9) || $__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9 instanceof ArrayAccess ? ($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9["language_id"] ?? null) : null);
                echo "\" class=\"content_customblock\">
                                        <div class=\"input-with-editor clearfix\">
                                            <textarea name=\"widget_custom_content[";
                // line 3036
                echo (($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446 = $context["language"]) && is_array($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446) || $__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446 instanceof ArrayAccess ? ($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446["language_id"] ?? null) : null);
                echo "]\" id=\"widget_custom_content_";
                echo (($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d = $context["language"]) && is_array($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d) || $__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d instanceof ArrayAccess ? ($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d["language_id"] ?? null) : null);
                echo "\" style=\"float: none;clear: both\">";
                if (twig_get_attribute($this->env, $this->source, ($context["widget_custom_content"] ?? null), ($context["lang_id"] ?? null), [], "array", true, true, false, 3036)) {
                    echo " ";
                    echo (($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e = ($context["widget_custom_content"] ?? null)) && is_array($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e) || $__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e instanceof ArrayAccess ? ($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e[($context["lang_id"] ?? null)] ?? null) : null);
                    echo " ";
                }
                echo "</textarea>
                                        </div>
                                    </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3039
            echo " 

                                    <!-- Input -->

                                    <div class=\"input\">

                                        <p>Position:</p>
                                        <select name=\"widget_custom_position\">
                                            ";
            // line 3047
            if (array_key_exists("widget_custom_position", $context)) {
                echo " 
                                               <option value=\"0\" ";
                // line 3048
                if ((($context["widget_custom_position"] ?? null) == "0")) {
                    echo " selected=\"selected\"";
                }
                echo ">Right</option>
                                               <option value=\"1\" ";
                // line 3049
                if ((($context["widget_custom_position"] ?? null) == "1")) {
                    echo " selected=\"selected\"";
                }
                echo ">Left</option>
                                             ";
            } else {
                // line 3050
                echo " 
                                                    <option value=\"0\" selected=\"selected\">Right</option>
                                                <option value=\"1\">Left</option>\t\t\t\t\t\t              
                                             ";
            }
            // line 3053
            echo " 
                                        </select>

                                        <div class=\"clear\"></div>

                                     </div>

                                    <!-- End Input -->
                                </div>
                            </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- End Widgets -->
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- Compressor Code -->
\t\t\t\t\t
\t\t\t\t\t<div id=\"tab_compressor_code\" class=\"tab-content\">
\t\t\t\t\t
\t\t\t\t\t\t<!-- Status -->
\t\t\t\t\t\t";
            // line 3076
            if ((($context["compressor_code_status"] ?? null) == 0)) {
                echo " ";
                echo "<div class=\"status status-off\" title=\"0\" rel=\"compressor_code_status\"></div>";
                echo " ";
            } else {
                echo " ";
                echo "<div class=\"status status-on\" title=\"1\" rel=\"compressor_code_status\"></div>";
                echo " ";
            }
            echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t<input name=\"compressor_code_status\" value=\"";
            // line 3078
            echo ($context["compressor_code_status"] ?? null);
            echo "\" id=\"compressor_code_status\" type=\"hidden\" />
\t\t\t\t\t\t
\t\t\t\t\t\t<p style=\"font-family:Open Sans;color:#4c4c4c;font-size:12px;line-height: 21px;padding-top: 15px\">The content of css and js files are placed in a single file, delete spaces, which allows for faster page loading. Changes made when this option is enabled will be visible after an hour.</p>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"hint\" style=\"margin-top: 17px\">You can enable Compressor code ONLY when your store will be complete and no more changes will be made.</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- End Compressor Code -->
\t\t\t\t\t
\t\t\t\t\t<!-- Compressor Code -->
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- End Compressor Code -->

\t\t\t\t\t<!-- Advanced Settings Code -->
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- End Advanced Settings Code -->
\t\t\t\t\t

\t\t\t\t\t<!-- Custom block -->
\t\t\t\t\t
\t\t\t\t\t<div id=\"tab_custom_block\" class=\"tab-content3\">
\t\t\t\t\t\t<div class=\"footer_left\" style=\"margin-top: 280px\">
\t\t\t\t\t\t\t<div id=\"tabs_custom_block\" class=\"htabs main-tabs\">
\t\t\t\t\t\t\t\t";
            // line 3106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t\t\t\t<a href=\"#tab_custom_block_";
                // line 3107
                echo (($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f = $context["language"]) && is_array($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f) || $__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f instanceof ArrayAccess ? ($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f["language_id"] ?? null) : null);
                echo "\"><img src=\"language/";
                echo (($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996 = $context["language"]) && is_array($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996) || $__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996 instanceof ArrayAccess ? ($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996["code"] ?? null) : null);
                echo "/";
                echo (($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330 = $context["language"]) && is_array($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330) || $__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330 instanceof ArrayAccess ? ($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330["code"] ?? null) : null);
                echo ".png\" alt=\"";
                echo (($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae = $context["language"]) && is_array($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae) || $__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae instanceof ArrayAccess ? ($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae["name"] ?? null) : null);
                echo "\" width=\"16px\" height=\"11px\" /><span>";
                echo (($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409 = $context["language"]) && is_array($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409) || $__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409 instanceof ArrayAccess ? ($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409["name"] ?? null) : null);
                echo "</span></a>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3108
            echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"footer_right\">
\t\t\t\t\t\t\t";
            // line 3113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t\t\t";
                // line 3114
                $context["language_id"] = (($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26 = $context["language"]) && is_array($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26) || $__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26 instanceof ArrayAccess ? ($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26["language_id"] ?? null) : null);
                echo " 
\t\t\t\t\t\t\t<div id=\"tab_custom_block_";
                // line 3115
                echo ($context["language_id"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<div id=\"tabs_custom_block_";
                // line 3116
                echo ($context["language_id"] ?? null);
                echo "\" class=\"htabs tabs-design\">
\t\t\t\t\t\t\t\t\t<a href=\"#tab_contact_page_";
                // line 3117
                echo ($context["language_id"] ?? null);
                echo "\" class=\"tcontact\"><span>Contact page</span></a>
\t\t\t\t\t\t\t\t\t<a href=\"#tab_product_page_";
                // line 3118
                echo ($context["language_id"] ?? null);
                echo "\" class=\"tproduct\"><span>Product page</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"tab_contact_page_";
                // line 3121
                echo ($context["language_id"] ?? null);
                echo "\" class=\"tab-content4\">
\t\t\t\t\t\t\t\t\t
                                    <div class=\"section\">
                                    <!-- Status -->
\t\t\t\t\t\t\t\t\t";
                // line 3125
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["custom_block"] ?? null), "contact_page", [], "array", false, true, false, 3125), ($context["language_id"] ?? null), [], "array", false, true, false, 3125), "status", [], "array", true, true, false, 3125)) {
                    echo " 
\t\t\t\t\t\t\t\t\t";
                    // line 3126
                    if (((($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d = (($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408 = (($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0 = ($context["custom_block"] ?? null)) && is_array($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0) || $__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0 instanceof ArrayAccess ? ($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0["contact_page"] ?? null) : null)) && is_array($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408) || $__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408 instanceof ArrayAccess ? ($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d) || $__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d instanceof ArrayAccess ? ($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d["status"] ?? null) : null) == 1)) {
                        echo " ";
                        echo (("<div class=\"status status-on\" title=\"1\" rel=\"custom_block_contact_page_" . ($context["language_id"] ?? null)) . "_status\"></div>");
                        echo " ";
                    } else {
                        echo " ";
                        echo (("<div class=\"status status-off\" title=\"0\" rel=\"custom_block_contact_page_" . ($context["language_id"] ?? null)) . "_status\"></div>");
                        echo " ";
                    }
                    echo " 
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<input name=\"custom_block[contact_page][";
                    // line 3128
                    echo ($context["language_id"] ?? null);
                    echo "][status]\" value=\"";
                    echo (($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b = (($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084 = (($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb = ($context["custom_block"] ?? null)) && is_array($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb) || $__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb instanceof ArrayAccess ? ($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb["contact_page"] ?? null) : null)) && is_array($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084) || $__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084 instanceof ArrayAccess ? ($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b) || $__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b instanceof ArrayAccess ? ($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b["status"] ?? null) : null);
                    echo "\" id=\"custom_block_contact_page_";
                    echo ($context["language_id"] ?? null);
                    echo "_status\" type=\"hidden\" />
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 3129
                    echo " 
\t\t\t\t\t\t\t\t\t";
                    // line 3130
                    echo (("<div class=\"status status-off\" title=\"0\" rel=\"custom_block_contact_page_" . ($context["language_id"] ?? null)) . "_status\"></div>");
                    echo " 
\t\t\t\t\t\t\t\t\t<input name=\"custom_block[contact_page][";
                    // line 3131
                    echo ($context["language_id"] ?? null);
                    echo "][status]\" value=\"0\" id=\"custom_block_contact_page_";
                    echo ($context["language_id"] ?? null);
                    echo "_status\" type=\"hidden\" />
\t\t\t\t\t\t\t\t\t";
                }
                // line 3132
                echo " 
                                    </div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"section\">
                                        <div class=\"section-title\">
                                            <h4>Custom block</h4>
                                        </div>
                                        <div class=\"section-content\">
                                            <div class=\"input\">
                                                <p>Heading:</p>
                                                ";
                // line 3142
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["custom_block"] ?? null), "contact_page", [], "array", false, true, false, 3142), ($context["language_id"] ?? null), [], "array", false, true, false, 3142), "heading", [], "array", true, true, false, 3142)) {
                    echo " 
                                                <input name=\"custom_block[contact_page][";
                    // line 3143
                    echo ($context["language_id"] ?? null);
                    echo "][heading]\" type=\"text\" value=\"";
                    echo (($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b = (($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9 = (($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698 = ($context["custom_block"] ?? null)) && is_array($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698) || $__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698 instanceof ArrayAccess ? ($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698["contact_page"] ?? null) : null)) && is_array($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9) || $__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9 instanceof ArrayAccess ? ($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b) || $__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b instanceof ArrayAccess ? ($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b["heading"] ?? null) : null);
                    echo "\" />
                                                ";
                } else {
                    // line 3144
                    echo " 
                                                <input name=\"custom_block[contact_page][";
                    // line 3145
                    echo ($context["language_id"] ?? null);
                    echo "][heading]\" type=\"text\" value=\"\" />
                                                ";
                }
                // line 3146
                echo " 
                                                <div class=\"clear\"></div>
                                            </div>

                                            <div class=\"input-with-editor editor-no-border\">\t\t\t\t\t\t\t\t\t\t
                                                ";
                // line 3151
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["custom_block"] ?? null), "contact_page", [], "array", false, true, false, 3151), ($context["language_id"] ?? null), [], "array", false, true, false, 3151), "text", [], "array", true, true, false, 3151)) {
                    echo " 
                                                <textarea rows=\"0\" cols=\"0\" name=\"custom_block[contact_page][";
                    // line 3152
                    echo ($context["language_id"] ?? null);
                    echo "][text]\" id=\"custom_block_contact_page_";
                    echo ($context["language_id"] ?? null);
                    echo "_text\">";
                    echo (($__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f = (($__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1 = (($__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a = ($context["custom_block"] ?? null)) && is_array($__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a) || $__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a instanceof ArrayAccess ? ($__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a["contact_page"] ?? null) : null)) && is_array($__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1) || $__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1 instanceof ArrayAccess ? ($__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f) || $__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f instanceof ArrayAccess ? ($__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f["text"] ?? null) : null);
                    echo "</textarea>
                                                ";
                } else {
                    // line 3153
                    echo " 
                                                <textarea rows=\"0\" cols=\"0\" name=\"custom_block[contact_page][";
                    // line 3154
                    echo ($context["language_id"] ?? null);
                    echo "][text]\" id=\"custom_block_contact_page_";
                    echo ($context["language_id"] ?? null);
                    echo "_text\"></textarea>
                                                ";
                }
                // line 3155
                echo " 
                                                <div class=\"clear\"></div>

                                                <script type=\"text/javascript\">
                                                    \$('#custom_block_contact_page_";
                // line 3159
                echo ($context["language_id"] ?? null);
                echo "_text').summernote({
                                                        height: 400
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"tab_product_page_";
                // line 3168
                echo ($context["language_id"] ?? null);
                echo "\" class=\"tab-content4\">
\t\t\t\t\t\t\t\t\t
                                    <div class=\"section\">
                                        <!-- Status -->
                                        ";
                // line 3172
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["custom_block"] ?? null), "product_page", [], "array", false, true, false, 3172), ($context["language_id"] ?? null), [], "array", false, true, false, 3172), "status", [], "array", true, true, false, 3172)) {
                    echo " 
                                        ";
                    // line 3173
                    if (((($__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c = (($__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7 = (($__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351 = ($context["custom_block"] ?? null)) && is_array($__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351) || $__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351 instanceof ArrayAccess ? ($__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351["product_page"] ?? null) : null)) && is_array($__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7) || $__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7 instanceof ArrayAccess ? ($__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c) || $__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c instanceof ArrayAccess ? ($__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c["status"] ?? null) : null) == 1)) {
                        echo " ";
                        echo (("<div class=\"status status-on\" title=\"1\" rel=\"custom_block_product_page_" . ($context["language_id"] ?? null)) . "_status\"></div>");
                        echo " ";
                    } else {
                        echo " ";
                        echo (("<div class=\"status status-off\" title=\"0\" rel=\"custom_block_product_page_" . ($context["language_id"] ?? null)) . "_status\"></div>");
                        echo " ";
                    }
                    echo " 

                                        <input name=\"custom_block[product_page][";
                    // line 3175
                    echo ($context["language_id"] ?? null);
                    echo "][status]\" value=\"";
                    echo (($__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15 = (($__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f = (($__internal_7a86decbee0e83646d077b28cb4023bf5ce8a6941db44d2a095f3e5c30673f40 = ($context["custom_block"] ?? null)) && is_array($__internal_7a86decbee0e83646d077b28cb4023bf5ce8a6941db44d2a095f3e5c30673f40) || $__internal_7a86decbee0e83646d077b28cb4023bf5ce8a6941db44d2a095f3e5c30673f40 instanceof ArrayAccess ? ($__internal_7a86decbee0e83646d077b28cb4023bf5ce8a6941db44d2a095f3e5c30673f40["product_page"] ?? null) : null)) && is_array($__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f) || $__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f instanceof ArrayAccess ? ($__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15) || $__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15 instanceof ArrayAccess ? ($__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15["status"] ?? null) : null);
                    echo "\" id=\"custom_block_product_page_";
                    echo ($context["language_id"] ?? null);
                    echo "_status\" type=\"hidden\" />
                                        ";
                } else {
                    // line 3176
                    echo " 
                                        ";
                    // line 3177
                    echo (("<div class=\"status status-off\" title=\"0\" rel=\"custom_block_product_page_" . ($context["language_id"] ?? null)) . "_status\"></div>");
                    echo " 
                                        <input name=\"custom_block[product_page][";
                    // line 3178
                    echo ($context["language_id"] ?? null);
                    echo "][status]\" value=\"0\" id=\"custom_block_product_page_";
                    echo ($context["language_id"] ?? null);
                    echo "_status\" type=\"hidden\" />
                                        ";
                }
                // line 3179
                echo " 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"section\">
                                        <div class=\"section-title\">
                                            <h4>Custom block</h4>
                                        </div>
                                        <div class=\"section-content\">
                                            <div class=\"input\">
                                                <p>Heading:</p>
                                                ";
                // line 3189
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["custom_block"] ?? null), "product_page", [], "array", false, true, false, 3189), ($context["language_id"] ?? null), [], "array", false, true, false, 3189), "heading", [], "array", true, true, false, 3189)) {
                    echo " 
                                                <input name=\"custom_block[product_page][";
                    // line 3190
                    echo ($context["language_id"] ?? null);
                    echo "][heading]\" type=\"text\" value=\"";
                    echo (($__internal_9765bc41907280d6fcc28ada485cfb51e7ac5fc636224af251b78cc914882ea8 = (($__internal_64a8779ac6c861d53bff0e05418b6bf70fe527205a28bcc347da1c47628d6316 = (($__internal_bdeae13b61c48a9bb7053d83339903da184f04d6cf2c1c6bf65ecb00a4978b68 = ($context["custom_block"] ?? null)) && is_array($__internal_bdeae13b61c48a9bb7053d83339903da184f04d6cf2c1c6bf65ecb00a4978b68) || $__internal_bdeae13b61c48a9bb7053d83339903da184f04d6cf2c1c6bf65ecb00a4978b68 instanceof ArrayAccess ? ($__internal_bdeae13b61c48a9bb7053d83339903da184f04d6cf2c1c6bf65ecb00a4978b68["product_page"] ?? null) : null)) && is_array($__internal_64a8779ac6c861d53bff0e05418b6bf70fe527205a28bcc347da1c47628d6316) || $__internal_64a8779ac6c861d53bff0e05418b6bf70fe527205a28bcc347da1c47628d6316 instanceof ArrayAccess ? ($__internal_64a8779ac6c861d53bff0e05418b6bf70fe527205a28bcc347da1c47628d6316[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_9765bc41907280d6fcc28ada485cfb51e7ac5fc636224af251b78cc914882ea8) || $__internal_9765bc41907280d6fcc28ada485cfb51e7ac5fc636224af251b78cc914882ea8 instanceof ArrayAccess ? ($__internal_9765bc41907280d6fcc28ada485cfb51e7ac5fc636224af251b78cc914882ea8["heading"] ?? null) : null);
                    echo "\" />
                                                ";
                } else {
                    // line 3191
                    echo " 
                                                <input name=\"custom_block[product_page][";
                    // line 3192
                    echo ($context["language_id"] ?? null);
                    echo "][heading]\" type=\"text\" value=\"\" />
                                                ";
                }
                // line 3193
                echo " 
                                                <div class=\"clear\"></div>
                                            </div>

                                            <div class=\"input-with-editor editor-no-border\">\t\t\t\t\t\t\t\t\t\t
                                                ";
                // line 3198
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["custom_block"] ?? null), "product_page", [], "array", false, true, false, 3198), ($context["language_id"] ?? null), [], "array", false, true, false, 3198), "text", [], "array", true, true, false, 3198)) {
                    echo " 
                                                <textarea rows=\"0\" cols=\"0\" name=\"custom_block[product_page][";
                    // line 3199
                    echo ($context["language_id"] ?? null);
                    echo "][text]\" id=\"custom_block_product_page_";
                    echo ($context["language_id"] ?? null);
                    echo "_text\">";
                    echo (($__internal_33af9458a3ae54268b64fc86c4f2aabeb171e5df6853a739a882d22db3c7a6a3 = (($__internal_8a0762d4aa3dc8c3807c671517580f54686cc5ac5c8e1cef30934bfb6f7bb267 = (($__internal_ffa8d8104e4c05f0e520b22e02d102606b28cadd1d676232462d37155205d29d = ($context["custom_block"] ?? null)) && is_array($__internal_ffa8d8104e4c05f0e520b22e02d102606b28cadd1d676232462d37155205d29d) || $__internal_ffa8d8104e4c05f0e520b22e02d102606b28cadd1d676232462d37155205d29d instanceof ArrayAccess ? ($__internal_ffa8d8104e4c05f0e520b22e02d102606b28cadd1d676232462d37155205d29d["product_page"] ?? null) : null)) && is_array($__internal_8a0762d4aa3dc8c3807c671517580f54686cc5ac5c8e1cef30934bfb6f7bb267) || $__internal_8a0762d4aa3dc8c3807c671517580f54686cc5ac5c8e1cef30934bfb6f7bb267 instanceof ArrayAccess ? ($__internal_8a0762d4aa3dc8c3807c671517580f54686cc5ac5c8e1cef30934bfb6f7bb267[($context["language_id"] ?? null)] ?? null) : null)) && is_array($__internal_33af9458a3ae54268b64fc86c4f2aabeb171e5df6853a739a882d22db3c7a6a3) || $__internal_33af9458a3ae54268b64fc86c4f2aabeb171e5df6853a739a882d22db3c7a6a3 instanceof ArrayAccess ? ($__internal_33af9458a3ae54268b64fc86c4f2aabeb171e5df6853a739a882d22db3c7a6a3["text"] ?? null) : null);
                    echo "</textarea>
                                                ";
                } else {
                    // line 3200
                    echo " 
                                                <textarea rows=\"0\" cols=\"0\" name=\"custom_block[product_page][";
                    // line 3201
                    echo ($context["language_id"] ?? null);
                    echo "][text]\" id=\"custom_block_product_page_";
                    echo ($context["language_id"] ?? null);
                    echo "_text\"></textarea>
                                                ";
                }
                // line 3202
                echo " 
                                                <div class=\"clear\"></div>

                                                <script type=\"text/javascript\">
                                                    \$('#custom_block_product_page_";
                // line 3206
                echo ($context["language_id"] ?? null);
                echo "_text').summernote({
                                                        height: 400
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\t\t\t\$('#tabs_custom_block_";
                // line 3217
                echo ($context["language_id"] ?? null);
                echo " a').tabs();
\t\t\t\t\t\t\tif(\$.cookie('tabs_custom_block_";
                // line 3218
                echo ($context["language_id"] ?? null);
                echo "') > 0) {
\t\t\t\t\t\t\t\t\$('#tabs_custom_block_";
                // line 3219
                echo ($context["language_id"] ?? null);
                echo " a').eq(\$.cookie('tabs_custom_block_";
                echo ($context["language_id"] ?? null);
                echo "')).trigger(\"click\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$('#tabs_custom_block_";
                // line 3221
                echo ($context["language_id"] ?? null);
                echo " a').click(function() {
\t\t\t\t\t\t\t\tvar element_index = \$('#tabs_custom_block_";
                // line 3222
                echo ($context["language_id"] ?? null);
                echo " a').index(this);
\t\t\t\t\t\t\t\t\$.cookie('tabs_custom_block_";
                // line 3223
                echo ($context["language_id"] ?? null);
                echo "', element_index); 
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t//--></script> 
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3226
            echo " 
\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- End Custom block --> 
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<p style=\"font-size:1px;line-height:1px;height:1px;clear:both;margin:0px;padding:0px;position:relative;margin-top:-1px\"></p>
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- End Tabs -->
\t\t\t\t
\t\t\t\t<!-- Buttons -->
\t\t\t\t
\t\t\t\t<div class=\"buttons\"><input type=\"submit\" name=\"button-save\" class=\"button-save\" value=\"\"></div>
\t\t\t\t
\t\t\t\t<!-- End Buttons -->
\t\t\t
\t\t\t</div>
\t\t
\t\t</div>
\t\t<!-- End Content -->
\t\t ";
        } else {
            // line 3248
            echo " 
\t\t\t<div class=\"content\">
\t\t\t\t<div style=\"padding:20px 40px;text-align:center;\">
\t\t\t\t\tYou need to add or active skin.
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 3254
        echo " 
\t\t
\t</form>
\t
</div>
<!-- End Theme Options -->

</div>

<!-- END #CONTENT -->

<script type=\"text/javascript\">

\$(document).ready(function() {

\t\$('.color_input input').ColorPicker({
\t\tonChange: function (hsb, hex, rgb, el) {
\t\t\t\$(el).val(\"#\" +hex);
\t\t\t\$(el).next('.color_selected').css(\"background\", \"#\" + hex);
\t\t},
\t\tonShow: function (colpkr) {
\t\t\t\$(colpkr).show();
\t\t\treturn false;
\t\t},
\t\tonHide: function (colpkr) {
\t\t\t\$(colpkr).hide();
\t\t\treturn false;
\t\t}
\t});
});
</script>
<script type=\"text/javascript\"><!--
\$(document).ready(function(){ 
\t\$('#tabs a').tabs();
\tif(\$.cookie('tabs_cookie') > 0) {
\t\t\$('#tabs a').eq(\$.cookie('tabs_cookie')).trigger(\"click\");
\t}
\t\$('#tabs a').click(function() {
\t\tvar element_index = \$('#tabs a').index(this);
\t\t\$.cookie('tabs_cookie', element_index); 
\t});
\t
\t\$('#tabs_design a').tabs();
\tif(\$.cookie('tabs_design_cookie') > 0) {
\t\t\$('#tabs_design a').eq(\$.cookie('tabs_design_cookie')).trigger(\"click\");
\t}
\t\$('#tabs_design a').click(function() {
\t\tvar element_index = \$('#tabs_design a').index(this);
\t\t\$.cookie('tabs_design_cookie', element_index); 
\t});
\t
\t\$('#tabs_background_layers a').tabs();
\t
\t\$('#tabs_footer a').tabs();
\tif(\$.cookie('tabs_footer_cookie') > 0) {
\t\t\$('#tabs_footer a').eq(\$.cookie('tabs_footer_cookie')).trigger(\"click\");
\t}
\t\$('#tabs_footer a').click(function() {
\t\tvar element_index = \$('#tabs_footer a').index(this);
\t\t\$.cookie('tabs_footer_cookie', element_index); 
\t});
\t
\t\$('#tabs_general a').tabs();
\tif(\$.cookie('tabs_general_cookie') > 0) {
\t\t\$('#tabs_general a').eq(\$.cookie('tabs_general_cookie')).trigger(\"click\");
\t}
\t\$('#tabs_general a').click(function() {
\t\tvar element_index = \$('#tabs_general a').index(this);
\t\t\$.cookie('tabs_general_cookie', element_index); 
\t});
\t\t
\t\$('#tabs_widgets a').tabs();
\tif(\$.cookie('tabs_widgets_cookie') > 0) {
\t\t\$('#tabs_widgets a').eq(\$.cookie('tabs_widgets_cookie')).trigger(\"click\");
\t}
\t\$('#tabs_widgets a').click(function() {
\t\tvar element_index = \$('#tabs_widgets a').index(this);
\t\t\$.cookie('tabs_widgets_cookie', element_index); 
\t});
\t
\t\$('#tabs_custom_code a').tabs();
\tif(\$.cookie('tabs_custom_code_cookie') > 0) {
\t\t\$('#tabs_custom_code a').eq(\$.cookie('tabs_custom_code_cookie')).trigger(\"click\");
\t}
\t\$('#tabs_custom_code a').click(function() {
\t\tvar element_index = \$('#tabs_custom_code a').index(this);
\t\t\$.cookie('tabs_custom_code_cookie', element_index); 
\t});
\t
\t\$('#tabs_custom_block a').tabs();
\tif(\$.cookie('tabs_custom_block') > 0) {
\t\t\$('#tabs_custom_block a').eq(\$.cookie('tabs_custom_block')).trigger(\"click\");
\t}
\t\$('#tabs_custom_block a').click(function() {
\t\tvar element_index = \$('#tabs_custom_block a').index(this);
\t\t\$.cookie('tabs_custom_block', element_index); 
\t});
});
//--></script> 

<script type=\"text/javascript\">
\t";
        // line 3355
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\$('#widget_custom_content_";
            // line 3356
            echo (($__internal_995009f84643f33c31b1bfeabfe54d442df1ec39134811b9fee93a3a100dc10f = $context["language"]) && is_array($__internal_995009f84643f33c31b1bfeabfe54d442df1ec39134811b9fee93a3a100dc10f) || $__internal_995009f84643f33c31b1bfeabfe54d442df1ec39134811b9fee93a3a100dc10f instanceof ArrayAccess ? ($__internal_995009f84643f33c31b1bfeabfe54d442df1ec39134811b9fee93a3a100dc10f["language_id"] ?? null) : null);
            echo "').summernote({
\t\theight: 200
\t});
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3359
        echo " 
\t
\t\$('.customblocktabs a').tabs();
</script>

<script type=\"text/javascript\">
jQuery(document).ready(function(\$) {
\t
\t\$('#theme-options').on('click', '.status', function () {
\t\t
\t\tvar styl = \$(this).attr(\"rel\");
\t\tvar co = \$(this).attr(\"title\");
\t\t
\t\tif(co == 1) {
\t\t
\t\t\t\$(this).removeClass('status-on');
\t\t\t\$(this).addClass('status-off');
\t\t\t\$(this).attr(\"title\", \"0\");

\t\t\t\$(\"#\"+styl+\"\").val(0);
\t\t
\t\t}
\t\t
\t\tif(co == 0) {
\t\t
\t\t\t\$(this).addClass('status-on');
\t\t\t\$(this).removeClass('status-off');
\t\t\t\$(this).attr(\"title\", \"1\");

\t\t\t\$(\"#\"+styl+\"\").val(1);
\t\t
\t\t}
\t\t
\t});

});\t
</script>
<script type=\"text/javascript\">
\$(document).ready(function() {

     \$('#theme-options').on('change', 'select#select_demo', function () {
     \t\$(\"select#select_demo option:selected\").each(function() {
     \t\t\$(\".versions\").hide();
     \t\t\$(\".version-\" + \$(this).val()).show();
     \t\t\$(\"#demo\").html(\"for \" + \$(this).text() + \" version\");
     \t});
     });
     
     ";
        // line 3407
        if ((($context["select_demo"] ?? null) > 1)) {
            echo " 
          \$(\".versions\").hide();
          \$(\".version-";
            // line 3409
            echo ($context["select_demo"] ?? null);
            echo "\").show();
          \$(\"#demo\").html(\"for \" + \$(\"#select_demo option:selected\").text() + \" version\");
     ";
        }
        // line 3411
        echo " 
\t
\t\$('#theme-options').on('change', 'select.select-page-width', function () {
\t\t\$(\"select.select-page-width option:selected\").each(function() {
\t\t\tif(\$(this).val() == 2) {
\t\t\t\t\$(\".page-width\").show();
\t\t\t} else {
\t\t\t\t\$(\".page-width\").hide();
\t\t\t}
\t\t});
\t});
\t
\t\$('#theme-options').on('change', '.input-subtle-pattern', function () {
\t\t\$(this).parent().parent().css(\"background-image\", \"url(../image/subtle_patterns/\" + \$(this).val() + \")\");
\t});
    
    
    \$('.section.accordion .section-title').click(function(){
        if(!\$(this).parent().hasClass('opened')){
            \$(this).parent().addClass('opened')
            \$(this).next('.section-content').hide().stop().slideDown();
        }else{
            \$(this).parent().removeClass('opened')
            \$(this).next('.section-content').show().stop().slideUp();
        }
    })
    
    \$('.header_type').click(function(){
        \$('.custom-headers .header_type').removeClass('active');
        \$(this).addClass('active');
    })
    
    \$('.hover_effect_type').click(function(){
        \$('.custom-banners .hover_effect_type').removeClass('active');
        \$(this).addClass('active');
        \$('.custom-banners').find('input').attr('checked', false);
        \$(this).find('input').attr('checked', true);
        \$('input[name=hover_effect_type]').attr('value',  \$(this).find('input').attr('value'));
    })
    
    \$('.subtle-pattern').click(function(){
        \$(this).parent().find('.subtle-pattern').removeClass('selected');
        \$(this).addClass('selected');
        \$(this).find('input').trigger('click');
    })
    
    \$('.subtle-pattern input').click(function(e){
        e.stopPropagation();
    })
    
    \$('.main-tabs .menu-switcher').click(function(){
        \$('.bg-tabs').toggleClass('shrinked');
        if(\$.cookie('main-menu-shrinked')  == 1) {
            \$.cookie('main-menu-shrinked', 0); 
        }else{
            \$.cookie('main-menu-shrinked', 1); 
        }
        
    })
    
    \$('#tab_advanced_settings .desc-switcher').click(function(){
        if(\$(this).hasClass('hide-desc')){
            \$(this).hide();
            \$('#tab_advanced_settings .desc-switcher.show-desc').show();
            \$(this).parent().find('.advanced_description').hide();
            \$.cookie('advanced-settings-desc-hidden', 1); 
        }else{
            \$(this).hide();
            \$('#tab_advanced_settings .desc-switcher.hide-desc').show();
            \$(this).parent().find('.advanced_description').show();
            \$.cookie('advanced-settings-desc-hidden', 0); 
        }
        
    })
    
    \$('.preview-container').beforeAfter({
        animateIntro : true,
        introDelay : 1000,
        introDuration : 300,
        showFullLinks : false,
        imagePath: 'view/javascript/beforeafter/'
    });

});
\tif(\$.cookie('main-menu-shrinked')  == 1) {
        \$('.bg-tabs').addClass('shrinked');
    }
\tif(\$.cookie('advanced-settings-desc-hidden') == 1) {
        \$('#tab_advanced_settings .advanced_description').hide();
        \$('#tab_advanced_settings .desc-switcher.hide-desc').hide();
        \$('#tab_advanced_settings .desc-switcher.show-desc').show();
    }
\tif(\$.cookie('main-menu-shrinked')  == 1) {
        \$('.bg-tabs').addClass('shrinked');
    }
</script>
";
        // line 3507
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "extension/module/kiaria.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  6216 => 3507,  6118 => 3411,  6112 => 3409,  6107 => 3407,  6057 => 3359,  6047 => 3356,  6041 => 3355,  5938 => 3254,  5929 => 3248,  5904 => 3226,  5894 => 3223,  5890 => 3222,  5886 => 3221,  5879 => 3219,  5875 => 3218,  5871 => 3217,  5857 => 3206,  5851 => 3202,  5844 => 3201,  5841 => 3200,  5832 => 3199,  5828 => 3198,  5821 => 3193,  5816 => 3192,  5813 => 3191,  5806 => 3190,  5802 => 3189,  5790 => 3179,  5783 => 3178,  5779 => 3177,  5776 => 3176,  5767 => 3175,  5754 => 3173,  5750 => 3172,  5743 => 3168,  5731 => 3159,  5725 => 3155,  5718 => 3154,  5715 => 3153,  5706 => 3152,  5702 => 3151,  5695 => 3146,  5690 => 3145,  5687 => 3144,  5680 => 3143,  5676 => 3142,  5664 => 3132,  5657 => 3131,  5653 => 3130,  5650 => 3129,  5641 => 3128,  5628 => 3126,  5624 => 3125,  5617 => 3121,  5611 => 3118,  5607 => 3117,  5603 => 3116,  5599 => 3115,  5595 => 3114,  5589 => 3113,  5582 => 3108,  5566 => 3107,  5560 => 3106,  5529 => 3078,  5516 => 3076,  5491 => 3053,  5485 => 3050,  5478 => 3049,  5472 => 3048,  5468 => 3047,  5458 => 3039,  5440 => 3036,  5435 => 3034,  5426 => 3032,  5421 => 3029,  5405 => 3028,  5399 => 3027,  5385 => 3016,  5372 => 3014,  5352 => 2996,  5346 => 2993,  5339 => 2992,  5333 => 2991,  5329 => 2990,  5312 => 2975,  5305 => 2971,  5298 => 2970,  5292 => 2969,  5286 => 2968,  5282 => 2967,  5266 => 2953,  5261 => 2951,  5256 => 2950,  5252 => 2949,  5234 => 2934,  5221 => 2932,  5201 => 2914,  5195 => 2911,  5188 => 2910,  5182 => 2909,  5178 => 2908,  5161 => 2893,  5156 => 2891,  5151 => 2890,  5147 => 2889,  5129 => 2874,  5116 => 2872,  5080 => 2838,  5075 => 2836,  5070 => 2835,  5066 => 2834,  5057 => 2828,  5044 => 2826,  5024 => 2808,  5019 => 2806,  5014 => 2805,  5010 => 2804,  5001 => 2798,  4988 => 2796,  4936 => 2749,  4927 => 2743,  4918 => 2736,  4908 => 2735,  4901 => 2731,  4883 => 2728,  4876 => 2727,  4863 => 2726,  4859 => 2725,  4847 => 2722,  4835 => 2719,  4822 => 2715,  4815 => 2710,  4806 => 2709,  4803 => 2708,  4794 => 2707,  4790 => 2706,  4781 => 2704,  4774 => 2700,  4768 => 2699,  4762 => 2698,  4746 => 2685,  4734 => 2684,  4716 => 2668,  4703 => 2662,  4699 => 2661,  4695 => 2660,  4688 => 2658,  4684 => 2657,  4680 => 2656,  4661 => 2640,  4654 => 2635,  4647 => 2634,  4644 => 2633,  4635 => 2632,  4631 => 2631,  4617 => 2619,  4612 => 2618,  4609 => 2617,  4602 => 2616,  4598 => 2615,  4582 => 2601,  4575 => 2600,  4571 => 2599,  4568 => 2598,  4559 => 2597,  4546 => 2595,  4542 => 2594,  4534 => 2589,  4516 => 2573,  4511 => 2572,  4508 => 2571,  4501 => 2570,  4497 => 2569,  4483 => 2557,  4478 => 2556,  4475 => 2555,  4468 => 2554,  4464 => 2553,  4448 => 2539,  4441 => 2538,  4437 => 2537,  4434 => 2536,  4425 => 2535,  4412 => 2533,  4408 => 2532,  4400 => 2527,  4381 => 2510,  4375 => 2507,  4368 => 2506,  4362 => 2505,  4358 => 2504,  4354 => 2503,  4339 => 2490,  4334 => 2489,  4331 => 2488,  4324 => 2487,  4320 => 2486,  4306 => 2474,  4301 => 2473,  4298 => 2472,  4291 => 2471,  4287 => 2470,  4272 => 2457,  4266 => 2454,  4259 => 2453,  4253 => 2452,  4249 => 2451,  4245 => 2450,  4231 => 2438,  4226 => 2437,  4223 => 2436,  4216 => 2435,  4212 => 2434,  4197 => 2421,  4192 => 2420,  4189 => 2419,  4182 => 2418,  4178 => 2417,  4162 => 2403,  4155 => 2402,  4151 => 2401,  4148 => 2400,  4139 => 2399,  4126 => 2397,  4122 => 2396,  4114 => 2391,  4094 => 2374,  4087 => 2369,  4080 => 2368,  4077 => 2367,  4068 => 2366,  4064 => 2365,  4050 => 2353,  4045 => 2352,  4042 => 2351,  4035 => 2350,  4031 => 2349,  4015 => 2335,  4008 => 2334,  4004 => 2333,  4001 => 2332,  3992 => 2331,  3979 => 2329,  3975 => 2328,  3967 => 2323,  3949 => 2307,  3944 => 2306,  3941 => 2305,  3934 => 2304,  3930 => 2303,  3916 => 2291,  3911 => 2290,  3908 => 2289,  3901 => 2288,  3897 => 2287,  3883 => 2275,  3878 => 2274,  3875 => 2273,  3868 => 2272,  3864 => 2271,  3850 => 2259,  3845 => 2258,  3842 => 2257,  3835 => 2256,  3831 => 2255,  3817 => 2243,  3812 => 2242,  3809 => 2241,  3802 => 2240,  3798 => 2239,  3784 => 2227,  3779 => 2226,  3776 => 2225,  3769 => 2224,  3765 => 2223,  3751 => 2211,  3746 => 2210,  3743 => 2209,  3736 => 2208,  3732 => 2207,  3715 => 2192,  3708 => 2191,  3704 => 2190,  3701 => 2189,  3692 => 2188,  3679 => 2186,  3675 => 2185,  3667 => 2180,  3656 => 2172,  3652 => 2171,  3648 => 2170,  3644 => 2169,  3640 => 2168,  3635 => 2166,  3628 => 2162,  3623 => 2160,  3617 => 2159,  3605 => 2149,  3589 => 2148,  3583 => 2147,  3550 => 2116,  3542 => 2114,  3535 => 2113,  3532 => 2112,  3519 => 2111,  3515 => 2110,  3507 => 2109,  3502 => 2107,  3496 => 2106,  3483 => 2096,  3471 => 2095,  3453 => 2084,  3444 => 2082,  3431 => 2076,  3422 => 2074,  3409 => 2068,  3400 => 2066,  3387 => 2060,  3378 => 2058,  3365 => 2052,  3356 => 2050,  3343 => 2044,  3334 => 2042,  3321 => 2036,  3312 => 2034,  3299 => 2028,  3290 => 2026,  3277 => 2020,  3268 => 2018,  3255 => 2012,  3246 => 2010,  3232 => 2007,  3221 => 1999,  3209 => 1998,  3196 => 1987,  3181 => 1985,  3173 => 1984,  3169 => 1983,  3162 => 1981,  3152 => 1973,  3137 => 1971,  3129 => 1970,  3125 => 1969,  3118 => 1967,  3108 => 1959,  3093 => 1957,  3085 => 1956,  3081 => 1955,  3074 => 1953,  3064 => 1945,  3049 => 1943,  3041 => 1942,  3037 => 1941,  3030 => 1939,  3020 => 1931,  3005 => 1929,  2997 => 1928,  2993 => 1927,  2986 => 1925,  2976 => 1917,  2961 => 1915,  2953 => 1914,  2949 => 1913,  2942 => 1911,  2932 => 1903,  2917 => 1901,  2909 => 1900,  2905 => 1899,  2898 => 1897,  2888 => 1889,  2873 => 1887,  2865 => 1886,  2861 => 1885,  2854 => 1883,  2844 => 1875,  2829 => 1873,  2821 => 1872,  2817 => 1871,  2810 => 1869,  2800 => 1861,  2785 => 1859,  2777 => 1858,  2773 => 1857,  2766 => 1855,  2756 => 1847,  2741 => 1845,  2733 => 1844,  2729 => 1843,  2722 => 1841,  2712 => 1833,  2697 => 1831,  2689 => 1830,  2685 => 1829,  2678 => 1827,  2668 => 1819,  2653 => 1817,  2645 => 1816,  2641 => 1815,  2634 => 1813,  2624 => 1805,  2609 => 1803,  2601 => 1802,  2597 => 1801,  2590 => 1799,  2565 => 1781,  2556 => 1779,  2537 => 1767,  2528 => 1765,  2508 => 1752,  2499 => 1750,  2480 => 1738,  2471 => 1736,  2452 => 1724,  2443 => 1722,  2423 => 1709,  2414 => 1707,  2394 => 1694,  2385 => 1692,  2364 => 1678,  2355 => 1676,  2336 => 1664,  2327 => 1662,  2307 => 1649,  2298 => 1647,  2279 => 1635,  2270 => 1633,  2250 => 1620,  2241 => 1618,  2222 => 1606,  2213 => 1604,  2194 => 1592,  2185 => 1590,  2165 => 1577,  2156 => 1575,  2136 => 1562,  2127 => 1560,  2104 => 1544,  2095 => 1542,  2050 => 1504,  2041 => 1502,  2027 => 1495,  2018 => 1493,  2004 => 1486,  1995 => 1484,  1981 => 1477,  1972 => 1475,  1958 => 1468,  1949 => 1466,  1935 => 1459,  1926 => 1457,  1912 => 1450,  1903 => 1448,  1889 => 1441,  1880 => 1439,  1866 => 1432,  1857 => 1430,  1843 => 1423,  1834 => 1421,  1807 => 1397,  1795 => 1396,  1786 => 1390,  1774 => 1389,  1765 => 1383,  1753 => 1382,  1744 => 1376,  1732 => 1375,  1723 => 1369,  1711 => 1368,  1697 => 1357,  1692 => 1355,  1679 => 1347,  1673 => 1346,  1667 => 1345,  1661 => 1344,  1655 => 1343,  1642 => 1335,  1636 => 1334,  1630 => 1333,  1616 => 1324,  1610 => 1323,  1596 => 1314,  1590 => 1313,  1584 => 1312,  1578 => 1311,  1572 => 1310,  1550 => 1291,  1538 => 1290,  1528 => 1283,  1516 => 1282,  1506 => 1275,  1494 => 1274,  1484 => 1267,  1472 => 1266,  1462 => 1259,  1450 => 1258,  1429 => 1240,  1417 => 1239,  1407 => 1232,  1395 => 1231,  1385 => 1224,  1373 => 1223,  1363 => 1216,  1351 => 1215,  1333 => 1200,  1321 => 1199,  1312 => 1192,  1303 => 1189,  1287 => 1187,  1284 => 1186,  1280 => 1185,  1275 => 1183,  1267 => 1182,  1263 => 1181,  1256 => 1179,  1242 => 1170,  1236 => 1169,  1230 => 1168,  1217 => 1160,  1211 => 1159,  1205 => 1158,  1199 => 1157,  1180 => 1143,  1174 => 1142,  1164 => 1135,  1159 => 1133,  1147 => 1126,  1141 => 1125,  1130 => 1117,  1118 => 1116,  1109 => 1110,  1097 => 1109,  1085 => 1102,  1079 => 1101,  1066 => 1093,  1060 => 1092,  1054 => 1091,  1041 => 1083,  1035 => 1082,  1029 => 1081,  1015 => 1072,  1009 => 1071,  1003 => 1070,  988 => 1058,  979 => 1051,  964 => 1049,  956 => 1048,  952 => 1047,  945 => 1045,  935 => 1038,  923 => 1037,  914 => 1030,  899 => 1028,  891 => 1027,  887 => 1026,  880 => 1024,  867 => 1016,  861 => 1015,  851 => 1008,  839 => 1007,  829 => 1000,  817 => 999,  797 => 986,  789 => 985,  781 => 984,  773 => 983,  757 => 974,  749 => 973,  741 => 972,  733 => 971,  717 => 962,  709 => 961,  701 => 960,  693 => 959,  677 => 950,  669 => 949,  661 => 948,  653 => 947,  637 => 938,  629 => 937,  621 => 936,  613 => 935,  597 => 926,  589 => 925,  581 => 924,  573 => 923,  556 => 913,  548 => 912,  540 => 911,  532 => 910,  524 => 909,  516 => 908,  508 => 907,  492 => 893,  478 => 890,  470 => 889,  466 => 888,  458 => 887,  454 => 886,  447 => 884,  431 => 875,  423 => 874,  411 => 865,  402 => 863,  389 => 857,  381 => 856,  373 => 855,  362 => 847,  350 => 846,  295 => 794,  288 => 789,  281 => 786,  277 => 784,  270 => 781,  266 => 779,  248 => 778,  242 => 777,  232 => 772,  213 => 771,  184 => 745,  178 => 741,  163 => 740,  157 => 739,  148 => 733,  140 => 727,  133 => 724,  129 => 723,  123 => 720,  119 => 719,  113 => 715,  103 => 714,  97 => 713,  89 => 708,  44 => 665,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/kiaria.twig", "");
    }
}
