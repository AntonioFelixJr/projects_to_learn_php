<?php

namespace FX;

class Controller
{
    protected function render(array $data = [], string $view = null)
    {

        if (!$view) {
            $view = $this->controllerName() . '/' . debug_backtrace()[1]['function'];
        }
        extract($data);

        require_once __DIR__ . '/../templates/' . $view . '.view.php';
    }

    private function controllerName()
    {
        $class = get_class($this);
        $class = explode('\\', $class);
        $class = array_pop($class);
        $class = preg_replace('/Controller$/', '', $class);
        return strtolower($class);
    }
}