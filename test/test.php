<?php

require_once "./vendor/autoload.php";
use Json\Schema\Validator as JsonValidator;
use Json\Schema\Exception\ValidationException;
use Json\Schema\Exception\SchemaException;

$v = new JsonValidator('schema.json');

$v->validate(json_decode('{
  "math": {"mml":"<math><mtext>Chella</mtext></math>", "fontFamily":"Times New Roman", "fontSize":"9pt","maxWidth": "220pt", "leading":"11pt"},
  "uuid": "ajahgkghskhasf",
  "callback_url": {"success": "http://mathml.com/uuid/gsfghgfkasfgkhaskhgkhf", "failure":"http://mathml.com/uuid/gsfghgfkasfgkhaskhgkhf"}
}'));