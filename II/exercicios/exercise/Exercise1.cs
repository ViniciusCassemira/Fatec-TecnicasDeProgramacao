using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace exercise1
{
    public class Veiculo
    {
        public string Marca { get; }
        private string placa;

        public Veiculo(string marca, string placa)
        {
            Marca = marca;
            Placa = placa;
        }

        public string Placa
        {
            set { placa = value; }
        }

        public void ExibirInformacoes()
        {
            Console.WriteLine($"Marca: {Marca}");
        }
    }


    public class Carro : Veiculo
    {
        public int Portas { get; set; }
        public Carro(string Marca, string Placa,  int portas) : base(Marca, Placa)
        {
            Portas = portas;
        }

        public void Exibir()
        {
            Console.WriteLine($"Número de portas: {Portas}");
        }
    }

    internal class Moto : Veiculo
    {
        public bool PartidaEletrica { get; }

        public Moto(string Marca, string Placa, bool partidaEletrica) : base(Marca, Placa){
            PartidaEletrica = partidaEletrica;
        }

        public void Exibir(){
            Console.WriteLine($"Possui partida elétrica: {(PartidaEletrica ? "Sim" : "Não")}");
        }

    }
}
