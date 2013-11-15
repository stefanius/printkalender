<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */

        Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
        Router::connect('/topper-van-de-week', array('controller' => 'toppers', 'action' => 'weektoppermainpage'));
        
        Router::connect('/topper-van-de-week/*', array('controller' => 'toppers', 'action' => 'showtopper'));
        Router::connect('/zaagmans', array('controller' => 'checkday', 'action' => 'zaagmans'));
        Router::connect('/gehaktdag', array('controller' => 'checkday', 'action' => 'gehaktdag'));
        Router::connect('/bieruur', array('controller' => 'checkday', 'action' => 'bieruur'));
        
        Router::connect('/historie/*', array('controller' => 'histories', 'action' => 'viewdate'));
        
        Router::connect('/kalender/*', array('controller' => 'histories', 'action' => 'calender'));
        
        Router::connect('/ishetvandaag/maandag', array('controller' => 'checkday', 'action' => 'weekday', '1'));
        Router::connect('/ishetvandaag/dinsdag', array('controller' => 'checkday', 'action' => 'weekday', '2'));
        Router::connect('/ishetvandaag/woensdag', array('controller' => 'checkday', 'action' => 'weekday', '3'));
        Router::connect('/ishetvandaag/donderdag', array('controller' => 'checkday', 'action' => 'weekday', '4'));
        Router::connect('/ishetvandaag/vrijdag', array('controller' => 'checkday', 'action' => 'weekday', '5'));
        Router::connect('/ishetvandaag/zaterdag', array('controller' => 'checkday', 'action' => 'weekday', '6'));
	    Router::connect('/ishetvandaag/zondag', array('controller' => 'checkday', 'action' => 'weekday', '7'));
        Router::connect('/ishetvandaag/vandaag', array('controller' => 'checkday', 'action' => 'weekday', '8'));
        Router::connect('/ishetvandaag/gisteren', array('controller' => 'checkday', 'action' => 'weekday', '9'));
        Router::connect('/ishetvandaag/morgen', array('controller' => 'checkday', 'action' => 'weekday', '10'));
        
        Router::connect('/users/login', array('plugin'=>'simple_cms', 'controller' => 'users', 'action' => 'login'));
        Router::connect('/users/logout', array('plugin'=>'simple_cms', 'controller' => 'users', 'action' => 'logout'));
        Router::connect('/users/index', array('plugin'=>'simple_cms', 'controller' => 'users', 'action' => 'index'));
        Router::connect('/users/add', array('plugin'=>'simple_cms', 'controller' => 'users', 'action' => 'add'));

        
        Router::connect('/wikilistitems', array('controller' => 'wikilistitems', 'action' => 'index'));
        Router::connect('/wikilistitems/index', array('controller' => 'wikilistitems', 'action' => 'index'));
        Router::connect('/wikilistitems/add', array('controller' => 'wikilistitems', 'action' => 'add'));
        Router::connect('/wikilistitems/delete', array('controller' => 'wikilistitems', 'action' => 'delete'));
        Router::connect('/wikilistitems/view', array('controller' => 'wikilistitems', 'action' => 'view'));
        Router::connect('/wikilistitems/newhistorie', array('controller' => 'wikilistitems', 'action' => 'newhistorie'));
        
        Router::connect('/histories', array('controller' => 'histories', 'action' => 'index'));
        Router::connect('/histories/index', array('controller' => 'histories', 'action' => 'index'));
        Router::connect('/histories/add', array('controller' => 'histories', 'action' => 'add'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
        Router::connect('/simple_cms/sections', array('plugin'=>'simple_cms', 'controller' => 'sections', 'action'=>'index'));
        Router::connect('/simple_cms/contents', array('plugin'=>'simple_cms', 'controller' => 'contents', 'action'=>'index'));
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
        Router::connect('/:section', 
                array('plugin'=>'simple_cms', 'controller' => 'contents', 'action' => 'sectionindex'), 
                array('pass' => array('section')));
        Router::connect('/:section/:urlpart', 
                array('plugin'=>'simple_cms', 'controller' => 'contents', 'action' => 'load'), 
                array('pass' => array('section', 'urlpart')));
        

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
