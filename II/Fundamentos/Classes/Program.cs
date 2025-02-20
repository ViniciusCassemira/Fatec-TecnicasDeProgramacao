using System.Xml.Serialization;

int x = 10;
int y = 20;
int v = 0;

int z = 20;
int w = 30;

Math count = new();

count.Sum(x, y);
count.Sub(ref z, ref w);
count.Sum(v);

Console.WriteLine($"Valor de z: {z}\nValor de w: {w}\nValor de {v}");

public class Math
{
    public void Sum(int num1, int num2)
    {
        Console.WriteLine($"Sum = {num1 + num2}");
    }
    public void Sum(int num1)
    {
        num1 = num1 + 1;
    }
    public void Sub(ref int num1, ref int num2)
    {
        Console.WriteLine($"Sub = {num1 - num2}");
        num1 = 50;
        num2 = 100;
    }
}