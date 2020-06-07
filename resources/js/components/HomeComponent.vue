<template>
  
  <div class="row justify-content-center">
    <div class="card mb-3 col-md-9">
      <img class="card-img-top home-card" src="/img/background/B_preview.jpg" alt="Coche turismo">
      <div class="card-body">
        <h5 class="card-title">Tests tipo B</h5>
        <p class="card-text">Nuestra categoría de tests más popular. Prepárate para tu examen teórico con nuestro cuestionario de 30 preguntas.</p>
        <router-link to="/home/B" class="card-text">Empezar ahora</router-link>
      </div>
    </div>

    <div class="card-deck justify-content-center">
      <div class="card col-md-3">
        <img class="card-img-top" src="/img/background/C_preview.jpg" alt="Camión conduciendo por carretera">
        <div class="card-body">
          <h5 class="card-title text-center">Tests C</h5>
          <p class="card-text">Completa ahora nuestro test con 20 preguntas.</p>
        </div>
        <div class="card-footer">
          <router-link to="/home/C" class="card-text">Empezar ahora</router-link>
        </div>
      </div>
      <div class="card col-md-3">
        <img class="card-img-top" src="/img/background/A1_preview.jpg" alt="Pilotos conduciendo dos motocicletas">
        <div class="card-body">
          <h5 class="card-title">Tests A1/A2</h5>
          <p class="card-text">Completa ahora nuestro test con 20 preguntas.</p>
        </div>
        <div class="card-footer">
          <router-link to="/home/A1_A2" class="card-text">Empezar ahora</router-link>
        </div>
      </div>
      <div class="card col-md-3">
        <img class="card-img-top" src="/img/background/D_preview.jpg" alt="Autobús conduciendo por ciudad">
        <div class="card-body">
          <h5 class="card-title">Tests D</h5>
          <p class="card-text">Completa ahora nuestro test con 20 preguntas.</p>
        </div>
        <div class="card-footer">
          <router-link to="/home/D" class="card-text">Empezar ahora</router-link>
        </div>
      </div>
    </div>




  </div>
  
</template>

<script>
export default {
  data() {
    return {
    };
  },
  components: {},
  computed: {},
  methods: {},
  mounted() {}
};
</script>
