<?php

$airtable = new Airtable([
  'api_key' => input('X-Airtable-Token'),
  'base'    => input('base_id'),
]);

$airtable->saveContent('Logs', [
  'date()'          => date('Y-m-d H:i:s'),
  '$_GET'           => json_encode($_GET),
  '$_POST'          => json_encode($_POST),
  'getallheaders()' => json_encode(getallheaders()),
  '$_SERVER'        => json_encode($_SERVER),
  'php://input'     => json_encode(file_get_contents('php://input')),
]);
