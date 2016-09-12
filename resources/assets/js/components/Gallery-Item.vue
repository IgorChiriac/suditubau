<template>
<ul class="masonryContainer">
  <li v-for="group in groups" class="group-photo grid-item">
    <a class="grouped_elements" rel="{{group.groupName}}" href="images/{{group.folder}}/{{group.smallImage}}">
        <span class="caption">
            <h2>{{group.caption}}</h2>
        </span>
    <img v-bind:src="'images/' + group.folder + '/' + group.imageHover" alt=""/></a>
    <div class="hidden">
        <a v-for="image in group.picturesArray" class="grouped_elements" rel="{{group.groupName}}"
            href="images/{{group.folder}}/{{image}}">
            <img v-bind:src="'images/' + group.folder + '/' + image" alt=""/></a>
    </div>
  </li>
</ul>
</template>
<script>
  export default {
  data() {
      return {
        groups: window.galleryData
      };
    }
  }
</script>
