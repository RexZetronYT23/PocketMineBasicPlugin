<?php

namespace plugin\author;

use pocketmine\plugin\PluginBase; #Für die Main datei
use pocketmine\event\Listener; #Für Events
use plugin\author\events\JoinListener;

class Main extends PluginBase implements Listener {
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents(new JoinListener($this), $this);
    }

}
