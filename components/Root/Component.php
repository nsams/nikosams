<?php
class Root_Component extends Kwc_Root_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();

        Kwf_Component_Theme_Abstract::applySettings($ret, Kwf_Config::getValue('kwc.theme'));


        $ret['generators']['links'] = array(
            'class' => 'Kwf_Component_Generator_MultiBox_Static',
            'component' => 'Box_Links_Component',
            'box' => 'rightBox',
            'inherit' => true,
            'unique' => true,
            'priority' => 1
        );
        $ret['generators']['commits'] = array(
            'class' => 'Kwf_Component_Generator_MultiBox_Static',
            'component' => 'Box_Commits_Component',
            'box' => 'rightBox',
            'inherit' => true,
            'priority' => -1
        );
        $ret['generators']['analytics'] = array(
            'class' => 'Kwf_Component_Generator_Box_Static',
            'component' => 'Kwc_Statistics_Analytics_Component',
            'box' => 'analytics',
            'inherit' => true,
            'unique' => true
        );

        $ret['editComponents'][] = 'links';

        return $ret;
    }
}
