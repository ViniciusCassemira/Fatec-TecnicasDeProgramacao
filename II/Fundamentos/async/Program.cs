using System;
using System.Threading;
using System.Threading.Tasks;

Console.WriteLine("Café da manhã síncrono");
CafeDaManha();

Console.WriteLine();
Console.WriteLine();

Console.WriteLine("Café da manhã assíncrono");
await CafeDaManhaAsync();

// ------------------------------------------------
// Café da manhã síncrono
static void CafeDaManha()
{
    Console.WriteLine("Prepara o café da manhã");

    var cafe = PrepararCafe();
    var pao = PrepararPao();
    ServirCafeManha(cafe, pao);
}

static Cafe PrepararCafe()
{
    Console.WriteLine("Fervendo a água");
    Thread.Sleep(2000);
    Console.WriteLine("Coando o café");
    Thread.Sleep(3000);
    Console.WriteLine("Adoçando o café");
    Thread.Sleep(2000);
    return new Cafe();
}

static Pao PrepararPao()
{
    Console.WriteLine("Cortando o pão");
    Thread.Sleep(2000);
    Console.WriteLine("Passando a manteiga");
    Thread.Sleep(3000);
    Console.WriteLine("Tostando o pão");
    Thread.Sleep(2000);
    return new Pao();
}

static void ServirCafeManha(Cafe cafe, Pao pao)
{
    Console.WriteLine("Servindo o café da manhã");
    Thread.Sleep(2000);
    Console.WriteLine("Café servido");
}

// ------------------------------------------------
// Café da manhã assíncrono
static async Task CafeDaManhaAsync()
{
    Console.WriteLine("Prepara o café da manhã de forma assíncrona");

    var tarefaCafe = PrepararCafeAsync();
    var tarefaPao = PrepararPaoAsync();

    var pao = await tarefaPao;
    var cafe = await tarefaCafe;

    ServirCafeManha(cafe, pao);
}

static async Task<Cafe> PrepararCafeAsync()
{
    Console.WriteLine("Fervendo a água");
    await Task.Delay(2000);
    Console.WriteLine("Coando o café");
    await Task.Delay(3000);
    Console.WriteLine("Adoçando o café");
    await Task.Delay(2000);
    return new Cafe();
}

static async Task<Pao> PrepararPaoAsync()
{
    Console.WriteLine("Cortando o pão");
    await Task.Delay(2000);
    Console.WriteLine("Passando a manteiga");
    await Task.Delay(3000);
    Console.WriteLine("Tostando o pão");
    await Task.Delay(2000);
    return new Pao(); // Adicionado retorno correto da instância de Pao
}

// ------------------------------------------------
// Classes auxiliares
internal class Cafe
{
    public Cafe() { }
}

internal class Pao
{
    public Pao() { }
}
