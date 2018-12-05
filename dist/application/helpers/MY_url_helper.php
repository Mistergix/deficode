<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function css_url($name)
{
    return base_url("assets/css/$name.css");
}
function img_url($name, $ext="png")
{
    return base_url("assets/img/$name.$ext");
}
function js_url($name)
{
    return base_url("assets/js/$name.js");
}
