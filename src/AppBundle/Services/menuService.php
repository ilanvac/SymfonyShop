<?php
/**
 * Created by PhpStorm.
 * User: ilanv
 * Date: 27/09/2016
 * Time: 13:12
 */

namespace AppBundle\Services;


class menuService
{
    private $menu;

    /**
     * menuService constructor.
     * @param $menu
     */
    public function __construct($menu)
    {
        $this->menu = $menu;
    }

    /**
     * @return mixed
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * @param mixed $menu
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;
    }

}