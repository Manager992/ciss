<template>
    <div class="container">
      <div class="title">Seleccionar ubicación de Categorías</div>
      <p class="description">Por favor, seleccione las ubicaciones donde puede prestar sus servicios.</p>
      <div class="categories">
        <div class="category" :class="{ selected: mobile }" @click="mobile = !mobile">
          <span class="icon" v-if="mobile">✔️</span>
          <span class="icon" v-else>☐</span>
          <label>Hoteles</label>
        </div>
        <div class="category" :class="{ selected: montgomery }" @click="montgomery = !montgomery">
          <span class="icon" v-if="montgomery">✔️</span>
          <span class="icon" v-else>☐</span>
          <label>Moteles</label>
        </div>
        <div class="category" :class="{ selected: tuscaloosa }" @click="tuscaloosa = !tuscaloosa">
          <span class="icon" v-if="tuscaloosa">✔️</span>
          <span class="icon" v-else>☐</span>
          <label>Spa de Masajes</label>
        </div>
        <div class="category" :class="{ selected: birmingham }" @click="birmingham = !birmingham">
          <span class="icon" v-if="birmingham">✔️</span>
          <span class="icon" v-else>☐</span>
          <label>Residencias</label>
        </div>
      </div>
      <div class="title">Categorías de especialidad</div>
      <p class="description">Seleccione cualquier categoría de especialidad que se aplique a usted o al servicio que brinda. La adición de categorías especializadas aumenta la exposición al dirigirse a los espectadores que buscan proveedores con atributos específicos</p>
      <div class="categories">
        <div class="category" :class="{ selected: alternative }" @click="alternative = !alternative">
          <span class="icon" v-if="alternative">✔️</span>
          <span class="icon" v-else>☐</span>
          <label>Alternativa + $12</label>
        </div>
        <div class="category" :class="{ selected: xxx }" @click="xxx = !xxx">
          <span class="icon" v-if="xxx">✔️</span>
          <span class="icon" v-else>☐</span>
          <label>Xxx + $20</label>
        </div>
        <div class="category" :class="{ selected: petite }" @click="petite = !petite">
          <span class="icon" v-if="petite">✔️</span>
          <span class="icon" v-else>☐</span>
          <label>Anal + $12</label>
        </div>
        <div class="category" :class="{ selected: centerfold }" @click="centerfold = !centerfold">
          <span class="icon" v-if="centerfold">✔️</span>
          <span class="icon" v-else>☐</span>
          <label>Trios + $20</label>
        </div>
        <div class="category" :class="{ selected: allNatural }" @click="allNatural = !allNatural">
          <span class="icon" v-if="allNatural">✔️</span>
          <span class="icon" v-else>☐</span>
          <label>Al natural + $12</label>
        </div>
        <div class="category" :class="{ selected: european }" @click="european = !european">
          <span class="icon" v-if="european">✔️</span>
          <span class="icon" v-else>☐</span>
          <label>Fetiches + $10</label>
        </div>
        <div class="category" :class="{ selected: superBooty }" @click="superBooty = !superBooty">
          <span class="icon" v-if="superBooty">✔️</span>
          <span class="icon" v-else>☐</span>
          <label>1 horas extras + $20</label>
        </div>
        <div class="category" :class="{ selected: collegeGirls }" @click="collegeGirls = !collegeGirls">
          <span class="icon" v-if="collegeGirls">✔️</span>
          <span class="icon" v-else>☐</span>
          <label>Lenceria + $25</label>
        </div>
        <div class="category" :class="{ selected: bbw }" @click="bbw = !bbw">
          <span class="icon" v-if="bbw">✔️</span>
          <span class="icon" v-else>☐</span>
          <label>Masajes + 15</label>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        mobile: true,
        montgomery: false,
        tuscaloosa: false,
        birmingham: false,
        huntsville: false,
        alternative: false,
        xxx: false,
        petite: false,
        centerfold: false,
        allNatural: true,
        european: false,
        superBooty: false,
        collegeGirls: true,
        bbw: true,
      };
    },
  };
  </script>
  
  <style scoped>
  .container {
    background-color: white;
    width: 95%;
    margin: 0 auto;
    padding: 20px;
    border-radius: 10px;
    overflow-y: auto;
  }
  
  .title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
  }
  
  .description {
    margin-bottom: 20px;
  }
  
  .categories {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  
  .category {
    margin-bottom: 10px;
    width: calc(20% - 10px);
    display: flex;
    align-items: center;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease, border-color 0.3s ease;
  }
  
  .category.selected {
    background-color: rgba(255, 0, 0, 0.1);
    border-color: #ff0000;
  }
  
  .category .icon {
    font-size: 20px;
    margin-right: 10px;
    color: #ff0000; /* Set the checkmark color to red */
  }
  
  .category .icon.selected {
    color: #ff0000;
  }
  
  .category label {
    cursor: pointer;
  }
  </style>