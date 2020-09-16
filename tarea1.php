<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0  Academic Free License (AFL 3.0)
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class Tarea1 extends Module
{
    public function __construct()
    {
        $this->name = 'tarea1';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'anabel maeso';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.6',
            'max' => '1.7'
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('tarea1');
        $this->description = $this->l('Este modulo esta en fase de pruebas.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('TAREA1_NAME')) {
            $this->warning = $this->l('No name provided');
        }
    }
    public function install()
    {
        if (!parent::install() ||
        !$this->registerHook('displayHome') ||
        !$this->registerHook('displayFooterBefore'))
        return false; return true;
    }
    public function uninstall()
     {
        if (!parent::uninstall() ||
        !$this->unregisterHook('displayHome') ||
        !$this->unregisterHook('displayFooterBefore'))
        return false; return true;
	 }
    public function hookDisplayHome()
	{
        return $this->display(__FILE__, 'views/templates/hook/tarea1.tpl');
    }
    public function hookDisplayFooterBefore()
	{
        return $this->display(__FILE__, 'views/templates/hook/tarea1.tpl');
    }
	
}