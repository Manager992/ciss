<template>
    <div class="large-white-box">
      <div class="form-section">
        <div class="section-header">
          <h3>Acerca de mí</h3>
          <small>Para cualquier consulta sobre regalos, consulte la sección Donaciones.</small>
        </div>
        <div ref="aboutMe" contenteditable="true" class="editable-div" @input="updateContent('aboutMe')"></div>
        <div class="editor-controls">
          <button @click="applyFormat('bold', 'aboutMe')"><strong>B</strong></button>
          <button @click="applyFormat('italic', 'aboutMe')"><em>I</em></button>
          <button @click="applyFormat('underline', 'aboutMe')"><u>U</u></button>
          <button @click="applyFormat('insertUnorderedList', 'aboutMe')">•</button>
          <button @click="applyFormat('insertOrderedList', 'aboutMe')">1.</button>
        </div>
        <small class="text-muted">{{ aboutMeCharsRemaining }} Caracteres restantes</small>
      </div>
  
      <div class="form-section">
        <h3>Lista de ofertas</h3>
        <div ref="offersList" contenteditable="true" class="editable-div" @input="updateContent('offersList')"></div>
        <div class="editor-controls">
          <button @click="applyFormat('bold', 'offersList')"><strong>B</strong></button>
          <button @click="applyFormat('italic', 'offersList')"><em>I</em></button>
          <button @click="applyFormat('underline', 'offersList')"><u>U</u></button>
          <button @click="applyFormat('insertUnorderedList', 'offersList')">•</button>
          <button @click="applyFormat('insertOrderedList', 'offersList')">1.</button>
        </div>
        <small class="text-muted">{{ offersListCharsRemaining }} Caracteres restantes</small>
      </div>
  
      <div class="form-section">
        <h3>Donaciones</h3>
        <div ref="donations" contenteditable="true" class="editable-div" @input="updateContent('donations')"></div>
        <div class="editor-controls">
          <button @click="applyFormat('bold', 'donations')"><strong>B</strong></button>
          <button @click="applyFormat('italic', 'donations')"><em>I</em></button>
          <button @click="applyFormat('underline', 'donations')"><u>U</u></button>
          <button @click="applyFormat('insertUnorderedList', 'donations')">•</button>
          <button @click="applyFormat('insertOrderedList', 'donations')">1.</button>
        </div>
        <small class="text-muted">{{ donationsCharsRemaining }} Caracteres restantes</small>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        aboutMe: '',
        offersList: '',
        donations: '',
        maxChars: 1000,
      };
    },
    computed: {
      aboutMeCharsRemaining() {
        return this.maxChars - this.aboutMe.length;
      },
      offersListCharsRemaining() {
        return this.maxChars - this.offersList.length;
      },
      donationsCharsRemaining() {
        return this.maxChars - this.donations.length;
      },
    },
    methods: {
      applyFormat(command, field) {
        document.execCommand(command, false, null);
        this.updateContent(field);
      },
      updateContent(field) {
        this[field] = this.$refs[field].innerHTML;
      },
    },
  };
  </script>
  
  <style scoped>
  .large-white-box {
    width: 100%;
    max-height: 600px;
    overflow-y: auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
  }
  
  .form-section {
    margin-bottom: 20px;
  }
  
  .section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
  }
  
  h3 {
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
  }
  
  .editor-controls {
    margin-top: 5px;
    display: flex;
    gap: 5px;
  }
  
  .editor-controls button {
    background-color: #e0e0e0;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 5px;
  }
  
  .editor-controls button:hover {
    background-color: #d0d0d0;
  }
  
  .editable-div {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 5px;
    border: 1px solid #ddd;
    background-color: #f9f9f9;
    min-height: 100px;
    white-space: pre-wrap;
  }
  
  .text-muted {
    color: #999;
  }
  </style>
  