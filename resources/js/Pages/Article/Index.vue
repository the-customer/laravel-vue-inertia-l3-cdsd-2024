<template>
    <div>
        <h1>La liste de articles <span @click="showForm = !showForm" > {{ showForm ? '-' : '+' }} </span></h1>
        <p v-if="!articles.length">Aucun article enregistré!!!</p>
        <div class="form" v-show="showForm">
            <form @submit.prevent="save" method="post">
                <h4>Add a new Article</h4>
                <input v-model="form.title" type="text" placeholder="Title">
                <textarea v-model="form.description" placeholder="Desciption" cols="30" rows="5"></textarea>
                <button :disabled="!form.title || !form.description">Add</button>
            </form>
        </div>
        <div class="row">
            <!-- <div class="card" v-for="article in articles" :key="article.id">
                <span>{{ article.id }}</span>
                <span>{{ article.title }}</span>
                <span>{{ article.description }}</span>
                <span>
                    <button>delete</button>
                </span>
                <small>
                    <Link :href="`articles/${article.id}`">Detail</Link>
                </small>
            </div> -->
            <!-- <CardSlot v-for="article in articles" :key="article.id">
                <template #id>
                   {{ article.id }}
                </template>
                <template #title>
                    {{ article.title }}
                </template>
                <template #description>
                    {{ article.description }}
                </template>
                <template #link>
                    <Link :href="`articles/${article.id}`">Detail</Link>
                </template>
            </CardSlot> -->
            <Card :withLink="true" :article="{...article,lien:true}" v-for="article in articles" :key="article.id"/>
        </div>
    </div>
</template>

<script setup>
import { Link, router } from "@inertiajs/vue3";
// import CardSlot from "@/Components/CardSlot.vue";
import Card from "@/Components/Card.vue";
import { reactive, ref } from "vue";

//
let showForm = ref(false);
//
const form = reactive({
    title:null,
    description:null
})
//
defineProps({
    articles: Array
})
//
const resetForm = () => {
    form.title = null;
    form.description = null;
    showForm.value = false;
}
//
const save = () => {
    router.post('/articles',form);
    resetForm();
}
</script>

<style scoped>
h1{
    display: flex;
}
h1 span:hover{
    background-color: blue;
    color: white;
}
h1 span{
    cursor: pointer;
    color: blue;
    margin-left: 20px;
    border: 1px solid blue;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-content: center;
}
    .row{
        display: flex;
        flex-wrap: wrap;
    }

    .form{
        display: flex;
        justify-content: center;
    }
    .form form{
        display: flex;
        flex-direction: column;
        width: 30%;
        background-color:lightskyblue;
        padding: 20px;
        border-radius: 5px;
    }

    .form form input, textarea{
        margin-bottom: 10px;
        padding: 10px;
        font-size: 16px;
    }
    .form form button{
        margin-bottom: 10px;
        padding: 10px;
        font-size: 16px;
        background-color: green;
        border-color: green;
        cursor: pointer;
    }
    .form form button[disabled]{
        background-color: gray;
        border: none;
    }
    .form form h4{
        color: white;
    }   
</style>