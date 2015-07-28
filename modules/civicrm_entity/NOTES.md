# CiviCRM Entity - Notes

## Handlers

> Entities are supported by handlers.
>
> Storage handler - Supports loading, saving and deleting entities. This includes default support for revisions, translations and configurable fields.
>
> Additionally, there are other handlers such as for access control, viewing, listings and forms.
>
> - https://www.drupal.org/developing/api/entity

* Ideally we'll use our own API-based storage handler for load/save/delete.
* Drupal Views is very oriented towards SQL queries, so it's not as suited to API query. (Views could get contact IDs, Entity could render them for example.)

> Entity types in core comes in two variants.
>
> *Configuration Entity*
> Used by the Configuration System. Supports translations and can provide custom defaults for installations.
>
> *Content Entity*
> Consist of configurable and base fields, can have revisions and support translations.
>
> - https://www.drupal.org/developing/api/entity

This is a Content entity type.

> *Requirements*
> Entity classes must be placed in the Entity sub-namespace of the module that provides the entity type, e.g. \Drupal\[module_name]\Entity. This means entity class PHP files may be found in a module's src/Entity directory.
>
> The docblock for the class must contain an EntityType annotation that defines the metadata for entities of that type. These include things like the entity type's label, controllers, tables, etc. For a documented list of all the available metadata properties, refer to the [\Drupal\Core\Entity\Annotation\EntityType class](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Entity%21Annotation%21EntityType.php/class/EntityType/8).

@TODO get head around the metadata properties.

> *Naming*
> Entity type names should be prefixed with the module name if the entity type and module name aren't the same. Prefixing the entity type's class itself is not required since it lives within the namespace of the defining module, provided it is meaningful enough on its own. For example, the entity type for taxonomy terms is named taxonomy_term and the class name is Drupal\taxonomy\Entity\Term.
>
> - https://www.drupal.org/node/2123523

Great, so we can use `Contact` instead of `CivicrmEntityContact` everywhere. Good news.

> *Interfaces*
>
> Drupal 8 recommends you type hint functions and methods with interfaces instead of classes. For example, the generic entity storage hooks type hint with EntityInterface as in hook_entity_insert(EntityInterface $entity) and the node specific storage hooks type hint with NodeInterface as in hook_node_insert(NodeInterface $node).
>
> Entity fields / properties are often very short, storage-centric and not very self-descriptive. Additionally, content entities don't use defined properties for their fields (including base fields like the node title) at all.
>
> Therefore, the recommended approach is to provide an Interface with documented method names. A few rules to follow when doing so:
>
> * Methods usually have a get/set/is or similar prefix: getSomething(), setSomething($value), isSomething()
> * Only add methods for things that other code is supposed to change. The last changed date of nodes ($node->changed) isn't supposed to be changed, so there is $node->getChangedTime() but no $node->setChangedTime() method.
> * Use self-descriptive method names, for example, the method to access $node->status is called $node->isPublished().
>
> - https://www.drupal.org/node/2123523
