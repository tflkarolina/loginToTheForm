const currentDate = new Date().toISOString().split('T')[0]  //toISOString: "2011-10-05T14:48:00.000Z"
const dateInput = document.querySelector('#date')
dateInput.setAttribute('max',currentDate)