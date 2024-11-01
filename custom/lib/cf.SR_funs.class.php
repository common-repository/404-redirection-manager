<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if(!class_exists('clogica_SR_funs')){
class clogica_SR_funs {

    function init_my_options()
    {
        $options=SRP_PLUGINS::get_options()->get_my_options();

        $options['404_plugin_status']= '1';
        $options['redirection_base']= site_url();
        $options['redirect_control_panel']= '1';
        $options['404_show_redirect_box']= '1';
        $options['404_reflect_modifications']= '1';
        $options['404_history_status']= '1';
        $options['404_history_limit']= '30';
        $options['404_p404_rules']= '1';
        $options['404_p404_discovery_status']= '1';
        $options['p404_redirect_to']= site_url();
        $options['p404_status']= '2';
        $options['404_keep_data']= '1';
        $options['404_add_auto_redirect']= '1';
        $options['admin_notices']= '';

        SRP_PLUGINS::get_options()->update_my_options($options);
    }


/*

    function save_redirection_general_options()
    { 
        SRP_PLUGINS::get_options()->update_post_option('404_plugin_status');
        SRP_PLUGINS::get_options()->update_post_option('redirect_control_panel');
        SRP_PLUGINS::get_options()->update_post_option('404_show_redirect_box');
        SRP_PLUGINS::get_options()->update_post_option('404_reflect_modifications');
        SRP_PLUGINS::get_options()->update_post_option('404_add_auto_redirect');


    }

//----------------------------------------------------------


        function save_redirection_history_options()
        { 
            SRP_PLUGINS::get_options()->update_post_option('404_history_status');
            SRP_PLUGINS::get_options()->update_post_option('404_history_limit');

        }

//----------------------------------------------------------


        function save_404_redirection_options()
        { 
            SRP_PLUGINS::get_options()->update_post_option('404_p404_discovery_status');
            SRP_PLUGINS::get_options()->update_post_option('p404_status');
            SRP_PLUGINS::get_options()->update_post_option('404_p404_rules');
            SRP_PLUGINS::get_options()->update_option('p404_redirect_to',SRP_PLUGINS::get_request()->make_relative_url(SRP_PLUGINS::get_request()->post('redirect_to')));
        }

//------------------------------------------------------------


        function clear_redirection_history()
        {
            global $wpdb;
            $table_name = SR_database::WP_SEO_Redirection_LOG();
            $wpdb->query(" TRUNCATE TABLE  $table_name ");

        }

//------------------------------------------------------------


        function clear_all_404()
        {
            global $wpdb;
            $table_name = SR_database::WP_SEO_404_links();
            $wpdb->query(" TRUNCATE TABLE  $table_name ");

        }

//------------------------------------------------------------

        function save_keep_data()
        {

            SRP_PLUGINS::get_options()->update_post_option('404_keep_data');

        }

//------------------------------------------------------------

        function optimize_tables()
        {
            global $wpdb;
            $table_name1 = SR_database::WP_SEO_404_links();
            $table_name2 = SR_database::WP_SEO_Redirection();
            $table_name3 = SR_database::WP_SEO_Redirection_LOG();
            $wpdb->query(" OPTIMIZE TABLE  $table_name1,$table_name2,$table_name3 ");
        }

//------------------------------------------------------------

        public function there_is_redirect_plugins()
        {

            $plugins=get_option( 'active_plugins' );

            for($i=0;$i<count($plugins);$i++)
            {
                if(array_key_exists($i, $plugins))
                {
                    $phpfile = substr( $plugins[$i], strrpos( $plugins[$i], '/' )+1 );
                    $phpfile = explode(".", $phpfile);
                    $plugin_name = $phpfile[0];
                    if (stripos($plugin_name,'redirect')!==false && $plugin_name!='seo-redirection-pro')
                    {
                        return true;
                    }
                }

            }
            return false;
        }

*/
    }}
