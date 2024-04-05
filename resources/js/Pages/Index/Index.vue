<template>
    <!-- <MainLayout> -->
        <div>
            <h1>Vue: Index</h1>
            <p>
                NOM : {{ name }}
                - AGE : {{ age }}
                - LANGAGE : {{ languages.filter(l=>l=='JS') }}
                - Hob : {{ hobies }}
            </p>
            <p>
                Dans un an tu auras : {{ age + 1 }}
            </p>
            <p>
                SEXE : {{ sexe }}
            </p>
            <p>
                NIVEAU : {{ level }}
            </p>
            <hr>
            <!-- <a href="/show">page Show</a> -->
            
        </div>
    <!-- </MainLayout> -->
</template>


<script setup>
    // import MainLayout from '../../Layout/MainLayout.vue';
    //1ere methode pour recuperer les props (😩)
    // const props = defineProps(['name','age','hobies']);
    //2ieme methode pour recuperer les props (😎)
    const props = defineProps({
        name: String,
        age: Number,
        hobies: Array,
        sexe: {
            type: String,
            required: true
        },
        level: {
            type: String,
            default: "L1"
        }
    });
    //
    // props.age = 30;❌
    console.log("AGE est : " + props.age)
    const languages = ['JS','php'];
</script>

<!-- <script>
    export default {
        layout: MainLayout
    }
</script> -->

