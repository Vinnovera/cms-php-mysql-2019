const views = {
	login: ['#loginFormTemplate', '#registerFormTemplate']
}

function renderView(view) {
	// Definera ett target
	const target = document.querySelector('main')

	// Rensa innehållet eftersom innehållet bara växer om vi kör flera renderView()
	target.innerHTML = ''

	// Loopa igenom våran "view"
	view.forEach(template => {
		// Hämta innehållet i templaten
		const templateMarkup = document.querySelector(template).innerHTML
		console.log(templateMarkup)

		// Skapa en div
		const div = document.createElement('div')

		// Fyll den diven med innehållet
		div.innerHTML = templateMarkup

		// Lägg in den diven i target (main-elementet)
		target.append(div)
	})
}

renderView(views.login)

const loginForm = document.querySelector('#loginForm')
loginForm.addEventListener('submit', event => {
	event.preventDefault()

	const formData = new FormData(loginForm)
	fetch('/api/login', {
		method: 'POST',
		body: formData
	})
		.then(response => {
			if (!response.ok) {
				renderView(view.loginError)
				return Error(response.statusText)
			} else {
				renderView(view.loggedIn)
				return response.json()
			}
		})
		.catch(error => {
			console.error(error)
		})
})
