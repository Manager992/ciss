<template>
  <div class="profile-container">
    <div class="profile-header">
      <img src="/images/modelo1.png" alt="Profile Image" class="profile-image" />
      <div class="profile-info">
        <span class="profile-name">-Silvia</span>
        <div class="profile-details">
          <i class="fas fa-user"></i>
          <span class="profile-role">Persona titular de la cuenta</span>
          <span class="profile-id" style="color: #ff1900;">#7210980</span>
          <span class="profile-ad">Anuncio base</span>
        </div>
      </div>
    </div>
    <div class="profile-sections">
      <SectionItem title="Especificaciones del trabajo" link="/admin/services/edit/work-specifics" />
      <SectionItem title="Detalles" link="/admin/services/edit/details" />
      <SectionItem title="Biografía" link="/admin/services/edit/biography" />
      <SectionItem title="Información adicional" link="/admin/services/edit/additional-info-service" />
      <SectionItem title="Fotos de la galería" link="/admin/services/edit/gallery-picks" />
      <SectionItem title="Servicios & Extras" link="/admin/services/edit/extra-services" />
      <SectionItem title="Mejorar el anuncio" link="/admin/services/edit/enhance-ad" />
      <SectionItem title="VIP" link="/admin/services/edit/vip-services"/>
      <SectionItem title="Vista previa" link="/admin/services/edit/preview"/>
    </div>
    <div class="profile-buttons">
      <button class="estimate-button">
        <span>Costo estimado</span>
        <span style="color: #ff1900; margin-left: 10px;">$300</span>
      </button>
      <button class="submit-button">Enviar para revisión</button>
    </div>
  </div>
</template>

<script>
import SectionItem from './SectionItem.vue';

export default {
  components: {
    SectionItem,
  },
};
</script>

<style scoped>
.profile-container {
  width: 100%;
  max-width: 1400px;
  margin: 0 auto;
  background-color: #ffffff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  overflow-y: auto;
  max-height: 75vh;
}

.profile-header {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.profile-image {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background-color: #cccccc;
  margin-right: 10px;
  object-fit: cover;
}

.profile-info {
  display: flex;
  flex-direction: column;
}

.profile-name {
  font-size: 20px;
  font-weight: bold;
}

.profile-details {
  display: flex;
  align-items: center;
  margin-top: 5px;
}

.profile-role,
.profile-id,
.profile-ad {
  margin-left: 5px;
}

.profile-sections {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.profile-buttons {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
}

.estimate-button,
.submit-button {
  background-color: #000000;
  border: 2px solid #ff1900;
  color: #ffffff;
  border-radius: 30px;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
}

.estimate-button {
  color: #ffffff;
  display: flex;
  align-items: center;
}

.submit-button {
  color: #ff1900;
  margin-left: auto;
}

.submit-button:hover {
  background-color: #ff1900;
  color: #ffffff;
}
</style>
