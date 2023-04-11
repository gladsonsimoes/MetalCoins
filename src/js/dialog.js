const buttons = document.querySelectorAll("button[id^='edit-']");
const modals = document.querySelectorAll("dialog");


//Para cada botao, crie uma funcao e um index
buttons.forEach(function (button, index) {
    //Remove o - do id do botao
    const id = button.id.split("-")[1];
    //Botao de cancelar
    const cancelBtn = modals[index].querySelector("#cancel-" + id);
    //Faz o ''callback'' Para que cada botao, em sua vez no loop seja clicavel e >>>
    button.addEventListener("click", function () {
        //Aciona o modal (Index é o botao atual)
        modals[index].showModal();
    });


    cancelBtn.addEventListener("click", function () {
        modals[index].close();
    });
});