<?
	//Seando o TimeZone para a nossa cidade
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	
	$hora_do_dia = date('G');

	//Fazendo verificacao das horas
	if (($hora_do_dia >=6) && ($hora_do_dia <=12)) echo "Bom Dia!";
	if (($hora_do_dia >12) && ($hora_do_dia <=18)) echo "Boa Tarde!";
	if (($hora_do_dia >18) && ($hora_do_dia <=24)) echo "Boa Noite!";
	if (($hora_do_dia >24) && ($hora_do_dia <6)) echo "Boa Madrugada!";

?>