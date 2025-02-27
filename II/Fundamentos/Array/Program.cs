string[] nomes = new string[4] { "Ana", "Paulo", "Maria", "Samuel" };

Exibir(nomes);

Console.WriteLine();
Array.Reverse(nomes);

Exibir(nomes);

Console.WriteLine();
Array.Sort(nomes);

Exibir(nomes);

Console.WriteLine();
var indice = Array.BinarySearch(nomes, "Maria");
Console.WriteLine(indice);





void Exibir(string[] nomes)
{
    foreach (string nome in nomes)
    {
        Console.WriteLine(nome);
    }
}

