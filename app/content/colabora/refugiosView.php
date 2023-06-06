<?php
 include '../../index.php';
 ?>

<style>
  .card-header {
    background-color: #f8f9fa;
    padding: 0.5rem;
  }

  .card-header a {
    text-decoration: none;
    color: #000;
    font-weight: bold;
  }

  .card-body {
    background-color: #fff;
    padding: 1rem;
   
  }

  .btn {
    background-color: #e9ecef;
    border: none;
    border-radius: 0;
    padding: 0.75rem 1.5rem;
    text-align: left;
    width: 100%;
  }

  .btn:hover {
    background-color: #dee2e6;
  }

  .collapse.show {
    display: block;
  }
</style>

<div class="container mt-3">
  <h2>Listado de refugios y asociaciones</h2>

  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="btn" data-bs-toggle="collapse" href="#collapseOne" onclick="toggleCollapse('collapseOne')">
          Andalucía
        </a>
      </div>
      <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo" onclick="toggleCollapse('collapseTwo')">
          Aragón
        </a>
      </div>
      <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree" onclick="toggleCollapse('collapseThree')">
          Asturias
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
        <div class="card-body" >
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
      </div>
    </div>
    

    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree" onclick="toggleCollapse('collapseFour')">
        Cantabria
        </a>
      </div>
      <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
        <div class="card-body" >
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree" onclick="toggleCollapse('collapseFive')">
        Castilla-La Mancha
        </a>
      </div>
      <div id="collapseFive" class="collapse" data-bs-parent="#accordion">
        <div class="card-body" >
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree" onclick="toggleCollapse('collapseSix')">
        Castilla y León
        </a>
      </div>
      <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
        <div class="card-body" >
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree" onclick="toggleCollapse('collapseSeven')">
        Cataluña
        </a>
      </div>
      <div id="collapseSeven" class="collapse" data-bs-parent="#accordion">
        <div class="card-body" >
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree" onclick="toggleCollapse('collapseEight')">
        Comunidad de Madrid
        </a>
      </div>
      <div id="collapseEight" class="collapse" data-bs-parent="#accordion">
        <div class="card-body" >
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree" onclick="toggleCollapse('collapseNine')">
        Navarra
        </a>
      </div>
      <div id="collapseNine" class="collapse" data-bs-parent="#accordion">
        <div class="card-body" >
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree" onclick="toggleCollapse('collapseTen')">
        Valencia
        </a>
      </div>
      <div id="collapseTen" class="collapse" data-bs-parent="#accordion">
        <div class="card-body" >
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree" onclick="toggleCollapse('collapseEleven')">
        Extremadura
        </a>
      </div>
      <div id="collapseEleven" class="collapse" data-bs-parent="#accordion">
        <div class="card-body" >
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree" onclick="toggleCollapse('collapseTwelve')">
       Galicia
        </a>
      </div>
      <div id="collapseTwelve" class="collapse" data-bs-parent="#accordion">
        <div class="card-body" >
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree" onclick="toggleCollapse('collapseTherteen')">
      La Rioja
        </a>
      </div>
      <div id="collapseTherteen" class="collapse" data-bs-parent="#accordion">
        <div class="card-body" >
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree" onclick="toggleCollapse('collapseFourteen')">
      País Vasco
        </a>
      </div>
      <div id="collapseFourteen" class="collapse" data-bs-parent="#accordion">
        <div class="card-body" >
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
      </div>
    </div>

  </div>
</div>

<script>
function toggleCollapse(collapseId) {
  const collapseElement = document.getElementById(collapseId);
  const isOpen = collapseElement.classList.contains('show');
  if (isOpen) {
    collapseElement.classList.remove('show');
  } else {
    collapseElement.classList.add('show');
  }
}
</script>
