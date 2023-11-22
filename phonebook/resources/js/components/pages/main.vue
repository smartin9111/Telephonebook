<template>
    <h1>main</h1>
</template>
<script setup>
import { onMounted, ref } from 'vue';

    let contacts = ref([])

    onMounted(async () => {
        getContacts()
        })

    const getContacts = async () =>{
        let response = await axios.get("api/get_all_contact")
        console.log('response', response)
    }
</script>
