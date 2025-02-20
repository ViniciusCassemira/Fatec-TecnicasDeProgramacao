Cat cat = new Cat("Madona");
Console.WriteLine($"Cat's name is {cat.getName()}");
cat.SomCat();

public class Animal 
{ 
    public Animal(string name)
    {
        Name = name;
    }
    protected string? Name { get; set; }
}

public class Cat: Animal
{
    public Cat(string name):base(name){}

    public void SomCat()
    {
        Console.WriteLine("Miaaauuuuuuu");
    }

    public string getName()
    {
        return Name;
    }
}

public class Dog : Animal
{
    public Dog(string name) :base(name) { }

    public void SomDog()
    {
        Console.WriteLine("Au au au au");
    }
}