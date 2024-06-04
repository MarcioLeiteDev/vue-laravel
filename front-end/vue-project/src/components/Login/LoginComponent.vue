<script setup>
import { useRouter } from 'vue-router';

const router = useRouter();

const login = () => {

  router.push({ name: 'escritorio' });
}
</script>

<template>

    <main class="main">
        

        <div class="box">
            <h2> Login </h2>

            <form class="login">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email </label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Senha</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <button type="submit" id="submit" @click="login" class="btn btn-primary">Entrar</button>
              </form>
        </div>
        
    </main>

</template>

<style scoped>
.main{
    width: 100%;
    height: 100vh;
    background-color: rgb(197, 197, 197);
    padding: 1em;

    h1{
        color:#fff;
    }
}

    .box{
        width: 50%;
        height: 50%;
        background-color: rgb(66, 66, 189);
        margin: 0 auto;
        text-align: center;
        border-radius: 1em;
        padding-top: 10vh;

        h2{
            color:#fff;
        }

            .login{
                width: 80%;
                margin: 0 auto;

                label{
                    color:#fff;
                    font-size:1.5em;
                }

                #submit{
                    margin-top: 20px;
                }
            }
        
    }


</style>