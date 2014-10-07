$.ajax({
	  url: "http://ipinfo.io",
			  dataType: "jsonp",
			  success: function(data){
    var cityRegion = data.city +', '+data.region,
        ip = data.ip;
        $('.city-region').text(cityRegion);
        $('.ip').text(ip);
	  }
});