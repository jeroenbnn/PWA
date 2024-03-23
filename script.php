<?php
$data = file_get_contents('https://kathy.torontocast.com:1095/status-json.xsl');

$ice_stats_source = json_decode($data, true);
			


			
			$array['listenersPeak'] = $ice_stats_source["listener_peak"];
			$array['listeners'] = $ice_stats_source["listeners"];
			$array['transmissionFrequency'] = $ice_stats_source["bitrate"];	
			$currently_playing = $ice_stats_source["icestats"]["source"]["title"];;
			$nowplaying = $currently_playing ;

			$currently_playing = explode(" - ", $currently_playing, 2);
			$currentSong = $currently_playing[1];
			$currentArtist = explode(";",$currently_playing[0])[0];

echo $currentSong  . $currentArtist;
?>

