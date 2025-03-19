using System;
using exercise1;

class Exercicio1
{
    static void Main()
    {
        Veiculo Veiculo1 = new("Toyota", "XXX-6666");

        Carro Carro = new("Toyota", "ABC-1234", 4);

        Moto Moto = new("BMW", "osD-244", true);

        Console.WriteLine("Informações sobre o veículo1");
        Veiculo1.ExibirInformacoes();

        Console.WriteLine("Informações do Carro:");
        Carro.ExibirInformacoes();
        Carro.Exibir();

        Console.WriteLine("\nInformações da Moto:");
        Moto.ExibirInformacoes();
        Moto.Exibir();
    }
}
