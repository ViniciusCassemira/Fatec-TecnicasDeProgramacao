<?php
require_once 'paciente.php';
require_once 'servico.php';
require_once 'exame.php';
require_once 'limpezaRestauracao.php';
require_once 'consulta.php';
require_once 'horario.php';
require_once 'agenda.php';

$paciente = new Paciente("Vinicius", "12.345.678-9", "Rua do Pacifista, nº6, Diadema", "(11) 99999999", "11/09/2001", "Engenheiro");
$exame = new Exame("Exame de Sangue", 120.00, "Jejum de 8 horas", "Laboratorial");
$limpeza = new LimpezaRestauracao("Limpeza Dental", 150.00, "Escova B-3", "Dente 12");
$consulta = new Consulta("Retorno após o exame de sangue.");
$horario = new Horario("2024-09-06", "14:00");
$agenda = new Agenda(2024);

echo "<h3>Paciente</h3>";
echo "Nome: " . $paciente->getNome() . "<br>";
echo "RG: " . $paciente->getRg() . "<br>";
echo "Endereço: " . $paciente->getEndereco() . "<br>";
echo "Telefone: " . $paciente->getTelefone() . "<br>";
echo "Data de Nascimento: " . $paciente->getDataNascimento() . "<br>";
echo "Profissão: " . $paciente->getProfissao() . "<br><hr>";

echo "<h3>Serviço - Exame</h3>";
echo "Descrição: " . $exame->getDescricao() . "<br>";
echo "Preço: R$ " . $exame->getValor() . "<br>";
echo "Medidas Preventivas: " . $exame->getMedidaPreventiva() . "<br>";
echo "Tipo de Exame: " . $exame->getTipoDoExame() . "<br><hr>";

echo "<h3>Serviço - Limpeza/Restauração</h3>";
echo "Descrição: " . $limpeza->getDescricao() . "<br>";
echo "Preço: R$ " . $limpeza->getValor() . "<br>";
echo "Material Usado: " . $limpeza->getMaterialUsado() . "<br>";
echo "Dente Tratado: " . $limpeza->getDenteTratado() . "<br><hr>";

echo "<h3>Consulta</h3>";
echo "Histórico: " . $consulta->getHistorico() . "<br><hr>";

echo "<h3>Horário</h3>";
echo "Data: " . $horario->getData() . "<br>";
echo "Hora: " . $horario->getHora() . "<br><hr>";

echo "<h3>Agenda</h3>";
echo "Ano: " . $agenda->getAno() . "<br>";

?>