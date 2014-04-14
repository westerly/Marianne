<script type="text/javascript" charset="utf-8">
		
			datestoselect = <?php echo "'.$paramDate.'"?>;
			dates = datestoselect.split(",");
			for (var i=0; i < dates.length; ++i){
				dates [i] = dates [i].split("-");
			}
				
			$(document).ready(function(){
			   $('#datePick').multiDatesPicker({
				numberOfMonths: 3,
				beforeShowDay: function (date){
					var year = date.getFullYear(), month = date.getMonth(), day = date.getDate();
					for (var i=0; i < dates.length; ++i)
						if (year == dates[i][0] && month == dates[i][1] - 1 &&  day == dates[i][2])
							return [false, 'ui-state-highlight ui-state-active'];
					
					return [false];
				}
			   });
			});
			
			<?php
			
			switch ($langs->currentLang) {
			case "fr":
			?>
				$.datepicker.regional['fr'] = {clearText: 'Effacer', clearStatus: '',
					closeText: 'Fermer', closeStatus: 'Fermer sans modifier',
					prevText: '<Préc', prevStatus: 'Voir le mois précédent',
					nextText: 'Suiv>', nextStatus: 'Voir le mois suivant',
					currentText: 'Courant', currentStatus: 'Voir le mois courant',
					monthNames: ['Janvier','Février','Mars','Avril','Mai','Juin',
					'Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
					monthNamesShort: ['Jan','Fév','Mar','Avr','Mai','Jun',
					'Jul','Aoû','Sep','Oct','Nov','Déc'],
					monthStatus: 'Voir un autre mois', yearStatus: 'Voir un autre année',
					weekHeader: 'Sm', weekStatus: '',
					dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
					dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
					dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
					dayStatus: 'Utiliser DD comme premier jour de la semaine', dateStatus: 'Choisir le DD, MM d',
					dateFormat: 'dd/mm/yy', firstDay: 0, 
					initStatus: 'Choisir la date', isRTL: false
				};
				$.datepicker.setDefaults($.datepicker.regional['fr']);
			<?php			
					break;
				case "pt":
			?>
				$.datepicker.regional['pt'] = {
					closeText: 'Fechar',
					prevText: '&#x3c;Anterior',
					nextText: 'Seguinte',
					currentText: 'Hoje',
					monthNames: ['Janeiro','Fevereiro','Mar&ccedil;o','Abril','Maio','Junho',
					'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
					monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun',
					'Jul','Ago','Set','Out','Nov','Dez'],
					dayNames: ['Domingo','Segunda-feira','Ter&ccedil;a-feira','Quarta-feira','Quinta-feira','Sexta-feira','S&aacute;bado'],
					dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','S&aacute;b'],
					dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','S&aacute;b'],
					weekHeader: 'Sem',
					dateFormat: 'dd/mm/yy',
					firstDay: 0,
					isRTL: false,
					showMonthAfterYear: false,
					yearSuffix: ''
				};
				$.datepicker.setDefaults($.datepicker.regional['pt']);
			
			<?php
					break;
			}
			?>
			
</script>