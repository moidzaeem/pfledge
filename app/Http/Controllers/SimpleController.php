<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function getAchrichtenNews()
    {
        $xml = simplexml_load_file('https://www.aerztezeitung.de/medizin.rss');
        $news = [];
    
        if ($xml && $xml->channel && $xml->channel->item) {
            $count = 0;
            foreach ($xml->channel->item as $item) {
                if ($count >= 15) {
                    break; // Stop once we have 15 items
                }
                foreach ($item as $key => $value) {
                    $news[$count][$key] = (string) $value;
                }
                $count++;
            }
        }
        return view('news_ratgeber.arztezeitung', compact('news'));
    }
    

    public function getNachrichten()
    {
        $xml = simplexml_load_file('https://www.aend.de/rss/medizin');
        $news = [];
    
        if ($xml && $xml->channel && $xml->channel->item) {
            $count = 0;
            foreach ($xml->channel->item as $item) {
                if ($count >= 14) {
                    break; // Stop once we have 14 items
                }
                foreach ($item as $key => $value) {
                    $news[$count][$key] = (string) $value;
                }
                $count++;
            }
        }
    
        return view('news_ratgeber.nachrichten-aerztenachichtendienst', compact('news'));
    }
    

    public function nachrichtenBundesministeriumFuerGesundheit()
    {
        $xml = simplexml_load_file('https://www.bundesgesundheitsministerium.de/meldungen.xml');
        $news = [];
    
        if ($xml && $xml->channel && $xml->channel->item) {
            $count = 0;
            foreach ($xml->channel->item as $item) {
                if ($count >= 30) {
                    break; // Stop once we have 30 items
                }
                foreach ($item as $key => $value) {
                    $news[$count][$key] = (string) $value;
                }
                $count++;
            }
        }
    
        return view('news_ratgeber.nachrichten-bundesministerium-fuer-gesundheit', compact('news'));
    }
    
}
