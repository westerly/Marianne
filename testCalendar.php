<html>

	
	<head>
		<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script src="http://multidatespickr.sourceforge.net/jquery-ui.multidatespicker.js"></script>
	</head>
	
		<body>
			<div id="datePick" type="text"/>

			<script> 
			
				var dates = [
					[2014, 4, 10],
					[2014, 4, 11],
					[2014, 4, 25]
				];
				
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
				
				/*$.datepicker.regional['nl'] = {clearText: 'Effacer', clearStatus: '',
					closeText: 'sluiten', closeStatus: 'Onveranderd sluiten ',
					prevText: '<vorige', prevStatus: 'Zie de vorige maand',
					nextText: 'volgende>', nextStatus: 'Zie de volgende maand',
					currentText: 'Huidige', currentStatus: 'Bekijk de huidige maand',
					monthNames: ['januari','februari','maart','april','mei','juni',
					'juli','augustus','september','oktober','november','december'],
					monthNamesShort: ['jan','feb','mrt','apr','mei','jun',
					'jul','aug','sep','okt','nov','dec'],
					monthStatus: 'Bekijk een andere maand', yearStatus: 'Bekijk nog een jaar',
					weekHeader: 'Sm', weekStatus: '',
					dayNames: ['zondag','maandag','dinsdag','woensdag','donderdag','vrijdag','zaterdag'],
					dayNamesShort: ['zo', 'ma','di','wo','do','vr','za'],
					dayNamesMin: ['zo', 'ma','di','wo','do','vr','za'],
					dayStatus: 'Gebruik DD als de eerste dag van de week', dateStatus: 'Kies DD, MM d',
					dateFormat: 'dd/mm/yy', firstDay: 1, 
					initStatus: 'Kies een datum', isRTL: false};*/
				$.datepicker.setDefaults($.datepicker.regional['fr']);
				
				
				//$('#datePick').datepicker("setDate", new Date(2014,4,15) );
			</script>
			
		</body>
		
</html>