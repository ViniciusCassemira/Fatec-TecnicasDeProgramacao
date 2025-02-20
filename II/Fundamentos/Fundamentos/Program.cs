using System;

class Program
{

  static void Main(string[] args)
  {
    Console.WriteLine("Hello");
    int varInt = 12;
    float varFloat = 12.75f;
    double varDouble = 15.23;
    decimal varDecimal = 15.23m;
  
    Console.WriteLine("Valor inteiro: " + varInt + "\nValor double: " + varDouble);
    Console.WriteLine($"Valor inteiro: {varInt} \nValor double: {varDouble}");

    Console.ReadKey();
  }

}