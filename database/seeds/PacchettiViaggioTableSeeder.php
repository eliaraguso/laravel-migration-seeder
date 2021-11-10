<?php

use Illuminate\Database\Seeder;
use App\PacchettoViaggio;

class PacchettiViaggioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newPacchetto_viaggio = new PacchettoViaggio();
        $newPacchetto_viaggio->destinazione = "Ibiza";
        $newPacchetto_viaggio->compagnia = "Vueling";
        $newPacchetto_viaggio->hotel = "Hotel Luxury 5*";
        $newPacchetto_viaggio->notti = 14;
        $newPacchetto_viaggio->data_partenza = "2021/07/03";
        $newPacchetto_viaggio->data_ritorno = "2021/07/17";
        $newPacchetto_viaggio->prezzo = 2526.3;
        $newPacchetto_viaggio -> save();
    }
}
