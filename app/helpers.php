<?php

function setActive($slug01,$slug02, $class = 'active')
{
    return ($slug01 == $slug02) ? $class : '';
}

