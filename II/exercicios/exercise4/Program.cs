//Exercício 3

using System.Collections;
using System.Reflection.Metadata.Ecma335;
using System.Xml;

ArrayList lista = new();
int opcao;

void read(){
    Console.WriteLine("Aperte qualquer tecla para continuar");
    Console.ReadKey();
}

do
{

    Console.Clear();
    Console.WriteLine("Menu:");
    Console.WriteLine("1. Adicionar à lista");
    Console.WriteLine("2. Remover um item");
    Console.WriteLine("3. Exibir produtos");
    Console.WriteLine("4. Sair");
    Console.Write("Escolha uma opção: ");
    opcao = int.Parse(Console.ReadLine());

    switch (opcao)
    {
        case 1:
            Console.WriteLine("Isira um novo produto: ");
            var produto = Console.ReadLine();
            lista.Add(produto);
            Console.WriteLine("Produto adicionado com sucesso");
            read();
        break;

        case 2:
            if(lista.Count == 0)
            {
                Console.WriteLine("Nenhum produto na lista");
                read();
            }
            else {
                Console.WriteLine("Digite o nome do produto que deseja apagar");
                var item = Console.ReadLine();

                if (!lista.Contains(item))
                {
                    Console.WriteLine("Item não existente na lists de produtos;");
                    read();
                }
                else
                {
                    lista.Remove(item);
                    Console.WriteLine("Produto removido com sucesso");
                    read();
                }
            }
        break;

        case 3:
            if(lista.Count == 0)
            {
                Console.WriteLine("Nenhum produto existente para ser listado");
                read(); ;
            }
            else
            {
                foreach (string lista_produto in lista)
                {
                    Console.WriteLine(lista_produto);
                }
                read();
            }
            break;

        case 4:
            Console.WriteLine("Até a próxima");  
        break;

        default:
            Console.WriteLine("Opção inválida");
            read();
        break;
    }

} while (opcao != 4);