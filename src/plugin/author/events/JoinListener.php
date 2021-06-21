<?php

namespace plugin\author\events;

use pocketmine\event\Listener;
use plugin\author\Main;
use pocketmine\event\player\PlayerJoinEvent;

class JoinListener implements Listener {
    
    private $main;

    public function __construct(Main $main){
       $this->main = $main;
    }

    public function onJoin(PlayerJoinEvent $event){
       $player = $event->getPlayer();
       $name = $player->getName();
       $event->setJoinMessage("§aWillkommen, §g{$name}");
    }

}
