const button = document.querySelector("button")
const modal = document.querySelector("dialog")
const buttonExit = document.querySelector("dialog button")


button.onclick = function (){
    modal.showModal()
}

buttonExit.onclick = function () {
    modal.close()
}