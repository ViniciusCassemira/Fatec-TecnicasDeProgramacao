using System;

public interface ISalario
{
    double CalcularSalario();
}

public class FuncionarioHorista : ISalario
{
    private int horasTrabalhadas;
    private double valorPorHora;

    public FuncionarioHorista(int horasTrabalhadas, double valorPorHora)
    {
        this.horasTrabalhadas = horasTrabalhadas;
        this.valorPorHora = valorPorHora;
    }

    public double CalcularSalario()
    {
        return horasTrabalhadas * valorPorHora;
    }
}

public class FuncionarioMensalista : ISalario
{
    private double salarioMensal;

    public FuncionarioMensalista(double salarioMensal)
    {
        this.salarioMensal = salarioMensal;
    }

    public double CalcularSalario()
    {
        return salarioMensal;
    }
}

class Program
{
    static void Main()
    {
        FuncionarioHorista horista = new FuncionarioHorista(160, 25.0); // 160 horas, R$25 por hora
        Console.WriteLine($"Salário do funcionário horista: R${horista.CalcularSalario()}");

        FuncionarioMensalista mensalista = new FuncionarioMensalista(3000.0); // Salário fixo de R$3000
        Console.WriteLine($"Salário do funcionário mensalista: R${mensalista.CalcularSalario()}");
    }
}