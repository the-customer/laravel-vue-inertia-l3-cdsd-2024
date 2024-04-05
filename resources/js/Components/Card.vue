<template>
    <div class="card">
        <span>{{ article.id }}</span>
        <span>{{ article.title }}</span>
        <span>{{ article.description }}</span>
        <span>
            <button>delete</button>
        </span>
        <small v-if="withLink">
            <Link :href="`articles/${article.id}`">Detail</Link>
        </small>
        <hr>
        <small v-if="article.lien">
            Lien : 
            <Link :href="`articles/${article.id}`">Detail</Link>
        </small>
    </div>
</template>


<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    article: Object,
    withLink:Boolean
})
</script>
<style>
button{
        background-color: red;
        color: white;
        padding: 5px 10px;
        border-color: red;
        margin: 5px;
    }

    .card{
        border: 2px solid lightblue;
        max-width: 300px;
        padding: 20px;
        border-radius: 10px;
        margin: 5px;
        width: 33%;
    }
    span{
        display: block;
    }
</style>
