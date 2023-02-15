<?php
$q = $_GET['q'] ?? '';

$API_KEY = '[YOUR_API_KEY]';
$SEARCH_ENGINE_ID = '[YOUR_SEARCH_ENGINE_ID]';

if ($q) {
  $url = "https://www.googleapis.com/customsearch/v1?key={$API_KEY}&cx={$SEARCH_ENGINE_ID}&q=" . urlencode($q);
  $data = json_decode(file_get_contents($url));

  $items = $data->items ?? [];
}

require_once '../app/templates/index.html';

