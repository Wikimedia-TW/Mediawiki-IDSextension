<?php
$wgAutoloadClasses['IDS'] = $IP . '/extensions/Mediawiki-IDSextension/ids_body.php';
$wgHooks['ParserFirstCallInit'][] = 'IDS::onParserInit';
