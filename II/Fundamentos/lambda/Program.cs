
var frutas = new List<string>() { "Maçã", "Banana", "Uva" };

var resultado1 = frutas.FindIndex(i => i.Contains('B'));

Console.WriteLine(resultado1);

Console.WriteLine();
var resultado2 = frutas.Find(i => i.Contains("Maçã"));

Console.WriteLine(resultado2);