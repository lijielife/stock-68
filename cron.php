<?php
set_time_limit(0);
ini_set('memory_limit', -1);

require_once('config.php');
foreach (glob(_LIBS."/*.php") as $libs){
	require_once $libs;
}
foreach (glob(_MODS."/*.php") as $mods){
	require_once $mods;
}

$date = isset($argv[1]) ? $argv[1] : null;
Sina::dataRun($date);
Sina::holderRun();



