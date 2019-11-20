<?php


$goed = 0;
$fout = 0;


$array = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"
);



foreach ($array as $land=>$stad){
    echo"Wat is de Hoofstad van: $land" .PHP_EOL;
    $antwoord = readline();
    

    if ($antwoord === $stad){
        echo"correct!" .PHP_EOL;
        $goed++;
         
    }

    else {
        echo"fout" .PHP_EOL;
        $fout++;
    }

}

echo"Je resulataten voor de Toets zijn: $goed Goed en $fout Fout." .PHP_EOL;

echo"Nu je klaar bent met de toets wil je nog landen/hooftsteden toevoegen ja/nee?".PHP_EOL;
$landtoevoegen = readline();

if ($landtoevoegen === "ja"){
    echo "hoeveel Landen Wil je toevoegen.".PHP_EOL;
    $nummer = readline();

    for ($i=0; $i <= $nummer-1 ; $i++){
        echo"Wat is de land die je wilt toevoegen".PHP_EOL;
        $land = readline();
        echo"Wat is de hoofstad die je wilt toevoegen?".PHP_EOL;
        $stad = readline();
        array_push ($array , $land ,$stad);

        $array[$land] = $stad;

}
$tel = 10;

foreach($array as $land => $stad){
    if($tel <= 0){
        echo "je hebt $land toegevoegt met als hooftstad $stad.".PHP_EOL;
    }
    $tel--;
}
}

?>


