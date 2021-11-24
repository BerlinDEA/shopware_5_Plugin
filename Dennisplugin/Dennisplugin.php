<?php


namespace Dennisplugin;

use Shopware\Components\Plugin;


class Dennisplugin extends Plugin


{
    /**
     * @return array
     */
    public function getInfo()
    {
        return [
            'version' => '1.0.0',
            'Label' => 'Dennis Reinhardt Plugins'
        ];
    }

    /**
     * @return bool
     */
    public function install()
    {
        return TRUE;
    }

}
