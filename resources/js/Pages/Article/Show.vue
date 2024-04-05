<template>
    <div>
        <h1>Detail d'un article</h1>
        <div class="row">
            <!-- <CardSlot>
                <template #id>
                   {{ article.id }}
                </template>
                <template #title>
                    {{ article.title }}
                </template>
                <template #description>
                    {{ article.description }}
                </template>
            </CardSlot> -->
            <Card :article="{...article,lien:true}" :withLink="false"/>
        </div>
    </div>
</template>

<script setup>
// import CardSlot from "@/Components/CardSlot.vue";
import Card from "@/Components/Card.vue";

defineProps({
    article: Object
})
</script>

<style scoped>
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

    .row{
        display: flex;
    }
</style>