<?php

/* __string_template__f90572babd6ba439fb755d865d5339c499bb510071fa1b91c05f0913f0074aeb */
class __TwigTemplate_c9a18ddf22cd8f9e21306449d4f00673e89a81df0c4eb434318857e31b513521 extends Twig_Template
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
<html lang=\"br\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Produtos • Feira da Madrugada SP</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'br';
    var lang_is_rtl = '0';
    var full_language_code = 'pt-br';
    var full_cldr_language_code = 'pt-BR';
    var country_iso_code = 'BR';
    var _PS_VERSION_ = '1.7.5.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Novo pedido foi feito em sua loja';
    var order_number_msg = 'Número da encomenda: ';
    var total_msg = 'Total: ';
    var from_msg = 'De: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Um novo cliente se registrou em sua loja';
    var customer_name_msg = 'Nome do cliente: ';
    var new_msg = 'Uma nova nova mensagem foi postada em sua loja.';
    var see_msg = 'Leia esta mensagem';
    var token = 'f6bb003c6c0c74e33d1f8365ee036d19';
    var token_admin_orders = '63e6e7b2a983026ebd6ccd2989216ef6';
    var token_admin_customers = 'a293fa1c6f7fa62b355b263e508d29a7';
    var token_admin_customer_threads = '1388105ddc186bb073513857f394f6d2';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '3fa127ecd62b194501a62061a05b4b19';
    var choose_language_translate = 'Escolha idioma';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin202nfwfmw/index.php/improve/modules/catalog/recommended?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Atualizado com sucesso';
    var errorLogin = 'O PrestaShop não conseguiu autenticar-se nos Addons. Por favor, verifique as suas credenciais e sua conexão à internet.';
    var search_product_msg = 'Procure um produto';
  </script>

      <link href=\"/prestashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin202nfwfmw/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin202nfwfmw/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin202nfwfmw\\/\";
