function Weather () {
  const req = new XMLHttpRequest()

    // send a new request to the openweathermap API
	req.open('GET', 'https://api.openweathermap.org/data/2.5/weather?q=Lille&units=metric&APPID=7b869320ac280f7052d6d53e160fdcc8', false)
	req.send()

    // receive the responce to the openweathermap API and translate it to a JSON object
	let data = JSON.parse(req.response);

    // Set the temperature
	let temp = data.main.temp;

    // insert the temperature to the DOM
	document.getElementById('temp').innerHTML = temp;

    // Set the state 
	let state = data.weather[0].main;

    // Change the Lille's picture according to the weather 
	if (state == 'Rain' || 'Clear' || 'Clouds') {
	    document.getElementById('pictureOfLille').setAttribute('src', `assets/img/Lille_${state}.jpg`);
	} else{
	    document.getElementById('pictureOfLille').setAttribute('src', 'http://s3.amazonaws.com/theoatmeal-img/coloring_book/header.png');
	}

}
