<?php
/*
Plugin Name: Tickets de atención al usuario
Plugin URI:
Description: Plugin para creación y gestion de Tickets de atención al usuarios.
Version: 1.0
Author: Susana Piñero Rodríguez
Author URI: https://susananzth.com/
License: GPL2+
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: ticket
Domain Path: /languages
*/

// Llamando al archivo posttype.php
require_once plugin_dir_path(__FILE__) . 'includes/posttypes.php';

// Llamado a la regeneracion de htaccess
register_activation_hook(__FILE__, 'ticket_rewrite_flush');

// Agregando metaboxes llamando all archivo metaboxes.php
require_once plugin_dir_path(__FILE__) . 'includes/metaboxes.php';

// Agregando roles y capabilities
require_once plugin_dir_path(__FILE__) . 'includes/roles.php';
// Se crea el rol al activar el plugin
register_activation_hook(__FILE__, 'ticket_create_role');
// Se elimina el rol al desactivar el plugin
register_deactivation_hook(__FILE__, 'ticket_remove_role');
/*
// Se crean los capabilities al activar el plugin
register_activation_hook(__FILE__, 'ticket_add_capabilities');
// Se eliminan los capabilities al desactivar el plugin
register_deactivation_hook(__FILE__, 'ticket_remove_capabilities'); */

?>
