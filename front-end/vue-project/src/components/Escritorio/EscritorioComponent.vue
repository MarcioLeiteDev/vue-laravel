<script setup>
import { ref, computed, onMounted } from 'vue';
import axios from 'axios';

const name = 'EscritorioComponent';

const users = ref([]);
const currentPage = ref(1);
const pageSize = ref(5);

const getUsers = async () => {
    try {
        // const response = await axios.get('https://jsonplaceholder.typicode.com/users');
        const response = await axios.get('http://127.0.0.1:8000/api/api');
        console.error("response data" + response);
        users.value = response.data; 
    } catch (error) {
        console.error('Erro ao obter usuários:', error);
    }
};

onMounted(() => {
    getUsers();
});

// Computed property to get the paginated users
const paginatedUsers = computed(() => {
    const start = (currentPage.value - 1) * pageSize.value;
    const end = start + pageSize.value;
    return users.value.slice(start, end);
});

// Total pages
const totalPages = computed(() => {
    return Math.ceil(users.value.length / pageSize.value);
});

// Methods to handle page change
const nextPage = () => {
    if (currentPage.value < totalPages.value) {
        currentPage.value++;
    }
};

const prevPage = () => {
    if (currentPage.value > 1) {
        currentPage.value--;
    }
};
</script>

<template>
    <main class="main">
        <h1>Dashboard</h1>
        <div class="row">
            <div class="col-12">

                <div class="row lista-top">
                <div class="col-4">Nome</div>
                <div class="col-4">E-mail</div>
                <div class="col-4">Username</div>
            </div>


                <div class="row lista" v-for="user in paginatedUsers" :key="user.id">

                    <div class="col-4 dis" >{{ user.name }}</div>
                    <div class="col-4 dis">{{ user.email }}</div>
                    <div class="col-4 dis">{{ user.username }}</div>
                </div>
              
  
                <div class="pagination">
                    <button @click="prevPage" :disabled="currentPage === 1">Anterior</button>
                    <span>Pagina {{ currentPage }} de {{ totalPages }}</span>
                    <button @click="nextPage" :disabled="currentPage === totalPages">Próxima</button>
                </div>
            </div>
        </div>
    </main>
</template>

<style scoped>
.main {
    width: 100%;
    height: 100vh;
    background-color: rgb(106, 106, 106);
    padding: 1em;
}

.lista{
    background-color: #fff;
}

.lista-top{
    background-color: #292929;
    color:#fff;
    padding: .5em;
    font:bold;
    border:1px solid #ccc;
}

.dis{
    border:1px solid #ccc;
    padding: 10px;
}

h1 {
    color: #fff;
}


.pagination {
    margin-top: 1em;
    display: flex;
    justify-content: center;
    align-items: center;
}

.pagination button {
    margin: 0 0.5em;
    padding: 0.5em 1em;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 0.25em;
    cursor: pointer;
}

.pagination button:disabled {
    background-color: #6c757d;
    cursor: not-allowed;
}
</style>