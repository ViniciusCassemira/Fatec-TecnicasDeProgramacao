// Interface

IAnimal obj = new Dog();
obj.MakeSound();

public interface IAnimal
{
    public void MakeSound();
}

public class Cat : IAnimal
{
    public void MakeSound()
    {
        Console.WriteLine("miau");
    }
}

public class Dog : IAnimal
{
    public void MakeSound()
    {
        Console.WriteLine("auau");
    }
}