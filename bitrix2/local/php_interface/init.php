<?php
define("DEFAULT_TEMPLATE_PATH", "/local/templates/.default");

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}