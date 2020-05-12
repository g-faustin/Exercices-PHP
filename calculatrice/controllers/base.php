<?php
function calculatrice($nbre1,$nbre2,$operateur){
    switch ($operateur) {
        case '+':
            $resultat="$nbre1+$nbre2=".($nbre1+$nbre2);
            break;
        case '-':
            $resultat="$nbre1-$nbre2=".($nbre1-$nbre2);
            break;
        case '*':
            $resultat="$nbre1*$nbre2=".($nbre1*$nbre2);
            break;

        case '/':
            if($nbre2 !=0)
            {
                $resultat="$nbre1/$nbre2=".($nbre1/$nbre2);
            }
            else
            {
                $resultat="Division impossible";
            }
            
            break;
        
        default:
            # code...
            break;
    }
    return $resultat;
}

function nbrePremier($val){
    if($val>10000)
    {
        for($i=2; $i=$val; $i++)
        {
            $nbdiv=0;
            for($j=1; $j<=$i; $j++)
            {
                if($i%$j==0)
                {
                    $nbdiv++;
                }
            }
            if($nbdiv==2)
            {
                echo $i." , ";
            }
        }
    }
    else
    {
        echo "Veuillez saisir une valeur supérieure à 10000 !!!";
    }
}
?>