<script setup>


</script>

<template>


  <nav>
    <ul>
   <li><RouterLink to="/">Home</RouterLink></li> 
    <li><RouterLink to="/login">Login</RouterLink></li>
    <li class="sair"><RouterLink to="/login">Sair</RouterLink></li>
  </ul>
  </nav>
  <main>
    <RouterView />
  </main>
</template>


<style scoped>
header {
  line-height: 1.5;
}

nav{
  width: 100%;
  height: auto;
  padding: 1em;
  background-color: #ccc;

  ul{
    display: flex;
    justify-content: flex-start;
    list-style-type: none;

    li{
      text-decoration: none;
      width: 100px;
      height: auto;
      border-radius:10px;
      background-color: rgb(80, 80, 80);
      padding: 10px;
      color:#fff;
      margin-right: 10px;
      font-size: .5em;



    }

    .sair{
      margin-left: auto;
      background-color: red;
    }

    .sair a:hover{
      background-color: rgb(191, 40, 40);
    }

    a{
      display: block;
      font-size: 2em;
       color:#fff;
       padding: 10px;
       text-decoration: none;
    }

    a:hover{
      background-color: rgb(163, 161, 161);
    }
  }
}



.logo {
  display: block;
  margin: 0 auto 2rem;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }
}
</style>
