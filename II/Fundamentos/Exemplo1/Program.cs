Console.WriteLine("Cálculo IMC");
Console.WriteLine("Digite o seu nome:");
string? nome = Console.ReadLine();
Console.WriteLine("Digite o seu peso:");
double peso = Convert.ToDouble(Console.ReadLine());
Console.WriteLine("Digite a sua Altura:");
double altura = double.Parse(Console.ReadLine());

double imc = peso / Math.Pow(altura, 2);

Console.WriteLine($"{nome} o seu IMC = {imc}");

if(imc < 18.5)
    Console.WriteLine("Baixo Peso");
else if(imc >= 18.5 && imc <= 24.9)
    Console.WriteLine("Peso Normal");
else if(imc >=25 && imc <=29.9)
    Console.WriteLine("Excesso de Peso");
else if(imc > 30 && imc <= 34.9)
    Console.WriteLine("Obesidade");

Console.ReadKey();



