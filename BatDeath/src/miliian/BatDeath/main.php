<?php
declare(strict_types=1);
namespace Milly\BatDeath;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\level\sound\EndermanTeleportSound;
use pocketmine\event\player\PlayerDeathEvent;

class main extends PluginBase implements Listener{
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onDeath(PlayerDeathEvent $event){
        $player = $event->getPlayer();
        $player->getLevel()->addSound(new EndermanTeleportSound($player));
    }
}
