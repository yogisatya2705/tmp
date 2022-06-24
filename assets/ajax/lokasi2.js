if ($('#panorama2').length) {
	$.ajax({
		type: "post",
		url: base_url + "pengunjung/get_hotspot/lokasi2",
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

			
		var lokasi2 = pannellum.viewer('panorama2', {
			"type": "equirectangular",
			"panorama": base_url + "assets/images/2.jpg",
			"autoLoad": true,
			"hotSpots": point,
		});
		}
	});

}

if ($('#panorama3').length) {
	$.ajax({
		type: "post",
		url: base_url + "pengunjung/get_hotspot/lokasi3",
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

			
		var lokasi3 = pannellum.viewer('panorama3', {
			"type": "equirectangular",
			"panorama": base_url + "assets/images/3.jpg",
			"autoLoad": true,
			"hotSpots": point,
		});
		}
	});

}

if ($('#panorama4').length) {
	$.ajax({
		type: "post",
		url: base_url + "pengunjung/get_hotspot/lokasi4",
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

			
		var lokasi4 = pannellum.viewer('panorama4', {
			"type": "equirectangular",
			"panorama": base_url + "assets/images/4.jpg",
			"autoLoad": true,
			"hotSpots": point,
		});
		}
	});

}

if ($('#panorama5').length) {
	$.ajax({
		type: "post",
		url: base_url + "pengunjung/get_hotspot/lokasi5",
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

			
		var lokasi5 = pannellum.viewer('panorama5', {
			"type": "equirectangular",
			"panorama": base_url + "assets/images/5.jpg",
			"autoLoad": true,
			"hotSpots": point,
		});
		}
	});

}

if ($('#panorama6').length) {
	$.ajax({
		type: "post",
		url: base_url + "pengunjung/get_hotspot/lokasi6",
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

			
		var lokasi6 = pannellum.viewer('panorama6', {
			"type": "equirectangular",
			"panorama": base_url + "assets/images/6.jpg",
			"autoLoad": true,
			"hotSpots": point,
		});
		}
	});

}

if ($('#panorama7').length) {
	$.ajax({
		type: "post",
		url: base_url + "pengunjung/get_hotspot/lokasi7",
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

			
		var lokasi7 = pannellum.viewer('panorama7', {
			"type": "equirectangular",
			"panorama": base_url + "assets/images/7.jpg",
			"autoLoad": true,
			"hotSpots": point,
		});
		}
	});

}

if ($('#panorama8').length) {
	$.ajax({
		type: "post",
		url: base_url + "pengunjung/get_hotspot/lokasi8",
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

			
		var lokasi8 = pannellum.viewer('panorama8', {
			"type": "equirectangular",
			"panorama": base_url + "assets/images/8.jpg",
			"autoLoad": true,
			"hotSpots": point,
		});
		}
	});

}

if ($('#panorama9').length) {
	$.ajax({
		type: "post",
		url: base_url + "pengunjung/get_hotspot/lokasi9",
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

			
		var lokasi9 = pannellum.viewer('panorama9', {
			"type": "equirectangular",
			"panorama": base_url + "assets/images/9.jpg",
			"autoLoad": true,
			"hotSpots": point,
		});
		}
	});

}

if ($('#panorama10').length) {
	$.ajax({
		type: "post",
		url: base_url + "pengunjung/get_hotspot/lokasi10",
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

			
		var lokasi10 = pannellum.viewer('panorama10', {
			"type": "equirectangular",
			"panorama": base_url + "assets/images/10.jpg",
			"autoLoad": true,
			"hotSpots": point,
		});
		}
	});

}


if ($('#panorama11').length) {
	$.ajax({
		type: "post",
		url: base_url + "pengunjung/get_hotspot/lokasi11",
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

			
		var lokasi11 = pannellum.viewer('panorama11', {
			"type": "equirectangular",
			"panorama": base_url + "assets/images/11.jpg",
			"autoLoad": true,
			"hotSpots": point,
		});
		}
	});

}

if ($('#panorama12').length) {
	$.ajax({
		type: "post",
		url: base_url + "pengunjung/get_hotspot/lokasi12",
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

			
		var lokasi12 = pannellum.viewer('panorama12', {
			"type": "equirectangular",
			"panorama": base_url + "assets/images/12.jpg",
			"autoLoad": true,
			"hotSpots": point,
		});
		}
	});

}
