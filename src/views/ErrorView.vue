<script setup>

</script>

<template>

    <div class="error-container">
        <div class="error-box">
            <div class="error-big">
                <p>Error</p>
                <p>404 Not Found (kup mydło)</p>
            </div>
            <div class="error-smol">
                <p>Nie no, tak na poważnie to nie wpisuj byle czego w URL-u, 
                    bo i tak nie zhakujesz tej strony. Na górze jest menu, 
                    którym wrócisz w cywilizowane okolice.</p>
                <p></p>
            </div>
        </div>
        
    </div>

</template>

<style scoped>

    div{
        display: flex;
    }

    .error-container,
    .error-big,
    .error-smol{
        width: 100%;
        justify-content: center;
    }

    .error-container{
        height: 80%;
        align-items: center;
        font-size: 1.2rem;
    }

    .error-box{
        width: 450px;
        height: 450px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 35px;
        border-radius: 80px;
        background-color: rgba(44, 62, 80, 0.7);
    }

    .error-big{
        flex-direction: column;
        align-items: center;
        font-family: monospace;
    }


    .error-big > p:first-child {
        font-size: 4.8rem;
    }

    .error-smol{
        text-align: center;
    }

</style>
