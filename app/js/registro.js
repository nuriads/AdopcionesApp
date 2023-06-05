
    const usuarioSwitch = document.getElementById("usuarioSwitch");
    const refugioSwitch = document.getElementById("refugioSwitch");
    const usuarioForm = document.getElementById("usuarioForm");
    const refugioForm = document.getElementById("refugioForm");

    usuarioSwitch.addEventListener("change", () => {
      if (usuarioSwitch.checked) {
        refugioSwitch.checked = false;
        usuarioForm.style.display = "block";
        refugioForm.style.display = "none";
      } else {
        usuarioForm.style.display = "none";
      }
    });

    refugioSwitch.addEventListener("change", () => {
      if (refugioSwitch.checked) {
        usuarioSwitch.checked = false;
        refugioForm.style.display = "block";
        usuarioForm.style.display = "none";
      } else {
        refugioForm.style.display = "none";
      }
    });


