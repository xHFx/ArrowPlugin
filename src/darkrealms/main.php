<?php

namespace darkrealms;

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\item\Item;

class main extends PluginBase implements Listener{
       
        public function onEnable(){
                $this->getLogger()->info("Arrow plugin loaded");
                $this->getServer()->getPluginManager()->registerEvents($this, $this);
        }
       
        public function onDeath(PlayerDeathEvent $e){
               /***
                *    http://docs.pocketmine.net/d6/d5c/_entity_damage_by_entity_event_8php_source.html
                *    public function getDamager(){
                *    return $this->damager;
                */ 
                
                $entity = $e->getDamager();
                if($entity instanceof Arrow) {
                        $e->getPlayer()->getInventory()->addItem(Item::get(262, 0, 1));
                }
        }
       
}
