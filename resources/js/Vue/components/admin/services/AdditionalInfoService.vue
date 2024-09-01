<template>
  <div class="outer-container">
    <div class="white-box">
      <div class="contacts-section">
        <h3>Contacts</h3>
        <div class="form-group">
          <label for="phone-number">Phone Number</label>
          <div class="input-group">
            <input type="text" id="phone-number" placeholder="Phone Number">
            <div class="plus-icon">
              <i class="fas fa-plus"></i>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="email-address">Email Address</label>
          <div class="input-group">
            <input type="email" id="email-address" placeholder="Email Address">
            <div class="plus-icon">
              <i class="fas fa-plus"></i>
            </div>
          </div>
        </div>
        <p>ever.diestra@icloud.com</p>
      </div>

      <div class="social-section">
        <h3>Video and Social</h3>
        <div class="social-fields">
          <div class="form-group" v-for="social in socialPlatforms" :key="social.id">
            <label :for="social.id">
              <i :class="social.icon" class="social-icon"></i>
            </label>
            <input type="text" :id="social.id" :placeholder="social.placeholder">
          </div>
        </div>
        <p>These fields are optional</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SocialMediaForm",
  data() {
    return {
      socialPlatforms: [
        { id: 'youtube-url', icon: 'fab fa-youtube', placeholder: 'YouTube Video URL (3 Minutes Or Less)' },
        { id: 'facebook-url', icon: 'fab fa-facebook', placeholder: 'https://www.facebook.com/' },
        { id: 'twitter-url', icon: 'fab fa-twitter', placeholder: 'https://twitter.com/' },
        { id: 'google-plus-url', icon: 'fab fa-google-plus', placeholder: 'https://plus.google.com/' },
        { id: 'snapchat-url', icon: 'fab fa-snapchat', placeholder: 'https://www.snapchat.com/add/' },
        { id: 'vine-url', icon: 'fab fa-vine', placeholder: 'https://vine.co/' },
        { id: 'tumblr-url', icon: 'fab fa-tumblr', placeholder: 'https://www.tumblr.com/' },
        { id: 'periscope-url', icon: 'fab fa-periscope', placeholder: 'https://www.periscope.tv/' },
        { id: 'instagram-url', icon: 'fab fa-instagram', placeholder: 'https://www.instagram.com/' },
        { id: 'tiktok-url', icon: 'fab fa-tiktok', placeholder: 'https://www.tiktok.com/' }
      ]
    };
  }
};
</script>

<style scoped>
.outer-container {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.white-box {
  display: flex;
  gap: 3rem;
  background-color: white;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 2rem;
  width: 90%;
  height: 500px; /* Altura fija */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  overflow: hidden; /* Ocultar el overflow de la caja blanca */
}

.contacts-section,
.social-section {
  flex: 1;
  overflow-y: auto; /* Habilitar el scroll solo dentro del contenido */
}

.contacts-section h3,
.social-section h3 {
  margin-top: 0;
  margin-bottom: 1rem;
}

.form-group {
  margin-bottom: 1rem;
  display: flex;
  align-items: center;
}

.form-group label {
  margin-right: 0.5rem;
}

.input-group {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  width: 100%;
}

.input-group input {
  flex: 1;
  padding: 0.75rem;
  background-color: #f0f0f0;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.input-group input:focus {
  outline: none;
  border-color: #007bff;
  box-shadow: 0 0 5px #007bff;
}

.plus-icon {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 40px; /* Cuadrado */
  height: 40px; /* Cuadrado */
  background-color: red;
  color: white;
  border-radius: 10px; /* Borde redondeado */
  cursor: pointer;
}

.social-fields {
  max-height: 100%; /* Mantener el tamaño fijo del contenedor */
  overflow-y: auto; /* Habilitar el desplazamiento vertical */
}

.social-fields .form-group {
  display: flex;
  align-items: center;
}

.social-fields .form-group label {
  width: 30px;
}

.social-fields .form-group input {
  flex: 1;
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.social-fields .form-group input:focus {
  outline: none;
  border-color: #007bff;
  box-shadow: 0 0 5px #007bff;
}

.social-icon {
  transition: color 0.3s ease;
}

.social-icon:hover {
  color: red; /* Efecto hover para cambiar a color rojo */
}

p {
  margin-top: 1rem;
  font-size: 0.9rem;
  color: #555;
}
</style>
