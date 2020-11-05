<?php
/**
 * renner module for Craft CMS 3.x
 *
 * module for my website, mostly for testing purposes.
 *
 * @link      josefrenner.ch
 * @copyright Copyright (c) 2020 Josef Renner
 */

namespace modules\rennermodule\controllers;

use modules\rennermodule\RennerModule;

use Craft;
use craft\web\Controller;
use yii\web\Response;
use craft\web\View;

/**
 * Jodok Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your module’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    Josef Renner
 * @package   RennerModule
 * @since     1.0.0
 */
class JodokController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index', 'do-something'];

    // Public Methods
    // =========================================================================

    /**
     * Handle a request going to our module's index action URL,
     * e.g.: actions/renner-module/jodok
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'Welcome to the JodokController actionIndex() method';

        return $result;
    }

    /**
     * Handle a request going to our module's actionDoSomething URL,
     * e.g.: actions/renner-module/jodok/do-something
     *
     * @return mixed
     */
    public function actionDoSomething(): Response
    {
        /* $result = 'Welcome to the JodokController actionDoSomething() method'; */
        /* return $result; */
        //return json_encode($this,JSON_PRETTY_PRINT);
        $variables = [ "foo" => "hello world"]; 
        return $this->renderTemplate('renner-module/index.html', $variables, View::TEMPLATE_MODE_SITE);
    }
}
