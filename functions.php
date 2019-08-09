<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Include all the needed files
 *
 * (!) Note for Clients: please, do not modify this or other theme's files. Use child theme instead!
 */

if ( ! defined( 'US_ACTIVATION_THEMENAME' ) ) {
	define( 'US_ACTIVATION_THEMENAME', 'Impreza' );
}

$us_theme_supports = array(
	'plugins' => array(
		'js_composer' => '/framework/plugins-support/js_composer/js_composer.php',
		'Ultimate_VC_Addons' => '/framework/plugins-support/Ultimate_VC_Addons.php',
		'revslider' => '/framework/plugins-support/revslider.php',
		'contact-form-7' => NULL,
		'gravityforms' => '/framework/plugins-support/gravityforms.php',
		'woocommerce' => '/framework/plugins-support/woocommerce/woocommerce.php',
		'codelights' => '/framework/plugins-support/codelights.php',
		'wpml' => '/framework/plugins-support/wpml.php',
		'bbpress' => '/framework/plugins-support/bbpress.php',
		'tablepress' => '/framework/plugins-support/tablepress.php',
		'the-events-calendar' => '/framework/plugins-support/the_events_calendar.php',
		'us-header-builder' => '/framework/plugins-support/us_header_builder.php',
		'tiny_mce' => '/framework/plugins-support/tiny_mce.php',
	),
);

require dirname( __FILE__ ) . '/framework/framework.php';

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}

//Judges
add_action( 'init', 'register_post_judge', 0 );
function register_post_judge() {
    $args = array(
        'label'  => _x(
            'Judge', 'Post Type General Name', 'text_domain' ),
        'labels' => array(
            'name' => _x(
                'Judge', 'Post Type General Name', 'text_domain' ),
            'singular_name' => _x(
                'Judge', 'Post Type Singular Name', 'text_domain' ),
            'add_new' => __( 'Add', 'text_domain' ),
            'add_new_item' => __( 'Add', 'text_domain' ),
            'edit_item' => __( 'Edit', 'text_domain' ),
            'new_item' => __( 'New', 'text_domain' ),
            'view_item' => __( 'View', 'text_domain' ),
            'search_items' => __( 'search', 'text_domain' ),
            'not_found' => __( 'not found', 'text_domain' ),
            'not_found_in_trash' => __( 'not found in trash', 'text_domain' ),
            'parent_item_colon' => null,
            'all_items' => __( 'All', 'text_domain' ),
            'archives' => __( 'archives', 'text_domain' ),
            'insert_into_item' => __( 'insert', 'text_domain' ),
            'uploaded_to_this_item' => _x(
                'uploaded to', 'text_domain' ),
            'featured_image' => __( 'featured', 'text_domain' ),
            'set_featured_image' => __( 'set featured', 'text_domain' ),
            'remove_featured_image' => __( 'remove featured', 'text_domain' ),
            'use_featured_image' => __( 'use featured', 'text_domain' ),
            'menu_name' => __( 'Judge', 'text_domain' ),
            'name_admin_bar' => __( 'Judge', 'text_domain' ),
            'items_list' => __( 'List', 'text_domain' ),
            'items_list_navigation' => __( 'Nav', 'text_domain' ),
        ),
        'description' => '',
        'public' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'map_meta_cap' => null,
        'hierarchical' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'custom-fields',
            'revisions',
            'page-attributes',
            'post-formats',
        ),
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'judge',
            'with_front' => true,
            'feeds' => false,
            'pages' => true,
        ),
        'permalink_epmask' => EP_PERMALINK,
        'query_var' => true,
        'can_export' => true,
        'delete_with_user' => null,
        'show_in_rest' => false,
        'rest_base' => 'judge',
        '_builtin' => false,
    );
    register_post_type( 'judge', $args );
}

//Cases
add_action( 'init', 'register_post_cases', 0 );
function register_post_cases() {
    $args = array(
        'label'  => _x(
            'Cases', 'Post Type General Name', 'text_domain' ),
        'labels' => array(
            'name' => _x(
                'Cases', 'Post Type General Name', 'text_domain' ),
            'singular_name' => _x(
                'Cases', 'Post Type Singular Name', 'text_domain' ),
            'add_new' => __( 'Add', 'text_domain' ),
            'add_new_item' => __( 'Add', 'text_domain' ),
            'edit_item' => __( 'Edit', 'text_domain' ),
            'new_item' => __( 'New', 'text_domain' ),
            'view_item' => __( 'View', 'text_domain' ),
            'search_items' => __( 'search', 'text_domain' ),
            'not_found' => __( 'not found', 'text_domain' ),
            'not_found_in_trash' => __( 'not found in trash', 'text_domain' ),
            'parent_item_colon' => null,
            'all_items' => __( 'All', 'text_domain' ),
            'archives' => __( 'archives', 'text_domain' ),
            'insert_into_item' => __( 'insert', 'text_domain' ),
            'uploaded_to_this_item' => _x(
                'uploaded to', 'text_domain' ),
            'featured_image' => __( 'featured', 'text_domain' ),
            'set_featured_image' => __( 'set featured', 'text_domain' ),
            'remove_featured_image' => __( 'remove featured', 'text_domain' ),
            'use_featured_image' => __( 'use featured', 'text_domain' ),
            'menu_name' => __( 'Cases', 'text_domain' ),
            'name_admin_bar' => __( 'Cases', 'text_domain' ),
            'items_list' => __( 'List', 'text_domain' ),
            'items_list_navigation' => __( 'Nav', 'text_domain' ),
        ),
        'description' => '',
        'public' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-book',
        'map_meta_cap' => null,
        'hierarchical' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'custom-fields',
            'revisions',
            'page-attributes',
            'post-formats',
        ),
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'cases',
            'with_front' => true,
            'feeds' => false,
            'pages' => true,
        ),
        'permalink_epmask' => EP_PERMALINK,
        'query_var' => true,
        'can_export' => true,
        'delete_with_user' => null,
        'show_in_rest' => false,
        'rest_base' => 'cases',
        '_builtin' => false,
    );
    register_post_type( 'cases', $args );
}

