function handler213() {
    const text = "This text has been changed"
    document.getElementById("p213").innerHTML = text
}

function handler214() {
    document.getElementById("p214").hidden ^= 1
}

function handler215() {
    const src = "image2.jpg"
    document.getElementById("img215").src = src
}

/** 
 * @param {HTMLButtonElement} element
 */
 function handler216(element) {
    element.innerHTML = "This text just changed"
}

/** 
 * @param {HTMLInputElement} element
 */
 function handler217(element) {
    const emailRe = /^\S+@\S+\.\S+$/
    const p1 = document.getElementById("p217-1")
    const p2 = document.getElementById("p217-2")
    p1.style.display = "none"
    p2.style.display = "none"
    if (!element.value) {
        p1.style.display = "block"
    } else if (!emailRe.test(element.value)) {
        p2.style.display = "block"
    }
}

function handler222() {
    const xhr = new XMLHttpRequest()
    xhr.open("GET", "message.txt")
    xhr.onload = () => {
        const p = document.getElementById("p222")
        p.innerText = xhr.responseText
    }
    xhr.onerror = console.log
    xhr.send()
}