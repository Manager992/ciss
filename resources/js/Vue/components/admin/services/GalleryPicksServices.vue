<template>
    <div class="container mt-5">
      <div class="card">
        <div class="card-body">
          <!-- Título "Imagenes del anuncio" -->
          <h5 class="mb-3">Imagenes del anuncio</h5>
  
          <!-- Área de Subida de Archivos -->
          <div id="drop-area" class="border rounded d-flex justify-content-center align-items-center mb-3"
               style="height: 200px; cursor: pointer;">
            <div class="text-center">
              <i class="fa fa-cloud-upload-alt text-danger" style="font-size: 48px;"></i>
              <p class="mt-3">
                Drag and drop your photo here or click to select a file.
              </p>
            </div>
          </div>
          <input type="file" id="fileElem" multiple accept="image/*" class="d-none" />
  
          <!-- Galería de Imágenes (dentro del mismo cuadro) -->
          <div id="gallery" class="mt-3">
            <div class="grid-container">
              <div v-for="(image, index) in images" :key="index" class="grid-item card">
                <img :src="image" class="card-img-top" alt="Uploaded Image">
                <button class="btn btn-danger btn-sm" @click="removeImage(index)"
                        style="position: absolute; top: 5px; right: 5px;">&times;</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: "ImageUploader",
    data() {
      return {
        images: [] // Array para almacenar las imágenes subidas
      };
    },
    mounted() {
      let dropArea = document.getElementById('drop-area');
      let fileElem = document.getElementById('fileElem');
  
      ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
        document.body.addEventListener(eventName, preventDefaults, false);
      });
  
      ['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, highlight, false);
      });
  
      ['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, unhighlight, false);
      });
  
      dropArea.addEventListener('drop', handleDrop, false);
  
      dropArea.addEventListener('click', () => {
        fileElem.click();
      });
  
      fileElem.addEventListener('change', function (e) {
        handleFiles(this.files);
      });
  
      const preventDefaults = (e) => {
        e.preventDefault();
        e.stopPropagation();
      };
  
      const highlight = (e) => {
        dropArea.classList.add('highlight');
      };
  
      const unhighlight = (e) => {
        dropArea.classList.remove('highlight');
      };
  
      const handleDrop = (e) => {
        let dt = e.dataTransfer;
        let files = dt.files;
        handleFiles(files);
      };
  
      const handleFiles = (files) => {
        files = [...files];
        files.forEach(previewFile);
      };
  
      const previewFile = (file) => {
        let reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onloadend = () => {
          this.images.push(reader.result); // Agrega la imagen al array de imágenes
        };
      };
    },
    methods: {
      removeImage(index) {
        this.images.splice(index, 1); // Elimina la imagen del array
      }
    }
  };
  </script>
  
  <style scoped>
  #drop-area {
    border: 2px dashed #ddd;
  }
  
  #gallery {
    max-height: 400px;
    overflow-y: auto;
  }
  
  .grid-container {
    display: grid;
    grid-template-columns: repeat(5, 1fr); /* Muestra 5 imágenes por fila */
    grid-gap: 10px;
  }
  
  .grid-item {
    position: relative;
  }
  
  .card-img-top {
    object-fit: cover;
    height: 100px;
    width: 100px;
  }
  
  .text-danger {
    color: #dc3545 !important; /* Rojo para el ícono */
  }
  </style>
  