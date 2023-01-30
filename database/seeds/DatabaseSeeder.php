<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
      DB::table('utenti')->insert(
              ['Username' => 'Josh2000', 'Nome' => 'Joshua', 'Cognome' => 'Ciccolini', 'email' => 'joshuaciccolini@icloud.com', 'password' => 'joshua2000', 'datebirth' => date("2022-01-03"), 'luogodinascita' => 'Sant Elpidio a Mare', 'indirizzo' => 'Via Galileo Galilei 8', 'datamicizia' => date("2022-01-03"), 'descrizione' => 'ciao', 'accessoblog' => 1, 'amici' => json_encode(array("Joshua", "Mary", "pippo"))],
              ['Username' => 'Mary', 'Nome' => 'Maria', 'Cognome' => 'Ferrandino', 'email' => 'mariaferrandino@gmail.com', 'password' => 'maria2023', 'datebirth' => date("2022-01-03"), 'luogodinascita' => 'Sant Elpidio a Mare', 'indirizzo' => 'Via Galileo Galilei 8', 'datamicizia' => date("2022-01-03"), 'descrizione' => 'hola', 'accessoblog' => 0]);
      
        
        /*
         
        
      DB::table('gruppo')->insert(//['Nome_gruppo' => 'gruppo1', 'data_creazione' => date("2023-03-01"), 'n_componenti' => 2, 'aperto_chiuso' => 1 ],
              ['nome_gruppo' => 'gruppo2', 'data_creazione' => date("2023-03-02"), 'n_componenti' => 2, 'aperto_chiuso' => 0 ]);
      
         * 
         
       
      DB::table('post')->insert(//['ID_mittente' => 'Josh2000', 'ID_destinatario' => 'Mary', 'data_post' => date("2022-02-01"), 'contenuto' => 'post numero 1'],
              ['ID_mittente' => 'Mary', 'ID_destinatario' => 'Josh2000', 'data_post' => date("2022-02-01"), 'contenuto' => 'post numero 2']);
      
      
        
        
      
      DB::table('messaggio')->insert(['ID_mittente' => 'Josh2000', 'ID_destinatario' => 'Mary', 'Contenuto' => 'messaggio numero 1', 'Data_messaggio' => date("2023-01-03")],
              ['ID_mittente' => 'Josh2000', 'ID_destinatario' => 'Mary', 'Contenuto' => 'messaggio numero 2', 'Data_messaggio' => date("2023-01-03")],
              ['iD_mittente' => 'Josh2000', 'ID_destinatario' => 'Mary', 'Contenuto' => 'messaggio numero 3', 'Data_messaggio' => date("2023-01-03")],
              ['ID_mittente' => 'Mary', 'ID_destinatario' => 'Josh2000', 'Contenuto' => 'messaggio numero 4', 'Data_messaggio' => date("2023-01-03")]);
      
       DB::table('associazione')->insert(['ID_utente' => 'Josh2000', 'ID_gruppo' => 'gruppo1'],
               ['ID_utente' => 'Josh2000', 'ID_gruppo' => 'gruppo1']);
        * 
        */
       
       
       
       
    }
}
