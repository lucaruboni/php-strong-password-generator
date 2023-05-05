<?php

/* Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. */



//funzione per creare una password in base alla lunghezza selezionata

function generatePassword($length){
    //tutti i caratteri disponibili
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!&?';

    //return dei caratteri mischiati in base alla lunghezza richiesta con
    return substr(str_shuffle($str_result),
    0, $length);
};



$pwLength = $_GET['passwordLength'];

if (is_numeric($pwLength) === true ) {
    
    var_dump($pwLength); 
    var_dump(generatePassword($pwLength));
    
}
else{
    var_dump('attenzione!, devi inserire un numero!');
}



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .app{
            height: 100vh;
            padding: 100px;
        }
        .container{
            background-image: url(https://www.mascaradesign.it/wp-content/uploads/2020/10/mascaradesign.it_800x534-750x501.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 15px;
            box-shadow: 0 0 15px grey;
        }
        .container_background{
            background-color: rgba(0, 0, 0, 0.438);
            width: 100%;
            border-radius: 15px;
    
        }
        .text_container{
            color: white;
            font-weight: 700;
        }
        .my_col{
            border: 2px solid black;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.427);
        }
        .my_input{
            width: 350px;
            height: 40px;
        }
        .my_pw_label{
            font-size: 1.5rem;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password generator</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>
    <body>
    
        <div class="app">
            
            <div class="container px-0">
                <div class="container_background p-0">
                    <div class="text_container text-center ">
                         <h1>"STRONG" PASSWORD GENERATOR</h1>
                         <h3>Genera una Password INsicura</h3>
                    </div>

                    <div class="row">
                        <div class="col my_col mx-5">
                            <form action="" method="get" class="m-5">
                                <div class="form-group d-flex justify-content-between">
                                    <label for="passwordLength" class="text-white my_pw_label">Lunghezza Password:</label>
                                    <input type="text" name="passwordLength" id="passwordLength" class="my_input">
                                </div>
                                <button type="submit" class="btn btn-primary mt-5">GENERA</button>
                                <button type="submit" class="btn btn-light mt-5">ANNULLA</button>    
                            </form>

                        </div>
                    </div>
               </div>
            </div>
        </div>






        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    </body>
</html>