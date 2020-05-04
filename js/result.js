var id = 0;
function remove(index) {
	id = index;
	console.log(id);
}

function removeLead() {
	console.log(id);
	$.post(
	    'result.php',
	    {id: id},
	    function(data) {

	    },
	    'json'
	);
	// $.ajax({
	// 	async: false,
	// 	type: 'POST',
	// 	url: '../result.php',
	// 	data: { id: id },
	// 	success: function(data) {
	// 		console.log('success');
	// 	}
	// });
}
