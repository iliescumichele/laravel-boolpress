<template>
    <div class="error404">
        <div class="border-error404">
            <div class="top-white-line"></div>
            <h1>ERRORE 404</h1>
            <p>Pagina non trovata</p>
            <div class="bottom-white-line"></div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Error404Comp'
}
</script>

<style lang="scss" scoped>
    .error404{
        height: calc(100vh - 185px);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 10px;
        position: relative;

        .border-error404{
            width: 400px;
            height: 140px;
            position: relative;
            text-align: center;


            border: 5px solid #1b3c59;
            padding: 25px;
        }

        .top-white-line{
            position: absolute;
            top: -10px;
            left: 10%;
            background: #ffdc9a;
            width: 60px;
            height: 20px;
        }
        .bottom-white-line{
            position: absolute;
            bottom: -10px;
            right: 20%;
            background: #ffdc9a;
            width: 60px;
            height: 20px;
        }

        .border-error404 .top-white-line{
            animation: top-anim 2s infinite linear;
        }
        .border-error404 .bottom-white-line{
            animation: bott-anim 2s infinite linear;
        }

        @keyframes top-anim {
            0% {
                left: 10%;
                top: -10px;
            }
            30% {
                left: 93%;
                top: -10px;
            }
            40% {
                left: 93%;
                top: 100%;
            }
            70% {
                left: 0;
                top: 100%;
            }
            90% {
                left: -15px;
                top: -15px;
            }
            100% {
                left: 10%;
                top: -15px;
            }
        }


        @keyframes bott-anim {
            0% {
                bottom: -10px;
                right: 20%;
            }
            30% {
                right: 93%;
                bottom: -10px;
            }
            40% {
                right: 93%;
                bottom: 100%;
            }
            70% {
                right: 0;
                bottom: 100%;
            }
            90% {
                right: -15px;
                bottom: -10px;
            }
            100% {
                bottom: -10px;
                right: 20%;
            }
        }
    }
</style>
