<template>
    <div class="header" >
        <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
            <img :src="img" class="header-logo">
            <div class="header-text-motto">Professionalität ist unsere Stärke</div>
        </div>
    </div>
</template>
<script>
export default {
  data() {
    return {
      img: 'images/logo.png'
    };
  },
};
</script>

<style scoped>
  .header-logo {
    width: 150px;
    margin-left: 20px;
    margin-bottom: -15px;
  }
</style>