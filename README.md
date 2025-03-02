# Description
Listens for when a player opens their inventory. Not a container inventory but the players actual inventory.

**NOTE:** This event is **not** cancellable!

# How to use
```php
/* Import this class **/
use terpz710\playeropeninventory\event\PlayerOpenInventoryEvent;

public function onPlayerOpenInventory(PlayerOpenInventoryEvent $event) : void{
    $event->getPlayer()->sendMessage("You opened your inventory!");
}
```
