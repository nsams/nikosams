<?php
class Root_Component extends Kwc_Root_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();

        Kwf_Component_Theme_Abstract::applySettings($ret, Kwf_Config::getValue('kwc.theme'));


        $ret['generators']['commits'] = array(
            'class' => 'Kwf_Component_Generator_MultiBox_Static',
            'component' => 'Box_Commits_Component',
            'box' => 'rightBox',
            'inherit' => true,
            'priority' => -1
        );

        return $ret;
    }
}
