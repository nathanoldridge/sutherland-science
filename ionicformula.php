<?php

function createIonicFormula() {
// DECLARING ALL VARIABLES AND ARRAYS
$csym = array("Li", "Na", "K", "Rb", "Cs", "Be", "Mg", "Ca", "Sr", "Ba", "Al", "Ag", "Hg", "Au", "Au", "Zn", "Cu", "Cu", "Co", "Co", "Fe", "Fe", "Ni", "Ni", "Cr", "Cr", "V", "V", "Pb", "Pb", "Sn", "Sn", "Mn", "Mn", "Pt", "Pt", "As", "As", "Sb", "Sb", "Bi", "Bi", "Ti", "Ti");
$cnam = array("lithium", "sodium", "potassium", "rubidium", "cesium", "beryllium", "magnesium", "calcium", "strontium", "barium", "aluminum", "silver", "mercury (II)", "gold (I)", "gold (III)", "zinc", "copper (I)", "copper (II)", "cobalt (II)", "cobalt (III)", "iron (II)", "iron (III)", "nickel (II)", "nickel (III)", "chromium (II)", "chromium (III)", "vanadium (II)", "vanadium (III)", "lead (II)", "lead (IV)", "tin (II)", "tin (IV)", "manganese (II)", "manganese (IV)", "platinum (II)", "platinum (IV)", "arsenic (III)", "arsenic (V)", "antimony (III)", "antimony (V)", "bismuth (III)", "bismuth (V)", "titanium (III)", "titanium (IV)");
$ccha = array(1,1,1,1,1,2,2,2,2,2,3,1,2,1,3,2,1,2,2,3,2,3,2,3,2,3,2,3,2,4,2,4,2,4,2,4,3,5,3,5,3,5,3,4);
$asym = array("C", "N", "O", "F", "P", "S", "Cl", "Se", "Br", "Te", "I", "H", "ClO<sub>3</sub>", "ClO<sub>2</sub>", "ClO<sub>4</sub>", "ClO", "IO<sub>3</sub>", "IO<sub>2</sub>", "IO<sub>4</sub>", "IO", "BrO<sub>3</sub>", "BrO<sub>2</sub>", "BrO<sub>4</sub>", "BrO", "NO<sub>3</sub>", "NO<sub>2</sub>", "NO<sub>4</sub>", "NO", "CN", "OH", "MnO<sub>4</sub>", "MnO<sub>3</sub>", "MnO<sub>2</sub>", "MnO", "SO<sub>4</sub>", "SO<sub>3</sub>", "SO<sub>5</sub>", "SO<sub>2</sub>", "CO<sub>3</sub>", "CO<sub>2</sub>", "CO<sub>4</sub>", "CO", "CrO<sub>4</sub>", "CrO<sub>3</sub>", "CrO<sub>5</sub>", "CrO<sub>2</sub>", "SeO<sub>4</sub>", "SeO<sub>3</sub>", "SeO<sub>5</sub>", "SeO<sub>2</sub>", "TeO<sub>4</sub>", "TeO<sub>3</sub>", "TeO<sub>5</sub>", "TeO<sub>2</sub>", "S<sub>2</sub>O<sub>3</sub>", "SiO<sub>3</sub>", "SiO<sub>2</sub>", "SiO<sub>4</sub>", "SiO", "PO<sub>4</sub>", "PO<sub>3</sub>", "PO<sub>5</sub>", "PO<sub>2</sub>");
$anam = array("carbide", "nitride", "oxide", "fluoride", "phosphide", "sulfide", "chloride", "selenide", "bromide", "telluride", "iodide", "hydride", "chlorate", "chlorite", "perchlorate", "hypochlorite", "iodate", "iodite", "periodate", "hypoiodite", "bromate", "bromite", "perbromate", "hypobromite", "nitrate", "nitrite", "pernitrate", "hyponitrite", "cyanide", "hydroxide", "permanganate", "manganate", "manganite", "hypomanganite", "sulfate", "sulfite", "persulfate", "hyposulfite", "carbonate", "carbonite", "percarbonate", "hypocarbonite", "chromate", "chromite", "perchromate", "hypochromite", "selenate", "selenite", "perselenate", "hyposelenite", "tellurate", "tellurite", "pertellurate", "hypotellurite", "thiosulfate", "silicate", "silicite", "persilicate", "persilicite", "phosphate", "phosphite", "perphosphate", "hypophosphite");
$acha = array(4,3,2,1,3,2,1,2,1,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,3,3,3,3);
$apolybool = array(0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1); // 0 = not polyatomic ... 1 = polyatomic


// CREATE ONE IONIC FORMULA AND NAME

$ionicformula = ‘’;
$ionicname = ‘’;

$catnum = rand(0,count($csym)-1);  //print "$csym[$catnum] is $cnam[$catnum] charge $ccha[$catnum]";
$aninum = rand(0,count($asym)-1);  //print "$asym[$aninum] is $anam[$aninum] charge $acha[$aninum]";
$catsub = $acha[$aninum];
$anisub = $ccha[$catnum];  //echo "Currently $csym[$catnum] $catsub $asym[$aninum] $anisub <br />Now reducing<br />";
if ((($catsub % 2) == 0) && (($anisub % 2) == 0)) { $catsub = $catsub / 2; $anisub = $anisub / 2; }
if ((($catsub % 3) == 0) && (($anisub % 3) == 0)) { $catsub = $catsub / 3; $anisub = $anisub / 3; }
if ((($catsub % 4) == 0) && (($anisub % 4) == 0)) { $catsub = $catsub / 4; $anisub = $anisub / 4; }
$ionicformula .= $csym[$catnum];
if ($catsub != 1) { $ionicformula .= "<sub>" . $catsub . “</sub>”; } // ONLY DISPLAY SUBSCRIPT IF ITS NOT 1
if ($apolybool[$aninum] && $anisub !=1) {$ionicformula .= “(“ . $asym[$aninum] . “)”; } // ONLY DISPLAY BRACKETS IF POLYATOMIC
else {$ionicformula .= $asym[$aninum];} // NO BRACKETS IF NOT POLYATOMIC
if ($anisub != 1) {$ionicformula .= "<sub>" . $anisub . “</sub>”; } // ONLY DISPLAY SUBSCRIPT IF ITS NOT 1

$ionicname .= $cnam[$catnum] . ‘ ‘ . $anam[$aninum]";

echo "$ionicformula is $ionicname";

}

echo "Calling the function<br />";
createIonicFormula();

?>
