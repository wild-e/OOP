<?php


require_once 'Vehicle.php';

class Bicycle extends Vehicle
{
    public function changeWheel(){}
}





// // POUR MEMO DES NOTES
// // créer une nouvelle class
//   class Bicycle
//   {
//     /**
//        * @var string
//        */
//       // 1ére propriété ou attribut
//       // private = inaccesible à l'extérieur
//       private $color;

//       // constructeur = ici, oblige l'objet à avoir une couleur /!\ double underscore
//       // public function __construct(string $color)
//       // {
//       //     $this->color = $color;
//       // }

//       /**
//       * @var integer
//       */
//       // public = propriété ou méthode accessible à l'extérieur de la classe (!= private || != protected)
//       public $currentSpeed;
//       /**
//       * @var integer
//       */
//       // insérer des valeurs par défaut
//       public $nbSeats = 1;
      
//       /**
//       * @var integer
//       */
//       public $nbWheels;

//       /**
//        * @return string
//        */
//       public function getColor(): string
//       {
//           return $this->color;
//       }
//       /**
//      * @param string $color
//      */
//       public function setColor(string $color) : void
//       {
//           $this->color = $color;
//       }

//        /**
//      * @return int
//      */
//       public function getCurrentSpeed(): int
//       {
//           return $this->currentSpeed;
//       }

//         /**
//        * @param int $currentSpeed
//        * @return void
//        */
//       public function setCurrentSpeed(int $currentSpeed): void
//       {
//         if($currentSpeed >= 0){
//             $this->currentSpeed = $currentSpeed;
//         }

//     }


//     public function forward()
//     {
//         $this->currentSpeed = 15;
  
//         return "Go !";
        
//     }
    
//     public function brake(): string
//     {
//      $sentence = "";
//      while ($this->currentSpeed > 0) {
//       //  $this c'est comme un paramétre de fonction qui se référera à l'objet actuel quand il sera utilisé
//          $this->currentSpeed--;
//          $sentence .= "Brake !!!";
//      }
//      $sentence .= "I'm stopped !";
//      return $sentence;
//     }
//   }
