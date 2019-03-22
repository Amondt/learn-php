window.onload = () => {
    var buttons = document.querySelectorAll("input[type=button]")
    var usrInput = document.querySelector("#usrInput")

    buttons.forEach((button) => {
        if (button.id == 'del') {
            button.addEventListener('click', () => {
                if (usrInput.value != '') {
                    if (usrInput.value[usrInput.value.length-1] == ' ') {
                        usrInput.value = usrInput.value.slice(0, usrInput.value.length-2)
                    } else {
                        usrInput.value = usrInput.value.slice(0, usrInput.value.length-1)
                    }
                }
                usrInput.focus()
            })
        } else if (button.id == 'clear') {
            button.addEventListener('click', () => {
                usrInput.value = ""
                usrInput.focus()
            })
        } else if (button.id == 'pow') {
            button.addEventListener('click', () => {
                usrInput.value += '²'
                usrInput.focus()
            })
        } else {
            button.addEventListener('click', () => {
                usrInput.value += button.value
                usrInput.focus()
            })
        }
    })
}