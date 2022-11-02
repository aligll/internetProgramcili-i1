<?php

/* 
Uygulama-1

1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. constract metodunda 3 tane değişken alarak bu değişkenleri sınıf içerisindeki değişkenlere atayınız.
3. sınıf içerisine public 2 tane metot yazınız.
4. Birinci metotta  girilen sayının karesi ekrana yazdırılsın.
5. İkinci metotta  girilen sayıya kadar tüm sayıların karesi alt alta ekrana yazdırılsın.

Uygulama-2

1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. Construct metodunda bir karşılama mesajını ekrana yazdırınız.
3. Destruct metodunu yazınız ve çalıştığını gösteren bir metni ekrana yazdırınız.
4. sınıf içerisine public 2 tane metot yazınız.
5. Birinci metoda parametre olarak gönderilen vize ve final notlarını alarak, ortalama hesabı yaptırıp 50'nin üzerindeyse geçtiğini ekrana yazdırınız.
6. İkinci metotda  parametre olarak gelen sayının faktöryel hesabını yaptırarak ekrana sonucunu yazdırınız. 

*/

echo "Uygulama-1"."<br><br>";
class sayaç{

    public $name;
    public $color;
    public $piece;

  function __construct($name, $color,$piece) {
    $this->name = $name;
    $this->color = $color;
    $this->piece = $piece;
   /*  echo "Construct metodunda bulunan nesneler = ",$name,"/",$color,"/",$piece;
    echo "<br>"; */
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
  function get_piece() {
    return $this->piece;
  }

  public function kare()
  {
    $a=rand(0,1000);
    echo "$a Sayısının Karesi : ".($a*$a);
  }

  public function kare1($b)
  {
    echo "$b Kadar olan sayıların karesi = ";


    for ($i=0; $i<=$b ; $i++) { 
        echo ($i*$i);
        echo " / ";
    }
  }
}

$nesne = new sayaç("Portakal","Turuncu",2);
echo $nesne->get_name();
echo " / ";
echo $nesne->get_color();
echo " / ";
echo $nesne->get_piece();
echo "<br><br>";
$nesne->kare();
echo "<br><br>";
$nesne->kare1(9);
echo "<br><br><br><br>";





echo "Uygulama-2"."<br><br>";
class kronometre
{

    public function __construct()
    {
        echo "Uygulama-2'ye Hoş Geldiniz. Bu komout Construct metodu ile çalıştırıldı.";
        echo "<br><br>";
    }

    function __destruct()
    {
        echo "Uygulama-2 Destruct Metodu Çalıştı.";
    }

    public function ort()
    {
         $vize = rand(0,100);
         $final = rand(0,100);
         $hesapla=(($vize*0.3)+($final*0.7));

         if($hesapla>=50)
         {
            echo "Tebrikler ".$hesapla." alarak geçtiniz.";
         }
         else{
            echo "Üzgünüz ".$hesapla." alarak kaldınız.";
             }
    }

    public function faktoriyel($sayi,$sonuc)
    {
        for ($i=2; $i<=$sayi; $i++) { 
            $sonuc = ($sonuc * $i);
        }
        echo $sayi," Faktöriyel = $sonuc";
    }

}

$nesne1 = new kronometre;
echo $nesne1->ort();
echo "<br><br>";
$nesne1 -> faktoriyel(6,1);
echo "<br><br>"


?>

