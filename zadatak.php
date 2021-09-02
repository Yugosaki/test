<?php

/*

  ZADATAK: Opseg i površina kruga i trokuta

  Treba napisati klase koje predstavljaju trokut i krug i preko kojih možemo jednostavno izračunati površinu i opseg kruga i trokuta.
  Za krug vam je kao parametar dan polumjer a za trokut su dane sve tri stranice i visina na osnovicu.

*/

$polumjer = 10;  // dan polumjer kruga
$a = 10;		// dana 1. stranica (osnovica) trokuta
$b = 10;		// dana 2. stranica trokuta 
$c = 10;		// dana 3. stranica trokuta
$v = 10;		// dana visina na osnovicu trokuta


// Klasa koja računa površinu i opseg kruga
class krug {
    
    const PI = 3.14;  // PI definiran kao konstanta, iako se mogla koristiti PHP funkcija pi() 
	
	// funkcija (metoda) za izračun površine kruga , vraća rezultat formule za površinu kruga
	function povrsinakruga($polumjer){
		$povrsina_kruga = self::PI * $polumjer * $polumjer;
		return $povrsina_kruga;
	}
	
	// funkcija (metoda) za izračun opsega kruga, vraća rezultat formule za opseg kruga
	function opsegkruga($polumjer){
		$opseg_kruga = 2 * self::PI * $polumjer;
		return $opseg_kruga;
	}
	
	
}

// Klasa koja računa površinu i opseg trokuta
class trokut {
	
	// funkcija (metoda) za izračun površine trokuta sa atributima stranice a (osnovice) i visine na osnovicu, vraća rezultat formule za opseg kruga 
	function povrsinatrokuta($a,$v){
		$povrsina_trokuta = $a * $v / 2;
		return $povrsina_trokuta;
	}
	// funkcija (metoda) za izračun opsega trokuta sa atributima svake stranice trokuta, vraća rezultat formule za opseg kruga
	function opsegtrokuta($a,$b,$c){
		$opseg_trokuta = $a + $b +$c;
		return $opseg_trokuta;
	}
	
}


$krug = new krug(); // instanciranje objekta klase krug
$trokut = new trokut(); // instanciranje objekta klase trokut

echo "Ako je polumjer kruga = " . $polumjer . "<br><br>";  
echo "Površina kruga je: " . $krug->povrsinakruga($polumjer) . "<br>";  // prikaz rezultata pozvane funkcije povrsinakruga() sa definiranim atributom (polumjerom) za instancu klase krug
echo "Opseg kruga je: " . $krug->opsegkruga($polumjer) . "<br><br>";	// prikaz rezultata pozvane funkcije opsegkruga() sa definiranim atributom (polumjerom) za instancu klase krug
echo "Ako su stranice trokuta: a = " . $a . ", b = " . $b . ", c = " . $c . " i visina na stranicu a , v = " . $v . "<br><br>";
echo "Površina trokuta je: " . $trokut->povrsinatrokuta($a,$v) . "<br>";	// prikaz rezultata pozvane funkcije povrsinatrokuta() sa definiranim atributima (osnovica, visina) za instancu klase trokut
echo "Opseg trokuta je: " . $trokut->opsegtrokuta($a,$b,$c) . "<br>";	// prikaz rezultata pozvane funkcije opsegtrokuta() sa definiranim atributima (stranica 1, stranica 2, stranica 3) za instancu klase trokut

?>