var baseDir = \"\\/prestashop\\/\";
var currency = {\"iso_code\":\"BRL\",\"sign\":\"R\$\",\"name\":\"Real brasileiro\",\"format\":\"\\u00a4#,##0.00\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin202nfwfmw/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=1.7.5.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=1.7.5.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin202nfwfmw/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin202nfwfmw/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminGamification&token=cc8e17276bfa6f1c88241e56456778fd';
\t\t\t\tvar current_id_tab = 10;
\t\t\t</script>

";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-br adminproducts\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminDashboard&amp;token=fcea49ae975b3c3fd9a0cffe863bc043\"></a>
    <span id=\"shop_version\">1.7.5.0</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acesso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=f99707ddc5650691b7494f152373fc63\"
                 data-item=\"Avaliação do catálogo\"
      >Avaliação do catálogo</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin202nfwfmw/index.php/improve/modules/manage?token=6006d2ce68e2e19daaade70c3cac9b83\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminCategories&amp;addcategory&amp;token=bb667582a007aa467d9291b95700e205\"
                 data-item=\"Nova Categoria\"
      >Nova Categoria</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=bbe048187f7a56255e5060048a078474\"
                 data-item=\"Novo Voucher\"
      >Novo Voucher</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminOrders&amp;token=63e6e7b2a983026ebd6ccd2989216ef6\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin202nfwfmw/index.php/sell/catalog/products/new?token=6006d2ce68e2e19daaade70c3cac9b83\"
                 data-item=\"Produto novo\"
      >Produto novo</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"142\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products/last\"
        data-post-link=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminQuickAccesses&token=29d5dba86d17b3c0886ad34f285b7415\"
        data-prompt-text=\"Atribua um nome a este atalho:\"
        data-link=\"Produtos - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adicionar a página atual ao Acesso Rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminQuickAccesses&token=29d5dba86d17b3c0886ad34f285b7415\">
      <i class=\"material-icons\">settings</i>
      Gerir atalhos
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin202nfwfmw/index.php?controller=AdminSearch&amp;token=850c2e2ffed37e215d63ed02c06bdc15\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Pesquisar (por ex.: referência do produto, nome do cliente…)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        em todo lugar
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"em todo lugar\" href=\"#\" data-value=\"0\" data-placeholder=\"O que está procurando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> em todo lugar</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome do produto, SKU, referência...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes Nome\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nome...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes Nome</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por endereço ip\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por endereço IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID do pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da fatura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faturas</a>
        <a class=\"dropdown-item\" data-item=\"Carrinhos de Compras\" href=\"#\" data-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrinhos de Compras</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome do módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">PESQUISAR</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Ver minha loja
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
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
              Encomendas<span id=\"_nb_new_orders_\"></span>
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
              Clientes<span id=\"_nb_new_customers_\"></span>
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
              Mensagens<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhuma nova encomenda por enquanto :(<br>
              Já consultou a sua taxa de conversão recentemente?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo cliente por enquanto :(<br>
              Já considerou a venda em mercados?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Sem nova mensagem por enquanto.<br>
              Há mais tempo livre para outras coisas!
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registado <strong>_date_add_</strong>
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
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/jeferson.ivo%40gmail.com.jpg\" />
      <span>Jeferson Ivo</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminEmployees&amp;id_employee=1&amp;updateemployee=1&amp;token=3fa127ecd62b194501a62061a05b4b19\">
      <i class=\"material-icons\">settings_applications</i>
      O seu perfil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminLogin&amp;logout=1&amp;token=afa5fe68046e7423e66fdb5ee5ed4c8d\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Sair</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminDashboard&amp;token=fcea49ae975b3c3fd9a0cffe863bc043\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Painel</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminOrders&amp;token=63e6e7b2a983026ebd6ccd2989216ef6\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Pedidos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminOrders&amp;token=63e6e7b2a983026ebd6ccd2989216ef6\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/sell/orders/invoices/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Faturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminSlip&amp;token=0e4ff3394d9e71fb0af59604b473a20a\" class=\"link\"> Comprovantes de créditos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/sell/orders/delivery-slips/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Comprovantes de entregas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminCarts&amp;token=e93b13e7cc8de3a7c88f92944c25028c\" class=\"link\"> Carrinho de compras
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/prestashop/admin202nfwfmw/index.php/sell/catalog/products?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catálogo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/sell/catalog/products?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Produtos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminCategories&amp;token=bb667582a007aa467d9291b95700e205\" class=\"link\"> Categorias
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminTracking&amp;token=776d93640d8d553ab69f73849b08f6bb\" class=\"link\"> Monitoramento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminAttributesGroups&amp;token=8121de268a8548c8aa0f0e4503906284\" class=\"link\"> Atributos e Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminManufacturers&amp;token=8c583770b4fdfda018b2b56487d795fb\" class=\"link\"> Marcas e Fornecedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminAttachments&amp;token=3768d6e6443e9650bf73fb8072c8ef2d\" class=\"link\"> Arquivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminCartRules&amp;token=bbe048187f7a56255e5060048a078474\" class=\"link\"> Descontos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/sell/stocks/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminCustomers&amp;token=a293fa1c6f7fa62b355b263e508d29a7\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminCustomers&amp;token=a293fa1c6f7fa62b355b263e508d29a7\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminAddresses&amp;token=5c6dad07354bb621657cf96631bb88b0\" class=\"link\"> Endereços
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminCustomerThreads&amp;token=1388105ddc186bb073513857f394f6d2\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Atendimento ao Cliente
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminCustomerThreads&amp;token=1388105ddc186bb073513857f394f6d2\" class=\"link\"> Atendimento ao Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminOrderMessage&amp;token=0db7dd188a9c8f1086f9bbf13224ecea\" class=\"link\"> Mensagens de pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminReturn&amp;token=85100e987f70f1b0d6ab30d442f96173\" class=\"link\"> Devoluções de Mercadorias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminStats&amp;token=f99707ddc5650691b7494f152373fc63\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estatísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Melhorar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminPsMboModule&amp;token=5c07e92f24e36e2fbe01bbfd3d0b7268\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminPsMboModule&amp;token=5c07e92f24e36e2fbe01bbfd3d0b7268\" class=\"link\"> Module Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/improve/modules/manage?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminThemes&amp;token=f2a9ef772b4d00e3259faab313814020\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Design
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminThemes&amp;token=f2a9ef772b4d00e3259faab313814020\" class=\"link\"> Tema Gráfico e Logótipo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminPsMboTheme&amp;token=9e183c85fc93a32d09b88a17612c4113\" class=\"link\"> Catálogo do Tema Gráfico
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminCmsContent&amp;token=02b7ba20a152297e99e28aa019a9b81a\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/improve/design/modules/positions/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Posições
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminImages&amp;token=429a8f7228b4b5675ff435d8671f473a\" class=\"link\"> Definições de Imagem
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminLinkWidget&amp;token=2877d57919409d0c962ba58855217d12\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"58\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminCarriers&amp;token=045624faa008e3b422842f73a44413bb\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Frete
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminCarriers&amp;token=045624faa008e3b422842f73a44413bb\" class=\"link\"> Transportadoras
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminShipping\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/improve/shipping/preferences?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Preferências
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"61\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/prestashop/admin202nfwfmw/index.php/improve/payment/payment_methods?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pagamento
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-61\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminPayment\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/improve/payment/payment_methods?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Métodos de Pagamento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/improve/payment/preferences?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Preferências
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"64\" id=\"subtab-AdminInternational\">
                  <a href=\"/prestashop/admin202nfwfmw/index.php/improve/international/localization/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internacional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-64\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/improve/international/localization/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Localização
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"70\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminZones&amp;token=138003b60de7dbd0ac8feaa86b5d1a27\" class=\"link\"> Localizações
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminTaxes&amp;token=0543c8bff8159a11d3e5bcbc3f004dca\" class=\"link\"> Taxas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\" id=\"subtab-AdminTranslations\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/improve/international/translations/settings?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Traduções
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"78\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"79\" id=\"subtab-ShopParameters\">
                  <a href=\"/prestashop/admin202nfwfmw/index.php/configure/shop/preferences/preferences?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parâmetros da Loja
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-79\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/configure/shop/preferences/preferences?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Geral
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"83\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/configure/shop/order-preferences/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Definições da Encomenda
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/configure/shop/product-preferences/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Produtos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"87\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/configure/shop/customer-preferences/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Definições do cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"91\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminContacts&amp;token=8c1d0d4eb663a44ca769bf62b3959751\" class=\"link\"> Contato
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"94\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/configure/shop/seo-urls/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Tráfego e SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminSearchConf&amp;token=642228f29649b48abb4984ddd5cb12f1\" class=\"link\"> Busca
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminGamification&amp;token=cc8e17276bfa6f1c88241e56456778fd\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"101\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/prestashop/admin202nfwfmw/index.php/configure/advanced/system-information/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parâmetros Avançados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-101\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminInformation\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/configure/advanced/system-information/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Informação
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminPerformance\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/configure/advanced/performance/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Desempenho
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/configure/advanced/administration/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Administração
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminEmails\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/configure/advanced/emails/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminImport\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/configure/advanced/import/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminEmployees&amp;token=3fa127ecd62b194501a62061a05b4b19\" class=\"link\"> Empregados
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminRequestSql&amp;token=0541c6a368a8abee3a92363360e9378a\" class=\"link\"> Base de dados
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminLogs\">
                              <a href=\"/prestashop/admin202nfwfmw/index.php/configure/advanced/logs/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminWebservice&amp;token=0d668261ae713714f9bd74324d338784\" class=\"link\"> WebService
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Lançar a loja!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">36%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:35.714285714286%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Continuar</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Parar o Enbarque</a>
  </div>
</div>

</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catálogo</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin202nfwfmw/index.php/sell/catalog/products?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\" aria-current=\"page\">Produtos</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Produtos          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminPsMboModule&token=5c07e92f24e36e2fbe01bbfd3d0b7268';
    var controller = 'AdminProducts';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/prestashop/admin202nfwfmw/index.php/sell/catalog/products/new?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\"                  title=\"Criar um novo produto: CTRL+P\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">add_circle_outline</i>
                  Produto novo
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/prestashop/admin202nfwfmw/index.php/improve/modules/catalog?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\"                title=\"Recommended Modules\"
                              >
                Recommended Modules
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin202nfwfmw/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fbr%252Fdoc%252FAdminProducts%253Fversion%253D1.7.5.0%2526country%253Dbr/Ajuda?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\"
                   id=\"product_form_open_help\"
                >
                  Ajuda
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
    
    <div class=\"content-div  \">

      
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continuar</button>
  <a class=\"onboarding-button-shut-down\">Saltar este tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(5, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Seja bem-vindo \\u00e0 sua loja!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Ol\\u00e1! O meu nome \\u00e9 Preston e eu estou aqui para ser o teu guia.<\\/p>\\n    <p>Vai descobrir alguns passos essenciais antes de poder lan\\u00e7ar a sua loja:\\n    Crie o seu primeiro produto, customize a sua loja, configure envios e pagamentos...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Vamos come\\u00e7ar!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Depois<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Come\\u00e7ar<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/prestashop\\/admin202nfwfmw\\/index.php?controller=AdminDashboard&token=fcea49ae975b3c3fd9a0cffe863bc043\"}]},{\"title\":\"Vamos l\\u00e1 criar o teu primeiro produto\",\"subtitle\":{\"1\":\"O que gostaria de dizer sobre este produto? Pense no que os seus clientes v\\u00e3o querer saber.\",\"2\":\"Adicione informa\\u00e7\\u00e3o clara e atractiva. N\\u00e3o se preocupe: pode edit\\u00e1-la depois :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"D\\u00ea um nome atraente ao seu produto.\",\"options\":[\"savepoint\"],\"page\":[\"\\/prestashop\\/admin202nfwfmw\\/index.php\\/sell\\/catalog\\/products\\/new?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Preencha os detalhes essenciais nesta tab. As outras tabs s\\u00e3o para informa\\u00e7\\u00e3o avan\\u00e7ada.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Adicione uma ou mais fotografias para tornar o seu produto mais tentador!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Por quanto \\u00e9 que o quer vender?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yey! Acabou de criar o seu primeiro produto. Tem bom aspecto, n\\u00e3o tem?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"D\\u00ea \\u00e0 sua loja a sua pr\\u00f3pria identidade\",\"subtitle\":{\"1\":\"Qual \\u00e9 o aspecto que quer que a sua loja tenha? O que \\u00e9 que a torna t\\u00e3o especial?\",\"2\":\"Customize o seu tema ou escolha o melhor design atrav\\u00e9s do nosso cat\\u00e1logo de temas.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Uma boa maneira de come\\u00e7ar \\u00e9 adicionar o seu logo aqui!\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/prestashop\\/admin202nfwfmw\\/index.php?controller=AdminThemes&token=f2a9ef772b4d00e3259faab313814020\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Se quer algo realmente especial, d\\u00ea uma vista de olhos no cat\\u00e1logo de temas!\",\"page\":\"\\/prestashop\\/admin202nfwfmw\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Deixe sua loja pronta para receber pagamentos\",\"subtitle\":{\"1\":\"Como \\u00e9 que quer que os seus clientes paguem?\",\"2\":\"Adapte a sua oferta ao seu mercado: adicione os m\\u00e9todos de pagamento mais populares para os seus clientes!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Estes m\\u00e9todos de pagamento j\\u00e1 est\\u00e3o dispon\\u00edveis para os seus clientes.\",\"options\":[\"savepoint\"],\"page\":\"\\/prestashop\\/admin202nfwfmw\\/index.php\\/improve\\/payment\\/payment_methods?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"E pode escolher adicionar outros m\\u00e9todos de pagamentos aqui!\",\"page\":\"\\/prestashop\\/admin202nfwfmw\\/index.php\\/improve\\/payment\\/payment_methods?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1), .card:eq(1) .module-item-list div:eq(0) div:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Escolha as op\\u00e7\\u00f5es de envio\",\"subtitle\":{\"1\":\"Como \\u00e9 que quer entregar os seus produtos?\",\"2\":\"Selecione as op\\u00e7\\u00f5es de envio que melhor satisfa\\u00e7am os seus clientes! Crie a sua pr\\u00f3pria transportadora ou adicione um m\\u00f3dulo pr\\u00e9-feito.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Aqui est\\u00e3o os m\\u00e9todos de envio dispon\\u00edveis na sua loja hoje.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/prestashop\\/admin202nfwfmw\\/index.php?controller=AdminCarriers&token=045624faa008e3b422842f73a44413bb\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Pode oferecer mais op\\u00e7\\u00f5es de envio ao configurar transportadoras adicionais\",\"page\":\"http:\\/\\/localhost\\/prestashop\\/admin202nfwfmw\\/index.php?controller=AdminCarriers&token=045624faa008e3b422842f73a44413bb\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Melhore a sua loja com m\\u00f3dulos\",\"subtitle\":{\"1\":\"Adicione novas funcionalidades e altere as j\\u00e1 existentes atrav\\u00e9s de m\\u00f3dulos.\",\"2\":\"Alguns m\\u00f3dulos j\\u00e1 est\\u00e3o pr\\u00e9-instalados, outros m\\u00f3dulos podem ser gratuitos ou pagos - procure o que deseja selecionar e descubra o que est\\u00e1 dispon\\u00edvel!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Descubra a nossa sele\\u00e7\\u00e3o de m\\u00f3dulos na primeira tab. Controle os seus m\\u00f3dulos na segunda e esteja atento \\u00e0s notifica\\u00e7\\u00f5es dos mesmos na terceira.\",\"options\":[\"savepoint\"],\"page\":\"\\/prestashop\\/admin202nfwfmw\\/index.php\\/improve\\/modules\\/catalog?_token=C8EpaAh9nJP5kHFjMrfyWjOF_Sn8508Ajiw9gMfuV3I\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">\\u00c9 a tua vez!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          J\\u00e1 viste o essential mas h\\u00e1 muito mais a explorar.<br \\/>\\n          Alguns recursos para o ajudar a continuar:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Guia de In\\u00edcio R\\u00e1pido<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">F\\u00f3rum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Treinamento<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Tutorial em v\\u00eddeo<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Estou pronto<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/improve\\/modules\\/catalog\"}]}]}, 0, \"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminWelcome&token=a704e73c253912f36ebb6ff27cf4ecad\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Olá! Estás perdido?</p>    <p>Para continuar, clique aqui:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continuar</button>    </div>    <p>Se quiser parar o tutorial definitivamente, carregue aqui:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Terminar o tutorial de boas vindas</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Etapa <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Próximo</button></div>');
    
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
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1214
        $this->displayBlock('content_header', $context, $blocks);
        // line 1215
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1216
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1217
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1218
        echo "
           
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Módulos e Serviços Recomendados</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, não!</h1>
  <p class=\"mt-3\">
    A versão móvel desta página ainda não está disponível.
  </p>
  <p class=\"mt-2\">
    Utilize um computador para obter acesso a esta página, até ser adaptada para um telemóvel.
  </p>
  <p class=\"mt-2\">
    Obrigado.
  </p>
  <a href=\"http://localhost/prestashop/admin202nfwfmw/index.php?controller=AdminDashboard&amp;token=fcea49ae975b3c3fd9a0cffe863bc043\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Voltar
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-BR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/br/login?email=jeferson.ivo%40gmail.com&amp;firstname=Jeferson&amp;lastname=Ivo&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-BR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop/admin202nfwfmw/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Ligue a sua loja ao mercado PrestaShop para poder importar automaticamente todas as suas compras Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Não tem uma conta?</h4>
\t\t\t\t\t\t<p class='text-justify'>Descubra as vantagens do PrestaShop Addons! Explore o MarketPlace Oficial do PrestaShop e encontre mais de 3.500 módulos inovadores e temas que ajudam a otimizar as taxas de conversão, aumentar o tráfego na loja, desenvolver a fidelidade dos clientes e maximizar a sua produtividade</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectar ao PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/br/forgot-your-password\">Esqueci minha senha</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/br/login?email=jeferson.ivo%40gmail.com&amp;firstname=Jeferson&amp;lastname=Ivo&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-BR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCriar uma conta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Entrar
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
        // line 1341
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 84
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1214
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1215
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1216
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1217
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1341
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
        return "__string_template__f90572babd6ba439fb755d865d5339c499bb510071fa1b91c05f0913f0074aeb";
    }

    public function getDebugInfo()
    {
        return array (  1420 => 1341,  1415 => 1217,  1410 => 1216,  1405 => 1215,  1400 => 1214,  1391 => 84,  1383 => 1341,  1258 => 1218,  1255 => 1217,  1252 => 1216,  1249 => 1215,  1247 => 1214,  113 => 84,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__f90572babd6ba439fb755d865d5339c499bb510071fa1b91c05f0913f0074aeb", "");
    }
}
