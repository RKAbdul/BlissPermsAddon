<?php
declare(strict_types = 1);

/**
 * @name BlissPermsAddon
 * @version 1.0.0
 * @main JackMD\ScoreHud\Addons\BlissPermsAddon
 * @depend BlissPerms
 */
namespace JackMD\ScoreHud\Addons
{
	use JackMD\ScoreHud\addon\AddonBase;
	use Xenophilicy\BlissPerms\BlissPerms;
	use pocketmine\Player;

	class BlissPermsAddon extends AddonBase{

		/** @var BlissPerms */

	private $blissperms;

		public function onEnable(): void{
			$this->blissperms = $this->getServer()->getPluginManager()->getPlugin("BlissPerms");
		}

		/**
		 * @param Player $player
		 * @return array
		 */
		public function getProcessedTags(Player $player): array{
       
		
			return [
			  		"{prefix}" => $this->blissperms->getPrefix($player),
			  		"{sufix}" => $this->blissperms->getSuffix($player),
			  		"{rank}" => $this->blissperms->getRank(strtolower($player->getName())),
			  		"{tier}" => $this->blissperms->getTier(strtolower($player->getName())),
			  		"{group}" => $this->blissperms->getGroup(strtolower($player->getName()))
			];
		}
	}
}