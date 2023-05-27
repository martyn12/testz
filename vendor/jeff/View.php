<?php

namespace core;

class View
{

    public function render($view, $layout, $data = null)
    {
        if (is_array($data)) {
            extract($data);
        }
        require dirname(__DIR__, 2) . "/app/views/layouts/" . $layout;
    }
}