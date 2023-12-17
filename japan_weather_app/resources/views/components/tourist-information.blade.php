<template>
       <div>
           <h1>Japan Travel Information</h1>
           <ul>
               <li v-for="city in cities" :key="city">{{ city }}</li>
           </ul>
       </div>
   </template>

   <script>
   export default {
       data() {
           return {
               cities: ['Tokyo', 'Yokohama', 'Kyoto', 'Osaka', 'Sapporo', 'Nagoya'],
           };
       },
   };
   </script>