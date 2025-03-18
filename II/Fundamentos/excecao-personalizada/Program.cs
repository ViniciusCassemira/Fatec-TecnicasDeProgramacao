using System;

Conta conta = new Conta();
conta.Agencia = "000-1";
conta.NumeroConta = "123456";
conta.Depositar(5000);
conta.Mostrar();
try
{
    conta.Sacar(10000);
}
catch (SaldoInsuficienteException ex)
{
    Console.WriteLine($"Erro: {ex.Message}");
}


// Classe de Exceção Personalizada
public class SaldoInsuficienteException : Exception
{
    public SaldoInsuficienteException() { }

    public SaldoInsuficienteException(string message) : base(message) { }

    public SaldoInsuficienteException(string message, Exception inner) : base(message, inner) { }

    public SaldoInsuficienteException(double valor, double saldo)
        : base($"O valor do saque {valor} é maior que o saldo {saldo}.") { }
}

// Classe Conta
public class Conta
{
    public string? Agencia { get; set; }
    public string? NumeroConta { get; set; }
    public double Saldo { get; private set; } // Saldo deve ser um número e privado para evitar alterações externas

    public void Sacar(double valor)
    {
        if (Saldo < valor)
        {
            throw new SaldoInsuficienteException(valor, Saldo);
        }
        else
        {
            Saldo -= valor;
            Console.WriteLine($"Saque de {valor:C} realizado com sucesso. Novo saldo: {Saldo:C}");
        }
    }

    public void Depositar(double valor)
    {
        Saldo += valor;
        Console.WriteLine($"Depósito de {valor:C} realizado com sucesso. Novo saldo: {Saldo:C}");
    }

    public void Mostrar()
    {
        Console.WriteLine($"Agência: {Agencia}\nConta: {NumeroConta}\nSaldo: {Saldo:C}");
    }
}
