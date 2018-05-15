This library provides JSON schema validation using the schema found at http://json-schema.org. 
Note that it is not yet feature complete, but does support basic validation. 
## Install
- composer require phpjson/schema-tran

## Requirements
- PHP 5.3 or greater (requires namespace and closure support)

## Usage

    use Json\Schema\Validator as JsonValidator;

    $v = new JsonValidator('schema.json');

    $v->validate(json_decode('{
    "math": {"mml":"<math><mtext>Chella</mtext></math>", "fontFamily":"Times New Roman", "fontSize":"9pt","maxWidth": "220pt", "leading":"11pt"},
    "uuid": "ajahgkghskhasf",
    "callback_url": {"success": "http://mathml.com/uuid/gsfghgfkasfgkhaskhgkhf", "failure":"http://mathml.com/uuid/gsfghgfkasfgkhaskhgkhf"}
    }'));


## Supported Types

Types may be defined as either a single string type name, or an array of allowable
type names.

- string
- number
- integer
- boolean
- object
- array
- null
- any

## Supported Definitions

Not all definitions are yet supported, but here is a list of those which are:

- properties (object)
- additionalProperties (object)
- required (all)
- pattern (string)
- minLength (string)
- maxLength (string)
- format (string, number, integer)
- minimum (number, integer)
- maximum (number, integer)
- exclusiveMinimum (number, integer)
- exclusiveMaximum (number, integer)
- divisibleBy (number, integer)
- enum (array)
- minItems (array)
- maxItems (array)
- uniqueItems (array)
- items (array)
- disallow (all)

The following definitions are not yet supported:

- patternProperties
- dependencies
- extends
- id
- $ref
- $schema