//Lids
add_action( 'init', 'register_post_leads', 0 );
function register_post_leads() {
    $args = array(
        'label'  => _x(
            'Leads', 'Post Type General Name', 'text_domain' ),
        'labels' => array(
            'name' => _x(
                'Leads', 'Post Type General Name', 'text_domain' ),
            'singular_name' => _x(
                'Leads', 'Post Type Singular Name', 'text_domain' ),
            'add_new' => __( 'Add', 'text_domain' ),
            'add_new_item' => __( 'Add', 'text_domain' ),
            'edit_item' => __( 'Edit', 'text_domain' ),
            'new_item' => __( 'New', 'text_domain' ),
            'view_item' => __( 'View', 'text_domain' ),
            'search_items' => __( 'search', 'text_domain' ),
            'not_found' => __( 'not found', 'text_domain' ),
            'not_found_in_trash' => __( 'not found in trash', 'text_domain' ),
            'parent_item_colon' => null,
            'all_items' => __( 'All', 'text_domain' ),
            'archives' => __( 'archives', 'text_domain' ),
            'insert_into_item' => __( 'insert', 'text_domain' ),
            'uploaded_to_this_item' => _x(
                'uploaded to', 'text_domain' ),
            'featured_image' => __( 'featured', 'text_domain' ),
            'set_featured_image' => __( 'set featured', 'text_domain' ),
            'remove_featured_image' => __( 'remove featured', 'text_domain' ),
            'use_featured_image' => __( 'use featured', 'text_domain' ),
            'menu_name' => __( 'Leads', 'text_domain' ),
            'name_admin_bar' => __( 'Leads', 'text_domain' ),
            'items_list' => __( 'List', 'text_domain' ),
            'items_list_navigation' => __( 'Nav', 'text_domain' ),
        ),
        'description' => '',
        'public' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-portfolio',
        'map_meta_cap' => null,
        'hierarchical' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'custom-fields',
            'revisions',
            'page-attributes',
            'post-formats',
        ),
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'lids',
            'with_front' => true,
            'feeds' => false,
            'pages' => true,
        ),
        'permalink_epmask' => EP_PERMALINK,
        'query_var' => true,
        'can_export' => true,
        'delete_with_user' => null,
        'show_in_rest' => false,
        'rest_base' => 'lids',
        '_builtin' => false,
    );
    register_post_type( 'lids', $args );
}
//Second leads
add_action( 'init', 'register_post_second_leads', 0 );
function register_post_second_leads() {
    $args = array(
        'label'  => _x(
            'Second Leads', 'Post Type General Name', 'text_domain' ),
        'labels' => array(
            'name' => _x(
                'Second Leads', 'Post Type General Name', 'text_domain' ),
            'singular_name' => _x(
                'Second Leads', 'Post Type Singular Name', 'text_domain' ),
            'add_new' => __( 'Add', 'text_domain' ),
            'add_new_item' => __( 'Add', 'text_domain' ),
            'edit_item' => __( 'Edit', 'text_domain' ),
            'new_item' => __( 'New', 'text_domain' ),
            'view_item' => __( 'View', 'text_domain' ),
            'search_items' => __( 'search', 'text_domain' ),
            'not_found' => __( 'not found', 'text_domain' ),
            'not_found_in_trash' => __( 'not found in trash', 'text_domain' ),
            'parent_item_colon' => null,
            'all_items' => __( 'All', 'text_domain' ),
            'archives' => __( 'archives', 'text_domain' ),
            'insert_into_item' => __( 'insert', 'text_domain' ),
            'uploaded_to_this_item' => _x(
                'uploaded to', 'text_domain' ),
            'featured_image' => __( 'featured', 'text_domain' ),
            'set_featured_image' => __( 'set featured', 'text_domain' ),
            'remove_featured_image' => __( 'remove featured', 'text_domain' ),
            'use_featured_image' => __( 'use featured', 'text_domain' ),
            'menu_name' => __( 'Second Leads', 'text_domain' ),
            'name_admin_bar' => __( 'Second Leads', 'text_domain' ),
            'items_list' => __( 'List', 'text_domain' ),
            'items_list_navigation' => __( 'Nav', 'text_domain' ),
        ),
        'description' => '',
        'public' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-portfolio',
        'map_meta_cap' => null,
        'hierarchical' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'custom-fields',
            'revisions',
            'page-attributes',
            'post-formats',
        ),
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'second_lids',
            'with_front' => true,
            'feeds' => false,
            'pages' => true,
        ),
        'permalink_epmask' => EP_PERMALINK,
        'query_var' => true,
        'can_export' => true,
        'delete_with_user' => null,
        'show_in_rest' => false,
        'rest_base' => 'second_lids',
        '_builtin' => false,
    );
    register_post_type( 'second_lids', $args );
}

