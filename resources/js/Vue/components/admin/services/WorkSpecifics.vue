<template>
  <div class="ad-form-container">
    <div class="form-content">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Choose your gender</label>
            <select class="form-control">
              <option>Select Gender</option>
              <option>Female</option>
              <option>Male</option>
              <option>Other</option>
            </select>
          </div>
          
          <div class="form-group">
            <label>Choose services you provide</label>
            <select class="form-control">
              <option>Select one or more</option>
              <option>Escort</option>
              <option>Massage</option>
              <!-- Add more options as needed -->
            </select>
          </div>
          
          <div class="form-group">
            <label>Choose your clients' gender</label>
            <select class="form-control">
              <option>Available To</option>
              <option>Male</option>
              <option>Female</option>
              <option>Both</option>
            </select>
          </div>
          
          <div class="form-group">
            <label>Service Provided As</label>
            <div class="d-flex gap-2">
              <button class="btn btn-light border">Incall</button>
              <button class="btn btn-light border">Outcall</button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label>Service Affiliation</label>
            <div class="d-flex gap-2">
              <button class="btn btn-light border">Independent</button>
              <button class="btn btn-light border">Agency</button>
            </div>
          </div>

          <div class="form-group mt-4">
            <label>Choose the location where your ad appears</label>
            <div class="d-flex">
              <select class="form-control">
                <option>Select Location</option>
                <option>Alabama, United States</option>
                <!-- Add more options as needed -->
              </select>
              <button class="btn btn-light border ms-2">X</button>
            </div>
          </div>

          <div class="form-group mt-4">
            <label>What type of ad would you like?</label>
            <div class="d-flex gap-2">
              <div class="ad-type active p-3 text-center">
                <span class="ad-duration" style="color: red;">30 Days</span><br />
                <span class="ad-dates">Start: 05 Aug 2024<br />End: 04 Sep 2024</span>
              </div>
              <div class="ad-type inactive p-3 text-center">
                <span class="ad-duration">7 days</span><br />
                <span class="ad-dates">Start: 05 Aug 2024<br />End: 12 Aug 2024</span>
              </div>
              <div class="ad-type inactive p-3 text-center">
                <span class="ad-duration">15 days</span><br />
                <span class="ad-dates">Start: 05 Aug 2024<br />End: 12 Aug 2024</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-between mt-4">
      <button class="estimate-button">
        <span>Costo estimado</span>
        <span style="color: #ff1900; margin-left: 10px;">$300</span>
      </button>
      <button class="submit-button">Enviar para revisión</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      selectedGender: '',
      selectedLocation: '',
      selectedServices: [],
      selectedClientsGender: '',
      serviceType: '',
      serviceAffiliation: '',
      selectedAdType: 'standard',
    };
  },
};
</script>

<style scoped>
.ad-form-container {
  width: 100%;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  overflow: auto;
  max-height: 600px;
}

.form-content {
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  overflow: auto;
}

.form-group {
  margin-bottom: 20px;
}

.form-control {
  padding: 10px;
  border-radius: 5px;
}

.ad-type {
  flex: 1;
  border-radius: 5px;
  background-color: #f5f5f5;
  cursor: pointer;
}

.ad-type.active {
  background-color: #000;
  color: #fff;
}

.ad-type.inactive {
  background-color: #eee;
  color: #aaa;
}

.ad-duration {
  font-weight: bold;
}

.ad-dates {
  font-size: 12px;
  margin-top: 5px;
}

.btn-light {
  background-color: #f5f5f5;
  color: #333;
}

.btn-light:hover {
  background-color: #e5e5e5;
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
