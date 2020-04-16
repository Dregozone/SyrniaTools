<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view("home");
    }

    public function events($filter='') {

        $allowedFilters = [
             'woodcutting'
            ,'fishing'
            ,'mining'
            ,'chest'
            ,'combat'
	    ,'other'
        ];

        if ( !in_array($filter, $allowedFilters) ) {
            $filter = ''; // Remove custom filters
        }

        /** islandLookup => array(
         *       island     => a
         *  )
         */
        $islandLookup = array();

        $islandLookup["McGoogins site"] = "AC1";
        $islandLookup["McGoogins camp"] = "AC1";
        ////populate locations


        /**  creatureName => array(
         *       cl     => a
         *      ,hp     => b
         *      ,maxHit => c
         *   )
         */
        $creatureList = array();

        $creatureList["Mutant Bunny"] = array(
             "cl" => "10"
            ,"hp" => "14"
            ,"maxHit" => "3"
        );

        $creatureList["Baby spriggan"] = array(
             "cl" => "18"
            ,"hp" => "22"
            ,"maxHit" => "8"
        );

        ////populate creature details



        $currentEvents = "
            A locked chest with 2000 combinations has been found at Castle Rose.
            There is a Mutant Bunny invasion at McGoogins site.
            There is a Baby spriggan invasion at McGoogins camp.
        ";

        /*
            There is a Big bad bunny invasion at Mentan.
            There is a Koban miner invasion at Mt. Vertor.
            There is a Buccaneer invasion at Mordor cave.
            There is an Easter gnome invasion at Lemo woods.
            There is a Big bad bunny invasion at Ketil.
            There is a Gorgon Cloaker invasion at Heerchey manor.
            There is a Lethal Bunny invasion at Exella plain.
            There is an Easter gnome invasion at Hooks edge.
            There is a Baby spriggan invasion at Kaldra.
            There is a Bouncing bunny invasion at Ogre camp.
            There is a Lizardwoman invasion at Kinam.
            There is a Spriggan invasion at Ogre cave entrance 1.
            There is a Jotunghul invasion at Stanro.
            There is a Bouncing bunny invasion at Sorer lair.
            There is a Baby spriggan invasion at Ten cliff.
            There is a Rogue invasion at The singing river.
            There is a Pegleg invasion at Toothen.
            There is a Hooked pirate invasion at Skulls nose.
            There is an Easter gnome invasion at Sanfew.
            There is a Big bad bunny invasion at Ogre town.
            There is an Easter gnome invasion at Ogre cave entrance 2.
            There is a Baby spriggan invasion at Ogre tradingpost.
            There is a Bouncing bunny invasion at Pensax.
            There is a Rabid bunny invasion at Rile.
            There is a Buccaneer invasion at Exella mountain.
            There is a Bouncing bunny invasion at Jungles edge.
            There is a Koban mothman invasion at Arch. cave S.
            There is a Bouncing bunny invasion at Arch. cave N.
            There is a Spriggan invasion at Arch. cave SE.
            There is a Big bad bunny invasion at Arch. cave SW.
            There is a Pirate invasion at Barnacle bay.
            There is a Lethal Bunny invasion at Arch. cave center.
            There is a Lethal Bunny invasion at Arch. cave 3.9.
            There is a Spriggan invasion at Arch. cave 3.11.
            There is a Koban protector invasion at Arch. cave 2.1.
            There is a Mutant Bunny invasion at Arch. cave 3.14.
            There is a Warrior Bunny invasion at Arch. cave 3.16.
            There is a Baby spriggan invasion at Arch. cave 3.5.
            There is an Easter gnome invasion at Beset.
            There is a Warrior Bunny invasion at Arch. cave NE.
            There is a Buccaneer invasion at Bonewood.
            There is a Warrior Bunny invasion at Beset catacombs.
            There is a Bouncing bunny invasion at Deep Lemo woods.
            There is a mining event at Hawk mountain.
            There is a mining event at Franer mines.
            There is a mining event at Arch. cave 3.21.
            There is a mining event at Rose mines.
            There is a fishing event at Eylsian docks.
            There is a fishing event at Port Senyn.
            There is a fishing event at Heerchey docks.
            There is a mining event at Eckwal.
            There is a fishing event at Web haven.
            There is a woodcutting event at Webbed forest.
            There is a cooking event at Wingmere.
            There is a woodcutting event at Unera.
            There is a woodcutting event at Ammon.
            There is a fishing event at Thabis.
            There is a mining event at Ancestral mountains.
            There is a fishing event at Port Dazar.
            There is a woodcutting event at Penteza forest.
            There is a smelting event at Mt. Flag.
            There is a cooking event at Burning beach.
            There is a smelting event at Aunna.
            There is a woodcutting event at Avinin.
            There is a fishing event at Lisim.
            There is a woodcutting event at Khaya.
            There is a mining event at Nabb mines.
            There is a woodcutting event at Aloria.
            There is a cooking event at Croy.
            There is a mining event at Arch. cave 3.6.
            There is a mining event at Ogre mine.
            There is a fishing event at Ogre lake.
            There is a smelting event at Endarx.
            There is a woodcutting event at Isri.
            There is a fishing event at Port Calviny.
        ";
        */

        $events = explode("There is a ", str_replace("There is an ", "There is a ", $currentEvents));

        $toDisplay = array();

        foreach ( $events as $event ) {

            $parts = explode(" invasion at ", $event);

            if ( sizeof($parts) > 1 ) {
                // This is an invasion
                $creature = $parts[0];
                $location = $parts[1];

                $island = $islandLookup[trim(str_replace(".", "", $location))];

                array_push($toDisplay, array(
                     "creature"     => $creature
                    ,"location"     => $location
                    ,"island"       => $island
                ));
            }

        }

        return view(
            "events"
            ,array(
                 "filter"           => $filter
                ,"toDisplay"        => $toDisplay
                ,"creatureList"     => $creatureList
            )
        );
    }
}
