<?php

namespace plugin\author\events;

use pocketmine\event\Listener;
use plugin\author\Main;

class JoinListener implements Listener {
    
    private $main;

    public function __construct(Main $main){
       $this->main = $main;
    }

    public function onJoin(PlayerJoinEvent $event){
       $player = $event->getPlayer();
       $name = $player->getName();
       $player->sendMessage("§aWillkommen, §g{$name}");
    }

}
