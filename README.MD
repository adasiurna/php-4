# Užduotis 1
* Duotas masyvas
* $color = array('white', 'green', 'red', 'blue', 'black');
* Surikiuokime masyvo elementus didėjimo tvarka ir juos išveskime į ekraną.



# Užduotis 2
* Sugeneruoti masyvą iš 10 elementų;
* Elementų reikšmės - skaičiai nuo 1 iki 100
* Elementų reikšmės negali kartotis
* panaudoti funkciją in_array, ir operatorių []=

# Užduotis 3
* Papildyti web formą, kurią apdorotų PHP serveris.

* Nusikopijuoti formą https://gitlab.com/Rusted/php-4-form/raw/master/form.php ir papildyti

* Laukai: 

Vardas - string
miestas - string
pašto kodas - string


* Papildyti sistemą:

Būtina įvesti bent vieną simbolį į "vardas"
Būtina užpildyti bent vieną iš  dviejų "pašto kodas" arba "miestas"
Klaidingą lauką žymėti raudonai
Viršuje formos spausdinti visus klaidingus pranešimus
Nerodyti klaidų, jeigu užklausos metodas nebuvo "POST": $_SERVER['REQUEST_METHOD'] == 'POST'


# Užduotis 4

* Turimas masyvas
$countries = ["Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia",
"Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna",
"Poland"=>"Warsaw"];
* Naudokite tokį formatą spausdinant sąrašą:
The capital of Netherlands is Amsterdam
The capital of Greece is Athens
The capital of Germany is Berlin
* Spausdinkite sąrašą išrikiavę pagal:
* Sostines didėjimo tvarka
* Miestus mažėjimo tvarka
* Naudokite rikiavimo fukncijas: asort, arsort, ksort, krsort...

# Užduotis 5

* Sukurkite scriptą kuris atvaizduotų lentelę su spalvų pavadinimais.
* Nuspalvinti langelius jų spalvų pavadinimais
* Spalvų pavadinimai duoti masyve:
$colors = array('BlanchedAlmond', 'CadetBlue', 'BurlyWood','DarkOliveGreen', 'HotPink', 'PapayaWhip‘);
* Atvaizdavimui panaudokite foreach ciklą.
<td style="background-color:BlanchedAlmond">BlanchedAlmond</td>

# Užduotis 6


Padarykite programą, kurioje turėtumėme vieną įvedimo lauką. Į šį lauką įvestumėte temperatūros nuoskaitas. Pvz.: 18, 16, 20, 21, 20, 18, 20, 24, 25, 21
Pasiverskite šį laukelį į masyvą (galite pasinaudoti f-ja explode). Jūsų sukurtas scenarijus turėtų išvesti:
Vidutinė temperatūra: 21,5 lapsniai
Viso nuoskaitų: 10
Dvi didžiausios temperatūros: 25, 24
Dvi mažiausios temperatūros: 16, 18