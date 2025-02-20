using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Transactions;

namespace attributes
{
    internal class Product
    {
        public Product(string name)
        {
            Name = name;
        }

        public Product(string Name, double price, int minStock) : this(Name)
        {
            //this.Name = Name;
            Price = price;
            //Discount = discount; atributo somente de leitura
            MinStock = minStock; //Só de gravação
        }

        private string? name;
        public string? Name 
        {
            get { return name.ToUpper(); }
            set { name = value ?? ""; } 
        }

        private double price;
        public double Price 
        { 
            get { return price; } 
            set
            {
                if (value < 5.00)
                {
                    price = 5.00;
                }else 
                {
                    price = value;
                }
            } 
        }

        private double discount = 0.05;
        public double Discount { 
            get { return discount; } 
        }
        private int minStock;
        public int MinStock {
            set {minStock = value; } 
        }
        public double FinalPrice { 
            get { return Price - (Price * Discount); } 
        }

        public static string? Description { get; set; }

        public void show()
        {
            Console.WriteLine($"Name: {Name}\nPrice: {Price.ToString("c")}\nDiscount: {Discount.ToString("c")}\nMinimy Stock: {minStock}\nFinal price: {FinalPrice.ToString("c")}\nDescription: {Description}");
        }
        public static void show(Product product)
        {
            Console.WriteLine($"Name: {product.Name}\nPrice: {product.Price.ToString("c")}\nDiscount: {product.Discount.ToString("c")}\nMinimy Stock: {product.minStock}\nFinal price: {product.FinalPrice.ToString("c")}\nDescription: {Description}");
        }
    }
}

