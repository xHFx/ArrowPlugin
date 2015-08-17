<?php

namespace darkrealms;

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\item\Item;

class Main extends PluginBase implements Listener{
       
        public function onEnable(){
                $this->getLogger()->info("Arrow plugin loaded");
                $this->getServer()->getPluginManager()->registerEvents($this, $this);
        }
       
        public function onDeath(PlayerDeathEvent $e){
                $entity = $e->getKiller();
                if($entity instanceof Arrow) {
                        $e->getPlayer()->getInventory()->addItem(Item::get(262, 0, 1));
                }
        }
       
}
