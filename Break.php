<?php

    $vet=array("mouse","teclado","monitor","memória","sair","microfone","impressora");
    $tam=count($vet);
    $i=0;

    echo "<br/>Loop While com break<br/>";
    while($i<$tam)
    {
            
        echo "$vet[$i]<br/>";
        $i++;
            if($vet[$i]=="sair")
                {
                    break;
                }
    }
    echo"<hr>";

    echo "<br/>Loop DoWhile com break<br/>";
    $i=0;
    do{
    
            
        echo "$vet[$i]<br/>";
        $i++;
            if($vet[$i]=="sair")
                {
                    break;
                }
    }
    while($i<$tam);

    echo"<hr>";

    echo "<br/>Loop For com break<br/>";

    for($i=0;$i<$tam;$i++)
    {
        if($vet[$i]=="sair")
        {
                break;
        }
        echo "$vet[$i]<br/>";
    }

    echo"<hr>";

    echo "<br/>Loop Foreach com break<br/>";

    foreach($vet as $pc)
    {
      
        if($pc=="sair")
                {
                    break;    
                }
        echo "$pc<br/>";
                   
    }    

    






?>