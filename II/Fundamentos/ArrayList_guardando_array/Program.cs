using System.Collections;

var lista = new ArrayList() { "Maria", 24, 53.7, new int[] { 1, 2, 3 } };

Exibir(lista);
Console.WriteLine();
//incluindo um array na lista
int[] numeros = new int[] { 5, 6, 7 };
lista.Add(numeros);
Exibir(lista);

//incluindo dois arrays na lista usando AddRange
int[] numeros1 = new int[] { 8, 9, 10 };
int[] numeros2 = new int[] { 11, 12, 13 };

//usar Array quando for um array de arrays

Array[] numeros3 = { numeros1, numeros2 };

lista.AddRange(numeros3);
Exibir(lista);

Console.WriteLine();
//irá incluir cada elemento separado e não o array
lista.AddRange(new int[] { 14, 15, 16 });
Exibir(lista);

void Exibir(ArrayList lista)
{
    foreach (var item in lista)
    {
        //se for true coloca o item(que é um array) em arr
        if (item is Array arr)
        {
            Console.WriteLine("É um array");
            foreach (var elemento in arr)
            {
                Console.WriteLine(elemento);
            }
            Console.WriteLine();
        }
        else
        {
            Console.WriteLine(item);
        }
    }
}


