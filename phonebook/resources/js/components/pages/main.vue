<!-- resources/js/components/ContactList.vue -->

<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
      <div class="max-w-md w-full space-y-8 p-8 bg-white shadow-md">
        <h1 class="text-2xl font-semibold text-center">Contact List</h1>
        <ul>
          <li v-for="(contact, index) in contacts" :key="contact.id">
            <div>
              <h2 class="text-lg font-semibold">{{ contact.name }}</h2>
              <img :src="contact.photo" alt="Contact Photo" class="mx-auto my-4 rounded-full" style="max-width: 100px; max-height: 100px;" />
              <p class="text-gray-700"><strong>Address:</strong> {{ contact.address }}</p>
              <p class="text-gray-700"><strong>Mailing Address:</strong> {{ contact.mailing_address }}</p>
              <div>
                <h3 class="text-lg font-semibold my-2">Emails:</h3>
                <ul class="list-disc ml-6">
                  <li v-for="email in contact.emails" :key="email.id" class="text-gray-700">{{ email.email }}</li>
                </ul>
              </div>
              <div>
                <h3 class="text-lg font-semibold my-2">Phone Numbers:</h3>
                    <ul class="list-disc ml-6">
                        <li v-for="phoneNumber in contact.phone_numbers" :key="phoneNumber.id" class="text-gray-700">{{ phoneNumber.phone_number }}</li>
                        </ul>
                </div>
            </div>
            <hr v-if="index < contacts.length - 1" class="my-4">
          </li>
        </ul>
      </div>
    </div>
  </template>

  <script setup>
  import { onMounted, ref } from 'vue';
  import axios from 'axios';

  let contacts = ref([]);

  onMounted(async () => {
    await getContacts();
  });

  const getContacts = async () => {
    try {
      let response = await axios.get("api/get_all_contact");
      contacts.value = response.data.contacts;
      console.log(response);
    } catch (error) {
      console.error("Error fetching contacts:", error);
    }
  };
  </script>
