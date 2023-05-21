<script setup>
    import { RouterLink } from 'vue-router';
    


</script>

<template>

    <nav>
        
        <div class="views">
            <div class="view">
                <RouterLink to="/" active-class="active-view">
                    <p>Home</p>
                </RouterLink>
            </div>
            <div class="view">
                <RouterLink to="/egzamin" active-class="active-view">
                    <p>Egzamin</p>
                </RouterLink>
            </div>
            <div class="view">
                <RouterLink to="/o-autorze" active-class="active-view">
                    <p>O autorze</p>
                </RouterLink>
            </div>
        </div>


    </nav>

</template>

<style scoped>
    nav, div, p, a{
        display: flex;
        user-select: none;
    }

    nav{
        width: 100%;
        height: 50px;
        background: linear-gradient(180deg, rgb(85,175,255) 0vh, rgb(153,61,255) 100vh);
        top: 0;
        position: sticky;
        z-index: 1;
        color: #181818;;
        font-size: 1.2rem;
        
    }



    .views{
        width: 100%;  
        height: 100%;
        justify-content: space-between;
    }

    .view{
        text-decoration: none;
        color: inherit;
        height: 100%;
        width: calc(100%/3);
    }

    .view a {
        width: 100%;
        height: 100%;
        text-decoration: none;
        color: inherit;
        justify-content: center;
        align-items: center;
        transition: all 0.3s;
    }

    .active-view, 
    .active-view *{
        transition: all 0.3s;
    }

    .active-view{
        background-color: #2c3e50;;
    }

    .active-view p{
        font-weight: 600;
        transform: scale(1.25);
        color: #f2f2f2;
    }


    



</style>
