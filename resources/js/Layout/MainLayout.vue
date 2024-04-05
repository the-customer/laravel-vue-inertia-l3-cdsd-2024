<template>
    <div>
        <ul>
            <li>
                <Link href="/show">page Show</Link>
            </li>
            <li>
                <Link href="/">page Index</Link>
            </li>
            <li>
                <Link href="/articles">Articles</Link>
            </li>
        </ul>
        <hr>
        <div class="slot">
            <h3>Timer : {{ timer }}</h3> 
            <slot></slot>

        </div>
    </div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

let timer = ref(0);

setInterval(()=>{
    timer.value ++;
},1000);

</script>

<style scoped>
    .slot{
        color: red;
        background-color: whitesmoke;
    }
    ul{
        border: 2px solid darkred;
        padding: 20px;
    }
</style>



