<template>

    <div class="container">
        <div class="main">
            <div class="welcome-text">
                <div class="welcome">Witaj przybyszu!</div>
                Zapewne trawiłeś na tę stronę w poszukiwaniu
                pomocy przy rozwiązywaniu egzaminu zawodowego... 
                Egzamin znajdziesz w zakładce zatytułowanej "Egzamin" 
                (któżby się spodziewał, prawda?), lecz póki co możesz
                pooglądać sobie słodkie zwierzątka jakimi są góralki. 
            </div>

            <div class="goralek-main">
                <div class="goralek-container">
                    <div class="goralek-foto-main">
                        <img src="/goralek3.png" alt="góralek">
                    </div>
                </div>
            </div>
        </div>

        <div class="other-goralki">
            <div class="uno-goralek">
                <div class="goralek-container">
                    <div class="goralek-foto">
                        <img src="/goralek4.png" alt="góralek">
                    </div>
                </div>
            </div>
            <div class="uno-goralek">
                <div class="goralek-container">
                    <div class="goralek-foto">
                        <img src="/goralek1.png" alt="góralek">
                    </div>
                </div>
            </div>
            <div class="uno-goralek">
                <div class="goralek-container">
                    <div class="goralek-foto">
                        <img src="/goralek2.png" alt="góralek">
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
