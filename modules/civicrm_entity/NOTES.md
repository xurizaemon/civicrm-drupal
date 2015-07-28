# CiviCRM Entity - Notes

## Handlers

> Entities are supported by handlers.
>
> Storage handler - Supports loading, saving and deleting entities. This includes default support for revisions, translations and configurable fields.
>
> Additionally, there are other handlers such as for access control, viewing, listings and forms.

- https://www.drupal.org/developing/api/entity

* Ideally we'll use our own API-based storage handler for load/save/delete.
* Drupal Views is very oriented towards SQL queries, so it's not as suited to API query. (Views could get contact IDs, Entity could render them for example.)

> Entity types in core comes in two variants.
>
> *Configuration Entity*
> Used by the Configuration System. Supports translations and can provide custom defaults for installations.
>
> *Content Entity*
> Consist of configurable and base fields, can have revisions and support translations.

- https://www.drupal.org/developing/api/entity