add_action( 'init', 'register_post_third_leads', 0 );
function register_post_third_leads() {
    $args = array(
        'label'  => _x(
            'Third Leads', 'Post Type General Name', 'text_domain' ),
        'labels' => array(
            'name' => _x(
                'Third Leads', 'Post Type General Name', 'text_domain' ),
            'singular_name' => _x(
                'Third Leads', 'Post Type Singular Name', 'text_domain' ),
            'add_new' => __( 'Add', 'text_domain' ),
            'add_new_item' => __( 'Add', 'text_domain' ),
            'edit_item' => __( 'Edit', 'text_domain' ),
            'new_item' => __( 'New', 'text_domain' ),
            'view_item' => __( 'View', 'text_domain' ),
            'search_items' => __( 'search', 'text_domain' ),
            'not_found' => __( 'not found', 'text_domain' ),
            'not_found_in_trash' => __( 'not found in trash', 'text_domain' ),
            'parent_item_colon' => null,
            'all_items' => __( 'All', 'text_domain' ),
            'archives' => __( 'archives', 'text_domain' ),
            'insert_into_item' => __( 'insert', 'text_domain' ),
            'uploaded_to_this_item' => _x(
                'uploaded to', 'text_domain' ),
            'featured_image' => __( 'featured', 'text_domain' ),
            'set_featured_image' => __( 'set featured', 'text_domain' ),
            'remove_featured_image' => __( 'remove featured', 'text_domain' ),
            'use_featured_image' => __( 'use featured', 'text_domain' ),
            'menu_name' => __( 'Third Leads', 'text_domain' ),
            'name_admin_bar' => __( 'Third Leads', 'text_domain' ),
            'items_list' => __( 'List', 'text_domain' ),
            'items_list_navigation' => __( 'Nav', 'text_domain' ),
        ),
        'description' => '',
        'public' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-portfolio',
        'map_meta_cap' => null,
        'hierarchical' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'custom-fields',
            'revisions',
            'page-attributes',
            'post-formats',
        ),
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'third_lids',
            'with_front' => true,
            'feeds' => false,
            'pages' => true,
        ),
        'permalink_epmask' => EP_PERMALINK,
        'query_var' => true,
        'can_export' => true,
        'delete_with_user' => null,
        'show_in_rest' => false,
        'rest_base' => 'third_lids',
        '_builtin' => false,
    );
    register_post_type( 'third_lids', $args );
}

function my_styles() {

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, false );
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_styles' );

add_action('wp_ajax_success_payment', 'success_payment');
add_action('wp_ajax_nopriv_success_payment', 'success_payment');
function success_payment(){

    $lid_id = $_GET['lid_id'];

    if($lid_id){
        update_field('paid','1', $lid_id);
    }
    die();

}
add_action('wp_ajax_delete_lid', 'delete_lid');
add_action('wp_ajax_nopriv_delete_lid', 'delete_lid');
function delete_lid(){

    $lid_id = $_GET['lid_id'];

    if($lid_id){
       // wp_delete_post( $lid_id);

        $updated = wp_update_post(
            array(
                'ID' => $lid_id,
                'post_status' => 'draft'

            )
        );
    }
    die();

}




