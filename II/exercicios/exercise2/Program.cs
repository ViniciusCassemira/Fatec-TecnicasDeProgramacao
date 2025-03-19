using System;
using System.Collections.Generic;

class Program
{
    static void Main()
    {
        List<string> alunos = new List<string>(); // Lista para armazenar os nomes dos alunos
        int opcao;

        do
        {
            // Menu
            Console.Clear();
            Console.WriteLine("Menu:");
            Console.WriteLine("1. Adicionar nome");
            Console.WriteLine("2. Remover nome");
            Console.WriteLine("3. Listar todos os nomes");
            Console.WriteLine("4. Sair");
            Console.Write("Escolha uma opção: ");
            opcao = int.Parse(Console.ReadLine());

            switch (opcao)
            {
                case 1:
                    // Adicionar nome à lista
                    Console.Write("Digite o nome do aluno para adicionar: ");
                    string nomeAdicionar = Console.ReadLine();
                    alunos.Add(nomeAdicionar);
                    Console.WriteLine("Nome adicionado com sucesso!");
                    break;

                case 2:
                    // Remover um nome específico
                    Console.Write("Digite o nome do aluno para remover: ");
                    string nomeRemover = Console.ReadLine();
                    if (alunos.Remove(nomeRemover))
                    {
                        Console.WriteLine("Nome removido com sucesso!");
                    }
                    else
                    {
                        Console.WriteLine("Nome não encontrado.");
                    }
                    break;

                case 3:
                    // Listar todos os nomes armazenados
                    if (alunos.Count == 0)
                    {
                        Console.WriteLine("Não há alunos na lista.");
                    }
                    else
                    {
                        Console.WriteLine("Lista de alunos:");
                        foreach (string aluno in alunos)
                        {
                            Console.WriteLine(aluno);
                        }
                    }
                    break;

                case 4:
                    Console.WriteLine("Saindo...");
                    break;

                default:
                    Console.WriteLine("Opção inválida. Tente novamente.");
                    break;
            }

            Console.WriteLine("Pressione qualquer tecla para continuar...");
            Console.ReadKey();
        }
        while (opcao != 4);
    }
}
