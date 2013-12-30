<? if ($this->listItems) { ?>
<div class="<?=$this->cssClass?>">
    <h3>Links</h3>
    <ul class="content">
        <? foreach ($this->listItems as $child) { ?>
        <li class="<?=$child['class'];?>" style="<?=$child['style'];?>">
            <?=$this->component($child['data']);?>
        </li>
        <? } ?>
    </ul>
</div>
<? } ?>
