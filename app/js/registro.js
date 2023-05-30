const usuarioSwitch = document.getElementById("usuarioSwitch");
const refugioSwitch = document.getElementById("refugioSwitch");

usuarioSwitch.addEventListener("change", () => {
    if (usuarioSwitch.checked) {
        refugioSwitch.checked = false;
    }
});

refugioSwitch.addEventListener("change", () => {
    if (refugioSwitch.checked) {
        usuarioSwitch.checked = false;
    }
});
