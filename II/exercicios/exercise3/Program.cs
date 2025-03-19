//Exercício 3

int[,,] notas = new int[3, 3, 3];
int opcao;

do
{

    Console.Clear();
    Console.WriteLine("Menu:");
    Console.WriteLine("1. Adicionar notas");
    Console.WriteLine("2. Exibir notas");
    Console.WriteLine("3. Visualizar médias");
    Console.WriteLine("4. Sair");
    Console.Write("Escolha uma opção: ");
    opcao = int.Parse(Console.ReadLine());

    switch (opcao)
    {
        case 1:
            for (int aluno = 0; aluno < 3; aluno++)
            {
                Console.WriteLine($"\nAluno {aluno + 1}:");
                for (int materia = 0; materia < 3; materia++)
                {
                    for (int nota = 0; nota < 3; nota++)
                    {
                        Console.Write($"Digite a nota {nota + 1} da matéria {materia + 1}: ");
                        notas[aluno, materia, nota] = int.Parse(Console.ReadLine());
                    }
                }
            }
            break;

        case 2:
            Console.WriteLine("\nNotas dos alunos:");
            for (int aluno = 0; aluno < 3; aluno++)
            {
                Console.WriteLine($"\nAluno {aluno + 1}:");
                for (int materia = 0; materia < 3; materia++)
                {
                    Console.Write($"Matéria {materia + 1}: ");
                    for (int nota = 0; nota < 3; nota++)
                    {
                        Console.Write(notas[aluno, materia, nota] + " ");
                    }
                    Console.WriteLine();
                }
            }
            Console.ReadLine();
            break;

        case 3:
            Console.WriteLine("\nMédias dos alunos:");
            for (int aluno = 0; aluno < 3; aluno++)
            {
                float mediaAluno = 0;
                for (int materia = 0; materia < 3; materia++)
                {
                    float mediaMateria = 0;
                    for (int nota = 0; nota < 3; nota++)
                    {
                        mediaMateria += notas[aluno, materia, nota];
                    }
                    mediaMateria /= 3;
                    mediaAluno += mediaMateria;
                }
                mediaAluno /= 3;
                Console.WriteLine($"Média do aluno {aluno + 1}: {mediaAluno:F2}");
            }
            Console.ReadLine();
            break;

        default:
            Console.WriteLine("Opção inválida");
            break;
    }

} while (opcao != 4);