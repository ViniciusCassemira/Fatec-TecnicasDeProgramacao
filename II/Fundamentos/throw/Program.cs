try{
  A.ProcessarA();
}catch{
  Console.WriteLine("Estou fora do Processar A");
}

class A(){
  public static void ProcessarA(){

      B.ProcessarB();

    // try
    // {
    //   B.ProcessarB();
    // }catch(Exception)
    // {
    //   Console.WriteLine("Estou no processar A - Método não implementado");
    // }
  }
}

class B(){
  public static void ProcessarB(){
    throw new NotImplementedException("Método não implementado");
  }
}