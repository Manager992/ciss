<template>
  <div class="section-item">
    <a :href="link" class="title-link">
      {{ title }}
    </a>
    <a :href="link" class="edit-link">
      Editar <i class="fas fa-chevron-right"></i>
    </a>
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      required: true,
    },
    link: {
      type: String,
      default: '#',
    },
  },
};
</script>

<style scoped>
.section-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #ddd; /* Color gris de fondo */
  padding: 15px;
  border-radius: 5px;
}

.title-link {
  color: #000; /* Color del título */
  text-decoration: none;
  font-weight: bold;
}

.edit-link {
  color: #ff1900; /* Rojo */
  text-decoration: none;
  font-weight: bold;
  display: flex;
  align-items: center;
}

.edit-link i {
  margin-left: 5px;
}
</style>
