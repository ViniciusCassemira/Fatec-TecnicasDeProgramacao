Console.WriteLine("IMC calc");

Console.WriteLine("Your name");
string? name = Console.ReadLine();

Console.WriteLine("Your weight");
double weight = Convert.ToDouble(Console.ReadLine());

Console.WriteLine("Your height");
double height = double.Parse(Console.ReadLine());

double imc = weight / Math.Pow(height, 2);
Console.WriteLine($"{name}, your IMC = {imc}");

if(imc < 18.5)
  Console.WriteLine("underweight");
else if(imc >= 18.5 && imc <= 24.9)
  Console.WriteLine("normal weight");
else if(imc > 30)
  Console.WriteLine("obese");

Console.ReadKey();