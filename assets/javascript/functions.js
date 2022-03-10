$('.sidenav').sidenav();
$('.collapsible').collapsible();
$('.modal').modal();
$('ul.tabs').tabs();
$('select').formSelect();
$('.tooltipped').tooltip();
$('.dropdown-trigger').dropdown();

$('.date').mask('00/00/0000');
$('.hour').mask('00:00');
$('.numero').mask('00000000');
$('.cpf').mask('000.000.000-00');
$('.cep').mask('00000-000');
$('.fone').mask('(00) 0000-0000#00');
$('.real').mask("00.000,00", {reverse: true});

$('.datepicker').datepicker({
	format: 'dd/mm/yyyy',
	autoClose: true,
	i18n: {
		cancel: 'Cancelar',
		clear: 'Limpar',
		months: [
			'Janeiro',
			'Fevereiro',
			'Março',
			'Abril',
			'Maio',
			'Junho',
			'Julho',
			'Agosto',
			'Setembro',
			'Outubro',
			'Novembro',
			'Dezembro'
		],
		monthsShort: [
			'Jan',
			'Fev',
			'Mar',
			'Abr',
			'Mai',
			'Jun',
			'Jul',
			'Ago',
			'Set',
			'Out',
			'Nov',
			'Dez',
		],
		weekdays: [
		  	'Domingo',
		  	'Segunda',
		  	'Terça',
		  	'Quarta',
		  	'Quinta',
		  	'Sexta',
		  	'Sábado'
		],
		weekdaysShort: [
		  	'Dom',
		  	'Seg',
		  	'Ter',
		  	'Qua',
		  	'Qui',
		  	'Sex',
		  	'Sáb'
		],
		weekdaysAbbrev: ['D','S','T','Q','Q','S','S']
	},
});

$(".open-modal").on('click', function(){
    var modal = $(this).data('modal');
    $("#"+modal).modal('open');
});

$(document).ready(function(){
	window.setTimeout(function(){
		$(".scale-transition").addClass('scale-out');
		$(".scale-transition").addClass('scale-in');
	}, 960);
});