function PostVars($vars,$PostVarsURL)
{
    $urlencoded = http_build_query($vars);
    #init curl connection
    if( function_exists( "curl_init" ))
    {
        $CR = curl_init();
        curl_setopt($CR, CURLOPT_URL, $PostVarsURL);
        curl_setopt($CR, CURLOPT_POST, 1);
        curl_setopt($CR, CURLOPT_FAILONERROR, true);
        curl_setopt($CR, CURLOPT_POSTFIELDS, $urlencoded );
        curl_setopt($CR, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($CR, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($CR, CURLOPT_FAILONERROR,true);
        #actual curl execution perfom
        $r = curl_exec( $CR );
        $error = curl_error ( $CR );
        # some error , send email to developer
        if( !empty( $error )) {

            echo $error;

            die();
        }
        curl_close( $CR );
        return $r;
    }
    else
    {
        echo "No curl_init" ;
        die();
    }
}

function cardcomPay($new_lid, $title_lid, $finishsumm, $client_email, $client_first_name, $client_last_name ){

    $lang = 'he';
    $currency = 'ils';

    /*For Cardcom*/

    if ( $currency == 'usd' ) {
        $currency_pay_card = '2';
    }
    elseif ($currency =='eur'){
        $currency_pay_card = '978';
    }
    elseif ( $currency == 'ils'){
        $currency_pay_card = '1';
    }

    #Global Definetions :
    $TerminalNumber =  get_field('terminal_number', 'options'); // 1000; # Company terminal
    $UserName =  get_field('user_name', 'options'); // 'barak9611';   # API User
    $CreateInvoice = false;  # to Create Invoice (Need permissions to create invoice )
    $IsIframe = false; //  # Iframe or Redirect
    $Operation = 1;  # = 1 - Bill Only , 2- Bill And Create Token , 3 - Token Only , 4 - Suspended Deal (Order).

    #Create Post Information
    // Account vars
    $vars = array();
    $vars['TerminalNumber'] = $TerminalNumber;
    $vars['UserName'] = $UserName;
    $vars["APILevel"] = "10"; // req
    $vars['codepage'] = '65001'; // unicode
    $vars["Operation"] = $Operation;

    $vars["CreditType"] = '1';

    $vars['DefaultNumOfPayments'] = '1';

    $vars["Language"] = $lang; //  'en';   // page languge he- hebrew , en - english , ru , ar
    $vars["CoinID"] = $currency_pay_card; // billing coin , 1- NIS , 2- USD other , article :  http://kb.cardcom.co.il/article/AA-00247/0

    $vars['ProductName'] = $title_lid; // Product Name , will show if no invoice will be created.

    // Indicator Url \ Notify URL . after use -  http://kb.cardcom.co.il/article/AA-00240/0

    $vars["ReturnValue"] = "1234"; // Optional , ,recommended , value that will be return and save in CardCom system

    $vars["ShowInvoiceHead"] = "false"; //  if show & edit Invoice Details on the page.
    $vars["InvoiceHeadOperation"] = "0"; //  0 = no create & show Invoice.  1 =(default)create Invoice.  2 = show Details Invoice but not create Invoice !

    if ($CreateInvoice) {
        // article for invoice vars:  http://kb.cardcom.co.il/article/AA-00244/0
        $vars['IsCreateInvoice'] = "true";
        // customer info :
        $vars["InvoiceHead.CustName"] = $client_first_name[0]. ' ' .$client_last_name[0]; // customer name
        $vars["InvoiceHead.SendByEmail"] = "true"; // will the invoice be send by email to the customer
        $vars["InvoiceHead.Language"] = "he"; // he or en only
        $vars["InvoiceHead.Email"] = $client_email[0];

        // products info

        $vars["InvoiceLines1.Description"] = $title_lid;
        $vars["InvoiceLines1.Price"] = floatval($finishsumm);
        $vars["InvoiceLines1.Quantity"] = "1";
        $vars["InvoiceLines1.IsPriceIncludeVAT"] = "true";


    }
    $vars["SumToBill"] =  floatval($finishsumm);// Sum To Bill

    $sucessU = home_url() . '/thank-you/?summ=' . $finishsumm . '&full_name=' . $client_first_name;
    $vars['SuccessRedirectUrl'] = $sucessU ;


    $vars['ErrorRedirectUrl'] = get_home_url()."/wp-admin/admin-ajax.php?action=delete_lid&lid_id=" . $new_lid; // Error Page

    // Other Optional vars :

    //$vars["CancelType"] = "2"; # show Cancel button on start ,

    $vars["CancelUrl"] = get_home_url()."/wp-admin/admin-ajax.php?action=delete_lid&lid_id=" . $new_lid;

    $vars['IndicatorUrl'] = get_home_url()."/wp-admin/admin-ajax.php?action=success_payment" .
        "&lid_id=" . $new_lid;

    // Send Data To Bill Gold Server
    $r = PostVars($vars, 'https://secure.cardcom.solutions/Interface/LowProfile.aspx');
    parse_str($r, $responseArray);


    # Is Deal
    if ($responseArray['ResponseCode'] == "0") {
        # Iframe or  Redirect User :
        if ($IsIframe) {

            $iframe = '<iframe runat="server"  ID="TestIfame" width="700px" height="700px" src="' . $responseArray['url'] . '"></iframe>';
            return $iframe;

        } else  // redirect
        {
            return $responseArray['url'];
        }

    } # Show Error to developer only
    else {

        return $r;
    }
    /// pay end
}
add_action('wp_ajax_register_new_lid', 'register_new_lid');
add_action('wp_ajax_nopriv_register_new_lid', 'register_new_lid');
function register_new_lid(){

    $files = isset($_FILES['file'])? $_FILES['file'] : false;

    //print_r($_POST);
    $client_passport = $_POST['client_passport'];
    $client_first_name = $_POST['client_first_name'];
    $client_last_name = $_POST['client_last_name'];
    $client_city = $_POST['client_city'];
    $client_street = $_POST['client_street'];
    $client_index = $_POST['client_index'];
    $client_numb_flour = $_POST['client_numb_flour'];
    $client_numb_house = $_POST['client_numb_house'];
    $client_fax = $_POST['client_fax'];
    $client_phone = $_POST['client_phone'];
    $client_email = $_POST['client_email'];
    $client_second_phone = $_POST['client_second_phone'];
    $pay_sum = $_POST['pay_sum'];

    $client_count = count($client_first_name);

    $company_owner_passport = $_POST['company_owner_passport'];
    $company_name = $_POST['company_name'];
    $company_id_number = $_POST['company_id_number'];
    $passport = $_POST['passport'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $index = $_POST['index'];
    $numb_flour = $_POST['numb_flour'];
    $numb_house = $_POST['numb_house'];
    $fax = $_POST['fax'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $second_phone = $_POST['second_phone'];

    $defendant_count = count($index);
    $defendant_type = $_POST['radioChack'];

    $judge = $_POST['judge'];
    $reason = $_POST['reason'];
    $date = $_POST['date'];
    $less_then_five = isset($_POST['less_then_five'])? $_POST['less_then_five'] : 0;
    $not_company = isset($_POST['not_company'])? $_POST['not_company'] : 0;
    $sign = isset($_POST['sign'])? $_POST['sign'] : 0;
    $desc1 = $_POST['desc1'];
    $desc2 = $_POST['desc2'];
    $summ1 = $_POST['summ'];
    $finishsumm = $_POST['edit_summ'];
    $case = $_POST['case'];

    $title_lid = 'lid '. $reason;

    $args = array(
        'post_author' => 0,
        'post_status' => 'publish', // (Draft | Pending | Publish)
        'post_title' => $title_lid,
        'post_type' => 'lids'
    );


    $new_lid = wp_insert_post($args);

    if ($files) {
        $file = array(
            'name' => $files['name'],
            'type' => $files['type'],
            'tmp_name' => $files['tmp_name'],
            'error' => $files['error'],
            'size' => $files['size']
        );

        $upload_overrides = array('test_form' => false);
        $upload = wp_handle_upload($file, $upload_overrides);

        $filename = $upload['file'];
        $filetype = wp_check_filetype(basename($filename), null);
        $wp_upload_dir = wp_upload_dir();

        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
            'post_mime_type' => $filetype['type'],
            'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
            'post_content' => '',
            'post_status' => 'inherit'
        );

        $file_id = wp_insert_attachment($attachment, $filename, $new_lid);

        require_once(ABSPATH . 'wp-admin/includes/image.php');

        $attach_data = wp_generate_attachment_metadata($file_id, $filename);
        wp_update_attachment_metadata($file_id, $attach_data);

        update_field('attach_file', $file_id, $new_lid);

    }


//add all clients to repeater field
    $clients_array = array();
    for($i = 0; $i < $client_count; $i++) {

        $clients_array []= array(
            'client_passport' => isset($client_passport[$i]) ? $client_passport[$i] : 'empty',
            'client_first_name' => isset($client_first_name[$i]) ? $client_first_name[$i] : 'empty',
            'client_last_name' => isset($client_last_name[$i]) ? $client_last_name[$i] : 'empty',
            'client_city' => isset($client_city[$i]) ? $client_city[$i] : 'empty',
            'client_street' => isset($client_street[$i]) ? $client_street[$i] : 'empty',
            'client_index' => isset($client_index[$i]) ? $client_index[$i] : 'empty',
            'client_numb_flour' => isset($client_numb_flour[$i]) ? $client_numb_flour[$i] : 'empty',
            'client_numb_house' => isset($client_numb_house[$i]) ? $client_numb_house[$i] : 'empty',
            'client_fax' => isset($client_fax[$i]) ? $client_fax[$i] : 'empty',
            'client_phone' => isset($client_phone[$i]) ? $client_phone[$i] : 'empty',
            'client_email' => isset($client_email[$i]) ? $client_email[$i] : 'empty',
            'client_second_phone' => isset($client_second_phone[$i]) ? $client_second_phone[$i] : 'empty'
        );

    }

    //add all companies to repeater field
    $defendant_array = array();
    for($i = 0; $i < $defendant_count; $i++) {

        $defendant_array []= array(
            'company_name' => isset($company_name[$i]) ? $company_name[$i] : 'empty',
            'company_id_number' => isset($company_id_number[$i])? $company_id_number[$i] : 'empty',
            'company_owner_passport' => isset($company_owner_passport[$i]) ? $company_owner_passport[$i] : 'empty',
            'passport' => isset($passport[$i]) ? $passport[$i] : 'empty',
            'first_name' => isset($first_name[$i]) ? $first_name[$i] : 'empty',
            'last_name' => isset($last_name[$i]) ? $last_name[$i] : 'empty',
            'city' => isset($city[$i]) ? $city[$i] : 'empty',
            'street' => isset($street[$i]) ? $street[$i] : 'empty',
            'index' => isset($index[$i]) ? $index[$i] : 'empty',
            'numb_flour' => isset($numb_flour[$i]) ? $numb_flour[$i] : 'empty',
            'numb_house' => isset($numb_house[$i]) ? $numb_house[$i] : 'empty',
            'fax' => isset($fax[$i]) ? $fax[$i] : 'empty',
            'phone' => isset($phone[$i]) ? $phone[$i] : 'empty',
            'email' => isset($email[$i]) ? $email[$i] : 'empty',
            'second_phone' => isset($second_phone[$i]) ? $second_phone[$i] : 'empty'
        );
    }

    // update it
    $clients_updates = update_field('clients', $clients_array, $new_lid);
    if($clients_updates){
        update_field('defendant', $defendant_array, $new_lid);
    }

    update_field('judge', $judge, $new_lid);
    update_field('case', $case, $new_lid);
    update_field('finishsumm', $pay_sum, $new_lid);
    update_field('date', $date, $new_lid);
    update_field('reason', $reason, $new_lid);

    update_field('desc1', $desc1, $new_lid);
    update_field('desc2', $desc2, $new_lid);
    update_field('less_then_five', $less_then_five, $new_lid);
    update_field('not_company', $not_company, $new_lid);
    update_field('sign', $sign, $new_lid);

    if($defendant_type =='two'){
        update_field('private_person', 1, $new_lid);
    }
    elseif ($defendant_type =='one'){
        update_field('company', 1, $new_lid);
    }
    else{
        update_field('company_person', 1, $new_lid);
    }

    update_field('paid', '0', $new_lid);

    $payment = cardcomPay($new_lid, $title_lid, $pay_sum, $client_email, $client_first_name, $client_last_name );
    //

    //email to admin
    $to = get_field('admin_email', 'options');
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: or.com@email.com ";
    $mail_content = '';

    $mail_content .= home_url().'/wp-admin/post.php?post='.$new_lid.'&action=edit';

    $succes_mail = mail($to, $mail_content, $headers);
    //

    if($succes_mail && $new_lid && $payment){
        echo json_encode( array('success' => true, 'message' => $clients_array, 'redirect' => $payment));
    }else{
        echo json_encode( array('success' => false, 'message' => $clients_array, 'redirect' => $payment));
    }

    die();
}
add_action('wp_ajax_register_second_lid', 'register_second_lid');
add_action('wp_ajax_nopriv_register_second_lid', 'register_second_lid');
function register_second_lid(){

    $files = isset($_FILES['file'])? $_FILES['file'] : false;
    $files2 = isset($_FILES['file2'])? $_FILES['file2'] : false;
    $files3 = isset($_FILES['file3'])? $_FILES['file3'] : false;
    $files4 = isset($_FILES['file4'])? $_FILES['file4'] : false;

    //print_r($_POST);
    $client_passport = $_POST['client_passport'];
    $client_first_name = $_POST['client_first_name'];
    $client_last_name = $_POST['client_last_name'];
    $client_city = $_POST['client_city'];
    $client_street = $_POST['client_street'];
    $client_index = $_POST['client_index'];
    $client_numb_flour = $_POST['client_numb_flour'];
    $client_numb_house = $_POST['client_numb_house'];
    $client_fax = $_POST['client_fax'];
    $client_phone = $_POST['client_phone'];
    $client_email = $_POST['client_email'];
    $client_second_phone = $_POST['client_second_phone'];

    $client_count = count($client_first_name);

    $company_owner_passport = $_POST['company_owner_passport'];
    $company_name = $_POST['company_name'];
    $company_id_number = $_POST['company_id_number'];
    $passport = $_POST['passport'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $index = $_POST['index'];
    $numb_flour = $_POST['numb_flour'];
    $numb_house = $_POST['numb_house'];
    $fax = $_POST['fax'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $second_phone = $_POST['second_phone'];

    $defendant_count = count($index);
    $defendant_type = $_POST['step3_radio1'];

    $judge = isset($_POST['judge']) ? $_POST['judge'] : 'empty';
    $reason = isset($_POST['reason']) ? $_POST['reason'] : 'empty';
    $date = $_POST['date'];
    $less_then_five = isset($_POST['less_then_five'])? $_POST['less_then_five'] : 0;
    $not_company = isset($_POST['not_company'])? $_POST['not_company'] : 0;
    $sign = isset($_POST['sign'])? $_POST['sign'] : 0;
    $desc = $_POST['desc'];
    $summ1 = $_POST['summ'];
    $finishsumm = isset($_POST['pay_sum']) ? $_POST['pay_sum'] : 0;


    $title_lid = 'lid '. $reason;

    $args = array(
        'post_author' => 0,
        'post_status' => 'publish', // (Draft | Pending | Publish)
        'post_title' => $title_lid,
        'post_type' => 'second_lids'
    );


    $new_lid = wp_insert_post($args);

    if ($files) {
        $file = array(
            'name' => $files['name'],
            'type' => $files['type'],
            'tmp_name' => $files['tmp_name'],
            'error' => $files['error'],
            'size' => $files['size']
        );

        $upload_overrides = array('test_form' => false);
        $upload = wp_handle_upload($file, $upload_overrides);

        $filename = $upload['file'];
        $filetype = wp_check_filetype(basename($filename), null);
        $wp_upload_dir = wp_upload_dir();

        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
            'post_mime_type' => $filetype['type'],
            'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
            'post_content' => '',
            'post_status' => 'inherit'
        );

        $file_id = wp_insert_attachment($attachment, $filename, $new_lid);

        require_once(ABSPATH . 'wp-admin/includes/image.php');

        $attach_data = wp_generate_attachment_metadata($file_id, $filename);
        wp_update_attachment_metadata($file_id, $attach_data);

        update_field('attach_file', $file_id, $new_lid);

    }
    if ($files2) {
        $file2 = array(
            'name' => $files2['name'],
            'type' => $files2['type'],
            'tmp_name' => $files2['tmp_name'],
            'error' => $files2['error'],
            'size' => $files2['size']
        );

        $upload_overrides = array('test_form' => false);
        $upload = wp_handle_upload($file2, $upload_overrides);

        $filename = $upload['file'];
        $filetype = wp_check_filetype(basename($filename), null);
        $wp_upload_dir = wp_upload_dir();

        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
            'post_mime_type' => $filetype['type'],
            'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
            'post_content' => '',
            'post_status' => 'inherit'
        );

        $file_id = wp_insert_attachment($attachment, $filename, $new_lid);

        require_once(ABSPATH . 'wp-admin/includes/image.php');

        $attach_data = wp_generate_attachment_metadata($file_id, $filename);
        wp_update_attachment_metadata($file_id, $attach_data);

        update_field('attach_file2', $file_id, $new_lid);

    }
    if ($files3) {
        $file3 = array(
            'name' => $files3['name'],
            'type' => $files3['type'],
            'tmp_name' => $files3['tmp_name'],
            'error' => $files3['error'],
            'size' => $files3['size']
        );

        $upload_overrides = array('test_form' => false);
        $upload = wp_handle_upload($file3, $upload_overrides);

        $filename = $upload['file'];
        $filetype = wp_check_filetype(basename($filename), null);
        $wp_upload_dir = wp_upload_dir();

        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
            'post_mime_type' => $filetype['type'],
            'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
            'post_content' => '',
            'post_status' => 'inherit'
        );

        $file_id = wp_insert_attachment($attachment, $filename, $new_lid);

        require_once(ABSPATH . 'wp-admin/includes/image.php');

        $attach_data = wp_generate_attachment_metadata($file_id, $filename);
        wp_update_attachment_metadata($file_id, $attach_data);

        update_field('attach_file3', $file_id, $new_lid);

    }
    if ($files4) {
        $file4 = array(
            'name' => $files4['name'],
            'type' => $files4['type'],
            'tmp_name' => $files4['tmp_name'],
            'error' => $files4['error'],
            'size' => $files4['size']
        );

        $upload_overrides = array('test_form' => false);
        $upload = wp_handle_upload($file4, $upload_overrides);

        $filename = $upload['file'];
        $filetype = wp_check_filetype(basename($filename), null);
        $wp_upload_dir = wp_upload_dir();

        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
            'post_mime_type' => $filetype['type'],
            'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
            'post_content' => '',
            'post_status' => 'inherit'
        );

        $file_id = wp_insert_attachment($attachment, $filename, $new_lid);

        require_once(ABSPATH . 'wp-admin/includes/image.php');

        $attach_data = wp_generate_attachment_metadata($file_id, $filename);
        wp_update_attachment_metadata($file_id, $attach_data);

        update_field('attach_file4', $file_id, $new_lid);

    }


//add all clients to repeater field
    $clients_array = array();
    for($i = 0; $i < $client_count; $i++) {

        $clients_array []= array(
            'client_passport' => isset($client_passport[$i]) ? $client_passport[$i] : 'empty',
            'client_first_name' => isset($client_first_name[$i]) ? $client_first_name[$i] : 'empty',
            'client_last_name' => isset($client_last_name[$i]) ? $client_last_name[$i] : 'empty',
            'client_city' => isset($client_city[$i]) ? $client_city[$i] : 'empty',
            'client_street' => isset($client_street[$i]) ? $client_street[$i] : 'empty',
            'client_index' => isset($client_index[$i]) ? $client_index[$i] : 'empty',
            'client_numb_flour' => isset($client_numb_flour[$i]) ? $client_numb_flour[$i] : 'empty',
            'client_numb_house' => isset($client_numb_house[$i]) ? $client_numb_house[$i] : 'empty',
            'client_fax' => isset($client_fax[$i]) ? $client_fax[$i] : 'empty',
            'client_phone' => isset($client_phone[$i]) ? $client_phone[$i] : 'empty',
            'client_email' => isset($client_email[$i]) ? $client_email[$i] : 'empty',
            'client_second_phone' => isset($client_second_phone[$i]) ? $client_second_phone[$i] : 'empty'
        );

    }

    //add all companies to repeater field
    $defendant_array = array();
    for($i = 0; $i < $defendant_count; $i++) {

        $defendant_array []= array(
            'company_name' => isset($company_name[$i]) ? $company_name[$i] : 'empty',
            'company_id_number' => isset($company_id_number[$i])? $company_id_number[$i] : 'empty',
            'company_owner_passport' => isset($company_owner_passport[$i]) ? $company_owner_passport[$i] : 'empty',
            'passport' => isset($passport[$i]) ? $passport[$i] : 'empty',
            'first_name' => isset($first_name[$i]) ? $first_name[$i] : 'empty',
            'last_name' => isset($last_name[$i]) ? $last_name[$i] : 'empty',
            'city' => isset($city[$i]) ? $city[$i] : 'empty',
            'street' => isset($street[$i]) ? $street[$i] : 'empty',
            'index' => isset($index[$i]) ? $index[$i] : 'empty',
            'numb_flour' => isset($numb_flour[$i]) ? $numb_flour[$i] : 'empty',
            'numb_house' => isset($numb_house[$i]) ? $numb_house[$i] : 'empty',
            'fax' => isset($fax[$i]) ? $fax[$i] : 'empty',
            'phone' => isset($phone[$i]) ? $phone[$i] : 'empty',
            'email' => isset($email[$i]) ? $email[$i] : 'empty',
            'second_phone' => isset($second_phone[$i]) ? $second_phone[$i] : 'empty'
        );
    }

    // update it
    $clients_updates = update_field('clients', $clients_array, $new_lid);
    if($clients_updates){
        update_field('defendant', $defendant_array, $new_lid);
    }

    update_field('desc', $desc, $new_lid);

    update_field('finishsumm', $finishsumm, $new_lid);
   // update_field('date', $date, $new_lid);
    update_field('reason', $reason, $new_lid);


    if($defendant_type =='1'){
        update_field('private_person', 1, $new_lid);
    }
    elseif ($defendant_type =='2'){
        update_field('company', 1, $new_lid);
    }
    else{
        update_field('company_person', 1, $new_lid);
    }

    update_field('paid', '0', $new_lid);

    $payment = cardcomPay($new_lid, $title_lid, $finishsumm, $client_email, $client_first_name, $client_last_name );
    //

    //email to admin
    $to = get_field('admin_email', 'options');
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: or.com@email.com ";
    $mail_content = '';

    $mail_content .= home_url().'/wp-admin/post.php?post='.$new_lid.'&action=edit';

    $succes_mail = mail($to, $mail_content, $headers);
    //

    if($succes_mail && $new_lid && $payment){
        echo json_encode( array('success' => true, 'message' => $clients_array, 'redirect' => $payment));
    }else{
        echo json_encode( array('success' => false, 'message' => $clients_array, 'redirect' => $payment));
    }

    die();
}
add_action('wp_ajax_register_third_lid', 'register_third_lid');
add_action('wp_ajax_nopriv_register_third_lid', 'register_third_lid');
function register_third_lid(){

    $files = isset($_FILES['file'])? $_FILES['file'] : false;

    //print_r($_POST);
    $client_passport = $_POST['client_passport'];
    $client_first_name = $_POST['client_first_name'];
    $client_last_name = $_POST['client_last_name'];
    $client_city = $_POST['client_city'];
    $client_street = $_POST['client_street'];
    $client_index = $_POST['client_index'];
    $client_numb_flour = $_POST['client_numb_flour'];
    $client_numb_house = $_POST['client_numb_house'];
    $client_fax = $_POST['client_fax'];
    $client_phone = $_POST['client_phone'];
    $client_email = $_POST['client_email'];
    $client_second_phone = $_POST['client_second_phone'];

    $client_count = count($client_first_name);

    $company_owner_passport = $_POST['company_owner_passport'];
    $company_name = $_POST['company_name'];
    $company_id_number = $_POST['company_id_number'];
    $passport = $_POST['passport'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $index = $_POST['index'];
    $numb_flour = $_POST['numb_flour'];
    $numb_house = $_POST['numb_house'];
    $fax = $_POST['fax'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $second_phone = $_POST['second_phone'];

    $defendant_count = count($index);
    $defendant_type = $_POST['step3_radio1'];
    
    $reason = isset($_POST['reason']) ? $_POST['reason'] : 'empty';
    $date = $_POST['date'];
    $id = $_POST['id'];
    
    $desc = $_POST['desc'];
    $summ1 = $_POST['summ'];
    $finishsumm = isset($_POST['pay_sum']) ? $_POST['pay_sum'] : 0;


    $title_lid = 'lid '. $reason;

    $args = array(
        'post_author' => 0,
        'post_status' => 'publish', // (Draft | Pending | Publish)
        'post_title' => $title_lid,
        'post_type' => 'third_lids'
    );


    $new_lid = wp_insert_post($args);

    if ($files) {
        $file = array(
            'name' => $files['name'],
            'type' => $files['type'],
            'tmp_name' => $files['tmp_name'],
            'error' => $files['error'],
            'size' => $files['size']
        );

        $upload_overrides = array('test_form' => false);
        $upload = wp_handle_upload($file, $upload_overrides);

        $filename = $upload['file'];
        $filetype = wp_check_filetype(basename($filename), null);
        $wp_upload_dir = wp_upload_dir();

        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
            'post_mime_type' => $filetype['type'],
            'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
            'post_content' => '',
            'post_status' => 'inherit'
        );

        $file_id = wp_insert_attachment($attachment, $filename, $new_lid);

        require_once(ABSPATH . 'wp-admin/includes/image.php');

        $attach_data = wp_generate_attachment_metadata($file_id, $filename);
        wp_update_attachment_metadata($file_id, $attach_data);

        update_field('attach_file', $file_id, $new_lid);

    }


//add all clients to repeater field
    $clients_array = array();
    for($i = 0; $i < $client_count; $i++) {

        $clients_array []= array(
            'client_passport' => isset($client_passport[$i]) ? $client_passport[$i] : 'empty',
            'client_first_name' => isset($client_first_name[$i]) ? $client_first_name[$i] : 'empty',
            'client_last_name' => isset($client_last_name[$i]) ? $client_last_name[$i] : 'empty',
            'client_city' => isset($client_city[$i]) ? $client_city[$i] : 'empty',
            'client_street' => isset($client_street[$i]) ? $client_street[$i] : 'empty',
            'client_index' => isset($client_index[$i]) ? $client_index[$i] : 'empty',
            'client_numb_flour' => isset($client_numb_flour[$i]) ? $client_numb_flour[$i] : 'empty',
            'client_numb_house' => isset($client_numb_house[$i]) ? $client_numb_house[$i] : 'empty',
            'client_fax' => isset($client_fax[$i]) ? $client_fax[$i] : 'empty',
            'client_phone' => isset($client_phone[$i]) ? $client_phone[$i] : 'empty',
            'client_email' => isset($client_email[$i]) ? $client_email[$i] : 'empty',
            'client_second_phone' => isset($client_second_phone[$i]) ? $client_second_phone[$i] : 'empty'
        );

    }

    //add all companies to repeater field
    $defendant_array = array();
    for($i = 0; $i < $defendant_count; $i++) {

        $defendant_array []= array(
            'company_name' => isset($company_name[$i]) ? $company_name[$i] : 'empty',
            'company_id_number' => isset($company_id_number[$i])? $company_id_number[$i] : 'empty',
            'company_owner_passport' => isset($company_owner_passport[$i]) ? $company_owner_passport[$i] : 'empty',
            'passport' => isset($passport[$i]) ? $passport[$i] : 'empty',
            'first_name' => isset($first_name[$i]) ? $first_name[$i] : 'empty',
            'last_name' => isset($last_name[$i]) ? $last_name[$i] : 'empty',
            'city' => isset($city[$i]) ? $city[$i] : 'empty',
            'street' => isset($street[$i]) ? $street[$i] : 'empty',
            'index' => isset($index[$i]) ? $index[$i] : 'empty',
            'numb_flour' => isset($numb_flour[$i]) ? $numb_flour[$i] : 'empty',
            'numb_house' => isset($numb_house[$i]) ? $numb_house[$i] : 'empty',
            'fax' => isset($fax[$i]) ? $fax[$i] : 'empty',
            'phone' => isset($phone[$i]) ? $phone[$i] : 'empty',
            'email' => isset($email[$i]) ? $email[$i] : 'empty',
            'second_phone' => isset($second_phone[$i]) ? $second_phone[$i] : 'empty'
        );
    }

    // update it
    $clients_updates = update_field('clients', $clients_array, $new_lid);
    if($clients_updates){
        update_field('defendant', $defendant_array, $new_lid);
    }

    update_field('desc', $desc, $new_lid);

    update_field('finishsumm', $finishsumm, $new_lid);


//    $date_norm = DateTime::createFromFormat('Y.m.d', $date);
//    $date_norm = $date_norm->format('Ymd');
//
//    update_field('date', $date_norm, $new_lid);
    update_field('reason', $reason, $new_lid);
    update_field('id', $id, $new_lid);
    

    if($defendant_type =='1'){
        update_field('private_person', 1, $new_lid);
    }
    elseif ($defendant_type =='2'){
        update_field('company', 1, $new_lid);
    }
    else{
        update_field('company_person', 1, $new_lid);
    }

    update_field('paid', '0', $new_lid);

    $payment = cardcomPay($new_lid, $title_lid, $finishsumm, $client_email, $client_first_name, $client_last_name );
    //

    //email to admin
    $to = get_field('admin_email', 'options');
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: or.com@email.com ";
    $mail_content = '';

    $mail_content .= home_url().'/wp-admin/post.php?post='.$new_lid.'&action=edit';

    $succes_mail = mail($to, $mail_content, $headers);
    //

    if($succes_mail && $new_lid && $payment){
        echo json_encode( array('success' => true, 'message' => $clients_array, 'redirect' => $payment));
    }else{
        echo json_encode( array('success' => false, 'message' => $clients_array, 'redirect' => $payment));
    }

    die();
}

unset( $us_theme_supports );

