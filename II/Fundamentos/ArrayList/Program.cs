using System.Collections;

var lista = new ArrayList() { "Maria", 25, 52.7, true };

Exibir(lista);
Console.WriteLine();

lista.Add("Paulo");
Exibir(lista);
Console.WriteLine();

lista.Insert(1, 10);
Exibir(lista);
Console.WriteLine();

int[] numeros = { 1, 2, 3 };
lista.AddRange(numeros);
Exibir(lista);
Console.WriteLine();

lista.Remove("Paulo");
Exibir(lista);
Console.WriteLine();

lista.RemoveAt(1);
Exibir(lista);
Console.WriteLine();

lista.RemoveRange(1, 2);
Exibir(lista);
Console.WriteLine();

if(lista.Contains(25))
{
    Console.WriteLine("Encontrou");
}
else
{
    Console.WriteLine("Não Encontrou");
}
Console.WriteLine();
ArrayList nomes = new ArrayList() { "Paulo", "André", "Katia", "Solange" };
nomes.Sort();

Exibir(nomes);


void Exibir(ArrayList lista)
    {
        foreach (var item in lista)
        {
            Console.WriteLine(item);
        }
    }
