<script setup>
import { ref } from 'vue';

const i = ref(0);
const goralki_arr = ['/goralek1.png', '/goralek2.png', '/goralek3.png', '/goralek4.png'];
const goralki_title = ['góralek 1', 'góralek 2', 'góralek 3', 'góralek 4'];

const next = () =>{
    i.value += 1;
    if(i.value > 3){
        i.value = 0;
    }
}

const goralekReturner = (nr) => {
    // console.log("next");
    let nr_goralka = i.value + nr;
    if(nr_goralka > 3){
        nr_goralka -= 4;
    }

    return goralki_arr[nr_goralka];
}

</script>

<template>

    <div class="container">
        <div class="main">
            <div class="welcome-text">
                <div class="welcome">Witaj przybyszu!</div>
                Zapewne trawiłeś na tę stronę w poszukiwaniu
                pomocy przy rozwiązywaniu egzaminu zawodowego... 
                Egzamin znajdziesz w zakładce zatytułowanej "Egzamin" 
                (któżby się spodziewał, prawda?), lecz póki co możesz
                poklikać sobie w słodkie zwierzątka jakimi są góralki. 
            </div>

            <div class="goralek-main">
                <div class="goralek-container">
                    <div class="goralek-foto-main" @click="next">
                        <img :src="goralekReturner(0)" :alt="goralki_title[i]" title="kliknij, aby przewinąć">
                    </div>
                </div>
            </div>
        </div>

        <div class="other-goralki">
            <div class="uno-goralek">
                <div class="goralek-container">
                    <div class="goralek-foto">
                        <img :src="goralekReturner(1)" :alt="goralki_title[i+1]" :title="goralki_title[i+1]">
                    </div>
                </div>
            </div>
            <div class="uno-goralek">
                <div class="goralek-container">
                    <div class="goralek-foto">
                        <img :src="goralekReturner(2)" :alt="goralki_title[i]" :title="goralki_title[i]">
                    </div>
                </div>
            </div>
            <div class="uno-goralek">
                <div class="goralek-container">
                    <div class="goralek-foto">
                        <img :src="goralekReturner(3)" :alt="goralki_title[i]" :title="goralki_title[i]">
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</template>

<style scoped>

    *{
        display: flex;
    }

    .container{
        width: 100%;
        min-height: calc(100% - 50px);
        background-color: #2c3e50;;
        justify-content: center;
        flex-wrap: wrap;
        align-content: flex-start;
    }

    .main{
        height: fit-content;
        width: 100%;
    }

    .welcome-text{
        width: 50%;
        height: fit-content;
        padding: 20px;
        font-size: 25px;
        flex-wrap: wrap;
    }

    .welcome{
        width: 100%;
        font-size: 32px;
        font-weight: 700;
        justify-content: center;
    }

    .goralek-main{
        width: 50%;
        min-height: 450px;
    }

    .goralek-main img:hover{
        cursor: pointer;
    }

    .goralek-foto-main{
        height: 400px;
        width: 400px;
        border-radius: 200px;
        justify-content: center;
        align-items: center;
        border: #45607d 5px solid;
        border-radius: 200px;
        overflow: hidden;
    }

    .goralek-container{
        width: 100%;
        justify-content: center;
        align-items: center;
    }

    .goralek-foto{
        border: #45607d 5px solid;
        border-radius: 125px;
        overflow: hidden;
    }

    .goralek-foto > img{
        width: 100%;
        max-width: 250px;
        max-height: 250px;
    }

    .other-goralki{
        height: fit-content;
        /* min-height: 100px; */
        width: 100%;
    }

    .uno-goralek{
        width: calc(100%/3);
    }

    

</style>
