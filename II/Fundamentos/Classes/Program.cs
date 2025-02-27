var x = 10;
int y = 20;

int z = 20;
int w = 30;
//var conta = new Matematica();
//Matematica conta = new Matematica();
Matematica conta = new();

conta.soma(y, x);
conta.subtracao(ref z, ref w);

Console.WriteLine($"valor de z: {z}\nvalor de w:{w}");
Console.WriteLine($"valor de x: {x}\nvalor de y:{y}");

public class Matematica
{
    public void soma(int num1, int num2)
    {
        Console.WriteLine($"soma = {num1 + num2}");
        num1 = 50;
        num2 = 100;
    }

    public void soma(int num1, int num2, int num3)
    {
        Console.WriteLine($"soma = {num1 + num2 + num3}");
    }
    public void soma(double num1, int num2)
    {
        Console.WriteLine($"soma = {num1 + num2}");
    }
    public void soma(int num1, double num2)
    {
        Console.WriteLine($"soma = {num1 + num2}");
    }

    public void subtracao(ref int num1, ref int num2)
    {
        Console.WriteLine($"subtracao = {num1 - num2}");
        num1 = 50;
        num2 = 100;
    }
}

