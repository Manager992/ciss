<template>
    <div class="container">
      <!-- Barra de Filtros -->
      <div class="filter-bar">
        <select v-model="selectedService" class="filter-select">
          <option value="all">Todos los Servicios</option>
          <option value="service1">Servicio 1</option>
          <option value="service2">Servicio 2</option>
        </select>
        <select v-model="selectedStatus" class="filter-select">
          <option value="status">Estado</option>
          <option value="active">Activo</option>
          <option value="inactive">Inactivo</option>
          <option value="pending">Pendiente</option>
        </select>
        <div class="search-container">
          <input type="text" v-model="searchQuery" class="search-input" placeholder="Buscar" />
          <i class="fas fa-search search-icon"></i>
        </div>
      </div>
  
      <!-- Lista de Elementos -->
      <div v-for="(item, index) in filteredItems" :key="index" class="item-card">
        <div class="item-image">
        <img src="/images/modelo1.png" alt="Imagen del modelo 1">
        </div>
        <div class="item-details">
          <p><strong>#{{ item.id }}</strong> {{ item.name }}</p>
          <p>{{ item.type }}</p>
          <p>{{ item.location }}</p>
          <p>Precio: <span>{{ item.price }}</span></p>
        </div>
        <a href="/admin/services/edit" class="edit-button" style="background-color: #ffcc00;  text-decoration: none; border-radius: 4px; padding: 8px 12px; color: #fff; cursor: pointer;">EDITAR</a>
        <div class="status-options">
          <span :class="item.statusClass">{{ item.status }}</span>
          <span v-if="item.changes" class="changes">Cambios No Enviados</span>
        </div>
      </div>
            <!-- Agregamos un div para contener el componente -->
        <div class="items-per-page" style="margin-top: 20px;">
        <!-- Texto en rojo "Items por página:" -->
        <span style="color: #ff1900;">Items por página:</span>
        <!-- Select rojo con texto blanco -->
        <select class="select-red">
            <option value="25">25</option>
            <option value="25">15</option>
            <option value="25">5</option>
            <!-- Agregamos más opciones si es necesario -->
        </select>
        <!-- Texto en blanco que indica "1 - 5 of 5" -->
        <span style="color: #ff0055">1 - 5 of 5</span>
        <!-- Flechas `<` y `>` -->
        <i class="fas fa-chevron-left"></i>
        <i class="fas fa-chevron-right"></i>
        </div>
    </div>
    
  </template>
  
  <script setup>
  import { ref, computed } from 'vue';
  import { useRouter } from 'vue-router';
  
  const selectedService = ref('all');
  const selectedStatus = ref('status');
  const searchQuery = ref('');
  const router = useRouter();
  
  const items = ref([
    { id: '7210980', name: 'SILVIA', type: 'Base Ad', location: 'Alabama, United States', price: '$300.00', status: 'Offline', statusClass: 'status-offline', changes: true },
    { id: '3125443', name: 'SILVIA', type: 'Visiting Ad', location: 'Alabama, United States', price: '$0.00', status: 'Offline', statusClass: 'status-offline', changes: true },
    { id: '9753376', name: 'CJHKBVAKJS', type: 'Base Ad', location: 'Alabama, United States', price: '$128.00', status: 'Offline', statusClass: 'status-offline', changes: true },
    { id: '7285143', name: 'SORTE LUCIA', type: 'Base Ad', location: 'Boston, Massachusetts, United States', price: '$511.00', status: 'Offline', statusClass: 'status-offline', changes: true },
  ]);
  
  const filteredItems = computed(() => {
    return items.value.filter(item => {
      return (
        (selectedService.value === 'all' || item.type.includes(selectedService.value)) &&
        (selectedStatus.value === 'status' || item.status === selectedStatus.value) &&
        (searchQuery.value === '' || item.name.toLowerCase().includes(searchQuery.value.toLowerCase()))
      );
    });
  });
  </script>
  
  <style scoped>
  .container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow-y: auto;
    max-height: 75vh; /* ajusta el alto máximo del contenedor */
  }
  
  .filter-bar {
    display: flex;
    justify-content: space-between;
    gap: 15px;
    margin-bottom: 20px;
  }
  
  .filter-select {
    background-color: #f0f0f0;
    border: 1px solid #cccccc;
    border-radius: 4px;
    padding: 8px 12px;
    color: #666666;
  }
  
  .search-container {
    position: relative;
    flex-grow: 1;
  }
  
  .search-input {
    width: 100%;
    background-color: #f0f0f0;
    border: 1px solid #cccccc;
    border-radius: 4px;
    padding: 8px 12px 8px 30px;
    color: #666666;
  }
  
  .search-icon {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #666666;
    pointer-events: none;
  }
  
  .item-card {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px;
    border: 1px solid #eaeaea;
    border-radius: 8px;
    margin-bottom: 10px;
  }
  
  .item-image {
    width: 80px;
    height: 80px;
    background-color: #cccccc;
    border-radius: 4px;
  }
  
  .item-details {
    flex-grow: 1;
    padding-left: 15px;
  }
  
  .edit-button {
    background-color: #ffcc00;
    border: none;
    border-radius: 4px;
    padding: 8px 12px;
    color: #fff;
    cursor: pointer;
  }
  
  .status-options {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  
  .status-offline {
    background-color: #ff0055;
    padding: 5px 10px;
    border-radius: 4px;
    color: #fff;
  }
  
  .changes {
    background-color: #e15ce6;
    padding: 5px 10px;
    border-radius: 4px;
    color: #fff;
  }

  .edit-button {
  /* ... otros estilos ... */
  margin-right: 20px; /* agrega un margen a la derecha del botón */
}

.item-image {
  width: 60px; /* ajusta el ancho del card */
  height: 120px; /* ajusta la altura del card */
  background-color: #cccccc;
  border-radius: 4px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.item-image img {
  width: 100%; /* hace que la imagen se ajuste al ancho del card */
  height: 100%; /* hace que la imagen se ajuste a la altura del card */
  object-fit: cover; /* hace que la imagen se muestre completa */
}

.items-per-page {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 20px;
}

.select-red {
  background-color: #ff1900;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 5px 10px;
  font-size: 16px;
  cursor: pointer;
}

.select-red option {
  background-color: #fff;
  color: #ff1900;
}
  </style>
  