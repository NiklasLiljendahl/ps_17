<?php

/* __string_template__ed563457b0128c138883f0e84d3b34f8b89449b40112f0953259936dc6a31ed5 */
class __TwigTemplate_1aa7ae4ccd9be1465160b2fe4e4950370b797bd5cd1612f47637635aee4c87ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"sv\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Översättningar • YABS butik</title>

  <script type=\"text/javascript\">
    var help_class_name = '';
    var iso_user = 'sv';
    var full_language_code = 'sv-se';
    var full_cldr_language_code = 'sv-SE';
    var country_iso_code = 'SE';
    var _PS_VERSION_ = '1.7.2.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'En ny beställning har inkommit i din butik.';
    var order_number_msg = 'Beställningsnummer: ';
    var total_msg = 'Totalt: ';
    var from_msg = 'Från: ';
    var see_order_msg = 'Visa denna order';
    var new_customer_msg = 'En ny kund registrerade sig i din butik.';
    var customer_name_msg = 'Kundens namn: ';
    var new_msg = 'Ett nytt meddelande skickades till din butik.';
    var see_msg = 'Läs detta meddelande';
    var token = 'ee472f90e9b39e0af93a62c4aca391e5';
    var token_admin_orders = 'eb3a0ebff110f6546bfbf809e0656249';
    var token_admin_customers = '825861f003c5f2f3ecadb05947b2c885';
    var token_admin_customer_threads = '0da800f2e99c34eb651a011d5036609b';
    var currentIndex = 'http://localhost/admin_yabs/&token=765d5192d274d07b4575dae61ff27df8';
    var employee_token = 'ee426c955bb5330cf39b5d583bcf3ade';
    var choose_language_translate = 'VÄlj språk';
    var default_language = '2';
    var admin_modules_link = '/admin_yabs/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=zKQJjBH8vP56L9t5h0buVDMu73uxnhbVNUSOrAS0IpU';
    var tab_modules_list = '';
    var update_success_msg = 'Uppdateringar framgångsrika';
    var errorLogin = 'PrestaShop kunde inte logga in på Addons, vänligen kontrollera dina uppgifter och din internetanslutning.';
    var search_product_msg = 'Sök produkt';
  </script>

      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin_yabs/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/advice-1.7.2.2_389.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin_yabs/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin_yabs\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"SEK\",\"sign\":\"kr\",\"name\":\"svensk krona\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/admin_yabs/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/admin_yabs/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin_yabs/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array(\"389\");
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/admin_yabs/index.php?controller=AdminGamification&token=1e54b5fa8fa2c704499a9150a1633d6d';
\t\t\t\tvar current_id_tab = 0;
\t\t\t</script>

";
        // line 85
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"\">



