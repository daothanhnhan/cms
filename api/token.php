<?php

$request = new HttpRequest();
$request->setUrl('https://id.kiotviet.vn/connect/token');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'cache-control' => 'no-cache',
  'Connection' => 'keep-alive',
  'content-length' => '155',
  'accept-encoding' => 'gzip, deflate',
  'Host' => 'id.kiotviet.vn',
  'Postman-Token' => '64276bb4-2b33-401c-8559-884b91ee8476,bcfee34c-490c-45f1-9968-29a559cb9e1f',
  'Cache-Control' => 'no-cache',
  'Accept' => '*/*',
  'User-Agent' => 'PostmanRuntime/7.15.0',
  'Content-Type' => 'application/x-www-form-urlencoded'
));

$request->setContentType('application/x-www-form-urlencoded');
$request->setPostFields(array(
  'scopes' => 'PublicApi.Access',
  'grant_type' => 'client_credentials',
  'client_id' => '71e187d9-8c95-4e93-b35f-57e713af84a1',
  'client_secret' => '5FECC90FC967295B25BCCEDA4F828FD9EC5B64F4'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}