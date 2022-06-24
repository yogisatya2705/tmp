

// // Hot spot creation function
function hotSpot(element, args) {
	// console.log(args);
	if (args.type == "link") {
		element.innerHTML = '<a href="'+ base_url + args.link + '" class="btn btn-dark"><i class="fas fa-arrow-alt-circle-up"></i></i></a>';
	}

	if (args.type == "informasi") {
		element.innerHTML = '<button type="button" class="btn btn-dark" onclick = info(' + args.hotspot_id + ')><i class="fas fa-info-circle"></i></button>';
	}
}

function info(hotspot_id) {
	$.ajax({
		type: "post",
		url: base_url + "pengunjung/informasi_hotspot",
		data: "id=" + hotspot_id,
		dataType: "json",
		success: function(response) {
			$('#museum_collection').modal('hide');
			$('#hotspot-info').modal('show');
			$('#nama').text(response.nama);
			$('#informasi').html(response.isi_post);
		}
	});
}

(function() {
	$(document).on('click','#nav_museum',function (e) { 
		e.preventDefault();
		var tampilan = "";
		$.ajax({
			type: "POST",
			url: base_url + "pengunjung/get_hotspot2",
			data: "",
			dataType: "json",
			success: function (response) {
				for (let index = 0; index < response.length; index++) {
					$.ajax({
						type: "post",
						url: base_url+"pengunjung/informasi_hotspot",
						data: "id="+response[index].id,
						dataType: "json",
						success: function (response) {
							tampilan += '<a class="text-dark" onclick="info('+response.id+')">';
							tampilan += '<div class="p-2">';
							tampilan += '<div class="card" style="width: 21rem;">';
							tampilan += '<img class="card-img-top" src="' + base_url + 'assets/picture/' + response.gambar + '" alt="Card image cap">';
							tampilan += '<div class="card-body">';
							tampilan += '<h5 class="card-title">'+response.nama+'</h5>';
							tampilan += '</div>';
							tampilan += '</div>';
							tampilan += '</div>';
							tampilan += '</a>';
							$('#_museum').html(tampilan);
						}
					});
				}
				
			
				
			}
		});
		
	});
})();
