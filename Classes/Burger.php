<?php
Class Burger {
  private  $nimetus = '';
  private $sai ='';
  private  $liha ='';
  private $hind = 0.0;
  private $lisand1='';
  private $lisand1Hind =0.0;
  private $lisand2='';
  private $lisand2Hind =0.0;
  private $lisand3='';
  private $lisand3Hind =0.0;
  private $lisand4='';
  private $lisand4Hind= 0.0;


    public function __construct($nimetus, $sai, $liha, $hind) {
        $this->nimetus = $nimetus;
        $this->sai = $sai;
        $this->liha = $liha;
        $this->hind =$hind;

    }
    public function koostaBurger() {
        $uushind = $this->hind;
        $uushind = $uushind+$this->lisand1Hind;
        $uushind = $uushind+$this->lisand2Hind;
        $uushind = $uushind +$this->lisand3Hind;
        $uushind = $uushind+$this->lisand4Hind;
        return  $this->nimetus. $this->liha. $this->sai. $this->hind.'<br>'. $this->lisand1 .$this->lisand1Hind .'<br>'.$this->lisand2
            .$this->lisand2Hind.'<br>'. $this->lisand3. $this->lisand3Hind .'<br>'. $this->lisand4 .$this->lisand4Hind. '<br>'.$uushind;

    }

   public function valiLisand1 ($lisand1, $lisand1Hind){
        $this->lisand1=$lisand1;
        $this->lisand1Hind=$lisand1Hind;
   }
   public function valiLisand2 ($lisand2, $lisand2Hind){
        $this->lisand2=$lisand2;
        $this->lisand2Hind=$lisand2Hind;
   }
   public function valiLisand3($lisand3, $lisand3Hind){
        $this->lisand3=$lisand3;
        $this->lisand3Hind=$lisand3Hind;
   }
   public function valiLisand4($lisand4, $lisand4Hind){
        $this->lisand4=$lisand4;
        $this->lisand4Hind=$lisand4Hind;
   }

}



$nim = new Burger('2 kihiline Burger ' ,'Valgesai ' ,'veiseliha ',8 .'€' );
$nim ->valiLisand1('Kurk ', 1 .'€');
$nim ->valiLisand2('Ketsup ', 1 .'€');
$nim ->valiLisand3('Majonees ', 2 .'€');
$nim ->valiLisand4('Tomat ', 1.2 .'€');

$loppHind = $nim->koostaBurger();
echo '<h1>Tavaline Burger</h1>';
 echo  $loppHind. '&euro;<br>';

 echo'<hr>';
 echo '<h1>Tervislik Burger</h1>';
 Class tervislikBurger extends Burger {
     private $lisand5='';
     private $lisand5Hind= 0.0;
     private $lisand6='';
     private $lisand6Hind= 0.0;
     private $nimetus='';
     private $sai='';
     private $liha='';
     private $hind=0.0;


     public function __construct($nimetus, $sai, $liha, $hind)
     {
         $this->nimetus = $nimetus;
         $this->sai = $sai;
         $this->liha = $liha;
         $this->hind =$hind;

     }
     public function koostaTBurger() {
         $uushind = $this->hind;
         $uushind = $uushind+$this->lisand5Hind;
         $uushind = $uushind+$this->lisand6Hind;
         return  $this->nimetus. $this->sai .$this->liha. $this->hind. '<br>'.$this->lisand5 .$this->lisand5Hind .'<br>'.$this->lisand6 .$this->lisand6Hind.'<br>'.$uushind ;

     }

     public function valiLisand5($lisand5, $lisand5Hind){
         $this->lisand5=$lisand5;
         $this->lisand5Hind=$lisand5Hind;
     }
     public function valiLisand6($lisand6, $lisand6Hind){
         $this->lisand6=$lisand6;
         $this->lisand6Hind=$lisand6Hind;
     }


 }
$nim = new tervislikBurger('Tervislik Burger ','Leib ', 'Kanaliha ', 10 .'€');
$nim ->valiLisand5('Muna ', 3 .'€');
$nim ->valiLisand6('Vesi ', 3 .'€');

$loppHind3=$nim->koostaTBurger();
$burger=$nim->koostaBurger();
echo  $loppHind3. '&euro;<br>';

echo '<hr>';
echo '<h1>Lux Burger</h1>';
 Class luxBurger extends Burger {
     private $lisand7 ='';
     private $lisand7Hind= 0.0;
     private $lisand8 ='';
     private $lisand8Hind=0.0;
     private $nimetus='';
     private $sai='';
     private $liha='';
     private $hind=0.0;

     public function __construct($nimetus, $sai, $liha, $hind)
     {
         $this->nimetus = $nimetus;
         $this->sai = $sai;
         $this->liha = $liha;
         $this->hind =$hind;

     }
     public function koostaLBurger() {
         $uushind = $this->hind;
         $uushind = $uushind+$this->lisand7Hind;
         $uushind = $uushind+$this->lisand8Hind;
         return  $this->nimetus. $this->sai .$this->liha. $this->hind. '<br>'.$this->lisand7 .$this->lisand7Hind .'<br>'.$this->lisand8 .$this->lisand8Hind.'<br>'.$uushind ;

     }

     public function valiLisand7($lisand7, $lisand7Hind){
         $this->lisand7=$lisand7;
         $this->lisand7Hind=$lisand7Hind;
     }
     public function valiLisand8($lisand8, $lisand8Hind){
         $this->lisand8=$lisand8;
         $this->lisand8Hind=$lisand8Hind;
     }

 }
 $nim = new luxBurger('Lux Burger ','Valgesai ','Sealiha ',14 .'€');
 $nim ->valiLisand7('frii-kartulid ', 4 .'€');
 $nim->valiLisand8('Suur Jook ',5 .'€');

$loppHind1=$nim->koostaLBurger();
$burger=$nim->koostaBurger();
echo  $loppHind1. '&euro;<br>';

