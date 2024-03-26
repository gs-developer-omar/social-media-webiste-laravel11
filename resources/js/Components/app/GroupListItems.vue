<script setup>

import TextInput from "@/Components/TextInput.vue";
import GroupItem from "@/Components/app/GroupItem.vue";
import {ref} from "vue";

const searchKeyword = ref('');
</script>

<template>

  <TextInput :model-value="searchKeyword" placeholder="Type to search" class="w-full mt-3"/>
  <div class="mt-3 h-[200px] lg:flex-1 overflow-auto">
    <div v-if="false" class="text-gray-400 text-center p-3">
      You are not joined to any groups
    </div>
    <div v-else>
      <GroupItem
          image="https://steamuserimages-a.akamaihd.net/ugc/1018321379963947415/3FFF32585A1A73D5CC97692AFF9C902219CB7A38/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false"
          title="Laravel Developers"
          description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>

      <GroupItem
          image="https://steamuserimages-a.akamaihd.net/ugc/1018321379963947415/3FFF32585A1A73D5CC97692AFF9C902219CB7A38/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false"
          title="Vue.js Developers"
          description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
      <GroupItem
          image="https://steamuserimages-a.akamaihd.net/ugc/1018321379963947415/3FFF32585A1A73D5CC97692AFF9C902219CB7A38/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false"
          title="Laravel Developers"
          description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>

      <GroupItem
          image="https://steamuserimages-a.akamaihd.net/ugc/1018321379963947415/3FFF32585A1A73D5CC97692AFF9C902219CB7A38/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false"
          title="Vue.js Developers"
          description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
      <GroupItem
          image="https://steamuserimages-a.akamaihd.net/ugc/1018321379963947415/3FFF32585A1A73D5CC97692AFF9C902219CB7A38/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false"
          title="Laravel Developers"
          description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>

      <GroupItem
          image="https://steamuserimages-a.akamaihd.net/ugc/1018321379963947415/3FFF32585A1A73D5CC97692AFF9C902219CB7A38/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false"
          title="Vue.js Developers"
          description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
      <GroupItem
          image="https://steamuserimages-a.akamaihd.net/ugc/1018321379963947415/3FFF32585A1A73D5CC97692AFF9C902219CB7A38/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false"
          title="Laravel Developers"
          description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>

      <GroupItem
          image="https://steamuserimages-a.akamaihd.net/ugc/1018321379963947415/3FFF32585A1A73D5CC97692AFF9C902219CB7A38/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false"
          title="Vue.js Developers"
          description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
      <GroupItem
          image="https://steamuserimages-a.akamaihd.net/ugc/1018321379963947415/3FFF32585A1A73D5CC97692AFF9C902219CB7A38/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false"
          title="Laravel Developers"
          description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>

      <GroupItem
          image="https://steamuserimages-a.akamaihd.net/ugc/1018321379963947415/3FFF32585A1A73D5CC97692AFF9C902219CB7A38/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false"
          title="Vue.js Developers"
          description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
      <GroupItem
          image="https://steamuserimages-a.akamaihd.net/ugc/1018321379963947415/3FFF32585A1A73D5CC97692AFF9C902219CB7A38/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false"
          title="Laravel Developers"
          description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>

      <GroupItem
          image="https://steamuserimages-a.akamaihd.net/ugc/1018321379963947415/3FFF32585A1A73D5CC97692AFF9C902219CB7A38/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false"
          title="Vue.js Developers"
          description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
      <GroupItem
          image="https://steamuserimages-a.akamaihd.net/ugc/1018321379963947415/3FFF32585A1A73D5CC97692AFF9C902219CB7A38/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false"
          title="Laravel Developers"
          description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>

      <GroupItem
          image="https://steamuserimages-a.akamaihd.net/ugc/1018321379963947415/3FFF32585A1A73D5CC97692AFF9C902219CB7A38/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false"
          title="Vue.js Developers"
          description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
    </div>
  </div>
</template>

<style scoped>

</style>