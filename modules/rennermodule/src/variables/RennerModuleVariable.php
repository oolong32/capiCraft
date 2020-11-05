<?php
/**
 * renner module for Craft CMS 3.x
 *
 * module for my website, mostly for testing purposes.
 *
 * @link      josefrenner.ch
 * @copyright Copyright (c) 2020 Josef Renner
 */

namespace modules\rennermodule\variables;

use modules\rennermodule\RennerModule;

use Craft;

/**
 * renner Variable
 *
 * Craft allows modules to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.rennerModule }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Josef Renner
 * @package   RennerModule
 * @since     1.0.0
 */
class RennerModuleVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.rennerModule.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.rennerModule.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
