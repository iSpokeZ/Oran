<?php

/*
*   _  _____             _        ______
* (_)/ ____|           | |      |___  /
*  _| (___  _ __   ___ | | _____   / /
* | |\___ \| '_ \ / _ \| |/ / _ \ / /
* | |____) | |_) | (_) |   <  __// /__
* |_|_____/| .__/ \___/|_|\_\___/_____|
*          | |
*          |_|
*
* @Plugin Author - iSpokeZ
*
* @Plugin Language - Turkish
*
* @Plugin API - 3.8.4
*
* @Tüm Hakları Saklıdır.
*
* @Plugin Umut Yıldırım Tarafından Özel Olarak Kodlanmıştır.
*
*/

namespace iSpokeZ;

# PLUGIN #
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\math\Vector3;
use pocketmine\block\Block;

# EVENT #
use pocketmine\event\Listener;
use pocketmine\event\block\BlockBreakEvent;

# TEXTFORMAT #
use pocketmine\utils\TextFormat as C;

# LEVEL #
use pocketmine\level\sound\GhastShootSound;
use pocketmine\level\Level;

class Oran extends PluginBase implements Listener {

  public function onEnable(){
    $this->getLogger()->info(C::GREEN . "Oran Aktif [iSpokeZ]");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  public function onDisable(){
    $this->getLogger()->info(C::RED . "Oran De-Aktif");
  }

  public function onBreak(BlockBreakEvent $event){
    $oyuncu = $event->getPlayer();
    $blok = $event->getBlock();
    $dunya = $oyuncu->getLevel();
      if($blok->getId() == "4" || $blok->getId() == "1"){

    $oran = rand(0,270);

    switch($oran){
      case 0:
      $dunya->dropItem($blok,Item::get(264));
      $oyuncu->getLevel()->addSound(new GhastShootSound($oyuncu));
      $oyuncu->sendPopup(C::GREEN . "Taş Kazarken " . C::YELLOW . "'Elmas' " . C::GREEN . "Düşürdün");
      break;
      case 1:
      $dunya->dropItem($blok,Item::get(265));
      $oyuncu->getLevel()->addSound(new GhastShootSound($oyuncu));
      $oyuncu->sendPopup(C::GREEN . "Taş Kazarken " . C::YELLOW . "'Demir' " . C::GREEN . "Düşürdün");
      break;
      case 2:
      $dunya->dropItem($blok,Item::get(266));
      $oyuncu->getLevel()->addSound(new GhastShootSound($oyuncu));
        $oyuncu->sendPopup(C::GREEN . "Taş Kazarken " . C::YELLOW . "'Altın' " . C::GREEN . "Düşürdün");
      break;
      case 3:
      $dunya->dropItem($blok,Item::get(388));
      $oyuncu->getLevel()->addSound(new GhastShootSound($oyuncu));
      $oyuncu->sendPopup(C::GREEN . "Taş Kazarken " . C::YELLOW . "'Zümrüt' " . C::GREEN . "Düşürdün");
      break;
      case 4:
      $dunya->dropItem($blok,Item::get(263));
      $oyuncu->getLevel()->addSound(new GhastShootSound($oyuncu));
      $oyuncu->sendPopup(C::GREEN . "Taş Kazarken " . C::YELLOW . "'Kömür' " . C::GREEN . "Düşürdün");
      break;
      }
    }
  }
}

 ?>
