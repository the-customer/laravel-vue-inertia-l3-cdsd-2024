<template>
    <div class="card">
        <span>
            <slot name="id"></slot>
        </span>
        <span>
            <slot name="title"></slot>
        </span>
        <span>
            <slot name="description"></slot>
        </span>
        <span>
            <button>delete</button>
        </span>
        <small>
            <slot name="link"></slot>
        </small>
    </div>
</template>


<script setup>
import { Link } from "@inertiajs/vue3";
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
        flex: 1;
    }
    span{
        display: block;
    }
</style>
