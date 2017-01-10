<?php

require_once 'vendor/autoload.php';

$buildingArray = loadCSVFileIntoArray('./source.csv');

foreach ($buildingArray as $key => $value) {
    if ('ID' == $value[12]) continue;

    // put building information inside JSON file
    file_put_contents('result/buildings/'. $value[12] .'.json', json_encode(array(
        'kategorie' => $value[0],
        'titel' => $value[1],
        'eingangsbereich_rollstuhlgerecht' => $value[2],
        'personenaufzug_rollstuhlgerecht' => $value[3],
        'personenaufzug_vorhanden' => $value[4],
        'toilette_rollstuhlgerecht' => $value[5],
        'strasse' => $value[6],
        'plz' => $value[7],
        'ort' => $value[8],
        'oeffnungszeiten' => $value[9],
        'longitude' => (float)$value[10],
        'latitude' => (float)$value[11],
        'id' => $value[12],
        'parkplatz_vorhanden' => $value[13],
        'parkplatz_vor_einrichtung_vorhanden' => $value[14],
        'anzahl_behindertenparkplaetze_v_einrichtung' => $value[15],
        'hauseigener_parkplatz_vorhanden' => $value[16],
        'anzahl_behindertenparkplaetze_auf_hauseigenem_parkplatz' => $value[17],
        'ort_hauseigener_parkplatz' => $value[18],
        'stufen_bis_eingang_vorhanden' => $value[19],
        'anzahl_der_stufen_bis_eingang' => $value[20],
        'hoehe_einer_stufe_bis_eingang_cm' => (float)$value[21],
        'eingang_handlauf_durchgehend_links_vorhanden' => $value[22],
        'eingang_handlauf_durchgehend_rechts_vorhanden' => $value[23],
        'eingang_farbliche_markierung_erste_u_letzte_stufe_vorhanden' => $value[24],
        'alternativer_eingang_fuer_rollstuhlfahrer_vorhanden' => $value[25],
        'ort_alternativer_eingang_fuer_rollstuhlfahrer' => $value[26],
        'rampe_vor_eingang_vorhanden' => $value[27],
        'laenge_der_rampe_cm' => (float)$value[28],
        'hoehe_der_rampe_cm' => (float)$value[29],
        'breite_der_rampe_cm' => (float)$value[30],
        'rampe_handlauf_durchgehend_links_vorhanden' => $value[31],
        'rampe_handlauf_durchgehend_rechts_vorhanden' => $value[32],
        'rampe_farbliche_markierung_an_beginn_u_ende_der_rampe_vorhanden' => $value[33],
        'eingang_klingel_vorhanden' => $value[34],
        'eingang_ort_der_klingel' => $value[35],
        'eingang_klingel_mit_wechselsprechanlage_vorhanden' => $value[36],
        'eingang_hoehe_oberster_bedienknopf_von_klingel_cm' => (float)$value[37],
        'kleinste_tuerbreite_bis_erreichen_der_einrichtung_cm' => (float)$value[38],
        'tuerart_am_eingang_automatische_tuer' => $value[39],
        'tuerart_am_eingang_halbautomatische_tuer' => $value[40],
        'tuerart_am_eingang_drehtuer' => $value[41],
        'tuerart_am_eingang_schiebetuer' => $value[42],
        'tuerart_am_eingang_drehfluegeltuer' => $value[43],
        'tuerart_am_eingang_pendeltuer' => $value[44],
        'tuerart_am_eingang_andere_tuerart' => $value[45],
        'aufzug_in_der_einrichtung_vorhanden' => $value[46],
        'anzahl_der_stufen_bis_aufzug_in_der_einrichtung' => $value[47],
        'aufzug_tuerbreite_cm' => (float)$value[48],
        'stufen_bis_aufzug_in_der_einrichtung_vorhanden' => $value[49],
        'aufzug_breite_innenkabine_cm' => (float)$value[50],
        'aufzug_tiefe_innenkabine_cm' => (float)$value[51],
        'aufzug_hoehe_oberster_bedienknopf_in_innenkabine_cm' => (float)$value[52],
        'aufzug_hoehe_oberster_bedienknopf_ausserhalb_cm' => (float)$value[53],
        'aufzug_ort_aufenthaltsort_aufzugsberechtigter' => $value[54],
        'toilette_in_der_einrichtung_vorhanden' => $value[55],
        'toilette_mit_piktogramm_als_behindertentoilette_gekennzeichnet' => $value[56],
        'stufen_bis_toilette_in_einrichtung_vorhanden' => $value[57],
        'anzahl_stufen_bis_toilette_in_einrichtung' => $value[58],
        'hoehe_der_stufen_bis_toilette_in_einrichtung_cm' => (float)$value[59],
        'stufen_bis_toilette_handlauf_durchgehend_links_vorhanden' => $value[60],
        'stufen_bis_toilette_handlauf_durchgehend_rechts_vorhanden' => $value[61],
        'stufen_bis_toilette_farbliche_markierung_erste_u_letzte_stufe' => $value[62],
        'tuerbreite_der_toilettenkabine_cm' => (float)$value[63],
        'toilettentuer_von_aussen_entriegelbar' => $value[64],
        'notklingel_in_toilettenkabine_vorhanden' => $value[65],
        'hoehe_notklingel_in_toilettenkabine' => $value[66],
        'bewegungsflaeche_vor_wc_tiefe_cm' => (float)$value[67],
        'bewegungsflaeche_vor_wc_breite_cm' => (float)$value[68],
        'bewegungsflaeche_links_vom_wc_tiefe_cm' => (float)$value[69],
        'bewegungsflaeche_links_vom_wc_breite_cm' => (float)$value[70],
        'bewegungsflaeche_rechts_vom_wc_tiefe_cm' => (float)$value[71],
        'bewegungsflaeche_rechts_vom_wc_breite_cm' => (float)$value[72],
        'aktivierung_amatur_waschbecken_toilettenkabine_mit_fotozelle' => $value[73],
        'aktivierung_amatur_waschbecken_toilettenkabine_mit_hebelarm' => $value[74],
        'besondere_hilfestellungen_f_menschen_m_hoerbehinderung_vorhanden' => $value[75],
        'besondere_hilfestellungen_f_menschen_m_seebhind_blinde_vorhanden' => $value[76],
        'allgemeine_hilfestellungen_vor_ort_vorhanden' => $value[77],
        'beschreibung_hilfestellungen_vor_ort' => $value[78],
    )));
}
