<script setup>

import PostItem from "@/Components/app/PostItem.vue";

const post1 = {
  user: {
    id: 1,
    avatar: 'https://randomuser.me/api/portraits/men/50.jpg',
    name: 'John Smith'
  },
  group: null,
  attachments: [
    {
      id: 1,
      name: 'test.png',
      url: 'https://steamuserimages-a.akamaihd.net/ugc/1018321379963947415/3FFF32585A1A73D5CC97692AFF9C902219CB7A38/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false',
      mime: 'image/png'
    },
    {
      id: 2,
      name: 'test2.png',
      url: 'https://steamuserimages-a.akamaihd.net/ugc/1018321379963947415/3FFF32585A1A73D5CC97692AFF9C902219CB7A38/?imw=512&amp;&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=false',
      mime: 'image/png'
    },
    {
      id: 3,
      name: 'MyDocument.docx',
      url: '#',
      mime: 'application/msword'
    },
  ],
  body: `
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eos fuga quam rem suscipit? Dolorem exercitationem fugit illo laborum libero magnam nisi nostrum quam quis voluptatum. Accusamus assumenda libero mollitia?</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eos fuga quam rem suscipit? Dolorem exercitationem fugit illo laborum libero magnam nisi nostrum quam quis voluptatum. Accusamus assumenda libero mollitia?</p>
    `,
  created_at: '2023-11-19 15:12'
}

const post2 = {
  user: {
    id: 1,
    avatar: 'https://randomuser.me/api/portraits/men/51.jpg',
    name: 'Martin Freeman'
  },
  group: {
    id: 1,
    name: 'Laravel Developers'
  },
  body: `
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eos fuga quam rem suscipit? Dolorem exercitationem fugit illo laborum libero magnam nisi nostrum quam quis voluptatum. Accusamus assumenda libero mollitia?</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eos fuga quam rem suscipit? Dolorem exercitationem fugit illo laborum libero magnam nisi nostrum quam quis voluptatum. Accusamus assumenda libero mollitia?</p>
    `,
  created_at: '2023-11-19 15:12'
}

</script>

<template>
  <div class="overflow-auto">
    <PostItem :post="post1"/>
    <PostItem :post="post2"/>
  </div>
</template>

<style scoped>

</style>
