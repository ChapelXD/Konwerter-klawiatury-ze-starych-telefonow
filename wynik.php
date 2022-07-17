<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik</title>
</head>
<body>
    <?php
    
    class PhoneKeyboardConverter{
        static private $dictionary=array(" "=>"0","a"=>"2","b"=>"22","c"=>"222","d"=>"3","e"=>"33","f"=>"333","g"=>"4","h"=>"44","i"=>"444","j"=>"5","k"=>"55","l"=>"555","m"=>"6","n"=>"66","o"=>"666","p"=>"7","q"=>"77","r"=>"777","s"=>"7777","t"=>"8","u"=>"88","v"=>"888","w"=>"9","x"=>"99","y"=>"999","z"=>"9999");    
        public static function convertToString($in)
        {
            $in = explode(",",$in);    
            $out="";    
            foreach($in as $elem)
            {    
                $out .= array_search($elem,PhoneKeyboardConverter::$dictionary);
            }    
            return $out;
        }    
        public static function convertToNumeric($is)
        {
            $is=str_split(strtolower($is));    
            $out="";    
            foreach($is as $elem)
            {    
                $out .= PhoneKeyboardConverter::$dictionary[$elem] .",";
            }    
            $out = substr($out,0,-1);   
            return $out;
        }    
    }   
    $String=$_POST["tekst"];
    $Numeric=$_POST["liczby"];   
    echo PhoneKeyboardConverter::convertToNumeric($String);
    echo "<br>";
    echo PhoneKeyboardConverter::convertToString($Numeric);

    ?>
</body>
</html>