## My Beans 

This is a simple PHP - Laravel CRUD web application that allows users to Create/Read/Update/Delete Coffee Beans data.

![Screentshot1](https://i.imgur.com/U3BKNG4.jpg)
![Screentshot1](https://i.imgur.com/PYvuRKJ.jpg)
![Screentshot1](https://i.imgur.com/bUTSkGb.jpg)


## `CoffeeBeans` Model Schema
has following attributes:
- Id
- Name (text)
- Caffeine Level (One of: decaf, low, medium, high)
- Cost / lb (Dollar/numerical value)
- Bean Type (One of: Arabica, Robusta, Liberca, Excelsa, Other) Roast (One of: dark, medium, light, french)
- Grind (One of: whole-bean, fine, medium, coarse)
- Country of Origin (text)

## `CoffeeBeans` Routes

| HTTP Method   | URL Path           | Result                           | 
|:--------------|:-------------------|:---------------------------------| 
| GET           | /                  | index of `CoffeeBeans            | 
| POST          | /beans             | create `CoffeeBeans              | 
| GET           | /beans/`id`/edit   | show single `CoffeeBeans` info   | 
| PUT           | /beans/`id`        | update `CoffeeBeans`.            | 
| DELETE        | /beans/`id`        | delete `CoffeeBeans`.            |



## Technologies Used

- PHP
- Laravel Framework
- HTML
- CSS/SCSS
- Git


## Unsolved Problems 

- When user updates data, multiple select attributes data reset automatically
- Delete confirmation message
- Styling 

