<template>
    <div class="ad-info-container">
      <div class="form-content">
        <h3>Información del anuncio</h3>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Nombre publicitario *</label>
              <input type="text" class="form-control" value="SILVIA" />
              <small class="text-muted">Quedan 29 caracteres</small>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Eslogan *</label>
              <input type="text" class="form-control" value="YA LLEGO" />
              <small class="text-muted">Quedan 92 caracteres</small>
            </div>
          </div>
        </div>
  
        <h3>Acerca de</h3>
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label>Edad *</label>
              <div class="d-flex align-items-center">
                <input type="text" class="form-control" value="23" />
                <div class="form-check ms-2">
                  <input class="form-check-input" type="checkbox" id="age-over-checkbox">
                  <label class="form-check-label" for="age-over-checkbox">
                    Sobre
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Seleccionar etnia</label>
              <select class="form-control">
                <option>Seleccionar etnia</option>
                <!-- Options here -->
              </select>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label>Color de ojos</label>
              <select class="form-control">
                <option>Selecciona el color de ojos</option>
                <!-- Options here -->
              </select>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label>Color del cabello</label>
              <select class="form-control">
                <option>Seleccionar color de cabello</option>
                <!-- Options here -->
              </select>
            </div>
          </div>
          <div class="col-md-3 d-flex align-items-center">
            <div class="form-group">
              <label>Unidad de medida</label>
              <div class="d-flex align-items-center">
                <div class="form-check me-3">
                  <input class="form-check-input" type="radio" name="measurement-unit" id="royal" checked>
                  <label class="form-check-label" for="royal">
                    Real
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="measurement-unit" id="metric">
                  <label class="form-check-label" for="metric">
                    Métrica
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <h3>Medidas</h3>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>Altura (pulgadas)</label>
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Busto (en)</label>
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Cintura (pulgadas)</label>
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Cadera (pulgadas)</label>
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Peso (libras)</label>
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Copa</label>
              <select class="form-control">
                <option>Seleccionar tamaño de copa</option>
                <!-- Options here -->
              </select>
            </div>
          </div>
        </div>
        <div class="profile-buttons">
      <button class="estimate-button">
        <span>Costo estimado</span>
        <span style="color: #ff1900; margin-left: 10px;">$300</span>
      </button>
      <button class="submit-button">Enviar para revisión</button>
    </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        // Add necessary data properties here
      };
    }
  };
  </script>
  
  <style scoped>
  .ad-info-container {
    width: 100%;
    max-height: 600px;
    overflow-y: auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
  }
  
  .form-content {
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  .form-control {
    padding: 10px;
    border-radius: 5px;
  }
  
  h3 {
    margin-bottom: 20px;
    font-weight: bold;
    color: #333;
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
  