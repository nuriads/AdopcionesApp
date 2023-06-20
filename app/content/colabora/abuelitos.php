<?php include '../../index.php'; ?>

<div id="contenido">
  <div class="voluntariado">
        <div class="container">

        <div class="row">
          <div class="column-header col display-6">
            Adopta un abuelito
          </div>
          <div class="column-header col display-6">
            ¿Quieres saber cómo ayudar a los animales más mayores?
          </div>
        </div>

        <div class="row">
          <div class="column-body body-1 col">
            Quizá la situación más triste que se nos presenta en AdoptApp es rescatar un animal de la calle y de una vida llena de desgracias y sinsabores y que acabe sus días en el Centro de Adopción sin haber podido conocer el calor, los mimos, el cariño y las alegrías de un hogar
          </div>
          <div class="column-body body-2 col">
            Encontrar adoptantes para los animales viejitos es complicado, las familias suelen preferir cachorros o animales jóvenes para compartir más tiempo con ellos. Sin embargo, olvidamos que el tiempo que compartamos con un viejito será mucho más intenso, su capacidad de agradecimiento es infinita y sus miradas muy dulces porque ya no tienen que demostrar nada, sólo querer y dejarse querer. Son animales que en su mayoría ya están educados lo que facilita la etapa de adaptación, son tranquilos y exigen algo menos de actividad. Lamentablemente cada día que pasan en el Centro se esfuma un porcentaje muy alto de su tiempo para disfrutar.
          </div>
          <div class="col">
                <img id='img-abuelito' src="https://images.unsplash.com/photo-1552053831-71594a27632d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=362&q=80" alt="elderly-dog" style="width:350px;height:350px;">
            </div>
          <div class="row">
            
          </div>
        </div>

        <div class="row">
            <div class="column-body body-3 col ">
                Te proponemos que seas su gran oportunidad. Acoge a uno de nuestros viejitos bien por un tiempo indefinido, bien hasta su fallecimiento. En el caso de la primera opción, nosotros seguiremos intentando encontrarle un hogar definitivo pero dale, desde ya, la suerte de cariños cercanos, cama blandita, paseos, amigos y mimos que tanto necesitan.
            </div>
            <div class="column-body body-4 col ">
                Desde AdoptApp cubriremos todas sus necesidades de alimentación, atención veterinaria, medicación caso de necesitarlo y residencia u otra casa, durante los días que tengas que ausentarte. Haz una solicitud a través del formulario de adopción, indicando que estás interesado/a en adoptar un abuelito. 
                <a href="adopta.php" class="boton-animales">Recibir más información</a>
            </div>
          </div>
      </div>


      </style>
  </div>
</div>


<div class="container-fluid ">
	<?php 

	include_once '../inicio/footer.php';

	?>
	</div>
      <style>

        .container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.row {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.column-header,
.column-body {
  margin: 3px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}
#img-abuelito{
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}
.column-header {
  padding: 35px;
  background-color: #fff;
  color: #000;
  text-align: center;
  border: solid 3px #d97bb2;
}

.body-1 {
  background-color: #D0F4DE;
  color: #333;
  padding: 20px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}

.body-2 {
  background-color: #FCF6BD;
  color: #333;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}

.body-3 {
  background-color: #A9DEF9;
  color: #333;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}
.body-4 {
  background-color: #E4C1F9;
  color: #333;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
  
}



.row .col {
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 10px;

}


.row img {
  width: 350px;
  height: 350px;
  object-fit: cover;
  border-radius: 10px;
}

