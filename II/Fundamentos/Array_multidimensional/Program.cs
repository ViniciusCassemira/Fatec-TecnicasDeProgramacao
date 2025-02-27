int[,] numeros = new int[2,2] { {1,2}, { 3, 4 } };

foreach(var numero in numeros)
{
    Console.WriteLine(numero);
}
Console.WriteLine();

for(var linha=0; linha < numeros.GetLength(0); linha++)
{
    for(var coluna = 0; coluna < numeros.GetLength(1); coluna++)
    {
        Console.WriteLine(numeros[linha,coluna]);
    }
}

