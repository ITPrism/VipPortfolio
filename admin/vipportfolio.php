<?php
/**
 * @package      VipPortfolio
 * @subpackage   Components
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2014 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

jimport("itprism.init");
jimport("vipportfolio.init");

// Get an instance of the controller
$controller = JControllerLegacy::getInstance("VipPortfolio");

// Perform the request task
$controller->execute(JFactory::getApplication()->input->getCmd('task'));
$controller->redirect();