<header>
  <nav class=\"main-header\">

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"http://localhost/admin_yabs/index.php?controller=AdminDashboard&amp;token=0a2797141355e036c36a5ce278f04014\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Snabbmeny</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin_yabs/index.php/module/manage?token=2839c3e8661a477a0228d8f84e203d91\"
                 data-item=\"Installerade moduler\"
      >Installerade moduler</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin_yabs/index.php?controller=AdminCategories&amp;addcategory&amp;token=0c6e6aa274de10aeefa879b2c350e731\"
                 data-item=\"Ny kategori\"
      >Ny kategori</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin_yabs/index.php/product/new?token=2839c3e8661a477a0228d8f84e203d91\"
                 data-item=\"Ny produkt\"
      >Ny produkt</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin_yabs/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=30e4ce0f9cca3c84bbb5dd03e9b42cfe\"
                 data-item=\"Ny rabattkupong\"
      >Ny rabattkupong</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin_yabs/index.php?controller=AdminOrders&amp;token=eb3a0ebff110f6546bfbf809e0656249\"
                 data-item=\"Ordrar\"
      >Ordrar</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"173\"
        data-icon=\"\"
        data-method=\"add\"
        data-url=\"index.php/international/translations?lang=sv&type=themes&selected=classic&locale=sv-SE\"
        data-post-link=\"http://localhost/admin_yabs/index.php?controller=AdminQuickAccesses&token=8e225eac7934eaa4a75df178b0593cec\"
        data-prompt-text=\"Vänligen ange ett namn för genvägen:\"
        data-link=\" - Lista\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Lägg till nuvarande sida till Snabbval
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/admin_yabs/index.php?controller=AdminQuickAccesses&token=8e225eac7934eaa4a75df178b0593cec\">
      <i class=\"material-icons\">settings</i>
      Hantera snabbåtkomst
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/admin_yabs/index.php?controller=AdminSearch&amp;token=caad90998b44a62291218222e12d16f4\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Sök (t.ex.: modellbeteckning , kundnamn…)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          överallt
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"överallt\" href=\"#\" data-value=\"0\" data-placeholder=\"Vad söker du efter?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> överallt</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Produktnamn, SKU, referens...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Katalog
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Kunder Efter namn\" href=\"#\" data-value=\"2\" data-placeholder=\"Mailadress, namn...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Kunder Efter namn
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Kunder på ipadress\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Kunder från IP-adress</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Ordrar\" href=\"#\" data-value=\"3\" data-placeholder=\"Order-ID\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Ordrar
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Fakturor\" href=\"#\" data-value=\"4\" data-placeholder=\"Fakturanummer\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Fakturor
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Varukorgar\" href=\"#\" data-value=\"5\" data-placeholder=\"Varukorgs-id\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Varukorgar
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Moduler\" href=\"#\" data-value=\"7\" data-placeholder=\"Modulnamn\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Moduler
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">SÖK<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/niklas.liljendahl%40yabs.se.jpg\" /><br>
      <span>Niklas Liljendahl</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://localhost/admin_yabs/index.php?controller=AdminEmployees&amp;token=ee426c955bb5330cf39b5d583bcf3ade&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Din profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://localhost/admin_yabs/index.php?controller=AdminLogin&amp;token=f933fe8a687cb57e22aae4f74bd29877&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Logga ut
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Beställningar<span id=\"_nb_new_orders_\"></span> 
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Kunder<span id=\"_nb_new_customers_\"> </span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Meddelanden<span id=\"_nb_new_messages_\"> </span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Ingen ny beställning just nu :(<br>
              Vad sägs om några säsongsrabatter?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Ingen ny kund just nu :(<br>
              Har du skickat något email för konvertering på sistone?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Inga nya meddelanden.<br>
              Inga nyheter är goda nyheter, eller hur?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      från <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrerad <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://localhost/\" target= \"_blank\">YABS butik</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://localhost/admin_yabs/index.php?controller=AdminDashboard&amp;token=0a2797141355e036c36a5ce278f04014\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Kontrollpanel</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"2\">
              <span class=\"title\">Sälj</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://localhost/admin_yabs/index.php?controller=AdminOrders&amp;token=eb3a0ebff110f6546bfbf809e0656249\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Ordrar
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminOrders&amp;token=eb3a0ebff110f6546bfbf809e0656249\" class=\"link\"> Ordrar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminInvoices&amp;token=07aebca1da87fc482f1626c5893b709a\" class=\"link\"> Fakturor
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminSlip&amp;token=b8d6fc87beb04f31f41c184ca33abe2a\" class=\"link\"> Kreditnota
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminDeliverySlip&amp;token=dc0adaed26a3d568313af02f2b0d3097\" class=\"link\"> Följesedel
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminCarts&amp;token=6725d8cdc4bdc5d390314330c24c4259\" class=\"link\"> Kundvagnar
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\">
                  <a href=\"/admin_yabs/index.php/product/catalog?_token=zKQJjBH8vP56L9t5h0buVDMu73uxnhbVNUSOrAS0IpU\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Katalog
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\">
                              <a href=\"/admin_yabs/index.php/product/catalog?_token=zKQJjBH8vP56L9t5h0buVDMu73uxnhbVNUSOrAS0IpU\" class=\"link\"> Produkter
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminCategories&amp;token=0c6e6aa274de10aeefa879b2c350e731\" class=\"link\"> Kategorier
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminTracking&amp;token=b229248fe73853c4e5db7ed06186998d\" class=\"link\"> Övervakning
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminAttributesGroups&amp;token=73df54d255c41a11468b2211e40cc305\" class=\"link\"> Attribut &amp; Funktioner
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminManufacturers&amp;token=d652774376945afbc0fa99d7dc61b735\" class=\"link\"> Märken &amp; Leverantörer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminAttachments&amp;token=a69fa4843cc094f0ea98369677f594d6\" class=\"link\"> Filer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminCartRules&amp;token=30e4ce0f9cca3c84bbb5dd03e9b42cfe\" class=\"link\"> Rabatter
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/admin_yabs/index.php/stock/?_token=zKQJjBH8vP56L9t5h0buVDMu73uxnhbVNUSOrAS0IpU\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://localhost/admin_yabs/index.php?controller=AdminCustomers&amp;token=825861f003c5f2f3ecadb05947b2c885\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Kunder
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminCustomers&amp;token=825861f003c5f2f3ecadb05947b2c885\" class=\"link\"> Kunder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminAddresses&amp;token=576c0940251d84a88e3303b4dfe5b6cf\" class=\"link\"> Adresser
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://localhost/admin_yabs/index.php?controller=AdminCustomerThreads&amp;token=0da800f2e99c34eb651a011d5036609b\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Kundtjänst
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminCustomerThreads&amp;token=0da800f2e99c34eb651a011d5036609b\" class=\"link\"> Kundtjänst
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminOrderMessage&amp;token=9ab397811ef295cc588573f82afb916a\" class=\"link\"> Ordermeddelanden
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminReturn&amp;token=02461e57382547802e7ed264ea53ad26\" class=\"link\"> Varureturer
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://localhost/admin_yabs/index.php?controller=AdminStats&amp;token=963a5e15e515378fa489142a6d4efb0d\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistik
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"42\">
              <span class=\"title\">Förbättra</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"43\">
                  <a href=\"/admin_yabs/index.php/module/catalog?_token=zKQJjBH8vP56L9t5h0buVDMu73uxnhbVNUSOrAS0IpU\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Moduler
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/admin_yabs/index.php/module/catalog?_token=zKQJjBH8vP56L9t5h0buVDMu73uxnhbVNUSOrAS0IpU\" class=\"link\"> Moduler &amp; Tjänster
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminAddonsCatalog&amp;token=9483ccd29822a7cf8730dda793e9ec86\" class=\"link\"> Modulkatalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://localhost/admin_yabs/index.php?controller=AdminThemes&amp;token=227eccc5dce616843b7f3f2c0f33589c\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Design
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminThemes&amp;token=227eccc5dce616843b7f3f2c0f33589c\" class=\"link\"> Tema &amp; Logotyper
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminThemesCatalog&amp;token=9a4d14086e7530639c5bb1982766454e\" class=\"link\"> Temakatalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminCmsContent&amp;token=67b2f6cc4e30bb64db7c2e23368c85be\" class=\"link\"> Sidor
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminModulesPositions&amp;token=5a8cd864b45156a7e389d736d1a63e86\" class=\"link\"> Positioner
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminImages&amp;token=952da16faa31c72be21e936a112aebf9\" class=\"link\"> Bildinställningar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminLinkWidget&amp;token=0678596ffeae38f5459e93a1115d02bf\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://localhost/admin_yabs/index.php?controller=AdminCarriers&amp;token=f432429ff08fb3e4844dd1f6c1663228\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Leverans
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminCarriers&amp;token=f432429ff08fb3e4844dd1f6c1663228\" class=\"link\"> Transportör
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminShipping&amp;token=e551c913803aa8f57d3285abae279768\" class=\"link\"> Inställningar
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://localhost/admin_yabs/index.php?controller=AdminPayment&amp;token=12d92ffa702af38cf0a11e8665955f8f\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Betalning
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminPayment&amp;token=12d92ffa702af38cf0a11e8665955f8f\" class=\"link\"> Betalningsalternativ
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminPaymentPreferences&amp;token=fb7d2bd4aaab79164c41377e99962f27\" class=\"link\"> Inställningar
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://localhost/admin_yabs/index.php?controller=AdminLocalization&amp;token=0ad064ab1e1522da29785790d6a1b697\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    International
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminLocalization&amp;token=0ad064ab1e1522da29785790d6a1b697\" class=\"link\"> Lokalisering
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminCountries&amp;token=c175e07e03236ab203bd2d36fca72f8f\" class=\"link\"> Platser
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminTaxes&amp;token=107a061824718551700d0a0cddeed54f\" class=\"link\"> Skatter
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminTranslations&amp;token=bf0123d4bbd08c5c2fdf4616383d11cb\" class=\"link\"> Översättningar
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Konfigurera</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://localhost/admin_yabs/index.php?controller=AdminPreferences&amp;token=4d36251146b3eb8fc6e1cb506cb3dbb5\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Butiksparametrar
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminPreferences&amp;token=4d36251146b3eb8fc6e1cb506cb3dbb5\" class=\"link\"> Allmänt
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminOrderPreferences&amp;token=ca3a233d8e9625a5326369aca03e81fb\" class=\"link\"> Beställningsinställningar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminPPreferences&amp;token=f0b8ff1b188b76f004fe0c60bac636aa\" class=\"link\"> Produkter
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminCustomerPreferences&amp;token=f65f24538cf57eccb568935f54d82b4d\" class=\"link\"> Kundinställningar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminContacts&amp;token=a91fe042dd5013cde653c8f1ca6dc38d\" class=\"link\"> Kontakta oss
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminMeta&amp;token=591677893f61a8eb11c2c68a1350f9d5\" class=\"link\"> Trafik &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminSearchConf&amp;token=462f2cf0c05978ac8e98fa7eb88e807d\" class=\"link\"> Sök
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminGamification&amp;token=1e54b5fa8fa2c704499a9150a1633d6d\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://localhost/admin_yabs/index.php?controller=AdminInformation&amp;token=e389546d85407cd497089381fcf34e4a\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Avancerade inställningar
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminInformation&amp;token=e389546d85407cd497089381fcf34e4a\" class=\"link\"> Information
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminPerformance&amp;token=ef23f40db0d48213a4988f9cce0920d5\" class=\"link\"> Prestanda
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminAdminPreferences&amp;token=77890dbf0dad555b129185d4f6a26ed7\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminEmails&amp;token=99d813aa597bfee324b649ae35d3c723\" class=\"link\"> E-post
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminImport&amp;token=d5163bf0c9fad7b98eea8f6f891e2a65\" class=\"link\"> Importera
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminEmployees&amp;token=ee426c955bb5330cf39b5d583bcf3ade\" class=\"link\"> Anställda
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminRequestSql&amp;token=ece3489a46e6e1bb9ed3846a8cfcf717\" class=\"link\"> Databas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminLogs&amp;token=a0a0076bf7210b48b17c29533a550da1\" class=\"link\"> Loggar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://localhost/admin_yabs/index.php?controller=AdminWebservice&amp;token=ddd86d2ce9572649735c10cf30338a16\" class=\"link\"> Webbservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
<div class=\"onboarding-navbar\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Lansera din butik!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Återuppta</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Avbryt introduktionen</a>
  </div>
</div>

</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

      
      
    </ol>
  

  
    <h2 class=\"title\">
      Översättningar    </h2>
  

  
    <div class=\"toolbar-icons\">
                  
                  <a class=\"toolbar-button\" href=\"http://help.prestashop.com/sv/doc/?version=1.7.2.2&amp;country=sv\" title=\"Hjälp\">
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Hjälp</span>
          </a>
                  </div>
  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-SV&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/sv/login?email=niklas.liljendahl%40yabs.se&amp;firstname=Niklas&amp;lastname=Liljendahl&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-SV&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin_yabs/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Koppla din butik till PrestaShop's marknadsplats för att automatiskt importera alla dina köpta moduler.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Har du inget konto?</h4>
\t\t\t\t\t\t<p class='text-justify'>Upptäckt kraften hos PrestaShop Addons! Utforska PrestaShop's officiella marknadsplats och hitta mer än 3500 innovation moduler och teman som optimerar din konvertering, ökar trafik, bygger kundlojalitet och maximerar din produktivitet</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Koppla upp till PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/sv/forgot-your-password\">Jag har glömt mitt lösenord</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/sv/login?email=niklas.liljendahl%40yabs.se&amp;firstname=Niklas&amp;lastname=Liljendahl&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-SV&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tSkapa ett konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Logga in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div \">

      

      
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Fortsätt</button>
  <a class=\"onboarding-button-shut-down\">Hoppa över guiden</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"\\n<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">V\\u00e4lkommen till din butik!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Hej! Jag heter Preston och vill g\\u00e4rna visa dig runt.<\\/p>\\n    <p>Du kommer att visas ett antal n\\u00f6dv\\u00e4ndiga steg innan du kan lansera din butik:\\n    Skapa din f\\u00f6rsta produkt, anpassa din butik, konfigurera frakt och betalning...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>L\\u00e5t oss b\\u00f6rja!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Senare<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Starta<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php?controller=AdminDashboard\"}]},{\"title\":\"B\\u00f6rja med att skapa din f\\u00f6rsta produkt\",\"subtitle\":{\"1\":\"Vad vill du ber\\u00e4tta om den? T\\u00e4nk p\\u00e5 vad dina kunder vill veta.\",\"2\":\"L\\u00e4gg till koncis och lockande information. Du beh\\u00f6ver inte oroa dig, det g\\u00e5r att redigera senare :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Ge din produkt ett h\\u00e4ftigt namn.\",\"options\":[\"savepoint\"],\"page\":[\"index.php\\/product\\/new\",\"index.php\\/product\\/form\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Fyll de viktigaste uppgifterna i denna flik. De \\u00f6vriga flikarna \\u00e4r f\\u00f6r mer avancerad information.\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"L\\u00e4gg till en eller flera bilder s\\u00e5 din produkt ser lockande ut!\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Hur mycket vill du s\\u00e4lja den f\\u00f6r?\",\"page\":\"index.php\\/product\\/form\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Bra! Du har just skapat din f\\u00f6rsta produkt. Ser bra ut, eller hur?\",\"page\":\"index.php\\/product\\/catalog\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Ge din butik dess egna identitet\",\"subtitle\":{\"1\":\"Hur vill du att din butik skall se ut? Vad g\\u00f6r den s\\u00e5 speciell?\",\"2\":\"Anpassa ditt tema eller v\\u00e4lj den b\\u00e4sta designen fr\\u00e5n v\\u00e5r temakatalog.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Ett bra s\\u00e4tt att b\\u00f6rja \\u00e4r att l\\u00e4gga till din egen logotyp h\\u00e4r!\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminThemes\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Om du vill ha n\\u00e5got riktigt speciellt, ta en titt i temakatalogen!\",\"page\":\"index.php?controller=AdminThemesCatalog\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"F\\u00f6rbered din butik f\\u00f6r betalningsalternativ\",\"subtitle\":{\"1\":\"Hur vill du att dina kunder skall betala dig?\",\"2\":\"Anpassa ditt erbjudande till marknaden: l\\u00e4gg till de popul\\u00e4raste betalningsmetoderna f\\u00f6r dina kunder!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Betalningsalternativen \\u00e4r redan tillg\\u00e4ngliga f\\u00f6r dina kunder.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Och du kan v\\u00e4lja att l\\u00e4gga till andra betalningsalternativ h\\u00e4rifr\\u00e5n!\",\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1)\",\"position\":\"top\"}]},{\"title\":\"V\\u00e4lj dina fraktinst\\u00e4llningar\",\"subtitle\":{\"1\":\"Hur vill du leverera dina produkter?\",\"2\":\"V\\u00e4lj fraktl\\u00f6sningar som \\u00e4r mest sannolika att passa dina kunder! Skapa din egen transport\\u00f6r eller l\\u00e4gg till en f\\u00e4rdig modul.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"H\\u00e4r \\u00e4r de transportalternativ som finns p\\u00e5 din butik idag.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Du kan erbjuda fler leveransalternativ genom att l\\u00e4gga till ytterligare transport\\u00f6rer\",\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"F\\u00f6rb\\u00e4ttra din butik med moduler\",\"subtitle\":{\"1\":\"L\\u00e4gg till nya funktioner och hantera befintliga med hj\\u00e4lp av moduler.\",\"2\":\"Vissa moduler \\u00e4r redan f\\u00f6rinstallerade, andra \\u00e4r gratis eller k\\u00f6pta moduler - titta genom v\\u00e5rt urval och se vad som \\u00e4r tillg\\u00e4ngligt!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Uppt\\u00e4ck v\\u00e5rt modulval i den f\\u00f6rsta fliken. Hantera dina moduler p\\u00e5 den andra och se notiser i den tredje fliken.\",\"options\":[\"savepoint\"],\"page\":\"index.php\\/module\\/catalog\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"\\n<div id=\\\"onboarding-welcome\\\" class=\\\"modal-header\\\">\\n  <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n  <h2 class=\\\"text-center text-md-center\\\">Nu \\u00e4r det din tur!<\\/h2>\\n  <p class=\\\"text-center text-md-center\\\">\\n    Du har sett det viktigaste, men det finns mer att uppt\\u00e4cka.<br \\/>\\n    Resurser f\\u00f6r att hj\\u00e4lpa dig att komma vidare:\\n  <\\/p>\\n  <div class=\\\"container-fluid\\\">\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n          <div class=\\\"starter-guide\\\"><\\/div>\\n          <span class=\\\"link\\\">Startguide<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n          <div class=\\\"forum\\\"><\\/div>\\n          <span class=\\\"link\\\">Forum<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"training\\\"><\\/div>\\n          <span class=\\\"link\\\">Utbildning<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"video-tutorial\\\"><\\/div>\\n          <span class=\\\"link\\\">Videohandledning<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n  <\\/div>\\n  <br \\/>\\n  <div class=\\\"text-center text-md-center\\\">\\n      <button class=\\\"btn btn-primary onboarding-button-next\\\">jag \\u00e4r redo<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/product\\/catalog\"}]}]}, 1, \"http://localhost/admin_yabs/index.php?controller=AdminWelcome&token=17febd69a7955cc3bc48463969fce0d0\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hey! Är du vilse?</p>    <p>För att fortsätta, klicka här:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Fortsätt</button>    </div>    <p>Om du vill avsluta introduktionen, klicka här:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Avsluta introduktionen</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Steg <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Nästa</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1200
        $this->displayBlock('content_header', $context, $blocks);
        // line 1201
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1202
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1203
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1204
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Åh nej!</h1>
  <p class=\"m-t-3\">
    Den mobila versionen av denna sida är inte tillgänglig ännu.
  </p>
  <p class=\"m-t-2\">
    Vänligen använd en dator för att komma åt denna sida, tills anpassningen är klar för mobilen.
  </p>
  <p class=\"m-t-2\">
    Tack.
  </p>
  <a href=\"http://localhost/admin_yabs/index.php?controller=AdminDashboard&amp;token=0a2797141355e036c36a5ce278f04014\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Tillbaka
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Laddningstid: \"></i> 7.212s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-SV&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Kontakta oss
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-SV&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Felrapporter
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-SV&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-SV&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Tillägg
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-SV&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Utbildning
      </a>
                </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-SV&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/sv/login?email=niklas.liljendahl%40yabs.se&amp;firstname=Niklas&amp;lastname=Liljendahl&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-SV&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin_yabs/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Koppla din butik till PrestaShop's marknadsplats för att automatiskt importera alla dina köpta moduler.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Har du inget konto?</h4>
\t\t\t\t\t\t<p class='text-justify'>Upptäckt kraften hos PrestaShop Addons! Utforska PrestaShop's officiella marknadsplats och hitta mer än 3500 innovation moduler och teman som optimerar din konvertering, ökar trafik, bygger kundlojalitet och maximerar din produktivitet</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Koppla upp till PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/sv/forgot-your-password\">Jag har glömt mitt lösenord</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/sv/login?email=niklas.liljendahl%40yabs.se&amp;firstname=Niklas&amp;lastname=Liljendahl&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-SV&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tSkapa ett konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Logga in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1369
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 85
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1200
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1201
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1202
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1203
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1369
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__ed563457b0128c138883f0e84d3b34f8b89449b40112f0953259936dc6a31ed5";
    }

    public function getDebugInfo()
    {
        return array (  1448 => 1369,  1443 => 1203,  1438 => 1202,  1433 => 1201,  1428 => 1200,  1419 => 85,  1411 => 1369,  1244 => 1204,  1241 => 1203,  1238 => 1202,  1235 => 1201,  1233 => 1200,  114 => 85,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__ed563457b0128c138883f0e84d3b34f8b89449b40112f0953259936dc6a31ed5", "");
    }
}
