var tablinks = document.getElementsByClassName('tab-links')
var tabcontents = document.getElementsByClassName('tab-contents')

function opentab(str) {
    for (i of tablinks) {
        i.classList.remove('active')
    }

    for (i of tabcontents) {
        i.classList.remove('active')
    }
    event.target.classList.add('active')
    document.getElementById(str).classList.add('active')
}

function openMenu() {
    document.getElementById('list').classList.toggle('animate')
    document.getElementById('icon').classList.toggle('fa-xmark')
}

function closeMenu() {
    document.getElementById('list').style.top = '-100px'
}