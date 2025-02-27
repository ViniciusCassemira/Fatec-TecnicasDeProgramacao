Gato gato = new Gato("Mio");
Console.WriteLine($"Nome do gato é {gato.getNome()}");
gato.SomGato();

public class Animal
{
    public Animal(string nome)
    {
        Nome = nome;
    }
    protected string? Nome { get; set; }
}
public class Gato:Animal
{
    public Gato(string nome):base(nome){}

    public void SomGato()
    {
        Console.WriteLine("Miauuuuuu");
    }

    public string getNome()
    {
        return Nome;
    }
}

public class Cachorro : Animal
{
    public Cachorro(string nome) : base(nome) { }

    public void SomCachorro()
    {
        Console.WriteLine("au au au au au");
    }
}