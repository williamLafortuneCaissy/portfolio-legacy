<code class="prettyprint">
//////////////////////////////////////////////////////////////////////////
// CLASSE STATIQUE: Avatar
// Auteur: William Lafortune-Caissy
// Automne 2016
/////////////////////////////////////////////////////////////////////////

package {

	// IMPORTATIONS -------------------------------------------------------
	import flash.display.MovieClip;
	import flash.events.*;
	import flash.media.Sound;
	import flash.media.SoundMixer;

	public class Avatar extends MovieClip {

		// VARIABLES -------------------------------------------------------
		private var etat: uint;
		private const VIVANT: uint = 1;
		private const MORT: uint = 2;
		private const TOUCHEE: uint = 3;

		private var _frame: uint = 1;
		private var _vie: uint = 3;
		private var _vitesseMax: int = 10;
		private var _vertical: int = 0;
		private var _horizontal: int = 0;
		
		private var _sonExplose: Sound = new Explose();
		private var _sonTouchee: Sound = new Touchee();

		// CONSTRUCTEUR ----------------------------------------------------
		public function Avatar(posX, posY): void {
			x = posX;
			y = posY;
			gotoAndStop(1);
			addEventListener(Event.ADDED_TO_STAGE, init);
		}

		// MÉTHODES PUBLIQUES -----------------------------------------------
		public function toucher(): void {
			if (etat == VIVANT) {
				this.alpha = .2;
				etat = TOUCHEE;
				_vie -= 1;
				Jeu(parent).arrete();
				if (_vie == 0) {
					explose();
				} else {
					_sonTouchee.play();
				}
			}
		}

		public function joue(): void {
			etat = VIVANT
			_frame += 1
			this.alpha = 1;
			gotoAndStop(_frame);
		}
		
		public function tuer():void{
			kill();
		}

		public function droite(): void {
			if (etat != MORT) {
				_horizontal = _vitesseMax;
			}
		}

		public function gauche(): void {
			if (etat != MORT) {
				_horizontal = -_vitesseMax;
			}
		}

		public function haut(): void {
			if (etat != MORT) {
				_vertical = -_vitesseMax;
			}
		}

		public function bas(): void {
			if (etat != MORT) {
				_vertical = _vitesseMax;
			}
		}

		public function arreterHorizontal(): void {
			if (etat != MORT) {
				_horizontal = 0;
			}
		}

		public function arreterVertical(): void {
			if (etat != MORT) {
				_vertical = 0;
			}
		}

		// FONCTIONS PRIVÉE -----------------------------------------------
		private function init(e: Event): void {
			etat = VIVANT;
			removeEventListener(Event.ADDED_TO_STAGE, init);
			addEventListener(Event.ENTER_FRAME, loop);
		}

		private function loop(e: Event): void {
			
			if (etat != MORT) {
				x += _horizontal;
				y += _vertical;
			}
			
			if (x < this.width / 2) {
				x = this.width / 2;
			}
			if (x > stage.stageWidth - this.width / 2) {
				x = stage.stageWidth - this.width / 2;
			}
			if (y < this.height / 2) {
				y = this.height / 2;
			}
			if (y > stage.stageHeight - this.height / 2) {
				y = stage.stageHeight - this.height / 2;
			}
		}

		private function explose(): void {
			etat = MORT;
			SoundMixer.stopAll();
			_sonExplose.play();
			gotoAndPlay(4);
			this.alpha = 1;
			Jeu(parent).fini();
			removeEventListener(Event.ENTER_FRAME, loop);
		}
		private function kill():void {
			Jeu(parent).removeChild(this);
		}

		
		
		
		

	} // classe   
} // package
</code>