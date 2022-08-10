<?php

class man{
	const NAMECON="iphone6";
	public $ram;
	public $inch;
	public $space;
	public $color;
	public $firstnam;
	public $lastnam;
	private $pass;
	private $names;
	//
	private $coloring;
	//magic
	public function __call($name1, $arguments)
	{
		echo'canat found['.$name1.']<br>';
	}
	////set&get
	public function __get($get)
	{
		echo'canat found geter{'.$get.']<br>';
	}
	public function __set($set,$prob){
		echo'canat found geter{'.$set.']**'.$prob.'<br>';
	}
	////set&get
	///clone
	public function __clone()
	{
		$this->eman=clone$this->eman;
	}
	
	public function __destruct()
	{
		echo"exite";
	}

	public function __construct($ns)
	{
		$this->names=$ns;
	echo"******new constract*****".$this->names.'<br>';	
	}
	/////chaining
	public function first(){
		echo "first".'<br>';
		return $this;
	}
	public function second(){
		echo "second".'<br>';
		return $this;
	}
	public function third(){
		echo "third".'<br>';
		return $this;
	}
	//
	public function stayl()
	{
    echo self::NAMECON .'<br>';
	echo $this->ram.'<br>';	
	echo $this->inch.'<br>';
	echo $this->space.'<br>';
	echo $this->color.'<br>';



	}
	public function name($youername,$olde)
	{
      echo "wolcem ".$youername."  youer old is ".$olde.'<br>';
	}
	final  public function change ($firstname,$lastname){
		$this->firstnam=$firstname;
		$this->lastnam=$lastname;
		echo $this->firstnam."//".$this->lastnam;
	}
	public function pass($pas){
		$this->pass =sha1($pas);
		echo $this->pass.'<br>';
	}
	//when coll ststic///echo man::print(); the same as send in proparty
	public static function print(){
		echo 'print';
	}

}
class sony extends man{
	public $ole;
	public $neew=11;
	public function pass($pas){
		$this->pass =sha1($pas);
		echo $this->pass.'/*/*'.'<br>'.$this->neew.'<br>';
	}
	

}
//////
//abstract 
abstract class amak{
	abstract public function test();
	abstract public function test1();
	abstract public function test2();

}
class mnm extends amak{
	public function test(){
		echo"test".'<br>';
	}
	public function test1(){
		echo"test1".'<br>';

	}
	public function test2(){
		echo"test2".'<br>';

	}
}
interface mobail{
	public function preshome();
}
class samsong implements mobail {
	public function preshome(){
echo "welcame samsong";
	}
}
class iphone {

	public function preshome(){
		echo "welcame iphone";
			}
}
$pres=new iphone();
$pres->preshome();
$pres2=new samsong();
$pres2->preshome();
$hj=new mnm();
$hj->test();
$hj->test1();
$hj->test2();	
$iph1 = new man("ali");
//magic
$iph1->not();
////set&get
echo $iph1->coloring;
$iph1->coloring= "amen";
////set&get
$iph1->ram="2GB";
$iph1->inch="5 inch";;
$iph1->space="128";
$iph1->color="silver";
$iph1->camera=00;
$iph1->pass("123456");
$iph1->name('ali',15);
echo man::print();
//$iph1->stayl();
echo '<pre>'; print_r($iph1);//to print as arrey
echo '</pre>';
$iph1->name =("ali");
///chaining
$iph1->first()->second()->third();
/////
$iph2 = new man("iphon2");
$iph2->ram="3GB";
$iph2->inch="6.5 inch";;
$iph2->space="128";
$iph2->color="golde";
$iph1->name('ahmad',15);
$iph2->stayl();
echo man ::NAMECON.'<br>';
echo $iph1::NAMECON;
echo"///////////////////////////".'<br>';
$iph1->change('ali','mohamad');
/////////////////////////////////////
echo'///////////////';
$sony =new sony("ahmad");
$sony->name('ali',25);
echo'///////////////**';
/*$sony->ole=99;
$sony->change("ali","ahmad");
print_r($sony);
*/
$sony->neew=65;
$sony->pass(123456);

//////////////
////traits
trait printfinger{
	public function fingerf(){
		echo "finger<br>";
	}
}
trait printface{
	public function printfacef(){
		echo "print face<br>";
	}
}
trait printayse{
	public function printaysef(){
		echo "printayse<br>";
	}
	
}
////can use retern as achaining
trait allfucher{
	use printfinger,printayse,printface;
}
class iphn{
use printfinger;
use printayse;
use printface;

}
class nok{
	use printfinger;
	use printayse;
}

class sms{
	use allfucher;
}
$sam=new sms();
print_r($sam);
$sam->printfacef();
$sam->printaysef();
$sam->fingerf();
$ip=new iphn();
print_r($ip);
$ip->printfacef();
$ip->printaysef();
$ip->fingerf();
$nok =new nok();
print_r($nok);;
$nok->printaysef();
$nok->fingerf();
////traits conflect
trait fun{
	public function fol(){
		echo "fun1";
	}
	
}
trait fun2{
	public function fol(){
		echo "fun2";
	}
	
}
class fu{
	use fun,fun2{
	fun::fol insteadOf fun2;
	fun2::fol as anms;
}
}
$fus =new fu(); 
$fus->fol();
$fus->anms();












?>