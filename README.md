# php-headfirst-design-patterns
PHP implementation for `Headfirst Design Patterns` book examples.

## Implemented design patterns

### Decorator
[_Class Diagram_](src/Decorator/decorator_class_diagram.png)
> **Definition** 
> > Attach additional responsibilities to an object dynamically. Decorators provide a flexible alternative to subclassing for extending functionality.
> 
> **OO Principle**
> > Classes should be open for extension but closed for modification.
### Factory
#### Factory Method
[_Class Diagram_](src/Factory/factory_method_class_diagram.png)
> **Definition** 
> > Defines an interface for creating an object, but lets subclasses decide witch class to instantiate.
> >
> > Factory Method lets a defer instantiation to subclasses.
>
> **OO Principle** [Dependency Inversion]
> > Depend upon abstractions. Do not depend upon concrete classes.

#### Abstract Factory
[_Class Diagram_](src/Factory/abstract_factory_class_diagram.png)
> **Definition** 
> > provides an interface for creating families of related or dependent objects without specifying their concrete classes.
>
> **OO Principle**
> > Depend upon abstractions. Do not depend upon concrete classes.
