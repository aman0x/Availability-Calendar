<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="fullcalendar.min.css" rel="stylesheet"/>
  <script src="jquery.min.js"></script>
<script src="moment.min.js"></script>
<script src="fullcalendar.min.js"></script>
</head>
<body>
  <div id='calendar'></div>
</body>

<script>
$(document).ready(function() {
	
	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		editable: true,
		eventLimit: true, // allow "more" link when too many events
		events: {
			url: 'php/get-events.php',
			error: function() {
				$('#script-warning').show();
			}
		},
		loading: function(bool) {
			$('#loading').toggle(bool);
		}
	});		
});
</script>
</html>