<?php

namespace App;

/**
 * Class Tag
 * @package App
 */
class Tag extends \Phalcon\Tag
{
    /**
     * Get url by route name and parameters
     *
     * @param $routename
     * @param array $parameters
     * @return string
     */
    public static function url($routename, array $parameters = null)
    {
        if (is_null($parameters)) {
            return self::getUrlService()->get(array(
                'for' => $routename
            ));
        }

        return self::getUrlService()->get(array_merge(
            array(
                'for' => $routename
            ),
            $parameters
        ));
    }

    /**
     * Get url by parameters
     *
     * @param $module
     * @param string $controller
     * @param string $action
     * @return string
     */
    public static function u($module, $controller = 'index', $action = 'index')
    {
        return self::getUrlService()->get(array(
            'module' => $module,
            'controller' => $controller,
            'action' => $action,
            'for' => 'default'
        ));
    }
}