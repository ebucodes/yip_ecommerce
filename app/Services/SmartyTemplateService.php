<?php

namespace App\Services;

use Smarty\Smarty;


class SmartyTemplateService
{
    protected $smarty;

    public function __construct(Smarty $smarty)
    {
        $this->smarty = $smarty;
    }

    public function render($template, $data = [])
    {
        // Assign variables to Smarty
        foreach ($data as $key => $value) {
            $this->smarty->assign($key, $value);
        }

        // Assign common Laravel helpers
        $this->assignLaravelHelpers();

        return $this->smarty->fetch($template);
    }

    protected function assignLaravelHelpers()
    {
        $this->smarty->assign('asset', function ($path) {
            return asset($path);
        });

        $this->smarty->assign('route', function ($name, $parameters = []) {
            return route($name, $parameters);
        });

        $this->smarty->assign('url', function ($path = null) {
            return url($path);
        });

        $this->smarty->assign('old', function ($key = null, $default = null) {
            return old($key, $default);
        });

        $this->smarty->assign('session', function ($key = null, $default = null) {
            return session($key, $default);
        });

        $this->smarty->assign('csrf_token', csrf_token());
        $this->smarty->assign('csrf_field', csrf_field());
        $this->smarty->assign('errors', session()->get('errors'));

        // Register functions instead of assigning variables
        $this->smarty->registerPlugin('function', 'asset', function ($params) {
            return asset($params['path'] ?? '');
        });

        $this->smarty->registerPlugin('function', 'route', function ($params) {
            $name = $params['name'] ?? '';
            $parameters = $params['params'] ?? [];
            return route($name, $parameters);
        });

        $this->smarty->registerPlugin('function', 'config', function ($params) {
            return config($params['key'] ?? '');
        });

        // Register custom modifiers
        $this->smarty->registerPlugin('modifier', 'number_format', function ($value, $decimals = 0) {
            return number_format($value, $decimals);
        });

        $this->smarty->registerPlugin('function', 'productImage', function ($params) {
            $imageName = $params['image'] ?? '';

            if (strpos($imageName, 'http') === 0) {
                return $imageName;
            }

            return asset('products/' . $imageName);
        });
    }

    public function assign($key, $value)
    {
        $this->smarty->assign($key, $value);
    }

    public function display($template, $data = [])
    {
        foreach ($data as $key => $value) {
            $this->smarty->assign($key, $value);
        }

        $this->assignLaravelHelpers();
        $this->smarty->display($template);
    }
}
