# PHP OOP Concepts 
## Class
 - A Class is a user-defined data-type which has data members and member functions.
 - Data members are the data variables and member functions are the functions used to manipulate these variables and together these data members and member functions define the properties and behaviour of the objects in a Class.
 - Categorization of real life objects according to its attributes (variables) and behaviour (function).
- A class is a blueprint for an object.  
 - Class is a template for objects


 ## Object
 - Object is a process of accessing a class value or proporties from outside the class.
 - Object is an instance of a class.

  ## Properties
  - Class member variables are called properties.
  - Properties are variables of an object. They are the values associated with the object. 
  - Properties are variable inside a class.


  ## Constructor
- A constructor is a special type of member function of a class which initializes objects of a class.

- In OOP Constructor is a special method. It is called whenever you create an object using new keyword. 

- Constructors are automatically called when an object is created from a class

## Inheritance
- It is a concept of accessing the features from one class to another class.
- The child class will inherit all the <b>public</b> and <b>protected</b> properties and methods from the parent class. 
- In addition, it can have its own properties and methods.

- An inherited class is defined by using the <b>extends</b> keyword.
- Inheritance has three types, single, multiple and multilevel Inheritance.
- PHP supports only single inheritance, where only one class can be derived from single parent class.

- PHP doesn’t support multiple inheritance but by using Interfaces in PHP or using  <b>trait</b> in PHP instead of classes, we can implement it.

- Traits: The trait is a type of class which enables multiple inheritance. Classes, case classes, objects, and traits can all extend no more than one class but can extend multiple traits at the same time.

- [Multiple Inheritance in PHP](https://www.geeksforgeeks.org/multiple-inheritance-in-php/)



## Encapsulation

- Encapsulation is a concept where we encapsulate all the data and member functions together to form an object.
- Wrapping up data member and method together into a single unit is called Encapsulation.

- OOPs concept of Encapsulation in PHP means, enclosing the internal details of the object to protect from external sources. It describes, combining the class, data variables and member functions that work on data together within a single unit to form an object

- To encapsulate members of our class, we need to use certain access modifiers. These are keywords that specify the level of access, or protection, class members have.
<hr>
public  - No access restriction. Can be accessed from anywhere, even from outside of the class scope.
<hr>
private	- Can only be accessed from within the class that defines it.
<hr>
protected	- Can only be accessed from within the class that defines it as well as any child class.
<hr>
abstract - Indicates that a class or a method is missing its implementation.
<hr>
final -	Methods defined as final, cannot be changed or overridden by a subclass.
<hr>

- [PHP OOP Class Encapsulation (Access Modifiers) Tutorial](https://www.koderhq.com/tutorial/php/oop-encapsulation/)