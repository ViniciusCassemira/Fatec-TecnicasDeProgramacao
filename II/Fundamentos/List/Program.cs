List<string> nomes = new() { "Maria", "Marta", "Carlos" };

var nome = nomes.FindLast(Procurar);

Console.WriteLine(nome);

Console.WriteLine();


var lista = nomes.FindAll(Procurar);

foreach(var item in lista)
{
    Console.WriteLine(item);
}


static bool Procurar(string item)
{
    return item.Contains('M');
}
