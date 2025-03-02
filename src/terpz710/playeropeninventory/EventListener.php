<?php

declare(strict_types=1);

namespace terpz710\playeropeninventory;

use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;

use pocketmine\network\mcpe\protocol\InteractPacket;

use terpz710\playeropeninventory\event\PlayerOpenInventoryEvent;

class EventListener implements Listener {

    public function onDataPacketReceive(DataPacketReceiveEvent $event) : void{
        $player = $event->getOrigin()->getPlayer();
        $packet = $event->getPacket();

        if ($packet instanceof InteractPacket && $packet->action === InteractPacket::ACTION_OPEN_INVENTORY) {
            $e = new PlayerOpenInventoryEvent($player);
            $e->call();
        }
    }
}