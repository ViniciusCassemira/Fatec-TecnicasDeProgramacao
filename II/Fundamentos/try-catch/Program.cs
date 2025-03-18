try
{
  Console.WriteLine("Digite um número inteiro");
  var dividendo = Convert.ToInt32(Console.ReadLine());
  Console.WriteLine("Digite um número inteiro");
  var divisor = Convert.ToInt32(Console.ReadLine());
  int resultado = dividendo / divisor;
  Console.WriteLine(resultado);
}
catch(FormatException)
{
  Console.WriteLine("Entre com um valor inteiro");
}
catch(OverflowException)
{
  Console.WriteLine("O número ineiro excedeu a capacidade");
}
catch(DivideByZeroException)
{
  Console.WriteLine("Não pode dividir um número pr 0");
}
catch(Exception ex)
{
  Console.WriteLine("ALgo deu errado!" + ex.Message);
}
finally
{
  Console.WriteLine("Fim da execução");
}
