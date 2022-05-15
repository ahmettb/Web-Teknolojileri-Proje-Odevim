const dog_btn = document.getElementById('kopekbuton');
const dog_result = document.getElementById('kopekfoto');

dog_btn.addEventListener('click', getRandomDog);



function getRandomDog() {
	fetch('https://random.dog/woof.json')
		.then(res => res.json())
		.then(data => {
			if(data.url.includes('.mp4')) {
				getRandomDog();
			}
			else {
				kopekfoto.innerHTML = `<img src=${data.url} alt="dog" />`;
			}
		});
}







