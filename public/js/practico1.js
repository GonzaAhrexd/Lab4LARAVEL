console.log("Hola")

function showPromedios(){
    hideContacto()
    let promedios = document.querySelectorAll('.promedio')
    promedios.forEach(promedio => {
        promedio.style.display = 'flex'
    })
}

function hidePromedios(){
    let promedios = document.querySelectorAll('.promedio')
    promedios.forEach(promedio => {
        promedio.style.display = 'none'
    })
}

function showContacto(){
    hidePromedios()
    let contacto = document.querySelector('.contacto')
    contacto.style.display = 'flex'
}

function hideContacto(){
    let contacto = document.querySelector('.contacto')
    contacto.style.display = 'none'
}