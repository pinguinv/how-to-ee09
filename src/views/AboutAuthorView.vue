<script setup>



</script>

<template>

    <div class="container">
        <div class="half">
            <div class="description">
                <p>Nazywam się Michał Mrózek, mam loczki, lubię góralki i jestem uczniem technikum o profilu <span>technik programista</span>.</p>
                <p>Ten projekt poświęcony jest egzaminowi zawodowemu.</p>
                <p>Stworzonko po prawej to właśnie góralek.</p>
                <p>(jest blisko spokrewniony ze słoniami)</p>
                <p class="hidden">Góralki są kox :></p>
            </div>
            
        </div>
        <div class="half">
            <div class="goralek-container">
                <div class="goralek-foto">
                    <img src="/goralek.png" alt="góralek" title="góraliek :>">
                </div>
            </div>
        </div>
        
        
    </div>


</template>

<style scoped>

    div{
        display: flex;
    }

    .container{
        width: 100%;
        min-height: calc(100% - 50px);
        background-color: #2c3e50;;
        justify-content: center;
        font-size: 1.2rem;
    }

    span{
        font-family: monospace;
        background-color: hsl(210, 29%, 18%);
        padding: 2px 0;
    }

    .half{
        width: 50%;
        padding: 20px;
        justify-content: center;
    }

    .description{
        margin-top: 10%;
        width: 80%;
        flex-direction: column;
    }

    .description > p{
        text-align: center;
    }

    .hidden{
        color: #314559;
        user-select: none;
    }

    .goralek-container{
        width: 100%;
        height: 400px;
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


</style>
