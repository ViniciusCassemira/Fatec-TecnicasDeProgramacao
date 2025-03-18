//IEnumerable<T>
//ICollection<T>
//Representam coleção genérica de elementos
//ICollection herda de IEnumerable
//
//
//Exemplo
//public void ExibirNomes(IEnumerable<string>nomes){}
//ICollection<string> nomes = new List <string>;

ExemploIEnumerable obj = new ExemploIEnumerable();
List<string> nomes1 = new List<string> { "Maria", "Paulo" };

string[] nomes2 = { "Clara", "Pedro" };

obj.ExibirNome(nomes1);
obj.ExibirNome(nomes2);

//Exemplo ICollection
ICollection<string> pessoas = new List<string> { "Clovis" };
pessoas.Add("João");
foreach(var nome in pessoas)
{
    Console.WriteLine(nome);
}

pessoas.Remove("Clovis");
foreach(var nome in pessoas)
{
    Console.WriteLine(nome);
}

public class ExemploIEnumerable
{
   public void ExibirNome(IEnumerable<string> nomes)
    {
        foreach(var nome in nomes)
        {
            Console.WriteLine(nome);
        }

    }
}

