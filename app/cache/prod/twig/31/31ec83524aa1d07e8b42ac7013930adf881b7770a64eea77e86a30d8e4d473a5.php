<?php

/* __string_template__8ed29334797e53fdc7feaa4bd9f6269c95410fb41eefbdcf1b7bc5b087614d7a */
class __TwigTemplate_c8c83a81a419e72832e47b7879624a878b5ca61ea005d3680f642878083fefd6 extends Twig_Template
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

<title>Hantera installerade moduler • YABS butik</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
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
    var token = '2d888953f70b5193123e1ab6852451b1';
    var token_admin_orders = 'eb3a0ebff110f6546bfbf809e0656249';
    var token_admin_customers = '825861f003c5f2f3ecadb05947b2c885';
    var token_admin_customer_threads = '0da800f2e99c34eb651a011d5036609b';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = 'ee426c955bb5330cf39b5d583bcf3ade';
    var choose_language_translate = 'VÄlj språk';
    var default_language = '2';
    var admin_modules_link = '/admin_yabs/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=gCNpRqNY_0dP8BItRXYfq6Cdy420vmPscEALq5qQCWk';
    var tab_modules_list = '';
    var update_success_msg = 'Uppdateringar framgångsrika';
    var errorLogin = 'PrestaShop kunde inte logga in på Addons, vänligen kontrollera dina uppgifter och din internetanslutning.';
    var search_product_msg = 'Sök produkt';
  </script>

      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin_yabs/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
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
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/admin_yabs/index.php?controller=AdminGamification&token=1e54b5fa8fa2c704499a9150a1633d6d';
\t\t\t\tvar current_id_tab = 45;
\t\t\t</script>

";
        // line 82
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminmodules\">



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
          <a class=\"dropdown-item active\"
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
         data-method=\"remove\"
         data-quicklink-id=\"5\"
         data-rand=\"116\"
         data-icon=\"icon-AdminParentModulesSf\"
         data-url=\"index.php/module/manage\"
         data-post-link=\"http://localhost/admin_yabs/index.php?controller=AdminQuickAccesses&token=8e225eac7934eaa4a75df178b0593cec\"
         data-prompt-text=\"Vänligen ange ett namn för genvägen:\"
         data-link=\" - Lista\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Ta bort från Snabbval
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
              Är du aktiv på sociala medier?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Inga nya meddelanden.<br>
              Verkar som alla dina kunder är nöjda :)
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
                  <a href=\"/admin_yabs/index.php/product/catalog?_token=gCNpRqNY_0dP8BItRXYfq6Cdy420vmPscEALq5qQCWk\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Katalog
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\">
                              <a href=\"/admin_yabs/index.php/product/catalog?_token=gCNpRqNY_0dP8BItRXYfq6Cdy420vmPscEALq5qQCWk\" class=\"link\"> Produkter
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
                              <a href=\"/admin_yabs/index.php/stock/?_token=gCNpRqNY_0dP8BItRXYfq6Cdy420vmPscEALq5qQCWk\" class=\"link\"> Stocks
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
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"42\">
              <span class=\"title\">Förbättra</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"43\">
                  <a href=\"/admin_yabs/index.php/module/catalog?_token=gCNpRqNY_0dP8BItRXYfq6Cdy420vmPscEALq5qQCWk\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Moduler
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/admin_yabs/index.php/module/catalog?_token=gCNpRqNY_0dP8BItRXYfq6Cdy420vmPscEALq5qQCWk\" class=\"link\"> Moduler &amp; Tjänster
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

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://localhost/admin_yabs/index.php?controller=AdminParentModulesSf&amp;token=8c45ee190e76d0a52a879e18d59d8aca\">Moduler</a>
                  </li>
      
      
    </ol>
  

  
    <h2 class=\"title\">
      Hantera installerade moduler    </h2>
  

  
    <div class=\"toolbar-icons\">
                        
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Ladda upp en modul\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Ladda upp en modul</span>
          </a>
                                
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Anslut till Addons marknadsplats\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Anslut till Addons marknadsplats</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Hjälp\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/admin_yabs/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fsv%252Fdoc%252FAdminModules%253Fversion%253D1.7.2.2%2526country%253Dsv/Hj%C3%A4lp?_token=gCNpRqNY_0dP8BItRXYfq6Cdy420vmPscEALq5qQCWk\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Hjälp</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\">
                <a class=\"tab\"
   href=\"/admin_yabs/index.php/module/catalog?_token=gCNpRqNY_0dP8BItRXYfq6Cdy420vmPscEALq5qQCWk\">Val</a>

                <a class=\"tab current\"
   href=\"/admin_yabs/index.php/module/manage?_token=gCNpRqNY_0dP8BItRXYfq6Cdy420vmPscEALq5qQCWk\">Installerade moduler</a>

                <a class=\"tab\"
   href=\"/admin_yabs/index.php/module/notifications?_token=gCNpRqNY_0dP8BItRXYfq6Cdy420vmPscEALq5qQCWk\">Meddelanden  <div class=\"notification-container\">
    <span class=\"notification-counter\">4</span>
  </div>
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

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1145
        $this->displayBlock('content_header', $context, $blocks);
        // line 1146
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1147
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1148
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1149
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
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Laddningstid: \"></i> 25.668s</span>
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
        // line 1314
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1145
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1146
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1147
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1148
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1314
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
        return "__string_template__8ed29334797e53fdc7feaa4bd9f6269c95410fb41eefbdcf1b7bc5b087614d7a";
    }

    public function getDebugInfo()
    {
        return array (  1393 => 1314,  1388 => 1148,  1383 => 1147,  1378 => 1146,  1373 => 1145,  1364 => 82,  1356 => 1314,  1189 => 1149,  1186 => 1148,  1183 => 1147,  1180 => 1146,  1178 => 1145,  111 => 82,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__8ed29334797e53fdc7feaa4bd9f6269c95410fb41eefbdcf1b7bc5b087614d7a", "");
    }
}
