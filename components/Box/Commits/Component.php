<?php
class Box_Commits_Component extends Kwc_Abstract
{

    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['cssClass'] = 'webStandard';
        return $ret;
    }

    public function getViewCacheLifetime()
    {
        return 60*5;
    }
}
