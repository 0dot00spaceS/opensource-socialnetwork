<?php
/**
 * Open Source Social Network
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.org>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
define('__THEMEDIR__', ossn_route()->themes . 'default/');
ossn_new_css('ossn.default', 'css/default');
ossn_new_css('ossn.admin.default', 'css/administrator');

ossn_load_css('ossn.default');
ossn_load_css('ossn.admin.default', 'admin');