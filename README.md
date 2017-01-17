*NOTE: This plugin is unnecessary since EE has a [built-in method](https://docs.expressionengine.com/latest/templates/globals/single_variables.html#is-ajax-request).*

# Is AJAX?

This EE 3.x plugin returns true or false depending if it is an AJAX request.

## Usage

```
{if {exp:is_ajax} == "true"}
	OH YEAAAH
{if:else}
	OH NOOO
{/if}
```
