if ($('#panorama').length) {
	$.ajax({
		type: "post",
		url: base_url + "pengunjung/get_hotspot/lokasi1",
		data: "",
		dataType: "json",
		success: function(response) {
			var point = [];
			for (let index = 0; index < response.length; index++) {
				point[index] = {
					"pitch": response[index].pitch,
					"yaw": response[index].yaw,
					"createTooltipArgs": {
						'hotspot_id': response[index].id,
						'nama': "lokasi" + index,
						'type': response[index].type,
						'link': response[index].link,
					},
					"createTooltipFunc": hotSpot
				};

			}

			var lokasi1 = pannellum.viewer('panorama', {
				"type": "equirectangular",
				"panorama": "assets/images/1.jpg",
				"autoLoad": true,
				"hotSpots": point,
			});
		}

	});

	
}


// assets/untitled-1-recovered.jpg

