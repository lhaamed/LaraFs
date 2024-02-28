<?php

namespace lhaamed\LaraFs;


class LaraFsService
{
    public function render($icon = 'hexagon-xmark' , $type = 'fa-light'): string
    {
        return "<i class='$type fa-$icon'></i>";
    }
}
