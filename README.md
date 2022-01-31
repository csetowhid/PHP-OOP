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


## Function overloading and Overriding in PHP

Function overloading and overriding is the OOPs feature in PHP. 
- In function overloading, more than one function can have same method signature but different number of arguments.

- In case of function overriding, more than one functions will have same method signature and number of arguments. 

### Function Overloading
- Overloading is defining functions that have similar signatures, yet have different parameters.
- Function overloading contains same function name and that function performs different task according to number of arguments. 
- For example, find the area of certain shapes where radius are given then it should return area of circle if height and width are given then it should give area of rectangle and others.

- Like other OOP languages function overloading can not be done by native approach. In PHP function overloading is done with the help of magic function __call(). This function takes function name and arguments. 


### Function Overriding
- Overriding is only pertinent to derived classes, where the parent class has defined a method and the derived class wishes to override that method.

- Function overriding is same as other OOPs programming languages. 

- In function overriding, both parent and child classes should have same function name with and number of arguments. 

- It is used to replace parent method in child class. 

- The purpose of overriding is to change the behavior of parent class method. 

- The two methods with the same name and same parameter is called overriding.

- Method overriding allows a child class to provide a specific implementation of a method already provided by its parent class.

- To override a method, you redefine that method in the child class with the same name, parameters, and return type.

[Function overloading and Overriding in PHP](https://www.geeksforgeeks.org/function-overloading-and-overriding-in-php/)


## Abstract Classes

- An abstract class is a class that is initialized in parent class but implements in child class. Typically, an abstract defines an interface for other classes to extend.

- Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

- An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

-  An abstract class can contain abstract as well as non abstract methods.

-  Use of abstract classes are that all base classes implementing this class should give implementation of abstract methods declared in parent class.

## Interface

- In OOP, an interface is a collection of public methods that must be implemented by the classes that use them.

- An interface can define method names and arguments, but not the contents of the methods.

- An interface can only have method signatures. It means that all the methods cannot have a body - only the declaration. And, all the methods must have public visibility.

- After implementing an interface in a class, all the abstract methods in the interface should be declared in the class.

- An interface consists of methods that have no implementations, which means the interface methods are abstract methods.


## Static

- Any method declared as static is accessible without the creation of an object.

- Static functions are associated with the class, not an instance of the class. 

- Static methods are declared with the `static` keyword


## Traits

- Traits are used to declare methods that can be used in multiple classes. 

- A class in PHP can only have single inheritance. Traits are there to solve the problem.